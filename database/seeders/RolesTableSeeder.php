<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            'super_admin',
            'institution_admin',
            'student'
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
