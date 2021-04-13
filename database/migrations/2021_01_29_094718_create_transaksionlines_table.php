<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksionlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksionlines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kartu');
            $table->string('bukti');
            $table->string('alamatpengiriman');
            $table->string('pengiriman');
            $table->string('totalbelanja');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('basket_id')->nullable();
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
        Schema::dropIfExists('transaksionlines');
    }
}
