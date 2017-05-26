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
            ['name' => 'Diagnóstico', 'color' => '#3D4236'],
            ['name' => 'Clinica Geral', 'color' => '#1EA0CA'],
            ['name' => 'Radiologia', 'color' => '#0098A6'],
            ['name' => 'Testes e Exames de Laboratório', 'color' => '#B3C90C'],
            ['name' => 'Prevenção', 'color' => '#785248'],
            ['name' => 'Odontopediatria', 'color' => '#940000'],
            ['name' => 'Dentística', 'color' => '#F02B9E'],
            ['name' => 'Endodontia', 'color' => '#1D1ABD'],
            ['name' => 'Periodontia', 'color' => '#9F72AD'],
            ['name' => 'Prótese', 'color' => '#522066'],
            ['name' => 'Cirurgia', 'color' => '#E03D19'],
            ['name' => 'Ortodontia', 'color' => '#3D8A13'],
            ['name' => 'Implantodontia', 'color' => '#4CBBD4'],
        ]);
    }
}
