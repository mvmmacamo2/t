@extends('layouts.master')

@section('titulo')
    Pedidos
@endsection

@section('corpo')



    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
        <div class="card">
            <h4 class="card-header">Usuarios Activos</h4>

            <div class="card-body">

                <h4 class="card-title"><a class="btn btn-secondary" href="/usuarios/create">+</a></h4>

                {{--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Apelido</th>z
                        <th>Email</th>
                        <th>Estado</th>
                        <th>Nivel Acesso</th>
                        <th>Operações</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($usuarios as $user)

                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->primeiro_nome}}</td>
                        <td>{{$user->apelido}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->estado}}</td>
                        <td>{{$user->nivelacesso}}</td>
                         <td>


                             <form action="/usuarios/{{ $user->id}}}" method="post">

                                 {!! csrf_field() !!}
                                 {{method_field('DELETE')}}
                                 <a class="btn btn-success" href="{{route('usuarios.edit', $user->id)}}">Editar</a>
                                 <input type="submit" value="Eliminar" class="btn btn-danger">
                             </form>

                             {{--<a href="{{route('')}}" class="btn btn-success"><i class="material-icons">edit</i></a>--}}

                             {{--<a href="/usuarios/create" class="btn btn-danger"><i class="material-icons">delete</i></a>--}}
                         </td>

                    </tr>

                      @endforeach
                    </tbody>

                </table>

                {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
            </div>
        </div>
    </main>

@stop