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
            ['name' => 'Basic', 'number_of_users' => 50, 'amount' => 50, 'description' => 'Dental studio basic plan'],
            ['name' => 'Intermediate', 'number_of_users' => 500, 'amount' => 100, 'description' => 'Dental studio intermediate plan'],
            ['name' => 'Professional', 'number_of_users' => 5000, 'amount' => 500, 'description' => 'Dental studio professional plan'],
        ]);
    }
}
