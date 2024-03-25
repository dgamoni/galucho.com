<?php

// Register Custom Post Type
function register_clapproduct_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Products', 'goclap-child' ),
		'singular_name'         => _x( 'Product', 'Product', 'goclap-child' ),
		'menu_name'             => __( 'Product', 'goclap-child' ),
		'name_admin_bar'        => __( 'Product', 'goclap-child' ),
		'archives'              => __( 'Item Archives', 'goclap-child' ),
		'parent_item_colon'     => __( 'Parent Item:', 'goclap-child' ),
		'all_items'             => __( 'All Items', 'goclap-child' ),
		'add_new_item'          => __( 'Add New Item', 'goclap-child' ),
		'add_new'               => __( 'Add New', 'goclap-child' ),
		'new_item'              => __( 'New Item', 'goclap-child' ),
		'edit_item'             => __( 'Edit Item', 'goclap-child' ),
		'update_item'           => __( 'Update Item', 'goclap-child' ),
		'view_item'             => __( 'View Item', 'goclap-child' ),
		'search_items'          => __( 'Search Item', 'goclap-child' ),
		'not_found'             => __( 'Not found', 'goclap-child' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'goclap-child' ),
		'featured_image'        => __( 'Featured Image', 'goclap-child' ),
		'set_featured_image'    => __( 'Set featured image', 'goclap-child' ),
		'remove_featured_image' => __( 'Remove featured image', 'goclap-child' ),
		'use_featured_image'    => __( 'Use as featured image', 'goclap-child' ),
		'insert_into_item'      => __( 'Insert into item', 'goclap-child' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'goclap-child' ),
		'items_list'            => __( 'Items list', 'goclap-child' ),
		'items_list_navigation' => __( 'Items list navigation', 'goclap-child' ),
		'filter_items_list'     => __( 'Filter items list', 'goclap-child' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'goclap-child' ),
		'labels'                => $labels,
		//'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'supports'              => array( 'title','revisions','page-attributes',),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite' 				=> array('slug' => 'gama','with_front' => false),
	);
	register_post_type( 'clap-product', $args );

}
add_action( 'init', 'register_clapproduct_post_type', 0 );
