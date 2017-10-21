@extends('layouts.master')

@section('titulo')
    Pedidos
@endsection

@section('corpo')



    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
        <table class="table table-responsive table-bordered">

            <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Nome Responsavel</th>
                <th>Data Do Pedido</th>
                <th>Descricao</th>
                <th>Data Entrada</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                @foreach($escola as $e)
                    @foreach($visitas as $v)

                        <td>{{$e->nome}}</td>
                        <td>{{$e->email}}</td>
                        <td>{{$e->nome_responsavel}}</td>
                        <td>{{$v->data}}</td>
                        <td>{{$v->descricao}}</td>
                        <td>{{$v->hora}}</td>
                    @endforeach
                @endforeach
            </tr>


            </tbody>

        </table>
    </main>

@stop