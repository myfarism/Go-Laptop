<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi kredensial
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek apakah kredensial valid
        if (Auth::attempt(['nim' => $credentials['username'], 'password' => $credentials['password']])) {
            // Jika login berhasil, simpan status login dalam session
            $request->session()->put('user_logged_in', true); // Menyimpan status login

            // Regenerasi session untuk keamanan
            $request->session()->regenerate();

            // Redirect ke dashboard setelah login
            return redirect()->route('admin.dashboard');
        }

        // Jika login gagal, kembali dengan pesan error
        return back()->with('error', 'The provided credentials do not match our records.');
    }

    public function logout(Request $request)
    {
        // Logout dan hapus status login dari session
        Auth::logout();
        $request->session()->forget('user_logged_in'); // Menghapus status login dari session

        // Hapus semua data session dan token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
