<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barrio extends Model
{
   protected $table='barrio';
protected $fillable=[
    'id_barrio',
    'id_ciudad',
    'nombre',
];

}
