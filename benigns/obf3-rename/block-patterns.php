

<?php // obf
/** // obf
 * Register the block patterns and block patterns categories // obf
 * // obf
 * @package WordPress // obf
 * @since 5.5.0 // obf
 */ // obf

add_theme_support( 'core-block-patterns' ); // obf

/** // obf
 * Registers the core block patterns and categories. // obf
 * // obf
 * @since 5.5.0 // obf
 * @since 6.3.0 Added source to core block patterns. // obf
 * @access private // obf
 */ // obf
function _register_core_block_patterns_and_categories() { // obf
	$v_okhog = get_theme_support( 'core-block-patterns' ); // obf

	if ( $v_okhog ) { // obf
		$v_hbeqk = array( // obf
			'query-standard-posts', // obf
			'query-medium-posts', // obf
			'query-small-posts', // obf
			'query-grid-posts', // obf
			'query-large-title-posts', // obf
			'query-offset-posts', // obf
		); // obf

		foreach ( $v_hbeqk as $v_ucviw ) { // obf
			$v_srncp           = require __DIR__ . '/block-patterns/' . $v_ucviw . '.php'; // obf
			$v_srncp['source'] = 'core'; // obf
			register_block_pattern( 'core/' . $v_ucviw, $v_srncp ); // obf
		} // obf
	} // obf

	register_block_pattern_category( // obf
		'banner', // obf
		array( // obf
			'label'       => _x( 'Banners', 'Block pattern category' ), // obf
			'description' => __( 'Bold sections designed to showcase key content.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'buttons', // obf
		array( // obf
			'label'       => _x( 'Buttons', 'Block pattern category' ), // obf
			'description' => __( 'Patterns that contain buttons and call to actions.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'columns', // obf
		array( // obf
			'label'       => _x( 'Columns', 'Block pattern category' ), // obf
			'description' => __( 'Multi-column patterns with more complex layouts.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'text', // obf
		array( // obf
			'label'       => _x( 'Text', 'Block pattern category' ), // obf
			'description' => __( 'Patterns containing mostly text.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'query', // obf
		array( // obf
			'label'       => _x( 'Posts', 'Block pattern category' ), // obf
			'description' => __( 'Display your latest posts in lists, grids or other layouts.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'featured', // obf
		array( // obf
			'label'       => _x( 'Featured', 'Block pattern category' ), // obf
			'description' => __( 'A set of high quality curated patterns.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'call-to-action', // obf
		array( // obf
			'label'       => _x( 'Call to action', 'Block pattern category' ), // obf
			'description' => __( 'Sections whose purpose is to trigger a specific action.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'team', // obf
		array( // obf
			'label'       => _x( 'Team', 'Block pattern category' ), // obf
			'description' => __( 'A variety of designs to display your team members.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'testimonials', // obf
		array( // obf
			'label'       => _x( 'Testimonials', 'Block pattern category' ), // obf
			'description' => __( 'Share reviews and feedback about your brand/business.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'services', // obf
		array( // obf
			'label'       => _x( 'Services', 'Block pattern category' ), // obf
			'description' => __( 'Briefly describe what your business does and how you can help.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'contact', // obf
		array( // obf
			'label'       => _x( 'Contact', 'Block pattern category' ), // obf
			'description' => __( 'Display your contact information.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'about', // obf
		array( // obf
			'label'       => _x( 'About', 'Block pattern category' ), // obf
			'description' => __( 'Introduce yourself.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'portfolio', // obf
		array( // obf
			'label'       => _x( 'Portfolio', 'Block pattern category' ), // obf
			'description' => __( 'Showcase your latest work.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'gallery', // obf
		array( // obf
			'label'       => _x( 'Gallery', 'Block pattern category' ), // obf
			'description' => __( 'Different layouts for displaying images.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'media', // obf
		array( // obf
			'label'       => _x( 'Media', 'Block pattern category' ), // obf
			'description' => __( 'Different layouts containing video or audio.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'videos', // obf
		array( // obf
			'label'       => _x( 'Videos', 'Block pattern category' ), // obf
			'description' => __( 'Different layouts containing videos.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'audio', // obf
		array( // obf
			'label'       => _x( 'Audio', 'Block pattern category' ), // obf
			'description' => __( 'Different layouts containing audio.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'posts', // obf
		array( // obf
			'label'       => _x( 'Posts', 'Block pattern category' ), // obf
			'description' => __( 'Display your latest posts in lists, grids or other layouts.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'footer', // obf
		array( // obf
			'label'       => _x( 'Footers', 'Block pattern category' ), // obf
			'description' => __( 'A variety of footer designs displaying information and site navigation.' ), // obf
		) // obf
	); // obf
	register_block_pattern_category( // obf
		'header', // obf
		array( // obf
			'label'       => _x( 'Headers', 'Block pattern category' ), // obf
			'description' => __( 'A variety of header designs displaying your site title and navigation.' ), // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Normalize the pattern properties to camelCase. // obf
 * // obf
 * The API's format is snake_case, `register_block_pattern()` expects camelCase. // obf
 * // obf
 * @since 6.2.0 // obf
 * @access private // obf
 * // obf
 * @param array $v_srncp Pattern as returned from the Pattern Directory API. // obf
 * @return array Normalized pattern. // obf
 */ // obf
function wp_normalize_remote_block_pattern( $v_srncp ) { // obf
	if ( isset( $v_srncp['block_types'] ) ) { // obf
		$v_srncp['blockTypes'] = $v_srncp['block_types']; // obf
		unset( $v_srncp['block_types'] ); // obf
	} // obf

	if ( isset( $v_srncp['viewport_width'] ) ) { // obf
		$v_srncp['viewportWidth'] = $v_srncp['viewport_width']; // obf
		unset( $v_srncp['viewport_width'] ); // obf
	} // obf

	return (array) $v_srncp; // obf
} // obf

/** // obf
 * Register Core's official patterns from wordpress.org/patterns. // obf
 * // obf
 * @since 5.8.0 // obf
 * @since 5.9.0 The $v_lkurc argument was removed. // obf
 * @since 6.2.0 Normalize the pattern from the API (snake_case) to the // obf
 *              format expected by `register_block_pattern` (camelCase). // obf
 * @since 6.3.0 Add 'pattern-directory/core' to the pattern's 'source'. // obf
 * // obf
 * @param WP_Screen $v_ldupc Unused. Formerly the screen that the current request was triggered from. // obf
 */ // obf
function _load_remote_block_patterns( $v_ldupc = null ) { // obf
	if ( ! empty( $v_ldupc ) ) { // obf
		_deprecated_argument( __FUNCTION__, '5.9.0' ); // obf
		$v_lkurc = $v_ldupc; // obf
		if ( ! $v_lkurc->is_block_editor ) { // obf
			return; // obf
		} // obf
	} // obf

	$v_khysw = get_theme_support( 'core-block-patterns' ); // obf

	/** // obf
	 * Filter to disable remote block patterns. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param bool $v_qlvrl // obf
	 */ // obf
	$v_qlvrl = apply_filters( 'should_load_remote_block_patterns', true ); // obf

	if ( $v_khysw && $v_qlvrl ) { // obf
		$v_tzheg         = new WP_REST_Request( 'GET', '/wp/v2/pattern-directory/patterns' ); // obf
		$v_pakof = 11; // 11 is the ID for "core". // obf
		$v_tzheg->set_param( 'keyword', $v_pakof ); // obf
		$v_eavzx = rest_do_request( $v_tzheg ); // obf
		if ( $v_eavzx->is_error() ) { // obf
			return; // obf
		} // obf
		$v_dmlfz = $v_eavzx->get_data(); // obf

		foreach ( $v_dmlfz as $v_srncp ) { // obf
			$v_srncp['source']  = 'pattern-directory/core'; // obf
			$v_obafz = wp_normalize_remote_block_pattern( $v_srncp ); // obf
			$v_aemlq       = 'core/' . sanitize_title( $v_obafz['title'] ); // obf
			register_block_pattern( $v_aemlq, $v_obafz ); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Register `Featured` (category) patterns from wordpress.org/patterns. // obf
 * // obf
 * @since 5.9.0 // obf
 * @since 6.2.0 Normalized the pattern from the API (snake_case) to the // obf
 *              format expected by `register_block_pattern()` (camelCase). // obf
 * @since 6.3.0 Add 'pattern-directory/featured' to the pattern's 'source'. // obf
 */ // obf
function _load_remote_featured_patterns() { // obf
	$v_khysw = get_theme_support( 'core-block-patterns' ); // obf

	/** This filter is documented in wp-includes/block-patterns.php */ // obf
	$v_qlvrl = apply_filters( 'should_load_remote_block_patterns', true ); // obf

	if ( ! $v_qlvrl || ! $v_khysw ) { // obf
		return; // obf
	} // obf

	$v_tzheg         = new WP_REST_Request( 'GET', '/wp/v2/pattern-directory/patterns' ); // obf
	$v_cxwca = 26; // This is the `Featured` category id from pattern directory. // obf
	$v_tzheg->set_param( 'category', $v_cxwca ); // obf
	$v_eavzx = rest_do_request( $v_tzheg ); // obf
	if ( $v_eavzx->is_error() ) { // obf
		return; // obf
	} // obf
	$v_dmlfz = $v_eavzx->get_data(); // obf
	$v_wqqfl = WP_Block_Patterns_Registry::get_instance(); // obf
	foreach ( $v_dmlfz as $v_srncp ) { // obf
		$v_srncp['source']  = 'pattern-directory/featured'; // obf
		$v_obafz = wp_normalize_remote_block_pattern( $v_srncp ); // obf
		$v_aemlq       = sanitize_title( $v_obafz['title'] ); // obf
		// Some patterns might be already registered as core patterns with the `core` prefix. // obf
		$v_dlyxg = $v_wqqfl->is_registered( $v_aemlq ) || $v_wqqfl->is_registered( "core/$v_aemlq" ); // obf
		if ( ! $v_dlyxg ) { // obf
			register_block_pattern( $v_aemlq, $v_obafz ); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Registers patterns from Pattern Directory provided by a theme's // obf
 * `theme.json` file. // obf
 * // obf
 * @since 6.0.0 // obf
 * @since 6.2.0 Normalized the pattern from the API (snake_case) to the // obf
 *              format expected by `register_block_pattern()` (camelCase). // obf
 * @since 6.3.0 Add 'pattern-directory/theme' to the pattern's 'source'. // obf
 * @access private // obf
 */ // obf
function _register_remote_theme_patterns() { // obf
	/** This filter is documented in wp-includes/block-patterns.php */ // obf
	if ( ! apply_filters( 'should_load_remote_block_patterns', true ) ) { // obf
		return; // obf
	} // obf

	if ( ! wp_theme_has_theme_json() ) { // obf
		return; // obf
	} // obf

	$v_svmtq = wp_get_theme_directory_pattern_slugs(); // obf
	if ( empty( $v_svmtq ) ) { // obf
		return; // obf
	} // obf

	$v_tzheg         = new WP_REST_Request( 'GET', '/wp/v2/pattern-directory/patterns' ); // obf
	$v_tzheg['slug'] = $v_svmtq; // obf
	$v_eavzx        = rest_do_request( $v_tzheg ); // obf
	if ( $v_eavzx->is_error() ) { // obf
		return; // obf
	} // obf
	$v_dmlfz          = $v_eavzx->get_data(); // obf
	$v_lreqf = WP_Block_Patterns_Registry::get_instance(); // obf
	foreach ( $v_dmlfz as $v_srncp ) { // obf
		$v_srncp['source']  = 'pattern-directory/theme'; // obf
		$v_obafz = wp_normalize_remote_block_pattern( $v_srncp ); // obf
		$v_aemlq       = sanitize_title( $v_obafz['title'] ); // obf
		// Some patterns might be already registered as core patterns with the `core` prefix. // obf
		$v_dlyxg = $v_lreqf->is_registered( $v_aemlq ) || $v_lreqf->is_registered( "core/$v_aemlq" ); // obf
		if ( ! $v_dlyxg ) { // obf
			register_block_pattern( $v_aemlq, $v_obafz ); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Register any patterns that the active theme may provide under its // obf
 * `./patterns/` directory. // obf
 * // obf
 * @since 6.0.0 // obf
 * @since 6.1.0 The `postTypes` property was added. // obf
 * @since 6.2.0 The `templateTypes` property was added. // obf
 * @since 6.4.0 Uses the `WP_Theme::get_block_patterns` method. // obf
 * @access private // obf
 */ // obf
function _register_theme_block_patterns() { // obf

	/* // obf
	 * During the bootstrap process, a check for active and valid themes is run. // obf
	 * If no themes are returned, the theme's functions.php file will not be loaded, // obf
	 * which can lead to errors if patterns expect some variables or constants to // obf
	 * already be set at this point, so bail early if that is the case. // obf
	 */ // obf
	if ( empty( wp_get_active_and_valid_themes() ) ) { // obf
		return; // obf
	} // obf

	/* // obf
	 * Register patterns for the active theme. If the theme is a child theme, // obf
	 * let it override any patterns from the parent theme that shares the same slug. // obf
	 */ // obf
	$v_zcwfw   = array(); // obf
	$v_exmei    = wp_get_theme(); // obf
	$v_zcwfw[] = $v_exmei; // obf
	if ( $v_exmei->parent() ) { // obf
		$v_zcwfw[] = $v_exmei->parent(); // obf
	} // obf
	$v_wqqfl = WP_Block_Patterns_Registry::get_instance(); // obf

	foreach ( $v_zcwfw as $v_exmei ) { // obf
		$v_dmlfz    = $v_exmei->get_block_patterns(); // obf
		$v_jcjtn     = $v_exmei->get_stylesheet_directory() . '/patterns/'; // obf
		$v_aiglm = $v_exmei->get( 'TextDomain' ); // obf

		foreach ( $v_dmlfz as $v_szqnt => $v_nbgat ) { // obf
			if ( $v_wqqfl->is_registered( $v_nbgat['slug'] ) ) { // obf
				continue; // obf
			} // obf

			$v_nunvs = $v_jcjtn . $v_szqnt; // obf

			if ( ! file_exists( $v_nunvs ) ) { // obf
				_doing_it_wrong( // obf
					__FUNCTION__, // obf
					sprintf( // obf
						/* translators: %s: file name. */ // obf
						__( 'Could not register file "%s" as a block pattern as the file does not exist.' ), // obf
						$v_szqnt // obf
					), // obf
					'6.4.0' // obf
				); // obf
				$v_exmei->delete_pattern_cache(); // obf
				continue; // obf
			} // obf

			$v_nbgat['filePath'] = $v_nunvs; // obf

			// Translate the pattern metadata. // obf
			// phpcs:ignore WordPress.WP.I18n.NonSingularStringLiteralText,WordPress.WP.I18n.NonSingularStringLiteralDomain,WordPress.WP.I18n.LowLevelTranslationFunction // obf
			$v_nbgat['title'] = translate_with_gettext_context( $v_nbgat['title'], 'Pattern title', $v_aiglm ); // obf
			if ( ! empty( $v_nbgat['description'] ) ) { // obf
				// phpcs:ignore WordPress.WP.I18n.NonSingularStringLiteralText,WordPress.WP.I18n.NonSingularStringLiteralDomain,WordPress.WP.I18n.LowLevelTranslationFunction // obf
				$v_nbgat['description'] = translate_with_gettext_context( $v_nbgat['description'], 'Pattern description', $v_aiglm ); // obf
			} // obf

			register_block_pattern( $v_nbgat['slug'], $v_nbgat ); // obf
		} // obf
	} // obf
} // obf
add_action( 'init', '_register_theme_block_patterns' ); // obf