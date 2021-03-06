@extends('layouts.master')


@section('title')
 		List of Notes for Patient  {{$patient->firstname}},  {{$patient->lastname}}
@stop
@section('head')
<link href="/assets/css/notelist.css" type='text/css' rel='stylesheet'>
@stop

@section('content')
 
  <div class='content'>
  <div class="row">
  <div class="col-md-12 col-sm-6 col-xs-12">
  <div class="panel-heading clearfix">
          <i class="icon-calendar"></i>
          <h3 class="panel-title">Patient Notes for {{$patient->firstname}},  {{$patient->lastname}}</h3>
          <h4 class="panel-title">{{$patient->description}}</h4>
        </div>      
  
  @if(isset($patientnotes) && $patientnotes!=null)
 <div class="panel-group" id="accordion"> 
  @foreach($patientnotes as $note)

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a  class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$note->id}}">
        {{$note->created_at}}</a>
      </h4>
    </div>
    <div id="collapse{{$note->id}}" class="panel-collapse collapse">
      <div class="panel-body" id="notelistnote{{$note->id}}">{{$note->note}}</div>
      <div class="panel-body text-center">
      				<a href="/showpatients/{{$patient->id}}/editnote/{{$note->id}}" class="btn btn-warning" role="button">Edit Note</a>
      				<a href="/showpatients/{{$patient->id}}/confirmdeletenote/{{$note->id}}" class="btn btn-danger" role="button">Delete Note</a>		
      </div>
    </div>
  </div>

	@endforeach
</div>
	{!! $patientnotes->render() !!}
@else 
<em><h5>There are no notes for this patient, you can click on the link below to start adding notes for the patient</h5></em>

@endif


<a href="/showpatients/addnote/{{$patient->id}}" class="btn btn-primary" role="button">Add New Note</a>	

</div>
</div>
</div>
@stop