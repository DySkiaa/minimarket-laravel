<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_details', function (Blueprint $table) {
            $table->id('id_pesanandetail');
            $table->foreignId('produk_id');
            $table->foreignId('id_pesanan');
            $table->integer('jumlah');
            $table->string('nama_pemesan')->nullable();
            $table->string('nomor_pemesan')->nullable();
            $table->string('alamat_pemesan')->nullable();
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
        Schema::dropIfExists('pesanan_details');
    }
}