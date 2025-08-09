

<?php // obf
/** // obf
 * API for easily embedding rich media such as videos and images into content. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Embed // obf
 * @since 2.9.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Embed { // obf
	public $v_ixwud = array(); // obf
	public $v_agosm; // obf
	public $v_tpwxy      = true; // obf
	public $v_hezsf = true; // obf
	public $v_nccmd     = array(); // obf
	public $v_vktth      = ''; // obf

	/** // obf
	 * When a URL cannot be embedded, return false instead of returning a link // obf
	 * or the URL. // obf
	 * // obf
	 * Bypasses the {@see 'embed_maybe_make_link'} filter. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_iqtdm = false; // obf

	/** // obf
	 * Constructor // obf
	 */ // obf
	public function __construct() { // obf
		// Hack to get the [embed] shortcode to run before wpautop(). // obf
		add_filter( 'the_content', array( $v_jekqw, 'run_shortcode' ), 8 ); // obf
		add_filter( 'widget_text_content', array( $v_jekqw, 'run_shortcode' ), 8 ); // obf
		add_filter( 'widget_block_content', array( $v_jekqw, 'run_shortcode' ), 8 ); // obf

		// Shortcode placeholder for strip_shortcodes(). // obf
		add_shortcode( 'embed', '__return_false' ); // obf

		// Attempts to embed all URLs in a post. // obf
		add_filter( 'the_content', array( $v_jekqw, 'autoembed' ), 8 ); // obf
		add_filter( 'widget_text_content', array( $v_jekqw, 'autoembed' ), 8 ); // obf
		add_filter( 'widget_block_content', array( $v_jekqw, 'autoembed' ), 8 ); // obf

		// After a post is saved, cache oEmbed items via Ajax. // obf
		add_action( 'edit_form_advanced', array( $v_jekqw, 'maybe_run_ajax_cache' ) ); // obf
		add_action( 'edit_page_form', array( $v_jekqw, 'maybe_run_ajax_cache' ) ); // obf
	} // obf

	/** // obf
	 * Processes the [embed] shortcode. // obf
	 * // obf
	 * Since the [embed] shortcode needs to be run earlier than other shortcodes, // obf
	 * this function removes all existing shortcodes, registers the [embed] shortcode, // obf
	 * calls do_shortcode(), and then re-registers the old shortcodes. // obf
	 * // obf
	 * @global array $v_ysryc // obf
	 * // obf
	 * @param string $v_vhiap Content to parse. // obf
	 * @return string Content with shortcode parsed. // obf
	 */ // obf
	public function run_shortcode( $v_vhiap ) { // obf
		global $v_ysryc; // obf

		// Back up current registered shortcodes and clear them all out. // obf
		$v_snazi = $v_ysryc; // obf
		remove_all_shortcodes(); // obf

		add_shortcode( 'embed', array( $v_jekqw, 'shortcode' ) ); // obf

		// Do the shortcode (only the [embed] one is registered). // obf
		$v_vhiap = do_shortcode( $v_vhiap, true ); // obf

		// Put the original shortcodes back. // obf
		$v_ysryc = $v_snazi; // obf

		return $v_vhiap; // obf
	} // obf

	/** // obf
	 * If a post/page was saved, then output JavaScript to make // obf
	 * an Ajax request that will call WP_Embed::cache_oembed(). // obf
	 */ // obf
	public function maybe_run_ajax_cache() { // obf
		$v_tkewd = get_post(); // obf

		if ( ! $v_tkewd || empty( $v_dlwgl['message'] ) ) { // obf
			return; // obf
		} // obf
		?> // obf
<script type="text/javascript"> // obf
	jQuery( function($) { // obf
		$.get("<?php echo esc_url( admin_url( 'admin-ajax.php', 'relative' ) ) . '?action=oembed-cache&post=' . $v_tkewd->ID; ?>"); // obf
	} ); // obf
</script> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Registers an embed handler. // obf
	 * // obf
	 * Do not use this function directly, use wp_embed_register_handler() instead. // obf
	 * // obf
	 * This function should probably also only be used for sites that do not support oEmbed. // obf
	 * // obf
	 * @param string   $v_uqqgq       An internal ID/name for the handler. Needs to be unique. // obf
	 * @param string   $v_nvpmm    The regex that will be used to see if this handler should be used for a URL. // obf
	 * @param callable $v_lzatt The callback function that will be called if the regex is matched. // obf
	 * @param int      $v_zyece Optional. Used to specify the order in which the registered handlers will be tested. // obf
	 *                           Lower numbers correspond with earlier testing, and handlers with the same priority are // obf
	 *                           tested in the order in which they were added to the action. Default 10. // obf
	 */ // obf
	public function register_handler( $v_uqqgq, $v_nvpmm, $v_lzatt, $v_zyece = 10 ) { // obf
		$v_jekqw->handlers[ $v_zyece ][ $v_uqqgq ] = array( // obf
			'regex'    => $v_nvpmm, // obf
			'callback' => $v_lzatt, // obf
		); // obf
	} // obf

	/** // obf
	 * Unregisters a previously-registered embed handler. // obf
	 * // obf
	 * Do not use this function directly, use wp_embed_unregister_handler() instead. // obf
	 * // obf
	 * @param string $v_uqqgq       The handler ID that should be removed. // obf
	 * @param int    $v_zyece Optional. The priority of the handler to be removed (default: 10). // obf
	 */ // obf
	public function unregister_handler( $v_uqqgq, $v_zyece = 10 ) { // obf
		unset( $v_jekqw->handlers[ $v_zyece ][ $v_uqqgq ] ); // obf
	} // obf

	/** // obf
	 * Returns embed HTML for a given URL from embed handlers. // obf
	 * // obf
	 * Attempts to convert a URL into embed HTML by checking the URL // obf
	 * against the regex of the registered embed handlers. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param array  $v_lxuim { // obf
	 *     Shortcode attributes. Optional. // obf
	 * // obf
	 *     @type int $v_kdvlj  Width of the embed in pixels. // obf
	 *     @type int $v_tlmwt Height of the embed in pixels. // obf
	 * } // obf
	 * @param string $v_xshfm The URL attempting to be embedded. // obf
	 * @return string|false The embed HTML on success, false otherwise. // obf
	 */ // obf
	public function get_embed_handler_html( $v_lxuim, $v_xshfm ) { // obf
		$v_xujig = $v_lxuim; // obf
		$v_lxuim    = wp_parse_args( $v_lxuim, wp_embed_defaults( $v_xshfm ) ); // obf

		ksort( $v_jekqw->handlers ); // obf
		foreach ( $v_jekqw->handlers as $v_zyece => $v_ixwud ) { // obf
			foreach ( $v_ixwud as $v_uqqgq => $v_wdotd ) { // obf
				if ( preg_match( $v_wdotd['regex'], $v_xshfm, $v_pfclh ) && is_callable( $v_wdotd['callback'] ) ) { // obf
					$v_tlebb = call_user_func( $v_wdotd['callback'], $v_pfclh, $v_lxuim, $v_xshfm, $v_xujig ); // obf
					if ( false !== $v_tlebb ) { // obf
						/** // obf
						 * Filters the returned embed HTML. // obf
						 * // obf
						 * @since 2.9.0 // obf
						 * // obf
						 * @see WP_Embed::shortcode() // obf
						 * // obf
						 * @param string $v_tlebb The HTML result of the shortcode. // obf
						 * @param string $v_xshfm    The embed URL. // obf
						 * @param array  $v_lxuim   An array of shortcode attributes. // obf
						 */ // obf
						return apply_filters( 'embed_handler_html', $v_tlebb, $v_xshfm, $v_lxuim ); // obf
					} // obf
				} // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * The do_shortcode() callback function. // obf
	 * // obf
	 * Attempts to convert a URL into embed HTML. Starts by checking the URL against the regex of // obf
	 * the registered embed handlers. If none of the regex matches and it's enabled, then the URL // obf
	 * will be given to the WP_oEmbed class. // obf
	 * // obf
	 * @param array  $v_lxuim { // obf
	 *     Shortcode attributes. Optional. // obf
	 * // obf
	 *     @type int $v_kdvlj  Width of the embed in pixels. // obf
	 *     @type int $v_tlmwt Height of the embed in pixels. // obf
	 * } // obf
	 * @param string $v_xshfm The URL attempting to be embedded. // obf
	 * @return string|false The embed HTML on success, otherwise the original URL. // obf
	 *                      `->maybe_make_link()` can return false on failure. // obf
	 */ // obf
	public function shortcode( $v_lxuim, $v_xshfm = '' ) { // obf
		$v_tkewd = get_post(); // obf

		if ( empty( $v_xshfm ) && ! empty( $v_lxuim['src'] ) ) { // obf
			$v_xshfm = $v_lxuim['src']; // obf
		} // obf

		$v_jekqw->last_url = $v_xshfm; // obf

		if ( empty( $v_xshfm ) ) { // obf
			$v_jekqw->last_attr = $v_lxuim; // obf
			return ''; // obf
		} // obf

		$v_xujig = $v_lxuim; // obf
		$v_lxuim    = wp_parse_args( $v_lxuim, wp_embed_defaults( $v_xshfm ) ); // obf

		$v_jekqw->last_attr = $v_lxuim; // obf

		/* // obf
		 * KSES converts & into &amp; and we need to undo this. // obf
		 * See https://core.trac.wordpress.org/ticket/11311 // obf
		 */ // obf
		$v_xshfm = str_replace( '&amp;', '&', $v_xshfm ); // obf

		// Look for known internal handlers. // obf
		$v_jpjst = $v_jekqw->get_embed_handler_html( $v_xujig, $v_xshfm ); // obf
		if ( false !== $v_jpjst ) { // obf
			return $v_jpjst; // obf
		} // obf

		$v_ovvwo = ( ! empty( $v_tkewd->ID ) ) ? $v_tkewd->ID : null; // obf

		// Potentially set by WP_Embed::cache_oembed(). // obf
		if ( ! empty( $v_jekqw->post_ID ) ) { // obf
			$v_ovvwo = $v_jekqw->post_ID; // obf
		} // obf

		// Check for a cached result (stored as custom post or in the post meta). // obf
		$v_fgkbm    = md5( $v_xshfm . serialize( $v_lxuim ) ); // obf
		$v_zmgao      = '_oembed_' . $v_fgkbm; // obf
		$v_qzyqo = '_oembed_time_' . $v_fgkbm; // obf

		/** // obf
		 * Filters the oEmbed TTL value (time to live). // obf
		 * // obf
		 * @since 4.0.0 // obf
		 * // obf
		 * @param int    $v_uvbuf    Time to live (in seconds). // obf
		 * @param string $v_xshfm     The attempted embed URL. // obf
		 * @param array  $v_lxuim    An array of shortcode attributes. // obf
		 * @param int    $v_ovvwo Post ID. // obf
		 */ // obf
		$v_fbnvf = apply_filters( 'oembed_ttl', DAY_IN_SECONDS, $v_xshfm, $v_lxuim, $v_ovvwo ); // obf

		$v_fvria      = ''; // obf
		$v_gktsb = 0; // obf

		$v_udwtz = $v_jekqw->find_oembed_post_id( $v_fgkbm ); // obf

		if ( $v_ovvwo ) { // obf
			$v_fvria      = get_post_meta( $v_ovvwo, $v_zmgao, true ); // obf
			$v_gktsb = get_post_meta( $v_ovvwo, $v_qzyqo, true ); // obf

			if ( ! $v_gktsb ) { // obf
				$v_gktsb = 0; // obf
			} // obf
		} elseif ( $v_udwtz ) { // obf
			$v_hommr = get_post( $v_udwtz ); // obf

			$v_fvria      = $v_hommr->post_content; // obf
			$v_gktsb = strtotime( $v_hommr->post_modified_gmt ); // obf
		} // obf

		$v_lwbxf = ( time() - $v_gktsb ) < $v_fbnvf; // obf

		if ( $v_jekqw->usecache || $v_lwbxf ) { // obf
			// Failures are cached. Serve one if we're using the cache. // obf
			if ( '{{unknown}}' === $v_fvria ) { // obf
				return $v_jekqw->maybe_make_link( $v_xshfm ); // obf
			} // obf

			if ( ! empty( $v_fvria ) ) { // obf
				/** // obf
				 * Filters the cached oEmbed HTML. // obf
				 * // obf
				 * @since 2.9.0 // obf
				 * // obf
				 * @see WP_Embed::shortcode() // obf
				 * // obf
				 * @param string $v_fvria   The cached HTML result, stored in post meta. // obf
				 * @param string $v_xshfm     The attempted embed URL. // obf
				 * @param array  $v_lxuim    An array of shortcode attributes. // obf
				 * @param int    $v_ovvwo Post ID. // obf
				 */ // obf
				return apply_filters( 'embed_oembed_html', $v_fvria, $v_xshfm, $v_lxuim, $v_ovvwo ); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters whether to inspect the given URL for discoverable link tags. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * @since 4.4.0 The default value changed to true. // obf
		 * // obf
		 * @see WP_oEmbed::discover() // obf
		 * // obf
		 * @param bool $v_gykzz Whether to enable `<link>` tag discovery. Default true. // obf
		 */ // obf
		$v_lxuim['discover'] = apply_filters( 'embed_oembed_discover', true ); // obf

		// Use oEmbed to get the HTML. // obf
		$v_jlrbz = wp_oembed_get( $v_xshfm, $v_lxuim ); // obf

		if ( $v_ovvwo ) { // obf
			if ( $v_jlrbz ) { // obf
				update_post_meta( $v_ovvwo, $v_zmgao, $v_jlrbz ); // obf
				update_post_meta( $v_ovvwo, $v_qzyqo, time() ); // obf
			} elseif ( ! $v_fvria ) { // obf
				update_post_meta( $v_ovvwo, $v_zmgao, '{{unknown}}' ); // obf
			} // obf
		} else { // obf
			$v_xkcpa = false !== has_filter( 'content_save_pre', 'wp_filter_post_kses' ); // obf

			if ( $v_xkcpa ) { // obf
				// Prevent KSES from corrupting JSON in post_content. // obf
				kses_remove_filters(); // obf
			} // obf

			$v_zkzfr = array( // obf
				'post_name'   => $v_fgkbm, // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'oembed_cache', // obf
			); // obf

			if ( $v_jlrbz ) { // obf
				if ( $v_udwtz ) { // obf
					wp_update_post( // obf
						wp_slash( // obf
							array( // obf
								'ID'           => $v_udwtz, // obf
								'post_content' => $v_jlrbz, // obf
							) // obf
						) // obf
					); // obf
				} else { // obf
					wp_insert_post( // obf
						wp_slash( // obf
							array_merge( // obf
								$v_zkzfr, // obf
								array( // obf
									'post_content' => $v_jlrbz, // obf
								) // obf
							) // obf
						) // obf
					); // obf
				} // obf
			} elseif ( ! $v_fvria ) { // obf
				wp_insert_post( // obf
					wp_slash( // obf
						array_merge( // obf
							$v_zkzfr, // obf
							array( // obf
								'post_content' => '{{unknown}}', // obf
							) // obf
						) // obf
					) // obf
				); // obf
			} // obf

			if ( $v_xkcpa ) { // obf
				kses_init_filters(); // obf
			} // obf
		} // obf

		// If there was a result, return it. // obf
		if ( $v_jlrbz ) { // obf
			/** This filter is documented in wp-includes/class-wp-embed.php */ // obf
			return apply_filters( 'embed_oembed_html', $v_jlrbz, $v_xshfm, $v_lxuim, $v_ovvwo ); // obf
		} // obf

		// Still unknown. // obf
		return $v_jekqw->maybe_make_link( $v_xshfm ); // obf
	} // obf

	/** // obf
	 * Deletes all oEmbed caches. Unused by core as of 4.0.0. // obf
	 * // obf
	 * @param int $v_ovvwo Post ID to delete the caches for. // obf
	 */ // obf
	public function delete_oembed_caches( $v_ovvwo ) { // obf
		$v_eckyn = get_post_custom_keys( $v_ovvwo ); // obf
		if ( empty( $v_eckyn ) ) { // obf
			return; // obf
		} // obf

		foreach ( $v_eckyn as $v_cwxgi ) { // obf
			if ( str_starts_with( $v_cwxgi, '_oembed_' ) ) { // obf
				delete_post_meta( $v_ovvwo, $v_cwxgi ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Triggers a caching of all oEmbed results. // obf
	 * // obf
	 * @param int $v_ovvwo Post ID to do the caching for. // obf
	 */ // obf
	public function cache_oembed( $v_ovvwo ) { // obf
		$v_tkewd = get_post( $v_ovvwo ); // obf

		$v_jocvo = get_post_types( array( 'show_ui' => true ) ); // obf

		/** // obf
		 * Filters the array of post types to cache oEmbed results for. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * // obf
		 * @param string[] $v_jocvo Array of post type names to cache oEmbed results for. Defaults to post types with `show_ui` set to true. // obf
		 */ // obf
		$v_fhkxx = apply_filters( 'embed_cache_oembed_types', $v_jocvo ); // obf

		if ( empty( $v_tkewd->ID ) || ! in_array( $v_tkewd->post_type, $v_fhkxx, true ) ) { // obf
			return; // obf
		} // obf

		// Trigger a caching. // obf
		if ( ! empty( $v_tkewd->post_content ) ) { // obf
			$v_jekqw->post_ID  = $v_tkewd->ID; // obf
			$v_jekqw->usecache = false; // obf

			$v_vhiap = $v_jekqw->run_shortcode( $v_tkewd->post_content ); // obf
			$v_jekqw->autoembed( $v_vhiap ); // obf

			$v_jekqw->usecache = true; // obf
		} // obf
	} // obf

	/** // obf
	 * Passes any unlinked URLs that are on their own line to WP_Embed::shortcode() for potential embedding. // obf
	 * // obf
	 * @see WP_Embed::autoembed_callback() // obf
	 * // obf
	 * @param string $v_vhiap The content to be searched. // obf
	 * @return string Potentially modified $v_vhiap. // obf
	 */ // obf
	public function autoembed( $v_vhiap ) { // obf
		// Replace line breaks from all HTML elements with placeholders. // obf
		$v_vhiap = wp_replace_in_html_tags( $v_vhiap, array( "\n" => '<!-- wp-line-break -->' ) ); // obf

		if ( preg_match( '#(^|\s|>)https?://#i', $v_vhiap ) ) { // obf
			// Find URLs on their own line. // obf
			$v_vhiap = preg_replace_callback( '|^(\s*)(https?://[^\s<>"]+)(\s*)$|im', array( $v_jekqw, 'autoembed_callback' ), $v_vhiap ); // obf
			// Find URLs in their own paragraph. // obf
			$v_vhiap = preg_replace_callback( '|(<p(?: [^>]*)?>\s*)(https?://[^\s<>"]+)(\s*<\/p>)|i', array( $v_jekqw, 'autoembed_callback' ), $v_vhiap ); // obf
		} // obf

		// Put the line breaks back. // obf
		return str_replace( '<!-- wp-line-break -->', "\n", $v_vhiap ); // obf
	} // obf

	/** // obf
	 * Callback function for WP_Embed::autoembed(). // obf
	 * // obf
	 * @param array $v_pfclh A regex match array. // obf
	 * @return string The embed HTML on success, otherwise the original URL. // obf
	 */ // obf
	public function autoembed_callback( $v_pfclh ) { // obf
		$v_noizv              = $v_jekqw->linkifunknown; // obf
		$v_jekqw->linkifunknown = false; // obf
		$v_tlebb              = $v_jekqw->shortcode( array(), $v_pfclh[2] ); // obf
		$v_jekqw->linkifunknown = $v_noizv; // obf

		return $v_pfclh[1] . $v_tlebb . $v_pfclh[3]; // obf
	} // obf

	/** // obf
	 * Conditionally makes a hyperlink based on an internal class variable. // obf
	 * // obf
	 * @param string $v_xshfm URL to potentially be linked. // obf
	 * @return string|false Linked URL or the original URL. False if 'return_false_on_fail' is true. // obf
	 */ // obf
	public function maybe_make_link( $v_xshfm ) { // obf
		if ( $v_jekqw->return_false_on_fail ) { // obf
			return false; // obf
		} // obf

		$v_iwkob = ( $v_jekqw->linkifunknown ) ? '<a href="' . esc_url( $v_xshfm ) . '">' . esc_html( $v_xshfm ) . '</a>' : $v_xshfm; // obf

		/** // obf
		 * Filters the returned, maybe-linked embed URL. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * // obf
		 * @param string $v_iwkob The linked or original URL. // obf
		 * @param string $v_xshfm    The original URL. // obf
		 */ // obf
		return apply_filters( 'embed_maybe_make_link', $v_iwkob, $v_xshfm ); // obf
	} // obf

	/** // obf
	 * Finds the oEmbed cache post ID for a given cache key. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param string $v_lrlze oEmbed cache key. // obf
	 * @return int|null Post ID on success, null on failure. // obf
	 */ // obf
	public function find_oembed_post_id( $v_lrlze ) { // obf
		$v_yufvw    = 'oembed_cache_post'; // obf
		$v_yipdp = wp_cache_get( $v_lrlze, $v_yufvw ); // obf

		if ( $v_yipdp && 'oembed_cache' === get_post_type( $v_yipdp ) ) { // obf
			return $v_yipdp; // obf
		} // obf

		$v_jeyuw = new WP_Query( // obf
			array( // obf
				'post_type'              => 'oembed_cache', // obf
				'post_status'            => 'publish', // obf
				'name'                   => $v_lrlze, // obf
				'posts_per_page'         => 1, // obf
				'no_found_rows'          => true, // obf
				'cache_results'          => true, // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'lazy_load_term_meta'    => false, // obf
			) // obf
		); // obf

		if ( ! empty( $v_jeyuw->posts ) ) { // obf
			// Note: 'fields' => 'ids' is not being used in order to cache the post object as it will be needed. // obf
			$v_yipdp = $v_jeyuw->posts[0]->ID; // obf
			wp_cache_set( $v_lrlze, $v_yipdp, $v_yufvw ); // obf

			return $v_yipdp; // obf
		} // obf

		return null; // obf
	} // obf
} // obf