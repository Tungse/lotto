<?php

require_once('../vendor/devicedetection/devicedetection.php');

class BaseController extends Controller 
{
	protected $action;
	protected $facebook;
	protected $signedRequest;
	protected $pageId;
	protected $device;

	public function __construct()
	{
		$this->action        = Input::get('a'); 
		$this->facebook      = new Facebook(array('appId' => Config::get('facebook.appId'), 'secret' => Config::get('facebook.appSecret')));
		$this->signedRequest = $this->facebook->getSignedRequest();
		$this->pageId        = (isset($this->signedRequest['page']) && isset($this->signedRequest['page']['id'])) ? $this->signedRequest['page']['id'] : Input::get('pageId');
		
		try
		{
			$detect       = new Mobile_Detect;
			$this->divice = ($detect->isMobile()) ? 'mobile' : 'desktop';
		}
		catch(Exception $e) {}
	}
}