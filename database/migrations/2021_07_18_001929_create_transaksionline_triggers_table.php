<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTransaksionlineTriggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // untuk membuat trigger transaksionlines ketika di tambah semua yang di barangs terhapus
        DB::unprepared('
        CREATE TRIGGER `aftercreatetransaksionlines` 
        AFTER INSERT ON `transaksionlines` 
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
    // DB::unprepared('DROP TRIGGER "aftercreatetransaksionlines"');
    }
}
