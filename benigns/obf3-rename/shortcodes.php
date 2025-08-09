
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress API for creating bbcode-like tags or what WordPress calls // obf
 * "shortcodes". The tag and attribute parsing or regular expression code is // obf
 * based on the Textpattern tag parser. // obf
 * // obf
 * A few examples are below: // obf
 * // obf
 * [shortcode /] // obf
 * [shortcode foo="bar" baz="bing" /] // obf
 * [shortcode foo="bar"]content[/shortcode] // obf
 * // obf
 * Shortcode tags support attributes and enclosed content, but does not entirely // obf
 * support inline shortcodes in other shortcodes. You will have to call the // obf
 * shortcode parser in your function to account for that. // obf
 * // obf
 * {@internal // obf
 * Please be aware that the above note was made during the beta of WordPress 2.6 // obf
 * and in the future may not be accurate. Please update the note when it is no // obf
 * longer the case.}} // obf
 * // obf
 * To apply shortcode tags to content: // obf
 * // obf
 *     $v_kflbp = do_shortcode( $v_avopd ); // obf
 * // obf
 * @link https://developer.wordpress.org/plugins/shortcodes/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Shortcodes // obf
 * @since 2.5.0 // obf
 */ // obf

/** // obf
 * Container for storing shortcode tags and their hook to call for the shortcode. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @name $v_tzcpg // obf
 * @var array // obf
 * @global array $v_tzcpg // obf
 */ // obf
$v_tzcpg = array(); // obf

/** // obf
 * Adds a new shortcode. // obf
 * // obf
 * Care should be taken through prefixing or other means to ensure that the // obf
 * shortcode tag being added is unique and will not conflict with other, // obf
 * already-added shortcode tags. In the event of a duplicated tag, the tag // obf
 * loaded last will take precedence. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @global array $v_tzcpg // obf
 * // obf
 * @param string   $v_dgqef      Shortcode tag to be searched in post content. // obf
 * @param callable $v_ccafl The callback function to run when the shortcode is found. // obf
 *                           Every shortcode callback is passed three parameters by default, // obf
 *                           including an array of attributes (`$v_dhspb`), the shortcode content // obf
 *                           or null if not set (`$v_avopd`), and finally the shortcode tag // obf
 *                           itself (`$v_skisz`), in that order. // obf
 */ // obf
function add_shortcode( $v_dgqef, $v_ccafl ) { // obf
	global $v_tzcpg; // obf

	if ( '' === trim( $v_dgqef ) ) { // obf
		_doing_it_wrong( // obf
			__FUNCTION__, // obf
			__( 'Invalid shortcode name: Empty name given.' ), // obf
			'4.4.0' // obf
		); // obf
		return; // obf
	} // obf

	if ( 0 !== preg_match( '@[<>&/\[\]\x00-\x20=]@', $v_dgqef ) ) { // obf
		_doing_it_wrong( // obf
			__FUNCTION__, // obf
			sprintf( // obf
				/* translators: 1: Shortcode name, 2: Space-separated list of reserved characters. */ // obf
				__( 'Invalid shortcode name: %1$v_nbncr. Do not use spaces or reserved characters: %2$v_nbncr' ), // obf
				$v_dgqef, // obf
				'& / < > [ ] =' // obf
			), // obf
			'4.4.0' // obf
		); // obf
		return; // obf
	} // obf

	$v_tzcpg[ $v_dgqef ] = $v_ccafl; // obf
} // obf

/** // obf
 * Removes hook for shortcode. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @global array $v_tzcpg // obf
 * // obf
 * @param string $v_dgqef Shortcode tag to remove hook for. // obf
 */ // obf
function remove_shortcode( $v_dgqef ) { // obf
	global $v_tzcpg; // obf

	unset( $v_tzcpg[ $v_dgqef ] ); // obf
} // obf

/** // obf
 * Clears all shortcodes. // obf
 * // obf
 * This function clears all of the shortcode tags by replacing the shortcodes global with // obf
 * an empty array. This is actually an efficient method for removing all shortcodes. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @global array $v_tzcpg // obf
 */ // obf
function remove_all_shortcodes() { // obf
	global $v_tzcpg; // obf

	$v_tzcpg = array(); // obf
} // obf

