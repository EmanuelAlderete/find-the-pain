@extends('layouts.site')

@section('content')

    <br>
    <br>
    <a href="/subparte/ouvidos"><button class="but orelhas ef">Ouvidos</button></a>
    <a href="/subparte/nariz"><button class="but nariz ef">Nariz</button></a>
    <a href="/subparte/olhos"><button class="but olhos ef">Olhos</button></a>
    <a href="/subparte/boca"><button class="but boca ef">Boca</button></a>
    <a href="/subparte/nuca"><button class="but nuca ef">Nuca</button></a>



    <img src="{{ asset('img/corpo.svg') }}" style="max-height: 280%; max-width: 300%;">


@endsection
