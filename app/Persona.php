<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public $fillable = ['id','Birthdate','CivilStatus','Direction','FullName','Ocupation'];
    public $firebase = ['id','Birthdate','CivilStatus','Direction','FullName','Ocupation'];
}
