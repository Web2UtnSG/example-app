<h1>Hola</h1>

@foreach ($peliculas as $movie)
    <li>{{ $movie->title }}</li>
@endforeach