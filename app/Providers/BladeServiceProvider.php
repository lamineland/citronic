<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('sidebartoview', function ($expression) {
            
            // check if the view is login.blade.php
            if (view('back.user.login')) {
                $var = $expression;
            } else {
                $var = false;
            }
            return "<?php echo ($var); ?>";
        });
    }
}
