<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    public function index(Request $request)
    {
        // Menangkap parameter dari URL
        $laptop_id = $request->get('id'); 

        // Ambil data laptop berdasarkan ID
        $laptop = Laptop::find($laptop_id);

        if (!$laptop) {
            // Jika laptop tidak ditemukan, alihkan ke halaman katalog dengan pesan error
            return redirect()->route('katalog')->with('error', 'Laptop tidak ditemukan');
        }

        // Decode parameter 'picture' untuk memastikan URL-nya benar
        $picture = $request->get('picture');
        if ($picture) {
            // Decode URL dua kali jika diperlukan
            $picture = urldecode(urldecode($picture));
            // Ganti backslash dengan forward slash
            $picture = str_replace('\\', '/', $picture);
            $request->merge(['picture' => $picture]);
        }

        // Kirim data laptop dan parameter yang telah diperbaiki ke view
        return view('sewa.index', compact('laptop', 'request'));
    }
}
