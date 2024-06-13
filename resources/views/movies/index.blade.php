@extends('layouts.app')
@section('content')
    <h1>Hola</h1>
    <ul class="list-group">
        @foreach ($peliculas as $movie)
            <li class="list-group-item">{{ $movie->title }}</li>
        @endforeach
    </ul>
@endsection



    