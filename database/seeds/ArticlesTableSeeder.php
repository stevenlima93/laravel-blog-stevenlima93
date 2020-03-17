<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');
        for($i=0; $i < 6; $i++){
            $article = new \App\Article();
            $article->title = $faker->sentence;
            $article->published = 1;
            $article->content = $faker->text;
            $article->summary = $faker->text;
            $article->category_id = rand(1, 10);
            $article->user_id= rand(1, 6);
            $article->save();
        }

    }
}
