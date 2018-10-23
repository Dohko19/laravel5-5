<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use App\Respuestas;

class Usuario extends Model
{
	//use SoftDeletes;

	protected $table = 'usuario';

	protected $primaryKey = 'id_usu';

    protected $dates = ['created_at'];
	
    protected $fillable = ['nombre','email','edad','sexo','escolaridad','photo'];

    // protected $dates = ['deleted_at'];

     public function encuestas()
     {
     	return $this->hasMany('App\Encuesta');
     }

     public function resultados()
     {
         return $this->hasMany(Respuestas::class);
     }
}
