<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {

        Schema::dropIfExists('konfirmasi');

        Schema::create('konfirmasi', function (Blueprint $table) {
            // Menetapkan id_sewa sebagai primary key
            $table->integer('id_sewa')->primary();

            // Kolom lainnya
            $table->string('nama_lengkap');
            $table->string('nip_nim');
            $table->string('durasi_sewa');
            $table->string('keperluan_sewa');
            $table->decimal('harga_sewa', 10, 2);
            $table->string('id_laptop', 50);
            $table->date('tanggal_sewa');
            $table->date('tanggal_pengembalian');
            $table->timestamps();

            // Menambahkan kolom status dengan enum
            $table->enum('status', ['Y', 'N'])->default('N');

            // Mendefinisikan foreign key untuk id_laptop
            //$table->foreign('id_laptop')->references('id_laptop')->on('daftar_laptop')->onDelete('cascade');
        });
    }

    public function down()
    {
        // Drop foreign key constraint terlebih dahulu
        // Schema::table('tes_konfirmasi', function (Blueprint $table) {
        //     $table->dropForeign(['id_laptop']);
        // });

        // Drop tabel konfirmasi
        Schema::dropIfExists('konfirmasi');
    }
};
