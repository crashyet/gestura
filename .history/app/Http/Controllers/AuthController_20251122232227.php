<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showPage(Request $request)
    {
        $show = $request->query('show', 'login');
        return view('auth.auth-page', compact('show'));
    }

    public function login(Request $request)
    {
        return "Login pressed";
    }

    public function register(Request $request)
    {
        return "Register pressed";
    }
}
