<?php

class Client_type_tag extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'type' => 'required'
	);
}
