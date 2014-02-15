<?php

class Case_victim extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'case_id' => 'required',
		'client_id' => 'required'
	);
}
