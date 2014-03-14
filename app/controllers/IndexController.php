<?php

require_once('../vendor/devicedetection/Mobile_Detect.php');
require_once('../vendor/inputfilter/inputfilter.php');

class IndexController extends BaseController 
{
	private $device;
	private $liked;
	private $redirect;

	public function __construct()
	{
		parent::__construct();
		
		$mobile         = Input::get('mobile'); 
		$detect         = new Mobile_Detect;
		$this->device   = ($detect->isMobile() || (isset($mobile) && $mobile == true)) ? 'mobile' : 'desktop';
		$this->redirect = (empty($this->pageId) && $this->device == 'desktop') ? true : false;
		$this->liked    = (isset($this->signedRequest['page']) && isset($this->signedRequest['page']['liked'])) ? (bool)$this->signedRequest['page']['liked'] : true;	

		$this->appDataController();

		View::share('pageId', $this->pageId);
		View::share('userId', $this->userId);
		View::share('redirect', $this->redirect);
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
		$deleteId    = (isset($this->appData) && isset($this->appData->delete)) ? $this->appData->delete : NULL;
		$deleteId    = ($deleteId == 'me') ? $this->userId : $deleteId;

		if(isset($deleteId) && !empty($deleteId)) $this->delete($deleteId);
	}

	private function fangate()
	{
		return View::make('index.desktop.fangate', array('footer' => $this->footer()));
	}

	private function welcome()
	{
		return View::make('index.'.$this->device.'.welcome', array('footerPopup' => $this->footerPopup(), 'footer' => $this->footer()));
	}

	private function delete($userId = NULL)
	{
		$userId = (isset($userId)) ? $userId : Input::get('userId');

		if(empty($userId)) return;
	}

	private function footer()
	{
		return;

		return View::make('index.'.$this->device.'.templates.footer');
	}

	private function footerPopup()
	{
		return; 
		
		return ($this->device == 'mobile') ? View::make('index.mobile.templates.footer-popup') : NULL;
	}
}