<?php

$icon = get_field('about_me_title_icon');
$icon2 = get_field('about_me_title_icon_2');
$icon3 = get_field('about_me_title_icon_3');
$image = get_field('about_me_image');

?>

<div class="component about-me" id="about_me">
	<div class="container about-me__container">
		<div class="about-me__info">
			<div class="about-me__title section-heading">
				<?php echo wp_kses_post($icon); ?>
				<h2>
					About me
				</h2>
			</div>
		</div>
		<div class="about-me__content">
			<div class="about-me__text">
				<p>Throughout my career, I have been trusted by various agencies in the Baltimore area to implement
					efficient processes and workflows. My componentized approach to web development ensures that the
					projects I work on are scalable, maintainable, and tailored to the specific needs of my clients.</p>
				<p>As a seasoned developer, my skillset encompasses a variety of content management systems such as
					WordPress, Shopify, and Concrete5. My experience extends beyond web development and includes
					management
					roles, providing me with a strong understanding of business objectives, which allows me to help my
					clients achieve their goals and drive measurable results. When I'm not busy building websites, I
					enjoy
					restoring vintage furniture, attending sporting events in Baltimore, and spending quality time with
					my
					dog, Charlie.</p>
				<div class="actions">
					<a href="/resume" class="button button--primary button--file">
						Download Resume
					</a>
				</div>
			</div>
			<div class="about-me__image">
				<?php
				if (!empty($image)):
					?>

					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="component contact" id="contact">
	<div class="container contact__container">
		<div class="contact__content">
			<div class="contact__intro">
				<div class="contact__heading">
					<h2>Get in touch!</h2>
					<p>Contact me to get in touch about a project</p>
				</div>
				<div class="contact__info">
					<a class="contact__info__item" href="#">
						<div class="contact__info__icon">
							<i class="fa-solid fa-phone-volume"></i>
						</div>
						<div class="contact__info__text">
							<p>443 932 7513</p>
						</div>
					</a>
					<a class="contact__info__item" href="#">
						<div class="contact__info__icon">
							<i class="fa-solid fa-location-dot"></i>
						</div>
						<div class="contact__info__text">
							<p>Baltimore, Maryland</p>
						</div>
					</a>
					<a class="contact__info__item" href="#">
						<div class="contact__info__icon">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<div class="contact__info__text">
							<p>derek@derekhargest.com</p>
						</div>
					</a>
				</div>
			</div>
			<div class="contact__form">
				<?php echo do_shortcode('[gravityform id="2" title="true" description="false" ajax="true"]'); ?>
			</div>
		</div>
	</div>
</div>