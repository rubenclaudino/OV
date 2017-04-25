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
        $this->call(DentalPlanTypesTableSeeder::class);
        $this->call(ItemTypesTableSeeder::class);
        $this->call(ReferralsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SpecialtiesTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);
        $this->call(ClinicsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AppointmentTypesTableSeeder::class);

        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
    }
}
