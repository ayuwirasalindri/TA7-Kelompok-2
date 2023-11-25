<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'id' => '1',
                'name' => 'AAA',
                'email' => 'aaa@gmail.com',
                'password' => 'trplea',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        User::truncate();
        User::insert($user);
    }
}
