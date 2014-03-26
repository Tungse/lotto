<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#">
	<head>
		<title>welcome</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/index/mobile/common.css" />
		<link rel="stylesheet" type="text/css" href="css/index/mobile/welcome.css" />
		<script>
			var appId    = "<?php echo Config::get('facebook.appId'); ?>";
			var appUrl   = "<?php echo Config::get('facebook.protocol').Config::get('facebook.appUrl'); ?>";
			var dirname  = "<?php echo Config::get('facebook.dirname'); ?>";
			var userId   = "<?php echo $userId; ?>";
			var pageId   = "<?php echo $pageId; ?>";
		</script>
		<script language="Javascript" type="text/Javascript" src="js/library/jquery.js"></script>
		<script language="Javascript" type="text/Javascript" src="js/common.js"></script>
		<script language="Javascript" type="text/Javascript" src="js/index/mobile/welcome.js"></script>
	</head>
	<body>
		<div id="fb-root"></div>
		<div class="wrapper">
			<div class="welcome-holder">
				
			</div>
			<div class="footer-holder"><?php echo $footer; ?></div>
			<?php echo $mobileFooterPopup; ?>
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
