@extends('layouts.master')


@section('title')
 		Create 
@stop


@section('content')

 <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <i class="icon-calendar"></i>
          <h3 class="panel-title">Register</h3>
        </div>
        
        <div class="panel-body">
          <form class="form-horizontal row-border" role="form"  method='POST' action='/register'>
            {!! csrf_field() !!}
              <div class="form-group">
              <label class="col-md-2 control-label" for="name">Name</label>
               <div class="col-md-10">
              <input type="text" class="form-control" name= "name"  placeholder="Minimum 3 chars" value="{{ old('name')}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label" for="email">Email</label>
               <div class="col-md-10">
              <input type="email" class="form-control" name= "email"  placeholder="Enter email" value="{{ old('email')}}">
              </div>
            </div>
				   <div class="form-group">
              <label class="col-md-2 control-label" for="speciality_id">Speciality ID</label>
               <div class="col-md-10">
               <select class="selectpicker form-control" name="speciality_id">
               <option value="">Select a Speciality</option>
              @foreach ($specialityList as $speciality_id => $speciality_name)             
 						 <option value="{{$speciality_id}}">{{$speciality_name}}</option> 						 
 				 @endforeach
				</select>

              </div>
            </div>                       
            <div class="form-group">
              <label class="col-md-2 control-label" for="password">Password</label>
               <div class="col-md-10">
              <input type="password" class="form-control" name="password" >
              </div>
            </div>
             <div class="form-group">
              <label class="col-md-2 control-label" for="password_confirmation">Confirm Password</label>
              <div class="col-md-10">
              <input type="password" class="form-control" name="password_confirmation"  >
            </div>
     			</div>
            <button type="submit" class="btn btn-primary" title="">Register</button>
            <a href="/login" class="btn btn-warning" role="button">Login</a>
          </form>
        </div>
      </div>
    </div>
  </div>

    <p>Already have an account? <a href='/login'>Login here...</a></p>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    

@stop