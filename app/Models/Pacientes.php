<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Pacientes extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'Pacientes';//okcollections
    protected $fillable = ["nombre", "apellido","edad", "dui", "direccion", "telefono","fNac"];
}
