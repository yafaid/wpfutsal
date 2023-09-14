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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->string('nama');
            $table->string('jeniskelamin'); 
            $table->string('is_active');
            $table->unsignedBigInteger('kelas_id'); // Foreign key dari tabel kelas
            $table->unsignedBigInteger('jurusan_id'); // Foreign key dari tabel jurusan
            $table->timestamps();

            // Definisi foreign key constraint untuk kelas_id
            $table->foreign('kelas_id')
                ->references('id')
                ->on('kelas')
                ->onDelete('cascade'); // Jika kelas dihapus, siswa dengan kelas tersebut juga dihapus

            // Definisi foreign key constraint untuk jurusan_id
            $table->foreign('jurusan_id')
                ->references('id')
                ->on('jurusans')
                ->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
