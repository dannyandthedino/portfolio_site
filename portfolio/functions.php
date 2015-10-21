<?php
		
	function register_my_menu() {
		register_nav_menu('main-menu',__( 'Main Menu' )); 
	}
	
	add_action( 'init', 'register_my_menu' );

function custom_theme_setup() {
     add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'custom_theme_setup' );





if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_portfolio_post',
		'title' => 'portfolio_post',
		'fields' => array (
			array (
				'key' => 'field_562413280c049',
				'label' => 'thumbnail',
				'name' => 'thumbnail',
				'type' => 'image',
				'instructions' => 'Upload image here...',
				'required' => 1,
				'save_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_562418460c04b',
				'label' => 'img_1',
				'name' => 'img_1',
				'type' => 'image',
				'instructions' => 'Upload image here...',
				'required' => 1,
				'save_format' => 'id',
				'preview_size' => 'full',
				'library' => 'all',
			),
			array (
				'key' => 'field_5624133e0c04a',
				'label' => '',
				'name' => '',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

?>