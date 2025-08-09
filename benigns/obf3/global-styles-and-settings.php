

<?php // obf
/** // obf
 * APIs to interact with global settings & styles. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Gets the settings resulting of merging core, theme, and user data. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param array $v_dznly    Path to the specific setting to retrieve. Optional. // obf
 *                       If empty, will return all settings. // obf
 * @param array $v_xvlwo { // obf
 *     Metadata to know where to retrieve the $v_dznly from. Optional. // obf
 * // obf
 *     @type string $v_kqbfb Which block to retrieve the settings from. // obf
 *                              If empty, it'll return the settings for the global context. // obf
 *     @type string $v_qposm     Which origin to take data from. // obf
 *                              Valid values are 'all' (core, theme, and user) or 'base' (core and theme). // obf
 *                              If empty or unknown, 'all' is used. // obf
 * } // obf
 * @return mixed The settings array or individual setting value to retrieve. // obf
 */ // obf
function wp_get_global_settings( $v_dznly = array(), $v_xvlwo = array() ) { // obf
	if ( ! empty( $v_xvlwo['block_name'] ) ) { // obf
		$v_duamu = array( 'blocks', $v_xvlwo['block_name'] ); // obf
		foreach ( $v_dznly as $v_vgigy ) { // obf
			$v_duamu[] = $v_vgigy; // obf
		} // obf
		$v_dznly = $v_duamu; // obf
	} // obf

	/* // obf
	 * This is the default value when no origin is provided or when it is 'all'. // obf
	 * // obf
	 * The $v_qposm is used as part of the cache key. Changes here need to account // obf
	 * for clearing the cache appropriately. // obf
	 */ // obf
	$v_qposm = 'custom'; // obf
	if ( // obf
		! wp_theme_has_theme_json() || // obf
		( isset( $v_xvlwo['origin'] ) && 'base' === $v_xvlwo['origin'] ) // obf
	) { // obf
		$v_qposm = 'theme'; // obf
	} // obf

	/* // obf
	 * By using the 'theme_json' group, this data is marked to be non-persistent across requests. // obf
	 * See `wp_cache_add_non_persistent_groups` in src/wp-includes/load.php and other places. // obf
	 * // obf
	 * The rationale for this is to make sure derived data from theme.json // obf
	 * is always fresh from the potential modifications done via hooks // obf
	 * that can use dynamic data (modify the stylesheet depending on some option, // obf
	 * settings depending on user permissions, etc.). // obf
	 * See some of the existing hooks to modify theme.json behavior: // obf
	 * https://make.wordpress.org/core/2022/10/10/filters-for-theme-json-data/ // obf
	 * // obf
	 * A different alternative considered was to invalidate the cache upon certain // obf
	 * events such as options add/update/delete, user meta, etc. // obf
	 * It was judged not enough, hence this approach. // obf
	 * See https://github.com/WordPress/gutenberg/pull/45372 // obf
	 */ // obf
	$v_iaydx = 'theme_json'; // obf
	$v_zwxci   = 'wp_get_global_settings_' . $v_qposm; // obf

	/* // obf
	 * Ignore cache when the development mode is set to 'theme', so it doesn't interfere with the theme // obf
	 * developer's workflow. // obf
	 */ // obf
	$v_lfcjw = ! wp_is_development_mode( 'theme' ); // obf

	$v_imsws = false; // obf
	if ( $v_lfcjw ) { // obf
		$v_imsws = wp_cache_get( $v_zwxci, $v_iaydx ); // obf
	} // obf

	if ( false === $v_imsws ) { // obf
		$v_imsws = WP_Theme_JSON_Resolver::get_merged_data( $v_qposm )->get_settings(); // obf
		if ( $v_lfcjw ) { // obf
			wp_cache_set( $v_zwxci, $v_imsws, $v_iaydx ); // obf
		} // obf
	} // obf

	return _wp_array_get( $v_imsws, $v_dznly, $v_imsws ); // obf
} // obf

