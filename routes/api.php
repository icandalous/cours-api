<?php

use Illuminate\Http\Request;
use App\Cours;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
	//die(Auth::guard('api')->check());
    return $request->user();
});

// Groupe de routes pour le versioning d'API
//Route::group(array('prefix' => 'v1', 'before' => 'auth.basic'), function()
//{
	/*Route::middleware('auth:api')->get('/user', function (Request $request) {
		return $request->user();
	});*/
    
	Route::post('register', 'Auth\RegisterController@register');
	Route::post('login', 'Auth\LoginController@login');
	Route::post('logout', 'Auth\LoginController@logout');
	
	Route::get('cours', 'CoursController@index');
	Route::get('cours/{cours}', 'CoursController@show');
	Route::get('cours/{id}/categories/', 'CoursController@index');
	
	Route::post('cours', 'CoursController@store');
	Route::put('cours/{id}', 'CoursController@update');
	Route::delete('cours/{id}/', 'CoursController@delete');
	
	
	Route::get('cours/{id}/categories/{catecorieid}', 'CoursController@index');
	Route::get('cours/{id}/organisateur/', 'CoursController@index');
	Route::get('cours/{id}/sessions/', 'CoursController@index');
	Route::get('cours/{id}/sessions/{sessionid}/', 'CoursController@index');
	Route::get('cours/{id}/sessions?date?start={dateDebut}', 'CoursController@index');
	Route::get('cours/{id}/sessions?date?start={dateDebut}&end={dateFin}', 'CoursController@index');
	Route::get('cours/{id}/sessions/etudiants/', 'CoursController@index');
	Route::get('cours/{id}/sessions/etudiants/{idEtudiant}', 'CoursController@index');
	Route::get('cours/{id}/sessions/etudiants?nom={nom}&email={email}', 'CoursController@index');
	Route::get('cours/{id}/sessions/intervenants/', 'CoursController@index');
	Route::get('cours/{id}/sessions/intervenants/{idIntervenant}', 'CoursController@index');
	Route::get('intervenants/{id}', 'CoursController@index');
	Route::get('categories/{id}', 'CoursController@index');
	Route::get('organisateurs/', 'CoursController@index');
	Route::get('organisateurs/{id}', 'CoursController@index');
	
	Route::get('sessions/', 'SessionController@index');
	//Route::get('sessions/{session}', 'SessionController@show');
        //Route::get('sessions?debut={debut}', 'SessionController@started');
	Route::get('cours/sessions', 'CoursController@sessions');
	Route::get('cours/details', 'CoursController@details');
	Route::get('cours/courant', 'CoursController@getCurrentSessions');
//});