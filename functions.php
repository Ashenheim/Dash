<?php

show_admin_bar( false );

include 'inc/dash_profilepage.php';
include 'inc/dash_social-media.php';
include 'inc/settings.php';
// include 'inc/custom-type--sponsors.php';
 
add_filter( 'user_contactmethods', 'dash_contact_methods' );


// Rewrites the Edit post link output
function custom_edit_post_link($output) {
 $output = str_replace('class="post-edit-link"', 'class="btn edit-button"', $output);
 return $output;
}
add_filter('edit_post_link', 'custom_edit_post_link');





/* ====================================
   Includes
   ==================================== */

require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/disable-date.php';
require get_template_directory() . '/inc/customizer/social.php';
require get_template_directory() . '/inc/customizer/footer-headings.php';




// This adds more than one menu location
add_action( 'init', 'paukai_register_multiple_menus' );
function paukai_register_multiple_menus() {
    register_nav_menus(
        array(
            'header-nav'       => 'Header Navigation',
            'footer-nav-one'   => 'Footer Navigation 1',
            'footer-nav-two'   => 'Footer Navigation 2',
            'footer-nav-three' => 'Footer Navigation 3',
            'admin-nav'        => 'Admin Navigation'
        )
    );
}


/* ====================================
   Custom The Excerpt.
   the_excerpt();
   ==================================== */


remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_trim_excerpt');

function custom_trim_excerpt($text) { // Fakes an excerpt if needed
	global $post;

	if ( '' == $text ) {
		$text = get_the_content('');
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$text = strip_tags($text, '<p><a>');
		$excerpt_length = 80;
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words) > $excerpt_length) {
			array_pop($words);
			array_push($words, '...');
			$text = implode(' ', $words);
		}
	}
	return $text;
}


/* ====================================
   Create name tag for Menu's
   ==================================== */


function gm_get_theme_menu_name( $theme_location ) {
	if( ! $theme_location ) return false;
 
	$theme_locations = get_nav_menu_locations();
	if( ! isset( $theme_locations[$theme_location] ) ) return false;
 
	$menu_obj = get_term( $theme_locations[$theme_location], 'nav_menu' );
	if( ! $menu_obj ) $menu_obj = false;
	if( ! isset( $menu_obj->name ) ) return false;
 
	return $menu_obj->name;
}


?>