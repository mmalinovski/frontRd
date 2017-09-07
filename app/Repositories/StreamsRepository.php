<?php

namespace App\Repositories;

use App\Models\Stream;
use Prettus\Repository\Eloquent\BaseRepository;


class StreamsRepository extends BaseRepository {


	public function __construct($slug = null) {
		$this->_slug = $slug;
	}

	function model()
    {
        return "App\\Model\\Stream";
    }

    
    public function byStation($stationId) {

         return Stream::where('radioId', $stationId)->get();
    }




    // public function byGenre($genreSlug) {

    	
    	 // \DB::connection()->enableQueryLog();

    	// $result = \DB::table('radio')
    	// 			->select('radio.name', 'radio.slug', 'radioDetails.info')
    	// 			->join('radioGenres', 'radio.id', '=', 'radioGenres.radioId')
    	// 			->join('genres', 'radioGenres.genresId', '=', 'genres.id')
    	// 			->join('radioDetails', 'radio.radioDetailsId', '=', 'radioDetails.id')
    	// 			->where('genres.slug', '=', $genreSlug)
    	// 			->get();


    	// $queries = \DB::getQueryLog();

    	
    	// return $result;
    // }



    



	

}
