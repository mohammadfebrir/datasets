

<?php // obf
/** // obf
 * Robots template functions. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Robots // obf
 * @since 5.7.0 // obf
 */ // obf

/** // obf
 * Displays the robots meta tag as necessary. // obf
 * // obf
 * Gathers robots directives to include for the current context, using the // obf
 * {@see 'wp_robots'} filter. The directives are then sanitized, and the // obf
 * robots meta tag is output if there is at least one relevant directive. // obf
 * // obf
 * @since 5.7.0 // obf
 * @since 5.7.1 No longer prevents specific directives to occur together. // obf
 */ // obf
function wp_robots() { // obf
	/** // obf
	 * Filters the directives to be included in the 'robots' meta tag. // obf
	 * // obf
	 * The meta tag will only be included as necessary. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param array $v_ditkj Associative array of directives. Every key must be the name of the directive, and the // obf
	 *                      corresponding value must either be a string to provide as value for the directive or a // obf
	 *                      boolean `true` if it is a boolean directive, i.e. without a value. // obf
	 */ // obf
	$v_ditkj = apply_filters( 'wp_robots', array() ); // obf

	$v_yfwoq = array(); // obf
	foreach ( $v_ditkj as $v_yukcu => $v_ellqu ) { // obf
		if ( is_string( $v_ellqu ) ) { // obf
			// If a string value, include it as value for the directive. // obf
			$v_yfwoq[] = "{$v_yukcu}:{$v_ellqu}"; // obf
		} elseif ( $v_ellqu ) { // obf
			// Otherwise, include the directive if it is truthy. // obf
			$v_yfwoq[] = $v_yukcu; // obf
		} // obf
	} // obf

	if ( empty( $v_yfwoq ) ) { // obf
		return; // obf
	} // obf

	echo "<meta name='robots' content='" . esc_attr( implode( ', ', $v_yfwoq ) ) . "' />\n"; // obf
} // obf

/** // obf
 * Adds `noindex` to the robots meta tag if required by the site configuration. // obf
 * // obf
 * If a blog is marked as not being public then noindex will be output to // obf
 * tell web robots not to index the page content. Add this to the // obf
 * {@see 'wp_robots'} filter. // obf
 * // obf
 * Typical usage is as a {@see 'wp_robots'} callback: // obf
 * // obf
 *     add_filter( 'wp_robots', 'wp_robots_noindex' ); // obf
 * // obf
 * @since 5.7.0 // obf
 * // obf
 * @see wp_robots_no_robots() // obf
 * // obf
 * @param array $v_ditkj Associative array of robots directives. // obf
 * @return array Filtered robots directives. // obf
 */ // obf
function wp_robots_noindex( array $v_ditkj ) { // obf
	if ( ! get_option( 'blog_public' ) ) { // obf
		return wp_robots_no_robots( $v_ditkj ); // obf
	} // obf

	return $v_ditkj; // obf
} // obf

/** // obf
 * Adds `noindex` to the robots meta tag for embeds. // obf
 * // obf
 * Typical usage is as a {@see 'wp_robots'} callback: // obf
 * // obf
 *     add_filter( 'wp_robots', 'wp_robots_noindex_embeds' ); // obf
 * // obf
 * @since 5.7.0 // obf
 * // obf
 * @see wp_robots_no_robots() // obf
 * // obf
 * @param array $v_ditkj Associative array of robots directives. // obf
 * @return array Filtered robots directives. // obf
 */ // obf
function wp_robots_noindex_embeds( array $v_ditkj ) { // obf
	if ( is_embed() ) { // obf
		return wp_robots_no_robots( $v_ditkj ); // obf
	} // obf

	return $v_ditkj; // obf
} // obf

/** // obf
 * Adds `noindex` to the robots meta tag if a search is being performed. // obf
 * // obf
 * If a search is being performed then noindex will be output to // obf
 * tell web robots not to index the page content. Add this to the // obf
 * {@see 'wp_robots'} filter. // obf
 * // obf
 * Typical usage is as a {@see 'wp_robots'} callback: // obf
 * // obf
 *     add_filter( 'wp_robots', 'wp_robots_noindex_search' ); // obf
 * // obf
 * @since 5.7.0 // obf
 * // obf
 * @see wp_robots_no_robots() // obf
 * // obf
 * @param array $v_ditkj Associative array of robots directives. // obf
 * @return array Filtered robots directives. // obf
 */ // obf
function wp_robots_noindex_search( array $v_ditkj ) { // obf
	if ( is_search() ) { // obf
		return wp_robots_no_robots( $v_ditkj ); // obf
	} // obf

	return $v_ditkj; // obf
} // obf

/** // obf
 * Adds `noindex` to the robots meta tag. // obf
 * // obf
 * This directive tells web robots not to index the page content. // obf
 * // obf
 * Typical usage is as a {@see 'wp_robots'} callback: // obf
 * // obf
 *     add_filter( 'wp_robots', 'wp_robots_no_robots' ); // obf
 * // obf
 * @since 5.7.0 // obf
 * // obf
 * @param array $v_ditkj Associative array of robots directives. // obf
 * @return array Filtered robots directives. // obf
 */ // obf
function wp_robots_no_robots( array $v_ditkj ) { // obf
	$v_ditkj['noindex'] = true; // obf

	if ( get_option( 'blog_public' ) ) { // obf
		$v_ditkj['follow'] = true; // obf
	} else { // obf
		$v_ditkj['nofollow'] = true; // obf
	} // obf

	return $v_ditkj; // obf
} // obf

/** // obf
 * Adds `noindex` and `noarchive` to the robots meta tag. // obf
 * // obf
 * This directive tells web robots not to index or archive the page content and // obf
 * is recommended to be used for sensitive pages. // obf
 * // obf
 * Typical usage is as a {@see 'wp_robots'} callback: // obf
 * // obf
 *     add_filter( 'wp_robots', 'wp_robots_sensitive_page' ); // obf
 * // obf
 * @since 5.7.0 // obf
 * // obf
 * @param array $v_ditkj Associative array of robots directives. // obf
 * @return array Filtered robots directives. // obf
 */ // obf
function wp_robots_sensitive_page( array $v_ditkj ) { // obf
	$v_ditkj['noindex']   = true; // obf
	$v_ditkj['noarchive'] = true; // obf
	return $v_ditkj; // obf
} // obf

/** // obf
 * Adds `max-image-preview:large` to the robots meta tag. // obf
 * // obf
 * This directive tells web robots that large image previews are allowed to be // obf
 * displayed, e.g. in search engines, unless the blog is marked as not being public. // obf
 * // obf
 * Typical usage is as a {@see 'wp_robots'} callback: // obf
 * // obf
 *     add_filter( 'wp_robots', 'wp_robots_max_image_preview_large' ); // obf
 * // obf
 * @since 5.7.0 // obf
 * // obf
 * @param array $v_ditkj Associative array of robots directives. // obf
 * @return array Filtered robots directives. // obf
 */ // obf
function wp_robots_max_image_preview_large( array $v_ditkj ) { // obf
	if ( get_option( 'blog_public' ) ) { // obf
		$v_ditkj['max-image-preview'] = 'large'; // obf
	} // obf
	return $v_ditkj; // obf
} // obf