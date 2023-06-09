<?php

$includes = array_merge(
	glob(get_theme_root() . '/' . get_template() . '/inc/*.php'),
	glob(get_theme_root() . '/' . get_template() . '/types/*.php'),
	glob(get_theme_root() . '/' . get_template() . '/taxonomies/*.php'),
	glob(get_theme_root() . '/' . get_template() . '/components/acf-blocks/**/functions.php')
);

if ($includes) {
	foreach ($includes as $include) {
		include_once $include;
	}
}

register_nav_menus(
	array(
		'header' => 'Header Navigation'
	)
);

function gl_block_render_template_assets($name, $directory = '')
{
	if (!empty($directory)) {
		$relative_path = "/components/acf-blocks/{$directory}/{$name}.php";
	} else {
		$relative_path = "/components/acf-blocks/{$name}.php";
	}

	$css_relative_path = "/dist/styles/{$name}.css";
	$js_relative_path = "/dist/js/{$name}.min.js";

	if (file_exists(get_theme_file_path($relative_path))) {
		wp_enqueue_style($name, get_stylesheet_directory_uri() . $css_relative_path, array(), null);
		wp_enqueue_script($name, get_stylesheet_directory_uri() . $js_relative_path, array(), null);
		return get_theme_file_path($relative_path);
	}

	return '';
}

function register_bs_navwalker()
{
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_bs_navwalker');

function glv_register_custom_block_styles()
{
	$default_blocks = array(
		'core/paragraph',
		'core/image',
		'core/heading',
		'core/list',
		// Add more default block names if needed
	);

	foreach ($default_blocks as $block_name) {
		register_block_style(
			$block_name,
			array(
				'name' => 'container',
				'label' => 'Container',
			)
		);
	}
}
add_action('init', 'glv_register_custom_block_styles');

function glv_custom_title($title, $sep, $seplocation)
{
	global $page, $paged;

	// Site name
	$site_name = get_bloginfo('name');

	// Site description
	$site_description = get_bloginfo('description');

	// Add the site name
	$title = $site_name . ' ' . $title;

	// Add the site description for the home/front page
	if (is_home() || is_front_page()) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary
	if (($paged >= 2 || $page >= 2) && !is_404()) {
		$title .= " $sep " . sprintf(__('Page %s', 'mytheme'), max($paged, $page));
	}

	return $title;
}
add_filter('wp_title', 'glv_custom_title', 10, 3);
