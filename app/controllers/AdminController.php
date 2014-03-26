<?php

require_once('../vendor/inputfilter/inputfilter.php');

class AdminController extends BaseController 
{
	public function actionController()
	{
		return method_exists($this, $this->action) ? $this->{$this->action}() : $this->index();
	}

	private function index()
	{
		if(Input::get('token') != '20ffc569124252f88078ac8b4297282a') return Redirect::to('index');

		return View::make('admin.index');
	}
}