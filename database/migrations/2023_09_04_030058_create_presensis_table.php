<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('absensi', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('siswa_id');
        $table->unsignedBigInteger('mapel_id');
        $table->unsignedBigInteger('kelas_id'); 
        $table->date('tanggal');
        $table->string('keterangan');
        $table->timestamps();

        $table->foreign('siswa_id')
            ->references('id')
            ->on('siswa')
            ->onDelete('cascade');

        $table->foreign('mapel_id')
            ->references('id')
            ->on('mapels')
            ->onDelete('cascade');

        $table->foreign('kelas_id') 
            ->references('id')
            ->on('kelas')
            ->onDelete('cascade');
    });
}


    public function down()
    {
        Schema::dropIfExists('absensi');
    }
};
