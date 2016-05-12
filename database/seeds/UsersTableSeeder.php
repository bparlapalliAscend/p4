<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('users')->insert([
       			 'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       			 'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       			 'name' => 'Jill',
       			 'password' => \Hash::make('helloworld'),
     			    'email' => 'jill@harvard.edu',
       		 'Speciality_id' => 1,
   		 ]);
   		 
   		 DB::table('users')->insert([
       			 'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       			 'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       			 'name' => 'Jamal',
       			 'password' => \Hash::make('helloworld'),
     			    'email' => 'jamal@harvard.edu',
       		 'Speciality_id' => 2,
   		 ]);
      
    }
}
