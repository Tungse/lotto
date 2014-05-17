<?php

class IndexController extends BaseController 
{
	public function actionController()
	{
		return method_exists($this, $this->action) ? $this->{$this->action}() : $this->index();
	}

	private function index()
	{
		return View::make('index.index', array
		(
			
		));
	}
}