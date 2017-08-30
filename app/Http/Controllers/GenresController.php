<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenresController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::simplePaginate(20);
        return view('Genres.listOfGenres')->with('genres', $genres);
    }


    public function genre($slug) {
        $genre = Genre::where('slug', $slug)->with('stations.details')->first();
        $genres = Genre::all();

        return view('Genres.genres')->with('genres', $genres)->with('genre', $genre);
    }

}
