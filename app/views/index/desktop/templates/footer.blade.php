<div class="footer">
	<fb:like href="<?php echo Config::get('app.protocol').Config::get('facebook.canvasAppUrl'); ?>" width="420" layout="button_count" action="like" show_faces="false" share="true"></fb:like>
	<div class="condition-and-privacy-holder">
		<a id="popup-footer-condition-holder" class="button-to-popup" href="#"><?php echo Lang::get('content.condition'); ?></a> | <a id="popup-footer-privacy-holder" class="button-to-popup" href="#"><?php echo Lang::get('content.privacy'); ?></a>
	</div>
	<p class="footer-text"><?php echo Lang::get('content.footerText'); ?></p>
	<p class="footer-piwik-text"><?php echo Lang::get('content.piwikText'); ?><a href="#" id="popup-piwik-holder" class="button-to-popup">hier</a></p>
</div>

<div class="popup-footer-condition-holder hidden popup popup-footer">
	<div class="popup-content">
		<h2 class="popup-header popup-background-header"></h2>
		<div class="popup-inner" id="footer-condition-scrollbar">

		</div>
	</div>
	<div class="button-close-popup button-close-popup-footer button">&nbsp;</div>
</div>