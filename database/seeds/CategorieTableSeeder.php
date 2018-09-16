<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's clear the users table first
        Categorie::truncate();

        $faker = \Faker\Factory::create('en_CA');
		$catArray = array("coran","tajweed","arabe","memorisation","fiqh","informatique","mathematique","langue","test","autre");

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 10; $i++) {
            Categorie::create([
				'nom' => $catArray[$i],
				'description' => $faker->paragraph
            ]);
        }//
    }
}
