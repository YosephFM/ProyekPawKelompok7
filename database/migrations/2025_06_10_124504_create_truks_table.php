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
        Schema::create('truk', function (Blueprint $table) {
            $table->id();
            $table->string('nopolisi')->unique();
            $table->string('merek_truk');
            $table->string('warna_truk');
            $table->string('tujuan_kota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truks');
    }
};
