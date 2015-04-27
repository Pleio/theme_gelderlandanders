<?php

	$graphics_folder = elgg_get_site_url() . "mod/theme_gelderlandanders/_graphics/";
	
?>

* {
	-webkit-border-radius: 0px !important;
	-moz-border-radius: 0px !important;
	border-radius: 0px !important;
}

.elgg-menu-site > li > ul a {
	padding: 2px 2px 0px 8px;
	max-width: 110px;
	border-bottom: 1px solid white;
	
}

.elgg-menu-site .elgg-menu-item-home a {
	background: #<?php echo THEME_COLOR_1;?> url(<?php echo $graphics_folder; ?>menu/home.png) no-repeat center center;
}
.elgg-menu-site .elgg-menu-item-home.elgg-state-selected a {
	color: #<?php echo THEME_COLOR_1;?>;
	background: white url(<?php echo $graphics_folder; ?>menu/home_hover.png) no-repeat center center;
}

.elgg-menu-site .elgg-menu-item-praat-mee a {
	background: #<?php echo THEME_COLOR_2;?> url(<?php echo $graphics_folder; ?>menu/praat_mee.png) no-repeat center center;
}
.elgg-menu-site .elgg-menu-item-praat-mee.elgg-state-selected a {
	color: #<?php echo THEME_COLOR_2;?>;
	background: white url(<?php echo $graphics_folder; ?>menu/praat_mee_hover.png) no-repeat center center;
}

.elgg-menu-site .elgg-menu-item-kijk-lees-luister a {
	background: #<?php echo THEME_COLOR_3;?> url(<?php echo $graphics_folder; ?>menu/kijk_lees_luister.png) no-repeat center center;
}
.elgg-menu-site .elgg-menu-item-kijk-lees-luister.elgg-state-selected a {
	color: #<?php echo THEME_COLOR_3;?>;
	background: white url(<?php echo $graphics_folder; ?>menu/kijk_lees_luister_hover.png) no-repeat center center;
}
.elgg-menu-site .elgg-menu-item-kijk-lees-luister ul a,
.elgg-menu-site .elgg-menu-item-kijk-lees-luister.elgg-state-selected ul a {
	background: #<?php echo THEME_COLOR_3;?>;
	color: white;
}

.elgg-menu-site .elgg-menu-item-omgevingsvisie a {
	background: #<?php echo THEME_COLOR_4;?> url(<?php echo $graphics_folder; ?>menu/omgevingsvisie.png) no-repeat center center;
}
.elgg-menu-site .elgg-menu-item-omgevingsvisie.elgg-state-selected a {
	color: #<?php echo THEME_COLOR_4;?>;
	background: white url(<?php echo $graphics_folder; ?>menu/omgevingsvisie_hover.png) no-repeat center center;
}

.elgg-menu-site .elgg-menu-item-over a {
	background: #<?php echo THEME_COLOR_5;?> url(<?php echo $graphics_folder; ?>menu/over.png) no-repeat center center;
}
.elgg-menu-site .elgg-menu-item-over.elgg-state-selected a {
	color: #<?php echo THEME_COLOR_5;?>;
	background: white url(<?php echo $graphics_folder; ?>menu/over_hover.png) no-repeat center center;
}

.elgg-menu-site .elgg-menu-item-tools a {
	background: #<?php echo THEME_COLOR_6;?> url(<?php echo $graphics_folder; ?>menu/tools.png) no-repeat center center;
}
.elgg-menu-site .elgg-menu-item-tools.elgg-state-selected a {
	color: #<?php echo THEME_COLOR_6;?>;
	background: white url(<?php echo $graphics_folder; ?>menu/tools_hover.png) no-repeat center center;
}
.elgg-menu-site .elgg-menu-item-tools ul a,
.elgg-menu-site .elgg-menu-item-tools.elgg-state-selected ul a {
	background: #<?php echo THEME_COLOR_6;?>;
	color: black;
}

.profile {
	width: 100%;
}

.event_manager_event_list_icon_month {
	background: none repeat scroll 0 0 #<?php echo THEME_COLOR_1;?>;
    border: 1px solid #<?php echo THEME_COLOR_1;?>;
}

.event_manager_event_list_icon_day {
	border-bottom: 1px solid #<?php echo THEME_COLOR_1;?>;
    border-left: 1px solid #<?php echo THEME_COLOR_1;?>;
    border-right: 1px solid #<?php echo THEME_COLOR_1;?>;
}

.theme-gelderlandanders-header-login {
	position: absolute;
	right: 10px;
	top: 25px;
	background: url("<?php echo $graphics_folder; ?>lock.png") no-repeat right center;
	height: 40px;
	padding-right: 40px;
	
	line-height: 40px;
	font-weight: bold;
}

.elgg-module-widget a.widget-manager-widget-title-link {
	color: white;
}

.elgg-module-aside .elgg-search input[type="text"] {
    width: 152px;
    background-position: 132px -934px;
    color: #<?php echo THEME_COLOR_1; ?>;
    border-color: #<?php echo THEME_COLOR_1; ?>;
}

.elgg-module-aside form.elgg-search {
	 border-color: #<?php echo THEME_COLOR_1; ?>;
}

.elgg-module-aside .search-advanced-type-selection > li > a {
	background-color: #<?php echo THEME_COLOR_1; ?>;
}

.elgg-module-aside .search-advanced-type-selection-dropdown {
	right: inherit;
	text-align: left;
	border-color: #<?php echo THEME_COLOR_1;?>;
}

.elgg-module-aside .search-advanced-type-selection-dropdown a:hover {
	background-color: #<?php echo THEME_COLOR_1; ?>;
}

.theme-gelderlandanders-search,
.theme-gelderlandanders-search > .elgg-body{
	overflow: visible;
}

.theme-gelderlandanders-sidebar-module {
	border: 1px solid #<?php echo THEME_COLOR_1; ?>;
	padding: 5px 5px 1px;
}

.elgg-icon-theme-gelderlandanders-social-linkedin,
.elgg-icon-theme-gelderlandanders-social-facebook,
.elgg-icon-theme-gelderlandanders-social-youtube,
.elgg-icon-theme-gelderlandanders-social-twitter {
	width: 32px;
	height: 32px;
}

.elgg-icon-theme-gelderlandanders-social-linkedin {
	background: url("<?php echo $graphics_folder; ?>social/linkedin.png") no-repeat right center;
}

.elgg-icon-theme-gelderlandanders-social-facebook {
	background: url("<?php echo $graphics_folder; ?>social/facebook.png") no-repeat right center;
}

.elgg-icon-theme-gelderlandanders-social-twitter {
	background: url("<?php echo $graphics_folder; ?>social/twitter.png") no-repeat right center;
}

.elgg-icon-theme-gelderlandanders-social-youtube {
	background: url("<?php echo $graphics_folder; ?>social/youtube.png") no-repeat right center;
}

#theme-gelderlandanders-twitter-query {
	padding-top: 32px;
	background: transparent url("<?php echo $graphics_folder; ?>twitter_bird.png") no-repeat top left;
}

.tweet_list > li {
	margin-bottom: 10px;
	word-wrap: break-word;
}