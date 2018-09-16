<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisateur extends Model
{
	protected $table = "organisateur";
	
	public function cours(){
		return $this->hasMany('App\Cours');
	}
    
}
