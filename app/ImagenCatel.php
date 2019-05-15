<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UsersCatel;
class ImagenCatel extends Model
{
	protected $table = 'imagen_catels';
	protected $primaryKey = 'id_foto';
 	protected $fillable = ['nombre_foto','id_catel'];

 public function userscatel()
    {
    	return $this->hasOne(UsersCatel::class);
    }
}
