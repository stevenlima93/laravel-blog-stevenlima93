<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');
        for ($i= 0; $i< 6; $i++){
            $user= new \App\User();
            $user->name= $faker->lastName;
            $user->save();
        }

    }
}
