<?php 
	
	// set context
	elgg_push_context('praat_mee');
	elgg_set_page_owner_guid(elgg_get_site_entity()->getGUID()); // site owns the index widgets
	$num_columns = 2;
	
	$style = "";
	
	$columns = array_reverse(explode("|", '50|50'));
	
	foreach($columns as $index => $col_width){
		$col_index = $index + 1;
		$style .= "#elgg-widget-col-" . $col_index . " { width: " . $col_width . "%; }";
	}
	
	
	if($style){
		$style = "<style type='text/css'>" . $style . "</style>";
	}
	
	// draw the page
	$params = array(
			'num_columns' => $num_columns,
			'exact_match' => true
	);
	$content = elgg_view_layout('widgets', $params);

	$body = elgg_view_layout('one_column', array('content' => $style . $content));
	
	echo elgg_view_page("", $body);
	