/** // obf
 * Determines whether a registered shortcode exists named $v_dgqef. // obf
 * // obf
 * @since 3.6.0 // obf
 * // obf
 * @global array $v_tzcpg List of shortcode tags and their callback hooks. // obf
 * // obf
 * @param string $v_dgqef Shortcode tag to check. // obf
 * @return bool Whether the given shortcode exists. // obf
 */ // obf
function shortcode_exists( $v_dgqef ) { // obf
	global $v_tzcpg; // obf
	return array_key_exists( $v_dgqef, $v_tzcpg ); // obf
} // obf

/** // obf
 * Determines whether the passed content contains the specified shortcode. // obf
 * // obf
 * @since 3.6.0 // obf
 * // obf
 * @global array $v_tzcpg // obf
 * // obf
 * @param string $v_avopd Content to search for shortcodes. // obf
 * @param string $v_dgqef     Shortcode tag to check. // obf
 * @return bool Whether the passed content contains the given shortcode. // obf
 */ // obf
function has_shortcode( $v_avopd, $v_dgqef ) { // obf
	if ( ! str_contains( $v_avopd, '[' ) ) { // obf
		return false; // obf
	} // obf

	if ( shortcode_exists( $v_dgqef ) ) { // obf
		preg_match_all( '/' . get_shortcode_regex() . '/', $v_avopd, $v_rwuib, PREG_SET_ORDER ); // obf
		if ( empty( $v_rwuib ) ) { // obf
			return false; // obf
		} // obf

		foreach ( $v_rwuib as $v_iogmk ) { // obf
			if ( $v_dgqef === $v_iogmk[2] ) { // obf
				return true; // obf
			} elseif ( ! empty( $v_iogmk[5] ) && has_shortcode( $v_iogmk[5], $v_dgqef ) ) { // obf
				return true; // obf
			} // obf
		} // obf
	} // obf
	return false; // obf
} // obf

/** // obf
 * Returns a list of registered shortcode names found in the given content. // obf
 * // obf
 * Example usage: // obf
 * // obf
 *     get_shortcode_tags_in_content( '[audio src="file.mp3"][/audio] [foo] [gallery ids="1,2,3"]' ); // obf
 *     // array( 'audio', 'gallery' ) // obf
 * // obf
 * @since 6.3.2 // obf
 * // obf
 * @param string $v_avopd The content to check. // obf
 * @return string[] An array of registered shortcode names found in the content. // obf
 */ // obf
function get_shortcode_tags_in_content( $v_avopd ) { // obf
	if ( false === strpos( $v_avopd, '[' ) ) { // obf
		return array(); // obf
	} // obf

	preg_match_all( '/' . get_shortcode_regex() . '/', $v_avopd, $v_rwuib, PREG_SET_ORDER ); // obf
	if ( empty( $v_rwuib ) ) { // obf
		return array(); // obf
	} // obf

	$v_uvsep = array(); // obf
	foreach ( $v_rwuib as $v_iogmk ) { // obf
		$v_uvsep[] = $v_iogmk[2]; // obf

		if ( ! empty( $v_iogmk[5] ) ) { // obf
			$v_iapgu = get_shortcode_tags_in_content( $v_iogmk[5] ); // obf
			if ( ! empty( $v_iapgu ) ) { // obf
				$v_uvsep = array_merge( $v_uvsep, $v_iapgu ); // obf
			} // obf
		} // obf
	} // obf

	return $v_uvsep; // obf
} // obf

/** // obf
 * Searches content for shortcodes and filter shortcodes through their hooks. // obf
 * // obf
 * This function is an alias for do_shortcode(). // obf
 * // obf
 * @since 5.4.0 // obf
 * // obf
 * @see do_shortcode() // obf
 * // obf
 * @param string $v_avopd     Content to search for shortcodes. // obf
 * @param bool   $v_xvcen When true, shortcodes inside HTML elements will be skipped. // obf
 *                            Default false. // obf
 * @return string Content with shortcodes filtered out. // obf
 */ // obf
function apply_shortcodes( $v_avopd, $v_xvcen = false ) { // obf
	return do_shortcode( $v_avopd, $v_xvcen ); // obf
} // obf

