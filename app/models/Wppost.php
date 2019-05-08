<?php

class Wppost extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
    public $timestamps = false;

    public function subposts()
    {
        return $this->hasMany('wppost','post_parent','ID');
    }

    public function author()
    {
        return $this->belongsto('wpuser','post_author','ID');
    }

    public function taxonomy()
    {
        return $this->belongsToMany('wpterm');
    }
	// Don't forget to fill this array
	protected $fillable = [];

}