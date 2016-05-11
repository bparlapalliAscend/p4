@extends('layouts.master')


@section('title')
 		Create 
@stop


@section('content')
<div class="content">
 
  
  
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <i class="icon-calendar"></i>
          <h3 class="panel-title">Login</h3>
        </div>
        
        <div class="panel-body">
          <form class="form-inline" method='POST' action='/login'>
             {{ csrf_field() }}
            <div class="form-group">
              <label class="sr-only" for="email">Email address</label>
              <input type="email" class="form-control" name= "email" id="email"  placeholder="Enter email" value="{{ old('email')}}">
            </div>
            <div class="form-group">
              <label class="sr-only" for="password">Password</label>
              <input type="password" class="form-control" name="password"  id="password"  placeholder="Password" value="{{ old('password')}}">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-primary" title="">Sign in</button>
            <a href="/register" class="btn btn-warning" role="button">Register</a>
          </form>
        </div>
      </div>
    </div>
  </div>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif
    </div>


   
@stop