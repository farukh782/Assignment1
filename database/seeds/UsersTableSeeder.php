<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class UsersTableSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
			   $faker =Factory::create();	
	  	     
			 foreach (range(1,50) as $index){
	           DB::table('users')->insert([		 
		       'name' =>$faker->name,
               'email'=>$faker->email,
			   'phone_no'=>$faker->phoneNumber,
			   'address'=> $faker->address
			   ]);
             }
           
	}            

}