<?php

class Form_coordination extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'=case_id' => 'required',
		'agent_id' => 'required',
		'area' => 'required',
		'time' => 'required',
		'date' => 'required'
	);
}
