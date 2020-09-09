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
             $userIds = DB::table('users')->pluck('id');     
		     $faker =Factory::create();

		     foreach (range(1,50) as $index){
		      DB::table('orders')->insert([
			    'quantity'=>$faker->randomDigit,
			    'status'=>$faker->word,
				'date_expected'=>$faker->date($format = 'Y-m-d', $max = 'now'),
                'user_id' => $faker->randomElement($userIds)            
		       ]);
		     }    
	   
    }
}
