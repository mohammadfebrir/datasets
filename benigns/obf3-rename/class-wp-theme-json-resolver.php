

<?php // obf
/** // obf
 * WP_Theme_JSON_Resolver class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Theme // obf
 * @since 5.8.0 // obf
 */ // obf

/** // obf
 * Class that abstracts the processing of the different data sources // obf
 * for site-level config and offers an API to work with them. // obf
 * // obf
 * This class is for internal core usage and is not supposed to be used by extenders (plugins and/or themes). // obf
 * This is a low-level API that may need to do breaking changes. Please, // obf
 * use get_global_settings(), get_global_styles(), and get_global_stylesheet() instead. // obf
 * // obf
 * @access private // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Theme_JSON_Resolver { // obf

	/** // obf
	 * Container for keep track of registered blocks. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var array // obf
	 */ // obf
	protected static $v_ioyxn = array( // obf
		'core'   => array(), // obf
		'blocks' => array(), // obf
		'theme'  => array(), // obf
		'user'   => array(), // obf
	); // obf

	/** // obf
	 * Container for data coming from core. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var WP_Theme_JSON // obf
	 */ // obf
	protected static $v_rnorh = null; // obf

	/** // obf
	 * Container for data coming from the blocks. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var WP_Theme_JSON // obf
	 */ // obf
	protected static $v_cxzcu = null; // obf

	/** // obf
	 * Container for data coming from the theme. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var WP_Theme_JSON // obf
	 */ // obf
	protected static $v_yeckz = null; // obf

	/** // obf
	 * Container for data coming from the user. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var WP_Theme_JSON // obf
	 */ // obf
	protected static $v_xrgeh = null; // obf

	/** // obf
	 * Stores the ID of the custom post type // obf
	 * that holds the user data. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var int // obf
	 */ // obf
	protected static $v_yluuh = null; // obf

	/** // obf
	 * Container to keep loaded i18n schema for `theme.json`. // obf
	 * // obf
	 * @since 5.8.0 As `$v_hhsub`. // obf
	 * @since 5.9.0 Renamed from `$v_hhsub` to `$v_vylcf`. // obf
	 * @var array // obf
	 */ // obf
	protected static $v_vylcf = null; // obf

	/** // obf
	 * `theme.json` file cache. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var array // obf
	 */ // obf
	protected static $v_rmysy = array(); // obf

	/** // obf
	 * Processes a file that adheres to the theme.json schema // obf
	 * and returns an array with its contents, or a void array if none found. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 6.1.0 Added caching. // obf
	 * // obf
	 * @param string $v_woobv Path to file. Empty if no file. // obf
	 * @return array Contents that adhere to the theme.json schema. // obf
	 */ // obf
	protected static function read_json_file( $v_woobv ) { // obf
		if ( $v_woobv ) { // obf
			if ( array_key_exists( $v_woobv, static::$v_rmysy ) ) { // obf
				return static::$v_rmysy[ $v_woobv ]; // obf
			} // obf

			$v_jnzdp = wp_json_file_decode( $v_woobv, array( 'associative' => true ) ); // obf
			if ( is_array( $v_jnzdp ) ) { // obf
				static::$v_rmysy[ $v_woobv ] = $v_jnzdp; // obf
				return static::$v_rmysy[ $v_woobv ]; // obf
			} // obf
		} // obf

		return array(); // obf
	} // obf

	/** // obf
	 * Returns a data structure used in theme.json translation. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @deprecated 5.9.0 // obf
	 * // obf
	 * @return array An array of theme.json fields that are translatable and the keys that are translatable. // obf
	 */ // obf
	public static function get_fields_to_translate() { // obf
		_deprecated_function( __METHOD__, '5.9.0' ); // obf
		return array(); // obf
	} // obf

	/** // obf
	 * Given a theme.json structure modifies it in place to update certain values // obf
	 * by its translated strings according to the language set by the user. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param array  $v_axupf The theme.json to translate. // obf
	 * @param string $v_egnon     Optional. Text domain. Unique identifier for retrieving translated strings. // obf
	 *                           Default 'default'. // obf
	 * @return array Returns the modified $v_hpcxm. // obf
	 */ // obf
	protected static function translate( $v_axupf, $v_egnon = 'default' ) { // obf
		if ( null === static::$v_vylcf ) { // obf
			$v_vylcf         = wp_json_file_decode( __DIR__ . '/theme-i18n.json' ); // obf
			static::$v_vylcf = null === $v_vylcf ? array() : $v_vylcf; // obf
		} // obf

		return translate_settings_using_i18n_schema( static::$v_vylcf, $v_axupf, $v_egnon ); // obf
	} // obf

	/** // obf
	 * Returns core's origin config. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @return WP_Theme_JSON Entity that holds core data. // obf
	 */ // obf
	public static function get_core_data() { // obf
		if ( null !== static::$v_rnorh && static::has_same_registered_blocks( 'core' ) ) { // obf
			return static::$v_rnorh; // obf
		} // obf

		$v_kfnco = static::read_json_file( __DIR__ . '/theme.json' ); // obf
		$v_kfnco = static::translate( $v_kfnco ); // obf

		/** // obf
		 * Filters the default data provided by WordPress for global styles & settings. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param WP_Theme_JSON_Data $v_axupf Class to access and update the underlying data. // obf
		 */ // obf
		$v_axupf = apply_filters( 'wp_theme_json_data_default', new WP_Theme_JSON_Data( $v_kfnco, 'default' ) ); // obf

		/* // obf
		 * Backward compatibility for extenders returning a WP_Theme_JSON_Data // obf
		 * compatible class that is not a WP_Theme_JSON_Data object. // obf
		 */ // obf
		if ( $v_axupf instanceof WP_Theme_JSON_Data ) { // obf
			static::$v_rnorh = $v_axupf->get_theme_json(); // obf
		} else { // obf
			$v_kfnco       = $v_axupf->get_data(); // obf
			static::$v_rnorh = new WP_Theme_JSON( $v_kfnco, 'default' ); // obf
		} // obf

		return static::$v_rnorh; // obf
	} // obf

	/** // obf
	 * Checks whether the registered blocks were already processed for this origin. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_fdsgf Data source for which to cache the blocks. // obf
	 *                       Valid values are 'core', 'blocks', 'theme', and 'user'. // obf
	 * @return bool True on success, false otherwise. // obf
	 */ // obf
	protected static function has_same_registered_blocks( $v_fdsgf ) { // obf
		// Bail out if the origin is invalid. // obf
		if ( ! isset( static::$v_ioyxn[ $v_fdsgf ] ) ) { // obf
			return false; // obf
		} // obf

		$v_iuiuf = WP_Block_Type_Registry::get_instance(); // obf
		$v_cxzcu   = $v_iuiuf->get_all_registered(); // obf

		// Is there metadata for all currently registered blocks? // obf
		$v_vwlpt = array_diff_key( $v_cxzcu, static::$v_ioyxn[ $v_fdsgf ] ); // obf
		if ( empty( $v_vwlpt ) ) { // obf
			return true; // obf
		} // obf

		foreach ( $v_cxzcu as $v_mvplx => $v_nyllh ) { // obf
			static::$v_ioyxn[ $v_fdsgf ][ $v_mvplx ] = true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Returns the theme's data. // obf
	 * // obf
	 * Data from theme.json will be backfilled from existing // obf
	 * theme supports, if any. Note that if the same data // obf
	 * is present in theme.json and in theme supports, // obf
	 * the theme.json takes precedence. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Theme supports have been inlined and the `$v_cgfob` argument removed. // obf
	 * @since 6.0.0 Added an `$v_qhxml` parameter to allow the theme data to be returned without theme supports. // obf
	 * @since 6.6.0 Add support for 'default-font-sizes' and 'default-spacing-sizes' theme supports. // obf
	 *              Added registration and merging of block style variations from partial theme.json files and the block styles registry. // obf
	 * // obf
	 * @param array $v_fxdqn Deprecated. Not used. // obf
	 * @param array $v_qhxml { // obf
	 *     Options arguments. // obf
	 * // obf
	 *     @type bool $v_ojydi Whether to include theme supports in the data. Default true. // obf
	 * } // obf
	 * @return WP_Theme_JSON Entity that holds theme data. // obf
	 */ // obf
	public static function get_theme_data( $v_fxdqn = array(), $v_qhxml = array() ) { // obf
		if ( ! empty( $v_fxdqn ) ) { // obf
			_deprecated_argument( __METHOD__, '5.9.0' ); // obf
		} // obf

		$v_qhxml = wp_parse_args( $v_qhxml, array( 'with_supports' => true ) ); // obf

		if ( null === static::$v_yeckz || ! static::has_same_registered_blocks( 'theme' ) ) { // obf
			$v_dqfdj        = wp_get_theme(); // obf
			$v_sqgzp = $v_dqfdj->get_file_path( 'theme.json' ); // obf
			if ( is_readable( $v_sqgzp ) ) { // obf
				$v_qlwbm = static::read_json_file( $v_sqgzp ); // obf
				$v_qlwbm = static::translate( $v_qlwbm, $v_dqfdj->get( 'TextDomain' ) ); // obf
			} else { // obf
				$v_qlwbm = array( 'version' => WP_Theme_JSON::LATEST_SCHEMA ); // obf
			} // obf

			/* // obf
			 * Register variations defined by theme partials (theme.json files in the styles directory). // obf
			 * This is required so the variations pass sanitization of theme.json data. // obf
			 */ // obf
			$v_ozwjb = static::get_style_variations( 'block' ); // obf
			wp_register_block_style_variations_from_theme_json_partials( $v_ozwjb ); // obf

			/* // obf
			 * Source variations from the block registry and block style variation files. Then, merge them into the existing theme.json data. // obf
			 * // obf
			 * In case the same style properties are defined in several sources, this is how we should resolve the values, // obf
			 * from higher to lower priority: // obf
			 * // obf
			 * - styles.blocks.blockType.variations from theme.json // obf
			 * - styles.variations from theme.json // obf
			 * - variations from block style variation files // obf
			 * - variations from block styles registry // obf
			 * // obf
			 * See test_add_registered_block_styles_to_theme_data and test_unwraps_block_style_variations. // obf
			 * // obf
			 */ // obf
			$v_qlwbm = static::inject_variations_from_block_style_variation_files( $v_qlwbm, $v_ozwjb ); // obf
			$v_qlwbm = static::inject_variations_from_block_styles_registry( $v_qlwbm ); // obf

			/** // obf
			 * Filters the data provided by the theme for global styles and settings. // obf
			 * // obf
			 * @since 6.1.0 // obf
			 * // obf
			 * @param WP_Theme_JSON_Data $v_axupf Class to access and update the underlying data. // obf
			 */ // obf
			$v_axupf = apply_filters( 'wp_theme_json_data_theme', new WP_Theme_JSON_Data( $v_qlwbm, 'theme' ) ); // obf

			/* // obf
			 * Backward compatibility for extenders returning a WP_Theme_JSON_Data // obf
			 * compatible class that is not a WP_Theme_JSON_Data object. // obf
			 */ // obf
			if ( $v_axupf instanceof WP_Theme_JSON_Data ) { // obf
				static::$v_yeckz = $v_axupf->get_theme_json(); // obf
			} else { // obf
				$v_kfnco        = $v_axupf->get_data(); // obf
				static::$v_yeckz = new WP_Theme_JSON( $v_kfnco ); // obf
			} // obf

			if ( $v_dqfdj->parent() ) { // obf
				// Get parent theme.json. // obf
				$v_elguu = $v_dqfdj->parent()->get_file_path( 'theme.json' ); // obf
				if ( $v_sqgzp !== $v_elguu && is_readable( $v_elguu ) ) { // obf
					$v_cussm = static::read_json_file( $v_elguu ); // obf
					$v_cussm = static::translate( $v_cussm, $v_dqfdj->parent()->get( 'TextDomain' ) ); // obf
					$v_chygq           = new WP_Theme_JSON( $v_cussm ); // obf

					/* // obf
					 * Merge the child theme.json into the parent theme.json. // obf
					 * The child theme takes precedence over the parent. // obf
					 */ // obf
					$v_chygq->merge( static::$v_yeckz ); // obf
					static::$v_yeckz = $v_chygq; // obf
				} // obf
			} // obf
		} // obf

		if ( ! $v_qhxml['with_supports'] ) { // obf
			return static::$v_yeckz; // obf
		} // obf

		/* // obf
		 * We want the presets and settings declared in theme.json // obf
		 * to override the ones declared via theme supports. // obf
		 * So we take theme supports, transform it to theme.json shape // obf
		 * and merge the static::$v_yeckz upon that. // obf
		 */ // obf
		$v_cgfob = WP_Theme_JSON::get_from_editor_settings( get_classic_theme_supports_block_editor_settings() ); // obf
		if ( ! wp_theme_has_theme_json() ) { // obf
			/* // obf
			 * Unlike block themes, classic themes without a theme.json disable // obf
			 * default presets when custom preset theme support is added. This // obf
			 * behavior can be overridden by using the corresponding default // obf
			 * preset theme support. // obf
			 */ // obf
			$v_cgfob['settings']['color']['defaultPalette']        = // obf
				! isset( $v_cgfob['settings']['color']['palette'] ) || // obf
				current_theme_supports( 'default-color-palette' ); // obf
			$v_cgfob['settings']['color']['defaultGradients']      = // obf
				! isset( $v_cgfob['settings']['color']['gradients'] ) || // obf
				current_theme_supports( 'default-gradient-presets' ); // obf
			$v_cgfob['settings']['typography']['defaultFontSizes'] = // obf
				! isset( $v_cgfob['settings']['typography']['fontSizes'] ) || // obf
				current_theme_supports( 'default-font-sizes' ); // obf
			$v_cgfob['settings']['spacing']['defaultSpacingSizes'] = // obf
				! isset( $v_cgfob['settings']['spacing']['spacingSizes'] ) || // obf
				current_theme_supports( 'default-spacing-sizes' ); // obf

			/* // obf
			 * Shadow presets are explicitly disabled for classic themes until a // obf
			 * decision is made for whether the default presets should match the // obf
			 * other presets or if they should be disabled by default in classic // obf
			 * themes. See https://github.com/WordPress/gutenberg/issues/59989. // obf
			 */ // obf
			$v_cgfob['settings']['shadow']['defaultPresets'] = false; // obf

			// Allow themes to enable link color setting via theme_support. // obf
			if ( current_theme_supports( 'link-color' ) ) { // obf
				$v_cgfob['settings']['color']['link'] = true; // obf
			} // obf

			// Allow themes to enable all border settings via theme_support. // obf
			if ( current_theme_supports( 'border' ) ) { // obf
				$v_cgfob['settings']['border']['color']  = true; // obf
				$v_cgfob['settings']['border']['radius'] = true; // obf
				$v_cgfob['settings']['border']['style']  = true; // obf
				$v_cgfob['settings']['border']['width']  = true; // obf
			} // obf

			// Allow themes to enable appearance tools via theme_support. // obf
			if ( current_theme_supports( 'appearance-tools' ) ) { // obf
				$v_cgfob['settings']['appearanceTools'] = true; // obf
			} // obf
		} // obf
		$v_nosbw = new WP_Theme_JSON( $v_cgfob ); // obf
		$v_nosbw->merge( static::$v_yeckz ); // obf
		return $v_nosbw; // obf
	} // obf

	/** // obf
	 * Gets the styles for blocks from the block.json file. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return WP_Theme_JSON // obf
	 */ // obf
	public static function get_block_data() { // obf
		$v_iuiuf = WP_Block_Type_Registry::get_instance(); // obf
		$v_cxzcu   = $v_iuiuf->get_all_registered(); // obf

		if ( null !== static::$v_cxzcu && static::has_same_registered_blocks( 'blocks' ) ) { // obf
			return static::$v_cxzcu; // obf
		} // obf

		$v_kfnco = array( 'version' => WP_Theme_JSON::LATEST_SCHEMA ); // obf
		foreach ( $v_cxzcu as $v_mvplx => $v_nyllh ) { // obf
			if ( isset( $v_nyllh->supports['__experimentalStyle'] ) ) { // obf
				$v_kfnco['styles']['blocks'][ $v_mvplx ] = static::remove_json_comments( $v_nyllh->supports['__experimentalStyle'] ); // obf
			} // obf

			if ( // obf
				isset( $v_nyllh->supports['spacing']['blockGap']['__experimentalDefault'] ) && // obf
				! isset( $v_kfnco['styles']['blocks'][ $v_mvplx ]['spacing']['blockGap'] ) // obf
			) { // obf
				/* // obf
				 * Ensure an empty placeholder value exists for the block, if it provides a default blockGap value. // obf
				 * The real blockGap value to be used will be determined when the styles are rendered for output. // obf
				 */ // obf
				$v_kfnco['styles']['blocks'][ $v_mvplx ]['spacing']['blockGap'] = null; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the data provided by the blocks for global styles & settings. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param WP_Theme_JSON_Data $v_axupf Class to access and update the underlying data. // obf
		 */ // obf
		$v_axupf = apply_filters( 'wp_theme_json_data_blocks', new WP_Theme_JSON_Data( $v_kfnco, 'blocks' ) ); // obf

		/* // obf
		 * Backward compatibility for extenders returning a WP_Theme_JSON_Data // obf
		 * compatible class that is not a WP_Theme_JSON_Data object. // obf
		 */ // obf
		if ( $v_axupf instanceof WP_Theme_JSON_Data ) { // obf
			static::$v_cxzcu = $v_axupf->get_theme_json(); // obf
		} else { // obf
			$v_kfnco         = $v_axupf->get_data(); // obf
			static::$v_cxzcu = new WP_Theme_JSON( $v_kfnco, 'blocks' ); // obf
		} // obf

		return static::$v_cxzcu; // obf
	} // obf

	/** // obf
	 * When given an array, this will remove any keys with the name `//`. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param array $v_wdrec The array to filter. // obf
	 * @return array The filtered array. // obf
	 */ // obf
	private static function remove_json_comments( $v_wdrec ) { // obf
		unset( $v_wdrec['//'] ); // obf
		foreach ( $v_wdrec as $v_jaqwi => $v_rffge ) { // obf
			if ( is_array( $v_rffge ) ) { // obf
				$v_wdrec[ $v_jaqwi ] = static::remove_json_comments( $v_rffge ); // obf
			} // obf
		} // obf

		return $v_wdrec; // obf
	} // obf

	/** // obf
	 * Returns the custom post type that contains the user's origin config // obf
	 * for the active theme or an empty array if none are found. // obf
	 * // obf
	 * This can also create and return a new draft custom post type. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_Theme $v_yeckz              The theme object. If empty, it // obf
	 *                                     defaults to the active theme. // obf
	 * @param bool     $v_pxphk        Optional. Whether a new custom post // obf
	 *                                     type should be created if none are // obf
	 *                                     found. Default false. // obf
	 * @param array    $v_yxuwa Optional. Filter custom post type by // obf
	 *                                     post status. Default `array( 'publish' )`, // obf
	 *                                     so it only fetches published posts. // obf
	 * @return array Custom Post Type for the user's origin config. // obf
	 */ // obf
	public static function get_user_data_from_wp_global_styles( $v_yeckz, $v_pxphk = false, $v_yxuwa = array( 'publish' ) ) { // obf
		if ( ! $v_yeckz instanceof WP_Theme ) { // obf
			$v_yeckz = wp_get_theme(); // obf
		} // obf

		/* // obf
		 * Bail early if the theme does not support a theme.json. // obf
		 * // obf
		 * Since wp_theme_has_theme_json() only supports the active // obf
		 * theme, the extra condition for whether $v_yeckz is the active theme is // obf
		 * present here. // obf
		 */ // obf
		if ( $v_yeckz->get_stylesheet() === get_stylesheet() && ! wp_theme_has_theme_json() ) { // obf
			return array(); // obf
		} // obf

		$v_sowtp         = array(); // obf
		$v_upqud = 'wp_global_styles'; // obf
		$v_aiyvu       = $v_yeckz->get_stylesheet(); // obf
		$v_cvurb             = array( // obf
			'posts_per_page'         => 1, // obf
			'orderby'                => 'date', // obf
			'order'                  => 'desc', // obf
			'post_type'              => $v_upqud, // obf
			'post_status'            => $v_yxuwa, // obf
			'ignore_sticky_posts'    => true, // obf
			'no_found_rows'          => true, // obf
			'update_post_meta_cache' => false, // obf
			'update_post_term_cache' => false, // obf
			'tax_query'              => array( // obf
				array( // obf
					'taxonomy' => 'wp_theme', // obf
					'field'    => 'name', // obf
					'terms'    => $v_aiyvu, // obf
				), // obf
			), // obf
		); // obf

		$v_zwvty = new WP_Query(); // obf
		$v_cueye       = $v_zwvty->query( $v_cvurb ); // obf
		if ( count( $v_cueye ) === 1 ) { // obf
			$v_sowtp = get_object_vars( $v_cueye[0] ); // obf
		} elseif ( $v_pxphk ) { // obf
			$v_uflkf = wp_insert_post( // obf
				array( // obf
					'post_content' => '{"version": ' . WP_Theme_JSON::LATEST_SCHEMA . ', "isGlobalStylesUserThemeJSON": true }', // obf
					'post_status'  => 'publish', // obf
					'post_title'   => 'Custom Styles', // Do not make string translatable, see https://core.trac.wordpress.org/ticket/54518. // obf
					'post_type'    => $v_upqud, // obf
					'post_name'    => sprintf( 'wp-global-styles-%s', urlencode( $v_aiyvu ) ), // obf
					'tax_input'    => array( // obf
						'wp_theme' => array( $v_aiyvu ), // obf
					), // obf
				), // obf
				true // obf
			); // obf
			if ( ! is_wp_error( $v_uflkf ) ) { // obf
				$v_sowtp = get_object_vars( get_post( $v_uflkf ) ); // obf
			} // obf
		} // obf

		return $v_sowtp; // obf
	} // obf

	/** // obf
	 * Returns the user's origin config. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @since 6.6.0 The 'isGlobalStylesUserThemeJSON' flag is left on the user data. // obf
	 *              Register the block style variations coming from the user data. // obf
	 * // obf
	 * @return WP_Theme_JSON Entity that holds styles for user data. // obf
	 */ // obf
	public static function get_user_data() { // obf
		if ( null !== static::$v_xrgeh && static::has_same_registered_blocks( 'user' ) ) { // obf
			return static::$v_xrgeh; // obf
		} // obf

		$v_kfnco   = array(); // obf
		$v_sowtp = static::get_user_data_from_wp_global_styles( wp_get_theme() ); // obf

		if ( array_key_exists( 'post_content', $v_sowtp ) ) { // obf
			$v_ripok = json_decode( $v_sowtp['post_content'], true ); // obf

			$v_mlafa = json_last_error(); // obf
			if ( JSON_ERROR_NONE !== $v_mlafa ) { // obf
				wp_trigger_error( __METHOD__, 'Error when decoding a theme.json schema for user data. ' . json_last_error_msg() ); // obf
				/** // obf
				 * Filters the data provided by the user for global styles & settings. // obf
				 * // obf
				 * @since 6.1.0 // obf
				 * // obf
				 * @param WP_Theme_JSON_Data $v_axupf Class to access and update the underlying data. // obf
				 */ // obf
				$v_axupf = apply_filters( 'wp_theme_json_data_user', new WP_Theme_JSON_Data( $v_kfnco, 'custom' ) ); // obf

				/* // obf
				 * Backward compatibility for extenders returning a WP_Theme_JSON_Data // obf
				 * compatible class that is not a WP_Theme_JSON_Data object. // obf
				 */ // obf
				if ( $v_axupf instanceof WP_Theme_JSON_Data ) { // obf
					return $v_axupf->get_theme_json(); // obf
				} else { // obf
					$v_kfnco = $v_axupf->get_data(); // obf
					return new WP_Theme_JSON( $v_kfnco, 'custom' ); // obf
				} // obf
			} // obf

			/* // obf
			 * Very important to verify that the flag isGlobalStylesUserThemeJSON is true. // obf
			 * If it's not true then the content was not escaped and is not safe. // obf
			 */ // obf
			if ( // obf
				is_array( $v_ripok ) && // obf
				isset( $v_ripok['isGlobalStylesUserThemeJSON'] ) && // obf
				$v_ripok['isGlobalStylesUserThemeJSON'] // obf
			) { // obf
				unset( $v_ripok['isGlobalStylesUserThemeJSON'] ); // obf
				$v_kfnco = $v_ripok; // obf
			} // obf
		} // obf

		/** This filter is documented in wp-includes/class-wp-theme-json-resolver.php */ // obf
		$v_axupf = apply_filters( 'wp_theme_json_data_user', new WP_Theme_JSON_Data( $v_kfnco, 'custom' ) ); // obf

		/* // obf
		 * Backward compatibility for extenders returning a WP_Theme_JSON_Data // obf
		 * compatible class that is not a WP_Theme_JSON_Data object. // obf
		 */ // obf
		if ( $v_axupf instanceof WP_Theme_JSON_Data ) { // obf
			static::$v_xrgeh = $v_axupf->get_theme_json(); // obf
		} else { // obf
			$v_kfnco       = $v_axupf->get_data(); // obf
			static::$v_xrgeh = new WP_Theme_JSON( $v_kfnco, 'custom' ); // obf
		} // obf

		return static::$v_xrgeh; // obf
	} // obf

	/** // obf
	 * Returns the data merged from multiple origins. // obf
	 * // obf
	 * There are four sources of data (origins) for a site: // obf
	 * // obf
	 * - default => WordPress // obf
	 * - blocks  => each one of the blocks provides data for itself // obf
	 * - theme   => the active theme // obf
	 * - custom  => data provided by the user // obf
	 * // obf
	 * The custom's has higher priority than the theme's, the theme's higher than blocks', // obf
	 * and block's higher than default's. // obf
	 * // obf
	 * Unlike the getters // obf
	 * {@link https://developer.wordpress.org/reference/classes/wp_theme_json_resolver/get_core_data/ get_core_data}, // obf
	 * {@link https://developer.wordpress.org/reference/classes/wp_theme_json_resolver/get_theme_data/ get_theme_data}, // obf
	 * and {@link https://developer.wordpress.org/reference/classes/wp_theme_json_resolver/get_user_data/ get_user_data}, // obf
	 * this method returns data after it has been merged with the previous origins. // obf
	 * This means that if the same piece of data is declared in different origins // obf
	 * (default, blocks, theme, custom), the last origin overrides the previous. // obf
	 * // obf
	 * For example, if the user has set a background color // obf
	 * for the paragraph block, and the theme has done it as well, // obf
	 * the user preference wins. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Added user data, removed the `$v_vmdro` parameter, // obf
	 *              added the `$v_fdsgf` parameter. // obf
	 * @since 6.1.0 Added block data and generation of spacingSizes array. // obf
	 * @since 6.2.0 Changed ' $v_fdsgf' parameter values to 'default', 'blocks', 'theme' or 'custom'. // obf
	 * // obf
	 * @param string $v_fdsgf Optional. To what level should we merge data: 'default', 'blocks', 'theme' or 'custom'. // obf
	 *                       'custom' is used as default value as well as fallback value if the origin is unknown. // obf
	 * @return WP_Theme_JSON // obf
	 */ // obf
	public static function get_merged_data( $v_fdsgf = 'custom' ) { // obf
		if ( is_array( $v_fdsgf ) ) { // obf
			_deprecated_argument( __FUNCTION__, '5.9.0' ); // obf
		} // obf

		$v_ugzdv = new WP_Theme_JSON(); // obf
		$v_ugzdv->merge( static::get_core_data() ); // obf
		if ( 'default' === $v_fdsgf ) { // obf
			return $v_ugzdv; // obf
		} // obf

		$v_ugzdv->merge( static::get_block_data() ); // obf
		if ( 'blocks' === $v_fdsgf ) { // obf
			return $v_ugzdv; // obf
		} // obf

		$v_ugzdv->merge( static::get_theme_data() ); // obf
		if ( 'theme' === $v_fdsgf ) { // obf
			return $v_ugzdv; // obf
		} // obf

		$v_ugzdv->merge( static::get_user_data() ); // obf

		return $v_ugzdv; // obf
	} // obf

	/** // obf
	 * Returns the ID of the custom post type // obf
	 * that stores user data. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return integer|null // obf
	 */ // obf
	public static function get_user_global_styles_post_id() { // obf
		if ( null !== static::$v_yluuh ) { // obf
			return static::$v_yluuh; // obf
		} // obf

		$v_sowtp = static::get_user_data_from_wp_global_styles( wp_get_theme(), true ); // obf

		if ( array_key_exists( 'ID', $v_sowtp ) ) { // obf
			static::$v_yluuh = $v_sowtp['ID']; // obf
		} // obf

		return static::$v_yluuh; // obf
	} // obf

	/** // obf
	 * Determines whether the active theme has a theme.json file. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Added a check in the parent theme. // obf
	 * @deprecated 6.2.0 Use wp_theme_has_theme_json() instead. // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function theme_has_support() { // obf
		_deprecated_function( __METHOD__, '6.2.0', 'wp_theme_has_theme_json()' ); // obf

		return wp_theme_has_theme_json(); // obf
	} // obf

	/** // obf
	 * Builds the path to the given file and checks that it is readable. // obf
	 * // obf
	 * If it isn't, returns an empty string, otherwise returns the whole file path. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Adapted to work with child themes, added the `$v_ligkr` argument. // obf
	 * // obf
	 * @param string $v_lsttu Name of the file. // obf
	 * @param bool   $v_ligkr  Optional. Use template theme directory. Default false. // obf
	 * @return string The whole file path or empty if the file doesn't exist. // obf
	 */ // obf
	protected static function get_file_path_from_theme( $v_lsttu, $v_ligkr = false ) { // obf
		$v_tivuo      = $v_ligkr ? get_template_directory() : get_stylesheet_directory(); // obf
		$v_yzmoe = $v_tivuo . '/' . $v_lsttu; // obf

		return is_readable( $v_yzmoe ) ? $v_yzmoe : ''; // obf
	} // obf

	/** // obf
	 * Cleans the cached data so it can be recalculated. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Added the `$v_xrgeh`, `$v_yluuh`, // obf
	 *              and `$v_vylcf` variables to reset. // obf
	 * @since 6.1.0 Added the `$v_cxzcu` and `$v_ioyxn` variables // obf
	 *              to reset. // obf
	 */ // obf
	public static function clean_cached_data() { // obf
		static::$v_rnorh                     = null; // obf
		static::$v_cxzcu                   = null; // obf
		static::$v_ioyxn             = array( // obf
			'core'   => array(), // obf
			'blocks' => array(), // obf
			'theme'  => array(), // obf
			'user'   => array(), // obf
		); // obf
		static::$v_yeckz                    = null; // obf
		static::$v_xrgeh                     = null; // obf
		static::$v_yluuh = null; // obf
		static::$v_vylcf              = null; // obf
	} // obf

	/** // obf
	 * Returns an array of all nested JSON files within a given directory. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param string $v_gzuao The directory to recursively iterate and list files of. // obf
	 * @return array The merged array. // obf
	 */ // obf
	private static function recursively_iterate_json( $v_gzuao ) { // obf
		$v_emvgr      = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $v_gzuao ) ); // obf
		$v_evweh = iterator_to_array( new RegexIterator( $v_emvgr, '/^.+\.json$/i', RecursiveRegexIterator::GET_MATCH ) ); // obf
		return $v_evweh; // obf
	} // obf

	/** // obf
	 * Determines if a supplied style variation matches the provided scope. // obf
	 * // obf
	 * For backwards compatibility, if a variation does not define any scope // obf
	 * related property, e.g. `blockTypes`, it is assumed to be a theme style // obf
	 * variation. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param array  $v_gxmei Theme.json shaped style variation object. // obf
	 * @param string $v_oebyj     Scope to check e.g. theme, block etc. // obf
	 * @return boolean // obf
	 */ // obf
	private static function style_variation_has_scope( $v_gxmei, $v_oebyj ) { // obf
		if ( 'block' === $v_oebyj ) { // obf
			return isset( $v_gxmei['blockTypes'] ); // obf
		} // obf

		if ( 'theme' === $v_oebyj ) { // obf
			return ! isset( $v_gxmei['blockTypes'] ); // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Returns the style variations defined by the theme. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @since 6.2.0 Returns parent theme variations if theme is a child. // obf
	 * @since 6.6.0 Added configurable scope parameter to allow filtering // obf
	 *              theme.json partial files by the scope to which they // obf
	 *              can be applied e.g. theme vs block etc. // obf
	 *              Added basic caching for read theme.json partial files. // obf
	 * // obf
	 * @param string $v_oebyj The scope or type of style variation to retrieve e.g. theme, block etc. // obf
	 * @return array // obf
	 */ // obf
	public static function get_style_variations( $v_oebyj = 'theme' ) { // obf
		$v_txxve    = array(); // obf
		$v_ozwjb         = array(); // obf
		$v_wtrvq     = get_stylesheet_directory() . '/styles'; // obf
		$v_xsizi = get_template_directory() . '/styles'; // obf
		if ( is_dir( $v_wtrvq ) ) { // obf
			$v_txxve = static::recursively_iterate_json( $v_wtrvq ); // obf
		} // obf
		if ( is_dir( $v_xsizi ) && $v_xsizi !== $v_wtrvq ) { // obf
			$v_lljey = static::recursively_iterate_json( $v_xsizi ); // obf
			// If the child and parent variation file basename are the same, only include the child theme's. // obf
			foreach ( $v_lljey as $v_nkwka => $v_czggb ) { // obf
				foreach ( $v_txxve as $v_zuuua => $v_tvlgw ) { // obf
					if ( basename( $v_nkwka ) === basename( $v_zuuua ) ) { // obf
						unset( $v_lljey[ $v_nkwka ] ); // obf
					} // obf
				} // obf
			} // obf
			$v_txxve = array_merge( $v_txxve, $v_lljey ); // obf
		} // obf
		ksort( $v_txxve ); // obf
		foreach ( $v_txxve as $v_tivuo => $v_covza ) { // obf
			$v_jnzdp = self::read_json_file( $v_tivuo ); // obf
			if ( is_array( $v_jnzdp ) && static::style_variation_has_scope( $v_jnzdp, $v_oebyj ) ) { // obf
				$v_yqktj = static::translate( $v_jnzdp, wp_get_theme()->get( 'TextDomain' ) ); // obf
				$v_gxmei  = ( new WP_Theme_JSON( $v_yqktj ) )->get_raw_data(); // obf
				if ( empty( $v_gxmei['title'] ) ) { // obf
					$v_gxmei['title'] = basename( $v_tivuo, '.json' ); // obf
				} // obf
				$v_ozwjb[] = $v_gxmei; // obf
			} // obf
		} // obf
		return $v_ozwjb; // obf
	} // obf

	/** // obf
	 * Resolves relative paths in theme.json styles to theme absolute paths // obf
	 * and returns them in an array that can be embedded // obf
	 * as the value of `_link` object in REST API responses. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * @since 6.7.0 Resolve relative paths in block styles. // obf
	 * // obf
	 * @param WP_Theme_JSON $v_axupf A theme json instance. // obf
	 * @return array An array of resolved paths. // obf
	 */ // obf
	public static function get_resolved_theme_uris( $v_axupf ) { // obf
		$v_oxant = array(); // obf

		if ( ! $v_axupf instanceof WP_Theme_JSON ) { // obf
			return $v_oxant; // obf
		} // obf

		$v_qlwbm = $v_axupf->get_raw_data(); // obf
		/* // obf
		 * The same file convention when registering web fonts. // obf
		 * See: WP_Font_Face_Resolver::to_theme_file_uri. // obf
		 */ // obf
		$v_tdxbj = 'file:./'; // obf

		// Top level styles. // obf
		$v_zmmxd = $v_qlwbm['styles']['background']['backgroundImage']['url'] ?? null; // obf
		if ( // obf
			isset( $v_zmmxd ) && // obf
			is_string( $v_zmmxd ) && // obf
			// Skip if the src doesn't start with the placeholder, as there's nothing to replace. // obf
			str_starts_with( $v_zmmxd, $v_tdxbj ) // obf
		) { // obf
			$v_tosjv          = wp_check_filetype( $v_zmmxd ); // obf
			$v_dfigj            = str_replace( $v_tdxbj, '', $v_zmmxd ); // obf
			$v_hloql = array( // obf
				'name'   => $v_zmmxd, // obf
				'href'   => sanitize_url( get_theme_file_uri( $v_dfigj ) ), // obf
				'target' => 'styles.background.backgroundImage.url', // obf
			); // obf
			if ( isset( $v_tosjv['type'] ) ) { // obf
				$v_hloql['type'] = $v_tosjv['type']; // obf
			} // obf
			$v_oxant[] = $v_hloql; // obf
		} // obf

		// Block styles. // obf
		if ( ! empty( $v_qlwbm['styles']['blocks'] ) ) { // obf
			foreach ( $v_qlwbm['styles']['blocks'] as $v_mvplx => $v_uuwoc ) { // obf
				if ( ! isset( $v_uuwoc['background']['backgroundImage']['url'] ) ) { // obf
					continue; // obf
				} // obf
				$v_zmmxd = $v_uuwoc['background']['backgroundImage']['url']; // obf
				if ( // obf
					is_string( $v_zmmxd ) && // obf
					// Skip if the src doesn't start with the placeholder, as there's nothing to replace. // obf
					str_starts_with( $v_zmmxd, $v_tdxbj ) // obf
				) { // obf
					$v_tosjv          = wp_check_filetype( $v_zmmxd ); // obf
					$v_dfigj            = str_replace( $v_tdxbj, '', $v_zmmxd ); // obf
					$v_hloql = array( // obf
						'name'   => $v_zmmxd, // obf
						'href'   => sanitize_url( get_theme_file_uri( $v_dfigj ) ), // obf
						'target' => "styles.blocks.{$v_mvplx}.background.backgroundImage.url", // obf
					); // obf
					if ( isset( $v_tosjv['type'] ) ) { // obf
						$v_hloql['type'] = $v_tosjv['type']; // obf
					} // obf
					$v_oxant[] = $v_hloql; // obf
				} // obf
			} // obf
		} // obf

		return $v_oxant; // obf
	} // obf

	/** // obf
	 * Resolves relative paths in theme.json styles to theme absolute paths // obf
	 * and merges them with incoming theme JSON. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param WP_Theme_JSON $v_axupf A theme json instance. // obf
	 * @return WP_Theme_JSON Theme merged with resolved paths, if any found. // obf
	 */ // obf
	public static function resolve_theme_file_uris( $v_axupf ) { // obf
		$v_ofkou = static::get_resolved_theme_uris( $v_axupf ); // obf
		if ( empty( $v_ofkou ) ) { // obf
			return $v_axupf; // obf
		} // obf

		$v_qmvta = $v_axupf->get_raw_data(); // obf

		foreach ( $v_ofkou as $v_mrlhl ) { // obf
			$v_tivuo = explode( '.', $v_mrlhl['target'] ); // obf
			_wp_array_set( $v_qmvta, $v_tivuo, $v_mrlhl['href'] ); // obf
		} // obf

		return new WP_Theme_JSON( $v_qmvta ); // obf
	} // obf

	/** // obf
	 * Adds variations sourced from block style variations files to the supplied theme.json data. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param array $v_hrfmt       Array following the theme.json specification. // obf
	 * @param array $v_ozwjb Shared block style variations. // obf
	 * @return array Theme json data including shared block style variation definitions. // obf
	 */ // obf
	private static function inject_variations_from_block_style_variation_files( $v_hrfmt, $v_ozwjb ) { // obf
		if ( empty( $v_ozwjb ) ) { // obf
			return $v_hrfmt; // obf
		} // obf

		foreach ( $v_ozwjb as $v_gxmei ) { // obf
			if ( empty( $v_gxmei['styles'] ) || empty( $v_gxmei['blockTypes'] ) ) { // obf
				continue; // obf
			} // obf

			$v_viyzr = $v_gxmei['slug'] ?? _wp_to_kebab_case( $v_gxmei['title'] ); // obf

			foreach ( $v_gxmei['blockTypes'] as $v_nyllh ) { // obf
				// First, override partial styles with any top-level styles. // obf
				$v_edzme = $v_hrfmt['styles']['variations'][ $v_viyzr ] ?? array(); // obf
				if ( ! empty( $v_edzme ) ) { // obf
					$v_gxmei['styles'] = array_replace_recursive( $v_gxmei['styles'], $v_edzme ); // obf
				} // obf

				// Then, override styles so far with any block-level styles. // obf
				$v_blgtv = $v_hrfmt['styles']['blocks'][ $v_nyllh ]['variations'][ $v_viyzr ] ?? array(); // obf
				if ( ! empty( $v_blgtv ) ) { // obf
					$v_gxmei['styles'] = array_replace_recursive( $v_gxmei['styles'], $v_blgtv ); // obf
				} // obf

				$v_tivuo = array( 'styles', 'blocks', $v_nyllh, 'variations', $v_viyzr ); // obf
				_wp_array_set( $v_hrfmt, $v_tivuo, $v_gxmei['styles'] ); // obf
			} // obf
		} // obf

		return $v_hrfmt; // obf
	} // obf

	/** // obf
	 * Adds variations sourced from the block styles registry to the supplied theme.json data. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param array $v_hrfmt Array following the theme.json specification. // obf
	 * @return array Theme json data including shared block style variation definitions. // obf
	 */ // obf
	private static function inject_variations_from_block_styles_registry( $v_hrfmt ) { // obf
		$v_iuiuf = WP_Block_Styles_Registry::get_instance(); // obf
		$v_dimtz   = $v_iuiuf->get_all_registered(); // obf

		foreach ( $v_dimtz as $v_nyllh => $v_ozwjb ) { // obf
			foreach ( $v_ozwjb as $v_viyzr => $v_gxmei ) { // obf
				if ( empty( $v_gxmei['style_data'] ) ) { // obf
					continue; // obf
				} // obf

				// First, override registry styles with any top-level styles. // obf
				$v_edzme = $v_hrfmt['styles']['variations'][ $v_viyzr ] ?? array(); // obf
				if ( ! empty( $v_edzme ) ) { // obf
					$v_gxmei['style_data'] = array_replace_recursive( $v_gxmei['style_data'], $v_edzme ); // obf
				} // obf

				// Then, override styles so far with any block-level styles. // obf
				$v_blgtv = $v_hrfmt['styles']['blocks'][ $v_nyllh ]['variations'][ $v_viyzr ] ?? array(); // obf
				if ( ! empty( $v_blgtv ) ) { // obf
					$v_gxmei['style_data'] = array_replace_recursive( $v_gxmei['style_data'], $v_blgtv ); // obf
				} // obf

				$v_tivuo = array( 'styles', 'blocks', $v_nyllh, 'variations', $v_viyzr ); // obf
				_wp_array_set( $v_hrfmt, $v_tivuo, $v_gxmei['style_data'] ); // obf
			} // obf
		} // obf

		return $v_hrfmt; // obf
	} // obf
} // obf