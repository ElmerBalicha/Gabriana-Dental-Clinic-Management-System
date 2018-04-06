<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('schedId');
            $table->date('date')->nullable();
            //$table->string('services');
            $table->time('timeFrom')->nullable();
            $table->time('timeTo')->nullable();
            $table->string('opStatus')->nullable();
            $table->integer('patID')->unsigned();
            $table->integer('dentID')->unsigned();
            $table->integer('servID')->unsigned();
            $table->foreign('patID')->references('patID')->on('patients')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('dentID')->references('dentID')->on('dentists')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('servID')->references('servID')->on('services')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropifExists('schedules');
    }
}
