<?php

class Kase extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'agent_id' => 'required',
		'complainant_id' => 'required',
		'status' => 'required',
		'date_assigned' => 'required',
		'date_reported' => 'required'
	);
}
