@extends('layouts.site')

@section('content')
    <br>
<br>
<button class="but antebraco ef">Antebraço</button>
<button class="but mao ef">Mão</button>
<button class="but braco ef">Braço</button>

<img src="{{ asset('img/corpo.svg') }}" style="max-height: 200%; max-width: 100%; position: absolute; bottom: -50%; left: 25%;">
@endsection