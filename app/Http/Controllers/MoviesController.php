<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::all();

        return view('movies.index',[
            'peliculas' => $movies
        ]);
    }

    public function show($id) {
        return view('movies.show',[
            'id' => $id
        ]);
    }
}
