@extends('layouts.master')

@section('content')

@foreach ($posts as $post)
	<p><h2>{{{ $post->title}}}</h2></p>
	<p><h3>{{{ $post->body}}}</h3></p>
	<hr>
@endforeach

@stop