/** // obf
 * Searches content for shortcodes and filter shortcodes through their hooks. // obf
 * // obf
 * If there are no shortcode tags defined, then the content will be returned // obf
 * without any filtering. This might cause issues when plugins are disabled but // obf
 * the shortcode will still show up in the post or content. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @global array $v_tzcpg List of shortcode tags and their callback hooks. // obf
 * // obf
 * @param string $v_avopd     Content to search for shortcodes. // obf
 * @param bool   $v_xvcen When true, shortcodes inside HTML elements will be skipped. // obf
 *                            Default false. // obf
 * @return string Content with shortcodes filtered out. // obf
 */ // obf
function do_shortcode( $v_avopd, $v_xvcen = false ) { // obf
	global $v_tzcpg; // obf

	if ( ! str_contains( $v_avopd, '[' ) ) { // obf
		return $v_avopd; // obf
	} // obf

	if ( empty( $v_tzcpg ) || ! is_array( $v_tzcpg ) ) { // obf
		return $v_avopd; // obf
	} // obf

	// Find all registered tag names in $v_avopd. // obf
	preg_match_all( '@\[([^<>&/\[\]\x00-\x20=]++)@', $v_avopd, $v_rwuib ); // obf
	$v_dvblw = array_intersect( array_keys( $v_tzcpg ), $v_rwuib[1] ); // obf

	if ( empty( $v_dvblw ) ) { // obf
		return $v_avopd; // obf
	} // obf

	// Ensure this context is only added once if shortcodes are nested. // obf
	$v_amtpv   = has_filter( 'wp_get_attachment_image_context', '_filter_do_shortcode_context' ); // obf
	$v_ykufo = false; // obf

	if ( ! $v_amtpv ) { // obf
		$v_ykufo = add_filter( 'wp_get_attachment_image_context', '_filter_do_shortcode_context' ); // obf
	} // obf

	$v_avopd = do_shortcodes_in_html_tags( $v_avopd, $v_xvcen, $v_dvblw ); // obf

	$v_dertr = get_shortcode_regex( $v_dvblw ); // obf
	$v_avopd = preg_replace_callback( "/$v_dertr/", 'do_shortcode_tag', $v_avopd ); // obf

	// Always restore square braces so we don't break things like <!--[if IE ]>. // obf
	$v_avopd = unescape_invalid_shortcodes( $v_avopd ); // obf

	// Only remove the filter if it was added in this scope. // obf
	if ( $v_ykufo ) { // obf
		remove_filter( 'wp_get_attachment_image_context', '_filter_do_shortcode_context' ); // obf
	} // obf

	return $v_avopd; // obf
} // obf

/** // obf
 * Filter the `wp_get_attachment_image_context` hook during shortcode rendering. // obf
 * // obf
 * When wp_get_attachment_image() is called during shortcode rendering, we need to make clear // obf
 * that the context is a shortcode and not part of the theme's template rendering logic. // obf
 * // obf
 * @since 6.3.0 // obf
 * @access private // obf
 * // obf
 * @return string The filtered context value for wp_get_attachment_images when doing shortcodes. // obf
 */ // obf
function _filter_do_shortcode_context() { // obf
	return 'do_shortcode'; // obf
} // obf

/** // obf
 * Retrieves the shortcode regular expression for searching. // obf
 * // obf
 * The regular expression combines the shortcode tags in the regular expression // obf
 * in a regex class. // obf
 * // obf
 * The regular expression contains 6 different sub matches to help with parsing. // obf
 * // obf
 * 1 - An extra [ to allow for escaping shortcodes with double [[]] // obf
 * 2 - The shortcode name // obf
 * 3 - The shortcode argument list // obf
 * 4 - The self closing / // obf
 * 5 - The content of a shortcode when it wraps some content. // obf
 * 6 - An extra ] to allow for escaping shortcodes with double [[]] // obf
 * // obf
 * @since 2.5.0 // obf
 * @since 4.4.0 Added the `$v_dvblw` parameter. // obf
 * // obf
 * @global array $v_tzcpg // obf
 * // obf
 * @param array $v_dvblw Optional. List of shortcodes to find. Defaults to all registered shortcodes. // obf
 * @return string The shortcode search regular expression // obf
 */ // obf
