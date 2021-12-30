<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksionlinesdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksionlinesdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('transaksionlines_id')->nullable();
            $table->integer('barangs_id')->nullable();
            $table->integer('baskets_id')->nullable();
            $table->integer('stok')->nullable();
            $table->string('kodeunik')->nullable();
            $table->integer('hargabeli')->nullable();
            $table->integer('totalharga')->nullable();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('transaksionlinesdetails');
    }
}
