<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->string('customer_id');
            $table->string('clothe');
            $table->string('service');
            $table->string('color');
            $table->string('fabric');
            $table->string('brand');
            $table->string('starch');
            $table->string('center');
            $table->integer('discount');
            $table->integer('quantity');
            $table->integer('unit_cost');
            $table->integer('total');
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
        Schema::drop('orders');
    }
}
