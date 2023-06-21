<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clinicas extends Controller
{
    public function RegistroClinicas(Request $request) { 
    
    // Validar los datos del formulario
    $request->validate([
        'barrio' => 'required',
        'especialidad' => 'required',
        'nombre' => 'required|regex:/^[A-Za-z\s]+$/',
        'domicilio' => 'required',
        'correo' => 'required|email',
        'sucursal' => 'required|regex:/^\d{8}$/',
        'telefono' => 'required|regex:/^\d{8}$/',
        'CUIT' => 'required|regex:/^\d{8}$/',
        'estado' => 'required',
        'encargado' => 'required'
    ]);

    // Crear un nuevo objeto de la clase Clinicas
    $clinica = new Clinicas();
    $clinica->barrio = $request->input('barrio');
    $clinica->especialidad = $request->input('especialidad');
    $clinica->nombre = $request->input('nombre');
    $clinica->domicilio = $request->input('domicilio');
    $clinica->correo = $request->input('correo');
    $clinica->sucursal = $request->input('sucursal');
    $clinica->telefono = $request->input('telefono');
    $clinica->CUIT = $request->input('CUIT');
    $clinica->estado = $request->input('estado');
    $clinica->encargado = $request->input('encargado');
    
    // Guardar el objeto de la clase Clinicas en la base de datos
    $clinica->save();
   
    return redirect('/');
}
   

}
