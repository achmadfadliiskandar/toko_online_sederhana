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
            $table->text('barangs_id');
            $table->longtext('telpon');
            $table->string('alamat');
            $table->integer('kode_unik');
            $table->string('pengiriman');
            $table->string('totalbelanja');
            $table->string('status');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('baskets_id')->nullable();
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
