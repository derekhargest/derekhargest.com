<?php

$resume = get_field('about_me_resume');

?>

<div class="component about-me" id="about_me">
	<div class="container about-me__container">
		<div class="about-me__content">
			<div class="about-me__info">
				<div class="about-me__title section-heading">
					<h2>
						About me
					</h2>
				</div>
			</div>
			<div class="about-me__text">
				<p>I'm a Senior Web Developer and Consultant with a decade of experience in the industry, specializing
					in crafting innovative and user-friendly web solutions. My expertise spans across various content
					management systems, including WordPress, Shopify, Magento, and Concrete 5. Proficient in HTML, CSS,
					PHP, JavaScript, Git, Node.js, Terminal, and GitHub Actions, my technical acumen enables me to
					deliver cutting-edge websites that cater to a diverse range of client needs.</p>

				<p>In addition to my development skills, I'm passionate about helping small to mid-sized agencies
					optimize their development operations and workflows. My successful track record in consulting
					agencies on team organization, workflow management, and development processes showcases my
					commitment to fostering collaboration and driving organizational growth. With my excellent soft
					skills, I am the go-to expert for agencies seeking to thrive in the digital landscape.</p>
				<?php
				if ($resume):
					?>
					<div class="actions">
						<a href="<?php echo esc_url($resume); ?>" class="button button--primary button--file">
							Download Resume
						</a>
					</div>
					<?php
				endif;
				?>
			</div>
		</div>
		<div class="about-me__testimonials">
			<div class="testimonials__info">
				<div class="testimonials__title section-heading">
					<h2>
						What they're saying:
					</h2>
				</div>
			</div>
			<div class="testimonials" id="testimonial_slider">
				<div class="testimonial">
					<div class="testimonial__text">
						<p>He'll help you and your team be better through ideas, action, and example, just as he's done
							for my company and many others.</p>
						<p><span>Bob</span> - <span>Propr Design</span></p>
					</div>
				</div>
				<div class="testimonial">
					<div class="testimonial__text">
						<p>Derek's knowledge of the platforms and ability to work with us on complex customizations made
							our site redesign a success!</p>
						<p><span>Jaclyn</span> - <span>The Verticale</span></p>
					</div>
				</div>
				<div class="testimonial">
					<div class="testimonial__text">
						<p>His ability to look at the larger picture and bring a cohesive solution to the table is
							remarkable</p>
						<p><span>Iris</span> - <span>IOCC</span></p>
					</div>
				</div>
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
