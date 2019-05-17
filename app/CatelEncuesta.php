<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ImagenCatel;

class CatelEncuesta extends Model
{
    protected $table = 'catel_encuestas';

	protected $primaryKey = 'id_cat_enc';
	
    protected $fillable = ['pregunta','respuesta','id_foto'];

    public function imagencatel()
    {
    	return $this->hasOne(ImagenCatel::class);
    }
}
