<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class RadioDetail extends Model {

	protected $table = "radioDetails";
	
	public $timestamps = false;

	public function country() {
		return $this->hasOne(Country::class, 'countryId');
	}

	public function station() {
		return $this->hasOne(Station::class, 'radioDetailsId');
	}
	
}