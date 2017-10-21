<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Miguel Vasco Macamo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Museu, nacional, moeda, museu nacional da moeda, mocambique">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylenav.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>@yield('titulo')</title>

</head>


<body>

@include('layouts.menunormal')
@yield('corpo')
@include('layouts.footer')


<script rel="text/script" src="js/jquery-3.2.1.min.js"></script>
<script rel="text/script" src="js/popper.min.js"></script>
<script rel="text/script" src="js/bootstrap.min.js"></script>
<script rel="text/script" src="js/viewport-bug-workaround.js"></script>

</body>
</html>

