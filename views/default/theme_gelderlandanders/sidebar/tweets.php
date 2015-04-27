<?php

elgg_load_js("jquery.tweet");

$query = "#gldanders";
if($setting = elgg_get_plugin_setting("twitter_query", "theme_gelderlandanders")){
	$query = $setting;
}

$query = urlencode($query);

$body = <<<___BODY

<a class="twitter-timeline" href="https://twitter.com/GldAnders" data-widget-id="391179728188502016">Tweets van @GldAnders</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
___BODY;

echo elgg_view_module("aside", "", $body, array("class" => "theme-gelderlandanders-sidebar-module"));
