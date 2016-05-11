@extends('layouts.master')


@section('title')
 		Delete Note for Patient {{$patient->firstname}} , {{$patient->lastname}}
@stop

@section('content')
 
  <div class='content'>
		
		
<div class="row">
    <div class="col-md-12 col-sm-6 col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <i class="icon-calendar"></i>
          <h3 class="panel-title">Are you sure you want to delete this Note that belongs to patient  {{$patient->firstname}} , {{$patient->lastname}}?</h3>
        </div>
       
        <div class="panel-body form-horizontal row-border">
          <form method="POST" action="/showpatients/{{$patient->id}}/deletenote/">
             <div class="form-group">
             
              <input type="hidden" name="nid" value="{{$note->id}}">
              
              <label class="col-md-2 control-label">Note</label>
              <div class="col-md-10">
              <textarea rows="3" class="form-control" name="description" placeholder="minimum length 3">{{$note->note}}</textarea>
              </div>
            </div>
           <div class="form-group">
            <div class="col-md-10">
            <div>
  					<a href="/showpatients/{{$patient->id}}/editnote/{{$note->id}}" class="btn btn-warning" role="button">Edit Note</a>
  					<a href="/showpatients/{{$patient->id}}/deletenote/{{$note->id}}" class="btn btn-danger" role="button">Confirm Delete</a>		
  					</div>	            
 				 </div>
				</div>

        </div>
        </form>
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
