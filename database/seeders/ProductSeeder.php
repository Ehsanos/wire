<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0;$i<=20;$i++){
        $product=Product::create([
            'name'=>Str::random('5'),
            'price'=>rand(1,50),
        ]);

    }
    }
}
