<?php
/**
 * Include social icons.
 */


function dash_footer_headings_array() {

	// Store social site names in array
	$headings = array(
		'footer one',
		'footer two',
		'footer three');

	return $headings;
}


function dash_footer_headings_customizer( $wp_customize ) {

	$headings = dash_footer_headings_array();
	$priority = 3;

	foreach($headings as $heading) {
		$wp_customize->add_setting( "$heading", array(
			'type'              => 'theme_mod'
		) );

		$wp_customize->add_control( "$heading", array(
			'label'       => __( ucfirst($heading), 'Dash' ),
			'section'     => 'headers',
			'settings'    => "$heading",
			'type'        => 'textinput',
		));

		$priority = $priority + 1;
	}

	$wp_customize->add_section('headers' , array(
		'title' => __('Footer Headers','Dash'),
	));

}
add_action( 'customize_register', 'dash_footer_headings_customizer' );



// Outputs social media icons
function dash_footer_headings($params) {

	$headings = dash_footer_headings_array();

	foreach( $headings as $heading ) {
		if ( strlen( get_theme_mod( $heading ) ) > 0 ) {
			$active_headings[] = $heading;
		}
	}


	if( !empty( $active_headings ) ) {
		foreach( $active_headings as $active_heading ) {
			if( $params == $active_heading ) {
				$title = get_theme_mod( $active_heading );
				echo $title;
			}			
		}
	}
	
}

?>