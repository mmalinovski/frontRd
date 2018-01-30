<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LiveNetworks\LnController;
use App\Models\Station;
use App\Models\Genre;
use App\Models\RadioDetail;
use Illuminate\Support\Facades\Storage;



class HomePageController extends LnController
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

		$randomStations = Station::orderByRaw('RAND()')->whereNotNull('radioDetailsId')->where('active', 1)->take(10)->get();
		$randomStationsEditor = Station::orderByRaw('RAND()')->whereNotNull('radioDetailsId')->where('active', 1)->take(7)->get();
		$randomStationsPopular = Station::orderByRaw('RAND()')->whereNotNull('radioDetailsId')->where('active', 1)->take(10)->get();


		return view('home.homePage')->with('genres', $genres)->with('randomStations', $randomStations)->with('randomStationsEditor', $randomStationsEditor)->with('randomStationsPopular', $randomStationsPopular);
	}


	// public function ListOfStations() {
	// 	$stationsList = Station::all();
	// 	return $stationsList;

	// }

	public function SearchStation(Request $request) {

		 // \DB::connection()->enableQueryLog();

		$query = Station::where('name', 'like', '%' . $request->search . '%')->where('active', 1)->limit(10)->get();

		// $queries = \DB::getQueryLog();

		return $query;


        // return dd($queries);
	}
}
