<?php

class Form_disposition extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'case_id' => 'required',
		'agent_id' => 'required',
		'synopsis' => 'required',
		'coc' => 'required',
		'ma' => 'required',
		'cop' => 'required',
		'mfe' => 'required',
		'recommendations' => 'required'
	);
}
