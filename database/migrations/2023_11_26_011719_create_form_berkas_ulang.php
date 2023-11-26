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
        Schema::create('form_berkas_ulang', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable(true);
            $table->string('nama_lengkap')->nullable(true);
            $table->string('nisn')->nullable(true);
            $table->string('ttl')->nullable(true);
            $table->string('alamat')->nullable(true);
            $table->string('status')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_berkas_ulang');
    }
};
