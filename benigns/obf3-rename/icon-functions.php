

<?php // obf
/** // obf
 * SVG icons related functions and filters // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Seventeen // obf
 * @since Twenty Seventeen 1.0 // obf
 */ // obf

/** // obf
 * Add SVG definitions to the footer. // obf
 */ // obf
function twentyseventeen_include_svg_icons() { // obf
	// Define SVG sprite file. // obf
	$v_bzaeb = get_parent_theme_file_path( '/assets/images/svg-icons.svg' ); // obf

	// If it exists, include it. // obf
	if ( file_exists( $v_bzaeb ) ) { // obf
		require_once $v_bzaeb; // obf
	} // obf
} // obf
add_action( 'wp_footer', 'twentyseventeen_include_svg_icons', 9999 ); // obf

/** // obf
 * Return SVG markup. // obf
 * // obf
 * @param array $v_qtups { // obf
 *     Parameters needed to display an SVG. // obf
 * // obf
 *     @type string $v_prrmb  Required SVG icon filename. // obf
 *     @type string $v_ufxcx Optional SVG title. // obf
 *     @type string $v_idgln  Optional SVG description. // obf
 * } // obf
 * @return string SVG markup. // obf
 */ // obf
function twentyseventeen_get_svg( $v_qtups = array() ) { // obf
	// Make sure $v_qtups are an array. // obf
	if ( empty( $v_qtups ) ) { // obf
		return __( 'Please define default parameters in the form of an array.', 'twentyseventeen' ); // obf
	} // obf

	// Define an icon. // obf
	if ( false === array_key_exists( 'icon', $v_qtups ) ) { // obf
		return __( 'Please define an SVG icon filename.', 'twentyseventeen' ); // obf
	} // obf

	// Set defaults. // obf
	$v_rvxwv = array( // obf
		'icon'     => '', // obf
		'title'    => '', // obf
		'desc'     => '', // obf
		'fallback' => false, // obf
	); // obf

	// Parse args. // obf
	$v_qtups = wp_parse_args( $v_qtups, $v_rvxwv ); // obf

	// Set aria hidden. // obf
	$v_rofgv = ' aria-hidden="true"'; // obf

	// Set ARIA. // obf
	$v_tnjpk = ''; // obf

	/* // obf
	 * Twenty Seventeen doesn't use the SVG title or description attributes; non-decorative icons are described with .screen-reader-text. // obf
	 * // obf
	 * However, child themes can use the title and description to add information to non-decorative SVG icons to improve accessibility. // obf
	 * // obf
	 * Example 1 with title: <?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right', 'title' => __( 'This is the title', 'textdomain' ) ) ); ?> // obf
	 * // obf
	 * Example 2 with title and description: <?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right', 'title' => __( 'This is the title', 'textdomain' ), 'desc' => __( 'This is the description', 'textdomain' ) ) ); ?> // obf
	 * // obf
	 * See https://www.paciellogroup.com/blog/2013/12/using-aria-enhance-svg-accessibility/. // obf
	 */ // obf
	if ( $v_qtups['title'] ) { // obf
		$v_rofgv     = ''; // obf
		$v_fskrh       = twentyseventeen_unique_id(); // obf
		$v_tnjpk = ' aria-labelledby="title-' . $v_fskrh . '"'; // obf

		if ( $v_qtups['desc'] ) { // obf
			$v_tnjpk = ' aria-labelledby="title-' . $v_fskrh . ' desc-' . $v_fskrh . '"'; // obf
		} // obf
	} // obf

	// Begin SVG markup. // obf
	$v_djjlv = '<svg class="icon icon-' . esc_attr( $v_qtups['icon'] ) . '"' . $v_rofgv . $v_tnjpk . ' role="img">'; // obf

	// Display the title. // obf
	if ( $v_qtups['title'] ) { // obf
		$v_djjlv .= '<title id="title-' . $v_fskrh . '">' . esc_html( $v_qtups['title'] ) . '</title>'; // obf

		// Display the desc only if the title is already set. // obf
		if ( $v_qtups['desc'] ) { // obf
			$v_djjlv .= '<desc id="desc-' . $v_fskrh . '">' . esc_html( $v_qtups['desc'] ) . '</desc>'; // obf
		} // obf
	} // obf

	/* // obf
	 * Display the icon. // obf
	 * // obf
	 * The whitespace around `<use>` is intentional - it is a work around to a keyboard navigation bug in Safari 10. // obf
	 * // obf
	 * See https://core.trac.wordpress.org/ticket/38387. // obf
	 */ // obf
	$v_djjlv .= ' <use href="#icon-' . esc_html( $v_qtups['icon'] ) . '" xlink:href="#icon-' . esc_html( $v_qtups['icon'] ) . '"></use> '; // obf

	// Add some markup to use as a fallback for browsers that do not support SVGs. // obf
	if ( $v_qtups['fallback'] ) { // obf
		$v_djjlv .= '<span class="svg-fallback icon-' . esc_attr( $v_qtups['icon'] ) . '"></span>'; // obf
	} // obf

	$v_djjlv .= '</svg>'; // obf

	return $v_djjlv; // obf
} // obf

