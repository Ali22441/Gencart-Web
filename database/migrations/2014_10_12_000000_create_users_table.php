<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('phone');
            $table->string('image')->nullable();
            $table->string('address');
			$table->integer('zipcode')->nullable();
			$table->string('place_id')->nullable();
            $table->string('referral_code')->unique()->nullable();
            $table->string('lat_lng')->nullable();
            $table->string('api_token', 60)->unique();
			$table->enum('role', ['customer', 'shopper', 'admin'])->default('customer');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
