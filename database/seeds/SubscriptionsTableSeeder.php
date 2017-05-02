<?php

use Illuminate\Database\Seeder;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscriptions')->insert([
            ['name' => 'Basic', 'number_of_users' => 1, 'amount' => 80, 'description' => 'Dental studio basic plan'],
            ['name' => 'Intermediate', 'number_of_users' => 3, 'amount' => 120, 'description' => 'Dental studio intermediate plan'],
            ['name' => 'Professional', 'number_of_users' => 6, 'amount' => 160, 'description' => 'Dental studio professional plan'],
        ]);
    }
}
