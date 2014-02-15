<?php

class Resource_history extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'resource_id' => 'required',
		'user_id' => 'required',
		'deatils' => 'required',
		'amount' => 'required',
		'status' => 'required',
		'date_requested' => 'required',
		'date_approved' => 'required',
		'date_due' => 'required',
		'date_issued' => 'required',
		'date_returned' => 'required'
	);
}
