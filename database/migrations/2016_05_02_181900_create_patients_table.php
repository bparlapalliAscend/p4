<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('patients', function (Blueprint $table) {
       
        $table->increments('id');

        $table->timestamps();

        $table->string('firstname');
        $table->string('lastname');   
        $table->string('description');        
        $table->integer('doctor_id')->unsigned();
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('patients');
    }
}
