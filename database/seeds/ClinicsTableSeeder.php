<?php

use Illuminate\Database\Seeder;

class ClinicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('clinics')->insert([
            [
                'name'            => 'DentX',
                'owner_name'      => 'DentX',
                'state'           => $faker->country,
                'zip_code'        => $faker->countryCode,
                'address'         => $faker->address,
                'street_number'   => $faker->numberBetween(1, 100),
                'phone_1'         => $faker->phoneNumber,
                'phone_2'         => $faker->phoneNumber,
                'fax'             => $faker->phoneNumber,
                'email'           => $faker->companyEmail,
                'website'         => $faker->safeEmailDomain,
                'type'            => $faker->word,
                'status'          => $faker->word,
                'subscription_id' => 1
            ],
            [
                'name'            => 'DentY',
                'owner_name'      => 'DentY',
                'state'           => $faker->country,
                'zip_code'        => $faker->countryCode,
                'address'         => $faker->address,
                'street_number'   => $faker->numberBetween(1, 100),
                'phone_1'         => $faker->phoneNumber,
                'phone_2'         => $faker->phoneNumber,
                'fax'             => $faker->phoneNumber,
                'email'           => $faker->companyEmail,
                'website'         => $faker->safeEmailDomain,
                'type'            => $faker->word,
                'status'          => $faker->word,
                'subscription_id' => 2
            ],
            [
                'name'            => 'DentZ',
                'owner_name'      => 'DentZ',
                'state'           => $faker->country,
                'zip_code'        => $faker->countryCode,
                'address'         => $faker->address,
                'street_number'   => $faker->numberBetween(1, 100),
                'phone_1'         => $faker->phoneNumber,
                'phone_2'         => $faker->phoneNumber,
                'fax'             => $faker->phoneNumber,
                'email'           => $faker->companyEmail,
                'website'         => $faker->safeEmailDomain,
                'type'            => $faker->word,
                'status'          => $faker->word,
                'subscription_id' => 3
            ]
        ]);


    }
}
