<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'firstname' => 'bharath',
        'lastname' => 'Parlapalli',
        'description' => 'testpass1',
        'doctor_id' => 1,
    ]);
       DB::table('patients')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'firstname' => 'poori',
        'lastname' => 'Parlapalli',
        'description' => 'testpass1',
        'doctor_id' => 1,
    ]);
          DB::table('patients')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'firstname' => 'sam',
        'lastname' => 'P',
        'description' => 'testpass1',
        'doctor_id' => 2,
    ]);
    }
}
