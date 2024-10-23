<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Handle the login redirection.
     *
     * @param \Illuminate\Http\Request $request
     * @param mixed $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        // Example: redirect based on role
        if ($user->hasRole('admin')) {
            return redirect()->route('dashboard'); // Redirect admins to the dashboard
        }

        return redirect()->route('home.index'); // Redirect normal users
    }
}
