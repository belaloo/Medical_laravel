<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicMajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_majors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('major_id')->unsigned();
            $table->integer('clinic_id')->unsigned();

            $table->foreign('major_id')->references('id')->on('majors')
                ->onDelete('cascade');
            $table->foreign('clinic_id')->references('id')->on('clinics')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinic_majors');
    }
}