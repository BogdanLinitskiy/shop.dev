<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductAndThumbnailsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('amount');
            $table->timestamps();
        });

        Schema::create('thumbnails',function(Blueprint $table){
           $table->increments('id');
           $table->string('name');
           $table->float('size');
           $table->timestamps();
        });

        Schema::create('product_thumbnail',function(Blueprint $table){
           $table->increments('id');
           $table->integer('product_id');
           $table->integer('thumbnail_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
        Schema::dropIfExists('thumbnails');
        Schema::dropIfExists('product_thumbnail');
    }
}
