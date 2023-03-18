<?php
$blog_info = get_bloginfo('name');
if ($blog_info): ?>
	<?php if (is_front_page() && !is_paged()): ?>
		<h1 class="site-logo">
			dh<span>.</span>
		</h1>

	<?php else: ?>
		<a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
			dh<span>.</span>
		</a>
	<?php endif; ?>
<?php endif; ?>
