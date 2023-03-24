<?php
/**
 * Index
 *
 * @package groundlevel
 */

get_header();

?>


<section>
	<?php while (have_posts()): ?>
		<?php the_post(); ?>
		<?php get_template_part('template-parts/loop-post'); ?>
	<?php endwhile; ?>
</section>

<?php

get_footer();
