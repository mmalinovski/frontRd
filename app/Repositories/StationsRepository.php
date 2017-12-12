<?php

namespace App\Repositories;

use App\Models\Station;
use App\Models\Genre;
use Prettus\Repository\Eloquent\BaseRepository;


class StationsRepository extends BaseRepository {


	public function __construct($slug = null) {
		$this->_slug = $slug;
	}

	function model()
    {
        return "App\\Model\\Station";
    }


    public function byGenre($genreSlug) {

    	
    	 // \DB::connection()->enableQueryLog();

    	// $result = \DB::table('radio')
    	// 			->select('radio.id', 'radio.name', 'radio.slug', 'radioDetails.info')
    	// 			->join('radioGenres', 'radio.id', '=', 'radioGenres.radioId')
    	// 			->join('genres', 'radioGenres.genresId', '=', 'genres.id')
    	// 			->join('radioDetails', 'radio.radioDetailsId', '=', 'radioDetails.id')
    	// 			->where('genres.slug', '=', $genreSlug)
    	// 			->get();


        $genre = Genre::where('slug', $genreSlug)->first()->stations()->where('active',1)->with('details')->simplePaginate(20);

        

        // dd($genre);
        
                // $result = $genre->stations;


    	// $queries = \DB::getQueryLog();

    	
    	return $genre;
    }

    public function get() {
    	return Station::where('slug', '=', $this->_slug)->where('active', 1)->with('details')->first();
    }



	

}
