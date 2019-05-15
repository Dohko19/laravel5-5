<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use App\ImagenCatel;


class UsersCatel extends Model
{
	//use SoftDeletes;

	protected $table = 'userscatel';
	protected $primaryKey = 'id_catel';

    protected $dates = ['created_at'];

    protected $fillable = ['name','email','edad','telefono','gradoe','puestotrabajo','sexo','empesc','estadocivil'];

    public function imagencatel()
    {
    	return $this->hasOne(ImagenCatel::class);
    }
}
