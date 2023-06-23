<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class clinicas extends Model
{
    use HasFactory;
    protected $table = 'clinica';
    protected $fillable = [
        'barrio',
        'especialidad',
        'nombre',
        'domicilio',
        'correo',
        'sucursal',
        'telefono',
        'CUIT',
        'estado',
        'encargado',
    ];
}
