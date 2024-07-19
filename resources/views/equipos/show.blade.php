@extends('layouts.app')
@section('title', 'Partidos')
@section('content')
<a href="/equipos">Volver</a>
<h1>{{$equipo->nombre}}</h1>
<img src="{{ asset('images/' . $equipo->imagen) }}" alt="{{ $equipo->nombre }}" style="max-width: 100px;">
<a href="/equipos/{{$equipo->equipo_id}}/editar">Editar equipo</a>
@endsection