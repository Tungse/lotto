<?php

class Registration extends Eloquent 
{
	protected $table   = 'sessions';
	protected $guarded = array('id');

	public function create()
	{
		Schema::create('sessions', function($table)
		{
			$table->string('id', 255);
			$table->text('payload');
			$table->string('last_activity', 11);
		});
	}
}