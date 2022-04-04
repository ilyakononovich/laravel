<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttractionPointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attraction_point', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('attraction_id')->unsigned();
            $table->foreign('attraction_id')->references('id')->on('attraction_types')->onDelete('cascade');
            $table->integer('point_id')->unsigned();
            $table->foreign('point_id')->references('id')->on('points')->onDelete('cascade');
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
        Schema::dropIfExists('attraction_point');
    }
}
