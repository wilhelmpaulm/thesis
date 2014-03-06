<?php

class Cross_reference extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'reference_id' => 'required',
		'tags_id' => 'required'
	);
}