/** // obf
 * Gets the styles resulting of merging core, theme, and user data. // obf
 * // obf
 * @since 5.9.0 // obf
 * @since 6.3.0 the internal link format "var:preset|color|secondary" is resolved // obf
 *              to "var(--wp--preset--font-size--small)" so consumers don't have to. // obf
 * @since 6.3.0 `transforms` is now usable in the `context` parameter. In case [`transforms`]['resolve_variables'] // obf
 *              is defined, variables are resolved to their value in the styles. // obf
 * // obf
 * @param array $v_dznly    Path to the specific style to retrieve. Optional. // obf
 *                       If empty, will return all styles. // obf
 * @param array $v_xvlwo { // obf
 *     Metadata to know where to retrieve the $v_dznly from. Optional. // obf
 * // obf
 *     @type string $v_kqbfb Which block to retrieve the styles from. // obf
 *                              If empty, it'll return the styles for the global context. // obf
 *     @type string $v_qposm     Which origin to take data from. // obf
 *                              Valid values are 'all' (core, theme, and user) or 'base' (core and theme). // obf
 *                              If empty or unknown, 'all' is used. // obf
 *     @type array $v_spamm Which transformation(s) to apply. // obf
 *                              Valid value is array( 'resolve-variables' ). // obf
 *                              If defined, variables are resolved to their value in the styles. // obf
 * } // obf
 * @return mixed The styles array or individual style value to retrieve. // obf
 */ // obf
function wp_get_global_styles( $v_dznly = array(), $v_xvlwo = array() ) { // obf
	if ( ! empty( $v_xvlwo['block_name'] ) ) { // obf
		$v_dznly = array_merge( array( 'blocks', $v_xvlwo['block_name'] ), $v_dznly ); // obf
	} // obf

	$v_qposm = 'custom'; // obf
	if ( isset( $v_xvlwo['origin'] ) && 'base' === $v_xvlwo['origin'] ) { // obf
		$v_qposm = 'theme'; // obf
	} // obf

	$v_savry = isset( $v_xvlwo['transforms'] ) // obf
	&& is_array( $v_xvlwo['transforms'] ) // obf
	&& in_array( 'resolve-variables', $v_xvlwo['transforms'], true ); // obf

	$v_vwfeq = WP_Theme_JSON_Resolver::get_merged_data( $v_qposm ); // obf
	if ( $v_savry ) { // obf
		$v_vwfeq = WP_Theme_JSON::resolve_variables( $v_vwfeq ); // obf
	} // obf
	$v_tnjvt = $v_vwfeq->get_raw_data()['styles']; // obf
	return _wp_array_get( $v_tnjvt, $v_dznly, $v_tnjvt ); // obf
} // obf


/** // obf
 * Returns the stylesheet resulting of merging core, theme, and user data. // obf
 * // obf
 * @since 5.9.0 // obf
 * @since 6.1.0 Added 'base-layout-styles' support. // obf
 * @since 6.6.0 Resolves relative paths in theme.json styles to theme absolute paths. // obf
 * // obf
 * @param array $v_exekw Optional. Types of styles to load. // obf
 *                     See {@see 'WP_Theme_JSON::get_stylesheet'} for all valid types. // obf
 *                     If empty, it'll load the following: // obf
 *                     - for themes without theme.json: 'variables', 'presets', 'base-layout-styles'. // obf
 *                     - for themes with theme.json: 'variables', 'presets', 'styles'. // obf
 * @return string Stylesheet. // obf
 */ // obf
