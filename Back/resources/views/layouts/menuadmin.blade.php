<nav class="navbar navbar-expand-md  fixed-top    bg-dark navbar-dark " id="menu">
    {{--bg-dark navbar-dark--}}
    {{--bg-secondary--}}
    <a class="navbar-brand" href="/">Administração</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link " href="/">Inicio <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Eventos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Mural</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Exposicao</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Serviços</a>
            </li>

        </ul>


        <div class="dropdown show ">
            {{--btn btn-secondary dropdown-toggle--}}

            <a class="dropdown-toggle btn text-white" href="#" role="button" id="dropdownMenuLink"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><small><i class="material-icons">perm_identity</i></small>
                Miguel Macamo
            </a>


            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#"><li class="material-icons">account_circle</li>Perfil</a>
                <a class="dropdown-item" href="#"><li class="material-icons">settings</li>Configuracoes</a>
                <a class="dropdown-item" href="#"><li class="material-icons">help</li>Ajuda</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><li class="material-icons">lock_outline</li>Bloquear</a>
                <a class="dropdown-item" href="#"><li class="material-icons">keyboard_tab</li>Sair</a>
            </div>
        </div>


        {{--<form class="form-inline mt-2 mt-md-0">--}}
        {{--<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">--}}
        {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
        {{--</form>--}}


    </div>
</nav>

{{--FIM DO MENU--}}


<div class="container-fluid">

    <div class="row">
        {{--bg-light--}}
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-dark  bg sidebar">

            <ul class="nav nav-pills flex-column  ">

                <li class="nav-item">
                    <a class="nav-link active" href="/usuarios/create"><i class="material-icons">person_add</i>Adicionar <span
                                class="sr-only">(current)</span></a>

                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/usuarios"><i class="material-icons">storage</i></i>Listar usuarios</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-white" href="/pedido"><i class="material-icons">storage</i></i>Pedidos</a>
                </li>

                {{--<li class="nav-item">--}}
                {{--<a class="nav-link text-white" href="#">Analytics</a>--}}
                {{--</li>--}}
                {{----}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link text-white" href="#">Export</a>--}}
                {{--</li>--}}

            </ul>

            <ul class="nav nav-pills flex-column">
                {{----}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link text-white" href="#">Nav item</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link text-white" href="#">Nav item again</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link text-white" href="#">One more nav</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">Another nav item</a>--}}
                {{--</li>--}}
                {{----}}
            </ul>

            <ul class="nav nav-pills flex-column">

                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">Nav item again</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">One more nav</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">Another nav item</a>--}}
                {{--</li>--}}
                {{----}}
            </ul>
        </nav>


    </div>
</div>

