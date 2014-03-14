<?php

class BaseController extends Controller 
{
	protected $action;
	protected $facebook;
	protected $signedRequest;
	protected $pageId;
	protected $userId;
	protected $appData;

	public function __construct()
	{
		$this->action        = Input::get('a'); 
		$this->facebook      = new Facebook(array('appId' => Config::get('facebook.appId'), 'secret' => Config::get('facebook.appSecret')));
		$this->signedRequest = $this->facebook->getSignedRequest();
		$this->pageId        = (isset($this->signedRequest['page']) && isset($this->signedRequest['page']['id'])) ? $this->signedRequest['page']['id'] : Input::get('pageId');
		$this->userId        = (isset($this->signedRequest['user_id']) && !empty($this->signedRequest['user_id'])) ? $this->signedRequest['user_id'] : Input::get('userId');
		$this->appData       = (isset($this->signedRequest['app_data'])) ? explode('?', $this->signedRequest['app_data']) : NULL;
		$this->appData       = (isset($this->appData[0])) ? json_decode($this->appData[0]) : new stdClass();
	}
}