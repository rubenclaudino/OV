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
        $faker = Faker\Factory::create();

        $limit = 50;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('cities')->insert([
                'name' => $faker->city,
                'states_id' => \App\State::all()->random()->id
            ]);
        }

    }
}
