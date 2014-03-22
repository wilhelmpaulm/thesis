<?php

class Transmital_anexx extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'letter' => 'required',
		'title' => 'required'
	);
}
