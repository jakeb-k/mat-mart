<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Bob",
            'email' => 'Bob@gmail.com',
            'role'=>1,
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name' => "Fred",
            'email' => 'Fred@gmail.com',
            'role'=>1,
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name' => "Jakey",
            'email' => 'j@j.com',
            'role'=>1,
            'favs'=>'4,5,8',
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'admin@mats.com',
            'role'=>0,
            'favs'=>'4,5,8',
            'password' => bcrypt('123456'),
        ]);
    }
}
