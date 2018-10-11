<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Datatables;
use App\Usuario;

class DatatablesController extends Controller
{
    /**
 * Displays datatables front end view
 *
 * @return \Illuminate\View\View
 */
public function getIndex()
{
    return view('usuarios.resultado');
}

/**
 * Process datatables ajax request.
 *
 * @return \Illuminate\Http\JsonResponse
 */
public function anyData()
{
    return datatables()->eloquent(Usuario::query())->toJson();
}
}
