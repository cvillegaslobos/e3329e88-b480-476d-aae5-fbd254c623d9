<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CevichazoController extends Controller
{
    
    public function index(){
        return view('cevichazo.index');
    }
    
}