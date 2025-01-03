<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyewaan;
use App\Models\Laptop;


class PenyewaanController extends Controller
{
    //
    public function konfirmasi($id)
    {
        // Cari data penyewaan berdasarkan ID
        $penyewaan = Penyewaan::find($id);

        if (!$penyewaan) {
            return redirect()->back()->with('error', 'Data penyewaan tidak ditemukan.');
        }

        $laptop = Laptop::find($penyewaan->kode);

        if (!$laptop) {
            return redirect()->back()->with('error', 'Laptop yang disewa tidak ditemukan.');
        }

        // Update status
        $penyewaan->status = 'Y';
        $penyewaan->history = 'N';
        $laptop->status = 'disewa';


        $penyewaan->save();
        $laptop->save();


        return redirect()->back()->with('success', 'Status berhasil dikonfirmasi.');
    }

    public function hapus($id)
    {
        // Cari data penyewaan berdasarkan ID
        $penyewaan = Penyewaan::find($id);

        if (!$penyewaan) {
            return redirect()->back()->with('error', 'Data penyewaan tidak ditemukan.');
        }

        // Hapus data
        $penyewaan->delete();

        return redirect()->back()->with('success', 'Data penyewaan berhasil dihapus.');
    }

    public function hapusSewa($id)
    {
        // Cari data penyewaan berdasarkan ID
        $penyewaan = Penyewaan::find($id);

        if (!$penyewaan) {
            return redirect()->back()->with('error', 'Data penyewaan tidak ditemukan.');
        }

        $laptop = Laptop::find($penyewaan->kode);

        if (!$laptop) {
            return redirect()->back()->with('error', 'Laptop yang disewa tidak ditemukan.');
        }

        // Ubah status history menjadi 'Y' (misalnya, 'Y' berarti sudah selesai atau dibatalkan)
        $penyewaan->history = 'Y';
        $penyewaan->status = 'N';
        $laptop->status = 'tidak disewa';

        // Simpan perubahan
        $penyewaan->save();
        $laptop->save();

        return redirect()->back()->with('success', 'Status history berhasil diperbarui.');
    }


}
