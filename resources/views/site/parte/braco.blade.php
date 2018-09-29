@extends('layouts.site')

@section('content')

<br>
<br>
<a href="/subparte/6"><button class="but antebraco ef">Antebraço</button></a>
<a href="/subparte/7"><button class="but mao ef">Mão</button></a>
<a href="/subparte/8"><button class="but braco ef">Braço</button></a>

<img src="{{ asset('img/corpo.svg') }}" style="max-height: 200%; max-width: 100%; position: absolute; bottom: -50%; left: 25%;">
@endsection