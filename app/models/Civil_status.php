<?php

class Civil_status extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'status' => 'required'
	);
}
