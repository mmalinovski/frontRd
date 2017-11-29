<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LiveNetworks\LnController;
use App\Models\Station;
use App\Models\Genre;
use App\Models\RadioDetail;
use Illuminate\Support\Facades\Storage;



class MobileApiController extends LnController
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
		
	}


	public function ListOfStations() {
		$stationsList = Station::limit(30)->get();
		return $stationsList;

	}

	public function ListOfGenres() {
		$stationsList = Genre::limit(30)->get();
		return $stationsList;

	}

	// public function SearchStation(Request $request) {

			 // \DB::connection()->enableQueryLog();

		// $query = Station::where('name', 'like', '%' . $request->search . '%')->limit(10)->get();

			// $queries = \DB::getQueryLog();

		// return $query;


       		 // return dd($queries);
	// }
}
