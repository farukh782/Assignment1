<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class CategoriesTableSeeder extends Seeder
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
		    DB::table('categories')->insert([
            'categoryname'=>$faker->word,
            'user_id' => $faker->randomElement($userIds)            
		]);
			
			
    }
}
