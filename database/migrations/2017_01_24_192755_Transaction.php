<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    use SoftDeletes;
    
    public function up()
    {
        //
         Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->string('customer_id');
            $table->integer('amount_paid');
            $table->integer('balance');
            $table->integer('total');
            $table->string('deliver_date');
            $table->string('center');
            $table->softDeletes();
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
        Schema::drop('transactions');
    }
}
