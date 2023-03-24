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
					WordPress, Shopify, and Concrete5. My experience extends beyond web development and includes management
					roles, providing me with a strong understanding of business objectives, which allows me to help my
					clients achieve their goals and drive measurable results. When I'm not busy building websites, I enjoy
					restoring vintage furniture, attending sporting events in Baltimore, and spending quality time with my
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
				<?php echo do_shortcode( '[gravityform id="2" title="true" description="false" ajax="true"]' ); ?>
			</div>
		</div>
	</div>
</div>

<!-- <div class="component resume">
	<div class="container">
		<div class="about-me__title section-heading">
			<?php echo wp_kses_post($icon2); ?>
			<h2>
				Resume
			</h2>
		</div>
		<div class="resume__content">
			<div class="resume__intro">
				<h3>Derek Hargest</h3>
				<p>Front-end Developer</p>
				<p>Phone: 443-932-7513</p>
				<h3>Objective</h3>
				<p>Highly skilled web consultant and developer with a focus on eCommerce and lead generation websites, seeking opportunities to work with growing B2C clients and agencies. Adept at using a componentized approach, aiming to streamline operations and deliver scalable, maintainable web solutions tailored to client needs.</p>

				<h3>Experience</h3>

				<h4>Freelance Web Consultant (Oct 2020 - Present)</h4>

				<ul>
					<li>Provide guidance and expertise to growing businesses in building and scaling their eCommerce solutions.	Consult with agencies on website development, from concept to implementation, using various content management systems.</li>
					<li>Design, build, and maintain eCommerce and lead-generation websites to improve operations for B2C clients.</li>
				</ul>
				<h4>Director of Web Services, Duckpin (Jan 2020 - Oct 2020)</h4>
				<ul>
					<li>Led a team of skilled engineers in creating bespoke websites for small to midsize businesses.</li>
					<li>Implemented development architecture for streamlined website building and deployment processes.</li>
					<li>Developed a modular system and codebase for WordPress to maximize team efficiency.</li>
					<li>Maintained and serviced a diverse portfolio of e-commerce and lead generation websites.</li>
					<li>Collaborated with Operations, Creative, and Marketing Directors to drive growth and achieve results.</li>
				</ul>
				<h4>Senior Developer & Development Partner, Propr Design (Dec 2015 - June 2019)</h4>
				<ul>
					<li>>Managed web presences for multiple clients and industries as a development partner. </li>
					<li>Established processes and best practices for versioning, modular CSS, content collection, file </li>
					<li>structure, and theme creation.</li>
			</li>
				<li>Scoped projects effectively from inception to completion.</li>
				<li>Advised Creative Director on identity design related to web products.</li>
				</ul>
				<h4>Frontend Web Developer, Groove Commerce (Dec 2015 - June 2019)</h4>
				<ul>
				<li>Responsible for full site builds and maintaining existing builds, focusing on eCommerce and lead generation.</li>
				<li>Acted as lead developer on projects, customizing platform functionality to achieve desired results.</li>
				<li>Demonstrated leadership and coordination skills in scoping required resources and timeframes.</li>
				</ul>
				<h4>Skills</h4>

				<li>Expertise in WordPress, Shopify, and Concrete5 content management systems.</li>
				<li>Proficient in web development technologies, including HTML, CSS, JavaScript, and PHP.</li>
				<li>Strong understanding of web development best practices and componentized approach.</li>
				<li>Experienced in project management and leading development teams.</li>
				<h4>Education</h4>

				(Add your education information here.)

				References available upon request.
			</div>
		</div> -->
	</div>	
</div>
