<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LiveNetworks\LnController;


class StaticPagesController extends LnController
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
    public function index($url)
    {
        return view('StaticPages.'.$url);
    }
}
