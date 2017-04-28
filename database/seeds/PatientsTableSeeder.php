<?php

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
            ['clinic_id' => 1, 'first_name' => 'Marko', 'last_name' => 'Admin', 'phone_1' => '4823798237']
        ]);
    }
}
