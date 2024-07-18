@extends('layouts.app')
@section('title', 'Partidos')
@section('content')

<h1>Partidos</h1>

<ul>
    @foreach ($partidos as $partido )
        <li>
            <a href="">
                {{$partido->fecha}}
            </a>
        </li>
    @endforeach
</ul>

@endsection