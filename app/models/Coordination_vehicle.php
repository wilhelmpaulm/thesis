<?php

class Coordination_vehicle extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'vehicle' => 'required',
		'model' => 'required',
		'plate_no' => 'required',
		'color' => 'required'
	);
}
