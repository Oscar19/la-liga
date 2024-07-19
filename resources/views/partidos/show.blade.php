@extends('layouts.app')
@section('title', 'Partidos')
@section('content')
<a href="/partidos">Volver</a>
<h1>{{$partido->partido_id}}</h1>
<a href="/partidos/{{$partido->partido_id}}/editar">Editar partido</a>
<form action="{{$partido->partido_id}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar partido</button>
</form>
 
@endsection