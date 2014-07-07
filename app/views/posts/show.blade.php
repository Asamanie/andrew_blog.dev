@extends('layouts.master')

@section('content')

<div class="container" style="background-color:#007791">

<h1>{{{ $post->title}}}</h1>
<p>{{{$post->created_at->format('F jS Y @ h:i:s A') }}}</p>
<p><h3>{{{ $post->body}}}</h3></p>

{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
	{{ Form::submit('Delete') }}
{{ Form::close() }}

</div>
@stop