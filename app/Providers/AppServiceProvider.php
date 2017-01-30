<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


// La línea siguiente es para que funcione la migracion de "make:auth" con versiones anteriores a la 5.7.7 de mysql del servidor, ahora tenemos 5.5.x

use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
