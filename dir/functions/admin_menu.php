<?php
function custom_menu_page_removing() {
	remove_menu_page('edit-comments.php');
	remove_menu_page('tools.php');
	if(wp_get_current_user()->user_login != 'jake'){
		remove_menu_page('index.php');
		remove_menu_page('themes.php');
		remove_menu_page('plugins.php');
		remove_menu_page('users.php');
		remove_menu_page('options-general.php');
	}
}
add_action('admin_menu', 'custom_menu_page_removing');
?>