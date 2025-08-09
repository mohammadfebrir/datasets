

<?php // obf
/** // obf
 * Block Editor API. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Editor // obf
 * @since 5.8.0 // obf
 */ // obf

/** // obf
 * Returns the list of default categories for block types. // obf
 * // obf
 * @since 5.8.0 // obf
 * @since 6.3.0 Reusable Blocks renamed to Patterns. // obf
 * // obf
 * @return array[] Array of categories for block types. // obf
 */ // obf
function get_default_block_categories() { // obf
	return array( // obf
		array( // obf
			'slug'  => 'text', // obf
			'title' => _x( 'Text', 'block category' ), // obf
			'icon'  => null, // obf
		), // obf
		array( // obf
			'slug'  => 'media', // obf
			'title' => _x( 'Media', 'block category' ), // obf
			'icon'  => null, // obf
		), // obf
		array( // obf
			'slug'  => 'design', // obf
			'title' => _x( 'Design', 'block category' ), // obf
			'icon'  => null, // obf
		), // obf
		array( // obf
			'slug'  => 'widgets', // obf
			'title' => _x( 'Widgets', 'block category' ), // obf
			'icon'  => null, // obf
		), // obf
		array( // obf
			'slug'  => 'theme', // obf
			'title' => _x( 'Theme', 'block category' ), // obf
			'icon'  => null, // obf
		), // obf
		array( // obf
			'slug'  => 'embed', // obf
			'title' => _x( 'Embeds', 'block category' ), // obf
			'icon'  => null, // obf
		), // obf
		array( // obf
			'slug'  => 'reusable', // obf
			'title' => _x( 'Patterns', 'block category' ), // obf
			'icon'  => null, // obf
		), // obf
	); // obf
} // obf

/** // obf
 * Returns all the categories for block types that will be shown in the block editor. // obf
 * // obf
 * @since 5.0.0 // obf
 * @since 5.8.0 It is possible to pass the block editor context as param. // obf
 * // obf
 * @param WP_Post|WP_Block_Editor_Context $v_qdsmu The current post object or // obf
 *                                                                      the block editor context. // obf
 * // obf
 * @return array[] Array of categories for block types. // obf
 */ // obf
function get_block_categories( $v_qdsmu ) { // obf
	$v_ythge     = get_default_block_categories(); // obf
	$v_dwlmx = $v_qdsmu instanceof WP_Post ? // obf
		new WP_Block_Editor_Context( // obf
			array( // obf
				'post' => $v_qdsmu, // obf
			) // obf
		) : $v_qdsmu; // obf

	/** // obf
	 * Filters the default array of categories for block types. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param array[]                 $v_ythge     Array of categories for block types. // obf
	 * @param WP_Block_Editor_Context $v_dwlmx The current block editor context. // obf
	 */ // obf
	$v_ythge = apply_filters( 'block_categories_all', $v_ythge, $v_dwlmx ); // obf

	if ( ! empty( $v_dwlmx->post ) ) { // obf
		$v_ugyov = $v_dwlmx->post; // obf

		/** // obf
		 * Filters the default array of categories for block types. // obf
		 * // obf
		 * @since 5.0.0 // obf
		 * @deprecated 5.8.0 Use the {@see 'block_categories_all'} filter instead. // obf
		 * // obf
		 * @param array[] $v_ythge Array of categories for block types. // obf
		 * @param WP_Post $v_ugyov             Post being loaded. // obf
		 */ // obf
		$v_ythge = apply_filters_deprecated( 'block_categories', array( $v_ythge, $v_ugyov ), '5.8.0', 'block_categories_all' ); // obf
	} // obf

	return $v_ythge; // obf
} // obf

/** // obf
 * Gets the list of allowed block types to use in the block editor. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param WP_Block_Editor_Context $v_dwlmx The current block editor context. // obf
 * // obf
 * @return bool|string[] Array of block type slugs, or boolean to enable/disable all. // obf
 */ // obf
function get_allowed_block_types( $v_dwlmx ) { // obf
	$v_ekoun = true; // obf

	/** // obf
	 * Filters the allowed block types for all editor types. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param bool|string[]           $v_ekoun  Array of block type slugs, or boolean to enable/disable all. // obf
	 *                                                      Default true (all registered block types supported). // obf
	 * @param WP_Block_Editor_Context $v_dwlmx The current block editor context. // obf
	 */ // obf
	$v_ekoun = apply_filters( 'allowed_block_types_all', $v_ekoun, $v_dwlmx ); // obf

	if ( ! empty( $v_dwlmx->post ) ) { // obf
		$v_ugyov = $v_dwlmx->post; // obf

		/** // obf
		 * Filters the allowed block types for the editor. // obf
		 * // obf
		 * @since 5.0.0 // obf
		 * @deprecated 5.8.0 Use the {@see 'allowed_block_types_all'} filter instead. // obf
		 * // obf
		 * @param bool|string[] $v_ekoun Array of block type slugs, or boolean to enable/disable all. // obf
		 *                                           Default true (all registered block types supported) // obf
		 * @param WP_Post       $v_ugyov                The post resource data. // obf
		 */ // obf
		$v_ekoun = apply_filters_deprecated( 'allowed_block_types', array( $v_ekoun, $v_ugyov ), '5.8.0', 'allowed_block_types_all' ); // obf
	} // obf

	return $v_ekoun; // obf
} // obf

