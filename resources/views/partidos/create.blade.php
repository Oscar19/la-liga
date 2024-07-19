@extends('layouts.app')
@section('title', 'Crear partido')
@section('content')
    
<div class="container">
    <h1>Crear Partido</h1>
    <form action="/partidos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha y Hora</label>
            <input type="datetime-local" id="fecha" name="fecha" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="equipo_local_id" class="form-label">Equipo Local</label>
            <select id="equipo_local_id" name="equipo_local_id" class="form-select" required>
                <option value="" disabled selected>Seleccione un equipo</option>
                @foreach ($equipos as $equipo )
                    <option value="{{ $equipo->equipo_id }}">{{ $equipo->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="equipo_visitante_id" class="form-label">Equipo Visitante</label>
            <select id="equipo_visitante_id" name="equipo_visitante_id" class="form-select" required>
                <option value="" disabled selected>Seleccione un equipo</option>
                @foreach ($equipos as $equipo )
                    <option value="{{ $equipo->equipo_id }}">{{ $equipo->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

@endsection