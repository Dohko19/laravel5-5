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

class ExcelExportData extends Controller
{
      ///export to excel
    public function export() 
    {
        return Excel::download(new UsersExport, 'sinteticos.csv');
    }

    public function pragexport()
    {
        return Excel::download(new PragExport, 'pragmaticos.csv');
    }
    ///excel end
}
