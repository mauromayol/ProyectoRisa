<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DatosController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// ruta para intentar conectar a la 
Route::post('/datos', [DatosController::class, 'obtenerDatos']);
Route::post('/datos', [DatosController::class, 'agregarDatos']);
Route::get('/datos', [DatosController::class, 'obtenerDatos']);

/*
// opcion para ruta a la api
Route::get('/datos', function (Request $request) {
    $usuarios = DB::table('usuario')->get();
    $animales = DB::table('animal')->get();
    $historiasClinicas = DB::table('historia_clinica')->get();
    $turnos = DB::table('turno')->get();

    $datos = [
        'usuario' => $usuarios,
        'animal' => $animales,
        'historia_clinica' => $historiasClinicas,
        'turno' => $turnos,
    ];

    return response()->json($datos);
});
*/