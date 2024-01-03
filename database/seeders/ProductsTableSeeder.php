<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = [
            [
                'id' => '1',
                'picture' => 'uploads/hoodie.jpg',
                'name' => 'Hoodie',
                'description' => 'A perfect balance of ',
                'price' => 4000000,
                'categories' => 'Furniture',
                'condition' => 'Like New',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '2',
                'picture' => 'uploads/bloetooth.jpg',
                'name' => "Bloetooth",
                'description' => 'A perfect balance of bloetooth',
                'price' => 3000000,
                'categories' => 'Furniture',
                'condition' => 'Like New',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '3',
                'picture' => 'uploads/sneakers.jpg',
                'name' => 'Sneakers',
                'description' => 'A perfect balance of shoes',
                'price' => 2300000,
                'categories' => 'Furniture',
                'condition' => 'Like New',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '4',
                'picture' => 'uploads/desk.jpg',
                'name' => 'Desk',
                'description' => 'A perfect balance of desk',
                'price' => 4500000,
                'categories' => 'Furniture',
                'condition' => 'Like New',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        Product::truncate();
        Product::insert($product);
    }
}
