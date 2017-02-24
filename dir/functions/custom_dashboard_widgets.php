<?php
function custom_dashboard_widgets(){
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	
	remove_meta_box('wpseo-dashboard-overview', 'dashboard', 'normal');
	remove_meta_box('rg_forms_dashboard', 'dashboard', 'normal');
	
	add_meta_box('custom_help_widget', 'Website Support', 'custom_dashboard_help', 'dashboard', 'normal', 'high');
}
add_action('wp_dashboard_setup', 'custom_dashboard_widgets');
function custom_dashboard_help($post){
	$value = get_current_user();
	pre($value);
}
?>