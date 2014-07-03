@extends('layouts.master')

@section('content')

<div class="container" style="background-color:#007791">


<h1>All my post</h1>

<table class="table table-hover">

@foreach ($posts as $post)

<tr>
	<td>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
	<td>{{ link_to_action('PostsController@edit', 'Edit', array($post->id), array('class'=> 'btn btn-default btn-sm')) }}</td>
</tr>

@endforeach

</table>

	{{ $posts->links() }}
<p>
	{{link_to_action('PostsController@create', 'Create New Post') }}
</p>	
	

@stop