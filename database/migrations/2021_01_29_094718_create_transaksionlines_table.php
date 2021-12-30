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
            // $table->integer('barangs_id')->nullable();
            $table->string('kartu');
            // $table->integer('stok');
            $table->string('status')->nullable();
            $table->string('bukti');
            $table->string('alamat_pengiriman');
            $table->integer('kode_unik');
            $table->string('totalbelanja');
            $table->unsignedBigInteger('user_id');
            // $table->integer('baskets_id')->nullable();
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
