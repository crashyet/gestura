<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AuthController extends Controller
{
    // Tampilkan halaman login/register
    public function showPage(Request $request)
    {
        $show = $request->query('show', 'login'); // default login
        return view('auth.login', compact('show'));
    }

    // -----------------------------
    // REGISTER
    // -----------------------------
    public function register(Request $request)
    {
        $request->validate([
            'fullName' => 'required|min:3',
            'username' => 'required|min:3|unique:users,username',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name'         => $request->fullName,
            'username'     => $request->username,
            'email'        => $request->email,
            'password'     => Hash::make($request->password),

            // Field tambahan sesuai tabel kamu
            'role'         => 'user',
            'bio'          => null,
            'badge'        => null,
            'status_akun'  => 'aktif',
            'total_point'  => 0,
            'last_login'   => null,
        ]);

        return redirect('/auth?show=login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }

    // -----------------------------
    // LOGIN
    // -----------------------------
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->with('error', 'Email atau password salah.');
        }

        $user = Auth::user();
        $user->update(['last_login' => Carbon::now()]);

        return redirect('/dashboard');
    }

    // LOGOUT
    public function logout()
    {
        Auth::logout();
        return redirect('/auth?show=login');
    }
}
