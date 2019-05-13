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

    // public function store(Rquest $request)
    // {
    // }
    public function index2()
    {
    	return view('catel.index2');
    }

    public function avisoprivacidad()
    {
    	return view('catel.avisoprivacidad');
    }
}
