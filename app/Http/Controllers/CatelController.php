<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emailuser;
use App\UsersCatel;

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

    public function registro()
    {
    	return view('catel.registro');
    }
    public function store(Request $request)
    {
    	$user = UsersCatel::create($request->all());
    	dd($user);
    }
}
