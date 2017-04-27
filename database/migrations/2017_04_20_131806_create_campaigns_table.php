<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('campaignID')->unsigned();
            $table->timestamp('run_date');
            $table->timestamp('follow_up_date')->nullable();
            $table->integer('userID');
            $table->string('notes')->nullable();
        });

        // Schema::table('campaigns', function($table) {
        //     $table->foreign('campaignID')->references('campaignID')->on('aux_campaigns')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
