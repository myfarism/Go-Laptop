<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    use HasFactory;

    protected $table = 'penyewaan';

    public $timestamps = false;


    protected $fillable = [
        'nama_lengkap',
        'nip_nim',
        'durasi_sewa',
        'keperluan_sewa',
        'harga_sewa', // Menambahkan harga_sewa
        'id_sewa',
        'kode',
        'tanggal_sewa',
        'tanggal_pengembalian',
        'status',
        'nama_laptop',
    ];
}