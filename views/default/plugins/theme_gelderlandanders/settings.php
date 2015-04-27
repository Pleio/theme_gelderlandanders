<?php 

	$plugin = elgg_extract("entity", $vars);
	
	// Twitter sidebar query
	echo "<div>";
	echo elgg_echo("theme_gelderlandanders:settings:twitter_query");
	echo elgg_view("input/text", array("name" => "params[twitter_query]", "value" => $plugin->twitter_query));
	echo "</div>";