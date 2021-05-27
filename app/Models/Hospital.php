<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospital';
    protected $fillable = ['id','nombre', 'nombre_representante','nit','direccion', 'telefono'];
    protected $guarded = ['id'];
}
