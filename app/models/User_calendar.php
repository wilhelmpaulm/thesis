<?php

class User_calendar extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'receiver_id' => 'required',
		'sender_id' => 'required',
		'action' => 'required',
		'details' => 'required',
		'date_start' => 'required',
		'date_end' => 'required'
	);
}
