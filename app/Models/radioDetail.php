<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\LiveNetworks\LnModel;


class RadioDetail extends LnModel {

	protected $table = "radioDetails";
	
	public $timestamps = false;

	public function country() {
		return $this->hasOne(Country::class, 'countryId');
	}

	public function station() {
		return $this->hasOne(Station::class, 'radioDetailsId');
	}
	
}