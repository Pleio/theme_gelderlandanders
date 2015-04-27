<?php
if (!elgg_is_logged_in()) {
	echo "<div class='theme-gelderlandanders-header-login'>";
	echo elgg_echo("theme_gelderlandanders:header:login", array(
				"<a href='" . elgg_get_site_url() . "login'>",
				"</a>",
				"<a href='" . elgg_get_site_url() . "register'>",
				"</a>"
			));	
	echo "</div>";
}