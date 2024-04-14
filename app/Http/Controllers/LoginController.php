<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function index() {
        return view('user.login');
    }

    public function store(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'O campo de e-mail é obrigatório.',
            'email.email' => 'E-mail inválido.',
            'password.required' => 'O campo de senha é obrigatório.'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            Log::info('Usuário autenticado com sucesso');
            return redirect('/login')->with('success', 'Usuário autenticado com sucesso.');
        }

        return redirect('/login')->withErrors(['error' => 'E-mail ou senha incorretos.']);
    }

    public function destroy() {
        Auth::logout();
        return redirect('/login');
    }
}
