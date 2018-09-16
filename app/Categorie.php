<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = "categorie";
	
	public function cours()
    {
        return $this->belongsToMany('App\Cours')->using('App\CatCours');
    }
}
