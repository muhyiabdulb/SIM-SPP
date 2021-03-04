<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRencanaPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rencana_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_pembayaran_id');
            $table->integer('nominal');
            $table->integer('banyaknya');
            $table->integer('total_nominal');
            $table->string('tahun');
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
        Schema::dropIfExists('rencana_pembayarans');
    }
}
