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
	
	
	Route::post('cours', 'CoursController@store');
	Route::put('cours/{id}', 'CoursController@update');
	Route::delete('cours/{id}/', 'CoursController@delete');
	
	Route::get('cours/sessions', 'CoursController@sessions');
	Route::get('cours/details', 'CoursController@details');

	Route::get('cours/courant', 'CoursController@getCurrentSessions');
	
	/************************************************************************************************/
	// PAS ENCORE IMPLÉMENTER
	/************************************************************************************************/
	Route::get('cours/{id}/categories/', 'CoursController@notYet');
	Route::get('cours/{id}/categories/{catecorieid}', 'CoursController@notYet');
	Route::get('cours/{id}/organisateur/', 'CoursController@notYet');
	Route::get('cours/{id}/sessions/', 'CoursController@notYet');
	Route::get('cours/{id}/sessions/{sessionid}/', 'CoursController@notYet');
	Route::get('cours/{id}/sessions?start={dateDebut}', 'CoursController@notYet');
	Route::get('cours/{id}/sessions?start={dateDebut}&end={dateFin}', 'CoursController@notYet');
	Route::get('cours/{id}/sessions/etudiants/', 'CoursController@notYet');
	Route::get('cours/{id}/sessions/etudiants/{idEtudiant}', 'CoursController@notYet');
	Route::get('cours/{id}/sessions/etudiants?nom={nom}&email={email}', 'CoursController@notYet');
	Route::get('cours/{id}/sessions/intervenants/', 'CoursController@notYet');
	Route::get('cours/{id}/sessions/intervenants/{idIntervenant}', 'CoursController@notYet');
	Route::get('intervenants/{id}', 'CoursController@notYet');
	Route::get('categories/{id}', 'CoursController@notYet');
	Route::get('organisateurs/', 'CoursController@notYet');
	Route::get('organisateurs/{id}', 'CoursController@notYet');
	
	Route::get('sessions/', 'SessionController@notYet');
	//Route::get('sessions/{session}', 'SessionController@show');
        //Route::get('sessions?debut={debut}', 'SessionController@started');
	
	
//});