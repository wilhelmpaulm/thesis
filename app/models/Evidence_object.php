<?php

class Evidence_object extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'case_id' => 'required',
		'details' => 'required',
		'length' => 'required',
		'width' => 'required',
		'height' => 'required',
		'date_received' => 'required'
	);
}
