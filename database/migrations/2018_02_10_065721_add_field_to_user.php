<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function(Blueprint $table){         
            $table->string('lng')->nullable()->after('role');
            $table->string('lat')->nullable()->after('role');
            $table->enum('login_type', ['normal', 'facebook', 'twitter'])->default('normal')->after('role');
    });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    Schema::table('users', function (Blueprint $table)
    {
        $table->dropColumn(['lng', 'lng', 'login_type']);
    });
}
}
