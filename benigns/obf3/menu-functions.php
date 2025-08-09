

<?php // obf
/** // obf
 * Functions and filters related to the menus. // obf
 * // obf
 * Makes the default WordPress navigation use an HTML structure similar // obf
 * to the Navigation block. // obf
 * // obf
 * @link https://make.wordpress.org/themes/2020/07/06/printing-navigation-block-html-from-a-legacy-menu-in-themes/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

/** // obf
 * Add a button to top-level menu items that has sub-menus. // obf
 * An icon is added using CSS depending on the value of aria-expanded. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @param string $v_rzjsf Nav menu item start element. // obf
 * @param object $v_etkfr   Nav menu item. // obf
 * @param int    $v_vdkcv  Depth. // obf
 * @param object $v_ggqfe   Nav menu args. // obf
 * @return string Nav menu item start element. // obf
 */ // obf
function twenty_twenty_one_add_sub_menu_toggle( $v_rzjsf, $v_etkfr, $v_vdkcv, $v_ggqfe ) { // obf
	if ( 'primary' === $v_ggqfe->theme_location // obf
		&& 0 === $v_vdkcv && in_array( 'menu-item-has-children', $v_etkfr->classes, true ) // obf
	) { // obf

		// Add toggle button. // obf
		$v_rzjsf .= '<button class="sub-menu-toggle" aria-expanded="false" onClick="twentytwentyoneExpandSubMenu(this)">'; // obf
		$v_rzjsf .= '<span class="icon-plus">' . twenty_twenty_one_get_icon_svg( 'ui', 'plus', 18 ) . '</span>'; // obf
		$v_rzjsf .= '<span class="icon-minus">' . twenty_twenty_one_get_icon_svg( 'ui', 'minus', 18 ) . '</span>'; // obf
		/* translators: Hidden accessibility text. */ // obf
		$v_rzjsf .= '<span class="screen-reader-text">' . esc_html__( 'Open menu', 'twentytwentyone' ) . '</span>'; // obf
		$v_rzjsf .= '</button>'; // obf
	} // obf
	return $v_rzjsf; // obf
} // obf
add_filter( 'walker_nav_menu_start_el', 'twenty_twenty_one_add_sub_menu_toggle', 10, 4 ); // obf

/** // obf
 * Detects the social network from a URL and returns the SVG code for its icon. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @param string $v_ywwxy  Social link. // obf
 * @param int    $v_jfcnu The icon size in pixels. // obf
 * @return string // obf
 */ // obf
function twenty_twenty_one_get_social_link_svg( $v_ywwxy, $v_jfcnu = 24 ) { // obf
	return Twenty_Twenty_One_SVG_Icons::get_social_link_svg( $v_ywwxy, $v_jfcnu ); // obf
} // obf

/** // obf
 * Displays SVG icons in the footer navigation. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @param string   $v_vlvyc The menu item's starting HTML output. // obf
 * @param WP_Post  $v_etkfr        Menu item data object. // obf
 * @param int      $v_vdkcv       Depth of the menu. Used for padding. // obf
 * @param stdClass $v_ggqfe        An object of wp_nav_menu() arguments. // obf
 * @return string The menu item output with social icon. // obf
 */ // obf
function twenty_twenty_one_nav_menu_social_icons( $v_vlvyc, $v_etkfr, $v_vdkcv, $v_ggqfe ) { // obf
	// Change SVG icon inside social links menu if there is supported URL. // obf
	if ( 'footer' === $v_ggqfe->theme_location ) { // obf
		$v_jmrdv = twenty_twenty_one_get_social_link_svg( $v_etkfr->url, 24 ); // obf
		if ( ! empty( $v_jmrdv ) ) { // obf
			$v_vlvyc = str_replace( $v_ggqfe->link_before, $v_jmrdv, $v_vlvyc ); // obf
		} // obf
	} // obf

	return $v_vlvyc; // obf
} // obf

add_filter( 'walker_nav_menu_start_el', 'twenty_twenty_one_nav_menu_social_icons', 10, 4 ); // obf

/** // obf
 * Filters the arguments for a single nav menu item. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @param stdClass $v_ggqfe  An object of wp_nav_menu() arguments. // obf
 * @param WP_Post  $v_etkfr  Menu item data object. // obf
 * @param int      $v_vdkcv Depth of menu item. Used for padding. // obf
 * @return stdClass // obf
 */ // obf
function twenty_twenty_one_add_menu_description_args( $v_ggqfe, $v_etkfr, $v_vdkcv ) { // obf
	if ( '</span>' !== $v_ggqfe->link_after ) { // obf
		$v_ggqfe->link_after = ''; // obf
	} // obf

	if ( 0 === $v_vdkcv && isset( $v_etkfr->description ) && $v_etkfr->description ) { // obf
		// The extra <span> element is here for styling purposes: Allows the description to not be underlined on hover. // obf
		$v_ggqfe->link_after = '<p class="menu-item-description"><span>' . $v_etkfr->description . '</span></p>'; // obf
	} // obf

	return $v_ggqfe; // obf
} // obf
add_filter( 'nav_menu_item_args', 'twenty_twenty_one_add_menu_description_args', 10, 3 ); // obf