<?php

class Complaint_address extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'complaint_id' => 'required',
		'street' => 'required',
		'city' => 'required',
		'postal_code' => 'required',
		'province' => 'required',
		'barangay' => 'required'
	);
}
