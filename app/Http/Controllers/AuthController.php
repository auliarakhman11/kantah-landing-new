<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login_page()
    {
        return view('admin.login',['title' => 'Login Page']);
    }

    public function login(Request $request)
    {
         $attributes = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($attributes)){
            return redirect(RouteServiceProvider::HOME);
        }

        throw ValidationException::withMessages([
            'username' => 'Username atau password salah'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('loginPage'))->with('success','Logout Berhasil');
    }

    public function block()
    {
        return view('auth.block');
    }
}
