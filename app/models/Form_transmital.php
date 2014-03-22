<?php

class Form_transmital extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'case_id' => 'required',
		'agent_id' => 'required',
		'header' => 'required',
		'introduction' => 'required',
		'crime' => 'required',
		'how' => 'required',
		'to' => 'required'
	);
}
