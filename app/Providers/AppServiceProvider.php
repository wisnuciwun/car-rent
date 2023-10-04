<?php

namespace App\Providers;

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
            // $car_type_list = 'This is a universal variable';
            $car_type_list = array('Sedan', 'Hatchback', 'MPV', 'Minivan', 'Microbus', 'Bus');
            $car_type_list_dropdown = array('Sedan' => 'Sedan', 'Hatchback' => 'Hatchback', 'MPV' => 'MPV', 'Minivan' => 'Minivan', 'Microbus' => 'Microbus', 'Bus' => 'Bus');

            $view
                ->with('car_type_list', $car_type_list)
                ->with('car_type_list_dropdown', $car_type_list_dropdown);
        });
    }
}