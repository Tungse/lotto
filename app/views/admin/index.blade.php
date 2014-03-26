<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#">
	<head>
		<title>the backend</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/admin/index.css" />
		<link rel="stylesheet" type="text/css" href="css/library/jquery-ui.css" />
		<script>
			var appId = "<?php echo Config::get('facebook.appId'); ?>";
		</script>
		<script language="Javascript" type="text/Javascript" src="js/library/jquery.js"></script>
		<script language="Javascript" type="text/Javascript" src="js/library/jquery-ui.js"></script>
		<script language="Javascript" type="text/Javascript" src="js/admin/index.js"></script>
	</head>
	<body>
		<div id="fb-root"></div>
		<div class="wrapper">
			<div class="admin-holder">

			</div>
		</div>
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
