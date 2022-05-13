<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Consulta extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'consultas';//okcollections
    protected $fillable = ["user", "paciente","receta", "diagnostico", "fecha_consulta", "observacion","motivo_consulta",
    "presion_arterial", "frecuencia_cardiaca","frecuencia_respiratoria", "temperatura", "peso", "talla"];
}
