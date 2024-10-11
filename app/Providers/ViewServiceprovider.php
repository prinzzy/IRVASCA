<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\CartComposer;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Bind the CartComposer to all views
        View::composer('*', CartComposer::class); // '*' will bind it to all views
    }

    public function register()
    {
        // You can register additional bindings or services here
    }
}
