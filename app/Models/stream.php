<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Stream extends Model {

	protected $table = "stream";

	private function station() {
		return $this->belongsTo(Station::class, 'radioId');
	}
}