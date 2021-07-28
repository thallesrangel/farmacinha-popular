<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
        //Abastract Class and Concrete class
        //Abastração e implementação - Inversão de dependência
        'App\Repositories\Contracts\CollaboratorRepositoryInterface', 'App\Repositories\CollaboratorRepositoryEloquent'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
