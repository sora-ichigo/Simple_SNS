<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => '田中',
            'email' => 'tanaka@example.com',
            'password' => bcrypt('password')
        ];

        $user = new User();
        $user->fill($data);
        $user->save();

        $data = [
            'name' => '佐藤',
            'email' => 'satou@example.com',
            'password' => bcrypt('password')
        ];

        $user = new User();
        $user->fill($data);
        $user->save();

        $data = [
            'name' => '伊藤',
            'email' => 'itou@example.com',
            'password' => bcrypt('password')
        ];

        $user = new User();
        $user->fill($data);
        $user->save();

        $data = [
            'name' => 'テストユーザー',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ];

        $user = new User();
        $user->fill($data);
        $user->save();
    }
}
