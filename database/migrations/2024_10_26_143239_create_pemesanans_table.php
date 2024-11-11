<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->string('nomor_pemesanan')->nullable()->unique();
            $table->string('nomor_telp');
            $table->integer('berat');
            $table->boolean('sayuran_beku')->nullable();
            $table->boolean('ikan_beku')->nullable();
            $table->boolean('daging_beku')->nullable();
            $table->boolean('makanan_beku')->nullable();
            $table->string('kota_asal');
            $table->string('kota_tujuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
