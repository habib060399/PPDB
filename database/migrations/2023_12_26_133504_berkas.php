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
        Schema::create('berkas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('id_user')->nullable(true);
            $table->string('nama_lengkap')->nullable(true);
            $table->string('nisn')->nullable(true);
            $table->string('ttl')->nullable(true);
            $table->text('alamat')->nullable(true);
            $table->string('jenkel')->nullable(true);
            $table->string('anakke')->nullable(true);
            $table->string('agama')->nullable(true);
            $table->string('asal_sekolah')->nullable(true);
            $table->string('negara')->nullable(true);
            $table->string('no_reg')->nullable(true);
            $table->string('nama_ortu')->nullable(true);
            $table->string('no_kk')->nullable(true);
            $table->string('no_hp_ortu')->nullable(true);
            $table->text('alamat_ortu')->nullable(true);
            $table->string('status_regis')->nullable(true);
            $table->string('status')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas');
    }
};
