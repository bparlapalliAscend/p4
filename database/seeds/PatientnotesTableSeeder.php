<?php

use Illuminate\Database\Seeder;

class PatientnotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patientnotes')->insert([
        			'created_at' =>Carbon\Carbon::now()->toDateTimeString(),
        			'updated_at' =>Carbon\Carbon::now()->toDateTimeString(),
        			'note'=>'patient has complained of chest pain',
        			'patient_id'=>2        
        ]);
         DB::table('patientnotes')->insert([
        			'created_at' =>Carbon\Carbon::now()->toDateTimeString(),
        			'updated_at' =>Carbon\Carbon::now()->toDateTimeString(),
        			'note'=>'patient has complained of chest pain',
        			'patient_id'=>3       
        ]);
           DB::table('patientnotes')->insert([
        			'created_at' =>Carbon\Carbon::now()->toDateTimeString(),
        			'updated_at' =>Carbon\Carbon::now()->toDateTimeString(),
        			'note'=>'patient has complained of chest pain',
        			'patient_id'=>4       
        ]);
    }
}
