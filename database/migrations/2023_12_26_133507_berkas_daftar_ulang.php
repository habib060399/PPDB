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
        Schema::create('berkas_daftar_ulang', function (Blueprint $table) {
            $table->id('id_berkas_daftar_ulang');
            $table->integer('id_berkas')->nullable(false);
            $table->string('id_user_bdu')->nullable(true);
            $table->string('nama_lengkap_bdu')->nullable(true);
            $table->string('nisn_bdu')->nullable(true);
            $table->string('ttl_bdu')->nullable(true);
            $table->string('alamat_bdu')->nullable(true);            
            $table->foreign('id_berkas')->references('id')->on('berkas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas_daftar_ulang');
    }
};
