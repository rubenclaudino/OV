<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'admin', 'display_name' => 'Super Admin'],
            ['name' => 'local_admin', 'display_name' => 'Dentista Admin'],
            ['name' => 'dentist', 'display_name' => 'Dentista'],
            ['name' => 'professor', 'display_name' => 'Professor'],
            ['name' => 'investor', 'display_name' => 'Investidor'],
            ['name' => 'consultant', 'display_name' => 'Free'],
            ['name' => 'receptionist', 'display_name' => 'Recepcionista'],
            ['name' => 'accountant', 'display_name' => 'Contador/a'],
        ]);
    }
}
