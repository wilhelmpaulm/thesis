<?php

class Message extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'sender' => 'required',
		'subject' => 'required'
	);
}
