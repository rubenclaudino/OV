<?php

use Illuminate\Database\Seeder;

class ReferralsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('referrals')->insert([
            ['name' => 'Internet search'],
            ['name' => 'Newspaper'],
            ['name' => 'Website'],
            ['name' => 'By recommendation'],
        ]);
    }
}
