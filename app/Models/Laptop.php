<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel (plural)
    protected $table = 'daftar_laptop';

    // Tentukan primary key jika tidak menggunakan 'id'
    protected $primaryKey = 'kode';

    // Jika primary key bukan auto-increment, atur $incrementing ke false
    public $incrementing = false;

    // Jika primary key menggunakan tipe data string, tambahkan ini
    protected $keyType = 'string';

    public $timestamps = false;

    // Tentukan atribut yang bisa diisi secara massal (mass assignable)
    protected $fillable = [
        'kode', // Tambahkan ini jika Anda ingin mengisi primary key secara massal
        'nama_laptop',
        'harga',
        'prosesor',
        'ram',
        'penyimpanan',
        'layar',
        'gambar',
        'deskripsi',
        'status',
    ];
}
