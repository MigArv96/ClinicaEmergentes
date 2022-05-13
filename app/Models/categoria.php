<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class categoria extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'categorias';//okcollections
}
