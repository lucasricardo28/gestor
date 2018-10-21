<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\HomeRepository::class, \App\Repositories\HomeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\RoleRepository::class, \App\Repositories\RoleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PermissionRepository::class, \App\Repositories\PermissionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CommunityRepository::class, \App\Repositories\CommunityRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\InstitutionsRepository::class, \App\Repositories\InstitutionsRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\RegionalRepository::class, \App\Repositories\RegionalRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PublicRepository::class, \App\Repositories\PublicRepositoryEloquent::class);
        //:end-bindings:
    }
}