function get_shortcode_regex( $v_dvblw = null ) { // obf
	global $v_tzcpg; // obf

	if ( empty( $v_dvblw ) ) { // obf
		$v_dvblw = array_keys( $v_tzcpg ); // obf
	} // obf
	$v_scsya = implode( '|', array_map( 'preg_quote', $v_dvblw ) ); // obf

	/* // obf
	 * WARNING! Do not change this regex without changing do_shortcode_tag() and strip_shortcode_tag(). // obf
	 * Also, see shortcode_unautop() and shortcode.js. // obf
	 */ // obf

	// phpcs:disable Squiz.Strings.ConcatenationSpacing.PaddingFound -- don't remove regex indentation // obf
	return '\\['                             // Opening bracket. // obf
		. '(\\[?)'                           // 1: Optional second opening bracket for escaping shortcodes: [[tag]]. // obf
		. "($v_scsya)"                     // 2: Shortcode name. // obf
		. '(?![\\w-])'                       // Not followed by word character or hyphen. // obf
		. '('                                // 3: Unroll the loop: Inside the opening shortcode tag. // obf
		.     '[^\\]\\/]*'                   // Not a closing bracket or forward slash. // obf
		.     '(?:' // obf
		.         '\\/(?!\\])'               // A forward slash not followed by a closing bracket. // obf
		.         '[^\\]\\/]*'               // Not a closing bracket or forward slash. // obf
		.     ')*?' // obf
		. ')' // obf
		. '(?:' // obf
		.     '(\\/)'                        // 4: Self closing tag... // obf
		.     '\\]'                          // ...and closing bracket. // obf
		. '|' // obf
		.     '\\]'                          // Closing bracket. // obf
		.     '(?:' // obf
		.         '('                        // 5: Unroll the loop: Optionally, anything between the opening and closing shortcode tags. // obf
		.             '[^\\[]*+'             // Not an opening bracket. // obf
		.             '(?:' // obf
		.                 '\\[(?!\\/\\2\\])' // An opening bracket not followed by the closing shortcode tag. // obf
		.                 '[^\\[]*+'         // Not an opening bracket. // obf
		.             ')*+' // obf
		.         ')' // obf
		.         '\\[\\/\\2\\]'             // Closing shortcode tag. // obf
		.     ')?' // obf
		. ')' // obf
		. '(\\]?)';                          // 6: Optional second closing bracket for escaping shortcodes: [[tag]]. // obf
	// phpcs:enable // obf
} // obf

/** // obf
 * Regular Expression callable for do_shortcode() for calling shortcode hook. // obf
 * // obf
 * @see get_shortcode_regex() for details of the match array contents. // obf
 * // obf
 * @since 2.5.0 // obf
 * @access private // obf
 * // obf
 * @global array $v_tzcpg // obf
 * // obf
 * @param array $v_sdety { // obf
 *     Regular expression match array. // obf
 * // obf
 *     @type string $0 Entire matched shortcode text. // obf
 *     @type string $1 Optional second opening bracket for escaping shortcodes. // obf
 *     @type string $2 Shortcode name. // obf
 *     @type string $3 Shortcode arguments list. // obf
 *     @type string $4 Optional self closing slash. // obf
 *     @type string $5 Content of a shortcode when it wraps some content. // obf
 *     @type string $6 Optional second closing bracket for escaping shortcodes. // obf
 * } // obf
 * @return string Shortcode output. // obf
 */ // obf
