<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pois', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->double('latitude');
            $table->double('longitude');
            $table->addColumn('tinyInteger', 'liked', ['lenght' => 1, 'default' => null]);
            $table->addColumn('tinyInteger', 'viewed', ['lenght' => 1, 'default' => null]);
            $table->string('priority',255)->nullable();
            $table->text('description');
            $table->bigInteger('city_id')->nullable();
            $table->text('detail');
            $table->string('detail_info_copyright',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('website', 255)->nullable();
            $table->string('working_hours', 255)->nullable();
            $table->tinyInteger('zoom')->nullable();
            $table->double('radius')->nullable();
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
        Schema::dropIfExists('pois');
    }
}
