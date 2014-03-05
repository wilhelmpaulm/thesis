<?php

class Case_observation extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'observation' => 'required'
	);
}
