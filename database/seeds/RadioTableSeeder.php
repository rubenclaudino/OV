<?php

use Illuminate\Database\Seeder;

class RadiologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('radiology')->insert([
            ['name' => 'Carpal'],
            ['name' => 'CD'],
            ['name' => 'CD e Modelo'],
            ['name' => 'Documentação Completa'],
            ['name' => 'Envelope'],
            ['name' => 'Envelope e Modelo'],
            ['name' => 'Modelo'],
            ['name' => 'Panorâmica'],
            ['name' => 'Pasta'],
            ['name' => 'Pasta e Modelo'],
            ['name' => 'Periapical'],
            ['name' => 'Radiografias'],
            ['name' => 'Traçados']
        ]);
    }
}
