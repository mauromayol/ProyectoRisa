<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController ;
use App\Http\Controllers\RegistroController ;
use App\Http\Controllers\ClinicasController ;
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

// rutas para las vistas del administrator
Route::view('/admin','admin')->name ('admin');
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin', 'mostrarTablas')->name('admin.usuarios');
    // Route::post('/validar_registro',[AdminController::class,'Registro'])->name('validar_registro');
});
// ruta de prueba para el redirecionamiento
Route::view('/cliente','cliente')->name ('cliente');


// ruta para el registro de las clinicas
/*Route::view('/clinicas', 'clinicas')->name('clinicas');
Route::controller(ClinicasController::class)->group(function(){
    Route::get('/clinicas', 'selectBox')->name('clinicas');
    Route::post('/registro_clinicas',[ClinicasController::class,'RegistroClinicas'])->name('registro_clinicas');
});*/
Route::group(['prefix' => 'clinicas'], function () {
    Route::get('/', [ClinicasController::class, 'index'])->name('clinicas.index');
    Route::get('/clinicas', [ClinicasController::class, 'selectBox'])->name('clinicas');
    Route::post('/registro', [ClinicasController::class, 'registroClinicas'])->name('registro_clinicas');
});


// creo las rutas para verificar el acceso de los usuarios
Route::post('/iniciar_sesion',[LoginController::class,'Login'])->name('iniciar_sesion');

//ruta para el registro de los usuarios
Route::get('/registro', [RegistroController::class, 'SelectBox']);
Route::post('/validar_registro',[RegstroController::class,'Registro'])->name('validar_registro');
Route::get('/logout',[LoginController::class,'logout'])->name('Logout');


// rutas para el crud de la base de datos de los usuarios
// pendiente...