<!doctype html>
<html class="no-js">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>
	<?php
		if (function_exists('is_tag') && is_tag()) { 
			single_tag_title("Tag Archive for &quot;"); echo '&quot; - ';
		} elseif (is_archive()) { 
			wp_title(''); echo ' Archive - '; } 
		elseif (is_search()) { 
			echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; 
		} elseif (!(is_404()) && (is_single()) || (is_page())) { 
			wp_title(''); echo ' - ';
		} elseif (is_404()) { 
			echo 'Niet gevonden - ';
		} if (is_home()) { 
			bloginfo('name'); echo ' - '; bloginfo('description');
		} else {
			bloginfo('name'); }
		if ($paged>1) { 
			echo ' - page '. $paged;
		}
	?>
	</title>

	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/media/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/global.css">
	
	<script src="http://localhost:9090/livereload.js"></script>

	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
	<![endif]-->

<?php wp_head(); ?>
</head>
<body>

<?php /*
<header class="admin-header">
	<ul class="admin-nav">
		<?php

			$params = array(
				'theme_location'  => 'admin-nav',
				'container' => false,
				'items_wrap' => '%3$s'
			);

			wp_nav_menu( $params );

		?>
	</ul>
</header>
*/ ?>

<div class="page-wrap animation_fade">


	<header class="main-header">
		<div class="wrap">

			<h1 class="site-title">
				<a href="<?php bloginfo('url'); ?>">
					<em><?php bloginfo('site-name'); ?></em>
				</a>
			</h1>

			<nav>
				
				<div class="hamburger" id="Hamburger">
					<i class="fa fa-bars hamburger-icon icon-inactive"></i>
					<i class="fa fa-close hamburger-icon icon-active"></i>
				</div>

				<ul role="navigation" class="desktop-nav">
					<?php

						$params = array(
							'theme_location'  => 'header-nav',
							'container' => false,
							'items_wrap' => '%3$s'
						);

						wp_nav_menu( $params );

					?>
				</ul>

				<ul role="navigation" class="mobile-nav">
					<?php wp_nav_menu( $params ); ?>
				</ul>
			</nav>
	
		</div>
	</header>