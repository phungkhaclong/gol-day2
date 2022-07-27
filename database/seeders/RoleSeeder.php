<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->count(50)->create();
        for ($i = 0; $i <= 10; $i++) {
            DB::table('roles_permission')->insert([
                'permission_id' => Permission::select('id')->orderByRaw("RAND()")->first()->id,
                'role_id' => Role::select('id')->orderByRaw("RAND()")->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
