<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyewaan;

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

        // Update status menjadi 'Y'
        $penyewaan->status = 'Y';
        $penyewaan->save();

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

}
