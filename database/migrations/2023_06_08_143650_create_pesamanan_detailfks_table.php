<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesamananDetailfksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pesanan_details', function (Blueprint $table) {
            $table->foreign("produk_id")->references("produk_id")->on('produks')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("id_pesanan")->references("id_pesanan")->on("pesanans")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_detailfk');
    }
}