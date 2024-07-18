@extends('layouts.app')
@section('title', 'Equipos')
@section('content')

<h1>Equipos</h1>

<ul>
    @foreach ($equipos as $equipo )
        <li>
            <a href="/equipos/{{$equipo->equipo_id}}">
                {{$equipo->nombre}}
            </a>
        </li>
    @endforeach
</ul>

@endsection