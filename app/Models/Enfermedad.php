<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Enfermedad extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'enfermedads';//okcollections
    protected $fillable = ["nombre_enfermedad", "clave_enfermedad","categoria_cie"];
}
