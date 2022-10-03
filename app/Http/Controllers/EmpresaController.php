<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        //dd('teste');

        $empresa = Empresas::all();

        dd($empresa);

        return view('Empresa.Index');

    }
        

    
}
