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
                'borough'         => 'Granada',
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
                'name'            => 'Odonto Granada',
                'owner_name'      => 'Luciene Oliveira Resende',
                'borough'         => 'Granada',
                'state'           => 'MG',
                'zip_code'        => '00000-000',
                'address'         => 'Alameda Raul Petronilho Pádua',
                'street_number'   => 144,
                'phone_1'         => '3432372002',
                'phone_2'         => null,
                'fax'             => null,
                'email'           => 'luciene@email.com',
                'website'         => null,
                'type'            => '1',
                'status'          => '1',
                'subscription_id' => 2
            ]
        ]);


    }
}
