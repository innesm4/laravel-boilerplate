<?php

class City extends Eloquent {

	protected $fillable = array('city_name', 'image');

	protected $guarded = array('id');

	public static $rules = array(
		'city_name' => 'required',
		'image' => 'required'
	);
}
