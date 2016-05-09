<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectDoctorsAndPatients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			 Schema::table('patients', function (Blueprint $table) {
			 	
			 		 $table->foreign('doctor_id')->references('id')->on('users');
			 });      
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {

            $table->dropForeign('patients_doctor_id_foreign');

        });
    }
}
