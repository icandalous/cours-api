<?php

use Illuminate\Database\Seeder;
use App\Cours;

class CoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Cours::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Cours::create([
                'code' => "COURS".$i, 
                'titre' => $faker->word,
				'description' => $faker->paragraph,
				'prix' => $faker->numberBetween(0,200),
				'organisateur_id' => $faker->numberBetween(1,5)
            ]);
        }
    }
    
}
