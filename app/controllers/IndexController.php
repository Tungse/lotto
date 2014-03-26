<?php

require_once('../vendor/inputfilter/inputfilter.php');

class IndexController extends BaseController 
{
	public function __construct()
	{
		parent::__construct();
		
		$this->getDevice();
		$this->appDataController();

		View::share('pageId', $this->pageId);
		View::share('userId', $this->userId);
	}

	public function actionController()
	{
		$this->action = ($this->liked == false && $this->device == 'desktop') ? 'fangate' : $this->action;
		$this->action = ($this->device == 'mobile' && $this->action == 'fangate') ? 'welcome' : $this->action;

		return method_exists($this, $this->action) ? $this->{$this->action}() : $this->welcome();
	}

	private function appDataController()
	{
		if(Config::get('facebook.enviroment') == 'live' || $this->device == 'mobile') return;

		$this->liked = (isset($this->appData) && isset($this->appData->fangate)) ? false : true;
		$userId      = (isset($this->appData) && isset($this->appData->delete)) ? $this->appData->delete : NULL;
		$userId      = ($userId == 'me') ? $this->userId : $userId;

		if(isset($userId) && !empty($userId)) $this->delete($userId);
	}

	private function fangate()
	{
		return View::make('index.desktop.fangate', array('footer' => $this->footer()));
	}

	private function welcome()
	{
		return View::make('index.'.$this->device.'.welcome', array
		(
			'redirect' => $this->getRedirect(),
			'footer'   => $this->footer(),
			'popup'    => $this->getMobileFooterPopup()
		));
	}

	private function delete($userId)
	{

	}

	private function footer()
	{
		return View::make('index.'.$this->device.'.templates.footer');
	}

	private function getMobileFooterPopup()
	{
		return ($this->device == 'mobile') ? View::make('index.mobile.templates.footer-popup') : NULL;
	}
}