<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name','admin')->first();
        $role_sub = Role::where('name','subscriber')->first();

        $admin = new User();
        $admin->name = 'Alanna';
        $admin->email = 'alanna@gmail.com';
        $admin->password = Hash::make('alanna');
        $admin->save();

        $admin->roles()->attach($role_admin);

        $sub = new User();
        $sub->name = 'Bob';
        $sub->email = 'bob@gmail.com';
        $sub->password = Hash::make('bobbob');
        $sub->save();

        $sub->roles()->attach($role_sub);
        
    }
}
