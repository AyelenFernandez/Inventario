<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
/*use Bican\Roles\Models\Role;*/

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       


    $user =  \App\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('qwerty')
        ]);

/*$user -> attachRole($adminRole);
*/ 
    }

    
}