<?php

class Resource extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'division' => 'required',
		'details' => 'required',
		'amount' => 'required'
	);
}
