<?php

class Client_address extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'client_id' => 'required'
	);
}
