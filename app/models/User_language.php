<?php

class User_language extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'user_id' => 'required',
		'language_id' => 'required'
	);
}
