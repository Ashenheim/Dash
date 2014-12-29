<?php

// Register Custom Post Type
function custom_type_sponsors() {

	$labels = array(
		'name'                => _x( 'Sponsors', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Sponsor', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Sponsors', 'text_domain' ),
		'parent_item_colon'   => __( 'Sponsor:', 'text_domain' ),
		'all_items'           => __( 'Alle sponsors', 'text_domain' ),
		'view_item'           => __( 'Bekijk sponsor', 'text_domain' ),
		'add_new_item'        => __( 'Voeg nieuwe sponsor', 'text_domain' ),
		'add_new'             => __( 'Voeg nieuwe', 'text_domain' ),
		'edit_item'           => __( 'Aanpassen sponsor', 'text_domain' ),
		'update_item'         => __( 'Sponsor updaten', 'text_domain' ),
		'search_items'        => __( 'Zoek sponsor', 'text_domain' ),
		'not_found'           => __( 'Niet gevonden', 'text_domain' ),
		'not_found_in_trash'  => __( 'Niet gevonden in prullebak', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'sponsors', 'text_domain' ),
		'description'         => __( ' ', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-heart',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'post_type', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_type_sponsors', 0 );

?>