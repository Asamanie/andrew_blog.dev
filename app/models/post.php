<?php

class Post extends BaseModel {

	// the db thable this model relates to
	protected $table = 'posts';

	// Valdidation rules for our model properties
	static public $rules = 
	[
		'title' => 'required|max:100',
		'body'  => 'required'
	];

	public function user()
	{
	    return $this->belongsTo('User');
	}

}