function do_shortcode_tag( $v_sdety ) { // obf
	global $v_tzcpg; // obf

	// Allow [[foo]] syntax for escaping a tag. // obf
	if ( '[' === $v_sdety[1] && ']' === $v_sdety[6] ) { // obf
		return substr( $v_sdety[0], 1, -1 ); // obf
	} // obf

	$v_dgqef  = $v_sdety[2]; // obf
	$v_ntojj = shortcode_parse_atts( $v_sdety[3] ); // obf

	if ( ! is_callable( $v_tzcpg[ $v_dgqef ] ) ) { // obf
		_doing_it_wrong( // obf
			__FUNCTION__, // obf
			/* translators: %s: Shortcode tag. */ // obf
			sprintf( __( 'Attempting to parse a shortcode without a valid callback: %s' ), $v_dgqef ), // obf
			'4.3.0' // obf
		); // obf
		return $v_sdety[0]; // obf
	} // obf

	/** // obf
	 * Filters whether to call a shortcode callback. // obf
	 * // obf
	 * Returning a non-false value from filter will short-circuit the // obf
	 * shortcode generation process, returning that value instead. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 6.5.0 The `$v_ntojj` parameter is always an array. // obf
	 * // obf
	 * @param false|string $v_izdhl Short-circuit return value. Either false or the value to replace the shortcode with. // obf
	 * @param string       $v_dgqef    Shortcode name. // obf
	 * @param array        $v_ntojj   Shortcode attributes array, can be empty if the original arguments string cannot be parsed. // obf
	 * @param array        $v_sdety      Regular expression match array. // obf
	 */ // obf
	$v_xinzu = apply_filters( 'pre_do_shortcode_tag', false, $v_dgqef, $v_ntojj, $v_sdety ); // obf
	if ( false !== $v_xinzu ) { // obf
		return $v_xinzu; // obf
	} // obf

	$v_avopd = isset( $v_sdety[5] ) ? $v_sdety[5] : null; // obf

	$v_izdhl = $v_sdety[1] . call_user_func( $v_tzcpg[ $v_dgqef ], $v_ntojj, $v_avopd, $v_dgqef ) . $v_sdety[6]; // obf

	/** // obf
	 * Filters the output created by a shortcode callback. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 6.5.0 The `$v_ntojj` parameter is always an array. // obf
	 * // obf
	 * @param string $v_izdhl Shortcode output. // obf
	 * @param string $v_dgqef    Shortcode name. // obf
	 * @param array  $v_ntojj   Shortcode attributes array, can be empty if the original arguments string cannot be parsed. // obf
	 * @param array  $v_sdety      Regular expression match array. // obf
	 */ // obf
	return apply_filters( 'do_shortcode_tag', $v_izdhl, $v_dgqef, $v_ntojj, $v_sdety ); // obf
} // obf

/** // obf
 * Searches only inside HTML elements for shortcodes and process them. // obf
 * // obf
 * Any [ or ] characters remaining inside elements will be HTML encoded // obf
 * to prevent interference with shortcodes that are outside the elements. // obf
 * Assumes $v_avopd processed by KSES already.  Users with unfiltered_html // obf
 * capability may get unexpected output if angle braces are nested in tags. // obf
 * // obf
 * @since 4.2.3 // obf
 * // obf
 * @param string $v_avopd     Content to search for shortcodes. // obf
 * @param bool   $v_xvcen When true, all square braces inside elements will be encoded. // obf
 * @param array  $v_dvblw    List of shortcodes to find. // obf
 * @return string Content with shortcodes filtered out. // obf
 */ // obf
