<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LiveNetworks\LnController;


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
        return view('home.homePage');
    }
}
