<!doctype html>
<html lang="en" class="no-js">
<head>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<title>My blog</title>
</head>
<body style="background-color:black">
	
	@yield('content')
	
	<div>
	
		@if (Session::has('successMessage'))
	    	<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
	    	<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif
	
	</div>
</body>
</html>
