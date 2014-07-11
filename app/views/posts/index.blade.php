@extends('layouts.master')

@section('content')

<!-- If guest access -->
@if(Auth::guest())
@foreach ($posts as $post)
<div class="">
	<h2>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</h2> 
	<h6>{{ $post->created_at }}</h6><br>
	{{{ $post->renderBody() }}}
</div>

@endforeach
@endif

<!-- If you are logged in -->
@if(Auth::check())
<table class="table table-hover">

<tr>
	<th>Title</th>
	<th>Author</th>
	<th>Date Written</th> 
	<th>Action</th>
</tr>

@foreach ($posts as $post)

<tr>
	<td>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
	<td>{{ $post->user->email }}</td>
	<td>{{{ $post->created_at->format('F jS Y @ h:i:s A') }}}</td> 
	<td>{{ link_to_action('PostsController@edit', 'Edit', array($post->id), array('class' => 'btn btn-danger btn-sm')) }}</td>
</tr>

@endforeach

</table>
@endif

{{ $posts->links() }}

@stop