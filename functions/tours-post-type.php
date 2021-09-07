<?php
add_action('init', 'tours_init');
function tours_init()
{
	register_post_type('book', array(
		'labels'             => array(
			'name'               => __('Tours'), // Основное название типа записи
			'singular_name'      => __('Tour'), // отдельное название записи типа Book
			'add_new'            => __('Add new'),
			'add_new_item'       => __('Add new tour'),
			'edit_item'          => __('Edit tour'),
			'new_item'           => __('New tour'),
			'view_item'          => __('View tour'),
			'search_items'       => __('Find tour'),
			'not_found'          => __('Tours not found'),
			'not_found_in_trash' => __('No tours in trash'),
			'parent_item_colon'  => '',
			'menu_name'          => __('Tours')

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
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
		'menu_icon'          => 'dashicons-airplane'
	));
}
