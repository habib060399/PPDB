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
        Schema::create('form_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nisn');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('jenkel');
            $table->string('anakke');
            $table->string('agama');
            $table->string('asal_sekolah')->nullable(true);
            $table->string('negara')->nullable(true);
            $table->string('no_reg')->nullable(true);
            $table->string('nama_ortu')->nullable(true);
            $table->string('no_kk')->nullable(true);
            $table->string('no_hp_ortu')->nullable(true);
            $table->string('alamat_ortu')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_siswa');
    }
};
