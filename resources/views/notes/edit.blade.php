@extends('layouts.master')


@section('title')
 		Edit Note for Patient {{$patient->firstname}} , {{$patient->lastname}}
@stop

@section('content')
 
  <div class='content'>



<div class="row">
    <div class="col-md-12 col-sm-6 col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <i class="icon-calendar"></i>
          <h3 class="panel-title">Edit patient Notes for  {{$patient->firstname}} , {{$patient->lastname}} - note created on {{$note->created_at}}</h3>
        </div>      
        <div class="panel-body">
          <form class="form-horizontal row-border"  method='POST' action='/showpatients/{{$patient->id}}/editnote/{{$note->id}}'>
            {{ csrf_field() }}            
             <div class="form-group">
              <label class="col-md-2 control-label">Notes</label>
              <div class="col-md-10">
              <textarea rows="3" class="form-control" name="note" placeholder="minimum length 3">{{ $note->note}}</textarea>
              </div>
            </div>
           <div class="form-group">
            <div class="col-md-10">
  					<button class="btn btn-large btn-primary" type="submit">Submit</button>
  					<a href="/showpatients/{{$patient->id}}" class="btn btn-warning" role="button">List Notes</a>
      				<a href="/showpatients/{{$patient->id}}/confirmdeletenote/{{$note->id}}" class="btn btn-danger" role="button">Delete Note</a>		
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
