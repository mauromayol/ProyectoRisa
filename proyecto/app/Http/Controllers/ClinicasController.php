<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\clinicas;

class ClinicasController extends Controller
{ // logica para el control del registro de las clinicas
    public function index(){
        return view('clinicas');
    }
    // mostrar los barrios y especialidades en los select box
    public function selectBox(){
    $barrios = DB::select('SELECT *from barrio where id_ciudad=4');
    $especialidades=DB::select('SELECT nombre FROM especialidad');

        return view('clinicas', ['barrios' => $barrios],['especialidades' => $especialidades]);
   } 
        public function RegistroClinicas(Request $request) { 
         dd('Estoy en RegistroClinicas');
        // Validar los datos del formulario
        $request->validate([
            'barrio' => 'required',
            'especialidad' => 'required',
            'nombre' => 'required|regex:/^[A-Za-z\s]+$/',
            'domicilio' => 'required',
            'correo' => 'required|email',
            'sucursal' => 'required|regex:^\[0-9]+$',
            'telefono' => 'required|regex:/^\d{10}$/',
            'CUIT' => 'required|regex:^\d{2}-\d{8}-\d{1}$',
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
        header("Location: registro_exitoso.html");
        return redirect()->route('registro_clinicas');
      }
    
    
    
    
    
   }

    

