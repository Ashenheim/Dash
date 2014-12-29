<?php
/**
  *
  * This only inserts the post, edit content-post to change the blog articles structure"
  * The basic template for all pages.
  *
  * */


get_header(); ?>
	

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main>
	</div>

<?php get_footer(); ?>