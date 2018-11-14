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
        
        public function session(){
		return $this->hasMany('App\Session');
	}
        
        public function current_session(){
            //return $this->hasMany('App\Session')->where('fin', '>=', date("Y-m-d"));
            return Cours::whereHas('session', function ($query) {
                $query->where('fin', '>=', date("Y-m-d"));
            });
	}
        
	
	
}
