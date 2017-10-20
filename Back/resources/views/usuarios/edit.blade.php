@extends('layouts.master')

@section('titulo')
Actualizar Dados do Usuário
@endsection

@section('corpo')

    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

        <form method="post" action="{{ url('usuarios', $usuario->id) }}">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="PUT">

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="nome" class="col-form-label">Primeiro Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Primeiro Nome" name="primeiro_nome" value="{{$usuario->primeiro_nome}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="apelido" class="col-form-label">Apelido</label>
                    <input type="text" class="form-control" id="apelido" placeholder="Seu ultimo Nome"
                           name="apelido" value="{{$usuario->apelido}}">
                </div>
            </div>


            <input type="hidden" value="Activo" name="estado">

            <div class="form-row">


                <div class="form-group col-md-6">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{$usuario->email}}">
                </div>



                <div class="form-group col-md-6">
                    <label for="senha" class="col-form-label">Nivel Acesso Actual</label>
                    <input type="text" readonly value="{{$usuario->nivelacesso}}" class="form-control">
                </div>


                <div class="form-group col-md-6">
                    <label for="senha" class="col-form-label">Estado da Conta</label>
                    <input type="text" readonly value="{{$usuario->estado}}" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="senha" class="col-form-label" >Mudar Estado</label>
                   <select class="form-control" name="estado">
                        <option value="Desactivo">Desactivar</option>
                        <option value="Activo">Activo</option>

                   </select>
                </div>



            </div>



            <div class="form-row">

                <div class="form-group col-md-4">

                    <label for="inputState" class="col-form-label">Nível Acesso</label>
                    <select id="inputState" class="form-control" name="nivelacesso">Nivel Acesso

                        <option value="Administrador">Administrador</option>
                        <option value="SAdministrador">SAdministrador</option>
                        <option value="Recepcionista">Recepcionista</option>
                        <option value="Normal">Normal</option>
                    </select>
                </div>


            </div>


            {{--<button type="submit" class="btn btn-primary"><i class="material-icons">add</i>Adicionar</button>--}}
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </form>

    </main>

@stop