<?php

use Illuminate\Database\Seeder;

class ClinicDentalPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clinic_dental_plans')->insert([
            ['name' => 'DP 1', 'website' => 'web.com', 'phone_1' => '783648237', 'phone_2' => '230874380', 'clinic_id' => 1],
            ['name' => 'DP 2', 'website' => 'web.com', 'phone_1' => '783648237', 'phone_2' => '230874380', 'clinic_id' => 1],
            ['name' => 'DP 3', 'website' => 'web.com', 'phone_1' => '783648237', 'phone_2' => '230874380', 'clinic_id' => 1],
            ['name' => 'DP 4', 'website' => 'web.com', 'phone_1' => '783648237', 'phone_2' => '230874380', 'clinic_id' => 1],
            ['name' => 'DP 5', 'website' => 'web.com', 'phone_1' => '783648237', 'phone_2' => '230874380', 'clinic_id' => 1],
        ]);
    }
}
