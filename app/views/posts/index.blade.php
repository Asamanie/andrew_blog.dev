@extends('layouts.master')

@section('content')

<!-- <header class"container" align="center">Blog Header Testing</header> -->

@if (Auth::check())
 <div class="container">
	{{ link_to_action('HomeController@doLogout', 'Logout', null, array('class'=> 'btn btn-danger btn-xs pull-right')) }}
 </div>	
@endif

<!-- <div class="container" style="background-color:#007791"> -->

<h1>
	All my post

	{{link_to_action('PostsController@create', 'Create New Post', null, array('class' => 'btn btn-primary pull-right')) }}

</h1>


<table class="table table-hover">

<tr>
	<th>Title</th>
	<th>Author</th>
	<th>Action</th>
</tr>

@foreach ($posts as $post)

<tr>
	<td>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
	<td>{{ $post->user->email }}</td>
	<td>{{ link_to_action('PostsController@edit', 'Edit', array($post->id), array('class' => 'btn btn-default btn-sm')) }}</td>
</tr>

@endforeach

</table>

{{ $posts->links() }}


{{ Form::open(array('action' =>  'PostsController@index', 'class' => 'form-inline', 'method' => 'GET')) }}

{{ Form::text('search', null, array('placeholder' => 'Search Titles', 'class' => 'form-control col-lg-4')) }}
{{ Form::submit('Search', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


@stop