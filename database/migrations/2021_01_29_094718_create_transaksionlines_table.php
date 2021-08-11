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
            $table->text('barangs_id');
            $table->string('kartu');
            $table->string('bukti');
            $table->string('alamatpengiriman');
            $table->integer('kode_unik');
            $table->string('pengiriman');
            $table->string('totalbelanja');
            $table->string('status');
            $table->unsignedBigInteger('user_id');
            $table->text('baskets_id')->nullable();
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
