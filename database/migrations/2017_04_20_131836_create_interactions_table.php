<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interactions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('interactionID');
            $table->integer('studentID')->unsigned();
            $table->string('who_contacted');
            $table->timestamp('date_contacted');
            $table->string('type');
            $table->string('location');
            $table->string('event');
            $table->string('subject');
            $table->string('notes')->nullable();
        });

        Schema::table('interactions', function($table) {
            $table->foreign('studentID')->references('studentID')->on('forms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interactions');
    }
}
