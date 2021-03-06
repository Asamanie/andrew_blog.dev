<?php

class PostsController extends \BaseController {

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::with('user')->paginate(4);
		if(Input::has('search'))
		{
			$search = Input::get('search');
			$posts = Post::where("title", "LIKE", "%$search%")->orderBy('created_at', 'DESC')->paginate(4);

		} else {
			$posts = Post::orderBy('created_at', 'DESC')->paginate(4);
		}
		return View::make('posts.index')->with('posts', $posts);
	}
					
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create-edit');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails())
		{
			Session::flash('errorMessage', 'There were errors submitting your form');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{	
			$post = new Post();

			if  (Input::hasFile('image') && Input::file('image')->isValid()) 
			{
				$post->addUploadedImage(Input::file('image'));
			}

			$post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();

			Session::flash('successMessage', 'Post created successfully');
			return Redirect::action('PostsController@index');
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// will allow user to edit blog post
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.create-edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// will update the edited blog in the db
	public function update($id)
	{
		$post = Post::findOrFail($id);	

		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails())
		{
			// show an error msg
			Session::flash('errorMessage', 'Whoops... there was an error submitting your form');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{	
			if  (Input::hasFile('image') && Input::file('image')->isValid()) 
			{
				$post->addUploadedImage(Input::file('image'));
			}
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			
			// show success msg
			Session::flash('successMessage', 'boom... submitted successfully!');
			return Redirect::action('PostsController@index');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();
		Session::flash('successMessage', 'Post delete successfully');

		return Redirect::action('PostsController@index');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}


}
