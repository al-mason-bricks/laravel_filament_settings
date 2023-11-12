<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FilamentSettingsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        \Reworck\FilamentSettings\FilamentSettings::setFormFields([
            //TODO:: add setting fields
        ]);
    }
}
