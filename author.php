<?php
	$author_email = get_the_author_meta('user_email');
?>


<h1>Authors</h1>
<p>
	<?php echo get_avatar( $author_email, $size = '120'); ?>
</p>
<p>
	<?php the_author_meta('display_name'); ?>
</p>