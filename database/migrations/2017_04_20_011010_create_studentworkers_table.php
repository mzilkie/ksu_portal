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
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('first_name');
            $table->string('username')->unique();            
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('work_schedule')->nullable();
            $table->boolean('status')->nullable();
            $table->string('major')->nullable();
            $table->string('academic_year')->nullable();
            $table->timestamp('last_login')->nullable();
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
