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
            ['color' => '#B3C90C', 'name' => 'admin', 'display_name' => 'Super Admin'],
            ['color' => '#1D1ABD', 'name' => 'local_admin', 'display_name' => 'Dentista Admin'],
            ['color' => '#1EA0CA', 'name' => 'dentist', 'display_name' => 'Dentista'],
            ['color' => '#940000', 'name' => 'professor', 'display_name' => 'Professor'],
            ['color' => '#0098A6', 'name' => 'investor', 'display_name' => 'Investidor'],
            ['color' => '#F02B9E', 'name' => 'consultant', 'display_name' => 'Free'],
            ['color' => '#E03D19', 'name' => 'receptionist', 'display_name' => 'Recepcionista'],
            ['color' => '#3D4236', 'name' => 'accountant', 'display_name' => 'Contador/a'],
        ]);
    }
}
