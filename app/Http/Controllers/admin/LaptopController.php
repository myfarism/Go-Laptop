<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class LaptopController extends Controller
{
    public function store(Request $request)
    {
        // Menyimpan log data untuk melihat apa yang diterima dari request
        Log::info('Data yang diterima:', $request->all());

        // Validasi dan penyimpanan data
        $validated = $request->validate([
            'kode' => 'required',
            'nama_laptop' => 'required',
            'prosesor' => 'required',
            'ram' => 'required',
            'penyimpanan' => 'required',
            'layar' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'status' => 'required',
            'gambar' => 'required|image|max:500'
        ]);

        // Log untuk melihat hasil validasi
        Log::info('Validasi berhasil:', $validated);

        try {
            // Menyimpan gambar
            $imagePath = $request->file('gambar')->store('produk', 'public');
            Log::info('Gambar berhasil disimpan di:', ['path' => $imagePath]);

            // Menyimpan data laptop ke database
            Laptop::create([
                'kode' => $validated['kode'],
                'nama_laptop' => $validated['nama_laptop'],
                'prosesor' => $validated['prosesor'],
                'ram' => $validated['ram'],
                'penyimpanan' => $validated['penyimpanan'],
                'layar' => $validated['layar'],
                'harga' => $validated['harga'],
                'deskripsi' => $validated['deskripsi'],
                'status' => $validated['status'],
                'gambar' => $imagePath
            ]);

            return response()->json(['message' => 'Laptop berhasil ditambahkan']);
        } catch (\Exception $e) {
            // Menangkap error dan log
            Log::error('Error saat menyimpan laptop:', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'Terjadi kesalahan, tidak bisa simpan ke dalam database', 'error' => $e->getMessage()]);
        }
    }


    public function update(Request $request, Laptop $laptop)
    {
        $validated = $request->validate([
            'nama_laptop' => 'required',
            'prosesor' => 'required',
            'ram' => 'required',
            'penyimpanan' => 'required',
            'layar' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'status' => 'required',
            'gambar' => 'nullable|image|max:500'
        ]);

        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($laptop->gambar) {
                Storage::disk('public')->delete($laptop->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('produk', 'public');
        }

        $laptop->update($validated);

        return response()->json(['message' => 'Laptop berhasil diperbarui']);
    }

    public function destroy(Laptop $laptop)
    {
        if ($laptop->gambar) {
            Storage::disk('public')->delete($laptop->gambar);
        }
        
        $laptop->delete();

        return response()->json(['message' => 'Laptop berhasil dihapus']);
    }
}