<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentworkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentworkers', function (Blueprint $table) {
            $table->primary('studentID');
            $table->string('name');
            $table->string('username')->unique();            
            $table->string('email')->unique();
            $table->string('password');
            $table->string('work_schedule');
            $table->boolean('status');
            $table->string('major');
            $table->string('academic_year');
            $table->timeestamps('last_login');
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
        Schema::dropIfExists('studentworkers');
    }
}
