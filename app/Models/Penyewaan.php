<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel (plural)
    protected $table = 'penyewaan';

    // Tentukan primary key jika tidak menggunakan 'id'
    protected $primaryKey = 'id_sewa';

    // Jika primary key bukan auto-increment, atur $incrementing ke false
    public $incrementing = false;

    // Jika primary key menggunakan tipe data string, tambahkan ini
    // protected $keyType = 'string';

    public $timestamps = false;

    // Tentukan atribut yang bisa diisi secara massal (mass assignable)
    protected $fillable = [
        'id_sewa',
        'nama_lengkap',
        'nip_nim',
        'durasi_sewa',
        'keperluan_sewa',
        'harga_sewa',
        'kode',
        'tanggal_sewa',
        'tanggal_pengembalian',
        'status',
        'nama_laptop',
    ];
}
