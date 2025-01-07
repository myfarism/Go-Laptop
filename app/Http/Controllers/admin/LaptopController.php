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
            //$imagePath = $request->file('gambar')->storeAs('produk', $request->file('gambar')->getClientOriginalName());

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

            return redirect()->route('admin.dashboard')->with('success', 'Laptop berhasil ditambahkan.');
    } catch (\Exception $e) {
        } catch (\Exception $e) {
            // Menangkap error dan log
            Log::error('Error saat menyimpan laptop:', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'Terjadi kesalahan, tidak bisa simpan ke dalam database', 'error' => $e->getMessage()]);
        }
    }


    public function update(Request $request, $kode)
    {
        $laptop = Laptop::where('kode', $kode)->firstOrFail();
        
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

        // Handle gambar jika ada upload gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($laptop->gambar) {
                Storage::disk('public')->delete($laptop->gambar);
            }
            // Upload gambar baru
            $validated['gambar'] = $request->file('gambar')->store('produk', 'public');
        }

        $laptop->update($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Laptop berhasil diperbarui');
    }

    public function destroy($kode)
    {
        try {
            $laptop = Laptop::where('kode', $kode)->firstOrFail();
            
            // Hapus file gambar jika ada
            if ($laptop->gambar) {
                $imagePath = str_replace('storage/', '', $laptop->gambar);
                if (Storage::disk('public')->exists($imagePath)) {
                    Storage::disk('public')->delete($imagePath);
                }
            }
            
            // Hapus data laptop
            $laptop->delete();
            
            return response()->json([
                'success' => true,
                'message' => "Laptop {$laptop->nama_laptop} berhasil dihapus"
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error deleting laptop: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus laptop'
            ], 500);
        }
    }
}