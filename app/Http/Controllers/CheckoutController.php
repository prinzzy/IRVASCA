<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        // Logic to handle payment

        // Assuming payment is successful, redirect to registration modal
        return redirect()->route('register.modal');
    }
}
