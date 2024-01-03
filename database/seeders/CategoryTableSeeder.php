<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Furniture', 'type' => 'Furniture'],
            ['name' => 'Electronic', 'type' => 'Electronics'],
            ['name' => 'Accessories', 'type' => 'Accessories'],
            ['name' => 'Clothes', 'type' => 'Clothing'],
            ['name' => 'Shoes', 'type' => 'Footwear'],
            ['name' => 'Books', 'type' => 'Books'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}