<?php
/*
 * The Footer
 */
?>


<footer class="main-footer">
	<div class="container">

		<p class="clearfix">

			<span class="float-left">
				&copy;<?php bloginfo('title'); ?>
			</span>

			<span class="float-right social-buttons">
				<?php dash_media_icons(); ?>
			</span>

		</p>
		
		<div class="row">

			<div class="col-4">
				<h3 class="title">
					<?php dash_footer_headings('footer one'); ?>
				</h3>
				<ul class="footer-nav">
					<?php

						$params = array(
							'theme_location'  => 'footer-nav-one',
							'container' => false,
							'items_wrap' => '%3$s',
							'depth' => 1
						);

						wp_nav_menu( $params );

					?>
				</ul>
			</div>
			<div class="col-4">
				<h3 class="title">
					<?php dash_footer_headings('footer two'); ?>
				</h3>
				<ul class="footer-nav">
					<?php

						$params = array(
							'theme_location'  => 'footer-nav-two',
							'container' => false,
							'items_wrap' => '%3$s',
							'depth' => 1
						);

						wp_nav_menu( $params );

					?>
				</ul>
			</div>
			<div class="col-4">
				<h3 class="title">
					<?php dash_footer_headings('footer three'); ?>
				</h3>
				<ul class="footer-nav">
					<?php

						$params = array(
							'theme_location'  => 'footer-nav-three',
							'container' => false,
							'items_wrap' => '%3$s',
							'depth' => 1
						);

						wp_nav_menu( $params );

					?>
				</ul>
			</div>
		</div>

	</div>
</footer>

</div><!-- Page. -->


<script src="<?php bloginfo('template_url'); ?>/assets/js/global.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>