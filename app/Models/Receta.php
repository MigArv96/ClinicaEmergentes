<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Receta extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'recetas';//okcollections
    protected $fillable = ["indicaciones", "insumo","cantidad_recetada","dosis"];
}
