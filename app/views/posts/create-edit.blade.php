@extends('layouts.master')

@section('content')

<!-- <div class="container" style="background-color:#007791"> -->

	@if (isset($post))
	    <h1>Edit Post</h1>
	    {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true)) }}
    @else
	    <h1>Create a New Post</h1>
	    {{ Form::open(array('action'=>'PostsController@store', 'files' => true)) }}
	@endif
	    
    <div>
	    {{ Form::label('title', 'Title') }}<br>
	    {{ Form::text('title', Input::old('title')) }}
	   	{{ $errors->first('title', '<span class="help-block">:message</span>')}}<br>
	</div>
	<div> 
		{{ Form::label('body', 'Body') }}<br>  	
	    {{ Form::textarea('body', Input::old('body')) }}
	    {{ $errors->first('body', '<span class="help-block">:message</span>')}}<br>	
    </div>

	<div>
		{{ Form::label ('image', 'Add image') }}
    	{{ Form::file('image') }}
	</div>

 	{{ Form::submit('Submit New Post') }}

</div>

	{{ Form::close() }}
@stop