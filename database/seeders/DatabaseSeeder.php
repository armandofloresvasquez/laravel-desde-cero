<?php

namespace Database\Seeders;
//Importamos la definicion de Product
use App\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $products = Product::factory(50)->create();
    }
}
