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
}
