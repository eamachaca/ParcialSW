<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
     public $fillable = ['URL','name'];
     public $firebase = ['URL','name'];
}
