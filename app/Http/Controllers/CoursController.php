<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cours;

class CoursController extends Controller
{
	public function __construct()
    {
      $this->middleware('auth:api');
    }
	
    public function index()
    {
        return Cours::with("organisateur", "categorie")->get();
    }
 
    public function show(Cours $cours)
    {
        return $cours->load("organisateur")->load("categorie");
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
}
