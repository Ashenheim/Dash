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

<article id="post-<?php the_ID(); ?>" <?php post_class('entry-article'); ?>>
	<div class="container">
		<div class="row">
			<div class="col-6">		
				<header class="entry-header">
					<?php include 'author.php'; ?>
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
				</footer>

			</div>

			<div class="col-6">
				<?php if ( $image ) : ?>
				<div class="entry-cover" style="background-image: url(<?php echo $imageLarge; ?>);">
					<img class="entry-cover-image" src="<?php echo $imageLarge; ?>" alt="<?php echo $imageTitle; ?>">
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</article>