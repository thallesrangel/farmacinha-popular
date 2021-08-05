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
        $this->app->bind('App\Repositories\Contracts\PeopleRepositoryInterface', 'App\Repositories\PeopleRepositoryEloquent');
        $this->app->bind('App\Repositories\Contracts\RoleRepositoryInterface', 'App\Repositories\RoleRepositoryEloquent');
        $this->app->bind('App\Repositories\Contracts\CityRepositoryInterface', 'App\Repositories\CityRepositoryEloquent');
        $this->app->bind('App\Repositories\Contracts\LaboratoryRepositoryInterface', 'App\Repositories\LaboratoryRepositoryEloquent');
        $this->app->bind('App\Repositories\Contracts\StripeRepositoryInterface', 'App\Repositories\StripeRepositoryEloquent');
        $this->app->bind('App\Repositories\Contracts\MeasurementRepositoryInterface', 'App\Repositories\MeasurementRepositoryEloquent');
        $this->app->bind('App\Repositories\Contracts\DrugTypeRepositoryInterface', 'App\Repositories\DrugTypeRepositoryEloquent');
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
