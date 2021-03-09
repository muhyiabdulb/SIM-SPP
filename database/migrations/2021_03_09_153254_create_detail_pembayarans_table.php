<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('transaksi_id');
            $table->unsignedBigInteger('via_transfer_id');
            $table->unsignedBigInteger('jenis_pembayaran_id');
            $table->date('tanggal_transfer');
            $table->string('bulan');
            $table->integer('nominal');
            $table->integer('bayar');
            $table->integer('sub_bayar');
            $table->integer('sisa_pembayaran');
            $table->string('bukti_bayar')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('detail_pembayarans');
    }
}
