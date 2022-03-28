<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_id');
            $table->string('title');
            $table->string('name');
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('staff');
            $table->string('discount');
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
        Schema::drop('customer');
    }
}
