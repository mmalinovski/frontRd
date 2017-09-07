<?php
namespace App\Models\;
use App\LiveNetworks\LnModel;


class Country extends LnModel {

	protected $table = "countries";
	protected $primaryKey = 'id';
    public $incrementing = false;
	
}