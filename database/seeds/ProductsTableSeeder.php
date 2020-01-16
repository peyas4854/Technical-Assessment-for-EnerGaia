<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('products')->insert([
            'name' => 'Phone',
            'quantity' => '10',
           
        ]); DB::table('products')->insert([
            'name' => 'Tv',
            'quantity' => '10',
           
        ]);
    }
}
