<?php

class Post extends BaseModel {

	// the db thable this model relates to
	protected $table = 'posts';
	protected $imgDir = 'img-upload';

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

	public function addUploadedImage($image)
	{
		$systemPath = public_path() . '/' . $this->imgDir . '/';
		$imageName = $this->id . '-' . $image->getClientOriginalName();
		$image->move($systemPath, $imageName);
		$this->img_path = '/' . $this->imgDir . '/' . $imageName;
	}

	public function renderBody() 
	{
		// $dirtyHTML = Parsedown::instance()->parse($this->body);
		$config = HTMLPurifier_Config::createDefault();
		$purifier = new HTMLPurifier($config);
		return $purifier->purify($this->body);
	}

	public function excerpt()
	{
		preg_match('/^.{1,60}\b/s', $excerpt, $match);
		return $match[0] . '...';
	}

}