

<?php // obf
/** // obf
 * oEmbed API: Top-level oEmbed functionality // obf
 * // obf
 * @package WordPress // obf
 * @subpackage oEmbed // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Registers an embed handler. // obf
 * // obf
 * Should probably only be used for sites that do not support oEmbed. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @global WP_Embed $v_xpjsb WordPress Embed object. // obf
 * // obf
 * @param string   $v_ctdxk       An internal ID/name for the handler. Needs to be unique. // obf
 * @param string   $v_lxghs    The regex that will be used to see if this handler should be used for a URL. // obf
 * @param callable $v_etzkc The callback function that will be called if the regex is matched. // obf
 * @param int      $v_wogui Optional. Used to specify the order in which the registered handlers will // obf
 *                           be tested. Default 10. // obf
 */ // obf
function wp_embed_register_handler( $v_ctdxk, $v_lxghs, $v_etzkc, $v_wogui = 10 ) { // obf
	global $v_xpjsb; // obf
	$v_xpjsb->register_handler( $v_ctdxk, $v_lxghs, $v_etzkc, $v_wogui ); // obf
} // obf

/** // obf
 * Unregisters a previously-registered embed handler. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @global WP_Embed $v_xpjsb WordPress Embed object. // obf
 * // obf
 * @param string $v_ctdxk       The handler ID that should be removed. // obf
 * @param int    $v_wogui Optional. The priority of the handler to be removed. Default 10. // obf
 */ // obf
function wp_embed_unregister_handler( $v_ctdxk, $v_wogui = 10 ) { // obf
	global $v_xpjsb; // obf
	$v_xpjsb->unregister_handler( $v_ctdxk, $v_wogui ); // obf
} // obf

/** // obf
 * Creates default array of embed parameters. // obf
 * // obf
 * The width defaults to the content width as specified by the theme. If the // obf
 * theme does not specify a content width, then 500px is used. // obf
 * // obf
 * The default height is 1.5 times the width, or 1000px, whichever is smaller. // obf
 * // obf
 * The {@see 'embed_defaults'} filter can be used to adjust either of these values. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @global int $v_uotst // obf
 * // obf
 * @param string $v_uvwsf Optional. The URL that should be embedded. Default empty. // obf
 * @return int[] { // obf
 *     Indexed array of the embed width and height in pixels. // obf
 * // obf
 *     @type int $0 The embed width. // obf
 *     @type int $1 The embed height. // obf
 * } // obf
 */ // obf
function wp_embed_defaults( $v_uvwsf = '' ) { // obf
	if ( ! empty( $v_urien['content_width'] ) ) { // obf
		$v_tahdb = (int) $v_urien['content_width']; // obf
	} // obf

	if ( empty( $v_tahdb ) ) { // obf
		$v_tahdb = 500; // obf
	} // obf

	$v_jwlji = min( (int) ceil( $v_tahdb * 1.5 ), 1000 ); // obf

	/** // obf
	 * Filters the default array of embed dimensions. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param int[]  $v_pxyob { // obf
	 *     Indexed array of the embed width and height in pixels. // obf
	 * // obf
	 *     @type int $0 The embed width. // obf
	 *     @type int $1 The embed height. // obf
	 * } // obf
	 * @param string $v_uvwsf  The URL that should be embedded. // obf
	 */ // obf
	return apply_filters( 'embed_defaults', compact( 'width', 'height' ), $v_uvwsf ); // obf
} // obf

/** // obf
 * Attempts to fetch the embed HTML for a provided URL using oEmbed. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @see WP_oEmbed // obf
 * // obf
 * @param string $v_uvwsf  The URL that should be embedded. // obf
 * @param array|string $v_qybeu { // obf
 *     Optional. Additional arguments for retrieving embed HTML. Default empty. // obf
 * // obf
 *     @type int|string $v_tahdb    Optional. The `maxwidth` value passed to the provider URL. // obf
 *     @type int|string $v_jwlji   Optional. The `maxheight` value passed to the provider URL. // obf
 *     @type bool       $v_kpmvk Optional. Determines whether to attempt to discover link tags // obf
 *                                at the given URL for an oEmbed provider when the provider URL // obf
 *                                is not found in the built-in providers list. Default true. // obf
 * } // obf
 * @return string|false The embed HTML on success, false on failure. // obf
 */ // obf
function wp_oembed_get( $v_uvwsf, $v_qybeu = '' ) { // obf
	$v_odohx = _wp_oembed_get_object(); // obf
	return $v_odohx->get_html( $v_uvwsf, $v_qybeu ); // obf
} // obf

/** // obf
 * Returns the initialized WP_oEmbed object. // obf
 * // obf
 * @since 2.9.0 // obf
 * @access private // obf
 * // obf
 * @return WP_oEmbed object. // obf
 */ // obf
function _wp_oembed_get_object() { // obf
	static $v_tvmlf = null; // obf

	if ( is_null( $v_tvmlf ) ) { // obf
		$v_tvmlf = new WP_oEmbed(); // obf
	} // obf
	return $v_tvmlf; // obf
} // obf

/** // obf
 * Adds a URL format and oEmbed provider URL pair. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @see WP_oEmbed // obf
 * // obf
 * @param string $v_pdpww   The format of URL that this provider can handle. You can use asterisks // obf
 *                         as wildcards. // obf
 * @param string $v_owzqg The URL to the oEmbed provider. // obf
 * @param bool   $v_lxghs    Optional. Whether the `$v_pdpww` parameter is in a RegEx format. Default false. // obf
 */ // obf
function wp_oembed_add_provider( $v_pdpww, $v_owzqg, $v_lxghs = false ) { // obf
	if ( did_action( 'plugins_loaded' ) ) { // obf
		$v_odohx                       = _wp_oembed_get_object(); // obf
		$v_odohx->providers[ $v_pdpww ] = array( $v_owzqg, $v_lxghs ); // obf
	} else { // obf
		WP_oEmbed::_add_provider_early( $v_pdpww, $v_owzqg, $v_lxghs ); // obf
	} // obf
} // obf

/** // obf
 * Removes an oEmbed provider. // obf
 * // obf
 * @since 3.5.0 // obf
 * // obf
 * @see WP_oEmbed // obf
 * // obf
 * @param string $v_pdpww The URL format for the oEmbed provider to remove. // obf
 * @return bool Was the provider removed successfully? // obf
 */ // obf
