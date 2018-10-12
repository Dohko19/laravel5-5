<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\Usuario;
use DB;

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
                    <a href="' . route('VerResultado', $user->id_usu) . '" class="btn btn-xs btn-success" title="Detalless">Ver Detalles</a>
                ';
        })
        ->toJson();

    }
}
