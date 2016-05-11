<?php

use Illuminate\Database\Seeder;

class SpecialityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      		  DB::table('specialities')->insert([
       		 'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      		    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
     		    'speciality' => 'cardiologist',
      		    'description' => 'testpass1'
    		  ]);
    		  
    		   DB::table('specialities')->insert([
       		 'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      		    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
     		    'speciality' => 'anaesthesian',
      		    'description' => 'testpass1'
    		  ]);
    		  
    		   DB::table('specialities')->insert([
       		 'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      		    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
     		    'speciality' => 'psychiatrist',
      		    'description' => 'testpass1'
    		  ]);
    		  
    		   DB::table('specialities')->insert([
       		 'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      		    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
     		    'speciality' => 'ob-gyn',
      		    'description' => 'testpass1'
    		  ]);
    		  
    		   DB::table('specialities')->insert([
       		 'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      		    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
     		    'speciality' => 'paediatrician',
      		    'description' => 'testpass1'
    		  ]);
    		  
    		   DB::table('specialities')->insert([
       		 'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      		    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
     		    'speciality' => 'gynecologist',
      		    'description' => 'testpass1'
    		  ]);
    }
}