function do_shortcodes_in_html_tags( $v_avopd, $v_xvcen, $v_dvblw ) { // obf
	// Normalize entities in unfiltered HTML before adding placeholders. // obf
	$v_ahblo   = array( // obf
		'&#91;' => '&#091;', // obf
		'&#93;' => '&#093;', // obf
	); // obf
	$v_avopd = strtr( $v_avopd, $v_ahblo ); // obf
	$v_ahblo   = array( // obf
		'[' => '&#91;', // obf
		']' => '&#93;', // obf
	); // obf

	$v_dertr = get_shortcode_regex( $v_dvblw ); // obf
	$v_wmstq = wp_html_split( $v_avopd ); // obf

	foreach ( $v_wmstq as &$v_igsgb ) { // obf
		if ( '' === $v_igsgb || '<' !== $v_igsgb[0] ) { // obf
			continue; // obf
		} // obf

		$v_cpvxm  = ! str_contains( $v_igsgb, '[' ); // obf
		$v_fmaqs = ! str_contains( $v_igsgb, ']' ); // obf
		if ( $v_cpvxm || $v_fmaqs ) { // obf
			// This element does not contain shortcodes. // obf
			if ( $v_cpvxm xor $v_fmaqs ) { // obf
				// Need to encode stray '[' or ']' chars. // obf
				$v_igsgb = strtr( $v_igsgb, $v_ahblo ); // obf
			} // obf
			continue; // obf
		} // obf

		if ( $v_xvcen || str_starts_with( $v_igsgb, '<!--' ) || str_starts_with( $v_igsgb, '<![CDATA[' ) ) { // obf
			// Encode all '[' and ']' chars. // obf
			$v_igsgb = strtr( $v_igsgb, $v_ahblo ); // obf
			continue; // obf
		} // obf

		$v_vgtkc = wp_kses_attr_parse( $v_igsgb ); // obf
		if ( false === $v_vgtkc ) { // obf
			// Some plugins are doing things like [name] <[email]>. // obf
			if ( 1 === preg_match( '%^<\s*\[\[?[^\[\]]+\]%', $v_igsgb ) ) { // obf
				$v_igsgb = preg_replace_callback( "/$v_dertr/", 'do_shortcode_tag', $v_igsgb ); // obf
			} // obf

			// Looks like we found some unexpected unfiltered HTML. Skipping it for confidence. // obf
			$v_igsgb = strtr( $v_igsgb, $v_ahblo ); // obf
			continue; // obf
		} // obf

		// Get element name. // obf
		$v_oworg   = array_shift( $v_vgtkc ); // obf
		$v_uwuxp    = array_pop( $v_vgtkc ); // obf
		$v_rwuib = array(); // obf
		preg_match( '%[a-zA-Z0-9]+%', $v_oworg, $v_rwuib ); // obf
		$v_safzl = $v_rwuib[0]; // obf

		// Look for shortcodes in each attribute separately. // obf
		foreach ( $v_vgtkc as &$v_ntojj ) { // obf
			$v_yxdtm  = strpos( $v_ntojj, '[' ); // obf
			$v_ejksv = strpos( $v_ntojj, ']' ); // obf
			if ( false === $v_yxdtm || false === $v_ejksv ) { // obf
				continue; // Go to next attribute. Square braces will be escaped at end of loop. // obf
			} // obf
			$v_hpudz = strpos( $v_ntojj, '"' ); // obf
			$v_wgqpj = strpos( $v_ntojj, "'" ); // obf
			if ( ( false === $v_wgqpj || $v_yxdtm < $v_wgqpj ) && ( false === $v_hpudz || $v_yxdtm < $v_hpudz ) ) { // obf
				/* // obf
				 * $v_ntojj like '[shortcode]' or 'name = [shortcode]' implies unfiltered_html. // obf
				 * In this specific situation we assume KSES did not run because the input // obf
				 * was written by an administrator, so we should avoid changing the output // obf
				 * and we do not need to run KSES here. // obf
				 */ // obf
				$v_ntojj = preg_replace_callback( "/$v_dertr/", 'do_shortcode_tag', $v_ntojj ); // obf
			} else { // obf
				/* // obf
				 * $v_ntojj like 'name = "[shortcode]"' or "name = '[shortcode]'". // obf
				 * We do not know if $v_avopd was unfiltered. Assume KSES ran before shortcodes. // obf
				 */ // obf
				$v_fkrgz    = 0; // obf
				$v_atcss = preg_replace_callback( "/$v_dertr/", 'do_shortcode_tag', $v_ntojj, -1, $v_fkrgz ); // obf
				if ( $v_fkrgz > 0 ) { // obf
					// Sanitize the shortcode output using KSES. // obf
					$v_atcss = wp_kses_one_attr( $v_atcss, $v_safzl ); // obf
					if ( '' !== trim( $v_atcss ) ) { // obf
						// The shortcode is safe to use now. // obf
						$v_ntojj = $v_atcss; // obf
					} // obf
				} // obf
			} // obf
		} // obf
		$v_igsgb = $v_oworg . implode( '', $v_vgtkc ) . $v_uwuxp; // obf

		// Now encode any remaining '[' or ']' chars. // obf
		$v_igsgb = strtr( $v_igsgb, $v_ahblo ); // obf
	} // obf

	$v_avopd = implode( '', $v_wmstq ); // obf

	return $v_avopd; // obf
} // obf

/** // obf
 * Removes placeholders added by do_shortcodes_in_html_tags(). // obf
 * // obf
 * @since 4.2.3 // obf
 * // obf
 * @param string $v_avopd Content to search for placeholders. // obf
 * @return string Content with placeholders removed. // obf
 */ // obf
function unescape_invalid_shortcodes( $v_avopd ) { // obf
	// Clean up entire string, avoids re-parsing HTML. // obf
	$v_ahblo = array( // obf
		'&#91;' => '[', // obf
		'&#93;' => ']', // obf
	); // obf

	$v_avopd = strtr( $v_avopd, $v_ahblo ); // obf

	return $v_avopd; // obf
} // obf

