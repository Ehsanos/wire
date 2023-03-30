<?php

namespace Database\Seeders;

use App\Models\CartItem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 15; $i++) {
            $item = CartItem::create([

                'product_id' => rand(1, 15),
                'order_id' => rand(1, 15),
                'number' => rand(1, 10),
            ]);
        }
    }
}
