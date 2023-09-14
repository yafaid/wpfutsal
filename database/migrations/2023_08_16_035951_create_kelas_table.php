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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('kodekelas');
            $table->string('deskripsi');
            $table->string('ruangan');
            $table->unsignedBigInteger('jurusan_id'); // Kolom foreign key
            
            // Definisi foreign key
            $table->foreign('jurusan_id')
                  ->references('id')
                  ->on('jurusans')
                  ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
