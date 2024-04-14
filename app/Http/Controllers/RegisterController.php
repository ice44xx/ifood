<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('user.register');
    }

    public function store(Request $request) {
        $request->validate([
            'fullName' => 'required|string|max:50',
            'email' => 'required|string|email|max:50|unique:users,email',
            'password' => 'required|string|max:50',
        ]);

        $user = new User();
        $user->fullName = $request->fullName;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login')->with('msg', 'Cadastro efetuado com sucesso!');
    }
}
