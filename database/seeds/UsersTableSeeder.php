<?php

use App\User;
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
        $faker = Faker\Factory::create();
        DB::table('users')->insert([
            [
                'first_name'         => $faker->firstName,
                'last_name'          => $faker->lastName,
                'email'              => 'admin@admin.com',
                'password'           => bcrypt('123456'),
                'state'              => $faker->country,
                'zip_code'           => $faker->countryCode,
                'address'            => $faker->address,
                'street_number'      => $faker->numberBetween(1, 100),
                'phone_1'            => $faker->phoneNumber,
                'phone_2'            => $faker->phoneNumber,
                'phone_landline'     => $faker->phoneNumber,
                'whatsapp_number'    => $faker->phoneNumber,
                'nationality'        => $faker->word,
                'date_of_birth'      => $faker->dateTimeThisCentury,
                'gender'             => 0,
                'stripe_id'          => $faker->bankAccountNumber,
                'card_brand'         => $faker->word,
                'card_lasts_for'     => $faker->dateTimeThisCentury,
                'thai_ends_at'       => $faker->dateTimeThisCentury,
                'honors'             => $faker->sentence(5),
                'percentage'         => $faker->numberBetween(0, 100),
                'value'              => $faker->numberBetween(50, 100),
                'earn_percentage'    => $faker->numberBetween(0, 100),
                'uses_whatsapp'      => true,
                'resident_in_clinic' => true,
                'accept_calls'       => true,
                'clinic_id'          => 1,
                'cpf'                => $faker->word,
                'rg'                 => $faker->word,
                'cro'                => $faker->word,
                'observation'        => $faker->word,
            ],
            [
                'first_name'         => $faker->firstName,
                'last_name'          => $faker->lastName,
                'email'              => 'admin2@admin.com',
                'password'           => bcrypt('123456'),
                'state'              => $faker->country,
                'zip_code'           => $faker->countryCode,
                'address'            => $faker->address,
                'street_number'      => $faker->numberBetween(1, 100),
                'phone_1'            => $faker->phoneNumber,
                'phone_2'            => $faker->phoneNumber,
                'phone_landline'     => $faker->phoneNumber,
                'whatsapp_number'    => $faker->phoneNumber,
                'nationality'        => $faker->word,
                'date_of_birth'      => $faker->dateTimeThisCentury,
                'gender'             => 0,
                'stripe_id'          => $faker->bankAccountNumber,
                'card_brand'         => $faker->word,
                'card_lasts_for'     => $faker->dateTimeThisCentury,
                'thai_ends_at'       => $faker->dateTimeThisCentury,
                'honors'             => $faker->sentence(5),
                'percentage'         => $faker->numberBetween(0, 100),
                'value'              => $faker->numberBetween(50, 100),
                'earn_percentage'    => $faker->numberBetween(0, 100),
                'uses_whatsapp'      => true,
                'resident_in_clinic' => true,
                'accept_calls'       => true,
                'clinic_id'          => 1,
                'cpf'                => $faker->word,
                'rg'                 => $faker->word,
                'cro'                => $faker->word,
                'observation'        => $faker->word,
            ]
        ]);

        User::find(1)->roles()->attach([1,3]);
        User::find(2)->roles()->attach([3]);
    }
}
