<?php
register_sidebar(array(
	'name'=>'Sidebar Widgets',
	'description'=>'Quick Links, Our Partners',
	'id'=>'sidebar-widgets',
	'before_widget'=>'<div id="%1$s" class="card card-block %2$s">',
	'after_widget'=>'</div>',
	'before_title'=>'<h3 class="card-title">',
	'after_title'=>'</h3>'
));

class text_widget extends WP_Widget{
	function text_widget() {
		parent::__construct(false, 'Text Block Widget', array('description' => 'Simple title and text block'));
	}
	function widget( $args, $instance ){
		echo $args['before_widget'];
		echo wp_get_attachment_image(get_field('featured_image', 'widget_' . $args['widget_id']), 'medium', false, array('class'=>'img-fluid'));
		echo sprintf('%s%s%s', $args['before_title'], get_field('sidebar_title', 'widget_' . $args['widget_id']), $args['after_title']);
		echo sprintf('<p class="card-text">%s</p>', get_field('sidebar_text', 'widget_' . $args['widget_id']));
		echo $args['after_widget'];
	}
	function update( $new_instance, $old_instance ){
		return $new_instance;
	}
	function form( $instance ){
		return '';
	}
}


function register_quick_links() {
	 register_widget('text_widget');
}
add_action('widgets_init', 'register_quick_links', 11);
?>