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
		<div class="ai-buttons__wrapper">
							<div class="ai-icons">
							<a href="" class="" id="open_ai_button">
								<svg fill="#000000" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg">
									<title>OpenAI icon</title>
									<path
										d="M22.2819 9.8211a5.9847 5.9847 0 0 0-.5157-4.9108 6.0462 6.0462 0 0 0-6.5098-2.9A6.0651 6.0651 0 0 0 4.9807 4.1818a5.9847 5.9847 0 0 0-3.9977 2.9 6.0462 6.0462 0 0 0 .7427 7.0966 5.98 5.98 0 0 0 .511 4.9107 6.051 6.051 0 0 0 6.5146 2.9001A5.9847 5.9847 0 0 0 13.2599 24a6.0557 6.0557 0 0 0 5.7718-4.2058 5.9894 5.9894 0 0 0 3.9977-2.9001 6.0557 6.0557 0 0 0-.7475-7.0729zm-9.022 12.6081a4.4755 4.4755 0 0 1-2.8764-1.0408l.1419-.0804 4.7783-2.7582a.7948.7948 0 0 0 .3927-.6813v-6.7369l2.02 1.1686a.071.071 0 0 1 .038.052v5.5826a4.504 4.504 0 0 1-4.4945 4.4944zm-9.6607-4.1254a4.4708 4.4708 0 0 1-.5346-3.0137l.142.0852 4.783 2.7582a.7712.7712 0 0 0 .7806 0l5.8428-3.3685v2.3324a.0804.0804 0 0 1-.0332.0615L9.74 19.9502a4.4992 4.4992 0 0 1-6.1408-1.6464zM2.3408 7.8956a4.485 4.485 0 0 1 2.3655-1.9728V11.6a.7664.7664 0 0 0 .3879.6765l5.8144 3.3543-2.0201 1.1685a.0757.0757 0 0 1-.071 0l-4.8303-2.7865A4.504 4.504 0 0 1 2.3408 7.872zm16.5963 3.8558L13.1038 8.364 15.1192 7.2a.0757.0757 0 0 1 .071 0l4.8303 2.7913a4.4944 4.4944 0 0 1-.6765 8.1042v-5.6772a.79.79 0 0 0-.407-.667zm2.0107-3.0231l-.142-.0852-4.7735-2.7818a.7759.7759 0 0 0-.7854 0L9.409 9.2297V6.8974a.0662.0662 0 0 1 .0284-.0615l4.8303-2.7866a4.4992 4.4992 0 0 1 6.6802 4.66zM8.3065 12.863l-2.02-1.1638a.0804.0804 0 0 1-.038-.0567V6.0742a4.4992 4.4992 0 0 1 7.3757-3.4537l-.142.0805L8.704 5.459a.7948.7948 0 0 0-.3927.6813zm1.0976-2.3654l2.602-1.4998 2.6069 1.4998v2.9994l-2.5974 1.4997-2.6067-1.4997Z" />
								</svg>
							</a>
							<div class="ai-buttons closed">
								<div class="ai-button">
									<a href="" class="ai-button-link" id="pirate_button" title="Talk like a pirate.">
										<i class="fa-solid fa-skull-crossbones"></i>
									</a>
								</div>
								<div class="ai-button">
									<a href="" class="ai-button-link" id="dj_button" title="Talk like a radio DJ.">
										<i class="fa-solid fa-microphone-lines"></i>
									</a>
								</div>
								<div class="ai-button">

								</div>
							</div>
							</div>
							<div class="ai-button-heading">
								<h4><i class="fa-solid fa-turn-up"></i> Change the content!</h4>
							</div>
						</div>
			<div class="hero__title_image">
				<div class="hero__title">
					<h1>
						<?php echo wp_kses_post($hero_heading) ?>
					</h1>
						<div id="chatbot-container">Hi, I'm Derek. your go-to web consultant and developer for all your
							eCommerce and lead-generation needs. I build and maintain websites tailored to your
							business, while streamlining operations to help you grow your brand.</div>
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
		</div>
	</div>
</div>

<script src="<?php echo get_template_directory_uri() . '/dist/js/ai.min.js'; ?>"></script>
					