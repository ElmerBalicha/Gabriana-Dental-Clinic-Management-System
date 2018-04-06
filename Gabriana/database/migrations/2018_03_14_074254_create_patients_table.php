<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('patID');
            $table->string('name');
            $table->string('address');
            $table->string('occupation')->nullable();
            $table->string('patientTelNo')->nullable();
            $table->string('status')->nullable();
            $table->date('birthDate')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('medconditions')->nullable();
            $table->string('allergies')->nullable();
            $table->integer('balance')->nullable();
            $table->string('patStatus')->nullable();
            $table->timestamps();

            $table->integer('dentID')->unsigned()->nullable();
            $table->foreign('dentID')->references('dentID')->on('dentists')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
