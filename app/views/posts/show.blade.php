@extends('layouts.master')

@section('content')

<h1>{{{ $post->title }}}</h1>
<p>{{{$post->created_at->format('F jS Y @ h:i:s A') }}}</p>
<p><h4>{{ $post->renderBody() }}</h4></p>

@if ($post->img_path)
	<img src="{{{ $post->img_path }}}" class="img-responsive">
@endif	

@if(Auth::check())
{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
	{{ Form::submit('Delete') }}
{{ Form::close() }}
@endif

@stop



