<?php
add_action('init', 'tours_init');
function tours_init()
{
	register_post_type('tour', array(
		'labels'             => array(
			'name'               => __('Tours', 'sensive'), // Основное название типа записи
			'singular_name'      => __('Tour', 'sensive'), // отдельное название записи типа Book
			'add_new'            => __('Add new', 'sensive'),
			'add_new_item'       => __('Add new tour', 'sensive'),
			'edit_item'          => __('Edit tour', 'sensive'),
			'new_item'           => __('New tour', 'sensive'),
			'view_item'          => __('View tour', 'sensive'),
			'search_items'       => __('Find tour', 'sensive'),
			'not_found'          => __('Tours not found', 'sensive'),
			'not_found_in_trash' => __('No tours in trash', 'sensive'),
			'parent_item_colon'  => '',
			'menu_name'          => __('Tours', 'sensive')

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
		'menu_icon'          => 'dashicons-airplane'
	));
}
