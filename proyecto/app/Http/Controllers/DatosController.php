<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuarios;


class DatosController extends Controller
{
    public function obtenerDatos(Request $request)
{
    $usuariosQuery = DB::table('usuario');

    // Aplicar filtros según los parámetros de consulta
    if ($request->has('correo_electronico')) {
        $correoElectronico = $request->input('correo_electronico');
        $usuariosQuery->where('correo_electronico', $correoElectronico);
    }

    if ($request->has('password')) {
        $password = $request->input('password');
        $usuariosQuery->where('password', $password);
    }

    $usuarios = $usuariosQuery->get();
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
}
// funcion para agregar datos desde la api
public function agregarDatos(Request $request)
{
    // Valida y procesa los datos recibidos del cuerpo de la solicitud
    $datosValidados = $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'DNI' => 'required',
        'fecha_nacimiento' => 'required',
        'domicilio' => 'required',
        'telefono' => 'required',
        'correo_electronico' => 'required|email',
        'password' => 'required',
    ]);

    // Crea un nuevo objeto Dato y asigna los valores recibidos
    $dato = new Usuarios();
    $dato->nombre = $datosValidados['nombre'];
    $dato->apellido = $datosValidados['apellido'];
    $dato->DNI = $datosValidados['DNI'];
    $dato->fecha_nacimiento = $datosValidados['fecha_nacimiento'];
    $dato->domicilio = $datosValidados['domicilio'];
    $dato->telefono = $datosValidados['telefono'];
    $dato->correo_electronico = $datosValidados['correo_electronico'];
    $dato->password = bcrypt($datosValidados['password']); // Opcionalmente, encripta la contraseña antes de almacenarla

    // Guarda el nuevo dato en la base de datos
    $dato->save();

    // Opcionalmente, puedes devolver una respuesta JSON con el dato creado
    return response()->json($dato, 201); // 201 significa "Created"
}

    
}
