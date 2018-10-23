<?php

namespace App\Exports;

use App\Usuario;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Resultado;
use DB;

class PragExport implements FromCollection
{
	
	public function collection()
	{
		
		$pragmatico = DB::table('resultados as r')
    	->join('usuario as u', function($join){
    		$join->on('r.id_usu', '=', 'u.id_usu');
    	})
    	->where("pragmatico", ">=", 60)
    	->get();
    	
        return $pragmatico;
    	
	}

}
