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
	
	
	Route::get('/show-login-status', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();

    if($user) {
        echo 'You are logged in.';
        dump($user->toArray());
    } else {
        echo 'You are not logged in.';
    }

    return;

	});
	
	Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
	
	
