@extends('layouts.site')

@section('content')

    <br>
    <br>
    <a href="/subparte/12"> <button class="but coxa ef">Coxa</button></a>
    <a href="/subparte/15">  <button class="but tornozelo ef">Tornozelo</button></a>
    <a href="/subparte/13"> <button class="but panturrilha ef">Panturilha</button></a>
    <a href="/subparte/14"> <button class="but canela ef">Canela</button></a>

    <img src="{{ asset('img/corpo.svg') }}" style="max-height: 250%; max-width: 100%; position: absolute; bottom: 2%; left: 25%;">


@endsection
