<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public $timestamps = false;
	
	function users() {
		return $this->belongsToMany('App\User');
	}
}
