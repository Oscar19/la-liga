@extends('layouts.app')
@section('title', 'Partidos')
@section('content')

<h1>Partidos</h1>

<a href="/partidos/create">Crear Partido</a>
<ul>
    @foreach ($partidos as $partido )
        <li>
            <a href="/partidos/{{$partido->partido_id}}">

                {{$partido->fecha}}
            </a>
        </li>
    @endforeach
</ul>


@endsection