<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{ // funcion para que el admin vea las clinicas y los usuarios cargados en la base de datos
    public function admin()
    {
        return view('admin');
    }
    public function mostrarTablas()
    {
        $resultados = DB::select('SELECT *from usuario');
        $clinicas = DB::select('SELECT *from clinica');
        $especialidad=DB::select('SELECT nombre FROM especialidad');

        return view('admin', ['resultados' => $resultados],['clinicas' => $clinicas],['especialidad' => $especialidad]);
    
    
}
}