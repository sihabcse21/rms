<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRationConfigDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ration_config_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('config_id')->unsigned();
            $table->integer('sku_id')->unsigned();
            $table->timestamps();
            $table->foreign('config_id')->references('id')->on('ration_configurations');
            $table->foreign('sku_id')->references('id')->on('skus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ration_config_details');
    }
}
