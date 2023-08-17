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
            'description'=> 'Specially fabricated mats used to prevent hands and feet slipping during asana practice in modern yoga as exercise.'
        ]);
        DB::table('mats')->insert([
            'name'=> 'yoga_mat2',
            'price'=> 12.99,
            'type'=> 'yoga',
            'description'=> 'Specially fabricated mats used to prevent hands and feet slipping during asana practice in modern yoga as exercise.'
        ]);
        DB::table('mats')->insert([
            'name'=> 'yoga_mat3',
            'price'=> 8.99,
            'type'=> 'yoga',
            'description'=> 'Specially fabricated mats used to prevent hands and feet slipping during asana practice in modern yoga as exercise.'
        ]);

        DB::table('mats')->insert([
            'name'=> 'door_mat1',
            'price'=> 6.99,
            'type'=> 'door',
            'description'=> 'a safe surface that can be used to clean footwear and prevent dirt from getting into a property.'
        ]);DB::table('mats')->insert([
            'name'=> 'door_mat2',
            'price'=> 8.99,
            'type'=> 'door',
            'description'=> 'a safe surface that can be used to clean footwear and prevent dirt from getting into a property'
        ]);DB::table('mats')->insert([
            'name'=> 'door_mat3',
            'price'=> 10.99,
            'type'=> 'door',
            'description'=> 'a safe surface that can be used to clean footwear and prevent dirt from getting into a property'
        ]);

        DB::table('mats')->insert([
            'name'=> 'car_mat1',
            'price'=> 16.99,
            'type'=> 'car',
            'description'=> 'keep your vehicle clean and protected, shielding the carpet and surface underneath from dirt and damage.'
        ]);DB::table('mats')->insert([
            'name'=> 'car_mat2',
            'price'=> 18.99,
            'type'=> 'car',
            'description'=> 'keep your vehicle clean and protected, shielding the carpet and surface underneath from dirt and damage.'
        ]);DB::table('mats')->insert([
            'name'=> 'car_mat3',
            'price'=> 20.99,
            'type'=> 'car',
            'description'=> 'keep your vehicle clean and protected, shielding the carpet and surface underneath from dirt and damage.'
        ]);

    }
}
