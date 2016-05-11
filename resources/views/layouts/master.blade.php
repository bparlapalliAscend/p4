<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','Developers Best Friend')
    </title>
		  <link href="/assets/css/navbar.css" type='text/css' rel='stylesheet'>
		  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
   		 <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type='text/css' property='stylesheet'>
    <meta charset='utf-8'>


    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>
<div class="container">
@if(Session::get('flash_message') != null)
    <div class='alert alert-warning'>{{ Session::get('flash_message') }}</div>
@endif
<div id="wrap">
 	<div id="main" class="container clear-top">
    <header>
        <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="/assets/images/v_icon_header.png" alt="vaaidya"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
           @if(Auth::check())
            <li class="active"><a href="/">Home</a></li>           
            <li><a href="/showpatients">MyPatients</a></li>
             <li><a href="/logout">Logout</a></li>
            @else
              <li class="active"><a href="#">Home</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Signup</a></li>
            @endif
          </ul>
        </div>
      </div>
		</nav>
    </header>
    
    <section>
         @yield('content')
    </section>


		

  		  {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
  	  @yield('body')
	</div>
</div>
<hr>
 <footer>
        <p>© Vaaidya 2016</p>
      </footer>
</div>



</body>
</html>