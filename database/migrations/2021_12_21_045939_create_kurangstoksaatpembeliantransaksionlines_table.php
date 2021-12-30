<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateKurangstoksaatpembeliantransaksionlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER `kurangstoksaatpembeliantransaksionlines` AFTER INSERT ON `transaksionlinesdetails` FOR EACH ROW BEGIN UPDATE baskets SET stok=stok-NEW.stok WHERE id = NEW.baskets_id; END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('kurangstoksaatpembeliantransaksionlines');
    }
}
