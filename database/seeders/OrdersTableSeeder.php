<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = [
            [
                'id' => '1',
                'name' => 'Airpods',
                'quantity' => 3,
                'eachprice' => 4000000,
                'totalprice' => 12000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        Order::truncate();
        Order::insert($order);
    }
}
