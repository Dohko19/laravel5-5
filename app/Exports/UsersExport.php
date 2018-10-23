<?php

namespace App\Exports;

use App\Usuario;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Resultado;
use DB;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	$sintetico = DB::table('resultados as r')
    	->join('usuario as u', function($join){
    		$join->on('r.id_usu', '=', 'u.id_usu');
    	})
    	->where("sintetico", ">=", 60)
    	->get();
        
        return $sintetico;
    }
}