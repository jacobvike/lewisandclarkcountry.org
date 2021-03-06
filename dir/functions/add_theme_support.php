<?php

function custom_add_theme_support(){
	
	if(get_field('enable_post-thumbnails', 'option')) add_theme_support('post-thumbnails', get_field('select_post_types', 'option'));
	
	if(get_field('enable_post-formats', 'option')) add_theme_support('post-formats', get_field('select_post_formats', 'option'));
	
	if(get_field('enable_custom-background', 'option')) add_theme_support('custom-background');
	
	if(get_field('enable_custom-header', 'option')) add_theme_support('custom-header');
	
	if(get_field('enable_post-thumbnails', 'option')) add_theme_support('automatic-feed-links');

	if(get_field('enable_html5', 'option')) add_theme_support('html5', get_field('select_html5_elements', 'option'));

	if(get_field('enable_title_tag', 'option')) add_theme_support('title-tag');
		
	if(get_field('enable_custom-logo', 'option')) add_theme_support('custom-logo', array('header-text'=>get_field('header-text','option'), 'height'=>get_field('height','option'), 'width'=>get_field('width','option')));

}


if( function_exists('acf_add_local_field_group') ):
add_action('init', 'custom_add_theme_support');
acf_add_local_field_group(array (
	'key' => 'group_587bb03c11152',
	'title' => 'Manage Theme Support',
	'fields' => array (
		array (
			'message' => 'Registers theme support for a given feature.

<a href="https://developer.wordpress.org/reference/functions/add_theme_support/" target="_blank">add_theme_support(string $feature)</a>',
			'esc_html' => 0,
			'new_lines' => 'wpautop',
			'key' => 'field_587c7f358a036',
			'label' => 'add_theme_support',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'placement' => 'left',
			'endpoint' => 1,
			'key' => 'field_587bba06db856',
			'label' => 'Post Thumbnails',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 0,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enabled',
			'ui_off_text' => 'Disabled',
			'key' => 'field_587bb98adb854',
			'label' => 'post-thumbnails',
			'name' => 'enable_post-thumbnails',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'multiple' => 1,
			'allow_null' => 0,
			'choices' => array (
				'post' => 'post',
				'page' => 'page',
			),
			'default_value' => array (
			),
			'ui' => 1,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'key' => 'field_587bb0593b9c0',
			'label' => 'Select Post Types',
			'name' => 'select_post_types',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_587bb98adb854',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'message' => 'This feature enables Post Thumbnails support for the theme. Post Thumbnail, now Featured Image, is an image that is chosen as the representative image for Posts, Pages or Custom Post Types. The display of this image is up to the theme.',
			'esc_html' => 0,
			'new_lines' => 'wpautop',
			'key' => 'field_587bbe1c2c746',
			'label' => 'Description',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'placement' => 'left',
			'endpoint' => 0,
			'key' => 'field_587bb9dbdb855',
			'label' => 'Post Formats',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 0,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enabled',
			'ui_off_text' => 'Disabled',
			'key' => 'field_587bba99a528d',
			'label' => 'post-formats',
			'name' => 'enable_post-formats',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'multiple' => 1,
			'allow_null' => 0,
			'choices' => array (
				'aside' => 'aside',
				'gallery' => 'gallery',
				'link' => 'link',
				'image' => 'image',
				'quote' => 'quote',
				'status' => 'status',
				'video' => 'video',
				'audio' => 'audio',
				'chat' => 'chat',
			),
			'default_value' => array (
			),
			'ui' => 1,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'key' => 'field_587bb0b63b9c1',
			'label' => 'Select Post Formats',
			'name' => 'select_post_formats',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_587bba99a528d',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'message' => 'This feature enables Post Formats support for the theme. A Post Format is a piece of meta information that can be used by a theme to customize its presentation of a post',
			'esc_html' => 0,
			'new_lines' => 'wpautop',
			'key' => 'field_587bbf0cad4ae',
			'label' => 'Description',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'placement' => 'left',
			'endpoint' => 0,
			'key' => 'field_587bba2fdb857',
			'label' => 'Custom Background',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 0,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enabled',
			'ui_off_text' => 'Disabled',
			'key' => 'field_587bbaa8a528e',
			'label' => 'custom-background',
			'name' => 'enable_custom-background',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'message' => 'This feature enables Custom_Backgrounds support for a theme. Custom Backgrounds is a theme feature that provides for customization of the background color and image.',
			'esc_html' => 0,
			'new_lines' => 'wpautop',
			'key' => 'field_587bc4234a730',
			'label' => 'Description',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'placement' => 'left',
			'endpoint' => 0,
			'key' => 'field_587bc11a112a3',
			'label' => 'Custom Header',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 0,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enabled',
			'ui_off_text' => 'Disabled',
			'key' => 'field_587bb15811642',
			'label' => 'custom-header',
			'name' => 'enable_custom-header',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'message' => 'This feature enables Custom_Headers support for a theme. Custom header is an image that is chosen as the representative image in the theme top header section.',
			'esc_html' => 0,
			'new_lines' => 'wpautop',
			'key' => 'field_587bc5ce05055',
			'label' => 'Description',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'placement' => 'left',
			'endpoint' => 0,
			'key' => 'field_587bc1ad112ab',
			'label' => 'Custom Logo',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 0,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enabled',
			'ui_off_text' => 'Disabled',
			'key' => 'field_587bb1d711649',
			'label' => 'custom-logo',
			'name' => 'enable_custom-logo',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 100,
			'min' => '',
			'max' => '',
			'step' => 1,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_587bd1ad26ac0',
			'label' => 'Height',
			'name' => 'height',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_587bb1d711649',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 400,
			'min' => '',
			'max' => '',
			'step' => 1,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_587bd2479e490',
			'label' => 'Width',
			'name' => 'width',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_587bb1d711649',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 0,
			'message' => 'Whether to allow for a flexible height.',
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'key' => 'field_587bd2509e491',
			'label' => 'Flex Height',
			'name' => 'flex_height',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_587bb1d711649',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 0,
			'message' => 'Whether to allow for a flexible width.',
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'key' => 'field_587bd2a09e492',
			'label' => 'Flex Width',
			'name' => 'flex_width',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_587bb1d711649',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'multiple' => 1,
			'allow_null' => 0,
			'choices' => array (
				'site-title' => 'site-title',
				'site-description' => 'site-description',
			),
			'default_value' => array (
			),
			'ui' => 1,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'array',
			'key' => 'field_587bd405b3d7d',
			'label' => 'Header Text',
			'name' => 'header_text',
			'type' => 'select',
			'instructions' => 'Classes(s) of elements to hide. It can pass an array of class names here for all elements constituting header text that could be replaced by a logo.',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_587bb1d711649',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'message' => 'This feature allows themes to add custom logos.',
			'esc_html' => 1,
			'new_lines' => 'wpautop',
			'key' => 'field_587bd1ce26ac1',
			'label' => 'Description',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'placement' => 'left',
			'endpoint' => 0,
			'key' => 'field_587bc19a112aa',
			'label' => 'Customize Selective Refresh',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 0,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enabled',
			'ui_off_text' => 'Disabled',
			'key' => 'field_587bb1eb1164a',
			'label' => 'customize_selective_refresh_widgets',
			'name' => 'enable_customize_selective_refresh_widgets',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'message' => 'This feature enables Selective Refresh for Widgets being managed within the Customizer. https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets',
			'esc_html' => 0,
			'new_lines' => 'wpautop',
			'key' => 'field_587bf4dfa0ee5',
			'label' => 'Description',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'placement' => 'left',
			'endpoint' => 0,
			'key' => 'field_587bc189112a9',
			'label' => 'Automatic Feed Links',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 0,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enabled',
			'ui_off_text' => 'Disabled',
			'key' => 'field_587bb16811643',
			'label' => 'automatic-feed-links',
			'name' => 'enable_automatic-feed-links',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'message' => 'This feature enables Automatic Feed Links for post and comment in the head. This should be used in place of the deprecated automatic_feed_links() function. This feature adds RSS feed links to HTML <head>.',
			'esc_html' => 1,
			'new_lines' => 'wpautop',
			'key' => 'field_587bd07f5ffb1',
			'label' => 'Description',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'placement' => 'left',
			'endpoint' => 0,
			'key' => 'field_587bc159112a7',
			'label' => 'HTML5',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 0,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enabled',
			'ui_off_text' => 'Disabled',
			'key' => 'field_587bb17b11644',
			'label' => 'html5',
			'name' => 'enable_html5',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'multiple' => 1,
			'allow_null' => 0,
			'choices' => array (
				'search-form' => 'search-form',
				'comment-form' => 'comment-form',
				'comment-list' => 'comment-list',
				'gallery' => 'gallery',
				'caption' => 'caption',
			),
			'default_value' => array (
			),
			'ui' => 1,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'key' => 'field_587bd0105ffb0',
			'label' => 'Select HTML5 Elements',
			'name' => 'select_html5_elements',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_587bb17b11644',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'message' => 'This feature allows the use of HTML5 markup for the search forms, comment forms, comment lists, gallery, and caption. This feature allows themes to explicitly choose to apply HTML5 markup for search forms, comment forms, comment lists, gallery and caption.',
			'esc_html' => 0,
			'new_lines' => 'wpautop',
			'key' => 'field_587bcfea5ffaf',
			'label' => 'Description',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'placement' => 'left',
			'endpoint' => 0,
			'key' => 'field_587bc15e112a8',
			'label' => 'Title Tag',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 0,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enabled',
			'ui_off_text' => 'Disabled',
			'key' => 'field_587bb18711645',
			'label' => 'title-tag',
			'name' => 'enable_title_tag',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'message' => 'This feature enables plugins and themes to manage the document title tag. This should be used in place of wp_title() function. This feature allows themes to add document title tag to HTML <head>.',
			'esc_html' => 1,
			'new_lines' => 'wpautop',
			'key' => 'field_587bcf195ffae',
			'label' => 'Description',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'field',
	'hide_on_screen' => array (
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'custom_fields',
		4 => 'discussion',
		5 => 'comments',
		6 => 'revisions',
		7 => 'slug',
		8 => 'author',
		9 => 'format',
		10 => 'page_attributes',
		11 => 'featured_image',
		12 => 'categories',
		13 => 'tags',
		14 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => 'Registers theme support for a given feature.',
	'local' => 'php',
));

endif;
?>