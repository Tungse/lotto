<?php

require_once('../vendor/devicedetection/Mobile_Detect.php');

class BaseController extends Controller 
{
	protected $action;
	protected $facebook;
	protected $signedRequest;
	protected $pageId;
	protected $liked;
	protected $userId;
	protected $appData;
	protected $device;

	public function __construct()
	{
		$this->action        = Input::get('a'); 
		$this->facebook      = new Facebook(array('appId' => Config::get('facebook.appId'), 'secret' => Config::get('facebook.appSecret')));
		$this->signedRequest = $this->facebook->getSignedRequest();
		$this->pageId        = (isset($this->signedRequest['page']) && isset($this->signedRequest['page']['id'])) ? $this->signedRequest['page']['id'] : Input::get('pageId');
		$this->liked         = (isset($this->signedRequest['page']) && isset($this->signedRequest['page']['liked'])) ? (bool)$this->signedRequest['page']['liked'] : true;	
		$this->userId        = (isset($this->signedRequest['user_id']) && !empty($this->signedRequest['user_id'])) ? $this->signedRequest['user_id'] : Input::get('userId');
		$this->appData       = (isset($this->signedRequest['app_data'])) ? explode('?', $this->signedRequest['app_data']) : NULL;
		$this->appData       = (isset($this->appData[0])) ? json_decode($this->appData[0]) : new stdClass();
	}

	protected function getDevice()
	{
		$mobile       = Input::get('mobile'); 
		$detect       = new Mobile_Detect;
		$this->device = ($detect->isMobile() || (isset($mobile) && $mobile == true)) ? 'mobile' : 'desktop';
	}

	protected function getRedirectBoolean()
	{
		return (empty($this->pageId) && $this->device == 'desktop') ? true : false;
	}
}