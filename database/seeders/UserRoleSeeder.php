<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
