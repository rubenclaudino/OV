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
            ['name' => 'admin', 'display_name' => 'Admin'],
            ['name' => 'local_admin', 'display_name' => 'Local Admin'],
            ['name' => 'dentist', 'display_name' => 'Dentist'],
            ['name' => 'professor', 'display_name' => 'Professor'],
            ['name' => 'investor', 'display_name' => 'Investor'],
            ['name' => 'consultant', 'display_name' => 'Consultant'],
            ['name' => 'receptionist', 'display_name' => 'Receptionist'],
        ]);
    }
}
