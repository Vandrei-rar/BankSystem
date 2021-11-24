<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formlogin()
    {
        return view('site.login');
    }

    public function authUser(Request $request)
    {
        $credentials = $request->validate([
            'id',
            'id_conta' => ['required', 'numeric'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'error' => 'Credenciais incorretas.',
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        return redirect()->route('logout');
    }
    
}
