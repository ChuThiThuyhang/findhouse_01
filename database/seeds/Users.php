<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullname' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'phonenumber' => '0094753573927',
            'username' => str_random(10),
            'password' => bcrypt('secret'),
            'address' => str_random(10),
            'role' => '0',
        ]);
    }
}
