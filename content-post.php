<?php
/**
 * Content structure for the Blog posts
 */

	$image = get_field('banner_image');

	if( !empty($image) ):
		// vars
		$imageURL = $image['url'];
		$imageTitle = $image['title'];

		$imageThumb = $image['sizes']['thumbnail'];
		$imageLarge = $image['sizes']['large'];

	endif;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry-article fade-animation'); ?>>
	<div class="container">
		<div class="row">
			<div class="entry-container <?php if ( $image ) { echo 'col-6'; } ?>">		
				<header class="entry-header">
					<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
					<i class="fa fa-clock-o"></i> <?php the_date(); ?>
				</header>

				<section class="entry-content">
						
					<?php the_excerpt(); ?>

					<a class="btn" href="<?php the_permalink(); ?>">	
						Lees meer.
					</a>
						
				</section>

				<footer class="entry-footer">
					<div class="author-box">
						<?php include 'author.php'; ?>
					</div>
				</footer>

			</div>

			<?php if ( $image ) : ?>
			<div class="col-6">
				<div class="entry-cover" style="background-image: url(<?php echo $imageLarge; ?>);">
					<img class="entry-cover-image" src="<?php echo $imageLarge; ?>" alt="<?php echo $imageTitle; ?>">
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</article>