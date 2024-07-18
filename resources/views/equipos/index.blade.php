@extends('layouts.app')
@section('title', 'Equipos')
@section('content')

<h1>Equipos</h1>

<ul>
    @foreach ($equipos as $equipo )
        <li>
            <a href="{{$equipo->id}}">
                {{$equipo->nombre}}
            </a>
        </li>
    @endforeach
</ul>

@endsection