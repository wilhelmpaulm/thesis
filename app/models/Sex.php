<?php

class Sex extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'sex' => 'required'
	);
}
