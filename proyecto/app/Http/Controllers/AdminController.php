<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function mostrarTabla()
    {
        $resultados = DB::select('SELECT *from usuario');

        return view('admin', ['resultados' => $resultados]);
    }
}