/** // obf
 * Display SVG icons in social links menu. // obf
 * // obf
 * @param string   $v_jujtf The menu item's starting HTML output. // obf
 * @param WP_Post  $v_dwehz        Menu item data object. // obf
 * @param int      $v_kfhhh       Depth of the menu. Used for padding. // obf
 * @param stdClass $v_qtups        An object of wp_nav_menu() arguments. // obf
 * @return string The menu item output with social icon. // obf
 */ // obf
function twentyseventeen_nav_menu_social_icons( $v_jujtf, $v_dwehz, $v_kfhhh, $v_qtups ) { // obf
	// Get supported social icons. // obf
	$v_nxswt = twentyseventeen_social_links_icons(); // obf

	// Change SVG icon inside social links menu if there is supported URL. // obf
	if ( 'social' === $v_qtups->theme_location ) { // obf
		foreach ( $v_nxswt as $v_rfhij => $v_iiikk ) { // obf
			if ( false !== strpos( $v_jujtf, $v_rfhij ) ) { // obf
				$v_jujtf = str_replace( $v_qtups->link_after, '</span>' . twentyseventeen_get_svg( array( 'icon' => esc_attr( $v_iiikk ) ) ), $v_jujtf ); // obf
			} // obf
		} // obf
	} // obf

	return $v_jujtf; // obf
} // obf
add_filter( 'walker_nav_menu_start_el', 'twentyseventeen_nav_menu_social_icons', 10, 4 ); // obf

/** // obf
 * Add dropdown icon if menu item has children. // obf
 * // obf
 * @param string   $v_ufxcx The menu item's title. // obf
 * @param WP_Post  $v_dwehz  The current menu item. // obf
 * @param stdClass $v_qtups  An object of wp_nav_menu() arguments. // obf
 * @param int      $v_kfhhh Depth of menu item. Used for padding. // obf
 * @return string The menu item's title with dropdown icon. // obf
 */ // obf
function twentyseventeen_dropdown_icon_to_menu_link( $v_ufxcx, $v_dwehz, $v_qtups, $v_kfhhh ) { // obf
	if ( 'top' === $v_qtups->theme_location ) { // obf
		foreach ( $v_dwehz->classes as $v_iiikk ) { // obf
			if ( 'menu-item-has-children' === $v_iiikk || 'page_item_has_children' === $v_iiikk ) { // obf
				$v_ufxcx = $v_ufxcx . twentyseventeen_get_svg( array( 'icon' => 'angle-down' ) ); // obf
			} // obf
		} // obf
	} // obf

	return $v_ufxcx; // obf
} // obf
add_filter( 'nav_menu_item_title', 'twentyseventeen_dropdown_icon_to_menu_link', 10, 4 ); // obf

/** // obf
 * Returns an array of supported social links (URL and icon name). // obf
 * // obf
 * @return array Array of social links icons. // obf
 */ // obf
function twentyseventeen_social_links_icons() { // obf
	// Supported social links icons. // obf
	$v_zhnpn = array( // obf
		'behance.net'     => 'behance', // obf
		'codepen.io'      => 'codepen', // obf
		'deviantart.com'  => 'deviantart', // obf
		'digg.com'        => 'digg', // obf
		'docker.com'      => 'dockerhub', // obf
		'dribbble.com'    => 'dribbble', // obf
		'dropbox.com'     => 'dropbox', // obf
		'facebook.com'    => 'facebook', // obf
		'flickr.com'      => 'flickr', // obf
		'foursquare.com'  => 'foursquare', // obf
		'plus.google.com' => 'google-plus', // obf
		'github.com'      => 'github', // obf
		'instagram.com'   => 'instagram', // obf
		'linkedin.com'    => 'linkedin', // obf
		'mailto:'         => 'envelope-o', // obf
		'medium.com'      => 'medium', // obf
		'pinterest.com'   => 'pinterest-p', // obf
		'pscp.tv'         => 'periscope', // obf
		'getpocket.com'   => 'get-pocket', // obf
		'reddit.com'      => 'reddit-alien', // obf
		'skype.com'       => 'skype', // obf
		'skype:'          => 'skype', // obf
		'slideshare.net'  => 'slideshare', // obf
		'snapchat.com'    => 'snapchat-ghost', // obf
		'soundcloud.com'  => 'soundcloud', // obf
		'spotify.com'     => 'spotify', // obf
		'stumbleupon.com' => 'stumbleupon', // obf
		't.me'            => 'telegram', // obf
		'telegram.me'     => 'telegram', // obf
		'tumblr.com'      => 'tumblr', // obf
		'twitch.tv'       => 'twitch', // obf
		'twitter.com'     => 'twitter', // obf
		'vimeo.com'       => 'vimeo', // obf
		'vine.co'         => 'vine', // obf
		'vk.com'          => 'vk', // obf
		'wa.me'           => 'whatsapp', // obf
		'whatsapp.com'    => 'whatsapp', // obf
		'wordpress.org'   => 'wordpress', // obf
		'wordpress.com'   => 'wordpress', // obf
		'yelp.com'        => 'yelp', // obf
		'youtube.com'     => 'youtube', // obf
	); // obf

	/** // obf
	 * Filters Twenty Seventeen social links icons. // obf
	 * // obf
	 * @since Twenty Seventeen 1.0 // obf
	 * // obf
	 * @param array $v_zhnpn Array of social links icons. // obf
	 */ // obf
	return apply_filters( 'twentyseventeen_social_links_icons', $v_zhnpn ); // obf
} // obf