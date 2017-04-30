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
            ['name' => 'Encaminhado'],
            ['name' => 'Internet'],
            ['name' => 'Carta'],
            ['name' => 'Profissional'],
            ['name' => 'Luminoso'],
            ['name' => 'Panfleto'],
            ['name' => 'Telemarketing'],
            ['name' => 'Luminoso'],
            ['name' => 'Lista Telefônica']
        ]);
    }
}
