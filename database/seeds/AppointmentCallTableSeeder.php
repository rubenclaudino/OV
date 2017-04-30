<?php

use Illuminate\Database\Seeder;

class AppointmentCallTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointment_call')->insert([
            ['abb' => 'CD', 'name' => 'Celular Desligado'],
            ['abb' => 'CL', 'name' => 'Cai a ligação'],
            ['abb' => 'CXP', 'name' => 'Recado Caixa Postal'],
            ['abb' => 'MD', 'name' => 'Recado Madastra'],
            ['abb' => 'ML', 'name' => 'Mora Longe'],
            ['abb' => 'NA', 'name' => 'Ninguém atendeu'],
            ['abb' => 'NC', 'name' => 'Não conhece'],
            ['abb' => 'NE', 'name' => 'Telefone errado'],
            ['abb' => 'NML', 'name' => 'Mudou endereço'],
            ['abb' => 'NPA', 'name' => 'Não pode atender'],
            ['abb' => 'NPR', 'name' => 'Não passa recados'],
            ['abb' => 'NTL', 'name' => 'Não trabalha mais local'],
            ['abb' => 'OC', 'name' => 'Ocupado'],
            ['abb' => 'OK', 'name' => 'Conferido própio Cliente'],
            ['abb' => 'PD', 'name' => 'Recado Padastro'],
            ['abb' => 'PO', 'name' => 'Recado Padrinho'],
            ['abb' => 'RAV', 'name' => 'Recado avô(ó)'],
            ['abb' => 'RCN', 'name' => 'Recado cunhado(a)'],
            ['abb' => 'RCT', 'name' => 'Recado colega trabalho'],
            ['abb' => 'RD', 'name' => 'Recado madrinha'],
            ['abb' => 'RES', 'name' => 'Recado esposa(o)'],
            ['abb' => 'RFL', 'name' => 'Recado filha(o)'],
            ['abb' => 'RFU', 'name' => 'Recado Funcionária(o)'],
            ['abb' => 'RMA', 'name' => 'Recado mãe'],
            ['abb' => 'RIM', 'name' => 'Recado irmã'],
            ['abb' => 'RIMM', 'name' => 'Recado irmão'],
            ['abb' => 'RMI', 'name' => 'Recado amiga(o)'],
            ['abb' => 'RND', 'name' => 'Recado namorada(o)'],
            ['abb' => 'RNG', 'name' => 'Recado nora/genro'],
            ['abb' => 'RP', 'name' => 'Recado porteiro'],
            ['abb' => 'RPAI', 'name' => 'Recado pai'],
            ['abb' => 'RPA', 'name' => 'Recado prima(o)'],
            ['abb' => 'RPT', 'name' => 'Recado patrão'],
            ['abb' => 'RSB', 'name' => 'Recado sobrinha(o)'],
            ['abb' => 'RSG', 'name' => 'Recado sogra(o)'],
            ['abb' => 'RTI', 'name' => 'tia(o)'],
            ['abb' => 'RVZ', 'name' => 'recado vizinha(o)'],
            ['abb' => 'STL', 'name' => 'Sem telefone cadastrado'],
        ]);
    }
}
