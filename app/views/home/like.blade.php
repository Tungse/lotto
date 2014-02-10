<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="no-js ie ie6" xmlns="http://www.w3.org/1999/xhtml" xml:lang="" lang="de" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#"><![endif]-->
 <!--[if IE 7 ]><html class="no-js ie ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#"><![endif]-->
 <!--[if IE 8 ]><html class="no-js ie ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#"><![endif]-->
 <!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#"><!--<![endif]-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>like</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/home/like.css" />
		<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="css/ie.css" />		
		<![endif]-->
		<script language="Javascript" type="text/Javascript" src="js/library/jquery.js"></script>
		<script>
			var appId = "<?php echo Config::get('facebook.app_id'); ?>";
		</script>
		<script language="Javascript" type="text/Javascript" src="js/index.js"></script>
		<script language="Javascript" type="text/Javascript" src="js/home/like.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<div class="main like">

			</div>
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
