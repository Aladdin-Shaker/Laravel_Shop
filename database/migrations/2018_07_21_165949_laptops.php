<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Laptops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sectionId');
            $table->string('name');
            $table->integer('cpu');
            $table->string('gpu');
            $table->integer('ram');
            $table->string('hard');
            $table->string('color');
            $table->integer('price');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
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
        Schema::dropIfExist('laptops');
    }
}
