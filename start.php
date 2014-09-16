<?php

function custom_css_init() {
	elgg_extend_view("css/elgg", "css/custom_css/site");
}

function custom_css_invalidate_cache($hook, $type, $return, $params){
	if(isset($params["plugin"]) && ($params["plugin"]->getID() == "custom_css")){
		elgg_invalidate_simplecache();
	}
}

// register default elgg events
elgg_register_event_handler("init", "system", "custom_css_init");

elgg_register_plugin_hook_handler("setting", "plugin", "custom_css_invalidate_cache");
