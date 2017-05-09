<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['name' => 'Uberlândia', 'states_id' => 13],
            ['name' => 'São Paulo', 'states_id' => 25],
        ]);

    }
}
