<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()  ->state([
            'name' => 'Default Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('123@123'),
            'type' => User::TYPE['admin'],
            'verified_at' => now(),
        ])->create();
        User::factory() ->count(5)->create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('users_roles')->insert([
                'user_id' => User::select('id')->orderByRaw("RAND()")->first()->id,
            'roles_id' => Role::select('id')->orderByRaw("RAND()")->first()->id,
                'created_at' => now(),
            'updated_at' => now(),
            ]);
        }
    }
}
