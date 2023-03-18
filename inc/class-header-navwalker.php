<?php //phpcs:ignore
/**
 * Custom nav walker.
 * 
 * @package ptc-redesign
 */

/**
 * Custom Header Menu nav walker.
 */
class Header_Navwalker extends Walker_Nav_Menu {

	/**
	 * Starts the list before the elements are added.
	 *
	 * @since WP 3.0.0
	 *
	 * @see Walker_Nav_Menu::start_lvl()
	 *
	 * @param string           $output Used to append additional content (passed by reference).
	 * @param int              $depth  Depth of menu item. Used for padding.
	 * @param WP_Nav_Menu_Args $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );
	
		// Default class.
		$classes = array( 'sub-menu', 'sub-menu--' . $depth, 'main-nav-sub-menu' );
		
		// if ( $this->has_children ) {
		// 	$classes[] = 'has-kids';
		// } else {
		// 	$classes[] = 'no-kids';
		// }
	
		/**
		 * Filters the CSS class(es) applied to a menu list element.
		 *
		 * @since 4.8.0
		 *
		 * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
		 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
	
		$output .= "{$n}{$indent}<ul$class_names>{$n}";
		$output .= "\n<li class='menu-item menu-item-type-back sub-menu-item'><button class='close-panel main-nav-close-panel' type='button' aria-label='Return to previous menu level'>Back</button></li>\n";
	}

	/**
	 * Starts the element output.
	 *
	 * @since WP 3.0.0
	 * @since WP 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
	 *
	 * @see Walker_Nav_Menu::start_el()
	 *
	 * @param string           $output Used to append additional content (passed by reference).
	 * @param WP_Nav_Menu_Item $item   Menu item data object.
	 * @param int              $depth  Depth of menu item. Used for padding.
	 * @param WP_Nav_Menu_Args $args   An object of wp_nav_menu() arguments.
	 * @param int              $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$item->classes[] = "menu-item--$depth";
		if ( 1 === $depth ) {
			$item->classes[] = 'sub-menu-item';
		}

		$output .= "<li class='" . implode( ' ', $item->classes ) . "'>";

		if ( $args->walker->has_children ) {
			// $output .= "<button type=\"button\" class=\"menu-item__link menu-item__toggle menu-item__toggle--$depth\" aria-label=\"Open the $item->title sub-menu\">";
			$output .= '<a href="' . $item->url . '" class="menu-item__link menu-item__link--has-children menu-item__link--' . $depth . '">';
		} else {
			$output .= '<a href="' . $item->url . '" class="menu-item__link menu-item__link--' . $depth . '">';
		}

		$output .= $item->title;
		$output .= '</a>';

	}

	/**
	 * Filter to ensure the items_Wrap argument contains microdata.
	 *
	 * @since 4.2.0
	 *
	 * @param  array $args The nav instance arguments.
	 * @return array $args The altered nav instance arguments.
	 */
	public function add_schema_to_navbar_ul( $args ) {
		if ( isset( $args['items_wrap'] ) ) {
			$wrap = $args['items_wrap'];
			if ( strpos( $wrap, 'SiteNavigationElement' ) === false ) {
				$args['items_wrap'] = preg_replace( '/(>).*>?\%3\$s/', ' itemscope itemtype="http://www.schema.org/SiteNavigationElement"$0', $wrap );
			}
		}
		return $args;
	}
}
