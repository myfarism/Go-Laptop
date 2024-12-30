<?php

namespace App\Http\Controllers;

use App\Models\Konfirmasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RentalController extends Controller
{
    public function showFormPengisian($id, $nama, $harga)
    {
        // Lakukan sesuatu dengan parameter
        return view('form_pengisian', compact('id', 'nama', 'harga'));
    }

    public function handleFormPengisian(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'namaLengkap' => 'required|string',
            'nipNim' => 'required|string',
            'durasiSewa' => 'required|string',
            'keperluanSewa' => 'required|string',
        ]);

        $idSewa = rand(100000, 999999);

        // Mendapatkan tanggal sewa saat ini
        $tanggalSewa = now(); // Menggunakan waktu saat ini
        $durasiSewa = intval(explode(' ', $validatedData['durasiSewa'])[0]); // Mengambil angka dari durasi sewa
        $tanggalPengembalian = $tanggalSewa->copy()->addDays($durasiSewa); // Menghitung tanggal pengembalian

        // Simpan data ke session
        Session::put('rentalData', array_merge($validatedData, [
            'id_laptop' => $request->id_laptop, // Menyimpan id_laptop
            'id_sewa' => $idSewa, // Menyimpan id_sewa
            'harga' => $request->harga*$durasiSewa, // Menyimpan harga
            'tanggal_sewa' => $tanggalSewa->toDateString(), // Menyimpan tanggal sewa
            'tanggal_pengembalian' => $tanggalPengembalian->toDateString(), // Menyimpan tanggal pengembalian
            'nama_laptop' => $request->nama_laptop,
        ]));

        // Redirect ke form ketentuan
        return redirect()->route('form_ketentuan');
    }

    public function showFormKetentuan()
    {
        // Ambil data dari session
        $rentalData = Session::get('rentalData');

        // Pastikan data tersedia
        if (!$rentalData) {
            return redirect()->route('form_pengisian')->withErrors('Data tidak ditemukan.');
        }

        return view('form_ketentuan', compact('rentalData'));
    }

    public function confirmRental()
    {
        // Ambil data dari session
        $rentalData = Session::get('rentalData');

        // Pastikan data tersedia
        if (!$rentalData) {
            return redirect()->route('form_pengisian')->withErrors('Data tidak ditemukan.');
        }

        // Simpan data ke database
        Konfirmasi::create([
            'nama_lengkap' => $rentalData['namaLengkap'],
            'nip_nim' => $rentalData['nipNim'],
            'durasi_sewa' => $rentalData['durasiSewa'],
            'keperluan_sewa' => $rentalData['keperluanSewa'],
            'harga_sewa' => $rentalData['harga'], // Menyimpan harga sewa
            'kode' => $rentalData['id_laptop'],
            'id_sewa' => $rentalData['id_sewa'],
            'tanggal_sewa' => $rentalData['tanggal_sewa'],
            'tanggal_pengembalian' => $rentalData['tanggal_pengembalian'],
            'status' => 'N',
            'nama_laptop' => $rentalData['nama_laptop'],
        ]);

        // Hapus data dari session setelah konfirmasi
        Session::forget('rentalData');

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('home')->with('message', 'Konfirmasi sewa berhasil!');
    }
}