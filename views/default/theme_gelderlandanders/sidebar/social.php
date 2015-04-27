<?php
	$body = elgg_view("output/url", array("text" => elgg_view_icon("theme-gelderlandanders-social-linkedin"), "alt" => "LinkedIn", "href" => "http://www.linkedin.com/groups/Gelderland-anders-4536309", "target" => "_blank"));
	$body .= elgg_view("output/url", array("text" => elgg_view_icon("theme-gelderlandanders-social-facebook"), "alt" => "Facebook", "href" => "https://www.facebook.com/Gelderlandanders", "target" => "_blank"));
	$body .= elgg_view("output/url", array("text" => elgg_view_icon("theme-gelderlandanders-social-twitter"), "alt" => "Twitter", "href" => "https://twitter.com/GldAnders", "target" => "_blank"));
	$body .= elgg_view("output/url", array("text" => elgg_view_icon("theme-gelderlandanders-social-youtube"), "alt" => "Youtube", "href" => "http://www.youtube.com/channel/UC0ntj2dvlsDx8UqjQjEeExA", "target" => "_blank"));
	
	echo elgg_view_module("aside", "", $body, array("class" => "theme-gelderlandanders-sidebar-module"));