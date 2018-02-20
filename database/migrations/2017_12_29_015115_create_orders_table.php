<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('shopper_id');
            $table->unsignedInteger('address_id')->nullable();
            $table->float('amount');
            $table->float('delivery_charge')->default(0);

            $table->foreign('customer_id')->references('id')->on('users');
            $table->foreign('shopper_id')->references('id')->on('users');
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->enum('status', array('Initiated', 'In Progress', 'Delivered', 'Cancelled'));		
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
        Schema::dropIfExists('orders');
    }
}