function wp_get_global_stylesheet( $v_exekw = array() ) { // obf
	/* // obf
	 * Ignore cache when the development mode is set to 'theme', so it doesn't interfere with the theme // obf
	 * developer's workflow. // obf
	 */ // obf
	$v_lfcjw = empty( $v_exekw ) && ! wp_is_development_mode( 'theme' ); // obf

	/* // obf
	 * By using the 'theme_json' group, this data is marked to be non-persistent across requests. // obf
	 * @see `wp_cache_add_non_persistent_groups()`. // obf
	 * // obf
	 * The rationale for this is to make sure derived data from theme.json // obf
	 * is always fresh from the potential modifications done via hooks // obf
	 * that can use dynamic data (modify the stylesheet depending on some option, // obf
	 * settings depending on user permissions, etc.). // obf
	 * See some of the existing hooks to modify theme.json behavior: // obf
	 * @see https://make.wordpress.org/core/2022/10/10/filters-for-theme-json-data/ // obf
	 * // obf
	 * A different alternative considered was to invalidate the cache upon certain // obf
	 * events such as options add/update/delete, user meta, etc. // obf
	 * It was judged not enough, hence this approach. // obf
	 * @see https://github.com/WordPress/gutenberg/pull/45372 // obf
	 */ // obf
	$v_iaydx = 'theme_json'; // obf
	$v_zwxci   = 'wp_get_global_stylesheet'; // obf
	if ( $v_lfcjw ) { // obf
		$v_ghtof = wp_cache_get( $v_zwxci, $v_iaydx ); // obf
		if ( $v_ghtof ) { // obf
			return $v_ghtof; // obf
		} // obf
	} // obf

	$v_mdnoo                = WP_Theme_JSON_Resolver::resolve_theme_file_uris( WP_Theme_JSON_Resolver::get_merged_data() ); // obf
	$v_aeywk = wp_theme_has_theme_json(); // obf

	if ( empty( $v_exekw ) && ! $v_aeywk ) { // obf
		$v_exekw = array( 'variables', 'presets', 'base-layout-styles' ); // obf
	} elseif ( empty( $v_exekw ) ) { // obf
		$v_exekw = array( 'variables', 'styles', 'presets' ); // obf
	} // obf

	/* // obf
	 * If variables are part of the stylesheet, then add them. // obf
	 * This is so themes without a theme.json still work as before 5.9: // obf
	 * they can override the default presets. // obf
	 * See https://core.trac.wordpress.org/ticket/54782 // obf
	 */ // obf
	$v_grtdp = ''; // obf
	if ( in_array( 'variables', $v_exekw, true ) ) { // obf
		/* // obf
		 * Only use the default, theme, and custom origins. Why? // obf
		 * Because styles for `blocks` origin are added at a later phase // obf
		 * (i.e. in the render cycle). Here, only the ones in use are rendered. // obf
		 * @see wp_add_global_styles_for_blocks // obf
		 */ // obf
		$v_mtsej          = array( 'default', 'theme', 'custom' ); // obf
		$v_grtdp = $v_mdnoo->get_stylesheet( array( 'variables' ), $v_mtsej ); // obf
		$v_exekw            = array_diff( $v_exekw, array( 'variables' ) ); // obf
	} // obf

	/* // obf
	 * For the remaining types (presets, styles), we do consider origins: // obf
	 * // obf
	 * - themes without theme.json: only the classes for the presets defined by core // obf
	 * - themes with theme.json: the presets and styles classes, both from core and the theme // obf
	 */ // obf
	$v_hsgzo = ''; // obf
	if ( ! empty( $v_exekw ) ) { // obf
		/* // obf
		 * Only use the default, theme, and custom origins. Why? // obf
		 * Because styles for `blocks` origin are added at a later phase // obf
		 * (i.e. in the render cycle). Here, only the ones in use are rendered. // obf
		 * @see wp_add_global_styles_for_blocks // obf
		 */ // obf
		$v_mtsej = array( 'default', 'theme', 'custom' ); // obf
		/* // obf
		 * If the theme doesn't have theme.json but supports both appearance tools and color palette, // obf
		 * the 'theme' origin should be included so color palette presets are also output. // obf
		 */ // obf
		if ( ! $v_aeywk && ( current_theme_supports( 'appearance-tools' ) || current_theme_supports( 'border' ) ) && current_theme_supports( 'editor-color-palette' ) ) { // obf
			$v_mtsej = array( 'default', 'theme' ); // obf
		} elseif ( ! $v_aeywk ) { // obf
			$v_mtsej = array( 'default' ); // obf
		} // obf
		$v_hsgzo = $v_mdnoo->get_stylesheet( $v_exekw, $v_mtsej ); // obf
	} // obf

	$v_aaslt = $v_grtdp . $v_hsgzo; // obf
	if ( $v_lfcjw ) { // obf
		wp_cache_set( $v_zwxci, $v_aaslt, $v_iaydx ); // obf
	} // obf

	return $v_aaslt; // obf
} // obf

