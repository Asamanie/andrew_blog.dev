<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>
	<div class"container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				@if (Session::has('successMessage'))
			    	<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
				@endif
				@if (Session::has('errorMessage'))
			    	<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
				@endif
				@yield('content')			
			</div>
		</div>	
	</div>
</body>
<body>	
	<div>
		<div>	
			<div class="span4">
			</div>
		</div>
	</div>
</body>
</html>
