<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\LiveNetworks\LnModel;
// use Illuminate\Support\Facades\Storage;



class Station extends LnModel {

	protected $table = "radio";
	protected $with = ['details'];


	public function genres() {
		return $this->belongsToMany(Genre::class, 'radioGenres', 'radioId', 'genresId');
	}

	public function streams() {
		return $this->hasMany(Stream::class, 'radioId');
	}

	public function details() {
		return $this->belongsTo(RadioDetail::class, 'radioDetailsId');
	}
	
	public function getLogoAttribute() {
		$logo = '/logos/' . $this->attributes['slug'] . '.png';
		if (file_exists(storage_path() . $logo)) {
			return 'http://nextuner.com' . $logo;
		}
		return 'http://nextuner.com/logos/no-logo.png';
	}
	public function getUrlAttribute() {
		return 'http://nextuner.com/stations/' . $this->attributes['slug'];
	}
}