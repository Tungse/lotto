<?php

class BaseController extends Controller 
{
	protected $action;
	protected $facebook;
	protected $signedRequest;
	protected $userId;
	protected $pageId;
	protected $appData;
	protected $liked;

	public function __construct()
	{
		$this->action        = Input::get('a'); 
		$this->facebook      = new Facebook(array('appId' => Config::get('facebook.appId'), 'secret' => Config::get('facebook.appSecret')));
		$this->signedRequest = $this->facebook->getSignedRequest();
		$this->userId        = (isset($this->signedRequest['user_id']) && !empty($this->signedRequest['user_id'])) ? $this->signedRequest['user_id'] : Input::get('userId');
		$this->pageId        = (isset($this->signedRequest['page']) && isset($this->signedRequest['page']['id'])) ? $this->signedRequest['page']['id'] : NULL;
		$this->liked         = (isset($this->signedRequest['page']) && isset($this->signedRequest['page']['liked'])) ? (bool)$this->signedRequest['page']['liked'] : true;	
		$this->appData       = (isset($this->signedRequest['app_data'])) ? explode('?', $this->signedRequest['app_data']) : NULL;
		$this->appData       = (isset($this->appData[0])) ? json_decode($this->appData[0]) : new stdClass();
	}
	
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
}