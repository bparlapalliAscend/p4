@extends('layouts.master')


@section('title')
 		Edit Patient {{$patient->firstname}}, {{$patient->lastname}}
@stop

@section('content')
 
  <div class='content'>
		
		
<div class="row">
    <div class="col-md-12 col-sm-6 col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <i class="icon-calendar"></i>
          <h3 class="panel-title">Edit Patient Data</h3>
        </div>
       
        <div class="panel-body">
          <form class="form-horizontal row-border"  method='POST' action='/editpatient'>
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$patient->id}}">
            <div class="form-group">
              <label class="col-md-2 control-label">Firstname</label>
              <div class="col-md-10">
                <input class="form-control" type="text" name="firstname" placeholder="minimum length 3" value="{{$patient->firstname}}">
              </div>
            </div>
           <div class="form-group">
              <label class="col-md-2 control-label">Lastname</label>
              <div class="col-md-10">
                <input class="form-control" type="text" name="lastname" placeholder="minimum length 3" value="{{$patient->lastname}}">
              </div>
            </div>
            
             <div class="form-group">
              <label class="col-md-2 control-label">Description</label>
              <div class="col-md-10">
              <textarea rows="3" class="form-control" name="description" placeholder="minimum length 3">{{$patient->description}}</textarea>
              </div>
            </div>
           <div class="form-group">
            <div class="col-md-10">
  					<button class="btn btn-large btn-primary" type="submit">Submit</button>	
  					<a href="/editpatient/confirmdelete/{{$patient->id}}" class="btn btn-warning" role="button">Delete Patient</a>			            
 				 </div>
				</div>

          </form>
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
