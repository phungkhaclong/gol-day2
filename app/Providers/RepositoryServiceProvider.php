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
            \App\Repositories\Admin\PermissionGroup\PermissionGroupRepositoryInterface::class,
            \App\Repositories\Admin\PermissionGroup\PermissionGroupRepository::class,
            \App\Repositories\Admin\Permission\PermissionRepositoryInterface::class,
            \App\Repositories\Admin\Permission\PermissionRepository::class

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
