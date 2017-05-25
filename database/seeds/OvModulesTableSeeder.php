<?php

use Illuminate\Database\Seeder;

class OvModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ovmodules')->insert([
            ['module_name' => 'Módulo de Administração', 'percent_complete' => 0],
            ['module_name' => 'Módulo de Relatórios', 'percent_complete' => 0],
            ['module_name' => 'Módulo de Usuários', 'percent_complete' => 0],
            ['module_name' => 'Módulo Controle de Estoque', 'percent_complete' => 0],
            ['module_name' => 'Módulo de Mensagens', 'percent_complete' => 0],
            ['module_name' => 'Módulo de Finaneiro', 'percent_complete' => 0],
            ['module_name' => 'Módulo de Convênios', 'percent_complete' => 0],
            ['module_name' => 'Módulo de Escola', 'percent_complete' => 0],
            ['module_name' => 'Módulo de Procedimentos', 'percent_complete' => 0],
            ['module_name' => 'Módulo de Agenda', 'percent_complete' => 0],
            ['module_name' => 'Módulo de Consultaria', 'percent_complete' => 0],
            ['module_name' => 'Módulo de Pacientes', 'percent_complete' => 0],
        ]);
    }
}
