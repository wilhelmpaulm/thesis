<?php

class Case_subject extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'case_subjects' => 'required',
		'client_id' => 'required'
	);
}
