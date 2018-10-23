<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\Usuario;
use DB;
use App\Resultado;

class DataTablesController extends Controller
{
    /**
 * Displays datatables front end view
 *
 * @return \Illuminate\View\View
 */
public function datatable()
    {
        return view('usuarios.resultado');
    }

    public function getPosts()
    {
    	$model = Usuario::query();
    	// return datatables()->eloquent(Usuario::query())->toJson();
        return Datatables::eloquent($model)
        ->addColumn('action', function($user) {
        	return '
                    <br><a href="' . route('VerResultado', $user->id_usu) . '" class="btn btn-xs btn-success" title="Detalles">Ver Detalles</a>
                ';
        })
        ->filterColumn('id_usu', function($query, $keyword) {
                $query->whereRaw("CONCAT(Usuario.id_usu,'-',Usuario.id_usu) like ?", ["%{$keyword}%"]);
            })
        ->toJson();

    }

    public function getRes()
    {
        $resultado = Resultado::query();
        return Datatables::eloquent($resultado)
        ->toJson();
    }
}
