<?php

class Evidence_document extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'case_id' => 'required',
		'details' => 'required',
		'owner' => 'required',
		'title' => 'required',
		'date_received' => 'required'
	);
}
