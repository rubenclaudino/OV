<?php

use Illuminate\Database\Seeder;

class DentalPlanTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dental_plan_types')->insert([
            ['name' => 'DP1', 'description' => 'Dental plan 1'],
            ['name' => 'DP2', 'description' => 'Dental plan 2'],
            ['name' => 'DP3', 'description' => 'Dental plan 3'],
            ['name' => 'DP4', 'description' => 'Dental plan 4'],
        ]);
    }
}
