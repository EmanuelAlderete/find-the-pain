@extends('layouts.site')

@section('content')

    <br>
    <br>
    <a href="/subparte/3"><button class="but orelhas ef">Ouvidos</button></a>
    <a href="/subparte/18"><button class="but nariz ef">Nariz</button></a>
    <a href="/subparte/2"><button class="but olhos ef">Olhos</button></a>
    <a href="/subparte/4"><button class="but boca ef">Boca</button></a>
    <a href="/subparte/1"><button class="but nuca ef">Nuca</button></a>



    <img src="{{ asset('img/corpo.svg') }}" style="max-height: 280%; max-width: 300%;">


@endsection
