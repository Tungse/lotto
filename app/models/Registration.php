<?php

class Registration extends Eloquent 
{
	protected $table      = 'registrations';
	protected $guarded    = array('id');
	protected $softDelete = true;
}