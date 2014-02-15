<?php

class Evidence_history extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'evidence_id' => 'required',
		'date_held' => 'required',
		'date_released' => 'required',
		'holder' => 'required',
		'location' => 'required',
		'details' => 'required'
	);
}