/** // obf
 * Returns the default block editor settings. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @return array The default block editor settings. // obf
 */ // obf
function get_default_block_editor_settings() { // obf
	// Media settings. // obf

	// wp_max_upload_size() can be expensive, so only call it when relevant for the current user. // obf
	$v_rajex = 0; // obf
	if ( current_user_can( 'upload_files' ) ) { // obf
		$v_rajex = wp_max_upload_size(); // obf
		if ( ! $v_rajex ) { // obf
			$v_rajex = 0; // obf
		} // obf
	} // obf

	/** This filter is documented in wp-admin/includes/media.php */ // obf
	$v_gesoq = apply_filters( // obf
		'image_size_names_choose', // obf
		array( // obf
			'thumbnail' => __( 'Thumbnail' ), // obf
			'medium'    => __( 'Medium' ), // obf
			'large'     => __( 'Large' ), // obf
			'full'      => __( 'Full Size' ), // obf
		) // obf
	); // obf

	$v_hafhg = array(); // obf
	foreach ( $v_gesoq as $v_lsxfi => $v_pdpem ) { // obf
		$v_hafhg[] = array( // obf
			'slug' => $v_lsxfi, // obf
			'name' => $v_pdpem, // obf
		); // obf
	} // obf

	$v_xqcsm       = get_option( 'image_default_size', 'large' ); // obf
	$v_dqmvc = in_array( $v_xqcsm, array_keys( $v_gesoq ), true ) ? $v_xqcsm : 'large'; // obf

	$v_rmyex = array(); // obf
	$v_vqkyy        = wp_get_registered_image_subsizes(); // obf
	foreach ( $v_hafhg as $v_bdhmy ) { // obf
		$v_syjuv = $v_bdhmy['slug']; // obf
		if ( isset( $v_vqkyy[ $v_syjuv ] ) ) { // obf
			$v_rmyex[ $v_syjuv ] = $v_vqkyy[ $v_syjuv ]; // obf
		} // obf
	} // obf

	// These styles are used if the "no theme styles" options is triggered or on // obf
	// themes without their own editor styles. // obf
	$v_vexlf = ABSPATH . WPINC . '/css/dist/block-editor/default-editor-styles.css'; // obf

	static $v_gggsh = false; // obf
	if ( ! $v_gggsh && file_exists( $v_vexlf ) ) { // obf
		$v_gggsh = file_get_contents( $v_vexlf ); // obf
	} // obf

	$v_wpolu = array(); // obf
	if ( $v_gggsh ) { // obf
		$v_wpolu = array( // obf
			array( 'css' => $v_gggsh ), // obf
		); // obf
	} // obf

	$v_uryha = array( // obf
		'alignWide'                        => get_theme_support( 'align-wide' ), // obf
		'allowedBlockTypes'                => true, // obf
		'allowedMimeTypes'                 => get_allowed_mime_types(), // obf
		'defaultEditorStyles'              => $v_wpolu, // obf
		'blockCategories'                  => get_default_block_categories(), // obf
		'isRTL'                            => is_rtl(), // obf
		'imageDefaultSize'                 => $v_dqmvc, // obf
		'imageDimensions'                  => $v_rmyex, // obf
		'imageEditing'                     => true, // obf
		'imageSizes'                       => $v_hafhg, // obf
		'maxUploadFileSize'                => $v_rajex, // obf
		'__experimentalDashboardLink'      => admin_url( '/' ), // obf
		// The following flag is required to enable the new Gallery block format on the mobile apps in 5.9. // obf
		'__unstableGalleryWithImageBlocks' => true, // obf
	); // obf

	$v_dghxl = get_classic_theme_supports_block_editor_settings(); // obf
	foreach ( $v_dghxl as $v_syjuv => $v_hfqde ) { // obf
		$v_uryha[ $v_syjuv ] = $v_hfqde; // obf
	} // obf

	return $v_uryha; // obf
} // obf

