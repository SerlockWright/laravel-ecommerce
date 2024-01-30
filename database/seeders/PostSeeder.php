<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //cach 1:
        for ($i = 0; $i < 20; $i++) {
            DB::table('posts')->insert([
                'title' => Str::random(10),
                'description' => Str::random(20),
               'status' => 1,
                'publish' => date('Y-m-d'),
                'user_id' => 1,
            ]);
        }
    }
}
