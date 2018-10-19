<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    protected $primaryKey = 'id';

    protected $filleable = [

    	'sintetico',
    	'idelista',
    	'pragmatico',
    	'analitico',
    	'realista',
    	'id_usu'
    ];

    public function usuario()
	{
		return $this->hasOne(Usuario::class);
	}
}
