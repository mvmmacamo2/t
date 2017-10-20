<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $nome='';
        return view('admin.index', compact('nome'));
    }
}
