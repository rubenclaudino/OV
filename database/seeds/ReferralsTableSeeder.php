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
            ['name' => 'Conhecido'],
            ['name' => 'TV'],
            ['name' => 'Rádio'],
            ['name' => 'Local'],
            ['name' => 'Outdoor'],
            ['name' => 'Professional'],
            ['name' => 'Internet'],
            ['name' => 'Lista Telefonica']
        ]);
    }
}
