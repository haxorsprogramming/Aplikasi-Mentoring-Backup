<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblKelompokBinaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kelompok_binaan', function (Blueprint $table) {
            $table -> id();
            $table -> char('id_kelompok_binaan', 50);
            $table -> char('nama_kelompok_binaan', 100);
            $table -> text('deks') -> nullable();
            $table -> char('id_mentor', 50);
            $table -> timestamps();
            $table -> char('active', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_kelompok_binaan');
    }
}
