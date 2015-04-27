<?php
	$body = elgg_view("search/search_box");
	echo elgg_view_module("aside", "", $body, array("class" => "theme-gelderlandanders-search"));