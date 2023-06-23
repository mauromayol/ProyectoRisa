<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Usuarios extends Model
{  
    protected $connection = 'proyecto_risa';
    protected $table = 'usuario';
    protected $fillable=[
        'id_usuario',
        'nombre',
        'apellido',
        'DNI',
        'fecha_nacimiento',
        'domicilio',
        'telefono_1',
        'telefono_2',
        'correo_electronico',
        'especialidad',
        'password',
        'estado',
        'ciudad',
        'provincia',
        'barrio',
    ];
    public static function login($correoElectronico, $password)
    {
        // Buscar al usuario por su correo electrónico en la base de datos
        $usuario = self::where('correo electronico', $correoElectronico)->first();
        
        // Verificar si se encontró un usuario con el correo electrónico proporcionado
        if ($usuario) {
            // Verificar si la contraseña proporcionada coincide con la contraseña almacenada (usando el método Hash::check)
            if (Hash::check($password, $usuario->password)) {
                // La contraseña es correcta, se puede iniciar sesión
                
                // Aquí puedes realizar las acciones necesarias para el inicio de sesión,
                // como almacenar el ID del usuario en la sesión, redireccionar a una página de inicio, etc.
                
                // Por ejemplo, puedes almacenar el ID del usuario en la sesión:
                session(['usuario_id' => $usuario->id_usuario]);
                
                // Retornar true para indicar que el inicio de sesión fue exitoso
                return true;
            }
        }
        
        // Retornar false si no se encontró el usuario o la contraseña es incorrecta
        return false;
    }
    
  /*  public static function login($correo, $password)
    { $status = DB::connection('proyecto_risa')->getPdo()->getAttribute(\PDO::ATTR_CONNECTION_STATUS);
        dd($status);

        $usuario = Usuarios::where('correo_electronico', $correo)
                   ->where('password', $password)
                   ->first();
        if (!$usuario) {
            // El usuario no existe en la base de datos
            dd('El usuario no existe');
        }

        if (Hash::check($password, $usuario->password)) {
            // Las contraseñas coinciden
            dd('Las contraseñas coinciden');
        } else {
            // Las contraseñas no coinciden
            dd('Las contraseñas no coinciden');
        }

        return false;
    }
    public static function registro($datos)
    {
        return self::create($datos);
    }*/
}
