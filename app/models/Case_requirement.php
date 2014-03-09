<?php

class Case_requirement extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'case_id' => 'required',
		'status' => 'required',
		'requirement' => 'required',
		'date_requested' => 'required',
		'date_due' => 'required',
		'date_received' => 'required'
	);
}
