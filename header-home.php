<?php
/**
 * Header
 *
 * Header
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Square One
 * @author     Your Name <yourname@example.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://yoursite.com
 * @since      1.0.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="https://use.typekit.net/jha4bbm.css">
	<script>
		window.FontAwesomeConfig = {
			searchPseudoElements: true
		}
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="site-header">
			<div class="site-header__inner">
				<div class="site-header__navigation">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header',
							'depth'          => 3,
							'container'      => false,
							'menu_class'     => 'nav navbar-nav main-nav',
							'walker'         => new Header_Navwalker(), //phpcs:ignore
						)
					);
					?>
				</div>
			</div>
	</div>
				