<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Encuesta;
use App\Respuestas;
use App\Resultado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection as Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\EncuestaSolvex;
use App\Exports\UsersExport;
use App\Exports\PragExport;
use Maatwebsite\Excel\Facades\Excel;


class UsuariosController extends Controller
{
    function __construct()
    {
        $this->middleware('auth', ['except' => ['index','store','b','email']]);
    }

    public function index()
    {
        return view('introduccion');
    }

    public function b()
    {
        return view('bienvenido');
    }

    public function resultado()
    {
        $usuario = Usuario::paginate(10);
       // $request->get('id') = Usuario::findOrfail($id->id_usu);
        $pregunta = DB::table('preguntas')->get();
        $respuesta = DB::table('respuestas')->get();
        return view('usuarios.resultado',['usuario' => $usuario,'pregunta'=>$pregunta]);
    }

    public function verRes(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario = DB::table('usuario')
        ->where('id_usu','=',$id)->get();
        $pregunta = DB::table('preguntas')->get();
        $respuesta = DB::table('respuestas')->get();
        //Se consulta cada respuesta con funcion al ID del usuario
        $s1 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        ->select(DB::raw('SUM(respuesta1) as s1'))
        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['A','G','M'])
        ->first();
        //respuesta 2

        $s2 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['B','H','N'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta2) as s2'))
        ->first();
        //repuesta3
         $s3 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['C','I','O'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta5) as s3'))
        ->first();
        //respuesta4
        $s4 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['D','J','P'])
        ->select(DB::raw('SUM(respuesta4) as s4'))
        ->first();
        //respuesta 5
        $s5 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['E','K','Q'])
        ->select(DB::raw('SUM(respuesta3) as s5'))
        ->first();
        //fin respuesta 5
        //Respuesta 6
        $s6 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['F','L','R'])
        ->select(DB::raw('SUM(respuesta2) as s6'))
        ->first();
        //fin respueta6

        $arr = array($s1,$s2,$s3,$s4,$s5,$s6);
        //list($a[0],$a[1],$a[2],$a[3]) = $arr;
       $col = Collection::make($arr);
        $col->toJson();
        $s = 0;
        foreach($col as $col)
        {
            foreach ($col as $value) {
               $s += $value;
            }
        }
        //Se calcula las peticiones de respues de usuarios Con respecto a la Variable I
        //Se consulta cada respuesta con funcion al ID del usuario
        $i1 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        ->select(DB::raw('SUM(respuesta2) as i1'))
        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['A','G','M'])
        ->first();
        //respuesta 2

        $i2 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['B','H','N'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta1) as i2'))
        ->first();
        //repuesta3

         $i3 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['C','I','O'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta4) as i3'))
        ->first();
        //respuesta4
        $i4 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['D','J','P'])
        ->select(DB::raw('SUM(respuesta3) as i4'))
        ->first();
        //respuesta 5
        $i5 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['E','K','Q'])
        ->select(DB::raw('SUM(respuesta1) as i5'))
        ->first();
        //fin respuesta 5
        //Respuesta 6
        $i6 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['F','L','R'])
        ->select(DB::raw('SUM(respuesta3) as i6'))
        ->first();
        //fin respueta6
        //Se guarda todo en una cadena de caracteres
        $arri = array($i1,$i2,$i3,$i4,$i5,$i6);
        //Se trnsforma en un archivo json para su mejor manejo
        $coli = Collection::make($arri);
        $coli->toJson();
        $i = 0;
        foreach($coli as $coli)
        {
            foreach ($coli as $value) {
               $i += $value;
            }
        }
        //Fin de calculo de variable I end
         //Se calcula las peticiones de respues de usuarios Con respecto a la Variable P
        //Se consulta cada respuesta con funcion al ID del usuario
        $p1 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        ->select(DB::raw('SUM(respuesta3) as p1'))
        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['A','G','M'])
        ->first();
        //respuesta 2

        $p2 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['B','H','N'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta4) as p2'))
        ->first();
        //repuesta3

         $p3 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['C','I','O'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta1) as p3'))
        ->first();
        //respuesta4
        $p4 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['D','J','P'])
        ->select(DB::raw('SUM(respuesta5) as p4'))
        ->first();
        //respuesta 5
        $p5 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['E','K','Q'])
        ->select(DB::raw('SUM(respuesta2) as p5'))
        ->first();
        //fin respuesta 5
        //Respuesta 6
        $p6 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['F','L','R'])
        ->select(DB::raw('SUM(respuesta4) as p6'))
        ->first();
        //fin respueta6
        //Se guarda todo en una cadena de caracteres
        $arrp = array($p1,$p2,$p3,$p4,$p5,$p6);
        //Se trnsforma en un archivo json para su mejor manejo
        $colp = Collection::make($arrp);
        $colp->toJson();
        $p = 0;
        foreach($colp as $colp)
        {
            foreach ($colp as $value) {
               $p += $value;
            }
        }
        //fin de calculo de varible P
        //--------------------------------------
          //Se calcula las peticiones de respues de usuarios Con respecto a la Variable P
        //Se consulta cada respuesta con funcion al ID del usuario
        $a1 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        ->select(DB::raw('SUM(respuesta4) as a1'))
        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['A','G','M'])
        ->first();
        //respuesta 2

        $a2 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['B','H','N'])
        ->select(DB::raw('SUM(respuesta3) as a2'))
        ->first();
        //repuesta3

         $a3 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['C','I','O'])
        ->select(DB::raw('SUM(respuesta3) as a3'))
        ->first();
        //respuesta4
        $a4 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['D','J','P'])
        ->select(DB::raw('SUM(respuesta1) as a4'))
        ->first();
        //respuesta 5
        $a5 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['E','K','Q'])
        ->select(DB::raw('SUM(respuesta5) as a5'))
        ->first();
        //fin respuesta 5
        //Respuesta 6
        $a6 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['F','L','R'])
        ->select(DB::raw('SUM(respuesta5) as a6'))
        ->first();
        //fin respueta6
        //Se guarda todo en una cadena de caracteres
        $arra = array($a1,$a2,$a3,$a4,$a5,$a6);
        //Se trnsforma en un archivo json para su mejor manejo
        $cola = Collection::make($arra);
        $cola->toJson();
        $a = 0;
        foreach($cola as $cola)
        {
            foreach ($cola as $value) {
               $a += $value;
            }
        }
       /*--------------------------------------/*/
        // fin de consulta y calculo variable A
       //------------------------------------------
         //Se calcula las peticiones de respues de usuarios Con respecto a la Variable R
        //Se consulta cada respuesta con funcion al ID del usuario
        $r1 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        ->select(DB::raw('SUM(respuesta5) as r1'))
        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['A','G','M'])
        ->first();
        //respuesta 2

        $r2 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['B','H','N'])
        ->select(DB::raw('SUM(respuesta5) as r2'))
        ->first();
        //repuesta3

         $r3 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['C','I','O'])
        ->select(DB::raw('SUM(respuesta2) as r3'))
        ->first();
        //respuesta4
        $r4 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['D','J','P'])
        ->select(DB::raw('SUM(respuesta2) as r4'))
        ->first();
        //respuesta 5
        $r5 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['E','K','Q'])
        ->select(DB::raw('SUM(respuesta4) as r5'))
        ->first();
        //fin respuesta 5
        //Respuesta 6
        $r6 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$id)
        ->whereIn('p.preguntas',['F','L','R'])
        ->select(DB::raw('SUM(respuesta1) as r6'))
        ->first();
        //fin respueta6
        //Se guarda todo en una cadena de caracteres
        $arrr = array($r1,$r2,$r3,$r4,$r5,$r6);
        //Se trnsforma en un archivo json para su mejor manejo (aunque laravel ya lo hace por defecto)
        $colr = Collection::make($arrr);
        $colr->toJson();
        $r = 0;
        foreach($colr as $colr)
        {
            foreach ($colr as $value) {
               $r += $value;
            }
        }
        //Se calcula el total
        $total = $s+$i+$p+$a+$r; //Se calcula el total sumando cada total de las respuestas


        return view('usuarios.resultadoxusuario',['usuario' => $usuario,'pregunta'=>$pregunta,'respuesta'=>$respuesta,'s'=>$s,'i'=>$i,'p'=>$p,'a'=>$a,'r'=>$r,'total'=>$total]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
           $file->move(public_path().'/imageuser/', $name);
        }
        // dd($file);
         request()->validate([
            'nombre' => 'required|min:2',
            'email' => 'required|email',
            'edad' => 'required|numeric|integer|min:1',
            'sexo' => 'required|alpha|max:8',
            'escolaridad' => 'required|alpha',
        ]);
         // var_dump($name.$file);
        $usuario = new Usuario;
        $usuario->nombre = $request->get('nombre');
        $usuario->email = $request->get('email');
        $usuario->sexo = $request->get('sexo');
        $usuario->escolaridad = $request->get('escolaridad');
        $usuario->edad = $request->get('edad');
        $usuario->photo = $name;
        // $usuario->ocupacion_puesto = $request->get()

        $email=$usuario->email;
        $existe = Usuario::where('email',$email)->exists();
        if($existe==$usuario->email)
        {
            return view('bienvenido')->with('usuario','$usuario')->withErrors(['¡Oops, el correo ya fue registrado','Si ya habias completado la encuesta una vez, no es necesarios hacerlo de nuevo']);
        }
        else
        {
             $usuario->save();
           $id = DB::getPdo()->lastInsertId();

            return view('encuestas.encuesta1',['id'=> $id]);
        }


    }

    public function email(Request $request)
    {
        // $idemail = $request->get('id');
        // $semail = Usuario::where('email', '=',  $idemail)->get();
        $email=DB::table('usuario')
        ->where('id_usu', '=', $request->get('id'))
        ->get();
        $nombre=DB::table('usuario')
        ->where('id_usu', '=', $request->get('id'))
        ->get();
        $usuario = DB::table('usuario')
         ->where('id_usu','=',$request->get('id'))->get();

        $usuario = Usuario::findOrFail($email[0]->id_usu);
        $usuario = Usuario::findOrFail($request->get('id'));
        $pregunta = DB::table('preguntas')->get();
        $respuesta = DB::table('respuestas')->get();
        //--------------------------------------------------------------------
        $s1 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        ->select(DB::raw('SUM(respuesta1) as s1'))
        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['A','G','M'])
        ->first();
        //respuesta 2

        $s2 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['B','H','N'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta2) as s2'))
        ->first();
        //repuesta3
         $s3 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['C','I','O'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta5) as s3'))
        ->first();
        //respuesta4
        $s4 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['D','J','P'])
        ->select(DB::raw('SUM(respuesta4) as s4'))
        ->first();
        //respuesta 5
        $s5 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['E','K','Q'])
        ->select(DB::raw('SUM(respuesta3) as s5'))
        ->first();
        //fin respuesta 5
        //Respuesta 6
        $s6 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['F','L','R'])
        ->select(DB::raw('SUM(respuesta2) as s6'))
        ->first();
        //fin respueta6

        $arr = array($s1,$s2,$s3,$s4,$s5,$s6);
        //list($a[0],$a[1],$a[2],$a[3]) = $arr;
       $col = Collection::make($arr);
        $col->toJson();
        $s = 0;
        foreach($col as $col)
        {
            foreach ($col as $value) {
               $s += $value;
            }
        }
        //Se calcula las peticiones de respues de usuarios Con respecto a la Variable I
        //Se consulta cada respuesta con funcion al ID del usuario
        $i1 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        ->select(DB::raw('SUM(respuesta2) as i1'))
        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['A','G','M'])
        ->first();
        //respuesta 2

        $i2 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['B','H','N'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta1) as i2'))
        ->first();
        //repuesta3

         $i3 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['C','I','O'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta4) as i3'))
        ->first();
        //respuesta4
        $i4 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['D','J','P'])
        ->select(DB::raw('SUM(respuesta3) as i4'))
        ->first();
        //respuesta 5
        $i5 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['E','K','Q'])
        ->select(DB::raw('SUM(respuesta1) as i5'))
        ->first();
        //fin respuesta 5
        //Respuesta 6
        $i6 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['F','L','R'])
        ->select(DB::raw('SUM(respuesta3) as i6'))
        ->first();
        //fin respueta6
        //Se guarda todo en una cadena de caracteres
        $arri = array($i1,$i2,$i3,$i4,$i5,$i6);
        //Se trnsforma en un archivo json para su mejor manejo
        $coli = Collection::make($arri);
        $coli->toJson();
        $i = 0;
        foreach($coli as $coli)
        {
            foreach ($coli as $value) {
               $i += $value;
            }
        }
        //Fin de calculo de variable I end
         //Se calcula las peticiones de respues de usuarios Con respecto a la Variable P
        //Se consulta cada respuesta con funcion al ID del usuario
        $p1 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        ->select(DB::raw('SUM(respuesta3) as p1'))
        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['A','G','M'])
        ->first();
        //respuesta 2

        $p2 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['B','H','N'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta4) as p2'))
        ->first();
        //repuesta3

         $p3 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['C','I','O'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta1) as p3'))
        ->first();
        //respuesta4
        $p4 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['D','J','P'])
        ->select(DB::raw('SUM(respuesta5) as p4'))
        ->first();
        //respuesta 5
        $p5 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['E','K','Q'])
        ->select(DB::raw('SUM(respuesta2) as p5'))
        ->first();
        //fin respuesta 5
        //Respuesta 6
        $p6 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['F','L','R'])
        ->select(DB::raw('SUM(respuesta4) as p6'))
        ->first();
        //fin respueta6
        //Se guarda todo en una cadena de caracteres
        $arrp = array($p1,$p2,$p3,$p4,$p5,$p6);
        //Se trnsforma en un archivo json para su mejor manejo
        $colp = Collection::make($arrp);
        $colp->toJson();
        $p = 0;
        foreach($colp as $colp)
        {
            foreach ($colp as $value) {
               $p += $value;
            }
        }
        //fin de calculo de varible P
        //--------------------------------------
          //Se calcula las peticiones de respues de usuarios Con respecto a la Variable P
        //Se consulta cada respuesta con funcion al ID del usuario
        $a1 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        ->select(DB::raw('SUM(respuesta4) as a1'))
        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['A','G','M'])
        ->first();
        //respuesta 2

        $a2 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['B','H','N'])
        ->select(DB::raw('SUM(respuesta3) as a2'))
        ->first();
        //repuesta3

         $a3 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['C','I','O'])
        ->select(DB::raw('SUM(respuesta3) as a3'))
        ->first();

        //

        //respuesta4

        $a4 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['D','J','P'])
        ->select(DB::raw('SUM(respuesta1) as a4'))
        ->first();
        //respuesta 5
        $a5 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['E','K','Q'])
        ->select(DB::raw('SUM(respuesta5) as a5'))
        ->first();
        //fin respuesta 5
        //Respuesta 6
        $a6 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['F','L','R'])
        ->select(DB::raw('SUM(respuesta5) as a6'))
        ->first();
        //fin respueta6
        //Se guarda todo en una cadena de caracteres
        $arra = array($a1,$a2,$a3,$a4,$a5,$a6);
        //Se trnsforma en un archivo json para su mejor manejo
        $cola = Collection::make($arra);
        $cola->toJson();
        $a = 0;
        foreach($cola as $cola)
        {
            foreach ($cola as $value) {
               $a += $value;
            }
        }
       /*--------------------------------------/*/
        // fin de consulta y calculo variable A
       //------------------------------------------
         //Se calcula las peticiones de respues de usuarios Con respecto a la Variable R
        //Se consulta cada respuesta con funcion al ID del usuario
        $r1 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        ->select(DB::raw('SUM(respuesta5) as r1'))
        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['A','G','M'])
        ->first();
        //respuesta 2

        $r2 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['B','H','N'])
        ->select(DB::raw('SUM(respuesta5) as r2'))
        ->first();
        //repuesta3

         $r3 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['C','I','O'])
        ->select(DB::raw('SUM(respuesta2) as r3'))
        ->first();
        //respuesta4
        $r4 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['D','J','P'])
        ->select(DB::raw('SUM(respuesta2) as r4'))
        ->first();
        //respuesta 5
        $r5 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['E','K','Q'])
        ->select(DB::raw('SUM(respuesta4) as r5'))
        ->first();
        //fin respuesta 5
        //Respuesta 6
        $r6 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })

        ->where('u.id_usu','=',$request->get('id'))
        ->whereIn('p.preguntas',['F','L','R'])
        ->select(DB::raw('SUM(respuesta1) as r6'))
        ->first();
        //fin respueta6
        //Se guarda todo en una cadena de caracteres
        $arrr = array($r1,$r2,$r3,$r4,$r5,$r6);
        //Se trnsforma en un archivo json para su mejor manejo (aunque laravel ya lo hace por defecto)
        $colr = Collection::make($arrr);
        $colr->toJson();
        $r = 0;
        foreach($colr as $colr)
        {
            foreach ($colr as $value) {
               $r += $value;
            }
        }

        //Se calcula el total
        $total = $s+$i+$p+$a+$r; //Se calcula el total sumando cada total de las respuestas
        // Se guarda el resultado en la base de datos
        $resultado = new Resultado;
        $id = $request->get('id');
        $existe = Resultado::where('id',$id)->exists();

        if ($existe==$resultado->id_usu) {

            $resultado->sintetico = $s;
            $resultado->idealista = $i;
            $resultado->pragmatico = $p;
            $resultado->analitico = $a;
            $resultado->realista = $r;
            $resultado->total = $total;
            $resultado->id_usu = $request->get('id');
            $resultado->save();

        }
        // Fin
        $ninguno = 0;
        $pasa = false;
        if($s>=60)
        {
            $pasa = true;
            $ninguno = 1;
        }
        if ($i>=60) {
            $pasa = true;
             $ninguno = 1;
        }
        if ($p>=60) {
            $pasa = true;
             $ninguno = 1;
        }
        if ($a>=60) {
            $pasa = true;
             $ninguno = 1;
        }
        if ($r>=60) {
            $pasa = true;
             $ninguno = 1;
        }
        //---------------------------------------------------------------------

        $data = (object) array('s'=>$s,'i'=>$i,'p'=>$p,'a'=>$a,'r'=>$r,'total'=>$total,'email' => $usuario->email,'nombre' => $usuario->nombre,'ninguno' => $ninguno, 'pasa' => $pasa);
    //     Mail::send('mail.encmail', $data, function($message) use ($usuario){
    //         $message->to($usuario->email);
    //          $message->subject('Mensaje de prueba');
    //          $message->from('dno-reply@solvexencuesta.com','SolvexIntel Encuesta');

    // });
    Mail::to($usuario->email)->send(new EncuestaSolvex($data));
        return view("introduccion");
    }
}