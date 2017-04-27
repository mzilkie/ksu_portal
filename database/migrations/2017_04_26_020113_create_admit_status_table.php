<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmitStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('admit_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';          
            $table->integer('id')->unsigned();
            $table->integer('studentID')->unsigned();
            $table->string('admitStatus');
            $table->timestamp('admit_date');            
            $table->primary(['id', 'studentID']);
        });

        // Schema::table('admit_status', function($table) {
        //     $table->foreign('studentID')->references('studentID')->on('forms');
        // });
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
