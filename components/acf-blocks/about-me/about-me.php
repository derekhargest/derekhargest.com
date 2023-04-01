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
				<p>As a seasoned web developer with over a decade of experience, I'm passionate about crafting
					customized, component-based websites that drive business success. I pride myself on my ability to
					merge innovative technology and strategic marketing, creating powerful digital solutions tailored to
					your unique needs. Throughout my career, I've honed my skills in various areas, including Shopify
					and WordPress development, e-commerce solutions, and client education.</p>

				<p>When I'm not busy building impactful online presences, you can find me cheering on my beloved
					Baltimore sports teams or spending quality time with my loyal companion, Charlie. My personal
					interests and dedication to my craft provide me with the motivation and inspiration to continuously
					refine my expertise and deliver top-notch web solutions. Let's collaborate to bring your vision to
					life and elevate your digital presence to new heights.</p>
				<div class="actions">
					<a href="/resume" class="button button--primary button--file">
						Download Resume
					</a>
				</div>
			</div>
			<!-- <div class="about-me__image">
				<?php
				if (!empty($image)):
					?>

					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				<?php endif; ?>
			</div> -->
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
