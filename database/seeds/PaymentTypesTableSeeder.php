<?php

use Illuminate\Database\Seeder;

class PaymentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_types')->insert([
            ['name' => 'Boleto'],
            ['name' => 'Cheque pré-datado'],
            ['name' => 'Débito Automatico'],
            ['name' => 'Depósito Cheque'],
            ['name' => 'Depósito Dinheiro'],
            ['name' => 'Direto Cheque'],
            ['name' => 'Direto Dinheiro'],
            ['name' => 'Transferência'],
        ]);
    }
}
