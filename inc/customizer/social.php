<?php
/**
 * Include social icons.
 */


function dash_social_media_array() {

	// Store social site names in array
	$social_sites = array(
		'twitter',
		'facebook',
		'google');

	return $social_sites;
}


function dash_social_media_customizer( $wp_customize ) {

	$social_sites = dash_social_media_array();
	$priority = 5;

	foreach($social_sites as $social_site) {
		$wp_customize->add_setting( "$social_site", array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw'
		) );

		$wp_customize->add_control( "$social_site", array(
			'label'       => __( "$social_site url:", 'Dash' ),
			'section'     => 'social',
			'settings'    => "$social_site",
			'type'        => 'textinput',
		));

		$priority = $priority + 1;
	}

	$wp_customize->add_section('social' , array(
		'title' => __('Social media','Dash'),
	));

}
add_action( 'customize_register', 'dash_social_media_customizer' );



// Outputs social media icons
function dash_media_icons() {

	$social_sites = dash_social_media_array();
 
	// any inputs that aren't empty are stored in $active_sites array
	foreach($social_sites as $social_site) {
		if( strlen( get_theme_mod( $social_site ) ) > 0 ) {
			$active_sites[] = $social_site;
		}
	}


	// for each active social site, add it as a list item
	if(!empty($active_sites)) {
		foreach ($active_sites as $active_site) {
			?>
				<a class="social-<?php echo $active_site; ?>" href="<?php echo get_theme_mod( $active_site ); ?>">
					<i class="fa fa-<?php echo $active_site; ?>"></i>
				</a>
			<?php
		}
	}
}

?>