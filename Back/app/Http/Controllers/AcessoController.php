<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcessoController extends Controller
{
    public function login()
    {
        return view('Acesso.login');
    }
    public function registar()
    {
        return view('Acesso.registar');
    }
}
