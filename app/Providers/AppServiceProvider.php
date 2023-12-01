<?php

namespace App\Providers;

use App\Repositories\BateriaRepositoryEloquent;
use App\Repositories\Interfaces\IBateriaRepository;
use App\Repositories\Interfaces\INotaRepository;
use App\Repositories\Interfaces\IOndaRepository;
use App\Repositories\Interfaces\ISurfistaRepository;
use App\Repositories\NotaRepositoryEloquent;
use App\Repositories\OndaRepositoryEloquent;
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
        $this->app->bind(IBateriaRepository::class, BateriaRepositoryEloquent::class);
        $this->app->bind(IOndaRepository::class, OndaRepositoryEloquent::class);
        $this->app->bind(INotaRepository::class, NotaRepositoryEloquent::class);

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
