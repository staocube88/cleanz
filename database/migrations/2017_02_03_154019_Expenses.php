<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Expenses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('category');
            $table->string('amount');
            $table->string('description');
            $table->string('staff');
            $table->string('center');
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
        Schema::drop('expenses');
    }
}
