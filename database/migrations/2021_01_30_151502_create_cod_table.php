<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cod', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->integer('barangs_id');
            $table->string('alamat_pengiriman');
            $table->string('totalbelanja');
            // $table->integer('stok')->nullable();
            $table->unsignedBigInteger('user_id');
            // $table->integer('baskets_id')->nullable();
            $table->timestamps();
        });
// CREATE TRIGGER `aftercreatecod` 
// AFTER INSERT ON `cod` 
// FOR EACH ROW 
// BEGIN 
// DELETE FROM barangs 
// WHERE barangs.user_id = user_id; 
// END
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cod');
    }
}
