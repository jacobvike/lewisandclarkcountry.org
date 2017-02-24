<?php

if(!isset($content_width)) $content_width = 1140;

function pre($a){
	echo '<pre>' . htmlentities( utf8_encode( print_r( $a, true ) ), ENT_QUOTES, 'utf-8' ) . '</pre>';
}
$inc = scandir(dirname(__FILE__).'/dir/functions');
foreach($inc as $k=>$v){
	if($k>1 && is_file(dirname(__FILE__) . '/dir/functions/'.$v)) include(dirname(__FILE__).'/dir/functions/'.$v);
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point($path) {
	$path = get_stylesheet_directory() . '/dir/acf/json';
    return $path;
}

function filter_handler($post_id){
	if(wp_is_post_revision($post_id)) return false;
	//pre($_POST['acf']);exit;
	$content = $_POST['acf']['field_58afcaa35fef6'];
	$content .= '<ul>';
	foreach($_POST['acf']['field_58afcc92009ec'] as $v){
		$content .= '<li>'.$v['field_58afcccb009ed'].'</li>';
	}
	$content .= '</ul>';
	$my_post = array(
		'ID'=>$post_id,
		'post_content'=>$content);
	wp_update_post($my_post);
	return $post_id;
}

add_filter('acf/save_post', 'filter_handler', 1);

?>