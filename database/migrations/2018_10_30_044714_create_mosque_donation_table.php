<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMosqueDonationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mosque_donation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_mosque')->unsigned();
            $table->bigInteger('id_master_donation')->unsigned();
            $table->bigInteger('minimal');
            $table->text('keterangan');
            $table->enum('status',['aktif','tidak aktif']);
            $table->timestamps();

            $table->foreign('id_mosque')->references('id')->on('masjidku');
            $table->foreign('id_master_donation')->references('id')->on('master_donation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mosque_donation');
    }
}
