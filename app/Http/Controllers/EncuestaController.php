<?php

namespace App\Http\Controllers;

use App\Encuesta;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Usuario;
use App\Respuestas;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection as Collection;

class EncuestaController extends Controller
{  

//Se guarda cada una de las preguntas con las FK con respecto al modelo de la Base de Datos
    public function storeP1(Request $request)
    {
       $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pA');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1a');
        $respuesta->respuesta2 = $request->get('2a');
        $respuesta->respuesta3 = $request->get('3a');
        $respuesta->respuesta4 = $request->get('4a');
        $respuesta->respuesta5 = $request->get('5a');
        $respuesta->id_preguntas = $encuesta->id_preguntas;
        //validacion

        $p1 = (int)$request->get('1a');
        $p2 = (int)$request->get('2a');
        $p3 = (int)$request->get('3a');
        $p4 = (int)$request->get('4a');
        $p5 = (int)$request->get('5a');
        $t = array($p1,$p2,$p3,$p4,$p5);
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
        return view('encuestas.encuesta2',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta1', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
    }

    public function storeP2(Request $request)
    {
        // if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pB');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1b');
        $respuesta->respuesta2 = $request->get('2b');
        $respuesta->respuesta3 = $request->get('3b');
        $respuesta->respuesta4 = $request->get('4b');
        $respuesta->respuesta5 = $request->get('5b');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
       

        $p1 = (int)$request->get('1b');
        $p2 = (int)$request->get('2b');
        $p3 = (int)$request->get('3b');
        $p4 = (int)$request->get('4b');
        $p5 = (int)$request->get('5b');
        $t = array($p1,$p2,$p3,$p4,$p5);

        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta3',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta2', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }

        
    }

    public function storeP3(Request $request)
    {
         //if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pC');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1c');
        $respuesta->respuesta2 = $request->get('2c');
        $respuesta->respuesta3 = $request->get('3c');
        $respuesta->respuesta4 = $request->get('4c');
        $respuesta->respuesta5 = $request->get('5c');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        
        $p1 = (int)$request->get('1c');
        $p2 = (int)$request->get('2c');
        $p3 = (int)$request->get('3c');
        $p4 = (int)$request->get('4c');
        $p5 = (int)$request->get('5c');
        $t = array($p1,$p2,$p3,$p4,$p5);

        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta4',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta3', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
        
    }

    public function storeP4(Request $request)
    {
         //if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = Input::get('pD');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1d');
        $respuesta->respuesta2 = $request->get('2d');
        $respuesta->respuesta3 = $request->get('3d');
        $respuesta->respuesta4 = $request->get('4d');
        $respuesta->respuesta5 = $request->get('5d');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 

        $p1 = (int)$request->get('1d');
        $p2 = (int)$request->get('2d');
        $p3 = (int)$request->get('3d');
        $p4 = (int)$request->get('4d');
        $p5 = (int)$request->get('5d');

        $t = array($p1,$p2,$p3,$p4,$p5);
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta5',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta4', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
        
    }

    public function storeP5(Request $request)
    {
         //if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pE');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1e');
        $respuesta->respuesta2 = $request->get('2e');
        $respuesta->respuesta3 = $request->get('3e');
        $respuesta->respuesta4 = $request->get('4e');
        $respuesta->respuesta5 = $request->get('5e');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 

        $p1 = (int)$request->get('1e');
        $p2 = (int)$request->get('2e');
        $p3 = (int)$request->get('3e');
        $p4 = (int)$request->get('4e');
        $p5 = (int)$request->get('5e');
        $t = array($p1,$p2,$p3,$p4,$p5);
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta6',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta5', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
        
    }

    public function storeP6(Request $request)
    {
         //if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pF');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1f');
        $respuesta->respuesta2 = $request->get('2f');
        $respuesta->respuesta3 = $request->get('3f');
        $respuesta->respuesta4 = $request->get('4f');
        $respuesta->respuesta5 = $request->get('5f');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 

        $p1 = (int)$request->get('1f');
        $p2 = (int)$request->get('2f');
        $p3 = (int)$request->get('3f');
        $p4 = (int)$request->get('4f');
        $p5 = (int)$request->get('5f');
        $t = array($p1,$p2,$p3,$p4,$p5);
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta7',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta6', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
        
    }

    public function storeP7(Request $request)
    {
        // if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pG');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1g');
        $respuesta->respuesta2 = $request->get('2g');
        $respuesta->respuesta3 = $request->get('3g');
        $respuesta->respuesta4 = $request->get('4g');
        $respuesta->respuesta5 = $request->get('5g');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $p1 = (int)$request->get('1g');
        $p2 = (int)$request->get('2g');
        $p3 = (int)$request->get('3g');
        $p4 = (int)$request->get('4g');
        $p5 = (int)$request->get('5g');

        $t = array($p1,$p2,$p3,$p4,$p5);
        
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta8',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta7', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
        
    }

    public function storeP8(Request $request)
    {
        // if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pH');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1h');
        $respuesta->respuesta2 = $request->get('2h');
        $respuesta->respuesta3 = $request->get('3h');
        $respuesta->respuesta4 = $request->get('4h');
        $respuesta->respuesta5 = $request->get('5h');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $p1 = (int)$request->get('1h');
        $p2 = (int)$request->get('2h');
        $p3 = (int)$request->get('3h');
        $p4 = (int)$request->get('4h');
        $p5 = (int)$request->get('5h');
 
        $t = array($p1,$p2,$p3,$p4,$p5);
        
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta9',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta8', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
    }

    public function storeP9(Request $request)
    {//
        // if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pI');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1i');
        $respuesta->respuesta2 = $request->get('2i');
        $respuesta->respuesta3 = $request->get('3i');
        $respuesta->respuesta4 = $request->get('4i');
        $respuesta->respuesta5 = $request->get('5i');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $p1 = (int)$request->get('1i');
        $p2 = (int)$request->get('2i');
        $p3 = (int)$request->get('3i');
        $p4 = (int)$request->get('4i');
        $p5 = (int)$request->get('5i');

        $t = array($p1,$p2,$p3,$p4,$p5);
        
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta10',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta9', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
    }

    public function storeP10(Request $request)
    {
         //if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pJ');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1j');
        $respuesta->respuesta2 = $request->get('2j');
        $respuesta->respuesta3 = $request->get('3j');
        $respuesta->respuesta4 = $request->get('4j');
        $respuesta->respuesta5 = $request->get('5j');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $p1 = (int)$request->get('1j');
        $p2 = (int)$request->get('2j');
        $p3 = (int)$request->get('3j');
        $p4 = (int)$request->get('4j');
        $p5 = (int)$request->get('5j');

        $t = array($p1,$p2,$p3,$p4,$p5);
        
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta11',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta10', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
    }

     public function storeP11(Request $request)
    {
        // if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pK');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1k');
        $respuesta->respuesta2 = $request->get('2k');
        $respuesta->respuesta3 = $request->get('3k');
        $respuesta->respuesta4 = $request->get('4k');
        $respuesta->respuesta5 = $request->get('5k');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $p1 = (int)$request->get('1k');
        $p2 = (int)$request->get('2k');
        $p3 = (int)$request->get('3k');
        $p4 = (int)$request->get('4k');
        $p5 = (int)$request->get('5k');

        $t = array($p1,$p2,$p3,$p4,$p5);
        
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta12',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta11', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
    }

     public function storeP12(Request $request)
    {
        // if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pL');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1l');
        $respuesta->respuesta2 = $request->get('2l');
        $respuesta->respuesta3 = $request->get('3l');
        $respuesta->respuesta4 = $request->get('4l');
        $respuesta->respuesta5 = $request->get('5l');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $p1 = (int)$request->get('1l');
        $p2 = (int)$request->get('2l');
        $p3 = (int)$request->get('3l');
        $p4 = (int)$request->get('4l');
        $p5 = (int)$request->get('5l');

        $t = array($p1,$p2,$p3,$p4,$p5);
        
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta13',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta12', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
    }

     public function storeP13(Request $request)
    {
        // if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pM');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1m');
        $respuesta->respuesta2 = $request->get('2m');
        $respuesta->respuesta3 = $request->get('3m');
        $respuesta->respuesta4 = $request->get('4m');
        $respuesta->respuesta5 = $request->get('5m');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $p1 = (int)$request->get('1m');
        $p2 = (int)$request->get('2m');
        $p3 = (int)$request->get('3m');
        $p4 = (int)$request->get('4m');
        $p5 = (int)$request->get('5m');

        $t = array($p1,$p2,$p3,$p4,$p5);
        
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta14',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta13', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
    }

     public function storeP14(Request $request)
    {
         //if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pN');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1n');
        $respuesta->respuesta2 = $request->get('2n');
        $respuesta->respuesta3 = $request->get('3n');
        $respuesta->respuesta4 = $request->get('4n');
        $respuesta->respuesta5 = $request->get('5n');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $p1 = (int)$request->get('1n');
        $p2 = (int)$request->get('2n');
        $p3 = (int)$request->get('3n');
        $p4 = (int)$request->get('4n');
        $p5 = (int)$request->get('5n');

        $t = array($p1,$p2,$p3,$p4,$p5);
        
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta15',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta14', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
    }

     public function storeP15(Request $request)
    {
        // if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pO');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1o');
        $respuesta->respuesta2 = $request->get('2o');
        $respuesta->respuesta3 = $request->get('3o');
        $respuesta->respuesta4 = $request->get('4o');
        $respuesta->respuesta5 = $request->get('5o');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $p1 = (int)$request->get('1o');
        $p2 = (int)$request->get('2o');
        $p3 = (int)$request->get('3o');
        $p4 = (int)$request->get('4o');
        $p5 = (int)$request->get('5o');

        $t = array($p1,$p2,$p3,$p4,$p5);
        
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta16',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta15', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
    }

     public function storeP16(Request $request)
    {
        // if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pP');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1p');
        $respuesta->respuesta2 = $request->get('2p');
        $respuesta->respuesta3 = $request->get('3p');
        $respuesta->respuesta4 = $request->get('4p');
        $respuesta->respuesta5 = $request->get('5p');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $p1 = (int)$request->get('1p');
        $p2 = (int)$request->get('2p');
        $p3 = (int)$request->get('3p');
        $p4 = (int)$request->get('4p');
        $p5 = (int)$request->get('5p');

        $t = array($p1,$p2,$p3,$p4,$p5);
        
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta17',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta16', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
    }

     public function storeP17(Request $request)
    {
        // if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pQ');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1q');
        $respuesta->respuesta2 = $request->get('2q');
        $respuesta->respuesta3 = $request->get('3q');
        $respuesta->respuesta4 = $request->get('4q');
        $respuesta->respuesta5 = $request->get('5q');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $p1 = (int)$request->get('1q');
        $p2 = (int)$request->get('2q');
        $p3 = (int)$request->get('3q');
        $p4 = (int)$request->get('4q');
        $p5 = (int)$request->get('5q');

        $t = array($p1,$p2,$p3,$p4,$p5);
        
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.encuesta18',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta17', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
    }

     public function storeP18(Request $request)
    {
        // if(!$request->ajax()) return redirect('/');
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pR');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1r');
        $respuesta->respuesta2 = $request->get('2r');
        $respuesta->respuesta3 = $request->get('3r');
        $respuesta->respuesta4 = $request->get('4r');
        $respuesta->respuesta5 = $request->get('5r');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $p1 = (int)$request->get('1r');
        $p2 = (int)$request->get('2r');
        $p3 = (int)$request->get('3r');
        $p4 = (int)$request->get('4r');
        $p5 = (int)$request->get('5r');

        $t = array($p1,$p2,$p3,$p4,$p5);
        
        //Banderas For
        $bandera = true;
        for($i=1;$i<6;$i++)
        {
            if($bandera)
            {
                $bandera = false;

                for($j=0;$j<5;$j++)
                {
                    if($t[$j]==$i)
                    {
                        $bandera=true;
                    }
                }
            }
        }
        //-----------------------------

        if($bandera)
        {
        $respuesta->save();
       return view ('encuestas.success',['id'=>$id]);
        }
        else
        {
            return view('encuestas.encuesta18', compact('id'))->withErrors(['Error! Revisa tus respuestas','Recuerda que los campos no deben contener el mismo numero']);
        }
       
    }
}