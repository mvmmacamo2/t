<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $nome="normal";
       return view('paginas.index',compact('nome'));
    }
}