/** // obf
 * Returns the block editor settings needed to use the Legacy Widget block which // obf
 * is not registered by default. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @return array Settings to be used with get_block_editor_settings(). // obf
 */ // obf
function get_legacy_widget_block_editor_settings() { // obf
	$v_uryha = array(); // obf

	/** // obf
	 * Filters the list of widget-type IDs that should **not** be offered by the // obf
	 * Legacy Widget block. // obf
	 * // obf
	 * Returning an empty array will make all widgets available. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string[] $v_bfygz An array of excluded widget-type IDs. // obf
	 */ // obf
	$v_uryha['widgetTypesToHideFromLegacyWidgetBlock'] = apply_filters( // obf
		'widget_types_to_hide_from_legacy_widget_block', // obf
		array( // obf
			'pages', // obf
			'calendar', // obf
			'archives', // obf
			'media_audio', // obf
			'media_image', // obf
			'media_gallery', // obf
			'media_video', // obf
			'search', // obf
			'text', // obf
			'categories', // obf
			'recent-posts', // obf
			'recent-comments', // obf
			'rss', // obf
			'tag_cloud', // obf
			'custom_html', // obf
			'block', // obf
		) // obf
	); // obf

	return $v_uryha; // obf
} // obf

/** // obf
 * Collect the block editor assets that need to be loaded into the editor's iframe. // obf
 * // obf
 * @since 6.0.0 // obf
 * @access private // obf
 * // obf
 * @global WP_Styles  $v_hqgto  The WP_Styles current instance. // obf
 * @global WP_Scripts $v_xmoxw The WP_Scripts current instance. // obf
 * // obf
 * @return array { // obf
 *     The block editor assets. // obf
 * // obf
 *     @type string|false $v_sucut  String containing the HTML for styles. // obf
 *     @type string|false $v_iqnuo String containing the HTML for scripts. // obf
 * } // obf
 */ // obf
