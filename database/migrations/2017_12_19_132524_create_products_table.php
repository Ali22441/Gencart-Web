<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
			$table->string('image')->nullable();
			$table->unsignedInteger('quantity')->default(0);
			$table->float('price');
			$table->float('promo_price')->nullable();
			$table->text('description')->nullable();
			$table->unsignedInteger('total_sale')->default(0);
			$table->unsignedInteger('store_id');
			$table->unsignedInteger('department_id')->nullable();
			$table->unsignedInteger('shelf_id')->nullable();
			$table->unsignedInteger('brand_id')->nullable();
			$table->enum('unit',array('no','bunch','kg' , 'g' , 'lt','ml' , 'oz','pcs' , 'pint' , 'pack' , 'dozen', 'bag'))->nullable();
			$table->float('tax')->default(0);
            $table->enum('status', ['available', 'out of stock', 'unavailable', 'promo'])->default('available');
            $table->foreign('store_id')->references('id')->on('stores');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('shelf_id')->references('id')->on('shelves');
            $table->foreign('brand_id')->references('id')->on('brands');
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
        Schema::dropIfExists('products');
    }
}
