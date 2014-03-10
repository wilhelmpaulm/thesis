<?php

class Form_subpoena extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'case_id' => 'required',
		'agent_id' => 'required',
		'location' => 'required',
		'time' => 'required',
		'date_requested' => 'required',
		'date_signed' => 'required',
		'chief' => 'required'
	);
}
