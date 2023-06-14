<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuarios;

class LoginController extends Controller

{
    
        public function Login(Request $request)
        {
            // Prueba el inicio de sesión
            $credentials = $request->validate([
                'correo_electronico' => ['required', 'email'],
                'password' => ['required'],
            ]);
    
            if (Usuarios::login($credentials['correo_electronico'], $credentials['password'])) {
                // El usuario ha iniciado sesión correctamenteS
                return ('admin');//->intended(route('cliente'));
            }
        }
    


    // Método para cerrar sesión
   /* public function logout()
    {
        Auth::logout();
        //$request->sesion()->invalidade();
        //$request->sesion()->regenerateToken(); 
        return redirect('/inicio');
    }*/
}


