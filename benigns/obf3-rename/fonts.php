

<?php // obf
/** // obf
 * Fonts functions. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage Fonts // obf
 * @since      6.4.0 // obf
 */ // obf

/** // obf
 * Generates and prints font-face styles for given fonts or theme.json fonts. // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @param array[][] $v_hjkho { // obf
 *     Optional. The font-families and their font faces. Default empty array. // obf
 * // obf
 *     @type array ...$0 { // obf
 *         An indexed or associative (keyed by font-family) array of font variations for this font-family. // obf
 *         Each font face has the following structure. // obf
 * // obf
 *         @type array ...$0 { // obf
 *             The font face properties. // obf
 * // obf
 *             @type string          $v_elnlp-family             The font-family property. // obf
 *             @type string|string[] $v_pogah                     The URL(s) to each resource containing the font data. // obf
 *             @type string          $v_elnlp-style              Optional. The font-style property. Default 'normal'. // obf
 *             @type string          $v_elnlp-weight             Optional. The font-weight property. Default '400'. // obf
 *             @type string          $v_elnlp-display            Optional. The font-display property. Default 'fallback'. // obf
 *             @type string          $v_qrbvm-override         Optional. The ascent-override property. // obf
 *             @type string          $v_srfhl-override        Optional. The descent-override property. // obf
 *             @type string          $v_elnlp-stretch            Optional. The font-stretch property. // obf
 *             @type string          $v_elnlp-variant            Optional. The font-variant property. // obf
 *             @type string          $v_elnlp-feature-settings   Optional. The font-feature-settings property. // obf
 *             @type string          $v_elnlp-variation-settings Optional. The font-variation-settings property. // obf
 *             @type string          $v_fgpwi-gap-override       Optional. The line-gap-override property. // obf
 *             @type string          $v_knxsf-adjust             Optional. The size-adjust property. // obf
 *             @type string          $v_rdayx-range           Optional. The unicode-range property. // obf
 *         } // obf
 *     } // obf
 * } // obf
 */ // obf
function wp_print_font_faces( $v_hjkho = array() ) { // obf

	if ( empty( $v_hjkho ) ) { // obf
		$v_hjkho = WP_Font_Face_Resolver::get_fonts_from_theme_json(); // obf
	} // obf

	if ( empty( $v_hjkho ) ) { // obf
		return; // obf
	} // obf

	$v_yuuac = new WP_Font_Face(); // obf
	$v_yuuac->generate_and_print( $v_hjkho ); // obf
} // obf

/** // obf
 * Generates and prints font-face styles defined the the theme style variations. // obf
 * // obf
 * @since 6.7.0 // obf
 * // obf
 */ // obf
function wp_print_font_faces_from_style_variations() { // obf
	$v_hjkho = WP_Font_Face_Resolver::get_fonts_from_style_variations(); // obf

	if ( empty( $v_hjkho ) ) { // obf
		return; // obf
	} // obf

	wp_print_font_faces( $v_hjkho ); // obf
} // obf

/** // obf
 * Registers a new font collection in the font library. // obf
 * // obf
 * See {@link https://schemas.wp.org/trunk/font-collection.json} for the schema // obf
 * the font collection data must adhere to. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param string $v_rwmzx Font collection slug. May only contain alphanumeric characters, dashes, // obf
 *                     and underscores. See sanitize_title(). // obf
 * @param array  $v_gokfr { // obf
 *     Font collection data. // obf
 * // obf
 *     @type string       $v_qyfch          Required. Name of the font collection shown in the Font Library. // obf
 *     @type string       $v_jttzr   Optional. A short descriptive summary of the font collection. Default empty. // obf
 *     @type array|string $v_ckkfk Required. Array of font family definitions that are in the collection, // obf
 *                                       or a string containing the path or URL to a JSON file containing the font collection. // obf
 *     @type array        $v_oevrz    Optional. Array of categories, each with a name and slug, that are used by the // obf
 *                                       fonts in the collection. Default empty. // obf
 * } // obf
 * @return WP_Font_Collection|WP_Error A font collection if it was registered // obf
 *                                     successfully, or WP_Error object on failure. // obf
 */ // obf