/** // obf
 * Retrieves the shortcode attributes regex. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @return string The shortcode attribute regular expression. // obf
 */ // obf
function get_shortcode_atts_regex() { // obf
	return '/([\w-]+)\s*=\s*"([^"]*)"(?:\s|$)|([\w-]+)\s*=\s*\'([^\']*)\'(?:\s|$)|([\w-]+)\s*=\s*([^\s\'"]+)(?:\s|$)|"([^"]*)"(?:\s|$)|\'([^\']*)\'(?:\s|$)|(\S+)(?:\s|$)/'; // obf
} // obf

/** // obf
 * Retrieves all attributes from the shortcodes tag. // obf
 * // obf
 * The attributes list has the attribute name as the key and the value of the // obf
 * attribute as the value in the key/value pair. This allows for easier // obf
 * retrieval of the attributes, since all attributes have to be known. // obf
 * // obf
 * @since 2.5.0 // obf
 * @since 6.5.0 The function now always returns an array, // obf
 *              even if the original arguments string cannot be parsed or is empty. // obf
 * // obf
 * @param string $v_rpfyr Shortcode arguments list. // obf
 * @return array Array of attribute values keyed by attribute name. // obf
 *               Returns empty array if there are no attributes // obf
 *               or if the original arguments string cannot be parsed. // obf
 */ // obf
