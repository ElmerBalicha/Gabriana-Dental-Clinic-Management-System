<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('apptid');
            $table->date('scheduledDate');
            $table->string('services');
            $table->string('invUsed');
            $table->time('time_from');
            $table->time('time_to');
            $table->integer('discount')->nullable();
            $table->integer('bill');
            $table->string('opStatus');

            $table->unsignedInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
