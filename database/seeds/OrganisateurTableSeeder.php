<?php

use Illuminate\Database\Seeder;
use App\Organisateur;

class OrganisateurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's clear the users table first
        Organisateur::truncate();

        $faker = \Faker\Factory::create('en_CA');


        /*Organisateur::create([
            'nom' => 'Andalous',
            'email' => 'andalous@test.com',
            'adresse' => 'metro cote vertu',
			'telephone' => '514-999-9999',
        ]);*/

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 10; $i++) {
            Organisateur::create([
				'nom' => $faker->name,
				'email' => $faker->email,
				'adresse' => $faker->address,
				'telephone' => $faker->phoneNumber,
            ]);
        }//
    }
}
