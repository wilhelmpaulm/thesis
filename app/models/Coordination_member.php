<?php

class Coordination_member extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'agency' => 'required',
		'name' => 'required'
	);
}
