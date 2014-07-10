@extends ('layouts.master')

@section('content')

	<div class="container col-md-4"></div>

	<div class="container col-md-4">

	{{ Form::open (array('action' => 'HomeController@doLogin', 'class' => 'form-inline' )) }}
		<h2 class="form-signin-heading text-danger"></span>Hola welcome back!</h2>

		<div class="form-group">
			<input name="email" type="text" class="form-control" placeholder="Email" value="{{{ Input::old('email') }}}" required autofocus>
		</div>

		<div class="form-group">
			<input name="password" type="password" class="password form-control" placeholder="Password" required autofocus>
		</div>

		<button type="submit" class="btn btn-danger btn-sm">Sign IN</button>
	
	</div>

	<div class="container col-md-4"></div>	

	{{ Form::close() }}



@stop