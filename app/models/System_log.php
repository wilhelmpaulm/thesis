<?php

class System_log extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'user_id' => 'required',
		'reference_id' => 'required',
		'table' => 'required',
		'type' => 'required',
		'action' => 'required'
	);
}
