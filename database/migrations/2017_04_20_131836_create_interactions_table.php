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

            $table->primary('interactionID');
            $table->integer('studentID')->unsigned();
            $table->string('who_contacted')->unique();
            $table->timestamps('date_contacted');
            $table->string('type');
            $table->string('location');
            $table->string('event');
            $table->string('subject');
            $table->string('notes')->nullable();

            $table->foreign('studentID')->references('studentID')->on('forms');

            $table->foreign('who_contacted')->references('user_name')->on('studentworkers', 'admins', 'admissions');
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
