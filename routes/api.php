<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('incident','IncidentController');
Route::resource('registry','RegistryController');
Route::resource('role','RoleController');
Route::resource('typeincident','TypeIncidentController');
Route::resource('user','UserController');

//Autenticacion por token sistema
//Route::apiResource('users','UserController')->middleware('client');

//Autenticacion usuario especifico
//Route::apiResource('users','UserController')->middleware('auth:api');

//Route::get('login', function(){
//    return ['error'=> 'usuario debe autenticarse'];
//})->name('login');

//Route::post('oauth/token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');

//Route::apiResource('users','UserController');
