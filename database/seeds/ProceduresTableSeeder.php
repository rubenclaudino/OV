<?php

use Illuminate\Database\Seeder;

class ProceduresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('procedures')->insert([
            ['title' => 'DP 1', 'url' => 'web.com', 'phone_1' => '783648237', 'phone_2' => '230874380', 'ans_code' => '123', 'clinic_id' => 1],
        ]);
    }
}
