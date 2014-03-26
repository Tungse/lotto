<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="no-js ie ie6" xmlns="http://www.w3.org/1999/xhtml" xml:lang="" lang="de" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#"><![endif]-->
 <!--[if IE 7 ]><html class="no-js ie ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#"><![endif]-->
 <!--[if IE 8 ]><html class="no-js ie ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#"><![endif]-->
 <!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#"><!--<![endif]-->
	<head>
		<title>welcome</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta property="fb:app_id" content="<?php echo Config::get('facebook.appId'); ?>" /> 
		<meta property="og:url" content="<?php echo Config::get('facebook.appUrl'); ?>">
		<meta property="og:type" content="website">
    	<meta property="og:title" content="<?php echo Lang::get('content.shareFooterHeader'); ?>" />
    	<meta property="og:description" content="<?php echo Lang::get('content.shareFooterCopy'); ?>" />
    	<meta property="og:image" content="https://<?php echo Config::get('facebook.hostname').Config::get('facebook.dirname'); ?>img/icon-share.png" />
		<link rel="stylesheet" type="text/css" href="css/index/desktop/common.css" />
		<link rel="stylesheet" type="text/css" href="css/index/desktop/welcome.css" />
		<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->
		<script>
			var appId    = "<?php echo Config::get('facebook.appId'); ?>";
			var appUrl   = "<?php echo Config::get('facebook.protocol').Config::get('facebook.appUrl'); ?>";
			var dirname  = "<?php echo Config::get('facebook.dirname'); ?>";
			var userId   = "<?php echo $userId; ?>";
			var pageId   = "<?php echo $pageId; ?>";
			var redirect = "<?php echo $redirect; ?>";
		</script>
		<script language="Javascript" type="text/Javascript" src="js/library/jquery.js"></script>
		<script language="Javascript" type="text/Javascript" src="js/common.js"></script>
		<script language="Javascript" type="text/Javascript" src="js/index/desktop/welcome.js"></script>
	</head>
	<body>
		<div id="fb-root"></div>
		<div class="wrapper">
			<div class="welcome-holder">
				
			</div>
			<div class="footer-holder"><?php echo $footer; ?></div>
			<div class="layer">&nbsp;</div>
		</div>
		<div class="hidden"></div>
		<script>
			(function(d, s, id)
			{
		    	var js, fjs = d.getElementsByTagName(s)[0];
		     	if (d.getElementById(id)) {return;}
		     	js = d.createElement(s); js.id = id;
		     	js.src = "//connect.facebook.net/de_DE/all.js";
		     	fjs.parentNode.insertBefore(js, fjs);
		   	}(document, 'script', 'facebook-jssdk'));
		</script>
	</body>
</html>
