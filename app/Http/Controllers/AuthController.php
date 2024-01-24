<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use NunoMaduro\Collision\Adapters\Phpunit\Style;

class AuthController extends Controller
{
    public function index() {
        return view("login", [
            'page' => "login"
        ]);
    }
    public function register() {
        return view("register", [
            'page' => "register"
        ]);
    }

    public function authenticate(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]);

        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('alert', [
                'message' => 'username atau password salah', 
                'style' => 'danger'
            ]);
        }
    }
    public function registerAuth(Request $request) {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
        
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('login')->with('alert', [
            'message' => 'akun berhasil di buat', 
            'style' => 'success'
        ]);;
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
