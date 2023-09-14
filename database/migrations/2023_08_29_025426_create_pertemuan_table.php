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
        Schema::create('pertemuan', function (Blueprint $table) {
            $table->id();
            $table->string('minggu'); 
            $table->unsignedBigInteger('mapel_id');
            $table->unsignedBigInteger('tahun_id');
            $table->timestamps();

            $table->foreign('mapel_id')
            ->references('id')
            ->on('mapels');
            $table->foreign('tahun_id')
            ->references('id')
            ->on('tahun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertemuan');
    }
};
