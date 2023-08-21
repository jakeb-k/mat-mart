<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            'content' => "This is a very GOOD mat for yoga. I can now do the downward dog without slipping. HIGHLY RECOMMEND!",
            'rating' => 5,
            'user_id'=>3,
            'mat_id' =>1,
        ]);
        DB::table('reviews')->insert([
            'content' => "This is a very BAD mat for yoga. I cannot do the downward dog without slipping. HIGHLY DISCOMMEND!",
            'rating' => 0,
            'user_id'=>3,
            'mat_id' =>1,
        ]);
        DB::table('reviews')->insert([
            'content' => "This is a very GOOD door mat. I love how effective it is. HIGHLY RECOMMEND!",
            'rating' => 4.85,
            'user_id'=>3,
            'mat_id' =>4,
        ]);
        DB::table('reviews')->insert([
            'content' =>"This is a very BAD door mat. I hate how ineffective it is. HIGHLY DISCOMMEND!",
            'rating' => 3.15,
            'user_id'=>3,
            'mat_id' =>4,
        ]);
        DB::table('reviews')->insert([
            'content' =>"This is a very GOOD car mat. I love how effective it is. HIGHLY RECOMMEND!",
            'rating' => 5,
            'user_id'=>3,
            'mat_id' =>7,
        ]);
        DB::table('reviews')->insert([
            'content' =>"This is a very BAD car mat. I hate how ineffective it is. HIGHLY DISCOMMEND!",
            'rating' => 0.5,
            'user_id'=>3,
            'mat_id' =>7,
        ]);
    }
}
