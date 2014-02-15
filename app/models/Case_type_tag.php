<?php

class Case_type_tag extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'case_id' => 'required',
		'type' => 'required'
	);
}
