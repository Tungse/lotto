<?php

class Draw extends Eloquent 
{
	protected $table      = 'draws';
	protected $guarded    = array('id');
	protected $softDelete = true;
}