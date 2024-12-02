<?php
// Register Custom Post Type
function custom_post_type_people() {

	$labels = array(
		'name'                  => _x( 'People', 'Post Type General Name', 'evergreen' ),
		'singular_name'         => _x( 'Person', 'Post Type Singular Name', 'evergreen' ),
		'menu_name'             => __( 'People', 'evergreen' ),
		'name_admin_bar'        => __( 'Person', 'evergreen' ),
		'archives'              => __( 'People Archives', 'evergreen' ),
		'attributes'            => __( 'People Attributes', 'evergreen' ),
		'parent_item_colon'     => __( 'Parent Person:', 'evergreen' ),
		'all_items'             => __( 'All People', 'evergreen' ),
		'add_new_item'          => __( 'Add New Person', 'evergreen' ),
		'add_new'               => __( 'Add New', 'evergreen' ),
		'new_item'              => __( 'New Person', 'evergreen' ),
		'edit_item'             => __( 'Edit Person', 'evergreen' ),
		'update_item'           => __( 'Updater Person', 'evergreen' ),
		'view_item'             => __( 'View Person', 'evergreen' ),
		'view_items'            => __( 'View People', 'evergreen' ),
		'search_items'          => __( 'Search Person', 'evergreen' ),
		'not_found'             => __( 'Not found', 'evergreen' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'evergreen' ),
		'featured_image'        => __( 'Featured Image', 'evergreen' ),
		'set_featured_image'    => __( 'Set featured image', 'evergreen' ),
		'remove_featured_image' => __( 'Remove featured image', 'evergreen' ),
		'use_featured_image'    => __( 'Use as featured image', 'evergreen' ),
		'insert_into_item'      => __( 'Insert into person', 'evergreen' ),
		'uploaded_to_this_item' => __( 'Uploaded to this person', 'evergreen' ),
		'items_list'            => __( 'People list', 'evergreen' ),
		'items_list_navigation' => __( 'People list navigation', 'evergreen' ),
		'filter_items_list'     => __( 'Filter people list', 'evergreen' ),
	);
	$rewrite = array(
		'slug'                  => 'person',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Person', 'evergreen' ),
		'description'           => __( 'The people of Evergreen Dental.', 'evergreen' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-universal-access-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rest_base'             => 'people',
	);
	register_post_type( 'evergreen_people', $args );

}
add_action( 'init', 'custom_post_type_people', 0 );
?>