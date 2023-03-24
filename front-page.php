<?php
/**
 * Index
 *
 * @package groundlevel
 */

get_header('home');

?>


<section class="site-section">
	<?php while (have_posts()): ?>
		<?php the_post(); ?>
		<?php get_template_part('template-parts/loop-post'); ?>
	<?php endwhile; ?>
	<?php get_template_part('components/site-alert'); ?>
</section>

<?php

// get_footer();
