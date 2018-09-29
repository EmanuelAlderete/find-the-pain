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
    @if($problemas)
        <div class="col-12">
            <h2>Você pode ter os seguintes problemas: </h2>
        </div>
    <div class="row" style="width: 100%">
        @forelse($problemas as $problema)
            <div class="col-4">
                <div class="card card-result" >
                    <div class="card-header">
                        {{ $problema->nome }}
                    </div>
                    <div class="card-body">
                        {{ $problema->helper }}
                    </div>
                </div>
            </div>
        @empty

            Erro

        @endforelse
    </div>

    @else

        <h2>Não foram encontrados resultados conclusivos. Lamentamos</h2>

    @endif


<script src="{{ asset('js/site.js') }}"></script>


</body>

</html>
