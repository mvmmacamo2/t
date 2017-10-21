@extends('layouts.masterinicial')

@section('titulo')
    Login
@stop


<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

    <div class="row">
        <div class="col-sm-6 col-sm-offset-4 col-lg-6 col-lg-offset-4">
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h4 class="card-title">Acesso Ao Sistema</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>


                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Senha" name="senha">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                            <a href="/acesso/registar" class="card-link">Criar Conta</a>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</main>
