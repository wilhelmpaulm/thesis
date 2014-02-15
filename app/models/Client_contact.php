<?php

class Client_contact extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'user_id' => 'required'
	);
}
