<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');
Route::get('/', array('as'=>'home','uses'=>'WelcomeController@index'));

Route::get('/about', array('as'=>'about','uses'=>'PageController@about'));
Route::get('/jobs', array('as'=>'job','uses'=>'PageController@jobs'));
Route::get('/services', array('as'=>'service','uses'=>'PageController@service'));
Route::get('/job', 'Jobs@index');


Route::get('/services/workforce_outsourcing', array('as'=>'outsrc','uses'=>'PageController@outsourcing'));
Route::get('/services/training', array('as'=>'trnng','uses'=>'PageController@training'));
Route::get('/services/payroll', array('as'=>'pay','uses'=>'PageController@payRoll'));
Route::get('/services/hrservices', array('as'=>'hrsrv','uses'=>'PageController@hrServices'));
Route::get('/services/recruitment', array('as'=>'recruite','uses'=>'PageController@recruitment'));
Route::get('/services/consultation', array('as'=>'consult','uses'=>'PageController@consultation'));



Route::get('/training/projectmanagement', array('as'=>'pgmnt','uses'=>'PageController@projectManagement'));
Route::get('/services/onSiteProManagement', array('as'=>'onsite','uses'=>'PageController@onSiteProManagement'));
Route::get('/services/operationalProjectManagement', array('as'=>'opm','uses'=>'PageController@operationalProjectManagement'));
Route::get('/services/fastTrackProjectManagement', array('as'=>'ftpm','uses'=>'PageController@fastTrackProjectManagement'));
Route::get('/services/customerService', array('as'=>'cus','uses'=>'PageController@customerService'));





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
