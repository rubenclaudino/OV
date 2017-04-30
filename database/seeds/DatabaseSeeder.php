<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ItemTypesTableSeeder::class);
        $this->call(ReferralsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SpecialtiesTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);
        $this->call(ClinicsTableSeeder::class);
        $this->call(ClinicDentalPlansTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AppointmentTypesTableSeeder::class);
        $this->call(AppointmentStatusesTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(DiseasesTableSeeder::class);

        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
    }
}
