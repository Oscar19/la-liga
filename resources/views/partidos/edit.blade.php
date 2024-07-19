@extends('layouts.app')
@section('title', 'Editar partido')
@section('content')
    
<div class="container">
    <h1>Editar Partido</h1>
    <form action="/partidos/{{$partido->partido_id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha y Hora</label>
            <input type="datetime-local" id="fecha" name="fecha" class="form-control"  required>
        </div>
        <div class="mb-3">
            <label for="equipo_local_id" class="form-label">Equipo Local</label>
            <select id="equipo_local_id" name="equipo_local_id" class="form-select" required>
                <option value="" disabled {{ !isset($partido) ? 'selected' : '' }}>Seleccione un equipo</option>
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->equipo_id }}" {{ isset($partido) && $partido->equipo_local_id == $equipo->equipo_id ? 'selected' : '' }}>
                        {{ $equipo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="equipo_visitante_id" class="form-label">Equipo Visitante</label>
            <select id="equipo_visitante_id" name="equipo_visitante_id" class="form-select" required>
                <option value="" disabled {{ !isset($partido) ? 'selected' : '' }}>Seleccione un equipo</option>
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->equipo_id }}" {{ isset($partido) && $partido->equipo_visitante_id == $equipo->equipo_id ? 'selected' : '' }}>
                        {{ $equipo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($partido) ? 'Actualizar' : 'Guardar' }}</button>
    </form>
</div>

@endsection