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
			
		<?php if ( have_posts() ) : ?>

			<div class="article_container clearfix">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php get_template_part( 'content', 'post' ); ?>

		<?php endwhile; ?>
			
			</div>
			<!-- Page navigation here -->

		<?php else : ?>

			<?php _e('Sorry, no posts to show'); ?>

		<?php endif; ?>

		</main>
	</div>

<?php get_footer(); ?>