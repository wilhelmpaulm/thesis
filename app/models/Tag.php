<?php

class Tag extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'reference_id' => 'required',
		'table' => 'required',
		'tags' => 'required'
	);
}
