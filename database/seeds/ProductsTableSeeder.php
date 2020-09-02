<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		 $categoryId = DB::table('categories')->pluck('id')->toArray();
         $tagsId = DB::table('tags')->pluck('id')->toArray();


		 $faker =Factory::create();
             DB::table('products')->insert([
            'productname'=>$faker->name,
			'price'=>$faker->randomNumber(4),
			
            'category_id' => $faker->randomElement($categoryId),            
            'tag_id' => $faker->randomElement($tagsId),           
		]);
		
		
        
    }
}
