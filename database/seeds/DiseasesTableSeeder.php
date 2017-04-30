<?php

use Illuminate\Database\Seeder;

class DiseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diseases')->insert([
            ['title' => 'Asma'],
            ['title' => 'Anemica'],
            ['title' => 'Alergico'],
            ['title' => 'Doenca Sanguinea'],
            ['title' => 'Problemas Ósseos'],
            ['title' => 'Diabético'],
            ['title' => 'Epiléptico'],
            ['title' => 'Problemas Endocrinos'],
            ['title' => 'Problemas Emocionais'],
            ['title' => 'Doenças da Infáncia'],
            ['title' => 'Problemas Respiratórios'],
            ['title' => 'Deficiência Auditiva'],
            ['title' => 'Traumatismo de Rosto ou na Cabeça'],
            ['title' => 'Herpes'],
            ['title' => 'Hepatite'],
            ['title' => 'Febre Reumatica'],
            ['title' => 'Fraturas'],
            ['title' => 'Toma Anticoncepcional'],
            ['title' => 'Usa Drogas'],
            ['title' => 'Estágio de Desenvolvimento Ósseo'],
            ['title' => 'Defeitos de Nascença'],
            ['title' => 'Cirurgias Anteriores'],
            ['title' => 'Cancer'],
        ]);
    }
}
