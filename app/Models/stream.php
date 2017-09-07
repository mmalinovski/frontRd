<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\LiveNetworks\LnModel;



class Stream extends LnModel {

	protected $table = "stream";

	private function station() {
		return $this->belongsTo(Station::class, 'radioId');
	}
}