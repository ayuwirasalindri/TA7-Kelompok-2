<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                'id' => '1',
                'name' => 'Airpods',
                'type' => 'Electronic',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        Category::truncate();
        Category::insert($category);
    }
}
