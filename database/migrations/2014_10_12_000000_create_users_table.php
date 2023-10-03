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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('total_skor')->defalut(0);
            $table->time('lama_waktu_bermain')->nullable();
            $table->integer('bermain_sampai_akhir')->defalut(0);
            $table->integer('jumlah_gagal_keseluruhan_evaluasi')->defalut(0);
            $table->integer('jumlah_gagal_badge')->defalut(0);
            $table->boolean('bermain_sampai_akhir')->defalut(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
