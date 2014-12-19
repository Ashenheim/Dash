<?php


include 'inc/dash_profilepage.php';
 
add_filter( 'user_contactmethods', 'dash_contact_methods' );


// Rewrites the Edit post link output
function custom_edit_post_link($output) {
 $output = str_replace('class="post-edit-link"', 'class="btn edit-button"', $output);
 return $output;
}
add_filter('edit_post_link', 'custom_edit_post_link');

// Inserts includes on pages
require get_template_directory() . '/inc/template-tags.php';

?>