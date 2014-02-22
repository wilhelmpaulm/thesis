<?php

class Appointment_recipient extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'appointment_id' => 'required',
		'user_id' => 'required'
	);
}
