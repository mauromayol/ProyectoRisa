<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController ;
use App\Models\Usuairos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// creo las rutas para las vistas de inicio
Route::controller(InicioController::class)->group(function(){
    Route::get('/','index'); 
    Route::get('/info','info')->name('info');
    Route::get('/mas_info','mas_info')->name('mas_info');
    Route::get('/servicio','servicio')->name('servicio');
    Route::get('registro','registro')->name('registro');
});
Route::view('/cliente','cliente')->name ('cliente');
Route::get('/admin', 'AdminController@mostrarTabla')->name('admin');
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin', 'mostrarTabla')->name('admin');
});

// creo las rutas para verificar el acceso de los usuarios
Route::post('/iniciar_sesion',[LoginController::class,'Login'])->name('iniciar_sesion');
Route::post('/validar_registro',[LoginController::class,'Registro'])->name('validar_registro');
Route::get('/logout',[LoginController::class,'logout'])->name('Logout');
