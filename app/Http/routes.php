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

Route::get('/', function () {
    return view('welcome');
});



	// Home Page

	Route::get('/', 'HomeController@getIndex');	
	
	
	// Auth
	# Show login form
	Route::get('/login', 'Auth\AuthController@getLogin');

	# Process login form
	Route::post('/login', 'Auth\AuthController@postLogin');

	# Process logout
	Route::get('/logout', 'Auth\AuthController@logout');

	# Show registration form
	Route::get('/register', 'Auth\AuthController@getRegister');

	# Process registration form
	Route::post('/register', 'Auth\AuthController@postRegister');
	
	
   Route::group(['middleware' => 'auth'], function() {
					// add patient
					Route::get('/addpatient', 'PatientController@getAddPatient');	
					Route::post('/addpatient', 'PatientController@doAddPatient');	
	
					// edit patient
					Route::get('/editpatient/{id?}','PatientController@getEditPatient' );	
					Route::post('/editpatient/{id?}', ['uses' =>'PatientController@doEditPatient']);	
					
					Route::get('/editpatient/confirmdelete/{id?}', 'PatientController@getConfirmDelete');
					Route::get('/editpatient/delete/{id?}', 'PatientController@doDelete');
	
					// List of patients
					Route::get('/showpatients', 'PatientController@getPatients');	
	
					// Show a Patients record
					Route::get('/showpatients/{id}', 'PatientController@getPatientRecords');	
					Route::get('/showpatients/addnote/{id}', 'PatientController@getAddPatientRecords');	
					Route::post('/showpatients/addnote/{id}', 'PatientController@doAddPatientRecords');	
					Route::get('/showpatients/{pid}/editnote/{nid}', 'PatientController@getEditPatientRecords');	
					Route::post('/showpatients/{pid}/editnote/{nid}', 'PatientController@doEditPatientRecords');	
					Route::get('/showpatients/{pid}/confirmdeletenote/{nid}', 'PatientController@getConfirmDeleteNote');	
					Route::get('/showpatients/{pid}/deletenote/{nid}', 'PatientController@doDeleteNote');	
   		
	});
	
	
	
