<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('baskets_id');
            // $table->string('namabarang');
            // $table->integer('hargabarang');
            $table->integer('totalharga')->nullable();
            $table->integer('stok');
            // $table->longtext('keteranganbrg');
            $table->unsignedBigInteger('user_id');
            // $table->enum('status_pembelian', ['keranjang', 'beli']);
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
        Schema::dropIfExists('barangs');
    }
}
