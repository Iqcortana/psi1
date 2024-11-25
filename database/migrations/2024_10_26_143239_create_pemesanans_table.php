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
            $table->boolean('sayur_buah')->nullable();
            $table->boolean('ikan')->nullable();
            $table->boolean('ayam')->nullable();
            $table->boolean('daging')->nullable();
            $table->boolean('eskrim')->nullable();
            $table->boolean('makanan_kemasan')->nullable();
            $table->boolean('makanan_olahan')->nullable();
            $table->string('kota_asal');
            $table->string('kota_tujuan');
            $table->string('resi')->unique();
            $table->enum('status', ['Diproses', 'Disortir', 'Dikirim', 'Sedang Transit', 'Diantar Kurir'])->default('Diproses')->nullable();
            $table->string('lokasi')->nullable();
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
