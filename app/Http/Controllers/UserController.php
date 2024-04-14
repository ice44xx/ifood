<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function store(Request $request) {
        $request->validate([
            'fullName' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'password' => 'required|string|max:50',
        ]);

        $user = new User();
        $user->fullName = $request->fullName;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/')->with('msg', 'Cadastro efetuado com sucesso!');
    }
}
