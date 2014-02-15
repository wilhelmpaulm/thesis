<?php

class Message_log extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'message_id' => 'required',
		'user_id' => 'required',
		'body' => 'required'
	);
}
