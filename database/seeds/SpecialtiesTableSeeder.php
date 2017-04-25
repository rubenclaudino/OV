<?php

use Illuminate\Database\Seeder;

class SpecialtiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialties')->insert([
            ['name' => 'Spec 1', 'description' => 'Desc 1'],
            ['name' => 'Spec 2', 'description' => 'Desc 2'],
            ['name' => 'Spec 3', 'description' => 'Desc 3'],
            ['name' => 'Spec 4', 'description' => 'Desc 4'],
        ]);
    }
}
