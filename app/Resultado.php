<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{

    protected $table = 'resultados';
    protected $primaryKey = 'id';

    protected $filleable = [

    	'sintetico',
    	'idelista',
    	'pragmatico',
    	'analitico',
    	'realista',
    	'id_usu',
        'created_at',
        'updated_at'
    ];

    public function usuario()
	{
		return $this->hasOne(Usuario::class);
	}
}
