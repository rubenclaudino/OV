<?php

use Illuminate\Database\Seeder;

class AppointmentStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // Turn of Foriegn key check
        DB::table('appointment_statuses')->truncate(); //Just to handle already seeded values, first we empty then again seed
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // Turn on Foriegn key check again
        DB::table('appointment_statuses')->insert([
            ['name' => 'Agendado', 'class_name'     => 'appointment-status-booked'],
            ['name' => 'Confirmado', 'class_name'   => 'appointment-status-confirmed'],
            ['name' => 'Desmarcado', 'class_name'   => 'appointment-status-cancelled'],
            ['name' => 'Faltou', 'class_name'       => 'appointment-status-missed'],
            ['name' => 'Finalizado', 'class_name'   => 'appointment-status-finished'],
            ['name' => 'Esperando', 'class_name'   => 'appointment-status-waiting']
        ]);
    }
}
