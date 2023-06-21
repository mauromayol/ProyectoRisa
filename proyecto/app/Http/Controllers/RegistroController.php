<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
    { // funcion para cargar las provincias en el formulario de registro
        public function SelectBox()
        {
                $provincias = DB::select('SELECT nombre FROM provincia');
               $ciudades = DB::select('SELECT nombre FROM ciudad');
               $barrios= DB::select('SELECT nombre FROM barrio');
             //  dd($barrios);
              return view('registro', [
                'provincias' => $provincias,
                'ciudades' => $ciudades,
                'barrios' => $barrios,
            ]);
            }
        

/* probar mañana 
public function registro(Request $request)
{
    $provincia = $request->input('provincia');
    $ciudad = $request->input('ciudad');
    $barrio = $request->input('barrio');

    // Realizar consultas adicionales para obtener los IDs de ciudad y barrio basados en los nombres seleccionados
    $ciudadId = DB::table('ciudades')->where('nombre', $ciudad)->value('id');
    $barrioId = DB::table('barrios')->where('nombre', $barrio)->value('id');

    // Ejemplo de guardado en la base de datos utilizando el modelo Usuario
    Usuario::create([
        'provincia' => $provincia,
        'ciudad' => $ciudadId,
        'barrio' => $barrioId,
        // Agrega los demás campos según la estructura de la tabla usuarios
    ]);

    // Redirigir o mostrar un mensaje de éxito
}
*/

  /*  public function registro(Request $request)
    {
            // Validar los datos del formulario
        $validator = Validator::make($request->all(), [
            // Agrega las reglas de validación según la estructura de tus tablas
        ]);

        // Comprobar si hay errores de validación
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Los datos del formulario son válidos, realiza el registro

        // Código para crear el usuario en la base de datos utilizando el modelo Usuario
        Usuario::registro([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'DNI' => $request->DNI,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'domicilio' => $request->domicilio,
            'telefono_1' => $request->telefono_1,
            'telefono_2' => $request->telefono_2,
            'correo_electronico' => $request->correo,
            'password' => bcrypt($request->password),
            'estado' => 'activo',
            'ciudad' => $request->ciudad,
            'provincia' => $request->provincia,
            'barrio' => $request->barrio,
        ]);

        // Redireccionar a una página de éxito o a donde desees
        return redirect()->route('registro.success');
    }    
*/
}
