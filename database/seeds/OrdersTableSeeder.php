<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()

    {
        factory(\App\Order::class,10)->create()->each(function ($Order){
            $Order->OrderProduct()->attach(\App\Product::all()->random(2));



        });

    }
}