<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhususadminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khususadmins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Biginteger('baskets_id');
            // $table->integer('hargabarang');
            $table->integer('totalharga');
            // $table->integer('jmlbeli');
            $table->integer('stok');
            $table->integer('user_id');
            // $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('khususadmins');
    }
}
