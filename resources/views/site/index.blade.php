@extends('layouts.site')

@section('content')

    <a href="{{ route('parte', 'cabeca') }}"><button class="but cabeca ef">Cabeça</button></a>
    <a href="{{ route('parte', 'braco') }}"><button class="but braco1 ef">Braço</button></a>
    <a href="{{ route('parte', 'perna') }}"><button class="but perna ef">Perna</button></a>
    <a href="{{ route('parte', 'torax') }}"><button class="but torax ef">Tórax</button></a>
    <a href="{{ route('parte', 'costas') }}"><button class="but costas ef">Costas</button></a>

    <img src="img/corpo.svg" id="img">
    <div id="rectangle1"></div>
    <div id="rectangle2"></div>

@endsection
