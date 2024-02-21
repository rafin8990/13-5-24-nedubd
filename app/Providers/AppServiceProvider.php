<?php

namespace App\Providers;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        View::composer('*', function ($view) {
           
          
            $schoolCodeProvider = "100";
           
            $view->with('schoolCodeProvider', $schoolCodeProvider);
               
               
        });
    }
}
