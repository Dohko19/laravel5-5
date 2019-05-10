<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;

/**
 * 
 */
class EmailUser extends Model
{
	protected fillable = ['correo_usuario']

	public function usuario()
	{
		return $this->hasOne(Usuario::class);
	}
	
}