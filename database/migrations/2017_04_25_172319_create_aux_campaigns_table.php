<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuxCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('aux_campaigns', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('campaignID');
            $table->string('campaign_name');
            $table->string('campaign_description');
            $table->string('criteria');
            $table->string('criteria_code');
        });
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
