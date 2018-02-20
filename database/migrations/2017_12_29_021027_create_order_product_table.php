<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductTable extends Migration
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
            $table->integer('quantity')->default(1);
            $table->enum('fulfilment_status', array('Fullfilled', 'Not Available', 'Replacement', 'Pending'));
            $table->enum('type', array('Product', 'Replacement'))->default('Product');
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
        Schema::dropIfExists('order_product');
    }
}
