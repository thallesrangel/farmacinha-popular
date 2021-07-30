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
        $this->app->bind('App\Repositories\Contracts\CollaboratorRepositoryInterface', 'App\Repositories\CollaboratorRepositoryEloquent',);
        $this->app->bind('App\Repositories\Contracts\UnityRepositoryInterface', 'App\Repositories\UnityRepositoryEloquent');
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
