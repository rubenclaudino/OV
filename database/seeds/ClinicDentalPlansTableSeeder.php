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
            ['city_id' => 1, 'state_id' => 1, 'title' => 'Particular', 'url' => '', 'phone_1' => '', 'ans_code' => '', 'clinic_id' => 1],
            ['city_id' => 1, 'state_id' => 1, 'title' => 'DP 2', 'url' => 'web.com', 'phone_1' => '783648237', 'ans_code' => '123','clinic_id' => 1],
            ['city_id' => 1, 'state_id' => 1, 'title' => 'DP 3', 'url' => 'web.com', 'phone_1' => '783648237', 'ans_code' => '123','clinic_id' => 1],
            ['city_id' => 1, 'state_id' => 1, 'title' => 'DP 4', 'url' => 'web.com', 'phone_1' => '783648237', 'ans_code' => '123','clinic_id' => 1],
            ['city_id' => 1, 'state_id' => 1, 'title' => 'DP 5', 'url' => 'web.com', 'phone_1' => '783648237', 'ans_code' => '123','clinic_id' => 1],
        ]);
    }
}
