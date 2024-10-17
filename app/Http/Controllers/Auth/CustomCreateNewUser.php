<?php

// app/Http/Controllers/Auth/CustomCreateNewUser.php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class CustomCreateNewUser
{
    const OTP_COOLDOWN_MINUTES = 1; // Cooldown period for OTP requests

    public function requestOtp(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        // Check if user already exists
        $user = User::where('email', $request->email)->first();

        // If the user already exists, prevent requesting a new OTP
        if ($user) {
            return response()->json(['error' => 'Email already exists. Cannot request OTP.'], 400);
        }

        // Generate OTP
        $otp = random_int(100000, 999999);

        // Check the cooldown period using cache
        $cacheKey = 'otp_requested_at:' . $request->email;

        if (Cache::has($cacheKey)) {
            return response()->json(['error' => 'Please wait before requesting a new OTP.'], 429);
        }

        // Send OTP via email asynchronously
        Mail::to($request->email)->queue(new OtpMail($otp));

        // Store the OTP and request time in the session
        $request->session()->put('user_data', [
            'name' => $request->name,
            'email' => $request->email,
            'otp' => $otp
        ]);
        Cache::put($cacheKey, now(), self::OTP_COOLDOWN_MINUTES * 60);

        return response()->json(['otp_sent' => true, 'message' => 'OTP sent to your email.']);
    }




    public function verifyOtp(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|string|email',
            'otp' => 'required|integer',
        ]);

        // Check if user data is stored in session
        $userData = $request->session()->get('user_data');

        if (!$userData || $userData['email'] !== $request->email || (int)$userData['otp'] !== (int)$request->otp) {
            return response()->json(['error' => 'Invalid OTP or email.'], 400);
        }

        // OTP is valid, inform user to proceed with registration
        return response()->json(['success' => true, 'message' => 'OTP verified, proceed to registration.']);
    }


    public function create(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Retrieve user data from session
        $userData = $request->session()->get('user_data');

        // Check if user data is present in session
        if (!$userData) {
            return response()->json(['error' => 'No user data found. Please request OTP again.'], 400);
        }

        // Ensure that the email matches
        if ($userData['email'] !== $request->email) {
            return response()->json(['error' => 'Email mismatch.'], 400);
        }

        // Create the user
        try {
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => Hash::make($request->password), // Hash the password
            ]);

            // Log in the user automatically
            Auth::login($user);
        } catch (\Exception $e) {
            return response()->json(['error' => 'User creation failed: ' . $e->getMessage()], 500);
        }

        // Optionally, remove the user data from the session after creation
        $request->session()->forget('user_data');

        // Return a success response with user data
        return response()->json(['success' => true, 'user' => $user]);
    }
}
