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
             $categoryId = DB::table('categories')->pluck('id');
             $tagsId = DB::table('tags')->pluck('id');		     
			 $faker =Factory::create();

		    foreach (range(1,50) as $index){
		      DB::table('products')->insert([
               'productname'=>$faker->word,
			   'price'=>$faker->randomNumber(4),	
               'category_id'=> $faker->randomElement($categoryId),            
               'tag_id'=> $faker->randomElement($tagsId),    
			    ]);
			 }    
    }
}
