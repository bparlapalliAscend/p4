@extends('layouts.master')


@section('title')
 		List of Patients
@stop


@section('content')
	@if (isset($patients) && $patients!=null) 
		<div class="gaptop">
    				 <table class="table table-striped">
     							<tr>
						  			<th>First Name</th>   
						    		<th>Last Name</th>
									<th>Date Added</th>			
									<th>Associated Doctor</th>	
									<th>Edit Patient</th>	
									<th>Show the Paitent Notes</th>	
									<th>Add note today</th>	
     							</tr>
     			
						   @foreach ($patients as $patient) 
		 							<tr>
										<td>{{ $patient->firstname}}</td>		 					 	
								  		<td>{{$patient->lastname}}</td>					  
								 		 <td>{{$patient->created_at}}</td> 
								 		 <td>{{$patient->doctor->name}}</td> 
								 		 <td><a href="\editpatient\{{$patient->id}}"> Edit..</a></td> 
								 		 <td><a href="\showpatients\{{$patient->id}}"> List Notes</a></td> 
								 		  <td><a href="\showpatients\addnote\{{$patient->id}}"> Add Note</a></td> 
									</tr>		
		 					 @endforeach    
     					</table>
 		</div>
 		
 		{!! $patients->render() !!}
 		
 		<div class="addmore">
   			<a href="\addpatient">Add another Patient	</a>
		</div>
 		
 	@else
 	<div class ="message">
		You do not have any patients yet. <a href="\addpatient">You can add a patient here</a> and then start adding notes for the patient. 	
 	</div>
	@endif
	



@stop