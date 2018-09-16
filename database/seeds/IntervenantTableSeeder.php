<?php

use Illuminate\Database\Seeder;
use App\Intervenant;

class IntervenantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's clear the users table first
        Intervenant::truncate();

        $faker = \Faker\Factory::create('en_CA');


        Intervenant::create([
            'nom' => 'Cheikh Wael',
            'email' => 'cheikh@test.com',
            'adresse' => 'metro cote vertu',
			'telephone' => '514-999-0000',
        ]);

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 14; $i++) {
            Intervenant::create([
				'nom' => $faker->name,
				'email' => $faker->email,
				'adresse' => $faker->address,
				'telephone' => $faker->phoneNumber,
            ]);
        }//
    }
}
