<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FindThePain</title>

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <style>

    </style>
</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" id="logo" href="/">FindThePain</a>

    </div>
</nav>

<header class="masthead">

</header>

<div class="row list-form">
    <h1>Você possui algum desses sintomas??</h1>
    <hr>
        <div class="col-sm-12">
            <form action="/problema" method="post">
                @forelse($sintomas as $sintoma)
                    <div class="form-group">
                       {{ $sintoma->nome }} - <input type="checkbox" value="{{ $sintoma->id }}">
                    </div>
                @empty
                    <h2>Infelizmente não encontramos nenhum resultado</h2>
                @endforelse
            </form>
        </div>
    </div>


<script src="{{ asset('js/site.js') }}"></script>


</body>

</html>
