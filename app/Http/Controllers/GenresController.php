<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\GenresRepository;
use App\Repositories\StationsRepository;
use App\Repositories\StreamsRepository;
use App\Models\Genre;
use App\LiveNetworks\LnController;


class GenresController extends LnController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        
        parent::__construct($request);
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



    public function SearchGenres(Request $request) {

         // \DB::connection()->enableQueryLog();

        $query = Genre::where('name', 'like', '%' . $request->search . '%')->limit(10)->get();

        // $queries = \DB::getQueryLog();

        return $query;


        // return dd($queries);
    }



    public function genre($slug) {

        // \DB::connection()->enableQueryLog();

        $genres = new GenresRepository($slug);
        $genres->all();

        if (property_exists($genres,"active")){
            $page = new \StdClass();
            $page->title = $genres->active->name;

            $stations = new StationsRepository();
            $streams = new StreamsRepository();

            return view('Genres.genres')->with('page', $page)->with('genres', $genres)->with('stations', $stations)->with('streams', $streams);
        }
        else{
            return redirect("/");
        }


        
        // $genre = Genre::where('slug', $slug)->with('stations.details')->first();
        // $genre = $Stations->byGenre($slug);


        // $queries = \DB::getQueryLog();
        // return dd($queries);

        // $genres = Genre::all();


    }

}