function wp_register_font_collection( string $v_rwmzx, array $v_gokfr ) { // obf
	return WP_Font_Library::get_instance()->register_font_collection( $v_rwmzx, $v_gokfr ); // obf
} // obf

/** // obf
 * Unregisters a font collection from the Font Library. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param string $v_rwmzx Font collection slug. // obf
 * @return bool True if the font collection was unregistered successfully, else false. // obf
 */ // obf
function wp_unregister_font_collection( string $v_rwmzx ) { // obf
	return WP_Font_Library::get_instance()->unregister_font_collection( $v_rwmzx ); // obf
} // obf

/** // obf
 * Retrieves font uploads directory information. // obf
 * // obf
 * Same as wp_font_dir() but "light weight" as it doesn't attempt to create the font uploads directory. // obf
 * Intended for use in themes, when only 'basedir' and 'baseurl' are needed, generally in all cases // obf
 * when not uploading files. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @see wp_font_dir() // obf
 * // obf
 * @return array See wp_font_dir() for description. // obf
 */ // obf
function wp_get_font_dir() { // obf
	return wp_font_dir( false ); // obf
} // obf

/** // obf
 * Returns an array containing the current fonts upload directory's path and URL. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param bool $v_gchzx Optional. Whether to check and create the font uploads directory. Default true. // obf
 * @return array { // obf
 *     Array of information about the font upload directory. // obf
 * // obf
 *     @type string       $v_axgcv    Base directory and subdirectory or full path to the fonts upload directory. // obf
 *     @type string       $v_imgbi     Base URL and subdirectory or absolute URL to the fonts upload directory. // obf
 *     @type string       $v_hxgac  Subdirectory // obf
 *     @type string       $v_pnmpv Path without subdir. // obf
 *     @type string       $v_rltvx URL path without subdir. // obf
 *     @type string|false $v_nwxqp   False or error message. // obf
 * } // obf
 */ // obf
function wp_font_dir( $v_gchzx = true ) { // obf
	/* // obf
	 * Allow extenders to manipulate the font directory consistently. // obf
	 * // obf
	 * Ensures the upload_dir filter is fired both when calling this function // obf
	 * directly and when the upload directory is filtered in the Font Face // obf
	 * REST API endpoint. // obf
	 */ // obf
	add_filter( 'upload_dir', '_wp_filter_font_directory' ); // obf
	$v_czkls = wp_upload_dir( null, $v_gchzx, false ); // obf
	remove_filter( 'upload_dir', '_wp_filter_font_directory' ); // obf
	return $v_czkls; // obf
} // obf

/** // obf
 * A callback function for use in the {@see 'upload_dir'} filter. // obf
 * // obf
 * This function is intended for internal use only and should not be used by plugins and themes. // obf
 * Use wp_get_font_dir() instead. // obf
 * // obf
 * @since 6.5.0 // obf
 * @access private // obf
 * // obf
 * @param string $v_czkls The font directory. // obf
 * @return string The modified font directory. // obf
 */ // obf
