<?php

use Illuminate\Database\Seeder;

class ItemTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_types')->insert([
            ['name' => 'Needle', 'description' => 'My cool needle', 'status' => 'some_status'],
            ['name' => 'Anesthetic', 'description' => 'My cool anesthetic', 'status' => 'some_status'],
            ['name' => 'Prosthetic', 'description' => 'My cool prosthetic', 'status' => 'some_status'],
        ]);
    }
}
