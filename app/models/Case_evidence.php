<?php

class Case_evidence extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'case_id' => 'required',
		'type' => 'required',
		'evidence_id' => 'required'
	);
}
