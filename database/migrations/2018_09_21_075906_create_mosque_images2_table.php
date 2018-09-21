<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMosqueImages2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mosque_images2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_mosque')->unsigned()->comment('ID masjid dari table masjid');
            $table->string('file');
            $table->timestamps();

            $table->foreign('id_mosque')->references('id')->on('masjidku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mosque_images2');
    }
}
