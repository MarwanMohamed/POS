<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'Admin',
            'is_admin' => '1',
        	'email' => 'admin@admin.com',
        	'password' => bcrypt(123456),
        ]);
    }
}


