<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0; $i < 10; $i++){

            DB::table('products')->insert([
                'name' => Str::random(10),
                'description' => Str::random(10),
                'count' => mt_rand(10,30),
                'price' => mt_rand(100,300),
                'views' => mt_rand(1,3),
            ]);
        }
    }
}
