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
            'title' => 'テスト1',
            'content' => 'これはテストです。',
            'user_id'=>1,
        ]);
        DB::table('things')->insert([
            'title' => 'テスト2',
            'content' => 'これはテストです。',
            'user_id'=>1,
        ]);
        DB::table('things')->insert([
            'title' => 'テスト3',
            'content' => 'これはテストです。',
            'user_id'=>2,
        ]);
        DB::table('things')->insert([
            'title' => 'テスト4',
            'content' => 'これはテストです。',
            'user_id'=>2,
        ]);
        DB::table('things')->insert([
            'title' => 'テスト5',
            'content' => 'これはテストです。',
            'user_id'=>3,
        ]);
        DB::table('things')->insert([
            'title' => 'テスト6',
            'content' => 'これはテストです。',
            'user_id'=>3,
        ]);
        DB::table('things')->insert([
            'title' => 'テスト7',
            'content' => 'これはテストです。',
            'user_id'=>4,
        ]);
    }
}
