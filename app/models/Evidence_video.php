<?php

class Evidence_video extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'case_id' => 'required',
		'details' => 'required',
		'owner' => 'required',
		'date_recorded' => 'required',
		'date_received' => 'required'
	);
}
