<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Cita extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'citas';//okcollections
    protected $fillable = ["paciente", "user","fecha_cita"];
}
