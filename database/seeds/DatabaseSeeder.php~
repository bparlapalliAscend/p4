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
     DB::statement('SET FOREIGN_KEY_CHECKS=0;');
           $this->call(SpecialityTableSeeder::class);
    	    $this->call(UsersTableSeeder::class);
          $this->call(PatientsTableSeeder::class);
          $this->call(PatientnotesTableSeeder::class);
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
         
          
    }
}
