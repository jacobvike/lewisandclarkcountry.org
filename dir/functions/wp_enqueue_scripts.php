<?php
function enqueue(){
	wp_enqueue_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js', array('jquery'), '2.8.3');

	wp_enqueue_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', NULL, '4.0.0-alpha.6');
	wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery'), '4.0.0-alpha.6');

	wp_enqueue_script('sliderpro', 'https://cdnjs.cloudflare.com/ajax/libs/slider-pro/1.3.0/js/jquery.sliderPro.min.js', array('jquery'), '1.3.0');
	wp_enqueue_style('sliderpro', 'https://cdnjs.cloudflare.com/ajax/libs/slider-pro/1.3.0/css/slider-pro.min.css', NULL, '1.3.0');
	
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', NULL, '2.1.3');
	
	wp_enqueue_style('fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), '4.6.3');
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,400i,800', array(), '1');
	wp_enqueue_style('styles', get_stylesheet_uri(), array('bootstrap', 'fonts'), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'enqueue');
?>