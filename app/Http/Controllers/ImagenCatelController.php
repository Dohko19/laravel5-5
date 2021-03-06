<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersCatel;
use App\ImagenCatel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection as Collection;
use Illuminate\Database\Eloquent\Model;


class ImagenCatelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if($request->hasFile('photo')){
            request()->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg,tiff,tif,raw,bmp,psd',
        ]);

           $file = $request->file('photo');
           $name = $request->get('email')."-".$file->getClientOriginalName();
           // $file-> move($url,$name);
           $file->move(public_path().'/imagecatel/', $name);
        }

        $imagen = new ImagenCatel;
        $imagen->nombre_foto = $name;
        $imagen->id_catel = $request->get('id');
        $id = $request->get('id');
        $imagen->save();
       return view('catel.encuesta',['id'=>$id]);
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
