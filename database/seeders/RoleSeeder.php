<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->info = 'An administrator user';
        $role_admin->save();

        $role_sub = new Role();
        $role_sub->name = 'subscriber';
        $role_sub->info = 'A subscribed user';
        $role_sub->save();
    }
}
