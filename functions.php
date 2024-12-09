<?php
// part of the trifecta of shit necessary for gutenberg and featured images
// this next line adds it to the 'team' custom post type
add_theme_support( 'post-thumbnails', array( 'team' ));

// Register Custom Post Type
function custom_post_type_team() {

	$labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'evergreen' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'evergreen' ),
		'menu_name'             => __( 'Team', 'evergreen' ),
		'name_admin_bar'        => __( 'Team', 'evergreen' ),
		'archives'              => __( 'Team Archives', 'evergreen' ),
		'attributes'            => __( 'Team Attributes', 'evergreen' ),
		'parent_item_colon'     => __( 'Parent Item:', 'evergreen' ),
		'all_items'             => __( 'All Team Members', 'evergreen' ),
		'add_new_item'          => __( 'Add New Team Member', 'evergreen' ),
		'add_new'               => __( 'Add New', 'evergreen' ),
		'new_item'              => __( 'New Team Member', 'evergreen' ),
		'edit_item'             => __( 'Edit Team Member', 'evergreen' ),
		'update_item'           => __( 'Update Team Member', 'evergreen' ),
		'view_item'             => __( 'View Item Team Member', 'evergreen' ),
		'view_items'            => __( 'View Items Team Member', 'evergreen' ),
		'search_items'          => __( 'Search Team Members', 'evergreen' ),
		'not_found'             => __( 'Not found', 'evergreen' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'evergreen' ),
		'featured_image'        => __( 'Featured Image', 'evergreen' ),
		'set_featured_image'    => __( 'Set featured image', 'evergreen' ),
		'remove_featured_image' => __( 'Remove featured image', 'evergreen' ),
		'use_featured_image'    => __( 'Use as featured image', 'evergreen' ),
		'insert_into_item'      => __( 'Insert into team member', 'evergreen' ),
		'uploaded_to_this_item' => __( 'Uploaded to this team member', 'evergreen' ),
		'items_list'            => __( 'Team list', 'evergreen' ),
		'items_list_navigation' => __( 'Team list navigation', 'evergreen' ),
		'filter_items_list'     => __( 'Filter team list', 'evergreen' ),
	);
	$rewrite = array(
		'slug'                  => 'team',
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Team Member', 'evergreen' ),
		'description'           => __( 'Evergreen Team Members', 'evergreen' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ), // editor and thumbnail necessary for gutenberg
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-universal-access-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'team',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true, // also necessary for gutenberg (steve?)
		'rest_base'             => 'team',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'custom_post_type_team', 0 );
?>