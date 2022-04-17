<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          DB::table('products')->insert([
            'name'=>'iPad Pro',
            'price'=>"1000",
            'description'=>"Do your work with the best device available on the market!",
            'category'=>"tablet",
            'gallery'=>"https://www.pngmart.com/files/21/iPhone-13-Pro-PNG.png"

          ]);

    }
}
