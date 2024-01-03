<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Bag;
use Carbon\Carbon;

class BagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bag = [
            [
                'user_id' => '1',
                'product_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
            Bag::insert($bag);
    }
}
