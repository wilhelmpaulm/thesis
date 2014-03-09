<?php

class Case_key extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'case_id' => 'required',
		'status' => 'required',
		'key' => 'required'
	);
}
