@extends('layouts.app')
@section('title', 'Equipos')
@section('content')

<h1>Equipos</h1>
<a href="/equipos/create">Crear equipo</a>
<ul>
    @foreach ($equipos as $equipo )
        <div>
        <h2>{{ $equipo->nombre }}</h2>
        <img src="{{ asset('images/' . $equipo->imagen) }}" alt="{{ $equipo->nombre }}" style="max-width: 100px;">
    </div>
    @endforeach
</ul>

@endsection