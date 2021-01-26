<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_induk');
            $table->string('nama');
            $table->string('email');
            $table->integer('no_telp');
            $table->string('alamat');
            $table->enum('jenis_pengaduan',['pengaduan','aspirasi']);
            $table->date('tanggal_laporan');
            $table->text('laporan');
            $table->string('berkas_pendukung');
            $table->enum('status',['pending','sukses','ditolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduans');
    }
}
