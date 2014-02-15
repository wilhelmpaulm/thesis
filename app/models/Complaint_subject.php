<?php

class Complaint_subject extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'complaint_id' => 'required',
		'client_id' => 'required'
	);
}
