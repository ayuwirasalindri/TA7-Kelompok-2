<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
                'name' => 'Airpods',
                'description' => 'A perfect balance of high-fidelity',
                'price' => 4000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        Product::truncate();
        Product::insert($product);
    }
}
