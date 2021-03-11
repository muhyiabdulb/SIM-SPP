<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSiswaIdToDetailPembayarans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_pembayarans', function (Blueprint $table) {
            $table->unsignedBigInteger('siswa_id')->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_pembayarans', function (Blueprint $table) {
            $table->dropColumn('siswa_id');
        });
    }
}
