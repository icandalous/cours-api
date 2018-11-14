<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;

class SessionController extends Controller
{
	public function __construct()
    {
      $this->middleware('auth:api');
    }
	
    public function index()
    {
        if (request()->input('debut')) {
            //$session = $this->started(request()->input('debut'));
        }
        if(request()->input('fin')) {
            //$session = $this->started(request()->input('debut'));
        }
        return Session::all();
    }
 
    public function show(Session $session)
    {
        return $session->load("cours")->load("intervenant");
    }

    public function store(Request $request)
    {
		$session = Session::create($request->all());
        return response()->json($session, 201);
    }

    public function update(Request $request, Session $session)
    {
        $session->update($request->all());

        return response()->json($session, 200);
    }

    public function delete(Session $session)
    {
        $session->delete();

        return response()->json(null, 204);
    }
    
    public function between($dateDebutString, $dateFinString){
        $dateDebut = date($dateDebutString);
        $dateFin = date($dateFinString);

        $session = Session::where('debut', '>=',$dateDebut)->where('debut', '<=',$dateFin)->get();
        return response()->json($session, 200);
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
}
