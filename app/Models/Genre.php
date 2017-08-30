<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Genre extends Model {

	protected $table = "genres";

	public function stations() {
		return $this->belongsToMany(Station::class, 'radioGenres', 'genresId', 'radioId');
	}
	
}