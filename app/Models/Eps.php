<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eps extends Model
{
    protected $table = 'eps';
    protected $fillable = ['id','nombre',];
    protected $guarded = ['id'];
}
