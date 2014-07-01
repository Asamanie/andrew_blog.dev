@extends('layouts.master')

@section('content')

    <h1>Exercise create a post</h1>

     {{ Form::open(array('action'=>'PostsController@store')) }}

    <div>
	    {{ ($errors->has('title')) }}
	   	{{ $errors->first('title', '<span class="help-block">:message</span>')}}<br>
	</div>
	<div>   	
	    {{ ($errors->has('body')) }}
	    {{ $errors->first('body', '<span class="help-block">:message</span>')}}<br>	
    </div>

    	<div>
	    	{{ Form::label('title', 'Title') }}<br>
	    	{{ Form::text('title') }}<br>

	    	{{ Form::label('body', 'Body') }}<br>
	    	{{ Form::textarea('body') }}<br>
    	</div>

	 	{{ Form::submit('Submit New Post') }}

	{{ Form::close() }}
@stop