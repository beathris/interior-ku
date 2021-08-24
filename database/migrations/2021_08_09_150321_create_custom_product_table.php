<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_product', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->uuid('product_id');
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
            $table->uuid('detail_product_id');
            $table->foreign('detail_product_id')->references('id')->on('detail_product')->onDelete('cascade');
            $table->string('name');
            $table->string('color');
            $table->double('ingredient_price');
            $table->double('width');
            $table->double('height');
            $table->double('length');
            $table->double('total_price');
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
        Schema::dropIfExists('custom_product');
    }
}