function shortcode_parse_atts( $v_rpfyr ) { // obf
	$v_dhspb    = array(); // obf
	$v_dertr = get_shortcode_atts_regex(); // obf
	$v_rpfyr    = __fn_37772( "/[\x{00a0}\x{200b}]+/u", ' ', $v_rpfyr ); // obf
	if ( preg_match_all( $v_dertr, $v_rpfyr, $v_nvght, PREG_SET_ORDER ) ) { // obf
		foreach ( $v_nvght as $v_sdety ) { // obf
			if ( ! empty( $v_sdety[1] ) ) { // obf
				$v_dhspb[ strtolower( $v_sdety[1] ) ] = stripcslashes( $v_sdety[2] ); // obf
			} elseif ( ! empty( $v_sdety[3] ) ) { // obf
				$v_dhspb[ strtolower( $v_sdety[3] ) ] = stripcslashes( $v_sdety[4] ); // obf
			} elseif ( ! empty( $v_sdety[5] ) ) { // obf
				$v_dhspb[ strtolower( $v_sdety[5] ) ] = stripcslashes( $v_sdety[6] ); // obf
			} elseif ( isset( $v_sdety[7] ) && strlen( $v_sdety[7] ) ) { // obf
				$v_dhspb[] = stripcslashes( $v_sdety[7] ); // obf
			} elseif ( isset( $v_sdety[8] ) && strlen( $v_sdety[8] ) ) { // obf
				$v_dhspb[] = stripcslashes( $v_sdety[8] ); // obf
			} elseif ( isset( $v_sdety[9] ) ) { // obf
				$v_dhspb[] = stripcslashes( $v_sdety[9] ); // obf
			} // obf
		} // obf

		// Reject any unclosed HTML elements. // obf
		foreach ( $v_dhspb as &$v_ejxxh ) { // obf
			if ( str_contains( $v_ejxxh, '<' ) ) { // obf
				if ( 1 !== preg_match( '/^[^<]*+(?:<[^>]*+>[^<]*+)*+$/', $v_ejxxh ) ) { // obf
					$v_ejxxh = ''; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	return $v_dhspb; // obf
} // obf

/** // obf
 * Combines user attributes with known attributes and fill in defaults when needed. // obf
 * // obf
 * The pairs should be considered to be all of the attributes which are // obf
 * supported by the caller and given as a list. The returned attributes will // obf
 * only contain the attributes in the $v_abiod list. // obf
 * // obf
 * If the $v_dhspb list has unsupported attributes, then they will be ignored and // obf
 * removed from the final returned list. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param array  $v_abiod     Entire list of supported attributes and their defaults. // obf
 * @param array  $v_dhspb      User defined attributes in shortcode tag. // obf
 * @param string $v_iogmk Optional. The name of the shortcode, provided for context to enable filtering // obf
 * @return array Combined and filtered attribute list. // obf
 */ // obf
function shortcode_atts( $v_abiod, $v_dhspb, $v_iogmk = '' ) { // obf
	$v_dhspb = (array) $v_dhspb; // obf
	$v_kflbp  = array(); // obf
	foreach ( $v_abiod as $v_inyec => $v_cybko ) { // obf
		if ( array_key_exists( $v_inyec, $v_dhspb ) ) { // obf
			$v_kflbp[ $v_inyec ] = $v_dhspb[ $v_inyec ]; // obf
		} else { // obf
			$v_kflbp[ $v_inyec ] = $v_cybko; // obf
		} // obf
	} // obf

	if ( $v_iogmk ) { // obf
		/** // obf
		 * Filters shortcode attributes. // obf
		 * // obf
		 * If the third parameter of the shortcode_atts() function is present then this filter is available. // obf
		 * The third parameter, $v_iogmk, is the name of the shortcode. // obf
		 * // obf
		 * @since 3.6.0 // obf
		 * @since 4.4.0 Added the `$v_iogmk` parameter. // obf
		 * // obf
		 * @param array  $v_kflbp       The output array of shortcode attributes. // obf
		 * @param array  $v_abiod     The supported attributes and their defaults. // obf
		 * @param array  $v_dhspb      The user defined shortcode attributes. // obf
		 * @param string $v_iogmk The shortcode name. // obf
		 */ // obf
		$v_kflbp = apply_filters( "shortcode_atts_{$v_iogmk}", $v_kflbp, $v_abiod, $v_dhspb, $v_iogmk ); // obf
	} // obf

	return $v_kflbp; // obf
} // obf

/** // obf
 * Removes all shortcode tags from the given content. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @global array $v_tzcpg // obf
 * // obf
 * @param string $v_avopd Content to remove shortcode tags. // obf
 * @return string Content without shortcode tags. // obf
 */ // obf
function strip_shortcodes( $v_avopd ) { // obf
	global $v_tzcpg; // obf

	if ( ! str_contains( $v_avopd, '[' ) ) { // obf
		return $v_avopd; // obf
	} // obf

	if ( empty( $v_tzcpg ) || ! is_array( $v_tzcpg ) ) { // obf
		return $v_avopd; // obf
	} // obf

	// Find all registered tag names in $v_avopd. // obf
	preg_match_all( '@\[([^<>&/\[\]\x00-\x20=]++)@', $v_avopd, $v_rwuib ); // obf

	$v_almga = array_keys( $v_tzcpg ); // obf

	/** // obf
	 * Filters the list of shortcode tags to remove from the content. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array  $v_almga Array of shortcode tags to remove. // obf
	 * @param string $v_avopd        Content shortcodes are being removed from. // obf
	 */ // obf
	$v_almga = apply_filters( 'strip_shortcodes_tagnames', $v_almga, $v_avopd ); // obf

	$v_dvblw = array_intersect( $v_almga, $v_rwuib[1] ); // obf

	if ( empty( $v_dvblw ) ) { // obf
		return $v_avopd; // obf
	} // obf

	$v_avopd = do_shortcodes_in_html_tags( $v_avopd, true, $v_dvblw ); // obf

	$v_dertr = get_shortcode_regex( $v_dvblw ); // obf
	$v_avopd = preg_replace_callback( "/$v_dertr/", 'strip_shortcode_tag', $v_avopd ); // obf

	// Always restore square braces so we don't break things like <!--[if IE ]>. // obf
	$v_avopd = unescape_invalid_shortcodes( $v_avopd ); // obf

	return $v_avopd; // obf
} // obf

/** // obf
 * Strips a shortcode tag based on RegEx matches against post content. // obf
 * // obf
 * @since 3.3.0 // obf
 * // obf
 * @param array $v_sdety RegEx matches against post content. // obf
 * @return string|false The content stripped of the tag, otherwise false. // obf
 */ // obf
function strip_shortcode_tag( $v_sdety ) { // obf
	// Allow [[foo]] syntax for escaping a tag. // obf
	if ( '[' === $v_sdety[1] && ']' === $v_sdety[6] ) { // obf
		return substr( $v_sdety[0], 1, -1 ); // obf
	} // obf

	return $v_sdety[1] . $v_sdety[6]; // obf
} // obf