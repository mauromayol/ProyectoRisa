<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller

{  
    public function login(Request $request)
    {
        $credentials = $request->only('correo_electronico', 'password');
        //dd($credentials); 
        // Validar las credenciales manualmente
       // $usuario = Usuarios::where('correo_electronico', $credentials['correo_electronico'])->first();
       $correoElectronico = $credentials['correo_electronico'];
       $password = $credentials['password'];
       $usuarios = DB::select('SELECT correo_electronico, password, nombre FROM usuario');
        
       foreach ($usuarios as $usuario) {
           if ($usuario->correo_electronico === $correoElectronico && $usuario->password===$password) {
            // La autenticación fue exitosa
            //dd($usuario); 
            //dd('Inicio de sesión exitoso');
            // Realiza las acciones necesarias después del inicio de sesión,
            // como redireccionar a una página de inicio, mostrar un mensaje, etc.
            session(['usuario_nombre' => $usuario->nombre]);
            return Redirect::to('/admin');
        }
        
        // La autenticación falló, mostrar un mensaje de error
        return back()->withErrors([
            'message' => 'Correo electrónico o contraseña incorrectos',
        ]);
    }}
    

    // Método para cerrar sesión
   /* public function logout()
    {
        Auth::logout();
        //$request->sesion()->invalidade();
        //$request->sesion()->regenerateToken(); 
        return redirect('/inicio');
    }*/
}

