<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('/login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Jika autentikasi berhasil, redirect ke halaman dashboard atau halaman beranda
            return redirect()->intended('/'); // Ganti '/dashboard' dengan halaman yang sesuai
        } else {
            // Jika autentikasi gagal, kembali ke halaman login dengan pesan error
            return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
        }
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Ganti '/login' dengan halaman login Anda
    }
}
