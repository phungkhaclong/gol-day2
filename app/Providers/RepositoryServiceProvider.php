<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\PermissionGroup\PermissionGroupRepositoryInterface::class,
            \App\Repositories\PermissionGroup\PermissionGroupRepository::class,
        );

        $this->app->singleton(
            \App\Repositories\Permission\PermissionRepositoryInterface::class,
            \App\Repositories\Permission\PermissionRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
