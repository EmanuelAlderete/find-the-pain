@extends('layouts.site')

@section('content')
<br>
<br>
<a href="/subparte/9"><button class="but peito ef">Peito</button></a>
<a href="/subparte/10"><button class="but abdomen ef">Abdômen</button></a>

<img src="{{ asset('img/corpo.svg') }}" style="max-height: 200%; max-width: 100%; position: absolute; bottom: -50%;">

@endsection
