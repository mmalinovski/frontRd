<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\Repositories\StationsRepository;
use App\Repositories\StreamsRepository;
use App\LiveNetworks\LnController;


class StationsController extends LnController
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
        return view('Stations.stations');
    }

    public function station($slug) {

        // $station = Station::where('slug', $slug)->first();
        // return view('Stations.stations')->with('station', $station);

        $station = new StationsRepository($slug);
        $stationDetails = $station->get();

        if($stationDetails == null) {
            return redirect("/");
        }

        $streams = new StreamsRepository();

        $page = new \StdClass();

        $page->title = $stationDetails->name;
        $page->isStation = true;


        return view('Stations.stations')->with('streams', $streams)->with('station', $stationDetails)->with('page', $page);
    }
}
