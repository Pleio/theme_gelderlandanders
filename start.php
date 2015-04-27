<?php

// define the colors

define("THEME_COLOR_1", "166583"); // darkblue
define("THEME_COLOR_2", "009EE0"); // lightblue
define("THEME_COLOR_3", "92107D"); // purple
define("THEME_COLOR_4", "E2001A"); // red
define("THEME_COLOR_5", "EE7F00"); // orange
define("THEME_COLOR_6", "FDC400"); // yellow
define("THEME_COLOR_7", "79B41D"); // green

elgg_register_event_handler('init','system','theme_gelderlandanders_init');

function theme_gelderlandanders_init(){
	elgg_register_js("jquery.tweet", "mod/theme_gelderlandanders/vendors/tweet/jquery.tweet.js");
	
	elgg_register_page_handler('praat_mee', 'theme_gelderlandanders_praat_mee_page_handler');
	
	elgg_extend_view('css/elgg', 'css/theme_gelderlandanders/site');

	elgg_extend_view('page/elements/owner_block', 'theme_gelderlandanders/sidebar/tweets', 420);
	elgg_extend_view('page/elements/owner_block', 'theme_gelderlandanders/sidebar/search', 400);
	elgg_extend_view('page/elements/owner_block', 'theme_gelderlandanders/sidebar/social', 410);
	
	// remove search in header
	elgg_unextend_view('page/elements/header', 'search/header');
	
	// take control of menu setup
	elgg_unregister_plugin_hook_handler('prepare', 'menu:site', 'elgg_site_menu_setup');
	elgg_register_plugin_hook_handler('register', 'menu:site', 'theme_gelderlandanders_site_menu_register');
	
	elgg_register_plugin_hook_handler('advanced_context', 'widget_manager', 'theme_gelderlandanders_widget_manager_advanced_context');
	elgg_register_plugin_hook_handler('available_widgets_context', 'widget_manager', 'theme_gelderlandanders_widget_manager_available_widgets_context');
}

function theme_gelderlandanders_praat_mee_page_handler(){
	include(dirname(__FILE__) . '/pages/praat_mee.php');
	
	return true;
}

function theme_gelderlandanders_site_menu_register($hook, $type, $return, $params){
	$result = array();
	
	$result[] = ElggMenuItem::factory(array(
			"name" => "home",
			"text" => elgg_echo("theme_gelderlandanders:menu:home"),
			"href" => "/",
	));
	$result[] = ElggMenuItem::factory(array(
			"name" => "praat_mee",
			"text" => elgg_echo("theme_gelderlandanders:menu:praat_mee"),
			"href" => "/praat_mee",
	));
	$result[] = ElggMenuItem::factory(array(
			"name" => "kijk_lees_luister",
			"text" => elgg_echo("theme_gelderlandanders:menu:kijk_lees_luister"),
			"href" => "/search?q=nieuws&search_type=tags",
	));
	$result[] = ElggMenuItem::factory(array(
			"name" => "kijk_lees_luister_nieuws",
			"text" => elgg_echo("theme_gelderlandanders:menu:kijk_lees_luister:nieuws"),
			"href" => "/search?q=nieuws&search_type=tags",
			"parent_name" => "kijk_lees_luister"
	));	
	$result[] = ElggMenuItem::factory(array(
			"name" => "kijk_lees_luister_downloads",
			"text" => elgg_echo("theme_gelderlandanders:menu:kijk_lees_luister:downloads"),
			"href" => "/downloads",
			"parent_name" => "kijk_lees_luister"
	));
	$result[] = ElggMenuItem::factory(array(
			"name" => "kijk_lees_luister_videos",
			"text" => elgg_echo("theme_gelderlandanders:menu:kijk_lees_luister:videos"),
			"href" => "http://www.youtube.com/channel/UC0ntj2dvlsDx8UqjQjEeExA",
			"parent_name" => "kijk_lees_luister",
			"target" => "_blank"
	));	
	
	$result[] = ElggMenuItem::factory(array(
			"name" => "omgevingsvisie",
			"text" => elgg_echo("theme_gelderlandanders:menu:omgevingsvisie"),
			"href" => "/planningenproces ",
	));
	$result[] = ElggMenuItem::factory(array(
			"name" => "over",
			"text" => elgg_echo("theme_gelderlandanders:menu:over"),
			"href" => "/over-gldanders",
	));
	
	$result[] = ElggMenuItem::factory(array(
			"name" => "tools",
			"text" => elgg_echo("theme_gelderlandanders:menu:tools"),
			"href" => "/add",
	));
	
	if (elgg_is_logged_in()) {
		$result[] = ElggMenuItem::factory(array(
				"name" => "tools_profile",
				"text" => elgg_echo("theme_gelderlandanders:menu:tools:profile"),
				"href" => "/profile/" . elgg_get_logged_in_user_entity()->username,
				"parent_name" => "tools"
		));
		$result[] = ElggMenuItem::factory(array(
				"name" => "tools_dashboard",
				"text" => elgg_echo("theme_gelderlandanders:menu:tools:dashboard"),
				"href" => "/dashboard",
				"parent_name" => "tools"
		));
		$result[] = ElggMenuItem::factory(array(
				"name" => "tools_settings",
				"text" => elgg_echo("settings"),
				"href" => "/settings/user/" . elgg_get_logged_in_user_entity()->username,
				"parent_name" => "tools"
		));
	}
	
	// add default menu items to tools menu
	foreach ($return as $menu_item) {
		$menu_item->setParentName("tools");
		$result[] = $menu_item;
	}
	
	if (elgg_is_admin_logged_in()) {
		$result[] = ElggMenuItem::factory(array(
				"name" => "admin",
				"text" => elgg_echo("admin"),
				"href" => "/admin",
				"parent_name" => "tools"
		));
	}
	
// 	$result[] = ElggMenuItem::factory(array(
// 			"name" => "home",
// 			"text" => elgg_echo("Home"),
// 			"href" => "/",
// 			//"priority" => $entity->order,
// 			//"id" => $entity->getGUID(),
// 			//"parent_name" => "parent",
// 			//"item_class" => "theme",
// 	));
		
	return $result;
}

function theme_gelderlandanders_widget_manager_advanced_context($hook, $type, $return, $params) {
	if(isset($params["entity"])){
		$widget = $params["entity"];
		$widget_context = $widget->context;
		if(in_array($widget_context, array("praat_mee"))){
			if(!is_array($return)){
				$return = array();
			}
			$return[] = $widget_context;

			return $return;
		}
	}
}

function theme_gelderlandanders_widget_manager_available_widgets_context($hook, $type, $return, $params) {
	if(!empty($return) && in_array($return, array("praat_mee"))){
		$return = "index";
	}

	return $return;
}