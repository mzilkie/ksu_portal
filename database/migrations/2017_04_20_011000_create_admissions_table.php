<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();            
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('active')->nullable();
            $table->string('phone')->nullable();
            $table->integer('assigned_zones')->unsigned();
            $table->timestamp('last_login')->nullable();
            $table->timestamps();
        });

        Schema::table('admissions', function($table) {
            $table->foreign('assigned_zones')->references('zone')->on('aux_zones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admissions');
    }
}
