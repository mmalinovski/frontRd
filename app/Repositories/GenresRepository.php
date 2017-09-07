<?php

namespace App\Repositories;

use App\Models\Genre;
use Prettus\Repository\Eloquent\BaseRepository;


class GenresRepository extends BaseRepository {


	public function __construct($slug = null) {
		$this->_slug = $slug;
	}

	function model()
    {
        return "App\\Model\\Genre";
    }


	public function all($columns = array('*')) {
		$all = Genre::all();
		foreach($all as $genre) {
			if ($genre->slug == $this->_slug) {
				$genre->active = true;
				$this->active = $genre;

			}
		}
		return $all;
	}


	public function bySlug($slug) {

		return Genre::where('slug', $slug)->first();
	}

}
