<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Vademecum extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'vademecums';//okcollections
    protected $fillable = ["principio_activo", "accion_terapeutica","indicacion","marca","propiedades",
    "dosificacion", "precauciones","reacciones_adversas","interacciones","contrainidicaciones","sobredosificacion"
];
}
