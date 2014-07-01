<?php

class Post extends Eloquent {

	// the db thable this model relates to
	protected $table = 'posts';

	// Valdidation rules for our model properties
	static public $rules = 
	[
		'title' => 'required|max:100'
	];

}