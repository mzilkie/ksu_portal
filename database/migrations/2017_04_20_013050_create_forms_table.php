<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name'); 
            $table->string('last_name'); 
            $table->string('street_address'); 
            $table->string('street_address2')->nullable();  
            $table->string('city'); 
            $table->string('state');  
            $table->integer('zipcode'); 
            $table->string('country');  
            $table->string('sex'); 
            $table->integer('phone'); 
            $table->date('birthday'); 
            $table->string('email')->unique(); 
            $table->string('secondary_school');
            $table->timestamps('hs_grad_date')->nullable();  
            $table->string('start_semester'); 
            $table->integer('start_year'); 
            $table->integer('college_credit'); 
            $table->string('college_name')->nullable(); 
            $table->string('primary_major'); 
            $table->string('secondary_major')->nullable();  
            $table->string('other_interests')->nullable(); 
            $table->string('hear_about_us');  
            $table->string('other_hear')->nullable(); 
            $table->string('contact'); 
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
        Schema::dropIfExists('forms');
    }
}
