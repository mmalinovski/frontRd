<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\LiveNetworks\LnModel;


class Genre extends LnModel {

	protected $table = "genres";

	public function stations() {
		return $this->belongsToMany(Station::class, 'radioGenres', 'genresId', 'radioId');
	}
	
}