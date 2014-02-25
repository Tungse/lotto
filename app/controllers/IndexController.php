<?php

class IndexController extends BaseController 
{
	private $liked;
	private $appData;

	public function __construct()
	{
		parent::__construct();
		
		$this->liked   = (isset($this->signedRequest['page']) && isset($this->signedRequest['page']['liked'])) ? (bool)$this->signedRequest['page']['liked'] : true;	
		$this->appData = (isset($this->signedRequest['app_data'])) ? explode('?', $this->signedRequest['app_data']) : NULL;
		$this->appData = (isset($this->appData[0])) ? json_decode($this->appData[0]) : new stdClass();

		View::share('pageId', $this->pageId);
	}

	public function actionController()
	{
		$this->action = ($this->liked == false && isset($this->pageId)) ? 'fangate' : $this->action;

		return method_exists($this, $this->action) ? $this->{$this->action}() : $this->welcome();
	}

	private function fangate()
	{
		return View::make('index.fangate', array('footer' => $this->footer()));
	}

	private function welcome()
	{
		$canvas = (empty($this->pageId) && empty($this->action)) ? true : false;

		return View::make('index.welcome', array('canvas' => $canvas, 'footer' => $this->footer()));
	}

	private function footer()
	{
		return View::make('index.templates.footer');
	}
}