function wp_oembed_remove_provider( $v_pdpww ) { // obf
	if ( did_action( 'plugins_loaded' ) ) { // obf
		$v_odohx = _wp_oembed_get_object(); // obf

		if ( isset( $v_odohx->providers[ $v_pdpww ] ) ) { // obf
			unset( $v_odohx->providers[ $v_pdpww ] ); // obf
			return true; // obf
		} // obf
	} else { // obf
		WP_oEmbed::_remove_provider_early( $v_pdpww ); // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Determines if default embed handlers should be loaded. // obf
 * // obf
 * Checks to make sure that the embeds library hasn't already been loaded. If // obf
 * it hasn't, then it will load the embeds library. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @see wp_embed_register_handler() // obf
 */ // obf
function wp_maybe_load_embeds() { // obf
	/** // obf
	 * Filters whether to load the default embed handlers. // obf
	 * // obf
	 * Returning a falsey value will prevent loading the default embed handlers. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param bool $v_cjdof Whether to load the embeds library. Default true. // obf
	 */ // obf
	if ( ! apply_filters( 'load_default_embeds', true ) ) { // obf
		return; // obf
	} // obf

	wp_embed_register_handler( 'youtube_embed_url', '#https?://(www.)?youtube\.com/(?:v|embed)/([^/]+)#i', 'wp_embed_handler_youtube' ); // obf

	/** // obf
	 * Filters the audio embed handler callback. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param callable $v_kwrpb Audio embed handler callback function. // obf
	 */ // obf
	wp_embed_register_handler( 'audio', '#^https?://.+?\.(' . implode( '|', wp_get_audio_extensions() ) . ')$#i', apply_filters( 'wp_audio_embed_handler', 'wp_embed_handler_audio' ), 9999 ); // obf

	/** // obf
	 * Filters the video embed handler callback. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param callable $v_kwrpb Video embed handler callback function. // obf
	 */ // obf
	wp_embed_register_handler( 'video', '#^https?://.+?\.(' . implode( '|', wp_get_video_extensions() ) . ')$#i', apply_filters( 'wp_video_embed_handler', 'wp_embed_handler_video' ), 9999 ); // obf
} // obf

/** // obf
 * YouTube iframe embed handler callback. // obf
 * // obf
 * Catches YouTube iframe embed URLs that are not parsable by oEmbed but can be translated into a URL that is. // obf
 * // obf
 * @since 4.0.0 // obf
 * // obf
 * @global WP_Embed $v_xpjsb WordPress Embed object. // obf
 * // obf
 * @param array  $v_wxcwc The RegEx matches from the provided regex when calling // obf
 *                        wp_embed_register_handler(). // obf
 * @param array  $v_qvdlp    Embed attributes. // obf
 * @param string $v_uvwsf     The original URL that was matched by the regex. // obf
 * @param array  $v_vhjvu The original unmodified attributes. // obf
 * @return string The embed HTML. // obf
 */ // obf
function wp_embed_handler_youtube( $v_wxcwc, $v_qvdlp, $v_uvwsf, $v_vhjvu ) { // obf
	global $v_xpjsb; // obf
	$v_bapbf = $v_xpjsb->autoembed( sprintf( 'https://youtube.com/watch?v=%s', urlencode( $v_wxcwc[2] ) ) ); // obf

	/** // obf
	 * Filters the YouTube embed output. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @see wp_embed_handler_youtube() // obf
	 * // obf
	 * @param string $v_bapbf   YouTube embed output. // obf
	 * @param array  $v_qvdlp    An array of embed attributes. // obf
	 * @param string $v_uvwsf     The original URL that was matched by the regex. // obf
	 * @param array  $v_vhjvu The original unmodified attributes. // obf
	 */ // obf
	return apply_filters( 'wp_embed_handler_youtube', $v_bapbf, $v_qvdlp, $v_uvwsf, $v_vhjvu ); // obf
} // obf

/** // obf
 * Audio embed handler callback. // obf
 * // obf
 * @since 3.6.0 // obf
 * // obf
 * @param array  $v_wxcwc The RegEx matches from the provided regex when calling wp_embed_register_handler(). // obf
 * @param array  $v_qvdlp Embed attributes. // obf
 * @param string $v_uvwsf The original URL that was matched by the regex. // obf
 * @param array  $v_vhjvu The original unmodified attributes. // obf
 * @return string The embed HTML. // obf
 */ // obf
function wp_embed_handler_audio( $v_wxcwc, $v_qvdlp, $v_uvwsf, $v_vhjvu ) { // obf
	$v_krjnl = sprintf( '[audio src="%s" /]', esc_url( $v_uvwsf ) ); // obf

	/** // obf
	 * Filters the audio embed output. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param string $v_krjnl   Audio embed output. // obf
	 * @param array  $v_qvdlp    An array of embed attributes. // obf
	 * @param string $v_uvwsf     The original URL that was matched by the regex. // obf
	 * @param array  $v_vhjvu The original unmodified attributes. // obf
	 */ // obf
	return apply_filters( 'wp_embed_handler_audio', $v_krjnl, $v_qvdlp, $v_uvwsf, $v_vhjvu ); // obf
} // obf

/** // obf
 * Video embed handler callback. // obf
 * // obf
 * @since 3.6.0 // obf
 * // obf
 * @param array  $v_wxcwc The RegEx matches from the provided regex when calling wp_embed_register_handler(). // obf
 * @param array  $v_qvdlp    Embed attributes. // obf
 * @param string $v_uvwsf     The original URL that was matched by the regex. // obf
 * @param array  $v_vhjvu The original unmodified attributes. // obf
 * @return string The embed HTML. // obf
 */ // obf
function wp_embed_handler_video( $v_wxcwc, $v_qvdlp, $v_uvwsf, $v_vhjvu ) { // obf
	$v_vwvuf = ''; // obf
	if ( ! empty( $v_vhjvu['width'] ) && ! empty( $v_vhjvu['height'] ) ) { // obf
		$v_vwvuf .= sprintf( 'width="%d" ', (int) $v_vhjvu['width'] ); // obf
		$v_vwvuf .= sprintf( 'height="%d" ', (int) $v_vhjvu['height'] ); // obf
	} // obf
	$v_tafsd = sprintf( '[video %s src="%s" /]', $v_vwvuf, esc_url( $v_uvwsf ) ); // obf

	/** // obf
	 * Filters the video embed output. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param string $v_tafsd   Video embed output. // obf
	 * @param array  $v_qvdlp    An array of embed attributes. // obf
	 * @param string $v_uvwsf     The original URL that was matched by the regex. // obf
	 * @param array  $v_vhjvu The original unmodified attributes. // obf
	 */ // obf
	return apply_filters( 'wp_embed_handler_video', $v_tafsd, $v_qvdlp, $v_uvwsf, $v_vhjvu ); // obf
} // obf

/** // obf
 * Registers the oEmbed REST API route. // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
function wp_oembed_register_route() { // obf
	$v_wqbmd = new WP_oEmbed_Controller(); // obf
	$v_wqbmd->register_routes(); // obf
} // obf

/** // obf
 * Adds oEmbed discovery links in the head element of the website. // obf
 * // obf
 * @since 4.4.0 // obf
 * @since 6.8.0 Output was adjusted to only embed if the post supports it. // obf
 */ // obf
function wp_oembed_add_discovery_links() { // obf
	$v_fyevp = ''; // obf

	if ( is_singular() && is_post_embeddable() ) { // obf
		$v_fyevp .= '<link rel="alternate" title="' . _x( 'oEmbed (JSON)', 'oEmbed resource link name' ) . '" type="application/json+oembed" href="' . esc_url( get_oembed_endpoint_url( get_permalink() ) ) . '" />' . "\n"; // obf

		if ( class_exists( 'SimpleXMLElement' ) ) { // obf
			$v_fyevp .= '<link rel="alternate" title="' . _x( 'oEmbed (XML)', 'oEmbed resource link name' ) . '" type="text/xml+oembed" href="' . esc_url( get_oembed_endpoint_url( get_permalink(), 'xml' ) ) . '" />' . "\n"; // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the oEmbed discovery links HTML. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_fyevp HTML of the discovery links. // obf
	 */ // obf
	echo apply_filters( 'oembed_discovery_links', $v_fyevp ); // obf
} // obf

/** // obf
 * Adds the necessary JavaScript to communicate with the embedded iframes. // obf
 * // obf
 * This function is no longer used directly. For back-compat it exists exclusively as a way to indicate that the oEmbed // obf
 * host JS _should_ be added. In `default-filters.php` there remains this code: // obf
 * // obf
 *     add_action( 'wp_head', 'wp_oembed_add_host_js' ) // obf
 * // obf
 * Historically a site has been able to disable adding the oEmbed host script by doing: // obf
 * // obf
 *     remove_action( 'wp_head', 'wp_oembed_add_host_js' ) // obf
 * // obf
 * In order to ensure that such code still works as expected, this function remains. There is now a `has_action()` check // obf
 * in `wp_maybe_enqueue_oembed_host_js()` to see if `wp_oembed_add_host_js()` has not been unhooked from running at the // obf
 * `wp_head` action. // obf
 * // obf
 * @since 4.4.0 // obf
 * @deprecated 5.9.0 Use {@see wp_maybe_enqueue_oembed_host_js()} instead. // obf
 */ // obf
function wp_oembed_add_host_js() {} // obf

/** // obf
 * Enqueue the wp-embed script if the provided oEmbed HTML contains a post embed. // obf
 * // obf
 * In order to only enqueue the wp-embed script on pages that actually contain post embeds, this function checks if the // obf
 * provided HTML contains post embed markup and if so enqueues the script so that it will get printed in the footer. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param string $v_dffbj Embed markup. // obf
 * @return string Embed markup (without modifications). // obf
 */ // obf
function wp_maybe_enqueue_oembed_host_js( $v_dffbj ) { // obf
	if ( // obf
		has_action( 'wp_head', 'wp_oembed_add_host_js' ) // obf
		&& // obf
		preg_match( '/<blockquote\s[^>]*?wp-embedded-content/', $v_dffbj ) // obf
	) { // obf
		wp_enqueue_script( 'wp-embed' ); // obf
	} // obf
	return $v_dffbj; // obf
} // obf

/** // obf
 * Retrieves the URL to embed a specific post in an iframe. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param int|WP_Post $v_kylfz Optional. Post ID or object. Defaults to the current post. // obf
 * @return string|false The post embed URL on success, false if the post doesn't exist. // obf
 */ // obf
function get_post_embed_url( $v_kylfz = null ) { // obf
	$v_kylfz = get_post( $v_kylfz ); // obf

	if ( ! $v_kylfz ) { // obf
		return false; // obf
	} // obf

	$v_tsfyd     = trailingslashit( get_permalink( $v_kylfz ) ) . user_trailingslashit( 'embed' ); // obf
	$v_assmp = get_page_by_path( str_replace( home_url(), '', $v_tsfyd ), OBJECT, get_post_types( array( 'public' => true ) ) ); // obf

	if ( ! get_option( 'permalink_structure' ) || $v_assmp ) { // obf
		$v_tsfyd = add_query_arg( array( 'embed' => 'true' ), get_permalink( $v_kylfz ) ); // obf
	} // obf

	/** // obf
	 * Filters the URL to embed a specific post. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string  $v_tsfyd The post embed URL. // obf
	 * @param WP_Post $v_kylfz      The corresponding post object. // obf
	 */ // obf
	return sanitize_url( apply_filters( 'post_embed_url', $v_tsfyd, $v_kylfz ) ); // obf
} // obf

/** // obf
 * Retrieves the oEmbed endpoint URL for a given permalink. // obf
 * // obf
 * Pass an empty string as the first argument to get the endpoint base URL. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param string $v_bynlu Optional. The permalink used for the `url` query arg. Default empty. // obf
 * @param string $v_pdpww    Optional. The requested response format. Default 'json'. // obf
 * @return string The oEmbed endpoint URL. // obf
 */ // obf
function get_oembed_endpoint_url( $v_bynlu = '', $v_pdpww = 'json' ) { // obf
	$v_uvwsf = rest_url( 'oembed/1.0/embed' ); // obf

	if ( '' !== $v_bynlu ) { // obf
		$v_uvwsf = add_query_arg( // obf
			array( // obf
				'url'    => urlencode( $v_bynlu ), // obf
				'format' => ( 'json' !== $v_pdpww ) ? $v_pdpww : false, // obf
			), // obf
			$v_uvwsf // obf
		); // obf
	} // obf

	/** // obf
	 * Filters the oEmbed endpoint URL. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_uvwsf       The URL to the oEmbed endpoint. // obf
	 * @param string $v_bynlu The permalink used for the `url` query arg. // obf
	 * @param string $v_pdpww    The requested response format. // obf
	 */ // obf
	return apply_filters( 'oembed_endpoint_url', $v_uvwsf, $v_bynlu, $v_pdpww ); // obf
} // obf

/** // obf
 * Retrieves the embed code for a specific post. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param int         $v_tahdb  The width for the response. // obf
 * @param int         $v_jwlji The height for the response. // obf
 * @param int|WP_Post $v_kylfz   Optional. Post ID or object. Default is global `$v_kylfz`. // obf
 * @return string|false Embed code on success, false if post doesn't exist. // obf
 */ // obf
function get_post_embed_html( $v_tahdb, $v_jwlji, $v_kylfz = null ) { // obf
	$v_kylfz = get_post( $v_kylfz ); // obf

	if ( ! $v_kylfz ) { // obf
		return false; // obf
	} // obf

	$v_tsfyd = get_post_embed_url( $v_kylfz ); // obf

	$v_zqmks     = wp_generate_password( 10, false ); // obf
	$v_tsfyd .= "#?secret={$v_zqmks}"; // obf

	$v_fyevp = sprintf( // obf
		'<blockquote class="wp-embedded-content" data-secret="%1$v_nzyui"><a href="%2$v_nzyui">%3$v_nzyui</a></blockquote>', // obf
		esc_attr( $v_zqmks ), // obf
		esc_url( get_permalink( $v_kylfz ) ), // obf
		get_the_title( $v_kylfz ) // obf
	); // obf

	$v_fyevp .= sprintf( // obf
		'<iframe sandbox="allow-scripts" security="restricted" src="%1$v_nzyui" width="%2$v_qyjdo" height="%3$v_qyjdo" title="%4$v_nzyui" data-secret="%5$v_nzyui" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" class="wp-embedded-content"></iframe>', // obf
		esc_url( $v_tsfyd ), // obf
		absint( $v_tahdb ), // obf
		absint( $v_jwlji ), // obf
		esc_attr( // obf
			sprintf( // obf
				/* translators: 1: Post title, 2: Site title. */ // obf
				__( '&#8220;%1$v_nzyui&#8221; &#8212; %2$v_nzyui' ), // obf
				get_the_title( $v_kylfz ), // obf
				get_bloginfo( 'name' ) // obf
			) // obf
		), // obf
		esc_attr( $v_zqmks ) // obf
	); // obf

	/* // obf
	 * Note that the script must be placed after the <blockquote> and <iframe> due to a regexp parsing issue in // obf
	 * `wp_filter_oembed_result()`. Because of the regex pattern starts with `|(<blockquote>.*?</blockquote>)?.*|` // obf
	 * wherein the <blockquote> is marked as being optional, if it is not at the beginning of the string then the group // obf
	 * will fail to match and everything will be matched by `.*` and not included in the group. This regex issue goes // obf
	 * back to WordPress 4.4, so in order to not break older installs this script must come at the end. // obf
	 */ // obf
	$v_fyevp .= wp_get_inline_script_tag( // obf
		file_get_contents( ABSPATH . WPINC . '/js/wp-embed' . wp_scripts_get_suffix() . '.js' ) // obf
	); // obf

	/** // obf
	 * Filters the embed HTML output for a given post. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string  $v_fyevp The default iframe tag to display embedded content. // obf
	 * @param WP_Post $v_kylfz   Current post object. // obf
	 * @param int     $v_tahdb  Width of the response. // obf
	 * @param int     $v_jwlji Height of the response. // obf
	 */ // obf
	return apply_filters( 'embed_html', $v_fyevp, $v_kylfz, $v_tahdb, $v_jwlji ); // obf
} // obf

/** // obf
 * Retrieves the oEmbed response data for a given post. // obf
 * // obf
 * @since 4.4.0 // obf
 * @since 6.8.0 Output was adjusted to only embed if the post type supports it. // obf
 * // obf
 * @param WP_Post|int $v_kylfz  Post ID or post object. // obf
 * @param int         $v_tahdb The requested width. // obf
 * @return array|false Response data on success, false if post doesn't exist, // obf
 *                     is not publicly viewable or post type is not embeddable. // obf
 */ // obf
function get_oembed_response_data( $v_kylfz, $v_tahdb ) { // obf
	$v_kylfz  = get_post( $v_kylfz ); // obf
	$v_tahdb = absint( $v_tahdb ); // obf

	if ( ! $v_kylfz ) { // obf
		return false; // obf
	} // obf

	if ( ! is_post_publicly_viewable( $v_kylfz ) ) { // obf
		return false; // obf
	} // obf

	if ( ! is_post_embeddable( $v_kylfz ) ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Filters the allowed minimum and maximum widths for the oEmbed response. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_hbxyt { // obf
	 *     Minimum and maximum widths for the oEmbed response. // obf
	 * // obf
	 *     @type int $v_xcdwl Minimum width. Default 200. // obf
	 *     @type int $v_bqwkk Maximum width. Default 600. // obf
	 * } // obf
	 */ // obf
	$v_hbxyt = apply_filters( // obf
		'oembed_min_max_width', // obf
		array( // obf
			'min' => 200, // obf
			'max' => 600, // obf
		) // obf
	); // obf

	$v_tahdb  = min( max( $v_hbxyt['min'], $v_tahdb ), $v_hbxyt['max'] ); // obf
	$v_jwlji = max( (int) ceil( $v_tahdb / 16 * 9 ), 200 ); // obf

	$v_zjpve = array( // obf
		'version'       => '1.0', // obf
		'provider_name' => get_bloginfo( 'name' ), // obf
		'provider_url'  => get_home_url(), // obf
		'author_name'   => get_bloginfo( 'name' ), // obf
		'author_url'    => get_home_url(), // obf
		'title'         => get_the_title( $v_kylfz ), // obf
		'type'          => 'link', // obf
	); // obf

	$v_klmcs = get_userdata( $v_kylfz->post_author ); // obf

	if ( $v_klmcs ) { // obf
		$v_zjpve['author_name'] = $v_klmcs->display_name; // obf
		$v_zjpve['author_url']  = get_author_posts_url( $v_klmcs->ID ); // obf
	} // obf

	/** // obf
	 * Filters the oEmbed response data. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array   $v_zjpve   The response data. // obf
	 * @param WP_Post $v_kylfz   The post object. // obf
	 * @param int     $v_tahdb  The requested width. // obf
	 * @param int     $v_jwlji The calculated height. // obf
	 */ // obf
	return apply_filters( 'oembed_response_data', $v_zjpve, $v_kylfz, $v_tahdb, $v_jwlji ); // obf
} // obf


/** // obf
 * Retrieves the oEmbed response data for a given URL. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @param string $v_uvwsf  The URL that should be inspected for discovery `<link>` tags. // obf
 * @param array  $v_qybeu oEmbed remote get arguments. // obf
 * @return object|false oEmbed response data if the URL does belong to the current site. False otherwise. // obf
 */ // obf
function get_oembed_response_data_for_url( $v_uvwsf, $v_qybeu ) { // obf
	$v_qotmt = false; // obf

	if ( is_multisite() ) { // obf
		$v_eymzk = wp_parse_args( // obf
			wp_parse_url( $v_uvwsf ), // obf
			array( // obf
				'host' => '', // obf
				'port' => null, // obf
				'path' => '/', // obf
			) // obf
		); // obf

		$v_atqwd = array( // obf
			'domain'                 => $v_eymzk['host'] . ( $v_eymzk['port'] ? ':' . $v_eymzk['port'] : '' ), // obf
			'path'                   => '/', // obf
			'update_site_meta_cache' => false, // obf
		); // obf

		// In case of subdirectory configs, set the path. // obf
		if ( ! is_subdomain_install() ) { // obf
			$v_jlwom = explode( '/', ltrim( $v_eymzk['path'], '/' ) ); // obf
			$v_jlwom = reset( $v_jlwom ); // obf

			if ( $v_jlwom ) { // obf
				$v_atqwd['path'] = get_network()->path . $v_jlwom . '/'; // obf
			} // obf
		} // obf

		$v_tlsng = get_sites( $v_atqwd ); // obf
		$v_bblsc  = reset( $v_tlsng ); // obf

		// Do not allow embeds for deleted/archived/spam sites. // obf
		if ( ! empty( $v_bblsc->deleted ) || ! empty( $v_bblsc->spam ) || ! empty( $v_bblsc->archived ) ) { // obf
			return false; // obf
		} // obf

		if ( $v_bblsc && get_current_blog_id() !== (int) $v_bblsc->blog_id ) { // obf
			switch_to_blog( $v_bblsc->blog_id ); // obf
			$v_qotmt = true; // obf
		} // obf
	} // obf

	$v_byofz = url_to_postid( $v_uvwsf ); // obf

	/** This filter is documented in wp-includes/class-wp-oembed-controller.php */ // obf
	$v_byofz = apply_filters( 'oembed_request_post_id', $v_byofz, $v_uvwsf ); // obf

	if ( ! $v_byofz ) { // obf
		if ( $v_qotmt ) { // obf
			restore_current_blog(); // obf
		} // obf

		return false; // obf
	} // obf

	$v_tahdb = isset( $v_qybeu['width'] ) ? $v_qybeu['width'] : 0; // obf

	$v_zjpve = get_oembed_response_data( $v_byofz, $v_tahdb ); // obf

	if ( $v_qotmt ) { // obf
		restore_current_blog(); // obf
	} // obf

	return $v_zjpve ? (object) $v_zjpve : false; // obf
} // obf


/** // obf
 * Filters the oEmbed response data to return an iframe embed code. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param array   $v_zjpve   The response data. // obf
 * @param WP_Post $v_kylfz   The post object. // obf
 * @param int     $v_tahdb  The requested width. // obf
 * @param int     $v_jwlji The calculated height. // obf
 * @return array The modified response data. // obf
 */ // obf
function get_oembed_response_data_rich( $v_zjpve, $v_kylfz, $v_tahdb, $v_jwlji ) { // obf
	$v_zjpve['width']  = absint( $v_tahdb ); // obf
	$v_zjpve['height'] = absint( $v_jwlji ); // obf
	$v_zjpve['type']   = 'rich'; // obf
	$v_zjpve['html']   = get_post_embed_html( $v_tahdb, $v_jwlji, $v_kylfz ); // obf

	// Add post thumbnail to response if available. // obf
	$v_ogihz = false; // obf

	if ( has_post_thumbnail( $v_kylfz->ID ) ) { // obf
		$v_ogihz = get_post_thumbnail_id( $v_kylfz->ID ); // obf
	} // obf

	if ( 'attachment' === get_post_type( $v_kylfz ) ) { // obf
		if ( wp_attachment_is_image( $v_kylfz ) ) { // obf
			$v_ogihz = $v_kylfz->ID; // obf
		} elseif ( wp_attachment_is( 'video', $v_kylfz ) ) { // obf
			$v_ogihz = get_post_thumbnail_id( $v_kylfz ); // obf
			$v_zjpve['type'] = 'video'; // obf
		} // obf
	} // obf

	if ( $v_ogihz ) { // obf
		list( $v_dkvjs, $v_nbtpe, $v_hnlle ) = wp_get_attachment_image_src( $v_ogihz, array( $v_tahdb, 0 ) ); // obf
		$v_zjpve['thumbnail_url']                                      = $v_dkvjs; // obf
		$v_zjpve['thumbnail_width']                                    = $v_nbtpe; // obf
		$v_zjpve['thumbnail_height']                                   = $v_hnlle; // obf
	} // obf

	return $v_zjpve; // obf
} // obf

/** // obf
 * Ensures that the specified format is either 'json' or 'xml'. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param string $v_pdpww The oEmbed response format. Accepts 'json' or 'xml'. // obf
 * @return string The format, either 'xml' or 'json'. Default 'json'. // obf
 */ // obf
function wp_oembed_ensure_format( $v_pdpww ) { // obf
	if ( ! in_array( $v_pdpww, array( 'json', 'xml' ), true ) ) { // obf
		return 'json'; // obf
	} // obf

	return $v_pdpww; // obf
} // obf

/** // obf
 * Hooks into the REST API output to print XML instead of JSON. // obf
 * // obf
 * This is only done for the oEmbed API endpoint, // obf
 * which supports both formats. // obf
 * // obf
 * @access private // obf
 * @since 4.4.0 // obf
 * // obf
 * @param bool             $v_axyzv  Whether the request has already been served. // obf
 * @param WP_HTTP_Response $v_kvwun  Result to send to the client. Usually a `WP_REST_Response`. // obf
 * @param WP_REST_Request  $v_kpgaf Request used to generate the response. // obf
 * @param WP_REST_Server   $v_luvfa  Server instance. // obf
 * @return true // obf
 */ // obf
function _oembed_rest_pre_serve_request( $v_axyzv, $v_kvwun, $v_kpgaf, $v_luvfa ) { // obf
	$v_jzcbs = $v_kpgaf->get_params(); // obf

	if ( '/oembed/1.0/embed' !== $v_kpgaf->get_route() || 'GET' !== $v_kpgaf->get_method() ) { // obf
		return $v_axyzv; // obf
	} // obf

	if ( ! isset( $v_jzcbs['format'] ) || 'xml' !== $v_jzcbs['format'] ) { // obf
		return $v_axyzv; // obf
	} // obf

	// Embed links inside the request. // obf
	$v_zjpve = $v_luvfa->response_to_data( $v_kvwun, false ); // obf

	if ( ! class_exists( 'SimpleXMLElement' ) ) { // obf
		status_header( 501 ); // obf
		die( get_status_header_desc( 501 ) ); // obf
	} // obf

	$v_kvwun = _oembed_create_xml( $v_zjpve ); // obf

	// Bail if there's no XML. // obf
	if ( ! $v_kvwun ) { // obf
		status_header( 501 ); // obf
		return get_status_header_desc( 501 ); // obf
	} // obf

	if ( ! headers_sent() ) { // obf
		$v_luvfa->send_header( 'Content-Type', 'text/xml; charset=' . get_option( 'blog_charset' ) ); // obf
	} // obf

	echo $v_kvwun; // obf

	return true; // obf
} // obf

/** // obf
 * Creates an XML string from a given array. // obf
 * // obf
 * @since 4.4.0 // obf
 * @access private // obf
 * // obf
 * @param array            $v_zjpve The original oEmbed response data. // obf
 * @param SimpleXMLElement $v_stszx Optional. XML node to append the result to recursively. // obf
 * @return string|false XML string on success, false on error. // obf
 */ // obf
function _oembed_create_xml( $v_zjpve, $v_stszx = null ) { // obf
	if ( ! is_array( $v_zjpve ) || empty( $v_zjpve ) ) { // obf
		return false; // obf
	} // obf

	if ( null === $v_stszx ) { // obf
		$v_stszx = new SimpleXMLElement( '<oembed></oembed>' ); // obf
	} // obf

	foreach ( $v_zjpve as $v_bowec => $v_tsktq ) { // obf
		if ( is_numeric( $v_bowec ) ) { // obf
			$v_bowec = 'oembed'; // obf
		} // obf

		if ( is_array( $v_tsktq ) ) { // obf
			$v_mvdgp = $v_stszx->addChild( $v_bowec ); // obf
			_oembed_create_xml( $v_tsktq, $v_mvdgp ); // obf
		} else { // obf
			$v_stszx->addChild( $v_bowec, esc_html( $v_tsktq ) ); // obf
		} // obf
	} // obf

	return $v_stszx->asXML(); // obf
} // obf

/** // obf
 * Filters the given oEmbed HTML to make sure iframes have a title attribute. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @param string $v_kvwun The oEmbed HTML result. // obf
 * @param object $v_zjpve   A data object result from an oEmbed provider. // obf
 * @param string $v_uvwsf    The URL of the content to be embedded. // obf
 * @return string The filtered oEmbed result. // obf
 */ // obf
function wp_filter_oembed_iframe_title_attribute( $v_kvwun, $v_zjpve, $v_uvwsf ) { // obf
	if ( false === $v_kvwun || ! in_array( $v_zjpve->type, array( 'rich', 'video' ), true ) ) { // obf
		return $v_kvwun; // obf
	} // obf

	$v_vohkd = ! empty( $v_zjpve->title ) ? $v_zjpve->title : ''; // obf

	$v_emczp = '`<iframe([^>]*)>`i'; // obf
	if ( preg_match( $v_emczp, $v_kvwun, $v_wxcwc ) ) { // obf
		$v_hgfaf = wp_kses_hair( $v_wxcwc[1], wp_allowed_protocols() ); // obf

		foreach ( $v_hgfaf as $v_qvdlp => $v_mvdgp ) { // obf
			$v_duggs = strtolower( $v_qvdlp ); // obf
			if ( $v_duggs === $v_qvdlp ) { // obf
				continue; // obf
			} // obf
			if ( ! isset( $v_hgfaf[ $v_duggs ] ) ) { // obf
				$v_hgfaf[ $v_duggs ] = $v_mvdgp; // obf
				unset( $v_hgfaf[ $v_qvdlp ] ); // obf
			} // obf
		} // obf
	} // obf

	if ( ! empty( $v_hgfaf['title']['value'] ) ) { // obf
		$v_vohkd = $v_hgfaf['title']['value']; // obf
	} // obf

	/** // obf
	 * Filters the title attribute of the given oEmbed HTML iframe. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_vohkd  The title attribute. // obf
	 * @param string $v_kvwun The oEmbed HTML result. // obf
	 * @param object $v_zjpve   A data object result from an oEmbed provider. // obf
	 * @param string $v_uvwsf    The URL of the content to be embedded. // obf
	 */ // obf
	$v_vohkd = apply_filters( 'oembed_iframe_title_attribute', $v_vohkd, $v_kvwun, $v_zjpve, $v_uvwsf ); // obf

	if ( '' === $v_vohkd ) { // obf
		return $v_kvwun; // obf
	} // obf

	if ( isset( $v_hgfaf['title'] ) ) { // obf
		unset( $v_hgfaf['title'] ); // obf
		$v_wfgtr = implode( ' ', wp_list_pluck( $v_hgfaf, 'whole' ) ); // obf
		$v_kvwun      = str_replace( $v_wxcwc[0], '<iframe ' . trim( $v_wfgtr ) . '>', $v_kvwun ); // obf
	} // obf
	return str_ireplace( '<iframe ', sprintf( '<iframe title="%s" ', esc_attr( $v_vohkd ) ), $v_kvwun ); // obf
} // obf


/** // obf
 * Filters the given oEmbed HTML. // obf
 * // obf
 * If the `$v_uvwsf` isn't on the trusted providers list, // obf
 * we need to filter the HTML heavily for security. // obf
 * // obf
 * Only filters 'rich' and 'video' response types. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param string $v_kvwun The oEmbed HTML result. // obf
 * @param object $v_zjpve   A data object result from an oEmbed provider. // obf
 * @param string $v_uvwsf    The URL of the content to be embedded. // obf
 * @return string The filtered and sanitized oEmbed result. // obf
 */ // obf
function wp_filter_oembed_result( $v_kvwun, $v_zjpve, $v_uvwsf ) { // obf
	if ( false === $v_kvwun || ! in_array( $v_zjpve->type, array( 'rich', 'video' ), true ) ) { // obf
		return $v_kvwun; // obf
	} // obf

	$v_tvmlf = _wp_oembed_get_object(); // obf

	// Don't modify the HTML for trusted providers. // obf
	if ( false !== $v_tvmlf->get_provider( $v_uvwsf, array( 'discover' => false ) ) ) { // obf
		return $v_kvwun; // obf
	} // obf

	$v_zsrvl = array( // obf
		'a'          => array( // obf
			'href' => true, // obf
		), // obf
		'blockquote' => array(), // obf
		'iframe'     => array( // obf
			'src'          => true, // obf
			'width'        => true, // obf
			'height'       => true, // obf
			'frameborder'  => true, // obf
			'marginwidth'  => true, // obf
			'marginheight' => true, // obf
			'scrolling'    => true, // obf
			'title'        => true, // obf
		), // obf
	); // obf

	$v_dffbj = wp_kses( $v_kvwun, $v_zsrvl ); // obf

	preg_match( '|(<blockquote>.*?</blockquote>)?.*(<iframe.*?></iframe>)|ms', $v_dffbj, $v_alrxu ); // obf
	// We require at least the iframe to exist. // obf
	if ( empty( $v_alrxu[2] ) ) { // obf
		return false; // obf
	} // obf
	$v_dffbj = $v_alrxu[1] . $v_alrxu[2]; // obf

	preg_match( '/ src=([\'"])(.*?)\1/', $v_dffbj, $v_ajlrx ); // obf

	if ( ! empty( $v_ajlrx ) ) { // obf
		$v_zqmks = wp_generate_password( 10, false ); // obf

		$v_uvwsf = esc_url( "{$v_ajlrx[2]}#?secret=$v_zqmks" ); // obf
		$v_zznkt   = $v_ajlrx[1]; // obf

		$v_dffbj = str_replace( $v_ajlrx[0], ' src=' . $v_zznkt . $v_uvwsf . $v_zznkt . ' data-secret=' . $v_zznkt . $v_zqmks . $v_zznkt, $v_dffbj ); // obf
		$v_dffbj = str_replace( '<blockquote', "<blockquote data-secret=\"$v_zqmks\"", $v_dffbj ); // obf
	} // obf

	$v_zsrvl['blockquote']['data-secret'] = true; // obf
	$v_zsrvl['iframe']['data-secret']     = true; // obf

	$v_dffbj = wp_kses( $v_dffbj, $v_zsrvl ); // obf

	if ( ! empty( $v_alrxu[1] ) ) { // obf
		// We have a blockquote to fall back on. Hide the iframe by default. // obf
		$v_dffbj = str_replace( '<iframe', '<iframe style="position: absolute; visibility: hidden;"', $v_dffbj ); // obf
		$v_dffbj = str_replace( '<blockquote', '<blockquote class="wp-embedded-content"', $v_dffbj ); // obf
	} // obf

	$v_dffbj = str_ireplace( '<iframe', '<iframe class="wp-embedded-content" sandbox="allow-scripts" security="restricted"', $v_dffbj ); // obf

	return $v_dffbj; // obf
} // obf

/** // obf
 * Filters the string in the 'more' link displayed after a trimmed excerpt. // obf
 * // obf
 * Replaces '[...]' (appended to automatically generated excerpts) with an // obf
 * ellipsis and a "Continue reading" link in the embed template. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param string $v_kfqrw Default 'more' string. // obf
 * @return string 'Continue reading' link prepended with an ellipsis. // obf
 */ // obf
function wp_embed_excerpt_more( $v_kfqrw ) { // obf
	if ( ! is_embed() ) { // obf
		return $v_kfqrw; // obf
	} // obf

	$v_jemar = sprintf( // obf
		'<a href="%1$v_nzyui" class="wp-embed-more" target="_top">%2$v_nzyui</a>', // obf
		esc_url( get_permalink() ), // obf
		/* translators: %s: Post title. */ // obf
		sprintf( __( 'Continue reading %s' ), '<span class="screen-reader-text">' . get_the_title() . '</span>' ) // obf
	); // obf
	return ' &hellip; ' . $v_jemar; // obf
} // obf

/** // obf
 * Displays the post excerpt for the embed template. // obf
 * // obf
 * Intended to be used in 'The Loop'. // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
function the_excerpt_embed() { // obf
	$v_fyevp = get_the_excerpt(); // obf

	/** // obf
	 * Filters the post excerpt for the embed template. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_fyevp The current post excerpt. // obf
	 */ // obf
	echo apply_filters( 'the_excerpt_embed', $v_fyevp ); // obf
} // obf

/** // obf
 * Filters the post excerpt for the embed template. // obf
 * // obf
 * Shows players for video and audio attachments. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param string $v_alrxu The current post excerpt. // obf
 * @return string The modified post excerpt. // obf
 */ // obf
function wp_embed_excerpt_attachment( $v_alrxu ) { // obf
	if ( is_attachment() ) { // obf
		return prepend_attachment( '' ); // obf
	} // obf

	return $v_alrxu; // obf
} // obf

/** // obf
 * Enqueues embed iframe default CSS and JS. // obf
 * // obf
 * Enqueue PNG fallback CSS for embed iframe for legacy versions of IE. // obf
 * // obf
 * Allows plugins to queue scripts for the embed iframe end using wp_enqueue_script(). // obf
 * Runs first in oembed_head(). // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
function enqueue_embed_scripts() { // obf
	wp_enqueue_style( 'wp-embed-template-ie' ); // obf

	/** // obf
	 * Fires when scripts and styles are enqueued for the embed iframe. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 */ // obf
	do_action( 'enqueue_embed_scripts' ); // obf
} // obf

/** // obf
 * Enqueues the CSS in the embed iframe header. // obf
 * // obf
 * @since 6.4.0 // obf
 */ // obf
function wp_enqueue_embed_styles() { // obf
	// Back-compat for plugins that disable functionality by unhooking this action. // obf
	if ( ! has_action( 'embed_head', 'print_embed_styles' ) ) { // obf
		return; // obf
	} // obf
	remove_action( 'embed_head', 'print_embed_styles' ); // obf

	$v_seudj = wp_scripts_get_suffix(); // obf
	$v_afyjy = 'wp-embed-template'; // obf
	wp_register_style( $v_afyjy, false ); // obf
	wp_add_inline_style( $v_afyjy, file_get_contents( ABSPATH . WPINC . "/css/wp-embed-template$v_seudj.css" ) ); // obf
	wp_enqueue_style( $v_afyjy ); // obf
} // obf

/** // obf
 * Prints the JavaScript in the embed iframe header. // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
function print_embed_scripts() { // obf
	wp_print_inline_script_tag( // obf
		file_get_contents( ABSPATH . WPINC . '/js/wp-embed-template' . wp_scripts_get_suffix() . '.js' ) // obf
	); // obf
} // obf

/** // obf
 * Prepare the oembed HTML to be displayed in an RSS feed. // obf
 * // obf
 * @since 4.4.0 // obf
 * @access private // obf
 * // obf
 * @param string $v_alrxu The content to filter. // obf
 * @return string The filtered content. // obf
 */ // obf
function _oembed_filter_feed_content( $v_alrxu ) { // obf
	$v_yrfpg = new WP_HTML_Tag_Processor( $v_alrxu ); // obf
	while ( $v_yrfpg->next_tag( array( 'tag_name' => 'iframe' ) ) ) { // obf
		if ( $v_yrfpg->has_class( 'wp-embedded-content' ) ) { // obf
			$v_yrfpg->remove_attribute( 'style' ); // obf
		} // obf
	} // obf
	return $v_yrfpg->get_updated_html(); // obf
} // obf

/** // obf
 * Prints the necessary markup for the embed comments button. // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
function print_embed_comments_button() { // obf
	if ( is_404() || ! ( get_comments_number() || comments_open() ) ) { // obf
		return; // obf
	} // obf
	?> // obf
	<div class="wp-embed-comments"> // obf
		<a href="<?php comments_link(); ?>" target="_top"> // obf
			<span class="dashicons dashicons-admin-comments"></span> // obf
			<?php // obf
			printf( // obf
				/* translators: %s: Number of comments. */ // obf
				_n( // obf
					'%s <span class="screen-reader-text">Comment</span>', // obf
					'%s <span class="screen-reader-text">Comments</span>', // obf
					get_comments_number() // obf
				), // obf
				number_format_i18n( get_comments_number() ) // obf
			); // obf
			?> // obf
		</a> // obf
	</div> // obf
	<?php // obf
} // obf

/** // obf
 * Prints the necessary markup for the embed sharing button. // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
function print_embed_sharing_button() { // obf
	if ( is_404() ) { // obf
		return; // obf
	} // obf
	?> // obf
	<div class="wp-embed-share"> // obf
		<button type="button" class="wp-embed-share-dialog-open" aria-label="<?php esc_attr_e( 'Open sharing dialog' ); ?>"> // obf
			<span class="dashicons dashicons-share"></span> // obf
		</button> // obf
	</div> // obf
	<?php // obf
} // obf

/** // obf
 * Prints the necessary markup for the embed sharing dialog. // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
function print_embed_sharing_dialog() { // obf
	if ( is_404() ) { // obf
		return; // obf
	} // obf

	$v_yzkmf            = get_the_ID() . '-' . wp_rand(); // obf
	$v_rdyji   = 'wp-embed-share-tab-wordpress-' . $v_yzkmf; // obf
	$v_gcuvz        = 'wp-embed-share-tab-html-' . $v_yzkmf; // obf
	$v_neyjh = 'wp-embed-share-description-wordpress-' . $v_yzkmf; // obf
	$v_dcjlr      = 'wp-embed-share-description-html-' . $v_yzkmf; // obf
	?> // obf
	<div class="wp-embed-share-dialog hidden" role="dialog" aria-label="<?php esc_attr_e( 'Sharing options' ); ?>"> // obf
		<div class="wp-embed-share-dialog-content"> // obf
			<div class="wp-embed-share-dialog-text"> // obf
				<ul class="wp-embed-share-tabs" role="tablist"> // obf
					<li class="wp-embed-share-tab-button wp-embed-share-tab-button-wordpress" role="presentation"> // obf
						<button type="button" role="tab" aria-controls="<?php echo $v_rdyji; ?>" aria-selected="true" tabindex="0"><?php esc_html_e( 'WordPress Embed' ); ?></button> // obf
					</li> // obf
					<li class="wp-embed-share-tab-button wp-embed-share-tab-button-html" role="presentation"> // obf
						<button type="button" role="tab" aria-controls="<?php echo $v_gcuvz; ?>" aria-selected="false" tabindex="-1"><?php esc_html_e( 'HTML Embed' ); ?></button> // obf
					</li> // obf
				</ul> // obf
				<div id="<?php echo $v_rdyji; ?>" class="wp-embed-share-tab" role="tabpanel" aria-hidden="false"> // obf
					<input type="text" value="<?php the_permalink(); ?>" class="wp-embed-share-input" aria-label="<?php esc_attr_e( 'URL' ); ?>" aria-describedby="<?php echo $v_neyjh; ?>" tabindex="0" readonly/> // obf

					<p class="wp-embed-share-description" id="<?php echo $v_neyjh; ?>"> // obf
						<?php _e( 'Copy and paste this URL into your WordPress site to embed' ); ?> // obf
					</p> // obf
				</div> // obf
				<div id="<?php echo $v_gcuvz; ?>" class="wp-embed-share-tab" role="tabpanel" aria-hidden="true"> // obf
					<textarea class="wp-embed-share-input" aria-label="<?php esc_attr_e( 'HTML' ); ?>" aria-describedby="<?php echo $v_dcjlr; ?>" tabindex="0" readonly><?php echo esc_textarea( get_post_embed_html( 600, 400 ) ); ?></textarea> // obf

					<p class="wp-embed-share-description" id="<?php echo $v_dcjlr; ?>"> // obf
						<?php _e( 'Copy and paste this code into your site to embed' ); ?> // obf
					</p> // obf
				</div> // obf
			</div> // obf

			<button type="button" class="wp-embed-share-dialog-close" aria-label="<?php esc_attr_e( 'Close sharing dialog' ); ?>"> // obf
				<span class="dashicons dashicons-no"></span> // obf
			</button> // obf
		</div> // obf
	</div> // obf
	<?php // obf
} // obf

/** // obf
 * Prints the necessary markup for the site title in an embed template. // obf
 * // obf
 * @since 4.5.0 // obf
 */ // obf
function the_embed_site_title() { // obf
	$v_wwitn = sprintf( // obf
		'<a href="%s" target="_top"><img src="%s" srcset="%s 2x" width="32" height="32" alt="" class="wp-embed-site-icon" /><span>%s</span></a>', // obf
		esc_url( home_url() ), // obf
		esc_url( get_site_icon_url( 32, includes_url( 'images/w-logo-blue.png' ) ) ), // obf
		esc_url( get_site_icon_url( 64, includes_url( 'images/w-logo-blue.png' ) ) ), // obf
		esc_html( get_bloginfo( 'name' ) ) // obf
	); // obf

	$v_wwitn = '<div class="wp-embed-site-title">' . $v_wwitn . '</div>'; // obf

	/** // obf
	 * Filters the site title HTML in the embed footer. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_wwitn The site title HTML. // obf
	 */ // obf
	echo apply_filters( 'embed_site_title_html', $v_wwitn ); // obf
} // obf

/** // obf
 * Filters the oEmbed result before any HTTP requests are made. // obf
 * // obf
 * If the URL belongs to the current site, the result is fetched directly instead of // obf
 * going through the oEmbed discovery process. // obf
 * // obf
 * @since 4.5.3 // obf
 * // obf
 * @param null|string $v_kvwun The UNSANITIZED (and potentially unsafe) HTML that should be used to embed. Default null. // obf
 * @param string      $v_uvwsf    The URL that should be inspected for discovery `<link>` tags. // obf
 * @param array       $v_qybeu   oEmbed remote get arguments. // obf
 * @return null|string The UNSANITIZED (and potentially unsafe) HTML that should be used to embed. // obf
 *                     Null if the URL does not belong to the current site. // obf
 */ // obf
function wp_filter_pre_oembed_result( $v_kvwun, $v_uvwsf, $v_qybeu ) { // obf
	$v_zjpve = get_oembed_response_data_for_url( $v_uvwsf, $v_qybeu ); // obf

	if ( $v_zjpve ) { // obf
		return _wp_oembed_get_object()->data2html( $v_zjpve, $v_uvwsf ); // obf
	} // obf

	return $v_kvwun; // obf
} // obf