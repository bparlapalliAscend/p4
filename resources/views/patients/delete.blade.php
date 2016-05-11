

@extends('layouts.master')


@section('title')
 		Delete Patient {{$patient->firstname}}, {{$patient->lastname}}
@stop

@section('content')
 
  <div class='content'>
		
		
<div class="row">
    <div class="col-md-12 col-sm-6 col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <i class="icon-calendar"></i>
          <h3 class="panel-title">Are you sure you want to delete this patient {{$patient->firstname}}, {{$patient->lastname}}?</h3>
        </div>
       
        <div class="panel-body form-horizontal row-border">
         
            <div class="form-group">
              <label class="col-md-2 control-label">Firstname</label>
              <div class="col-md-10">
                <input class="form-control" type="text" name="firstname" id ="firstname" placeholder="minimum length 3" value="{{$patient->firstname}}">
              </div>
            </div>
           <div class="form-group">
              <label class="col-md-2 control-label">Lastname</label>
              <div class="col-md-10">
                <input class="form-control" type="text" name="lastname" id ="lastname" placeholder="minimum length 3" value="{{$patient->lastname}}">
              </div>
            </div>
            
             <div class="form-group">
              <label class="col-md-2 control-label">Description</label>
              <div class="col-md-10">
              <textarea rows="3" class="form-control" name="description" id ="description" placeholder="minimum length 3">{{$patient->description}}</textarea>
              </div>
            </div>
           <div class="form-group">
            <div class="col-md-10">
            <div>
  					<a href="/editpatient/{{$patient->id}}" class="btn btn-primary" role="button">Go Back to Edit</a>	
  					<a href="/editpatient/delete/{{$patient->id}}" class="btn btn-danger" role="button">Confirm Delete</a>		
  					</div>	            
 				 </div>
				</div>

        </div>
      </div>
    </div>
  </div>
  </div>

  
  @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  
 @stop
