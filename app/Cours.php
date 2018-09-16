<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $fillable = ['code', 'titre', 'description', 'prix', 'organisateur_id'];
	
	public function organisateur(){
		return $this->belongsTo('App\Organisateur');
	}
	public function categorie()
    {
        //return $this->belongsToMany('App\Cours', 'categorie_cours', 'cours_id','categorie_id');
		return $this->belongsToMany('App\Categorie')->using('App\CatCours');
    }
	
	
}
