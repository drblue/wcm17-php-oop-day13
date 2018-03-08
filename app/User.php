<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	function products() {
		return $this->belongsToMany('App\Product');
	}
}