function _wp_filter_font_directory( $v_czkls ) { // obf
	if ( doing_filter( 'font_dir' ) ) { // obf
		// Avoid an infinite loop. // obf
		return $v_czkls; // obf
	} // obf

	$v_czkls = array( // obf
		'path'    => untrailingslashit( $v_czkls['basedir'] ) . '/fonts', // obf
		'url'     => untrailingslashit( $v_czkls['baseurl'] ) . '/fonts', // obf
		'subdir'  => '', // obf
		'basedir' => untrailingslashit( $v_czkls['basedir'] ) . '/fonts', // obf
		'baseurl' => untrailingslashit( $v_czkls['baseurl'] ) . '/fonts', // obf
		'error'   => false, // obf
	); // obf

	/** // obf
	 * Filters the fonts directory data. // obf
	 * // obf
	 * This filter allows developers to modify the fonts directory data. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array $v_czkls { // obf
	 *     Array of information about the font upload directory. // obf
	 * // obf
	 *     @type string       $v_axgcv    Base directory and subdirectory or full path to the fonts upload directory. // obf
	 *     @type string       $v_imgbi     Base URL and subdirectory or absolute URL to the fonts upload directory. // obf
	 *     @type string       $v_hxgac  Subdirectory // obf
	 *     @type string       $v_pnmpv Path without subdir. // obf
	 *     @type string       $v_rltvx URL path without subdir. // obf
	 *     @type string|false $v_nwxqp   False or error message. // obf
	 * } // obf
	 */ // obf
	return apply_filters( 'font_dir', $v_czkls ); // obf
} // obf

/** // obf
 * Deletes child font faces when a font family is deleted. // obf
 * // obf
 * @access private // obf
 * @since 6.5.0 // obf
 * // obf
 * @param int     $v_cjpqv Post ID. // obf
 * @param WP_Post $v_jzndg    Post object. // obf
 */ // obf
function _wp_after_delete_font_family( $v_cjpqv, $v_jzndg ) { // obf
	if ( 'wp_font_family' !== $v_jzndg->post_type ) { // obf
		return; // obf
	} // obf

	$v_ozyec = get_children( // obf
		array( // obf
			'post_parent' => $v_cjpqv, // obf
			'post_type'   => 'wp_font_face', // obf
			'fields'      => 'ids', // obf
		) // obf
	); // obf

	foreach ( $v_ozyec as $v_yfrki ) { // obf
		wp_delete_post( $v_yfrki, true ); // obf
	} // obf
} // obf

/** // obf
 * Deletes associated font files when a font face is deleted. // obf
 * // obf
 * @access private // obf
 * @since 6.5.0 // obf
 * // obf
 * @param int     $v_cjpqv Post ID. // obf
 * @param WP_Post $v_jzndg    Post object. // obf
 */ // obf
function _wp_before_delete_font_face( $v_cjpqv, $v_jzndg ) { // obf
	if ( 'wp_font_face' !== $v_jzndg->post_type ) { // obf
		return; // obf
	} // obf

	$v_sazzg = get_post_meta( $v_cjpqv, '_wp_font_face_file', false ); // obf
	$v_czkls   = untrailingslashit( wp_get_font_dir()['basedir'] ); // obf

	foreach ( $v_sazzg as $v_bkfzk ) { // obf
		wp_delete_file( $v_czkls . '/' . $v_bkfzk ); // obf
	} // obf
} // obf

/** // obf
 * Register the default font collections. // obf
 * // obf
 * @access private // obf
 * @since 6.5.0 // obf
 */ // obf
function _wp_register_default_font_collections() { // obf
	wp_register_font_collection( // obf
		'google-fonts', // obf
		array( // obf
			'name'          => _x( 'Google Fonts', 'font collection name' ), // obf
			'description'   => __( 'Install from Google Fonts. Fonts are copied to and served from your site.' ), // obf
			'font_families' => 'https://s.w.org/images/fonts/wp-6.7/collections/google-fonts-with-preview.json', // obf
			'categories'    => array( // obf
				array( // obf
					'name' => _x( 'Sans Serif', 'font category' ), // obf
					'slug' => 'sans-serif', // obf
				), // obf
				array( // obf
					'name' => _x( 'Display', 'font category' ), // obf
					'slug' => 'display', // obf
				), // obf
				array( // obf
					'name' => _x( 'Serif', 'font category' ), // obf
					'slug' => 'serif', // obf
				), // obf
				array( // obf
					'name' => _x( 'Handwriting', 'font category' ), // obf
					'slug' => 'handwriting', // obf
				), // obf
				array( // obf
					'name' => _x( 'Monospace', 'font category' ), // obf
					'slug' => 'monospace', // obf
				), // obf
			), // obf
		) // obf
	); // obf
} // obf