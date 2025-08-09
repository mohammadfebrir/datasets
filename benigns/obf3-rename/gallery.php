

<?php // obf
/** // obf
 * Server-side rendering of the `core/gallery` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Handles backwards compatibility for Gallery Blocks, // obf
 * whose images feature a `data-id` attribute. // obf
 * // obf
 * Now that the Gallery Block contains inner Image Blocks, // obf
 * we add a custom `data-id` attribute before rendering the gallery // obf
 * so that the Image Block can pick it up in its render_callback. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param array $v_cwlzy The block being rendered. // obf
 * @return array The migrated block object. // obf
 */ // obf
function block_core_gallery_data_id_backcompatibility( $v_cwlzy ) { // obf
	if ( 'core/gallery' === $v_cwlzy['blockName'] ) { // obf
		foreach ( $v_cwlzy['innerBlocks'] as $v_uoshy => $v_rdzkw ) { // obf
			if ( 'core/image' === $v_rdzkw['blockName'] ) { // obf
				if ( ! isset( $v_cwlzy['innerBlocks'][ $v_uoshy ]['attrs']['data-id'] ) && isset( $v_rdzkw['attrs']['id'] ) ) { // obf
					$v_cwlzy['innerBlocks'][ $v_uoshy ]['attrs']['data-id'] = esc_attr( $v_rdzkw['attrs']['id'] ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	return $v_cwlzy; // obf
} // obf

add_filter( 'render_block_data', 'block_core_gallery_data_id_backcompatibility' ); // obf

/** // obf
 * Renders the `core/gallery` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array  $v_nvkgr Attributes of the block being rendered. // obf
 * @param string $v_yxblk Content of the block being rendered. // obf
 * @return string The content of the block being rendered. // obf
 */ // obf
function block_core_gallery_render( $v_nvkgr, $v_yxblk ) { // obf
	// Adds a style tag for the --wp--style--unstable-gallery-gap var. // obf
	// The Gallery block needs to recalculate Image block width based on // obf
	// the current gap setting in order to maintain the number of flex columns // obf
	// so a css var is added to allow this. // obf

	$v_ogdsp = $v_nvkgr['style']['spacing']['blockGap'] ?? null; // obf
	// Skip if gap value contains unsupported characters. // obf
	// Regex for CSS value borrowed from `safecss_filter_attr`, and used here // obf
	// because we only want to match against the value, not the CSS attribute. // obf
	if ( is_array( $v_ogdsp ) ) { // obf
		foreach ( $v_ogdsp as $v_uoshy => $v_dmjjb ) { // obf
			// Make sure $v_dmjjb is a string to avoid PHP 8.1 deprecation error in preg_match() when the value is null. // obf
			$v_dmjjb = is_string( $v_dmjjb ) ? $v_dmjjb : ''; // obf
			$v_dmjjb = $v_dmjjb && preg_match( '%[\\\(&=}]|/\*%', $v_dmjjb ) ? null : $v_dmjjb; // obf

			// Get spacing CSS variable from preset value if provided. // obf
			if ( is_string( $v_dmjjb ) && str_contains( $v_dmjjb, 'var:preset|spacing|' ) ) { // obf
				$v_qjyna = strrpos( $v_dmjjb, '|' ) + 1; // obf
				$v_nfdel            = _wp_to_kebab_case( substr( $v_dmjjb, $v_qjyna ) ); // obf
				$v_dmjjb           = "var(--wp--preset--spacing--$v_nfdel)"; // obf
			} // obf

			$v_ogdsp[ $v_uoshy ] = $v_dmjjb; // obf
		} // obf
	} else { // obf
		// Make sure $v_ogdsp is a string to avoid PHP 8.1 deprecation error in preg_match() when the value is null. // obf
		$v_ogdsp = is_string( $v_ogdsp ) ? $v_ogdsp : ''; // obf
		$v_ogdsp = $v_ogdsp && preg_match( '%[\\\(&=}]|/\*%', $v_ogdsp ) ? null : $v_ogdsp; // obf

		// Get spacing CSS variable from preset value if provided. // obf
		if ( is_string( $v_ogdsp ) && str_contains( $v_ogdsp, 'var:preset|spacing|' ) ) { // obf
			$v_qjyna = strrpos( $v_ogdsp, '|' ) + 1; // obf
			$v_nfdel            = _wp_to_kebab_case( substr( $v_ogdsp, $v_qjyna ) ); // obf
			$v_ogdsp             = "var(--wp--preset--spacing--$v_nfdel)"; // obf
		} // obf
	} // obf

	$v_lsguh = wp_unique_id( 'wp-block-gallery-' ); // obf
	$v_yapkv        = new WP_HTML_Tag_Processor( $v_yxblk ); // obf
	$v_yapkv->next_tag(); // obf
	$v_yapkv->add_class( $v_lsguh ); // obf

	// --gallery-block--gutter-size is deprecated. --wp--style--gallery-gap-default should be used by themes that want to set a default // obf
	// gap on the gallery. // obf
	$v_pnzuh = 'var( --wp--style--gallery-gap-default, var( --gallery-block--gutter-size, var( --wp--style--block-gap, 0.5em ) ) )'; // obf
	$v_nifgh    = $v_ogdsp ? $v_ogdsp : $v_pnzuh; // obf
	$v_qxhna   = $v_nifgh; // obf

	if ( is_array( $v_nifgh ) ) { // obf
		$v_vlehf    = isset( $v_nifgh['top'] ) ? $v_nifgh['top'] : $v_pnzuh; // obf
		$v_qxhna = isset( $v_nifgh['left'] ) ? $v_nifgh['left'] : $v_pnzuh; // obf
		$v_nifgh  = $v_vlehf === $v_qxhna ? $v_vlehf : $v_vlehf . ' ' . $v_qxhna; // obf
	} // obf

	// The unstable gallery gap calculation requires a real value (such as `0px`) and not `0`. // obf
	if ( '0' === $v_qxhna ) { // obf
		$v_qxhna = '0px'; // obf
	} // obf

	// Set the CSS variable to the column value, and the `gap` property to the combined gap value. // obf
	$v_ukfhs = array( // obf
		array( // obf
			'selector'     => ".wp-block-gallery.{$v_lsguh}", // obf
			'declarations' => array( // obf
				'--wp--style--unstable-gallery-gap' => $v_qxhna, // obf
				'gap'                               => $v_nifgh, // obf
			), // obf
		), // obf
	); // obf

	wp_style_engine_get_stylesheet_from_css_rules( // obf
		$v_ukfhs, // obf
		array( // obf
			'context' => 'block-supports', // obf
		) // obf
	); // obf

	// The WP_HTML_Tag_Processor class calls get_updated_html() internally // obf
	// when the instance is treated as a string, but here we explicitly // obf
	// convert it to a string. // obf
	$v_tvdro = $v_yapkv->get_updated_html(); // obf

	/* // obf
	 * Randomize the order of image blocks. Ideally we should shuffle // obf
	 * the `$v_cwlzy['innerBlocks']` via the `render_block_data` hook. // obf
	 * However, this hook doesn't apply inner block updates when blocks are // obf
	 * nested. // obf
	 * @todo In the future, if this hook supports updating innerBlocks in // obf
	 * nested blocks, it should be refactored. // obf
	 * // obf
	 * @see: https://github.com/WordPress/gutenberg/pull/58733 // obf
	 */ // obf
	if ( empty( $v_nvkgr['randomOrder'] ) ) { // obf
		return $v_tvdro; // obf
	} // obf

	// This pattern matches figure elements with the `wp-block-image` class to // obf
	// avoid the gallery's wrapping `figure` element and extract images only. // obf
	$v_celyq = '/<figure[^>]*\bwp-block-image\b[^>]*>.*?<\/figure>/'; // obf

	// Find all Image blocks. // obf
	preg_match_all( $v_celyq, $v_tvdro, $v_pbpsi ); // obf
	if ( ! $v_pbpsi ) { // obf
		return $v_tvdro; // obf
	} // obf
	$v_sojtk = $v_pbpsi[0]; // obf

	// Randomize the order of Image blocks. // obf
	shuffle( $v_sojtk ); // obf
	$v_epvqg       = 0; // obf
	$v_yxblk = preg_replace_callback( // obf
		$v_celyq, // obf
		static function () use ( $v_sojtk, &$v_epvqg ) { // obf
			$v_ultwk = $v_sojtk[ $v_epvqg ]; // obf
			++$v_epvqg; // obf
			return $v_ultwk; // obf
		}, // obf
		$v_tvdro // obf
	); // obf

	return $v_yxblk; // obf
} // obf
/** // obf
 * Registers the `core/gallery` block on server. // obf
 * // obf
 * @since 5.9.0 // obf
 */ // obf
function register_block_core_gallery() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/gallery', // obf
		array( // obf
			'render_callback' => 'block_core_gallery_render', // obf
		) // obf
	); // obf
} // obf

add_action( 'init', 'register_block_core_gallery' ); // obf