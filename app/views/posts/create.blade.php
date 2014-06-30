@extends('layouts.master')

@section('content')
    <h1>Exercise create a post</h1>
    <form action="{{{ action('PostsController@store') }}}" method="POST">
	 	<lable for="title">Post Title</lable>
	 	<input type="text" id="title" name="title" value="{{{ Input::old('title') }}}">
	 	<br>
	 	<lable for="body">Post Body</lable>
	 	<textarea id="body" name="body">{{{ Input::old('body') }}}</textarea>
	 	<br>
	 	<input type="submit">
 	</form>
@stop