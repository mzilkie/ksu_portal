<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->primary('taskID');
            $table->integer('studentID')->unsigned();
            $table->string('name');
            $table->boolean('high_priority');
            $table->string('status');
            $table->integer('completed_by');
            $table->string('notes')->nullable();
            $table->timestamps('date_completed')->nullable();
            $table->timestamps('date_assigned');

            $table->foreign('studentID')->references('studentID')->on('studentworkers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
