<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RedirectController extends Controller
{
    public function handleRedirect()
    {
        $user = Auth::user();
        // Log::info('User role:', ['role' => $user->role]); // Log the user role

        if ($user->role === 'admin') {
            return redirect('/dashboard');
        } elseif ($user->role === 'customer') {
            return redirect('/shop');
        } elseif ($user->role === 'collaborator') {
            return redirect('/dashboard-collaborator');
        } else {
            return redirect('/'); // Default redirection for other roles
        }
    }
}
