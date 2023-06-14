<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        return view ('inicio');
    }
    public function info(){
        return view('info');
    }
    public function mas_info(){
        return view('mas_info');
    }
    public function servicio(){
    return view('servicio');

    }

   
    public function registro(){
    return view('registro');
    }
}
