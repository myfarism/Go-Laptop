<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Laptop;
use App\Models\Penyewaan;
use App\Models\Rental;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Mengecek apakah pengguna sudah login atau belum
        if (!$request->session()->get('user_logged_in')) {
            return redirect()->route('login')->with('error', 'You must be logged in to access the dashboard.');
        }

        // Menghitung jumlah laptop yang tersedia (status 'tidak disewa')
        $availableLaptops = Laptop::where('status', 'tidak disewa')->count();

        // Menghitung jumlah laptop yang sedang disewa (status 'disewa')
        $activeRentals = Laptop::where('status', 'disewa')->count();

        // Mengambil seluruh data laptop
        $laptops = Laptop::all();

        // Mengambil data penyewaan yang belum selesai (status 'N')
        $penyewaan = Penyewaan::where('status', 'N')
            ->where('history', 'N')
            ->get();

        // Mengambil data penyewaan yang aktif (status 'Y'), belum bersejarah ('history' = 'N'), dan tanggal pengembalian masih di masa depan
        $aktif = Penyewaan::where('status', 'Y')
            ->where('history', 'N')
            ->where('tanggal_pengembalian', '>', now())
            ->get();

        // Update data penyewaan yang sudah lewat tanggal pengembalian (status 'Y' dan tanggal pengembalian < sekarang)
        // Mengubah history menjadi 'Y' dan status menjadi 'N'
        Penyewaan::where('status', 'Y')
            ->where('tanggal_pengembalian', '<', now())
            ->update(['history' => 'Y', 'status' => 'N']);

        // Mengupdate status laptop yang terkait dengan penyewaan yang sudah lewat tanggal pengembalian menjadi 'tidak disewa'
        Penyewaan::where('status', 'Y')
            ->where('tanggal_pengembalian', '<', now())
            ->get()
            ->each(function ($penyewaan) {
                // Update status laptop yang terkait dengan penyewaan menjadi 'tidak disewa'
                Laptop::where('id', $penyewaan->laptop_id)
                    ->update(['status' => 'tidak disewa']);
            });

        // Mengambil data penyewaan yang sudah selesai (history = 'Y')
        $history = Penyewaan::where('history', 'Y')->get();

        // Mengembalikan tampilan dengan data yang sudah diambil
        return view('admin.dashboard', compact('availableLaptops', 'activeRentals', 'laptops', 'penyewaan', 'aktif', 'history'));
    }

}