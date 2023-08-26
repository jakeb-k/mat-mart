<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mats')->insert([
            'name'=> 'yoga_mat1',
            'price'=> 10.99,
            'type'=> 'yoga',
            'rating'=> 1,
            'description'=> 'Specially fabricated mats used to prevent hands and feet slipping during asana practice in modern yoga as exercise.',
            'tags' => 'deals,yoga,fitness,health,yoga mat,meditation,yogi,namaste,exercise,zen,stretch,pilates,namaslay,peace,pose,cleanse,spiritual' 
        ]);
        DB::table('mats')->insert([
            'name'=> 'yoga_mat2',
            'price'=> 12.99,
            'type'=> 'yoga',
            'rating'=> 2,
            'description'=> 'Specially fabricated mats used to prevent hands and feet slipping during asana practice in modern yoga as exercise.',
            'tags' => 'deals,yoga,fitness,health,yoga mat,meditation,yogi,namaste,exercise,zen,stretch,pilates,namaslay,peace,pose,cleanse,spiritual' 
        ]);
        DB::table('mats')->insert([
            'name'=> 'yoga_mat3',
            'price'=> 8.99,
            'type'=> 'yoga',
            'rating'=> 3,
            'description'=> 'Specially fabricated mats used to prevent hands and feet slipping during asana practice in modern yoga as exercise.',
            'tags' => 'deals,yoga,fitness,health,yoga mat,meditation,yogi,namaste,exercise,zen,stretch,pilates,namaslay,peace,pose,cleanse,spiritual' 
        ]);

        DB::table('mats')->insert([
            'name'=> 'door_mat1',
            'price'=> 6.99,
            'type'=> 'door',
            'rating'=> 4,
            'description'=> 'a safe surface that can be used to clean footwear and prevent dirt from getting into a property.',
            'tags' => 'deals,door,welcome,home,door mat, welcome mat,clean,front door mat',
        ]);
        DB::table('mats')->insert([
            'name'=> 'door_mat2',
            'price'=> 8.99,
            'type'=> 'door',
            'rating'=> 5,
            'description'=> 'a safe surface that can be used to clean footwear and prevent dirt from getting into a property',
            'tags' => 'door,welcome,home,door mat, welcome mat,clean,front door mat',
        ]);
        DB::table('mats')->insert([
            'name'=> 'door_mat3',
            'price'=> 10.99,
            'type'=> 'door',
            'rating'=> 1,
            'description'=> 'a safe surface that can be used to clean footwear and prevent dirt from getting into a property',
            'tags' => 'door,welcome,home,door mat, welcome mat,clean,front door mat',
        ]);

        DB::table('mats')->insert([
            'name'=> 'car_mat1',
            'price'=> 16.99,
            'type'=> 'car',
            'rating'=> 2,
            'description'=> 'keep your vehicle clean and protected, shielding the carpet and surface underneath from dirt and damage.',
            'tags'=>'car,car mat,clean car,clean,protective,durable,automobile',
        ]);
        DB::table('mats')->insert([
            'name'=> 'car_mat2',
            'price'=> 18.99,
            'type'=> 'car',
            'rating'=> 3,
            'description'=> 'keep your vehicle clean and protected, shielding the carpet and surface underneath from dirt and damage.',
            'tags'=>'car,car mat,clean car,clean,protective,durable,automobile',
        ]);
        DB::table('mats')->insert([
            'name'=> 'car_mat3',
            'price'=> 20.99,
            'type'=> 'car',
            'rating'=> 4,
            'description'=> 'keep your vehicle clean and protected, shielding the carpet and surface underneath from dirt and damage.',
            'tags'=>'car,car mat,clean car,clean,protective,durable,automobile',
        ]);

    }
}
