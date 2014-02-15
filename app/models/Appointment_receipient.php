<?php

class Appointment_receipient extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'appointment_id' => 'required',
		'user_id' => 'required'
	);
}
