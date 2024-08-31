<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = Email::where('email', $request->email)->first();

        if ($email) {
            return redirect()->back()->with('info', 'Thank you, you already submitted your email. Please stay tuned!');
        } else {
            Email::create(['email' => $request->email]);
            return redirect()->back()->with('success', 'Thank you for subscribing, Please stay tuned!');
        }
    }
}
