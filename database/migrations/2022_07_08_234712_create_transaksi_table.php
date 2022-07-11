<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->unsignedBigInteger('pakaian_transaksi');
            $table->unsignedBigInteger('pelanggan_transaksi');
            $table->integer('berat_transaksi');
            $table->timestamps();
            $table->foreign('pakaian_transaksi')
                ->references('id_pakaian')
                ->on('pakaians');
            $table->foreign('pelanggan_transaksi')
                ->references('id_pelanggan')
                ->on('pelanggan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
