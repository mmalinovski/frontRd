<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Repositories\GenresRepository;
use App\Repositories\StationsRepository;
use App\Repositories\StreamsRepository;
use App\Models\Genre;
use App\Models\Stream;
use App\LiveNetworks\LnController;


class StreamController extends LnController
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
    public function index($slug, $streamId)
    {
        $listenUrl = Stream::find($streamId)->listenurl;




        return Redirect::to($listenUrl);

    }



    

}
