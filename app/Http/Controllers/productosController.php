<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class productosController extends Controller
{

    public function getPDF(){
        $name="Gabriel Vela";
        $pdf = PDF::loadView('PDF_Example',compact('name'));
        return $pdf->stream('prueba.pdf');
        // return $pdf->download('prueba.pdf');
    }

    public function index(){
        return view('productos');
    }

    public function mostrar(){
        return view('mostrar');
    }
    public function crear(){
        return view('crear');
    }

    public function dataformulario(Request $request){
        return $request->input('nombre');
    }

}
