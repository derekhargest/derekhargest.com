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
			<p>Derek Hargest is a Senior Web Developer and Consultant with a decade of experience in the industry, specializing in crafting innovative and user-friendly web solutions. His expertise spans across various content management systems, including WordPress, Shopify, Magento, and Concrete 5. Proficient in HTML, CSS, PHP, JavaScript, Git, Node.js, Terminal, and GitHub Actions, Derek's technical acumen enables him to deliver cutting-edge websites that cater to a diverse range of client needs.</p>

			<p>In addition to his development skills, Derek is passionate about helping small to mid-sized agencies optimize their development operations and workflows. His successful track record in consulting agencies on team organization, workflow management, and development processes showcases his commitment to fostering collaboration and driving organizational growth. With his natural leadership abilities and excellent soft skills, Derek is the go-to expert for agencies seeking to thrive in the digital landscape.</p>
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
