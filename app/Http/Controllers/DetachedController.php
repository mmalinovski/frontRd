<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\Repositories\StationsRepository;
use App\Repositories\StreamsRepository;
use App\LiveNetworks\LnController;



class DetachedController extends LnController
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
	public function index($slug)
	{
		$station = new StationsRepository($slug);
        $stationDetails = $station->get();
        $streams = new StreamsRepository();

		return view('Detached.detached')->with('streams', $streams)->with('station', $stationDetails);
	}

}