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
            $table->engine = 'InnoDB';
            $table->increments('taskID');
            $table->integer('studentID')->unsigned();
            $table->string('name');
            $table->boolean('high_priority');
            $table->string('status');
            $table->integer('completed_by');
            $table->string('notes')->nullable();
            $table->timestamp('date_completed')->nullable();
            $table->timestamps('date_assigned');
        });

        Schema::table('tasks', function($table) {
            $table->foreign('studentID')->references('id')->on('studentworkers');
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
