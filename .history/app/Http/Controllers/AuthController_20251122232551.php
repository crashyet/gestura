<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AuthController extends Controller
{
    // 🌟 Menampilkan halaman Login + Register (1 halaman)
    public function showPage(Request $request)
{
    $show = $request->query('show', 'login'); // default login
    return view('auth.', compact('show'));
}

    // 🌟 Proses Register
    public function register(Request $request)
    {
        $request->validate([
            'fullName' => 'required|min:3',
            'username' => 'required|min:3|unique:users,username',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->fullName,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
            'bio' => null,
            'badge' => null,
            'status_akun' => 'aktif',
            'total_point' => 0,
            'last_login' => null
        ]);

        return back()->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    // 🌟 Proses Login
    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email'    => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     if (!Auth::attempt($request->only('email', 'password'))) {
    //         return back()->with('error', 'Email atau password salah.');
    //     }

    //     // update last login
    //     $user = Auth::user();
    //     $user->last_login = Carbon::now();
    //     $user->save();

    //     return redirect('/dashboard'); // ubah sesuai dashboard kamu
    // }

    // // 🌟 Logout
    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect('/login');
    // }
}
