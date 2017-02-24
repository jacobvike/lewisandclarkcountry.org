<?php 

add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path($path){
	$path = get_stylesheet_directory() . '/dir/acf/pro/';
    return $path;
}

add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir($dir){
    $dir = get_stylesheet_directory_uri() . '/dir/acf/pro/';
    return $dir;
}

if(wp_get_current_user()->user_login != 'jake') add_filter('acf/settings/show_admin', '__return_false');

include_once(get_stylesheet_directory() . '/dir/acf/pro/acf.php');

if(function_exists('acf_add_options_page')){
	acf_add_options_page();
	acf_add_options_page('Global Settings');
}
?>