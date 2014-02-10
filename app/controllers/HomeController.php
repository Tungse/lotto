<?php

class HomeController extends BaseController 
{
	public function index()
	{
		$liked        = (isset($this->signedRequest['page']) && isset($this->signedRequest['page']['liked'])) ? (bool)$this->signedRequest['page']['liked'] : true;	
		$this->action = ($liked == false) ? 'like' : $this->action;

		return method_exists($this, $this->action) ? $this->{$this->action}() : $this->welcome();
	}

	private function like()
	{
		return View::make('home.like', array('footer' => $this->footer()));
	}

	private function welcome()
	{
		$canvas = (empty($this->pageId) && empty($this->action)) ? true : false;

		return View::make('home.welcome', array('canvas' => $canvas, 'footer' => $this->footer()));
	}

	private function footer()
	{
		return View::make('home.footer');
	}
}