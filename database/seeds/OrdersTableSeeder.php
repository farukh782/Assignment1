<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $userId = DB::table('users')->pluck('id');
       
		    $faker =Factory::create();
			 foreach (range(1, 50) as $index) {
		    DB::table('orders')->insert([
            'date_expected'=>$faker->date,
            'user_id' => $faker->randomElement($userId)            
		]);
	   
		}
	   
    }
}
