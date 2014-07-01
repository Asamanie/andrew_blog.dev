@extends('layouts.master')

@section('content')

    <h1>Edit a post</h1>

   	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

    <div>
	    {{ ($errors->has('title')) }}<br>
	   	{{ $errors->first('title', '<span class="help-block">:message</span>')}} <br>	
	</div>

   	<div>
	    {{ ($errors->has('body')) }}<br>
	    {{ $errors->first('body', '<span class="help-block">:message</span>')}}<br>
	</div>

		<div>
	    	{{ Form::label('title', 'Title') }}<br>
	    	{{ Form::text('title') }}<br>

	    	{{ Form::label('body', 'Body') }}<br>
	    	{{ Form::textarea('body') }}<br>
	    </div>	
		 
		 {{ Form::submit('Save Post') }}
	 	
	{{ Form::close() }}

@stop