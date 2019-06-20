<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cours;

/*******************************************
 * Class CoursController
 * Controller pour l'ensemble des informations
 * concernant les cours.
 */
class CoursController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:api');
    }

    /************************************
     * Méthode principale
     * Retourne l'ensemble des cours.
     * @return Liste des cours.
     *************************************/
    public function index(Request $request)
    {
        $organisateur_id = $request->org_id;
        $code = $request->code;
        $categories = $request->cat;
        if(!empty($code))
            return $this->getCoursByCode($code);
        if(!empty($organisateur_id))
            return $this->getCoursByOrganisateur($organisateur_id);
        if(!empty($categories))
            return $this->getCoursByCategorie($categories);
        //return Cours::with("organisateur", "categorie")->get();
        return Cours::all();
    }
 
    /*****************************************
     * Retourne l'information d'un cours
     * selon le ID fournit en parametre
     *****************************************/
    public function show(Cours $cours)
    {
        return $cours->load("organisateur")->load("categorie");
    }
    
    public function getCoursByCode($code){
        $cours = Cours::where('code', '=',$code)->get();
        
        return $cours;
    }
    
    public function getCoursByOrganisateur($organisateur_id){
        $cours = Cours::whereHas('organisateur', function ($query) use ($organisateur_id){
            $query->where('organisateur_id', '=',$organisateur_id);
        })->get();
        
        return $cours;
    }
    public function getCoursByCategorie($listCat){
        $listCat =  explode(",", $listCat);
        $cours = Cours::whereHas('categorie', function ($query) use ($listCat){
            $query->whereIn('categorie_id',$listCat);
        })->get();
        return $cours;
    }

    public function store(Request $request)
    {
		$cours = Cours::create($request->all());
        return response()->json($cours, 201);
    }

    public function update(Request $request, Cours $cours)
    {
        $cours->update($request->all());

        return response()->json($cours, 200);
    }

    public function delete(Cours $cours)
    {
        $cours->delete();

        return response()->json(null, 204);
    }
    
    public function sessions()
    {
        return Cours::with("session")->get();
    }
    
    public function details()
    {
        return Cours::with("organisateur", "categorie", "session")->get();
    }
    
    /*****************************************
     * Obtenir les cours en cours de session
     * @return liste des cours non terminé
     *****************************************/
    public function getCurrentSessions(){
        //return Cours::with("current_session")->get();
        return Cours::with("organisateur", "categorie", "session")->whereHas('session',function ($query) {
            $query->where('fin', '>=', date("Y-m-d"));
        })->get();
    }
    
    public function between($dateDebutString, $dateFinString){
        $dateDebut = date($dateDebutString);
        $dateFin = date($dateFinString);

        $cours = Cours::whereHas('session', function ($query) use ($dateDebut, $dateFin){
            $query->where('debut', '>=',$dateDebut)->where('debut', '<=',$dateFin);
        })->get();
        //$session = Session::where('debut', '>=',$dateDebut)->where('debut', '<=',$dateFin)->get();
        return response()->json($cours, 200);
    }
    public function started($dateDebutString){
        $dateDebut = date($dateDebutString);

        //$session = Session::whereDate('debut', $dateDebut)->get();
        $session = Session::where('debut', '>=',$dateDebut)->get();
        return response()->json($session, 200);
        //return request()->input('debut');
    }
    
    public function ended($dateFinString){
        $dateFin = date($dateFinString);

        //$session = Session::whereDate('debut', $dateDebut)->get();
        $session = Session::where('fin', '>=',$dateFin)->get();
        return response()->json($session, 200);
        //return request()->input('debut');
    }

    public function notYet(){
        return response()->json("Pas encore disponible", 404);
    }
}
