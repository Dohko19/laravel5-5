<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use App\Respuestas;
use App\Encuesta; 
use App\EmailUser;  

class Usuario extends Model
{
	//use SoftDeletes;

	protected $table = 'usuario';

	protected $primaryKey = 'id_usu';

    protected $dates = ['created_at'];
	
    protected $fillable = ['nombre','email','edad','sexo','escolaridad','photo','created_at','updated_at'];

    // protected $dates = ['deleted_at'];

     public function encuestas()
     {
     	return $this->hasMany(Encuesta::class);
     }

     public function resultados()
     {
         return $this->hasMany(Respuestas::class);
     }
     public function emailuser()
     {
         return $this->hasOne(EmailUser::class);
     }
}
