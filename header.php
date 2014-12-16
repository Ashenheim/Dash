<!doctype html>
<html class="no-js">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title><?php dash_page_title(); ?></title>

	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/media/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/global.css">

	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
	<![endif]-->

<?php wp_head(); ?>
</head>
<body>


<div class="page-wrap">

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
					<?php wp_list_pages("title_li="); ?>
				</ul>

				<ul role="navigation" class="mobile-nav">
					<?php wp_list_pages("title_li="); ?>
				</ul>
			</nav>
	
		</div>
	</header>

	<div class="progression">
		<span class="progression-bar" id="progressionBar"></span>
	</div>