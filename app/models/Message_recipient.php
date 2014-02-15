<?php

class Message_recipient extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'message_id' => 'required',
		'user_id' => 'required'
	);
}
