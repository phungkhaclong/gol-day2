<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SchoolSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            UserRoleSeeder::class,
            PermissionGroupSeeder::class,
            PermissionSeeder::class,
            TagSeeder::class,
            RolePermissionSeeder::class,

        ]);
    }
}
