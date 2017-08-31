<?php
namespace App\LiveNetworks;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Support\Facades\App;
use \Response;

abstract class LnController extends \App\Http\Controllers\Controller {

	protected $request;

	public function __construct(Request $request) {
		// if (!App::environment('local')) {
			// parent::__construct();
		// }
		$this->request = $request;

		$viewParams = new \StdClass();
		$viewParams->isAjax = false;

		\View::share('params', $viewParams);
	}

}