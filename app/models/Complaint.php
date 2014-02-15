<?php

class Complaint extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'date_commited' => 'required',
		'date_reported' => 'required',
		'narration' => 'required',
		'agency_reported' => 'required',
		'agency_report_details' => 'required',
		'agency_report_status' => 'required',
		'court_action_details' => 'required',
		'considerations' => 'required',
		'img_signature' => 'required',
		'img_right_thumb' => 'required'
	);
}
