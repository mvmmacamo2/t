<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = Usuario::create($request->all());
        return redirect('usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->update($request->all());
        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('usuarios');
    }

    // seccao de API

    public function getAllUsuarios()
    {
        $usuarios = Usuario::all();
        $usuarios = Usuario::orderBy('id', 'desc0')->get();
        return response()->json(['usuarios' => $usuarios, 'status' => 200]);
    }


    public function SaveUsuario(Request $request)
    {
        $usuario = Usuario::create($request->all());
        return response()->json(['usuario' => $usuario], 200);

    }


    // metodo n=buscar usuario
    public function getUsuario($id)
    {
        $usuario = Usuario::find($id);
        if ($usuario) {
            return response()->json(['mensagem' => $usuario]);
        } else {
            return response()->json(['mensagem' => 'usuario nao encontrado'], 404);
        }

    }


    public function UpdateUsuario(Request $request, $id)
    {
        $usuario = Usuario::find($id);

        if ($usuario) {
            $usuario->update($request->all());
            return response()->json(['usuario' => $usuario]);
        } else {
            return response()->json(['mensagem' => 'Usuario Nao Encontrada'], 404);
        }
    }


    public function DeleteUsuario($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        if (!$usuario) {
            return response()->json(['mensagem' => 'Usuário Não encontrada'], 404);
        } else {
            return response()->json(['mensagem' => 'Usuário Removido com Sucesso'], 200);
        }

    }


}
