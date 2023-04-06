<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class logcontroller extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:rfc',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            return $user->createToken('token')->plainTextToken;
        }

        return 'El correo o la contraseña son incorrectas';
    }

    public function whoami(Request $request)
    {

        return "estoy logueado";
    }

    public function logout(Request $request)
    {
        Auth::guard('sanctum')->user()->tokens()->delete(); //sanctum nos permite validar el token para administrarlos
        return 'Has cerrado sesión correctamente';
    }
}
