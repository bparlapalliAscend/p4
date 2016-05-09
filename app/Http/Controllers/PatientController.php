<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller {
	
 public function getPatients() {
		# TO DO get patients belonging to logged in user
		if (\Auth::check())
			{
				 $patients = \App\Patient::with('doctor')->where('doctor_id','=',\Auth::id())->paginate(5);

					   	if(!$patients->isEmpty()) {
						  return view('patients.plist')->with('patients',$patients);  
					}
					else {							
			  			return view('patients.plist');					
					}
			 
		}
		else {
			
		}
	}
	
 public function getAddPatient() {
		return view('patients.create');
	}
	
 public function doAddPatient(Request $request) {
    	
    	$this->validate($request, [
        'firstname' => 'required|min:3',
        'lastname' => 'required|min:3',
        'description' => 'required|min:3'
    ]);
   
		
		try {
			    $patient = new \App\Patient();
        		 $patient->firstname = $request->input('firstname');
      		    $patient->lastname = $request->input('lastname');
      		    $patient->description = $request->input('description');
       		 $patient->doctor_id = \Auth::id();
       		 $saved = $patient->save();
        }
        catch(Exception $e) {
       		 $name = $request->input('firstname');
      	 		 \Session::flash('flash_message','Patient '.$name.' was NOT added. Error: '.$e->getMessage());
      			 return view('patients.create')->with('Request',$request);	
        }
      
        if($saved) {
        			$name = $request->input('firstname');
        			\Session::flash('flash_message','Patient '.$name.' was added');
        			return redirect()->action('PatientController@getPatients');			
    	 }
     else {
     	 			$name = $request->input('firstname');
      	 		 \Session::flash('flash_message','Patient '.$name.' was NOT added');
      			 return view('patients.create')->with('Request',$request);					     
    	 }
        
        return redirect('/');
    }
    
	 public function getEditPatient($id =null) {
	 	
	 	if(!empty($id) && $id !=null) {
	 		$patient = \App\Patient::find($id);
	 	
				  	if(is_null($patient) || $patient->doctor->id != \Auth::id()) {
				  		 \Session::flash('flash_message','Patient does not exist');
					     return redirect()->action('PatientController@getPatients');		
					}
					else {
						  return view('patients.edit')->with('patient',$patient);  
					}
	 		}
 
 	}
 	
 	public function doEditPatient(Request $request) {
 		
 			$patient = \App\Patient::find($request->id);

			$patient->firstname = $request->firstname;
			$patient->lastname = $request->lastname;
			$patient->description = $request->description;
			
			$patient->save();
			\Session::flash('flash_message','Your changes were saved');
			return redirect('/editpatient/'.$request->id);
 	
 	}

	public function getConfirmDelete($id) {

    		$patient = \App\Patient::find($id);
			if($patient->doctor->id == \Auth::id()) {
   					return view('patients.delete')->with('patient', $patient);
   			}
   			else {
   			 		\Session::flash('flash_message','Patient does not exist');
					   return redirect()->action('PatientController@getPatients');		
		   }
	}

public function doDelete($id) {

    # Get the book to be deleted
    $patient = \App\Patient::find($id);

    if(is_null($patient) ||  $patient->doctor->id != \Auth::id()) {
        \Session::flash('flash_message','Book not found.');
         return redirect()->action('PatientController@getPatients');	
    }

    # Then delete the book
    $patient->delete();

    # Done
    \Session::flash('flash_message',$patient->firstname.' '.$patient->lastname.' was deleted.');
     return redirect()->action('PatientController@getPatients');	

} 	
 	
 	
 	
	
}

?>