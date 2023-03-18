<?php

$hero_heading = get_field('hero_heading');
$hero_text = get_field('hero_text');
$hero_button = get_field('hero_button');
$hero_image = get_field('hero_image');
$hero_buttons = get_field('hero_buttons');

?>

<div class="component hero">
	<div class="container hero__container">
		<div class="hero__content">
			<div class="hero__title_image">
				<div class="hero__title">
					<h1>
						<?php echo wp_kses_post($hero_heading) ?>
					</h1>
					<?php
					if ($hero_buttons): ?>
						<div class="actions">
							<?php foreach ($hero_buttons as $button):
								$button_style = $button['button_style'];
								$button = $button['hero_button'];
								$button_class = '';
								if ($button_style == 'primary') {
									$button_class = 'button--primary';
								} elseif ($button_style == 'secondary') {
									$button_class = 'button--secondary';
								}
								if ($button):
									?>
									<a href="<?php echo esc_url($button['url']); ?>"
										class="button <?php echo esc_attr($button_class); ?>">
										<?php echo esc_html($button['title']); ?>
									</a>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
				<?php
				if (!empty($hero_image)):
					?>
					<div class="hero__image">
						<img src="<?php echo esc_url($hero_image['url']); ?>"
							alt="<?php echo esc_attr($hero_image['alt']); ?>" />
					</div>
				<?php endif; ?>
			</div>
			<!-- <p>
				<?php echo esc_html($hero_text) ?>
			</p> -->
		</div>
	</div>
</div>
