<?php

namespace Database\Seeders;

use App\Thing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ThingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('things')->insert([
            'title' => Str::random(5),
            'content' => Str::random(10),
            'user_id'=>1,
        ]);
        DB::table('things')->insert([
            'title' => Str::random(5),
            'content' => Str::random(10),
            'user_id'=>1,
        ]);
        DB::table('things')->insert([
            'title' => Str::random(5),
            'content' => Str::random(10),
            'user_id'=>1,
        ]);
        DB::table('things')->insert([
            'title' => Str::random(5),
            'content' => Str::random(10),
            'user_id'=>1,
        ]);
        DB::table('things')->insert([
            'title' => Str::random(5),
            'content' => Str::random(10),
            'user_id'=>4,
        ]);
        DB::table('things')->insert([
            'title' => Str::random(5),
            'content' => Str::random(10),
            'user_id'=>6,
        ]);
        DB::table('things')->insert([
            'title' => Str::random(5),
            'content' => Str::random(10),
            'user_id'=>5,
        ]);
    }
}
