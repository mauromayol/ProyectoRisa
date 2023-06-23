<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class provincia extends Model
{
    protected $connection = 'proyecto_risa';
    protected $table = 'provincia';

    protected $fillable = [
        'id_provincia',
        'nombre',
    ];
    
}