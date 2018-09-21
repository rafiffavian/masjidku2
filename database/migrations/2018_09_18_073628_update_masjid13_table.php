<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMasjid13Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('mosques2', function (Blueprint $table) {
           
        });
        Schema::create('mosques2', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('name')->unsigned()->nullable();
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
        //
    }
}
