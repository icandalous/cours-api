
<?php

use Illuminate\Database\Seeder;
use App\Session;

class SessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Session::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
			$debut = $faker->date('Y-m-d', '2017-06-09');
            Session::create([
                'local' => $faker->word, 
                'debut' => $faker->date('Y-m-d', '2017-06-09'),
				'fin' => $faker->date('Y-m-d', '2020-06-09'),
				'capacite' => $faker->numberBetween(0,100),
				'intervenant_id' => $faker->numberBetween(1,10),
				'cours_id' => $faker->numberBetween(1,30)
            ]);
        }
    }
    
}