<?php

class Evidence_picture extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'case_id' => 'required',
		'details' => 'required',
		'owner' => 'required',
		'date_taken' => 'required',
		'date_received' => 'required'
	);
}
