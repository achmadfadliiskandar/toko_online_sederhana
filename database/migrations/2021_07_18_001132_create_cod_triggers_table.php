<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCodTriggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // untuk membuat trigger cod ketika di tambah semua yang di barangs terhapus
        DB::unprepared('
        CREATE TRIGGER `aftercreatecod` 
        AFTER INSERT ON `cod` 
        FOR EACH ROW 
        BEGIN 
        DELETE FROM barangs 
        WHERE barangs.user_id = user_id; 
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // DB:unprepared('DROP TRIGGER "aftercreatecod"');
    }
}
