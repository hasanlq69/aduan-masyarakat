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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Kolom ini menyimpan nama tag dengan tipe data VARCHAR (string).
            $table->string('slug')->unique(); // Kolom ini menyimpan slug yang unik untuk identifikasi URL dengan tipe data VARCHAR (string).
            $table->timestamps(); // Kolom ini secara otomatis menyimpan waktu pembuatan dan pembaruan rekaman (created_at dan updated_at).
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
