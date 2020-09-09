<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class Orders_ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		     $OrderIds = DB::table('orders')->pluck('id');
             $ProductIds = DB::table('products')->pluck('id');
		     
			 $faker =Factory::create();
			 foreach (range(1,50) as $index) {
			 DB::table('orders_products')->insert([	 
			 'product_id'=> $faker->randomElement($ProductIds),
			 'order_id'  => $faker->randomElement($OrderIds)            
	         ]);
             }
    }
}
