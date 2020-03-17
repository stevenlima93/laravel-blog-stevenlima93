<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');

        for($i = 0; $i < 10; $i++){
            $category= new \App\Category();
            $category->title= $faker->sentence;
            $category->save();
        }
    }
}
