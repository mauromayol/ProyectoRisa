<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Validator;

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
                return redirect()->intended(route('admin'));
            }
            else {
                return redirect()->intended(route('registro'));
            }
        }
        // funcion para el registro de los usuarios
        

    // Método para cerrar sesión
   /* public function logout()
    {
        Auth::logout();
        //$request->sesion()->invalidade();
        //$request->sesion()->regenerateToken(); 
        return redirect('/inicio');
    }*/
}


