<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->bigInteger('country_id');
            $table->double('latitude');
            $table->double('longitude');
            $table->double('ne_latitude');
            $table->double('ne_longitude');
            $table->double('sw_latitude');
            $table->double('sw_longitude');
            $table->string('purchase_id', 255);
            $table->bigInteger('zoom');
            $table->double('radius')->default(1);
            $table->tinyInteger('is_published')->default(0);
            $table->double('price');
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
        Schema::dropIfExists('cities');
    }
}
