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
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kabupaten');
            $table->string('latitude');
            $table->string('longitude');
            $table->double('bobot_ahp');
            $table->string('color_ahp')->nullable();
            $table->enum('status_ahp', ['Tinggi', 'Sedang', 'Rendah'])->nullable();
            $table->double('bobot_fuzzy');
            $table->string('color_fuzzy')->nullable();
            $table->enum('status_fuzzy', ['Tinggi', 'Sedang', 'Rendah'])->nullable();
            $table->double('bobot_fahp');
            $table->string('color_fahp')->nullable();
            $table->enum('status_fahp', ['Tinggi', 'Sedang', 'Rendah'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kabupaten');
    }
};
