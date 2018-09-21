<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMosque36Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mosque36', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->increments();
            $table->string('name');
            $table->text('address');
            $table->decimal('longtitude',5,5);
            $table->decimal('latitude',5,5);
            $table->string('phone',15);
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
        Schema::dropIfExists('mosque36');
    }
}
