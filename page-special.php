<?php
/**
 Template Name: Special
  * @package dash
  * */


// Variables
$start_date = get_field('start_date');
$end_date = get_field('end_date');


get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="box">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'special' ); ?>

			<?php endwhile; // end of the loop. ?>

			</div>

			
			<div id="Posts">
				<?php if ( !empty( $start_date ) ) : ?>
					<?php get_template_part( 'loop', 'special' ); ?>
				<?php else : ?>
					<?php edit_post_link( 'Geen datums waren ingesteld, stel deze in' ); ?>
				<?php endif; ?>
			</div>

		</main>
	</div>

<?php get_footer(); ?>