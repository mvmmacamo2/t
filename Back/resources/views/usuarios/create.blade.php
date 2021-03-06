@extends('layouts.master')

@section('titulo')
   Adicionar Usuário
@endsection

@section('corpo')

    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    
        <form method="post" action="/usuarios">
            {!! csrf_field() !!}

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="nome" class="col-form-label">Primeiro Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Primeiro Nome" name="primeiro_nome">
                </div>

                <div class="form-group col-md-6">
                    <label for="apelido" class="col-form-label">Apelido</label>
                    <input type="text" class="form-control" id="apelido" placeholder="Seu ultimo Nome"
                           name="apelido">
                </div>
            </div>


            <input type="hidden" value="Activo" name="estado">

            <div class="form-row">


                <div class="form-group col-md-6">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>

                <div class="form-group col-md-6">
                    <label for="senha" class="col-form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" placeholder="Senha da Conta" name="senha">
                </div>

            </div>


            {{--<div class="form-group">--}}
                {{--<label for="inputAddress" class="col-form-label">Morada</label>--}}
                {{--<input type="text" class="form-control" id="inputAddress" placeholder="Magonine Q14 Casa NR 48" name="morada">--}}
            {{--</div>--}}
            <!--
                        <div class="form-group">
                            <label for="inputAddress2" class="col-form-label">Morada 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div> -->


            <div class="form-row">

                {{--<div class="form-group col-md-6">--}}
                    {{--<label for="nrcelular" class="col-form-label">Numero do Celular</label>--}}
                    {{--<input type="text" class="form-control" id="nrcelular" name="nrcelular">--}}
                {{--</div>--}}

                <div class="form-group col-md-4">

                    <label for="inputState" class="col-form-label">Nível Acesso</label>
                    <select id="inputState" class="form-control" name="nivelacesso">Nivel Acesso

                        <option value="Administrador">Administrador</option>
                        <option value="SAdministrador">SAdministrador</option>
                        <option value="Recepcionista">Recepcionista</option>
                        <option value="Normal">Normal</option>
                    </select>
                </div>

                 {{--<div class="form-group col-md-2">--}}
                    {{--<label for="inputZip" class="col-form-label">Sexo</label>--}}
                     {{--<select id="inputState" class="form-control" name="sexo">Sexo--}}

                         {{--<option value="Masculino">Masculino</option>--}}
                         {{--<option value="Feminino">Feminino</option>--}}

                     {{--</select>--}}
                {{--</div>--}}

            </div>

            <!--  <div class="form-group">
                 <div class="form-check">
                     <label class="form-check-label">
                         <input class="form-check-input" type="checkbox"> Check me out
                     </label>
                 </div>
             </div> -->

            <button type="submit" class="btn btn-primary"><i class="material-icons">add</i>Adicionar</button>
        </form>

    </main>

@stop    