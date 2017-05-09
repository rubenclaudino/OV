<?php

use App\Patient;
use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            [
                'clinic_id' => 1,
                'first_name' => 'Marko',
                'last_name' => 'Admin',
                'phone_1' => '4823798237',
                'user_id' => 1,
                'observation' => 'Observation XY',
                'phone_landline' => '23423424',
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'clinic_id' => 1,
                'first_name' => 'Anthony',
                'last_name' => 'Pollard',
                'phone_1' => '3432240507',
                'user_id' => 1,
                'observation' => null,
                'phone_landline' => '23423424',
                'created_at' => \Carbon\Carbon::now()
            ]
        ]);

        Patient::find(2)->specialties()->attach([12]);
    }
}
