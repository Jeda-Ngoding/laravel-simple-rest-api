<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 25; $i++){
            Product::create([
                'name'=>'Product '.$i,
                'description'=>'Description Product '.$i,
                'price'=>rand(999999,000000),
            ]);
        }
    }
}
