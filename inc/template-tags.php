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





/* ====================================
   Twitter link
   ==================================== */


if ( ! function_exists( 'dash_twitter' ) ) :
	function dash_twitter() {
		$twitter_name = "visenseizoen";
		$twitter_quote = get_the_title();

		$url_data = 
			"text=" .
			$twitter_quote .
			"&via=" .
			$twitter_name .
			"&url=" .
			get_permalink();

		$url_replace = array(
			'/' => '%2F',
			':' => '%3A',
			' ' => '%20'
		);
		$url_data = str_replace(
			array_keys($url_replace),
			array_values($url_replace),
			$url_data
		);

		echo "http://twitter.com/intent/tweet?" . $url_data;

	}
endif;





/* ====================================
   Facebook link
   ==================================== */


if ( ! function_exists( 'dash_facebook' ) ) :
	function dash_facebook() {

		$url = get_permalink();
		$title = get_the_title();

		$url_data = $url;

		$url_replace = array(
			'/' => '%2F',
			':' => '%3A',
			' ' => '%20'
		);
		$url_data = str_replace(
			array_keys($url_replace),
			array_values($url_replace),
			$url_data
		);

		echo "https://www.facebook.com/sharer/sharer.php?u=" . $url_data;

	}
endif;


?>




