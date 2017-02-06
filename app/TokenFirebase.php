<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TokenFirebase extends Model
{
	protected $table = 'token_firebases'; 
    protected $fillable = [
        'token',
    ];
	public $timestamps = false;

}
