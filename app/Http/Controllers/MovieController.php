<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller 
{
    public function index() {

        $movies = Movie::all();
        
        return view('home', compact('movies'));
    }

    public function show($id) {
        //SELECT * FROM movie WHERE id = $id

        $movie = Movie::where('id', $id)->first();
        // $movie = Book::find($id);

        return view('show', compact('movie'));
    }
}
