<?php
/**
 * Custom template tags
 */





/* ====================================
   Categories
   ==================================== */

if ( ! function_exists( 'dash_categories' ) ) :
	function dash_categories() {

	    global $cats;
	    
		$cats = get_the_category();
		$site_url = get_bloginfo('url');

		for ($i = 0; $i < count($cats); $i++) {

			if ( $i == 0 ) {
				$comma = '<i class="fa fa-pencil"></i> ';
			} else {
				$comma = ", ";
			}

			echo $comma . '<a href="' . $site_url . "?cat=" . $cats[$i]->cat_ID . '">' . $cats[$i]->cat_name . '</a>' ;
		
		}
	}

endif;

?>