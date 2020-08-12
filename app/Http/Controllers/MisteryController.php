<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;
class MisteryController extends Controller
{
    
    public function index()
    {
        return view('misterybox');
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {     
       // dd($request->all());
       // $unovv=$request->f_d_v;
        //dd($request->f_uno);
       // dd($ide,$uno,$dos);
        // $unov = date("d/m/Y", strtotime($unovv));
        // $dosv = date("d/m/Y", strtotime($dosvv));
         $vales = $request->all();
         $pdf = PDF::loadView('Reporte', compact('vales'));
         return $pdf->download('Comprobante.pdf');
              
    }
 
}
