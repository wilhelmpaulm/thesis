<?php

class User_notification extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'receiver_id' => 'required',
		'sender_id' => 'required',
		'action' => 'required',
		'details' => 'required'
	);
}
