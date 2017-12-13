<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','sample') - laravel study</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
  <header class="navbar navbar-fix-top navbar -inverse">
    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        <a href="/" id="logo">Sample App</a>
        <nav>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/help">help</a></li>>
            <li><a href="#">login</a></li>
          </ul>
        </nav>
      </div>
     </div>
   </header>
   
	<div class="container">        
	 @yield('content')
	</div>
</body>
</html>