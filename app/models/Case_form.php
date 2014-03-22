<?php

class Case_form extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'case_id' => 'required',
		'form_id' => 'required',
		'form_type' => 'required'
	);
}
