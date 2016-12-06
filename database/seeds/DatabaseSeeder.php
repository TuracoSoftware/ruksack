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
      DB::table('roles')->insert([
        'name' => 'super',
        'display_name' =>  'Project Developer',
        'description' => 'User sees all'
      ]);
      DB::table('roles')->insert([
        'name' => 'admin',
        'display_name' =>  'Administrator',
        'description' => 'General Organization & Location admin'
      ]);
      DB::table('roles')->insert([
        'name' => 'unit',
        'display_name' =>  'Unit',
        'description' => 'A unit is the end user who is registering for things'
      ]);
    }
}
