<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatelEncuesta;
use App\ImagenCatel;
use App\UsersCatel;
use Illuminate\Support\Facades\DB;


class CatelEncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('introduccion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $r=1;
        $tot = 185;
            while($r <= $tot){
                    $encuesta = new CatelEncuesta;
                    $encuesta->pregunta = $request->get('pregunta'.$r);
                    $encuesta->respuesta = $request->get('respuesta'.$r);
                    $encuesta->id_foto = $request->get('id');
                    $encuesta->save();
                        $r = $r+1;
                 }

                 $value = DB::table('catel_encuestas')
                 ->where('id_foto','=', $request->get('id');
                    return $value;

        return view('catel.success')->with(['Enhorabuena haz completado el Test de catel']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
