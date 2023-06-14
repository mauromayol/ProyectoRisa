<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Usuarios extends Model
{  
    protected $connection = 'proyecto_risa';
    protected $table = 'usuario';
   

    public static function login($correo, $password)
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
}
