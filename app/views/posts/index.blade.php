@extends('layouts.master')

@section('content')

<h1>All my post</h1>
@foreach ($posts as $post)

	{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}
	<br>
	@endforeach
	<hr>
	{{link_to_action('PostsController@create', 'New Post') }}

@stop