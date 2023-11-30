<?php

namespace App\Providers;

use App\Repositories\Interfaces\ISurfistaRepository;
use App\Repositories\SurfistaRepositoryEloquent;
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
        $this->app->bind(ISurfistaRepository::class, SurfistaRepositoryEloquent::class);

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
