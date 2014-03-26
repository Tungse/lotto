<?php

return array
(
	'appId' 	 => 'APP_ID',
	'appSecret'	 => 'APP_SECRET',
	'appUrl'     => 'www.facebook.com/PAGE_NAME/app_APP_ID?',
	'canvasUrl'  => 'apps.facebook.com/APP_NAME_SPACE',
	'namespace'  => 'APP_NAME_SPACE',
	'protocol'   => (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') ? 'https://' : 'http://',
	'hostname'   => $_SERVER['HTTP_HOST'],
	'dirname'    => dirname($_SERVER['PHP_SELF']).'/',
	'enviroment' => 'live',
);
