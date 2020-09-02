<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $faker =Factory::create();
		
            DB::table('tags')->insert([
            'tagname'=>$faker->name,
			]);
    }
}
