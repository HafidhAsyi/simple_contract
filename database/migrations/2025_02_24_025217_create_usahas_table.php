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
        Schema::create('usahas', function (Blueprint $table) {
            $table->id();
            $table->string('nomorSK', 30);
            $table->string('namaUsaha', 30);
            $table->string('kategoriUsaha', 15);
            $table->string('statusUsaha', 10);
            $table->string('alamatUsaha', 255);
            $table->string('namaPemilik', 30);
            $table->string('email', 30);
            $table->string('nomorHP', 13);
            $table->dateTime('createdAt')->nullable();
            $table->dateTime('approvedAt')->nullable();
            $table->date('sixMonthTempoAt')->nullable();
            $table->date('oneYearTempoAt')->nullable();
            $table->string('createdBy', 30);
            $table->dateTime('updatedAt')->nullable();
            $table->string('updatedBy', 30);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usahas');
    }
};
