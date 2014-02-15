<?php

class Complaint_type_tag extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'complaint_id' => 'required',
		'type' => 'required'
	);
}
