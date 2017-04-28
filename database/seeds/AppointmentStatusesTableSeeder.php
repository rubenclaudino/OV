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
        DB::table('appointment_statuses')->insert([
            ['name' => 'Agendado', 'class_name' => 'appointment-status-booked'],
            ['name' => 'Confirmado', 'class_name' => 'appointment-status-confirmed'],
            ['name' => 'Desmarcado', 'class_name' => 'appointment-status-cancelled'],
            ['name' => 'Faltou', 'class_name' => 'appointment-status-missed'],
            ['name' => 'Finalizado', 'class_name' => 'appointment-status-finished']
        ]);
    }
}
