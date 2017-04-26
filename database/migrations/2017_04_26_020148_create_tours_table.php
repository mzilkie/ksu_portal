<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tours', function (Blueprint $table) {
            $table->engine = 'InnoDB';          
            $table->integer('interactionID')->unsigned();
            $table->string('TourGuide');
            $table->string('program1');
            $table->string('program2')->nullable();
            $table->string('program3')->nullable();
            $table->boolean('campusHousing');
            $table->boolean('individualTour');
        });

        Schema::table('tours', function($table) {
            $table->foreign('interactionID')->references('interactionID')->on('interactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