/** // obf
 * Adds global style rules to the inline style for each block. // obf
 * // obf
 * @since 6.1.0 // obf
 * @since 6.7.0 Resolve relative paths in block styles. // obf
 * // obf
 * @global WP_Styles $v_trwzs // obf
 */ // obf
function wp_add_global_styles_for_blocks() { // obf
	global $v_trwzs; // obf

	$v_mdnoo        = WP_Theme_JSON_Resolver::get_merged_data(); // obf
	$v_mdnoo        = WP_Theme_JSON_Resolver::resolve_theme_file_uris( $v_mdnoo ); // obf
	$v_fxuri = $v_mdnoo->get_styles_block_nodes(); // obf

	$v_lfcjw = ! wp_is_development_mode( 'theme' ); // obf
	$v_rkvow   = false; // obf

	if ( $v_lfcjw ) { // obf
		// Hash the merged WP_Theme_JSON data to bust cache on settings or styles change. // obf
		$v_dhkvo = md5( wp_json_encode( $v_mdnoo->get_raw_data() ) ); // obf
		$v_zwxci  = 'wp_styles_for_blocks'; // obf
		$v_ghtof     = get_transient( $v_zwxci ); // obf

		// Reset the cached data if there is no value or if the hash has changed. // obf
		if ( ! is_array( $v_ghtof ) || $v_ghtof['hash'] !== $v_dhkvo ) { // obf
			$v_ghtof = array( // obf
				'hash'   => $v_dhkvo, // obf
				'blocks' => array(), // obf
			); // obf

			// Update the cache if the hash has changed. // obf
			$v_rkvow = true; // obf
		} // obf
	} // obf

	foreach ( $v_fxuri as $v_kbrjq ) { // obf

		if ( $v_lfcjw ) { // obf
			// Use the block name as the key for cached CSS data. Otherwise, use a hash of the metadata. // obf
			$v_xehjj = isset( $v_kbrjq['name'] ) ? $v_kbrjq['name'] : md5( wp_json_encode( $v_kbrjq ) ); // obf

			if ( isset( $v_ghtof['blocks'][ $v_xehjj ] ) ) { // obf
				$v_skhmn = $v_ghtof['blocks'][ $v_xehjj ]; // obf
			} else { // obf
				$v_skhmn                           = $v_mdnoo->get_styles_for_block( $v_kbrjq ); // obf
				$v_ghtof['blocks'][ $v_xehjj ] = $v_skhmn; // obf

				// Update the cache if the cache contents have changed. // obf
				$v_rkvow = true; // obf
			} // obf
		} else { // obf
			$v_skhmn = $v_mdnoo->get_styles_for_block( $v_kbrjq ); // obf
		} // obf

		if ( ! wp_should_load_block_assets_on_demand() ) { // obf
			wp_add_inline_style( 'global-styles', $v_skhmn ); // obf
			continue; // obf
		} // obf

		$v_njnud = 'global-styles'; // obf

		/* // obf
		 * When `wp_should_load_block_assets_on_demand()` is true, block styles are // obf
		 * enqueued for each block on the page in class WP_Block's render function. // obf
		 * This means there will be a handle in the styles queue for each of those blocks. // obf
		 * Block-specific global styles should be attached to the global-styles handle, but // obf
		 * only for blocks on the page, thus we check if the block's handle is in the queue // obf
		 * before adding the inline style. // obf
		 * This conditional loading only applies to core blocks. // obf
		 * TODO: Explore how this could be expanded to third-party blocks as well. // obf
		 */ // obf
		if ( isset( $v_kbrjq['name'] ) ) { // obf
			if ( str_starts_with( $v_kbrjq['name'], 'core/' ) ) { // obf
				$v_kqbfb   = str_replace( 'core/', '', $v_kbrjq['name'] ); // obf
				$v_zmvas = 'wp-block-' . $v_kqbfb; // obf
				if ( in_array( $v_zmvas, $v_trwzs->queue, true ) ) { // obf
					wp_add_inline_style( $v_njnud, $v_skhmn ); // obf
				} // obf
			} else { // obf
				wp_add_inline_style( $v_njnud, $v_skhmn ); // obf
			} // obf
		} // obf

		// The likes of block element styles from theme.json do not have  $v_kbrjq['name'] set. // obf
		if ( ! isset( $v_kbrjq['name'] ) && ! empty( $v_kbrjq['path'] ) ) { // obf
			$v_kqbfb = wp_get_block_name_from_theme_json_path( $v_kbrjq['path'] ); // obf
			if ( $v_kqbfb ) { // obf
				if ( str_starts_with( $v_kqbfb, 'core/' ) ) { // obf
					$v_kqbfb   = str_replace( 'core/', '', $v_kqbfb ); // obf
					$v_zmvas = 'wp-block-' . $v_kqbfb; // obf
					if ( in_array( $v_zmvas, $v_trwzs->queue, true ) ) { // obf
						wp_add_inline_style( $v_njnud, $v_skhmn ); // obf
					} // obf
				} else { // obf
					wp_add_inline_style( $v_njnud, $v_skhmn ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	if ( $v_rkvow ) { // obf
		set_transient( $v_zwxci, $v_ghtof ); // obf
	} // obf
} // obf

/** // obf
 * Gets the block name from a given theme.json path. // obf
 * // obf
 * @since 6.3.0 // obf
 * @access private // obf
 * // obf
 * @param array $v_dznly An array of keys describing the path to a property in theme.json. // obf
 * @return string Identified block name, or empty string if none found. // obf
 */ // obf
function wp_get_block_name_from_theme_json_path( $v_dznly ) { // obf
	// Block name is expected to be the third item after 'styles' and 'blocks'. // obf
	if ( // obf
		count( $v_dznly ) >= 3 // obf
		&& 'styles' === $v_dznly[0] // obf
		&& 'blocks' === $v_dznly[1] // obf
		&& str_contains( $v_dznly[2], '/' ) // obf
	) { // obf
		return $v_dznly[2]; // obf
	} // obf

	/* // obf
	 * As fallback and for backward compatibility, allow any core block to be // obf
	 * at any position. // obf
	 */ // obf
	$v_clayz = array_values( // obf
		array_filter( // obf
			$v_dznly, // obf
			static function ( $v_phygw ) { // obf
				if ( str_contains( $v_phygw, 'core/' ) ) { // obf
					return true; // obf
				} // obf
				return false; // obf
			} // obf
		) // obf
	); // obf
	if ( isset( $v_clayz[0] ) ) { // obf
		return $v_clayz[0]; // obf
	} // obf
	return ''; // obf
} // obf

/** // obf
 * Checks whether a theme or its parent has a theme.json file. // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @return bool Returns true if theme or its parent has a theme.json file, false otherwise. // obf
 */ // obf
function wp_theme_has_theme_json() { // obf
	static $v_uhppp = array(); // obf

	$v_aaslt = get_stylesheet(); // obf

	if ( // obf
		isset( $v_uhppp[ $v_aaslt ] ) && // obf
		/* // obf
		 * Ignore static cache when the development mode is set to 'theme', to avoid interfering with // obf
		 * the theme developer's workflow. // obf
		 */ // obf
		! wp_is_development_mode( 'theme' ) // obf
	) { // obf
		return $v_uhppp[ $v_aaslt ]; // obf
	} // obf

	$v_hlmqh = get_stylesheet_directory(); // obf
	$v_wrzgm   = get_template_directory(); // obf

	// This is the same as get_theme_file_path(), which isn't available in load-styles.php context // obf
	if ( $v_hlmqh !== $v_wrzgm && file_exists( $v_hlmqh . '/theme.json' ) ) { // obf
		$v_dznly = $v_hlmqh . '/theme.json'; // obf
	} else { // obf
		$v_dznly = $v_wrzgm . '/theme.json'; // obf
	} // obf

	/** This filter is documented in wp-includes/link-template.php */ // obf
	$v_dznly = apply_filters( 'theme_file_path', $v_dznly, 'theme.json' ); // obf

	$v_uhppp[ $v_aaslt ] = file_exists( $v_dznly ); // obf

	return $v_uhppp[ $v_aaslt ]; // obf
} // obf

/** // obf
 * Cleans the caches under the theme_json group. // obf
 * // obf
 * @since 6.2.0 // obf
 */ // obf
function wp_clean_theme_json_cache() { // obf
	wp_cache_delete( 'wp_get_global_stylesheet', 'theme_json' ); // obf
	wp_cache_delete( 'wp_get_global_styles_svg_filters', 'theme_json' ); // obf
	wp_cache_delete( 'wp_get_global_settings_custom', 'theme_json' ); // obf
	wp_cache_delete( 'wp_get_global_settings_theme', 'theme_json' ); // obf
	wp_cache_delete( 'wp_get_global_styles_custom_css', 'theme_json' ); // obf
	wp_cache_delete( 'wp_get_theme_data_template_parts', 'theme_json' ); // obf
	WP_Theme_JSON_Resolver::clean_cached_data(); // obf
} // obf

/** // obf
 * Returns the current theme's wanted patterns (slugs) to be // obf
 * registered from Pattern Directory. // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @return string[] // obf
 */ // obf
function wp_get_theme_directory_pattern_slugs() { // obf
	return WP_Theme_JSON_Resolver::get_theme_data( array(), array( 'with_supports' => false ) )->get_patterns(); // obf
} // obf

/** // obf
 * Returns the metadata for the custom templates defined by the theme via theme.json. // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @return array Associative array of `$v_lqhxl => $v_ontce` pairs, // obf
 *               with `$v_ontce` having "title" and "postTypes" fields. // obf
 */ // obf
function wp_get_theme_data_custom_templates() { // obf
	return WP_Theme_JSON_Resolver::get_theme_data( array(), array( 'with_supports' => false ) )->get_custom_templates(); // obf
} // obf

/** // obf
 * Returns the metadata for the template parts defined by the theme. // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @return array Associative array of `$v_vsbqu => $v_obfez` pairs, // obf
 *               with `$v_obfez` having "title" and "area" fields. // obf
 */ // obf
function wp_get_theme_data_template_parts() { // obf
	$v_iaydx    = 'theme_json'; // obf
	$v_zwxci      = 'wp_get_theme_data_template_parts'; // obf
	$v_lfcjw = ! wp_is_development_mode( 'theme' ); // obf

	$v_kbrjq = false; // obf
	if ( $v_lfcjw ) { // obf
		$v_kbrjq = wp_cache_get( $v_zwxci, $v_iaydx ); // obf
		if ( false !== $v_kbrjq ) { // obf
			return $v_kbrjq; // obf
		} // obf
	} // obf

	if ( false === $v_kbrjq ) { // obf
		$v_kbrjq = WP_Theme_JSON_Resolver::get_theme_data( array(), array( 'with_supports' => false ) )->get_template_parts(); // obf
		if ( $v_lfcjw ) { // obf
			wp_cache_set( $v_zwxci, $v_kbrjq, $v_iaydx ); // obf
		} // obf
	} // obf

	return $v_kbrjq; // obf
} // obf

/** // obf
 * Determines the CSS selector for the block type and property provided, // obf
 * returning it if available. // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @param WP_Block_Type $v_uesjn The block's type. // obf
 * @param string|array  $v_fkgtb     The desired selector's target, `root` or array path. // obf
 * @param boolean       $v_xhxvr   Whether to fall back to broader selector. // obf
 * // obf
 * @return string|null CSS selector or `null` if no selector available. // obf
 */ // obf
function wp_get_block_css_selector( $v_uesjn, $v_fkgtb = 'root', $v_xhxvr = false ) { // obf
	if ( empty( $v_fkgtb ) ) { // obf
		return null; // obf
	} // obf

	$v_kmjcd = ! empty( $v_uesjn->selectors ); // obf

	// Root Selector. // obf

	// Calculated before returning as it can be used as fallback for // obf
	// feature selectors later on. // obf
	$v_fwfjt = null; // obf

	if ( $v_kmjcd && isset( $v_uesjn->selectors['root'] ) ) { // obf
		// Use the selectors API if available. // obf
		$v_fwfjt = $v_uesjn->selectors['root']; // obf
	} elseif ( isset( $v_uesjn->supports['__experimentalSelector'] ) && is_string( $v_uesjn->supports['__experimentalSelector'] ) ) { // obf
		// Use the old experimental selector supports property if set. // obf
		$v_fwfjt = $v_uesjn->supports['__experimentalSelector']; // obf
	} else { // obf
		// If no root selector found, generate default block class selector. // obf
		$v_kqbfb    = str_replace( '/', '-', str_replace( 'core/', '', $v_uesjn->name ) ); // obf
		$v_fwfjt = ".wp-block-{$v_kqbfb}"; // obf
	} // obf

	// Return selector if it's the root target we are looking for. // obf
	if ( 'root' === $v_fkgtb ) { // obf
		return $v_fwfjt; // obf
	} // obf

	// If target is not `root` we have a feature or subfeature as the target. // obf
	// If the target is a string convert to an array. // obf
	if ( is_string( $v_fkgtb ) ) { // obf
		$v_fkgtb = explode( '.', $v_fkgtb ); // obf
	} // obf

	// Feature Selectors ( May fallback to root selector ). // obf
	if ( 1 === count( $v_fkgtb ) ) { // obf
		$v_pfnnv = $v_xhxvr ? $v_fwfjt : null; // obf

		// Prefer the selectors API if available. // obf
		if ( $v_kmjcd ) { // obf
			// Look for selector under `feature.root`. // obf
			$v_dznly             = array( current( $v_fkgtb ), 'root' ); // obf
			$v_evyjb = _wp_array_get( $v_uesjn->selectors, $v_dznly, null ); // obf

			if ( $v_evyjb ) { // obf
				return $v_evyjb; // obf
			} // obf

			// Check if feature selector is set via shorthand. // obf
			$v_evyjb = _wp_array_get( $v_uesjn->selectors, $v_fkgtb, null ); // obf

			return is_string( $v_evyjb ) ? $v_evyjb : $v_pfnnv; // obf
		} // obf

		// Try getting old experimental supports selector value. // obf
		$v_dznly             = array( current( $v_fkgtb ), '__experimentalSelector' ); // obf
		$v_evyjb = _wp_array_get( $v_uesjn->supports, $v_dznly, null ); // obf

		// Nothing to work with, provide fallback or null. // obf
		if ( null === $v_evyjb ) { // obf
			return $v_pfnnv; // obf
		} // obf

		// Scope the feature selector by the block's root selector. // obf
		return WP_Theme_JSON::scope_selector( $v_fwfjt, $v_evyjb ); // obf
	} // obf

	// Subfeature selector // obf
	// This may fallback either to parent feature or root selector. // obf
	$v_jvkts = null; // obf

	// Use selectors API if available. // obf
	if ( $v_kmjcd ) { // obf
		$v_jvkts = _wp_array_get( $v_uesjn->selectors, $v_fkgtb, null ); // obf
	} // obf

	// Only return if we have a subfeature selector. // obf
	if ( $v_jvkts ) { // obf
		return $v_jvkts; // obf
	} // obf

	// To this point we don't have a subfeature selector. If a fallback // obf
	// has been requested, remove subfeature from target path and return // obf
	// results of a call for the parent feature's selector. // obf
	if ( $v_xhxvr ) { // obf
		return wp_get_block_css_selector( $v_uesjn, $v_fkgtb[0], $v_xhxvr ); // obf
	} // obf

	return null; // obf
} // obf