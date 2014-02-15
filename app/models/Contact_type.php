<?php

class Contact_type extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'type' => 'required'
	);
}
