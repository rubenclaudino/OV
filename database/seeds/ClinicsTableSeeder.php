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
                'name'            => 'Odontovision',
                'owner_name'      => 'Ruben Matos',
                'borough'         => 'Roosevelt',
                'state'           => 'MG',
                'zip_code'        => '00000000',
                'address'         => 'Rua Francsisco Veira de Paiva',
                'street_number'   => '191',
                'phone_1'         => '34996427629',
                'phone_2'         => null,
                'fax'             => null,
                'email'           => 'Ruben@odontovision.com',
                'website'         => 'www.odontovision.com',
                'type'            => '1',
                'status'          => '1',
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
