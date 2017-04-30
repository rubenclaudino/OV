<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            ['name' => 'Acre', 'abb' => 'AC'],
            ['name' => 'Alagoas', 'abb' => 'AL'],
            ['name' => 'Amapa', 'abb' => 'AP'],
            ['name' => 'Amazonas', 'abb' => 'AM'],
            ['name' => 'Bahia', 'abb' => 'BA'],
            ['name' => 'Ceara', 'abb' => 'CE'],
            ['name' => 'Distrito Federal', 'abb' => 'DF'],
            ['name' => 'Espirito Santo', 'abb' => 'ES'],
            ['name' => 'Goias', 'abb' => 'GO'],
            ['name' => 'Maranhão', 'abb' => 'MA'],
            ['name' => 'Mato Grosso', 'abb' => 'MT'],
            ['name' => 'Mato Grosso do Sul', 'abb' => 'MS'],
            ['name' => 'Minas Gerias', 'abb' => 'MG'],
            ['name' => 'Para', 'abb' => 'PA'],
            ['name' => 'Paraiba', 'abb' => 'PB'],
            ['name' => 'Parana', 'abb' => 'PR'],
            ['name' => 'Pernambuco', 'abb' => 'PE'],
            ['name' => 'Piaui', 'abb' => 'PI'],
            ['name' => 'Rio de Janeiro', 'abb' => 'RJ'],
            ['name' => 'Rio Grande do Norte', 'abb' => 'RN'],
            ['name' => 'Rio Grande do Sul', 'abb' => 'RS'],
            ['name' => 'Rondonia', 'abb' => 'RO'],
            ['name' => 'Roraima', 'abb' => 'RR'],
            ['name' => 'Santa Catarina', 'abb' => 'SC'],
            ['name' => 'São Paulo', 'abb' => 'SP'],
            ['name' => 'Sergipe', 'abb' => 'SE'],
            ['name' => 'Tocantins', 'abb' => 'TO'],

        ]);
    }
}
