<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class Products_OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		 $ProductIds = DB::table('products')->pluck('id');
		 $OrderIds = DB::table('orders')->pluck('id');
		
			$faker =Factory::create();
			 foreach (range(1, 50) as $index) {
			DB::table('products_orders')->insert([
			 'quantity'=>$faker->randomNumber(2),
			 'status'=>$faker->word,
			 'product_id'=> $faker->randomElement($ProductIds),
			 'order_id'  => $faker->randomElement($OrderIds)            
		]);
    }
}
}
