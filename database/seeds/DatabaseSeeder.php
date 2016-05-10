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
    		$this->call(UsersTableSeeder::class);
         $this->call(DoctorsTableSeeder::class);
         $this->call(PatientsTableSeeder::class);
          $this->call(PatientnotesTableSeeder::class);
    }
}
