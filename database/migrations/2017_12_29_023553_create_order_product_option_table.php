<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product_option', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_product_id');
            $table->unsignedInteger('option_id');
            $table->unsignedInteger('quantity');
            $table->foreign('order_product_id')->references('id')->on('order_product');
            $table->foreign('option_id')->references('id')->on('options');
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
        Schema::dropIfExists('order_product_option');
    }
}
