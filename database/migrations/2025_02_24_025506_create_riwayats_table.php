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
        Schema::create('riwayats', function (Blueprint $table) {
            $table->id();
            $table->dateTime('alarmAt')->nullable();
            $table->date('tempoAt');
            $table->string('namaStaf', 30);
            $table->string('keterangan', 30);
            $table->foreignId('usaha_id')->constrained()->onUpdate('cascade')->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayats');
    }
};
