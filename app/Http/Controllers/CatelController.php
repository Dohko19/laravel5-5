<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emailuser;
use App\Usuario;

class CatelController extends Controller
{


    public function index()
    {
    	return view('catel.index');
    }

    public function store(Rquest $request)
    {
    	$correo = Emailuser::create($request->all());
    	return redirect()->route('catel.test');
    }
}
