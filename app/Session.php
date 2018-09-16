<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = "session";
	
	public function intervenant(){
		return $this->belongsTo('App\Intervenant');
	}
	
	public function cours(){
		return $this->belongsTo('App\Cours');
	}
}
