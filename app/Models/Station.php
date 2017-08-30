<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Station extends Model {

	protected $table = "radio";



	public function genres() {
		return $this->belongsToMany(Genre::class, 'radioGenres', 'radioId', 'genresId');
	}

	public function streams() {
		return $this->hasMany(Stream::class, 'radioId');
	}

	public function details() {
		return $this->belongsTo(RadioDetail::class, 'radioDetailsId');
	}
	
}