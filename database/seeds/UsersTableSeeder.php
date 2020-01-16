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
            'name' => 'user',
            'email' => 'user@demo.com',
            'type' => 'user',
            'password' => bcrypt('password'),
        ]);
         DB::table('users')->insert([
            'name' => 'supplier',
            'email' => 'supplier@demo.com',
             'type' => 'supplier',
            'password' => bcrypt('password'),
        ]);
    }
}
