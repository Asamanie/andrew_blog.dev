@extends('layouts.master')

@section('content')

<div class="container-fluid" style="background-color:#007791">

	@if (isset($post))
	    <h1>Edit Post</h1>
	    {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
    @else
	    <h1>Create a New Post</h1>
	    {{ Form::open(array('action'=>'PostsController@store')) }}
	@endif
	    
     

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

</div>

	{{ Form::close() }}
@stop