<?php

class Task extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'user_id' => 'required',
		'title' => 'required',
		'body' => 'required',
		'date_start' => 'required',
		'sate_end' => 'required'
	);
}