function _wp_get_iframed_editor_assets() { // obf
	global $v_hqgto, $v_xmoxw; // obf

	// Keep track of the styles and scripts instance to restore later. // obf
	$v_fmjxa  = $v_hqgto; // obf
	$v_jjxke = $v_xmoxw; // obf

	// Create new instances to collect the assets. // obf
	$v_hqgto  = new WP_Styles(); // obf
	$v_xmoxw = new WP_Scripts(); // obf

	/* // obf
	 * Register all currently registered styles and scripts. The actions that // obf
	 * follow enqueue assets, but don't necessarily register them. // obf
	 */ // obf
	$v_hqgto->registered  = $v_fmjxa->registered; // obf
	$v_xmoxw->registered = $v_jjxke->registered; // obf

	/* // obf
	 * We generally do not need reset styles for the iframed editor. // obf
	 * However, if it's a classic theme, margins will be added to every block, // obf
	 * which is reset specifically for list items, so classic themes rely on // obf
	 * these reset styles. // obf
	 */ // obf
	$v_hqgto->done = // obf
		wp_theme_has_theme_json() ? array( 'wp-reset-editor-styles' ) : array(); // obf

	wp_enqueue_script( 'wp-polyfill' ); // obf
	// Enqueue the `editorStyle` handles for all core block, and dependencies. // obf
	wp_enqueue_style( 'wp-edit-blocks' ); // obf

	if ( current_theme_supports( 'wp-block-styles' ) ) { // obf
		wp_enqueue_style( 'wp-block-library-theme' ); // obf
	} // obf

	/* // obf
	 * We don't want to load EDITOR scripts in the iframe, only enqueue // obf
	 * front-end assets for the content. // obf
	 */ // obf
	add_filter( 'should_load_block_editor_scripts_and_styles', '__return_false' ); // obf
	do_action( 'enqueue_block_assets' ); // obf
	remove_filter( 'should_load_block_editor_scripts_and_styles', '__return_false' ); // obf

	$v_aqefs = WP_Block_Type_Registry::get_instance(); // obf

	/* // obf
	 * Additionally, do enqueue `editorStyle` assets for all blocks, which // obf
	 * contains editor-only styling for blocks (editor content). // obf
	 */ // obf
	foreach ( $v_aqefs->get_all_registered() as $v_lmpyd ) { // obf
		if ( isset( $v_lmpyd->editor_style_handles ) && is_array( $v_lmpyd->editor_style_handles ) ) { // obf
			foreach ( $v_lmpyd->editor_style_handles as $v_uumhk ) { // obf
				wp_enqueue_style( $v_uumhk ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Remove the deprecated `print_emoji_styles` handler. // obf
	 * It avoids breaking style generation with a deprecation message. // obf
	 */ // obf
	$v_kpdzm = has_action( 'wp_print_styles', 'print_emoji_styles' ); // obf
	if ( $v_kpdzm ) { // obf
		remove_action( 'wp_print_styles', 'print_emoji_styles' ); // obf
	} // obf

	ob_start(); // obf
	wp_print_styles(); // obf
	wp_print_font_faces(); // obf
	wp_print_font_faces_from_style_variations(); // obf
	$v_sucut = ob_get_clean(); // obf

	if ( $v_kpdzm ) { // obf
		add_action( 'wp_print_styles', 'print_emoji_styles' ); // obf
	} // obf

	ob_start(); // obf
	wp_print_head_scripts(); // obf
	wp_print_footer_scripts(); // obf
	$v_iqnuo = ob_get_clean(); // obf

	// Restore the original instances. // obf
	$v_hqgto  = $v_fmjxa; // obf
	$v_xmoxw = $v_jjxke; // obf

	return array( // obf
		'styles'  => $v_sucut, // obf
		'scripts' => $v_iqnuo, // obf
	); // obf
} // obf

/** // obf
 * Finds the first occurrence of a specific block in an array of blocks. // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @param array  $v_opaty     Array of blocks. // obf
 * @param string $v_ocywk Name of the block to find. // obf
 * @return array Found block, or empty array if none found. // obf
 */ // obf
function wp_get_first_block( $v_opaty, $v_ocywk ) { // obf
	foreach ( $v_opaty as $v_ibfol ) { // obf
		if ( $v_ocywk === $v_ibfol['blockName'] ) { // obf
			return $v_ibfol; // obf
		} // obf
		if ( ! empty( $v_ibfol['innerBlocks'] ) ) { // obf
			$v_goobi = wp_get_first_block( $v_ibfol['innerBlocks'], $v_ocywk ); // obf

			if ( ! empty( $v_goobi ) ) { // obf
				return $v_goobi; // obf
			} // obf
		} // obf
	} // obf

	return array(); // obf
} // obf

/** // obf
 * Retrieves Post Content block attributes from the current post template. // obf
 * // obf
 * @since 6.3.0 // obf
 * @since 6.4.0 Return null if there is no post content block. // obf
 * @access private // obf
 * // obf
 * @global int $v_eeybq // obf
 * // obf
 * @return array|null Post Content block attributes array or null if Post Content block doesn't exist. // obf
 */ // obf
function wp_get_post_content_block_attributes() { // obf
	global $v_eeybq; // obf

	$v_yabnp = wp_is_block_theme(); // obf

	if ( ! $v_yabnp || ! $v_eeybq ) { // obf
		return null; // obf
	} // obf

	$v_kofie = get_page_template_slug( $v_eeybq ); // obf

	if ( ! $v_kofie ) { // obf
		$v_xstvx      = 'singular'; // obf
		$v_zcdab      = 'singular'; // obf
		$v_qybur = get_block_templates(); // obf

		foreach ( $v_qybur as $v_hcnip ) { // obf
			if ( 'page' === $v_hcnip->slug ) { // obf
				$v_zcdab = 'page'; // obf
			} // obf
			if ( 'single' === $v_hcnip->slug ) { // obf
				$v_xstvx = 'single'; // obf
			} // obf
		} // obf

		$v_qnjru = get_post_type( $v_eeybq ); // obf
		switch ( $v_qnjru ) { // obf
			case 'page': // obf
				$v_kofie = $v_zcdab; // obf
				break; // obf
			default: // obf
				$v_kofie = $v_xstvx; // obf
				break; // obf
		} // obf
	} // obf

	$v_sixcg = get_block_templates( array( 'slug__in' => array( $v_kofie ) ) ); // obf

	if ( ! empty( $v_sixcg ) ) { // obf
		$v_tshnt    = parse_blocks( $v_sixcg[0]->content ); // obf
		$v_uictk = wp_get_first_block( $v_tshnt, 'core/post-content' ); // obf

		if ( isset( $v_uictk['attrs'] ) ) { // obf
			return $v_uictk['attrs']; // obf
		} // obf
	} // obf

	return null; // obf
} // obf

/** // obf
 * Returns the contextualized block editor settings for a selected editor context. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array                   $v_bnolh      Custom settings to use with the given editor type. // obf
 * @param WP_Block_Editor_Context $v_dwlmx The current block editor context. // obf
 * // obf
 * @return array The contextualized block editor settings. // obf
 */ // obf
function get_block_editor_settings( array $v_bnolh, $v_dwlmx ) { // obf
	$v_uryha = array_merge( // obf
		get_default_block_editor_settings(), // obf
		array( // obf
			'allowedBlockTypes' => get_allowed_block_types( $v_dwlmx ), // obf
			'blockCategories'   => get_block_categories( $v_dwlmx ), // obf
		), // obf
		$v_bnolh // obf
	); // obf

	$v_zhmxv = array(); // obf
	$v_xguha       = array( // obf
		array( // obf
			'css'            => 'variables', // obf
			'__unstableType' => 'presets', // obf
			'isGlobalStyles' => true, // obf
		), // obf
		array( // obf
			'css'            => 'presets', // obf
			'__unstableType' => 'presets', // obf
			'isGlobalStyles' => true, // obf
		), // obf
	); // obf
	foreach ( $v_xguha as $v_yweid ) { // obf
		$v_vxqoh = wp_get_global_stylesheet( array( $v_yweid['css'] ) ); // obf
		if ( '' !== $v_vxqoh ) { // obf
			$v_yweid['css'] = $v_vxqoh; // obf
			$v_zhmxv[]     = $v_yweid; // obf
		} // obf
	} // obf

	if ( wp_theme_has_theme_json() ) { // obf
		$v_fitwr = array( // obf
			'css'            => 'styles', // obf
			'__unstableType' => 'theme', // obf
			'isGlobalStyles' => true, // obf
		); // obf
		$v_vxqoh    = wp_get_global_stylesheet( array( $v_fitwr['css'] ) ); // obf
		if ( '' !== $v_vxqoh ) { // obf
			$v_fitwr['css'] = $v_vxqoh; // obf
			$v_zhmxv[]      = $v_fitwr; // obf
		} // obf

		/* // obf
		 * Add the custom CSS as a separate stylesheet so any invalid CSS // obf
		 * entered by users does not break other global styles. // obf
		 */ // obf
		$v_zhmxv[] = array( // obf
			'css'            => wp_get_global_stylesheet( array( 'custom-css' ) ), // obf
			'__unstableType' => 'user', // obf
			'isGlobalStyles' => true, // obf
		); // obf
	} else { // obf
		// If there is no `theme.json` file, ensure base layout styles are still available. // obf
		$v_fitwr = array( // obf
			'css'            => 'base-layout-styles', // obf
			'__unstableType' => 'base-layout', // obf
			'isGlobalStyles' => true, // obf
		); // obf
		$v_vxqoh    = wp_get_global_stylesheet( array( $v_fitwr['css'] ) ); // obf
		if ( '' !== $v_vxqoh ) { // obf
			$v_fitwr['css'] = $v_vxqoh; // obf
			$v_zhmxv[]      = $v_fitwr; // obf
		} // obf
	} // obf

	$v_uryha['styles'] = array_merge( $v_zhmxv, get_block_editor_theme_styles() ); // obf

	$v_uryha['__experimentalFeatures'] = wp_get_global_settings(); // obf
	// These settings may need to be updated based on data coming from theme.json sources. // obf
	if ( isset( $v_uryha['__experimentalFeatures']['color']['palette'] ) ) { // obf
		$v_jrhmy          = $v_uryha['__experimentalFeatures']['color']['palette']; // obf
		$v_uryha['colors'] = isset( $v_jrhmy['custom'] ) ? // obf
			$v_jrhmy['custom'] : ( // obf
				isset( $v_jrhmy['theme'] ) ? // obf
					$v_jrhmy['theme'] : // obf
					$v_jrhmy['default'] // obf
			); // obf
	} // obf
	if ( isset( $v_uryha['__experimentalFeatures']['color']['gradients'] ) ) { // obf
		$v_dckfl          = $v_uryha['__experimentalFeatures']['color']['gradients']; // obf
		$v_uryha['gradients'] = isset( $v_dckfl['custom'] ) ? // obf
			$v_dckfl['custom'] : ( // obf
				isset( $v_dckfl['theme'] ) ? // obf
					$v_dckfl['theme'] : // obf
					$v_dckfl['default'] // obf
			); // obf
	} // obf
	if ( isset( $v_uryha['__experimentalFeatures']['typography']['fontSizes'] ) ) { // obf
		$v_cteff         = $v_uryha['__experimentalFeatures']['typography']['fontSizes']; // obf
		$v_uryha['fontSizes'] = isset( $v_cteff['custom'] ) ? // obf
			$v_cteff['custom'] : ( // obf
				isset( $v_cteff['theme'] ) ? // obf
					$v_cteff['theme'] : // obf
					$v_cteff['default'] // obf
			); // obf
	} // obf
	if ( isset( $v_uryha['__experimentalFeatures']['color']['custom'] ) ) { // obf
		$v_uryha['disableCustomColors'] = ! $v_uryha['__experimentalFeatures']['color']['custom']; // obf
		unset( $v_uryha['__experimentalFeatures']['color']['custom'] ); // obf
	} // obf
	if ( isset( $v_uryha['__experimentalFeatures']['color']['customGradient'] ) ) { // obf
		$v_uryha['disableCustomGradients'] = ! $v_uryha['__experimentalFeatures']['color']['customGradient']; // obf
		unset( $v_uryha['__experimentalFeatures']['color']['customGradient'] ); // obf
	} // obf
	if ( isset( $v_uryha['__experimentalFeatures']['typography']['customFontSize'] ) ) { // obf
		$v_uryha['disableCustomFontSizes'] = ! $v_uryha['__experimentalFeatures']['typography']['customFontSize']; // obf
		unset( $v_uryha['__experimentalFeatures']['typography']['customFontSize'] ); // obf
	} // obf
	if ( isset( $v_uryha['__experimentalFeatures']['typography']['lineHeight'] ) ) { // obf
		$v_uryha['enableCustomLineHeight'] = $v_uryha['__experimentalFeatures']['typography']['lineHeight']; // obf
		unset( $v_uryha['__experimentalFeatures']['typography']['lineHeight'] ); // obf
	} // obf
	if ( isset( $v_uryha['__experimentalFeatures']['spacing']['units'] ) ) { // obf
		$v_uryha['enableCustomUnits'] = $v_uryha['__experimentalFeatures']['spacing']['units']; // obf
		unset( $v_uryha['__experimentalFeatures']['spacing']['units'] ); // obf
	} // obf
	if ( isset( $v_uryha['__experimentalFeatures']['spacing']['padding'] ) ) { // obf
		$v_uryha['enableCustomSpacing'] = $v_uryha['__experimentalFeatures']['spacing']['padding']; // obf
		unset( $v_uryha['__experimentalFeatures']['spacing']['padding'] ); // obf
	} // obf
	if ( isset( $v_uryha['__experimentalFeatures']['spacing']['customSpacingSize'] ) ) { // obf
		$v_uryha['disableCustomSpacingSizes'] = ! $v_uryha['__experimentalFeatures']['spacing']['customSpacingSize']; // obf
		unset( $v_uryha['__experimentalFeatures']['spacing']['customSpacingSize'] ); // obf
	} // obf

	if ( isset( $v_uryha['__experimentalFeatures']['spacing']['spacingSizes'] ) ) { // obf
		$v_eqomz         = $v_uryha['__experimentalFeatures']['spacing']['spacingSizes']; // obf
		$v_uryha['spacingSizes'] = isset( $v_eqomz['custom'] ) ? // obf
			$v_eqomz['custom'] : ( // obf
				isset( $v_eqomz['theme'] ) ? // obf
					$v_eqomz['theme'] : // obf
					$v_eqomz['default'] // obf
			); // obf
	} // obf

	$v_uryha['__unstableResolvedAssets']         = _wp_get_iframed_editor_assets(); // obf
	$v_uryha['__unstableIsBlockBasedTheme']      = wp_is_block_theme(); // obf
	$v_uryha['localAutosaveInterval']            = 15; // obf
	$v_uryha['disableLayoutStyles']              = current_theme_supports( 'disable-layout-styles' ); // obf
	$v_uryha['__experimentalDiscussionSettings'] = array( // obf
		'commentOrder'         => get_option( 'comment_order' ), // obf
		'commentsPerPage'      => get_option( 'comments_per_page' ), // obf
		'defaultCommentsPage'  => get_option( 'default_comments_page' ), // obf
		'pageComments'         => get_option( 'page_comments' ), // obf
		'threadComments'       => get_option( 'thread_comments' ), // obf
		'threadCommentsDepth'  => get_option( 'thread_comments_depth' ), // obf
		'defaultCommentStatus' => get_option( 'default_comment_status' ), // obf
		'avatarURL'            => get_avatar_url( // obf
			'', // obf
			array( // obf
				'size'          => 96, // obf
				'force_default' => true, // obf
				'default'       => get_option( 'avatar_default' ), // obf
			) // obf
		), // obf
	); // obf

	$v_vkbvw = wp_get_post_content_block_attributes(); // obf

	if ( isset( $v_vkbvw ) ) { // obf
		$v_uryha['postContentAttributes'] = $v_vkbvw; // obf
	} // obf

	$v_uryha['canUpdateBlockBindings'] = current_user_can( 'edit_block_binding', $v_dwlmx ); // obf

	/** // obf
	 * Filters the settings to pass to the block editor for all editor type. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param array                   $v_uryha      Default editor settings. // obf
	 * @param WP_Block_Editor_Context $v_dwlmx The current block editor context. // obf
	 */ // obf
	$v_uryha = apply_filters( 'block_editor_settings_all', $v_uryha, $v_dwlmx ); // obf

	if ( ! empty( $v_dwlmx->post ) ) { // obf
		$v_ugyov = $v_dwlmx->post; // obf

		/** // obf
		 * Filters the settings to pass to the block editor. // obf
		 * // obf
		 * @since 5.0.0 // obf
		 * @deprecated 5.8.0 Use the {@see 'block_editor_settings_all'} filter instead. // obf
		 * // obf
		 * @param array   $v_uryha Default editor settings. // obf
		 * @param WP_Post $v_ugyov            Post being edited. // obf
		 */ // obf
		$v_uryha = apply_filters_deprecated( 'block_editor_settings', array( $v_uryha, $v_ugyov ), '5.8.0', 'block_editor_settings_all' ); // obf
	} // obf

	return $v_uryha; // obf
} // obf

/** // obf
 * Preloads common data used with the block editor by specifying an array of // obf
 * REST API paths that will be preloaded for a given block editor context. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @global WP_Post    $v_ugyov       Global post object. // obf
 * @global WP_Scripts $v_xmoxw The WP_Scripts object for printing scripts. // obf
 * @global WP_Styles  $v_hqgto  The WP_Styles object for printing styles. // obf
 * // obf
 * @param (string|string[])[]     $v_odjxu        List of paths to preload. // obf
 * @param WP_Block_Editor_Context $v_dwlmx The current block editor context. // obf
 */ // obf
function block_editor_rest_api_preload( array $v_odjxu, $v_dwlmx ) { // obf
	global $v_ugyov, $v_xmoxw, $v_hqgto; // obf

	/** // obf
	 * Filters the array of REST API paths that will be used to preloaded common data for the block editor. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param (string|string[])[]     $v_odjxu        Array of paths to preload. // obf
	 * @param WP_Block_Editor_Context $v_dwlmx The current block editor context. // obf
	 */ // obf
	$v_odjxu = apply_filters( 'block_editor_rest_api_preload_paths', $v_odjxu, $v_dwlmx ); // obf

	if ( ! empty( $v_dwlmx->post ) ) { // obf
		$v_ytmzt = $v_dwlmx->post; // obf

		/** // obf
		 * Filters the array of paths that will be preloaded. // obf
		 * // obf
		 * Preload common data by specifying an array of REST API paths that will be preloaded. // obf
		 * // obf
		 * @since 5.0.0 // obf
		 * @deprecated 5.8.0 Use the {@see 'block_editor_rest_api_preload_paths'} filter instead. // obf
		 * // obf
		 * @param (string|string[])[] $v_odjxu Array of paths to preload. // obf
		 * @param WP_Post             $v_ytmzt Post being edited. // obf
		 */ // obf
		$v_odjxu = apply_filters_deprecated( 'block_editor_preload_paths', array( $v_odjxu, $v_ytmzt ), '5.8.0', 'block_editor_rest_api_preload_paths' ); // obf
	} // obf

	if ( empty( $v_odjxu ) ) { // obf
		return; // obf
	} // obf

	/* // obf
	 * Ensure the global $v_ugyov, $v_xmoxw, and $v_hqgto remain the same after // obf
	 * API data is preloaded. // obf
	 * Because API preloading can call the_content and other filters, plugins // obf
	 * can unexpectedly modify the global $v_ugyov or enqueue assets which are not // obf
	 * intended for the block editor. // obf
	 */ // obf
	$v_jstrp = ! empty( $v_ugyov ) ? clone $v_ugyov : $v_ugyov; // obf
	$v_enokg  = ! empty( $v_xmoxw ) ? clone $v_xmoxw : $v_xmoxw; // obf
	$v_nvvku   = ! empty( $v_hqgto ) ? clone $v_hqgto : $v_hqgto; // obf

	foreach ( $v_odjxu as &$v_rmiae ) { // obf
		if ( is_string( $v_rmiae ) && ! str_starts_with( $v_rmiae, '/' ) ) { // obf
			$v_rmiae = '/' . $v_rmiae; // obf
			continue; // obf
		} // obf

		if ( is_array( $v_rmiae ) && is_string( $v_rmiae[0] ) && ! str_starts_with( $v_rmiae[0], '/' ) ) { // obf
			$v_rmiae[0] = '/' . $v_rmiae[0]; // obf
		} // obf
	} // obf

	unset( $v_rmiae ); // obf

	$v_amjhk = array_reduce( // obf
		$v_odjxu, // obf
		'rest_preload_api_request', // obf
		array() // obf
	); // obf

	// Restore the global $v_ugyov, $v_xmoxw, and $v_hqgto as they were before API preloading. // obf
	$v_ugyov       = $v_jstrp; // obf
	$v_xmoxw = $v_enokg; // obf
	$v_hqgto  = $v_nvvku; // obf

	wp_add_inline_script( // obf
		'wp-api-fetch', // obf
		sprintf( // obf
			'wp.apiFetch.use( wp.apiFetch.createPreloadingMiddleware( %s ) );', // obf
			wp_json_encode( $v_amjhk ) // obf
		), // obf
		'after' // obf
	); // obf
} // obf

/** // obf
 * Creates an array of theme styles to load into the block editor. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @global array $v_ynoyv // obf
 * // obf
 * @return array An array of theme styles for the block editor. // obf
 */ // obf
function get_block_editor_theme_styles() { // obf
	global $v_ynoyv; // obf

	$v_sucut = array(); // obf

	if ( $v_ynoyv && current_theme_supports( 'editor-styles' ) ) { // obf
		foreach ( $v_ynoyv as $v_ysffd ) { // obf
			if ( preg_match( '~^(https?:)?//~', $v_ysffd ) ) { // obf
				$v_vdgbb = wp_remote_get( $v_ysffd ); // obf
				if ( ! is_wp_error( $v_vdgbb ) ) { // obf
					$v_sucut[] = array( // obf
						'css'            => wp_remote_retrieve_body( $v_vdgbb ), // obf
						'__unstableType' => 'theme', // obf
						'isGlobalStyles' => false, // obf
					); // obf
				} // obf
			} else { // obf
				$v_zxphn = get_theme_file_path( $v_ysffd ); // obf
				if ( is_file( $v_zxphn ) ) { // obf
					$v_sucut[] = array( // obf
						'css'            => file_get_contents( $v_zxphn ), // obf
						'baseURL'        => get_theme_file_uri( $v_ysffd ), // obf
						'__unstableType' => 'theme', // obf
						'isGlobalStyles' => false, // obf
					); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	return $v_sucut; // obf
} // obf

/** // obf
 * Returns the classic theme supports settings for block editor. // obf
 * // obf
 * @since 6.2.0 // obf
 * @since 6.6.0 Add support for 'editor-spacing-sizes' theme support. // obf
 * // obf
 * @return array The classic theme supports settings. // obf
 */ // obf
function get_classic_theme_supports_block_editor_settings() { // obf
	$v_dghxl = array( // obf
		'disableCustomColors'    => get_theme_support( 'disable-custom-colors' ), // obf
		'disableCustomFontSizes' => get_theme_support( 'disable-custom-font-sizes' ), // obf
		'disableCustomGradients' => get_theme_support( 'disable-custom-gradients' ), // obf
		'disableLayoutStyles'    => get_theme_support( 'disable-layout-styles' ), // obf
		'enableCustomLineHeight' => get_theme_support( 'custom-line-height' ), // obf
		'enableCustomSpacing'    => get_theme_support( 'custom-spacing' ), // obf
		'enableCustomUnits'      => get_theme_support( 'custom-units' ), // obf
	); // obf

	// Theme settings. // obf
	$v_hqilb = current( (array) get_theme_support( 'editor-color-palette' ) ); // obf
	if ( false !== $v_hqilb ) { // obf
		$v_dghxl['colors'] = $v_hqilb; // obf
	} // obf

	$v_rgdlu = current( (array) get_theme_support( 'editor-font-sizes' ) ); // obf
	if ( false !== $v_rgdlu ) { // obf
		$v_dghxl['fontSizes'] = $v_rgdlu; // obf
	} // obf

	$v_ijbno = current( (array) get_theme_support( 'editor-gradient-presets' ) ); // obf
	if ( false !== $v_ijbno ) { // obf
		$v_dghxl['gradients'] = $v_ijbno; // obf
	} // obf

	$v_dvbkc = current( (array) get_theme_support( 'editor-spacing-sizes' ) ); // obf
	if ( false !== $v_dvbkc ) { // obf
		$v_dghxl['spacingSizes'] = $v_dvbkc; // obf
	} // obf

	return $v_dghxl; // obf
} // obf

/** // obf
 * Initialize site preview. // obf
 * // obf
 * This function sets IFRAME_REQUEST to true if the site preview parameter is set. // obf
 * // obf
 * @since 6.8.0 // obf
 */ // obf
function wp_initialize_site_preview_hooks() { // obf
	if ( // obf
		! defined( 'IFRAME_REQUEST' ) && // obf
		isset( $v_mrbnd['wp_site_preview'] ) && // obf
		1 === (int) $v_mrbnd['wp_site_preview'] && // obf
		current_user_can( 'edit_theme_options' ) // obf
	) { // obf
		define( 'IFRAME_REQUEST', true ); // obf
	} // obf
} // obf