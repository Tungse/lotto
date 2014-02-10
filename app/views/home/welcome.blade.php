<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="no-js ie ie6" xmlns="http://www.w3.org/1999/xhtml" xml:lang="" lang="de" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#"><![endif]-->
 <!--[if IE 7 ]><html class="no-js ie ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#"><![endif]-->
 <!--[if IE 8 ]><html class="no-js ie ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#"><![endif]-->
 <!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#"><!--<![endif]-->
	<head>
		<title>welcome</title>
		<meta property="fb:app_id" content="<?php echo Config::get('facebook.app_id'); ?>" /> 
		<meta property="og:url" content="https://<?php echo Config::get('facebook.server'); ?>">
		<meta property="og:type" content="website">
    	<meta property="og:title" content="<?php echo Config::get('content.footerShareHeader'); ?>" />
    	<meta property="og:description" content="<?php echo Config::get('content.footerShareText'); ?>" />
    	<meta property="og:image" content="https://<?php echo Config::get('facebook.server').Config::get('facebook.dirname'); ?>/img/icon-share.jpg" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/home/welcome.css" />
		<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="css/ie.css" />		
		<![endif]-->
		<script language="Javascript" type="text/Javascript" src="js/library/jquery.js"></script>
		<script>
			var appId   = "<?php echo Config::get('facebook.app_id'); ?>";
			var appUrl  = "<?php echo Config::get('facebook.app_url'); ?>";
			var dirname = "<?php echo Config::get('facebook.dirname'); ?>";
			var userId  = "<?php echo $userId; ?>";
			var canvas  = "<?php echo $canvas; ?>";
		</script>
		<script language="Javascript" type="text/Javascript" src="js/index.js"></script>
		<script language="Javascript" type="text/Javascript" src="js/home/welcome.js"></script>
	</head>
	<body>
		<div class="wrapper">

		</div>
		<div class="hidden">

		</div>
	</body>
	<div id="fb-root"></div>
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
</html>
