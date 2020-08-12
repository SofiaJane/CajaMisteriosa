<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;
class AdminController extends Controller
{
    
    public function index()
    {
        return view('adminmisterybox');
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {     
                     
    }
 
}
