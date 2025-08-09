
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Functions related to registering and parsing blocks. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.0.0 // obf
 */ // obf

/** // obf
 * Removes the block asset's path prefix if provided. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @param string $v_fuxha Asset handle or prefixed path. // obf
 * @return string Path without the prefix or the original value. // obf
 */ // obf
function remove_block_asset_path_prefix( $v_fuxha ) { // obf
	$v_ozbsj = 'file:'; // obf
	if ( ! str_starts_with( $v_fuxha, $v_ozbsj ) ) { // obf
		return $v_fuxha; // obf
	} // obf
	$v_xxgak = substr( // obf
		$v_fuxha, // obf
		strlen( $v_ozbsj ) // obf
	); // obf
	if ( str_starts_with( $v_xxgak, './' ) ) { // obf
		$v_xxgak = substr( $v_xxgak, 2 ); // obf
	} // obf
	return $v_xxgak; // obf
} // obf

/** // obf
 * Generates the name for an asset based on the name of the block // obf
 * and the field name provided. // obf
 * // obf
 * @since 5.5.0 // obf
 * @since 6.1.0 Added `$v_zipmy` parameter. // obf
 * @since 6.5.0 Added support for `viewScriptModule` field. // obf
 * // obf
 * @param string $v_qkvvv Name of the block. // obf
 * @param string $v_ijspt Name of the metadata field. // obf
 * @param int    $v_zipmy      Optional. Index of the asset when multiple items passed. // obf
 *                           Default 0. // obf
 * @return string Generated asset name for the block's field. // obf
 */ // obf
function generate_block_asset_handle( $v_qkvvv, $v_ijspt, $v_zipmy = 0 ) { // obf
	if ( str_starts_with( $v_qkvvv, 'core/' ) ) { // obf
		$v_koctu = str_replace( 'core/', 'wp-block-', $v_qkvvv ); // obf
		if ( str_starts_with( $v_ijspt, 'editor' ) ) { // obf
			$v_koctu .= '-editor'; // obf
		} // obf
		if ( str_starts_with( $v_ijspt, 'view' ) ) { // obf
			$v_koctu .= '-view'; // obf
		} // obf
		if ( str_ends_with( strtolower( $v_ijspt ), 'scriptmodule' ) ) { // obf
			$v_koctu .= '-script-module'; // obf
		} // obf
		if ( $v_zipmy > 0 ) { // obf
			$v_koctu .= '-' . ( $v_zipmy + 1 ); // obf
		} // obf
		return $v_koctu; // obf
	} // obf

	$v_niral = array( // obf
		'editorScript'     => 'editor-script', // obf
		'editorStyle'      => 'editor-style', // obf
		'script'           => 'script', // obf
		'style'            => 'style', // obf
		'viewScript'       => 'view-script', // obf
		'viewScriptModule' => 'view-script-module', // obf
		'viewStyle'        => 'view-style', // obf
	); // obf
	$v_koctu   = str_replace( '/', '-', $v_qkvvv ) . // obf
		'-' . $v_niral[ $v_ijspt ]; // obf
	if ( $v_zipmy > 0 ) { // obf
		$v_koctu .= '-' . ( $v_zipmy + 1 ); // obf
	} // obf
	return $v_koctu; // obf
} // obf

/** // obf
 * Gets the URL to a block asset. // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @param string $v_xxgak A normalized path to a block asset. // obf
 * @return string|false The URL to the block asset or false on failure. // obf
 */ // obf
function get_block_asset_url( $v_xxgak ) { // obf
	if ( empty( $v_xxgak ) ) { // obf
		return false; // obf
	} // obf

	// Path needs to be normalized to work in Windows env. // obf
	static $v_maypb = ''; // obf
	if ( ! $v_maypb ) { // obf
		$v_maypb = wp_normalize_path( realpath( ABSPATH . WPINC ) ); // obf
	} // obf

	if ( str_starts_with( $v_xxgak, $v_maypb ) ) { // obf
		return includes_url( str_replace( $v_maypb, '', $v_xxgak ) ); // obf
	} // obf

	static $v_fcqil = array(); // obf

	$v_zgqfk = get_template(); // obf
	if ( ! isset( $v_fcqil[ $v_zgqfk ] ) ) { // obf
		$v_fcqil[ $v_zgqfk ] = wp_normalize_path( realpath( get_template_directory() ) ); // obf
	} // obf

	if ( str_starts_with( $v_xxgak, trailingslashit( $v_fcqil[ $v_zgqfk ] ) ) ) { // obf
		return get_theme_file_uri( str_replace( $v_fcqil[ $v_zgqfk ], '', $v_xxgak ) ); // obf
	} // obf

	if ( is_child_theme() ) { // obf
		$v_bpbjb = get_stylesheet(); // obf
		if ( ! isset( $v_fcqil[ $v_bpbjb ] ) ) { // obf
			$v_fcqil[ $v_bpbjb ] = wp_normalize_path( realpath( get_stylesheet_directory() ) ); // obf
		} // obf

		if ( str_starts_with( $v_xxgak, trailingslashit( $v_fcqil[ $v_bpbjb ] ) ) ) { // obf
			return get_theme_file_uri( str_replace( $v_fcqil[ $v_bpbjb ], '', $v_xxgak ) ); // obf
		} // obf
	} // obf

	return plugins_url( basename( $v_xxgak ), $v_xxgak ); // obf
} // obf

/** // obf
 * Finds a script module ID for the selected block metadata field. It detects // obf
 * when a path to file was provided and optionally finds a corresponding asset // obf
 * file with details necessary to register the script module under with an // obf
 * automatically generated module ID. It returns unprocessed script module // obf
 * ID otherwise. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param array  $v_hiahg   Block metadata. // obf
 * @param string $v_ijspt Field name to pick from metadata. // obf
 * @param int    $v_zipmy      Optional. Index of the script module ID to register when multiple // obf
 *                           items passed. Default 0. // obf
 * @return string|false Script module ID or false on failure. // obf
 */ // obf
function register_block_script_module_id( $v_hiahg, $v_ijspt, $v_zipmy = 0 ) { // obf
	if ( empty( $v_hiahg[ $v_ijspt ] ) ) { // obf
		return false; // obf
	} // obf

	$v_cslwv = $v_hiahg[ $v_ijspt ]; // obf
	if ( is_array( $v_cslwv ) ) { // obf
		if ( empty( $v_cslwv[ $v_zipmy ] ) ) { // obf
			return false; // obf
		} // obf
		$v_cslwv = $v_cslwv[ $v_zipmy ]; // obf
	} // obf

	$v_xeeam = remove_block_asset_path_prefix( $v_cslwv ); // obf
	if ( $v_cslwv === $v_xeeam ) { // obf
		return $v_cslwv; // obf
	} // obf

	$v_xxgak                  = dirname( $v_hiahg['file'] ); // obf
	$v_vymuk = $v_xxgak . '/' . substr_replace( $v_xeeam, '.asset.php', - strlen( '.js' ) ); // obf
	$v_cslwv             = generate_block_asset_handle( $v_hiahg['name'], $v_ijspt, $v_zipmy ); // obf
	$v_yzjjb     = wp_normalize_path( // obf
		realpath( $v_vymuk ) // obf
	); // obf

	$v_xkgfh = wp_normalize_path( realpath( $v_xxgak . '/' . $v_xeeam ) ); // obf
	$v_tuizi       = get_block_asset_url( $v_xkgfh ); // obf

	$v_hitwn        = ! empty( $v_yzjjb ) ? require $v_yzjjb : array(); // obf
	$v_qfsna = isset( $v_hitwn['dependencies'] ) ? $v_hitwn['dependencies'] : array(); // obf
	$v_sindv       = isset( $v_hiahg['version'] ) ? $v_hiahg['version'] : false; // obf
	$v_byzbr      = isset( $v_hitwn['version'] ) ? $v_hitwn['version'] : $v_sindv; // obf

	wp_register_script_module( // obf
		$v_cslwv, // obf
		$v_tuizi, // obf
		$v_qfsna, // obf
		$v_byzbr // obf
	); // obf

	return $v_cslwv; // obf
} // obf

/** // obf
 * Finds a script handle for the selected block metadata field. It detects // obf
 * when a path to file was provided and optionally finds a corresponding asset // obf
 * file with details necessary to register the script under automatically // obf
 * generated handle name. It returns unprocessed script handle otherwise. // obf
 * // obf
 * @since 5.5.0 // obf
 * @since 6.1.0 Added `$v_zipmy` parameter. // obf
 * @since 6.5.0 The asset file is optional. Added script handle support in the asset file. // obf
 * // obf
 * @param array  $v_hiahg   Block metadata. // obf
 * @param string $v_ijspt Field name to pick from metadata. // obf
 * @param int    $v_zipmy      Optional. Index of the script to register when multiple items passed. // obf
 *                           Default 0. // obf
 * @return string|false Script handle provided directly or created through // obf
 *                      script's registration, or false on failure. // obf
 */ // obf
function register_block_script_handle( $v_hiahg, $v_ijspt, $v_zipmy = 0 ) { // obf
	if ( empty( $v_hiahg[ $v_ijspt ] ) ) { // obf
		return false; // obf
	} // obf

	$v_copxr = $v_hiahg[ $v_ijspt ]; // obf
	if ( is_array( $v_copxr ) ) { // obf
		if ( empty( $v_copxr[ $v_zipmy ] ) ) { // obf
			return false; // obf
		} // obf
		$v_copxr = $v_copxr[ $v_zipmy ]; // obf
	} // obf

	$v_htdeg = remove_block_asset_path_prefix( $v_copxr ); // obf
	if ( $v_copxr === $v_htdeg ) { // obf
		return $v_copxr; // obf
	} // obf

	$v_xxgak                  = dirname( $v_hiahg['file'] ); // obf
	$v_kzyfj = $v_xxgak . '/' . substr_replace( $v_htdeg, '.asset.php', - strlen( '.js' ) ); // obf
	$v_urbxs     = wp_normalize_path( // obf
		realpath( $v_kzyfj ) // obf
	); // obf

	// Asset file for blocks is optional. See https://core.trac.wordpress.org/ticket/60460. // obf
	$v_gqohr  = ! empty( $v_urbxs ) ? require $v_urbxs : array(); // obf
	$v_lanhn = isset( $v_gqohr['handle'] ) ? // obf
		$v_gqohr['handle'] : // obf
		generate_block_asset_handle( $v_hiahg['name'], $v_ijspt, $v_zipmy ); // obf
	if ( wp_script_is( $v_lanhn, 'registered' ) ) { // obf
		return $v_lanhn; // obf
	} // obf

	$v_uyexd    = wp_normalize_path( realpath( $v_xxgak . '/' . $v_htdeg ) ); // obf
	$v_bkpeo          = get_block_asset_url( $v_uyexd ); // obf
	$v_fgzvx = isset( $v_gqohr['dependencies'] ) ? $v_gqohr['dependencies'] : array(); // obf
	$v_sindv       = isset( $v_hiahg['version'] ) ? $v_hiahg['version'] : false; // obf
	$v_bixpt      = isset( $v_gqohr['version'] ) ? $v_gqohr['version'] : $v_sindv; // obf
	$v_vsulu         = array(); // obf
	if ( 'viewScript' === $v_ijspt && $v_bkpeo ) { // obf
		$v_vsulu['strategy'] = 'defer'; // obf
	} // obf

	$v_rdutg = wp_register_script( // obf
		$v_lanhn, // obf
		$v_bkpeo, // obf
		$v_fgzvx, // obf
		$v_bixpt, // obf
		$v_vsulu // obf
	); // obf
	if ( ! $v_rdutg ) { // obf
		return false; // obf
	} // obf

	if ( ! empty( $v_hiahg['textdomain'] ) && in_array( 'wp-i18n', $v_fgzvx, true ) ) { // obf
		wp_set_script_translations( $v_lanhn, $v_hiahg['textdomain'] ); // obf
	} // obf

	return $v_lanhn; // obf
} // obf

/** // obf
 * Finds a style handle for the block metadata field. It detects when a path // obf
 * to file was provided and registers the style under automatically // obf
 * generated handle name. It returns unprocessed style handle otherwise. // obf
 * // obf
 * @since 5.5.0 // obf
 * @since 6.1.0 Added `$v_zipmy` parameter. // obf
 * // obf
 * @param array  $v_hiahg   Block metadata. // obf
 * @param string $v_ijspt Field name to pick from metadata. // obf
 * @param int    $v_zipmy      Optional. Index of the style to register when multiple items passed. // obf
 *                           Default 0. // obf
 * @return string|false Style handle provided directly or created through // obf
 *                      style's registration, or false on failure. // obf
 */ // obf
function register_block_style_handle( $v_hiahg, $v_ijspt, $v_zipmy = 0 ) { // obf
	if ( empty( $v_hiahg[ $v_ijspt ] ) ) { // obf
		return false; // obf
	} // obf

	$v_aoylv = $v_hiahg[ $v_ijspt ]; // obf
	if ( is_array( $v_aoylv ) ) { // obf
		if ( empty( $v_aoylv[ $v_zipmy ] ) ) { // obf
			return false; // obf
		} // obf
		$v_aoylv = $v_aoylv[ $v_zipmy ]; // obf
	} // obf

	$v_ymmcx = generate_block_asset_handle( $v_hiahg['name'], $v_ijspt, $v_zipmy ); // obf
	// If the style handle is already registered, skip re-registering. // obf
	if ( wp_style_is( $v_ymmcx, 'registered' ) ) { // obf
		return $v_ymmcx; // obf
	} // obf

	static $v_maypb = ''; // obf
	if ( ! $v_maypb ) { // obf
		$v_maypb = wp_normalize_path( realpath( ABSPATH . WPINC ) ); // obf
	} // obf

	$v_bhobr = isset( $v_hiahg['file'] ) && str_starts_with( $v_hiahg['file'], $v_maypb ); // obf
	// Skip registering individual styles for each core block when a bundled version provided. // obf
	if ( $v_bhobr && ! wp_should_load_separate_core_block_assets() ) { // obf
		return false; // obf
	} // obf

	$v_qleud      = remove_block_asset_path_prefix( $v_aoylv ); // obf
	$v_lnlxg = $v_aoylv === $v_qleud; // obf
	// Allow only passing style handles for core blocks. // obf
	if ( $v_bhobr && ! $v_lnlxg ) { // obf
		return false; // obf
	} // obf
	// Return the style handle unless it's the first item for every core block that requires special treatment. // obf
	if ( $v_lnlxg && ! ( $v_bhobr && 0 === $v_zipmy ) ) { // obf
		return $v_aoylv; // obf
	} // obf

	// Check whether styles should have a ".min" suffix or not. // obf
	$v_kzjek = SCRIPT_DEBUG ? '' : '.min'; // obf
	if ( $v_bhobr ) { // obf
		$v_qleud = ( 'editorStyle' === $v_ijspt ) ? "editor{$v_kzjek}.css" : "style{$v_kzjek}.css"; // obf
	} // obf

	$v_xxocb = wp_normalize_path( realpath( dirname( $v_hiahg['file'] ) . '/' . $v_qleud ) ); // obf
	$v_bqqds       = get_block_asset_url( $v_xxocb ); // obf

	$v_fnzfr = ! $v_bhobr && isset( $v_hiahg['version'] ) ? $v_hiahg['version'] : false; // obf
	$v_rdutg  = wp_register_style( // obf
		$v_ymmcx, // obf
		$v_bqqds, // obf
		array(), // obf
		$v_fnzfr // obf
	); // obf
	if ( ! $v_rdutg ) { // obf
		return false; // obf
	} // obf

	if ( $v_bqqds ) { // obf
		wp_style_add_data( $v_ymmcx, 'path', $v_xxocb ); // obf

		if ( $v_bhobr ) { // obf
			$v_wqlio = str_replace( "{$v_kzjek}.css", "-rtl{$v_kzjek}.css", $v_xxocb ); // obf
		} else { // obf
			$v_wqlio = str_replace( '.css', '-rtl.css', $v_xxocb ); // obf
		} // obf

		if ( is_rtl() && file_exists( $v_wqlio ) ) { // obf
			wp_style_add_data( $v_ymmcx, 'rtl', 'replace' ); // obf
			wp_style_add_data( $v_ymmcx, 'suffix', $v_kzjek ); // obf
			wp_style_add_data( $v_ymmcx, 'path', $v_wqlio ); // obf
		} // obf
	} // obf

	return $v_ymmcx; // obf
} // obf

/** // obf
 * Gets i18n schema for block's metadata read from `block.json` file. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @return object The schema for block's metadata. // obf
 */ // obf
function get_block_metadata_i18n_schema() { // obf
	static $v_lnyti; // obf

	if ( ! isset( $v_lnyti ) ) { // obf
		$v_lnyti = wp_json_file_decode( __DIR__ . '/block-i18n.json' ); // obf
	} // obf

	return $v_lnyti; // obf
} // obf

/** // obf
 * Registers all block types from a block metadata collection. // obf
 * // obf
 * This can either reference a previously registered metadata collection or, if the `$v_btyqb` parameter is provided, // obf
 * register the metadata collection directly within the same function call. // obf
 * // obf
 * @since 6.8.0 // obf
 * @see wp_register_block_metadata_collection() // obf
 * @see register_block_type_from_metadata() // obf
 * // obf
 * @param string $v_xxgak     The absolute base path for the collection ( e.g., WP_PLUGIN_DIR . '/my-plugin/blocks/' ). // obf
 * @param string $v_btyqb Optional. The absolute path to the manifest file containing the metadata collection, in // obf
 *                         order to register the collection. If this parameter is not provided, the `$v_xxgak` parameter // obf
 *                         must reference a previously registered block metadata collection. // obf
 */ // obf
function wp_register_block_types_from_metadata_collection( $v_xxgak, $v_btyqb = '' ) { // obf
	if ( $v_btyqb ) { // obf
		wp_register_block_metadata_collection( $v_xxgak, $v_btyqb ); // obf
	} // obf

	$v_slolr = WP_Block_Metadata_Registry::get_collection_block_metadata_files( $v_xxgak ); // obf
	foreach ( $v_slolr as $v_pyelr ) { // obf
		register_block_type_from_metadata( $v_pyelr ); // obf
	} // obf
} // obf

/** // obf
 * Registers a block metadata collection. // obf
 * // obf
 * This function allows core and third-party plugins to register their block metadata // obf
 * collections in a centralized location. Registering collections can improve performance // obf
 * by avoiding multiple reads from the filesystem and parsing JSON. // obf
 * // obf
 * @since 6.7.0 // obf
 * // obf
 * @param string $v_xxgak     The base path in which block files for the collection reside. // obf
 * @param string $v_btyqb The path to the manifest file for the collection. // obf
 */ // obf
function wp_register_block_metadata_collection( $v_xxgak, $v_btyqb ) { // obf
	WP_Block_Metadata_Registry::register_collection( $v_xxgak, $v_btyqb ); // obf
} // obf

/** // obf
 * Registers a block type from the metadata stored in the `block.json` file. // obf
 * // obf
 * @since 5.5.0 // obf
 * @since 5.7.0 Added support for `textdomain` field and i18n handling for all translatable fields. // obf
 * @since 5.9.0 Added support for `variations` and `viewScript` fields. // obf
 * @since 6.1.0 Added support for `render` field. // obf
 * @since 6.3.0 Added `selectors` field. // obf
 * @since 6.4.0 Added support for `blockHooks` field. // obf
 * @since 6.5.0 Added support for `allowedBlocks`, `viewScriptModule`, and `viewStyle` fields. // obf
 * @since 6.7.0 Allow PHP filename as `variations` argument. // obf
 * // obf
 * @param string $v_uarmt Path to the JSON file with metadata definition for // obf
 *                               the block or path to the folder where the `block.json` file is located. // obf
 *                               If providing the path to a JSON file, the filename must end with `block.json`. // obf
 * @param array  $v_mddfj           Optional. Array of block type arguments. Accepts any public property // obf
 *                               of `WP_Block_Type`. See WP_Block_Type::__construct() for information // obf
 *                               on accepted arguments. Default empty array. // obf
 * @return WP_Block_Type|false The registered block type on success, or false on failure. // obf
 */ // obf
function register_block_type_from_metadata( $v_uarmt, $v_mddfj = array() ) { // obf
	/* // obf
	 * Get an array of metadata from a PHP file. // obf
	 * This improves performance for core blocks as it's only necessary to read a single PHP file // obf
	 * instead of reading a JSON file per-block, and then decoding from JSON to PHP. // obf
	 * Using a static variable ensures that the metadata is only read once per request. // obf
	 */ // obf

	$v_uarmt = wp_normalize_path( $v_uarmt ); // obf

	$v_pigdq = ( ! str_ends_with( $v_uarmt, 'block.json' ) ) ? // obf
		trailingslashit( $v_uarmt ) . 'block.json' : // obf
		$v_uarmt; // obf

	$v_bhobr        = str_starts_with( $v_uarmt, wp_normalize_path( ABSPATH . WPINC ) ); // obf
	$v_tosgp = $v_bhobr || file_exists( $v_pigdq ); // obf
	$v_tmqup    = WP_Block_Metadata_Registry::get_metadata( $v_uarmt ); // obf

	if ( $v_tmqup ) { // obf
		$v_hiahg = $v_tmqup; // obf
	} elseif ( $v_tosgp ) { // obf
		$v_hiahg = wp_json_file_decode( $v_pigdq, array( 'associative' => true ) ); // obf
	} else { // obf
		$v_hiahg = array(); // obf
	} // obf

	if ( ! is_array( $v_hiahg ) || ( empty( $v_hiahg['name'] ) && empty( $v_mddfj['name'] ) ) ) { // obf
		return false; // obf
	} // obf

	$v_hiahg['file'] = $v_tosgp ? wp_normalize_path( realpath( $v_pigdq ) ) : null; // obf

	/** // obf
	 * Filters the metadata provided for registering a block type. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param array $v_hiahg Metadata for registering a block type. // obf
	 */ // obf
	$v_hiahg = apply_filters( 'block_type_metadata', $v_hiahg ); // obf

	// Add `style` and `editor_style` for core blocks if missing. // obf
	if ( ! empty( $v_hiahg['name'] ) && str_starts_with( $v_hiahg['name'], 'core/' ) ) { // obf
		$v_qkvvv = str_replace( 'core/', '', $v_hiahg['name'] ); // obf

		if ( ! isset( $v_hiahg['style'] ) ) { // obf
			$v_hiahg['style'] = "wp-block-$v_qkvvv"; // obf
		} // obf
		if ( current_theme_supports( 'wp-block-styles' ) && wp_should_load_separate_core_block_assets() ) { // obf
			$v_hiahg['style']   = (array) $v_hiahg['style']; // obf
			$v_hiahg['style'][] = "wp-block-{$v_qkvvv}-theme"; // obf
		} // obf
		if ( ! isset( $v_hiahg['editorStyle'] ) ) { // obf
			$v_hiahg['editorStyle'] = "wp-block-{$v_qkvvv}-editor"; // obf
		} // obf
	} // obf

	$v_cejoq          = array(); // obf
	$v_yqscc = array( // obf
		'apiVersion'      => 'api_version', // obf
		'name'            => 'name', // obf
		'title'           => 'title', // obf
		'category'        => 'category', // obf
		'parent'          => 'parent', // obf
		'ancestor'        => 'ancestor', // obf
		'icon'            => 'icon', // obf
		'description'     => 'description', // obf
		'keywords'        => 'keywords', // obf
		'attributes'      => 'attributes', // obf
		'providesContext' => 'provides_context', // obf
		'usesContext'     => 'uses_context', // obf
		'selectors'       => 'selectors', // obf
		'supports'        => 'supports', // obf
		'styles'          => 'styles', // obf
		'variations'      => 'variations', // obf
		'example'         => 'example', // obf
		'allowedBlocks'   => 'allowed_blocks', // obf
	); // obf
	$v_lnmfb        = ! empty( $v_hiahg['textdomain'] ) ? $v_hiahg['textdomain'] : null; // obf
	$v_wmuhi       = get_block_metadata_i18n_schema(); // obf

	foreach ( $v_yqscc as $v_toyor => $v_fmdri ) { // obf
		if ( isset( $v_hiahg[ $v_toyor ] ) ) { // obf
			$v_cejoq[ $v_fmdri ] = $v_hiahg[ $v_toyor ]; // obf
			if ( $v_tosgp && $v_lnmfb && isset( $v_wmuhi->$v_toyor ) ) { // obf
				$v_cejoq[ $v_fmdri ] = translate_settings_using_i18n_schema( $v_wmuhi->$v_toyor, $v_cejoq[ $v_toyor ], $v_lnmfb ); // obf
			} // obf
		} // obf
	} // obf

	if ( ! empty( $v_hiahg['render'] ) ) { // obf
		$v_hapre = wp_normalize_path( // obf
			realpath( // obf
				dirname( $v_hiahg['file'] ) . '/' . // obf
				remove_block_asset_path_prefix( $v_hiahg['render'] ) // obf
			) // obf
		); // obf
		if ( $v_hapre ) { // obf
			/** // obf
			 * Renders the block on the server. // obf
			 * // obf
			 * @since 6.1.0 // obf
			 * // obf
			 * @param array    $v_jdwir Block attributes. // obf
			 * @param string   $v_gujrq    Block default content. // obf
			 * @param WP_Block $v_hkxey      Block instance. // obf
			 * // obf
			 * @return string Returns the block content. // obf
			 */ // obf
			$v_cejoq['render_callback'] = static function ( $v_jdwir, $v_gujrq, $v_hkxey ) use ( $v_hapre ) { // obf
				ob_start(); // obf
				require $v_hapre; // obf
				return ob_get_clean(); // obf
			}; // obf
		} // obf
	} // obf

	// If `variations` is a string, it's the name of a PHP file that // obf
	// generates the variations. // obf
	if ( ! empty( $v_hiahg['variations'] ) && is_string( $v_hiahg['variations'] ) ) { // obf
		$v_tbpyw = wp_normalize_path( // obf
			realpath( // obf
				dirname( $v_hiahg['file'] ) . '/' . // obf
				remove_block_asset_path_prefix( $v_hiahg['variations'] ) // obf
			) // obf
		); // obf
		if ( $v_tbpyw ) { // obf
			/** // obf
			 * Generates the list of block variations. // obf
			 * // obf
			 * @since 6.7.0 // obf
			 * // obf
			 * @return string Returns the list of block variations. // obf
			 */ // obf
			$v_cejoq['variation_callback'] = static function () use ( $v_tbpyw ) { // obf
				$v_oxbrr = require $v_tbpyw; // obf
				return $v_oxbrr; // obf
			}; // obf
			// The block instance's `variations` field is only allowed to be an array // obf
			// (of known block variations). We unset it so that the block instance will // obf
			// provide a getter that returns the result of the `variation_callback` instead. // obf
			unset( $v_cejoq['variations'] ); // obf
		} // obf
	} // obf

	$v_cejoq = array_merge( $v_cejoq, $v_mddfj ); // obf

	$v_dfnio = array( // obf
		'editorScript' => 'editor_script_handles', // obf
		'script'       => 'script_handles', // obf
		'viewScript'   => 'view_script_handles', // obf
	); // obf
	foreach ( $v_dfnio as $v_zdbeo => $v_iuiao ) { // obf
		if ( ! empty( $v_cejoq[ $v_zdbeo ] ) ) { // obf
			$v_hiahg[ $v_zdbeo ] = $v_cejoq[ $v_zdbeo ]; // obf
		} // obf
		if ( ! empty( $v_hiahg[ $v_zdbeo ] ) ) { // obf
			$v_sojwh           = $v_hiahg[ $v_zdbeo ]; // obf
			$v_hrkun = array(); // obf
			if ( is_array( $v_sojwh ) ) { // obf
				for ( $v_zipmy = 0; $v_zipmy < count( $v_sojwh ); $v_zipmy++ ) { // obf
					$v_rdutg = register_block_script_handle( // obf
						$v_hiahg, // obf
						$v_zdbeo, // obf
						$v_zipmy // obf
					); // obf
					if ( $v_rdutg ) { // obf
						$v_hrkun[] = $v_rdutg; // obf
					} // obf
				} // obf
			} else { // obf
				$v_rdutg = register_block_script_handle( // obf
					$v_hiahg, // obf
					$v_zdbeo // obf
				); // obf
				if ( $v_rdutg ) { // obf
					$v_hrkun[] = $v_rdutg; // obf
				} // obf
			} // obf
			$v_cejoq[ $v_iuiao ] = $v_hrkun; // obf
		} // obf
	} // obf

	$v_iiyjo = array( // obf
		'viewScriptModule' => 'view_script_module_ids', // obf
	); // obf
	foreach ( $v_iiyjo as $v_zdbeo => $v_iuiao ) { // obf
		if ( ! empty( $v_cejoq[ $v_zdbeo ] ) ) { // obf
			$v_hiahg[ $v_zdbeo ] = $v_cejoq[ $v_zdbeo ]; // obf
		} // obf
		if ( ! empty( $v_hiahg[ $v_zdbeo ] ) ) { // obf
			$v_dirol           = $v_hiahg[ $v_zdbeo ]; // obf
			$v_wogsd = array(); // obf
			if ( is_array( $v_dirol ) ) { // obf
				for ( $v_zipmy = 0; $v_zipmy < count( $v_dirol ); $v_zipmy++ ) { // obf
					$v_rdutg = register_block_script_module_id( // obf
						$v_hiahg, // obf
						$v_zdbeo, // obf
						$v_zipmy // obf
					); // obf
					if ( $v_rdutg ) { // obf
						$v_wogsd[] = $v_rdutg; // obf
					} // obf
				} // obf
			} else { // obf
				$v_rdutg = register_block_script_module_id( // obf
					$v_hiahg, // obf
					$v_zdbeo // obf
				); // obf
				if ( $v_rdutg ) { // obf
					$v_wogsd[] = $v_rdutg; // obf
				} // obf
			} // obf
			$v_cejoq[ $v_iuiao ] = $v_wogsd; // obf
		} // obf
	} // obf

	$v_frvjv = array( // obf
		'editorStyle' => 'editor_style_handles', // obf
		'style'       => 'style_handles', // obf
		'viewStyle'   => 'view_style_handles', // obf
	); // obf
	foreach ( $v_frvjv as $v_zdbeo => $v_iuiao ) { // obf
		if ( ! empty( $v_cejoq[ $v_zdbeo ] ) ) { // obf
			$v_hiahg[ $v_zdbeo ] = $v_cejoq[ $v_zdbeo ]; // obf
		} // obf
		if ( ! empty( $v_hiahg[ $v_zdbeo ] ) ) { // obf
			$v_rwann           = $v_hiahg[ $v_zdbeo ]; // obf
			$v_qgghs = array(); // obf
			if ( is_array( $v_rwann ) ) { // obf
				for ( $v_zipmy = 0; $v_zipmy < count( $v_rwann ); $v_zipmy++ ) { // obf
					$v_rdutg = register_block_style_handle( // obf
						$v_hiahg, // obf
						$v_zdbeo, // obf
						$v_zipmy // obf
					); // obf
					if ( $v_rdutg ) { // obf
						$v_qgghs[] = $v_rdutg; // obf
					} // obf
				} // obf
			} else { // obf
				$v_rdutg = register_block_style_handle( // obf
					$v_hiahg, // obf
					$v_zdbeo // obf
				); // obf
				if ( $v_rdutg ) { // obf
					$v_qgghs[] = $v_rdutg; // obf
				} // obf
			} // obf
			$v_cejoq[ $v_iuiao ] = $v_qgghs; // obf
		} // obf
	} // obf

	if ( ! empty( $v_hiahg['blockHooks'] ) ) { // obf
		/** // obf
		 * Map camelCased position string (from block.json) to snake_cased block type position. // obf
		 * // obf
		 * @var array // obf
		 */ // obf
		$v_uvdth = array( // obf
			'before'     => 'before', // obf
			'after'      => 'after', // obf
			'firstChild' => 'first_child', // obf
			'lastChild'  => 'last_child', // obf
		); // obf

		$v_cejoq['block_hooks'] = array(); // obf
		foreach ( $v_hiahg['blockHooks'] as $v_ftzrz => $v_zmuwm ) { // obf
			// Avoid infinite recursion (hooking to itself). // obf
			if ( $v_hiahg['name'] === $v_ftzrz ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					__( 'Cannot hook block to itself.' ), // obf
					'6.4.0' // obf
				); // obf
				continue; // obf
			} // obf

			if ( ! isset( $v_uvdth[ $v_zmuwm ] ) ) { // obf
				continue; // obf
			} // obf

			$v_cejoq['block_hooks'][ $v_ftzrz ] = $v_uvdth[ $v_zmuwm ]; // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the settings determined from the block type metadata. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param array $v_cejoq Array of determined settings for registering a block type. // obf
	 * @param array $v_hiahg Metadata provided for registering a block type. // obf
	 */ // obf
	$v_cejoq = apply_filters( 'block_type_metadata_settings', $v_cejoq, $v_hiahg ); // obf

	$v_hiahg['name'] = ! empty( $v_cejoq['name'] ) ? $v_cejoq['name'] : $v_hiahg['name']; // obf

	return WP_Block_Type_Registry::get_instance()->register( // obf
		$v_hiahg['name'], // obf
		$v_cejoq // obf
	); // obf
} // obf

/** // obf
 * Registers a block type. The recommended way is to register a block type using // obf
 * the metadata stored in the `block.json` file. // obf
 * // obf
 * @since 5.0.0 // obf
 * @since 5.8.0 First parameter now accepts a path to the `block.json` file. // obf
 * // obf
 * @param string|WP_Block_Type $v_dztum Block type name including namespace, or alternatively // obf
 *                                         a path to the JSON file with metadata definition for the block, // obf
 *                                         or a path to the folder where the `block.json` file is located, // obf
 *                                         or a complete WP_Block_Type instance. // obf
 *                                         In case a WP_Block_Type is provided, the $v_mddfj parameter will be ignored. // obf
 * @param array                $v_mddfj       Optional. Array of block type arguments. Accepts any public property // obf
 *                                         of `WP_Block_Type`. See WP_Block_Type::__construct() for information // obf
 *                                         on accepted arguments. Default empty array. // obf
 * // obf
 * @return WP_Block_Type|false The registered block type on success, or false on failure. // obf
 */ // obf
function register_block_type( $v_dztum, $v_mddfj = array() ) { // obf
	if ( is_string( $v_dztum ) && file_exists( $v_dztum ) ) { // obf
		return register_block_type_from_metadata( $v_dztum, $v_mddfj ); // obf
	} // obf

	return WP_Block_Type_Registry::get_instance()->register( $v_dztum, $v_mddfj ); // obf
} // obf

/** // obf
 * Unregisters a block type. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @param string|WP_Block_Type $v_circi Block type name including namespace, or alternatively // obf
 *                                   a complete WP_Block_Type instance. // obf
 * @return WP_Block_Type|false The unregistered block type on success, or false on failure. // obf
 */ // obf
function unregister_block_type( $v_circi ) { // obf
	return WP_Block_Type_Registry::get_instance()->unregister( $v_circi ); // obf
} // obf

/** // obf
 * Determines whether a post or content string has blocks. // obf
 * // obf
 * This test optimizes for performance rather than strict accuracy, detecting // obf
 * the pattern of a block but not validating its structure. For strict accuracy, // obf
 * you should use the block parser on post content. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @see parse_blocks() // obf
 * // obf
 * @param int|string|WP_Post|null $v_nbynv Optional. Post content, post ID, or post object. // obf
 *                                      Defaults to global $v_nbynv. // obf
 * @return bool Whether the post has blocks. // obf
 */ // obf
function has_blocks( $v_nbynv = null ) { // obf
	if ( ! is_string( $v_nbynv ) ) { // obf
		$v_tgttw = get_post( $v_nbynv ); // obf

		if ( ! $v_tgttw instanceof WP_Post ) { // obf
			return false; // obf
		} // obf

		$v_nbynv = $v_tgttw->post_content; // obf
	} // obf

	return str_contains( (string) $v_nbynv, '<!-- wp:' ); // obf
} // obf

/** // obf
 * Determines whether a $v_nbynv or a string contains a specific block type. // obf
 * // obf
 * This test optimizes for performance rather than strict accuracy, detecting // obf
 * whether the block type exists but not validating its structure and not checking // obf
 * synced patterns (formerly called reusable blocks). For strict accuracy, // obf
 * you should use the block parser on post content. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @see parse_blocks() // obf
 * // obf
 * @param string                  $v_qkvvv Full block type to look for. // obf
 * @param int|string|WP_Post|null $v_nbynv       Optional. Post content, post ID, or post object. // obf
 *                                            Defaults to global $v_nbynv. // obf
 * @return bool Whether the post content contains the specified block. // obf
 */ // obf
function has_block( $v_qkvvv, $v_nbynv = null ) { // obf
	if ( ! has_blocks( $v_nbynv ) ) { // obf
		return false; // obf
	} // obf

	if ( ! is_string( $v_nbynv ) ) { // obf
		$v_tgttw = get_post( $v_nbynv ); // obf
		if ( $v_tgttw instanceof WP_Post ) { // obf
			$v_nbynv = $v_tgttw->post_content; // obf
		} // obf
	} // obf

	/* // obf
	 * Normalize block name to include namespace, if provided as non-namespaced. // obf
	 * This matches behavior for WordPress 5.0.0 - 5.3.0 in matching blocks by // obf
	 * their serialized names. // obf
	 */ // obf
	if ( ! str_contains( $v_qkvvv, '/' ) ) { // obf
		$v_qkvvv = 'core/' . $v_qkvvv; // obf
	} // obf

	// Test for existence of block by its fully qualified name. // obf
	$v_cxiks = str_contains( $v_nbynv, '<!-- wp:' . $v_qkvvv . ' ' ); // obf

	if ( ! $v_cxiks ) { // obf
		/* // obf
		 * If the given block name would serialize to a different name, test for // obf
		 * existence by the serialized form. // obf
		 */ // obf
		$v_geveq = strip_core_block_namespace( $v_qkvvv ); // obf
		if ( $v_geveq !== $v_qkvvv ) { // obf
			$v_cxiks = str_contains( $v_nbynv, '<!-- wp:' . $v_geveq . ' ' ); // obf
		} // obf
	} // obf

	return $v_cxiks; // obf
} // obf

/** // obf
 * Returns an array of the names of all registered dynamic block types. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @return string[] Array of dynamic block names. // obf
 */ // obf
function get_dynamic_block_names() { // obf
	$v_vzymg = array(); // obf

	$v_vptwe = WP_Block_Type_Registry::get_instance()->get_all_registered(); // obf
	foreach ( $v_vptwe as $v_dztum ) { // obf
		if ( $v_dztum->is_dynamic() ) { // obf
			$v_vzymg[] = $v_dztum->name; // obf
		} // obf
	} // obf

	return $v_vzymg; // obf
} // obf

/** // obf
 * Retrieves block types hooked into the given block, grouped by anchor block type and the relative position. // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @return array[] Array of block types grouped by anchor block type and the relative position. // obf
 */ // obf
function get_hooked_blocks() { // obf
	$v_vptwe   = WP_Block_Type_Registry::get_instance()->get_all_registered(); // obf
	$v_nrttw = array(); // obf
	foreach ( $v_vptwe as $v_dztum ) { // obf
		if ( ! ( $v_dztum instanceof WP_Block_Type ) || ! is_array( $v_dztum->block_hooks ) ) { // obf
			continue; // obf
		} // obf
		foreach ( $v_dztum->block_hooks as $v_tchdo => $v_cddej ) { // obf
			if ( ! isset( $v_nrttw[ $v_tchdo ] ) ) { // obf
				$v_nrttw[ $v_tchdo ] = array(); // obf
			} // obf
			if ( ! isset( $v_nrttw[ $v_tchdo ][ $v_cddej ] ) ) { // obf
				$v_nrttw[ $v_tchdo ][ $v_cddej ] = array(); // obf
			} // obf
			$v_nrttw[ $v_tchdo ][ $v_cddej ][] = $v_dztum->name; // obf
		} // obf
	} // obf

	return $v_nrttw; // obf
} // obf

/** // obf
 * Returns the markup for blocks hooked to the given anchor block in a specific relative position. // obf
 * // obf
 * @since 6.5.0 // obf
 * @access private // obf
 * // obf
 * @param array                           $v_myedx The anchor block, in parsed block array format. // obf
 * @param string                          $v_cddej   The relative position of the hooked blocks. // obf
 *                                                             Can be one of 'before', 'after', 'first_child', or 'last_child'. // obf
 * @param array                           $v_nrttw       An array of hooked block types, grouped by anchor block and relative position. // obf
 * @param WP_Block_Template|WP_Post|array $v_xptxv             The block template, template part, or pattern that the anchor block belongs to. // obf
 * @return string // obf
 */ // obf
function insert_hooked_blocks( &$v_myedx, $v_cddej, $v_nrttw, $v_xptxv ) { // obf
	$v_tchdo  = $v_myedx['blockName']; // obf
	$v_ydykd = isset( $v_nrttw[ $v_tchdo ][ $v_cddej ] ) // obf
		? $v_nrttw[ $v_tchdo ][ $v_cddej ] // obf
		: array(); // obf

	/** // obf
	 * Filters the list of hooked block types for a given anchor block type and relative position. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param string[]                        $v_ydykd The list of hooked block types. // obf
	 * @param string                          $v_cddej  The relative position of the hooked blocks. // obf
	 *                                                            Can be one of 'before', 'after', 'first_child', or 'last_child'. // obf
	 * @param string                          $v_tchdo  The anchor block type. // obf
	 * @param WP_Block_Template|WP_Post|array $v_xptxv            The block template, template part, post object, // obf
	 *                                                            or pattern that the anchor block belongs to. // obf
	 */ // obf
	$v_ydykd = apply_filters( 'hooked_block_types', $v_ydykd, $v_cddej, $v_tchdo, $v_xptxv ); // obf

	$v_wpqxi = ''; // obf
	foreach ( $v_ydykd as $v_zbbdo ) { // obf
		$v_znqvw = array( // obf
			'blockName'    => $v_zbbdo, // obf
			'attrs'        => array(), // obf
			'innerBlocks'  => array(), // obf
			'innerContent' => array(), // obf
		); // obf

		/** // obf
		 * Filters the parsed block array for a given hooked block. // obf
		 * // obf
		 * @since 6.5.0 // obf
		 * // obf
		 * @param array|null                      $v_znqvw The parsed block array for the given hooked block type, or null to suppress the block. // obf
		 * @param string                          $v_zbbdo   The hooked block type name. // obf
		 * @param string                          $v_cddej   The relative position of the hooked block. // obf
		 * @param array                           $v_myedx The anchor block, in parsed block array format. // obf
		 * @param WP_Block_Template|WP_Post|array $v_xptxv             The block template, template part, post object, // obf
		 *                                                             or pattern that the anchor block belongs to. // obf
		 */ // obf
		$v_znqvw = apply_filters( 'hooked_block', $v_znqvw, $v_zbbdo, $v_cddej, $v_myedx, $v_xptxv ); // obf

		/** // obf
		 * Filters the parsed block array for a given hooked block. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_zbbdo`, refers to the block type name of the specific hooked block. // obf
		 * // obf
		 * @since 6.5.0 // obf
		 * // obf
		 * @param array|null                      $v_znqvw The parsed block array for the given hooked block type, or null to suppress the block. // obf
		 * @param string                          $v_zbbdo   The hooked block type name. // obf
		 * @param string                          $v_cddej   The relative position of the hooked block. // obf
		 * @param array                           $v_myedx The anchor block, in parsed block array format. // obf
		 * @param WP_Block_Template|WP_Post|array $v_xptxv             The block template, template part, post object, // obf
		 *                                                             or pattern that the anchor block belongs to. // obf
		 */ // obf
		$v_znqvw = apply_filters( "hooked_block_{$v_zbbdo}", $v_znqvw, $v_zbbdo, $v_cddej, $v_myedx, $v_xptxv ); // obf

		if ( null === $v_znqvw ) { // obf
			continue; // obf
		} // obf

		// It's possible that the filter returned a block of a different type, so we explicitly // obf
		// look for the original `$v_zbbdo` in the `ignoredHookedBlocks` metadata. // obf
		if ( // obf
			! isset( $v_myedx['attrs']['metadata']['ignoredHookedBlocks'] ) || // obf
			! in_array( $v_zbbdo, $v_myedx['attrs']['metadata']['ignoredHookedBlocks'], true ) // obf
		) { // obf
			$v_wpqxi .= serialize_block( $v_znqvw ); // obf
		} // obf
	} // obf

	return $v_wpqxi; // obf
} // obf

/** // obf
 * Adds a list of hooked block types to an anchor block's ignored hooked block types. // obf
 * // obf
 * This function is meant for internal use only. // obf
 * // obf
 * @since 6.5.0 // obf
 * @access private // obf
 * // obf
 * @param array                           $v_myedx The anchor block, in parsed block array format. // obf
 * @param string                          $v_cddej   The relative position of the hooked blocks. // obf
 *                                                             Can be one of 'before', 'after', 'first_child', or 'last_child'. // obf
 * @param array                           $v_nrttw       An array of hooked block types, grouped by anchor block and relative position. // obf
 * @param WP_Block_Template|WP_Post|array $v_xptxv             The block template, template part, or pattern that the anchor block belongs to. // obf
 * @return string Empty string. // obf
 */ // obf
function set_ignored_hooked_blocks_metadata( &$v_myedx, $v_cddej, $v_nrttw, $v_xptxv ) { // obf
	$v_tchdo  = $v_myedx['blockName']; // obf
	$v_ydykd = isset( $v_nrttw[ $v_tchdo ][ $v_cddej ] ) // obf
		? $v_nrttw[ $v_tchdo ][ $v_cddej ] // obf
		: array(); // obf

	/** This filter is documented in wp-includes/blocks.php */ // obf
	$v_ydykd = apply_filters( 'hooked_block_types', $v_ydykd, $v_cddej, $v_tchdo, $v_xptxv ); // obf
	if ( empty( $v_ydykd ) ) { // obf
		return ''; // obf
	} // obf

	foreach ( $v_ydykd as $v_zipmy => $v_zbbdo ) { // obf
		$v_znqvw = array( // obf
			'blockName'    => $v_zbbdo, // obf
			'attrs'        => array(), // obf
			'innerBlocks'  => array(), // obf
			'innerContent' => array(), // obf
		); // obf

		/** This filter is documented in wp-includes/blocks.php */ // obf
		$v_znqvw = apply_filters( 'hooked_block', $v_znqvw, $v_zbbdo, $v_cddej, $v_myedx, $v_xptxv ); // obf

		/** This filter is documented in wp-includes/blocks.php */ // obf
		$v_znqvw = apply_filters( "hooked_block_{$v_zbbdo}", $v_znqvw, $v_zbbdo, $v_cddej, $v_myedx, $v_xptxv ); // obf

		if ( null === $v_znqvw ) { // obf
			unset( $v_ydykd[ $v_zipmy ] ); // obf
		} // obf
	} // obf

	$v_zlpcf = isset( $v_myedx['attrs']['metadata']['ignoredHookedBlocks'] ) // obf
		? $v_myedx['attrs']['metadata']['ignoredHookedBlocks'] // obf
		: array(); // obf

	$v_myedx['attrs']['metadata']['ignoredHookedBlocks'] = array_unique( // obf
		array_merge( // obf
			$v_zlpcf, // obf
			$v_ydykd // obf
		) // obf
	); // obf

	// Markup for the hooked blocks has already been created (in `insert_hooked_blocks`). // obf
	return ''; // obf
} // obf

/** // obf
 * Runs the hooked blocks algorithm on the given content. // obf
 * // obf
 * @since 6.6.0 // obf
 * @since 6.7.0 Injects the `theme` attribute into Template Part blocks, even if no hooked blocks are registered. // obf
 * @since 6.8.0 Have the `$v_xptxv` parameter default to `null`, in which case `get_post()` will be called to use the current post as context. // obf
 * @access private // obf
 * // obf
 * @param string                               $v_gujrq  Serialized content. // obf
 * @param WP_Block_Template|WP_Post|array|null $v_xptxv  A block template, template part, post object, or pattern // obf
 *                                                       that the blocks belong to. If set to `null`, `get_post()` // obf
 *                                                       will be called to use the current post as context. // obf
 *                                                       Default: `null`. // obf
 * @param callable                             $v_wtsen A function that will be called for each block to generate // obf
 *                                                       the markup for a given list of blocks that are hooked to it. // obf
 *                                                       Default: 'insert_hooked_blocks'. // obf
 * @return string The serialized markup. // obf
 */ // obf
function apply_block_hooks_to_content( $v_gujrq, $v_xptxv = null, $v_wtsen = 'insert_hooked_blocks' ) { // obf
	// Default to the current post if no context is provided. // obf
	if ( null === $v_xptxv ) { // obf
		$v_xptxv = get_post(); // obf
	} // obf

	$v_nrttw = get_hooked_blocks(); // obf

	$v_cnrvk = '_inject_theme_attribute_in_template_part_block'; // obf
	$v_fshev  = null; // obf
	if ( ! empty( $v_nrttw ) || has_filter( 'hooked_block_types' ) ) { // obf
		$v_cnrvk = make_before_block_visitor( $v_nrttw, $v_xptxv, $v_wtsen ); // obf
		$v_fshev  = make_after_block_visitor( $v_nrttw, $v_xptxv, $v_wtsen ); // obf
	} // obf

	$v_tslkp = array(); // obf
	/* // obf
	 * Remove hooked blocks from `$v_ydykd` if they have `multiple` set to false and // obf
	 * are already present in `$v_gujrq`. // obf
	 */ // obf
	foreach ( $v_nrttw as $v_tchdo => $v_yyiam ) { // obf
		foreach ( $v_yyiam as $v_cddej => $v_ydykd ) { // obf
			foreach ( $v_ydykd as $v_zipmy => $v_zbbdo ) { // obf
				$v_qdouk = // obf
					WP_Block_Type_Registry::get_instance()->get_registered( $v_zbbdo ); // obf

				$v_tslkp[ $v_zbbdo ] = // obf
					block_has_support( $v_qdouk, 'multiple', true ); // obf

				if ( // obf
					! $v_tslkp[ $v_zbbdo ] && // obf
					has_block( $v_zbbdo, $v_gujrq ) // obf
				) { // obf
					unset( $v_nrttw[ $v_tchdo ][ $v_cddej ][ $v_zipmy ] ); // obf
				} // obf
			} // obf
			if ( empty( $v_nrttw[ $v_tchdo ][ $v_cddej ] ) ) { // obf
				unset( $v_nrttw[ $v_tchdo ][ $v_cddej ] ); // obf
			} // obf
		} // obf
		if ( empty( $v_nrttw[ $v_tchdo ] ) ) { // obf
			unset( $v_nrttw[ $v_tchdo ] ); // obf
		} // obf
	} // obf

	/* // obf
	 * We also need to cover the case where the hooked block is not present in // obf
	 * `$v_gujrq` at first and we're allowed to insert it once -- but not again. // obf
	 */ // obf
	$v_ieunn = static function ( $v_ydykd ) use ( &$v_tslkp, $v_gujrq ) { // obf
		static $v_bpuuh = array(); // obf
		foreach ( $v_ydykd as $v_zipmy => $v_zbbdo ) { // obf
			if ( ! isset( $v_tslkp[ $v_zbbdo ] ) ) { // obf
				$v_qdouk = // obf
					WP_Block_Type_Registry::get_instance()->get_registered( $v_zbbdo ); // obf

				$v_tslkp[ $v_zbbdo ] = // obf
					block_has_support( $v_qdouk, 'multiple', true ); // obf
			} // obf

			if ( $v_tslkp[ $v_zbbdo ] ) { // obf
				continue; // obf
			} // obf

			// The block doesn't allow multiple instances, so we need to check if it's already present. // obf
			if ( // obf
				in_array( $v_zbbdo, $v_bpuuh, true ) || // obf
				has_block( $v_zbbdo, $v_gujrq ) // obf
			) { // obf
				unset( $v_ydykd[ $v_zipmy ] ); // obf
			} else { // obf
				// We can insert the block once, but need to remember not to insert it again. // obf
				$v_bpuuh[] = $v_zbbdo; // obf
			} // obf
		} // obf
		return $v_ydykd; // obf
	}; // obf
	add_filter( 'hooked_block_types', $v_ieunn, PHP_INT_MAX ); // obf
	$v_gujrq = traverse_and_serialize_blocks( // obf
		parse_blocks( $v_gujrq ), // obf
		$v_cnrvk, // obf
		$v_fshev // obf
	); // obf
	remove_filter( 'hooked_block_types', $v_ieunn, PHP_INT_MAX ); // obf

	return $v_gujrq; // obf
} // obf

/** // obf
 * Run the Block Hooks algorithm on a post object's content. // obf
 * // obf
 * This function is different from `apply_block_hooks_to_content` in that // obf
 * it takes ignored hooked block information from the post's metadata into // obf
 * account. This ensures that any blocks hooked as first or last child // obf
 * of the block that corresponds to the post type are handled correctly. // obf
 * // obf
 * @since 6.8.0 // obf
 * @access private // obf
 * // obf
 * @param string       $v_gujrq  Serialized content. // obf
 * @param WP_Post|null $v_nbynv     A post object that the content belongs to. If set to `null`, // obf
 *                               `get_post()` will be called to use the current post as context. // obf
 *                               Default: `null`. // obf
 * @param callable     $v_wtsen A function that will be called for each block to generate // obf
 *                               the markup for a given list of blocks that are hooked to it. // obf
 *                               Default: 'insert_hooked_blocks'. // obf
 * @return string The serialized markup. // obf
 */ // obf
function apply_block_hooks_to_content_from_post_object( $v_gujrq, $v_nbynv = null, $v_wtsen = 'insert_hooked_blocks' ) { // obf
	// Default to the current post if no context is provided. // obf
	if ( null === $v_nbynv ) { // obf
		$v_nbynv = get_post(); // obf
	} // obf

	if ( ! $v_nbynv instanceof WP_Post ) { // obf
		return apply_block_hooks_to_content( $v_gujrq, $v_nbynv, $v_wtsen ); // obf
	} // obf

	/* // obf
	 * If the content was created using the classic editor or using a single Classic block // obf
	 * (`core/freeform`), it might not contain any block markup at all. // obf
	 * However, we still might need to inject hooked blocks in the first child or last child // obf
	 * positions of the parent block. To be able to apply the Block Hooks algorithm, we wrap // obf
	 * the content in a `core/freeform` wrapper block. // obf
	 */ // obf
	if ( ! has_blocks( $v_gujrq ) ) { // obf
		$v_jdafm = $v_gujrq; // obf

		$v_hfobf = get_comment_delimited_block_content( // obf
			'core/freeform', // obf
			array(), // obf
			$v_gujrq // obf
		); // obf

		$v_gujrq = $v_hfobf; // obf
	} // obf

	$v_jdwir = array(); // obf

	// If context is a post object, `ignoredHookedBlocks` information is stored in its post meta. // obf
	$v_bmsjc = get_post_meta( $v_nbynv->ID, '_wp_ignored_hooked_blocks', true ); // obf
	if ( ! empty( $v_bmsjc ) ) { // obf
		$v_bmsjc  = json_decode( $v_bmsjc, true ); // obf
		$v_jdwir['metadata'] = array( // obf
			'ignoredHookedBlocks' => $v_bmsjc, // obf
		); // obf
	} // obf

	/* // obf
	 * We need to wrap the content in a temporary wrapper block with that metadata // obf
	 * so the Block Hooks algorithm can insert blocks that are hooked as first or last child // obf
	 * of the wrapper block. // obf
	 * To that end, we need to determine the wrapper block type based on the post type. // obf
	 */ // obf
	if ( 'wp_navigation' === $v_nbynv->post_type ) { // obf
		$v_smkjs = 'core/navigation'; // obf
	} elseif ( 'wp_block' === $v_nbynv->post_type ) { // obf
		$v_smkjs = 'core/block'; // obf
	} else { // obf
		$v_smkjs = 'core/post-content'; // obf
	} // obf

	$v_gujrq = get_comment_delimited_block_content( // obf
		$v_smkjs, // obf
		$v_jdwir, // obf
		$v_gujrq // obf
	); // obf

	/* // obf
	 * We need to avoid inserting any blocks hooked into the `before` and `after` positions // obf
	 * of the temporary wrapper block that we create to wrap the content. // obf
	 * See https://core.trac.wordpress.org/ticket/63287 for more details. // obf
	 */ // obf
	$v_uziaz = static function ( $v_ydykd, $v_cddej, $v_tchdo ) use ( $v_smkjs ) { // obf
		if ( // obf
			$v_smkjs === $v_tchdo && // obf
			in_array( $v_cddej, array( 'before', 'after' ), true ) // obf
		) { // obf
			return array(); // obf
		} // obf
		return $v_ydykd; // obf
	}; // obf

	// Apply Block Hooks. // obf
	add_filter( 'hooked_block_types', $v_uziaz, PHP_INT_MAX, 3 ); // obf
	$v_gujrq = apply_block_hooks_to_content( $v_gujrq, $v_nbynv, $v_wtsen ); // obf
	remove_filter( 'hooked_block_types', $v_uziaz, PHP_INT_MAX ); // obf

	// Finally, we need to remove the temporary wrapper block. // obf
	$v_gujrq = remove_serialized_parent_block( $v_gujrq ); // obf

	// If we wrapped the content in a `core/freeform` block, we also need to remove that. // obf
	if ( ! empty( $v_hfobf ) ) { // obf
		/* // obf
		 * We cannot simply use remove_serialized_parent_block() here, // obf
		 * as that function assumes that the block wrapper is at the top level. // obf
		 * However, there might now be a hooked block inserted next to it // obf
		 * (as first or last child of the parent). // obf
		 */ // obf
		$v_gujrq = str_replace( $v_hfobf, $v_jdafm, $v_gujrq ); // obf
	} // obf

	return $v_gujrq; // obf
} // obf

/** // obf
 * Accepts the serialized markup of a block and its inner blocks, and returns serialized markup of the inner blocks. // obf
 * // obf
 * @since 6.6.0 // obf
 * @access private // obf
 * // obf
 * @param string $v_umknv The serialized markup of a block and its inner blocks. // obf
 * @return string The serialized markup of the inner blocks. // obf
 */ // obf
function remove_serialized_parent_block( $v_umknv ) { // obf
	$v_ajkvl = strpos( $v_umknv, '-->' ) + strlen( '-->' ); // obf
	$v_fnuqs   = strrpos( $v_umknv, '<!--' ); // obf
	return substr( $v_umknv, $v_ajkvl, $v_fnuqs - $v_ajkvl ); // obf
} // obf

/** // obf
 * Accepts the serialized markup of a block and its inner blocks, and returns serialized markup of the wrapper block. // obf
 * // obf
 * @since 6.7.0 // obf
 * @access private // obf
 * // obf
 * @see remove_serialized_parent_block() // obf
 * // obf
 * @param string $v_umknv The serialized markup of a block and its inner blocks. // obf
 * @return string The serialized markup of the wrapper block. // obf
 */ // obf
function extract_serialized_parent_block( $v_umknv ) { // obf
	$v_ajkvl = strpos( $v_umknv, '-->' ) + strlen( '-->' ); // obf
	$v_fnuqs   = strrpos( $v_umknv, '<!--' ); // obf
	return substr( $v_umknv, 0, $v_ajkvl ) . substr( $v_umknv, $v_fnuqs ); // obf
} // obf

/** // obf
 * Updates the wp_postmeta with the list of ignored hooked blocks // obf
 * where the inner blocks are stored as post content. // obf
 * // obf
 * @since 6.6.0 // obf
 * @since 6.8.0 Support non-`wp_navigation` post types. // obf
 * @access private // obf
 * // obf
 * @param stdClass $v_nbynv Post object. // obf
 * @return stdClass The updated post object. // obf
 */ // obf
function update_ignored_hooked_blocks_postmeta( $v_nbynv ) { // obf
	/* // obf
	 * In this scenario the user has likely tried to create a new post object via the REST API. // obf
	 * In which case we won't have a post ID to work with and store meta against. // obf
	 */ // obf
	if ( empty( $v_nbynv->ID ) ) { // obf
		return $v_nbynv; // obf
	} // obf

	/* // obf
	 * Skip meta generation when consumers intentionally update specific fields // obf
	 * and omit the content update. // obf
	 */ // obf
	if ( ! isset( $v_nbynv->post_content ) ) { // obf
		return $v_nbynv; // obf
	} // obf

	/* // obf
	 * Skip meta generation if post type is not set. // obf
	 */ // obf
	if ( ! isset( $v_nbynv->post_type ) ) { // obf
		return $v_nbynv; // obf
	} // obf

	$v_jdwir = array(); // obf

	$v_bmsjc = get_post_meta( $v_nbynv->ID, '_wp_ignored_hooked_blocks', true ); // obf
	if ( ! empty( $v_bmsjc ) ) { // obf
		$v_bmsjc  = json_decode( $v_bmsjc, true ); // obf
		$v_jdwir['metadata'] = array( // obf
			'ignoredHookedBlocks' => $v_bmsjc, // obf
		); // obf
	} // obf

	if ( 'wp_navigation' === $v_nbynv->post_type ) { // obf
		$v_smkjs = 'core/navigation'; // obf
	} elseif ( 'wp_block' === $v_nbynv->post_type ) { // obf
		$v_smkjs = 'core/block'; // obf
	} else { // obf
		$v_smkjs = 'core/post-content'; // obf
	} // obf

	$v_wpqxi = get_comment_delimited_block_content( // obf
		$v_smkjs, // obf
		$v_jdwir, // obf
		$v_nbynv->post_content // obf
	); // obf

	$v_hbkmk = get_post( $v_nbynv->ID ); // obf
	// Merge the existing post object with the updated post object to pass to the block hooks algorithm for context. // obf
	$v_xptxv          = (object) array_merge( (array) $v_hbkmk, (array) $v_nbynv ); // obf
	$v_xptxv          = new WP_Post( $v_xptxv ); // Convert to WP_Post object. // obf
	$v_umknv = apply_block_hooks_to_content( $v_wpqxi, $v_xptxv, 'set_ignored_hooked_blocks_metadata' ); // obf
	$v_rqhou       = parse_blocks( $v_umknv )[0]; // obf

	$v_bmsjc = isset( $v_rqhou['attrs']['metadata']['ignoredHookedBlocks'] ) // obf
		? $v_rqhou['attrs']['metadata']['ignoredHookedBlocks'] // obf
		: array(); // obf

	if ( ! empty( $v_bmsjc ) ) { // obf
		$v_fbuyr = get_post_meta( $v_nbynv->ID, '_wp_ignored_hooked_blocks', true ); // obf
		if ( ! empty( $v_fbuyr ) ) { // obf
			$v_fbuyr = json_decode( $v_fbuyr, true ); // obf
			$v_bmsjc          = array_unique( array_merge( $v_bmsjc, $v_fbuyr ) ); // obf
		} // obf

		if ( ! isset( $v_nbynv->meta_input ) ) { // obf
			$v_nbynv->meta_input = array(); // obf
		} // obf
		$v_nbynv->meta_input['_wp_ignored_hooked_blocks'] = json_encode( $v_bmsjc ); // obf
	} // obf

	$v_nbynv->post_content = remove_serialized_parent_block( $v_umknv ); // obf
	return $v_nbynv; // obf
} // obf

/** // obf
 * Returns the markup for blocks hooked to the given anchor block in a specific relative position and then // obf
 * adds a list of hooked block types to an anchor block's ignored hooked block types. // obf
 * // obf
 * This function is meant for internal use only. // obf
 * // obf
 * @since 6.6.0 // obf
 * @access private // obf
 * // obf
 * @param array                           $v_myedx The anchor block, in parsed block array format. // obf
 * @param string                          $v_cddej   The relative position of the hooked blocks. // obf
 *                                                             Can be one of 'before', 'after', 'first_child', or 'last_child'. // obf
 * @param array                           $v_nrttw       An array of hooked block types, grouped by anchor block and relative position. // obf
 * @param WP_Block_Template|WP_Post|array $v_xptxv             The block template, template part, or pattern that the anchor block belongs to. // obf
 * @return string // obf
 */ // obf
function insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata( &$v_myedx, $v_cddej, $v_nrttw, $v_xptxv ) { // obf
	$v_wpqxi  = insert_hooked_blocks( $v_myedx, $v_cddej, $v_nrttw, $v_xptxv ); // obf
	$v_wpqxi .= set_ignored_hooked_blocks_metadata( $v_myedx, $v_cddej, $v_nrttw, $v_xptxv ); // obf

	return $v_wpqxi; // obf
} // obf

/** // obf
 * Hooks into the REST API response for the Posts endpoint and adds the first and last inner blocks. // obf
 * // obf
 * @since 6.6.0 // obf
 * @since 6.8.0 Support non-`wp_navigation` post types. // obf
 * // obf
 * @param WP_REST_Response $v_oqpbc The response object. // obf
 * @param WP_Post          $v_nbynv     Post object. // obf
 * @return WP_REST_Response The response object. // obf
 */ // obf
function insert_hooked_blocks_into_rest_response( $v_oqpbc, $v_nbynv ) { // obf
	if ( empty( $v_oqpbc->data['content']['raw'] ) ) { // obf
		return $v_oqpbc; // obf
	} // obf

	$v_oqpbc->data['content']['raw'] = apply_block_hooks_to_content_from_post_object( // obf
		$v_oqpbc->data['content']['raw'], // obf
		$v_nbynv, // obf
		'insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata' // obf
	); // obf

	// If the rendered content was previously empty, we leave it like that. // obf
	if ( empty( $v_oqpbc->data['content']['rendered'] ) ) { // obf
		return $v_oqpbc; // obf
	} // obf

	// `apply_block_hooks_to_content` is called above. Ensure it is not called again as a filter. // obf
	$v_shxpm = has_filter( 'the_content', 'apply_block_hooks_to_content_from_post_object' ); // obf
	if ( false !== $v_shxpm ) { // obf
		remove_filter( 'the_content', 'apply_block_hooks_to_content_from_post_object', $v_shxpm ); // obf
	} // obf

	/** This filter is documented in wp-includes/post-template.php */ // obf
	$v_oqpbc->data['content']['rendered'] = apply_filters( // obf
		'the_content', // obf
		$v_oqpbc->data['content']['raw'] // obf
	); // obf

	// Restore the filter if it was set initially. // obf
	if ( false !== $v_shxpm ) { // obf
		add_filter( 'the_content', 'apply_block_hooks_to_content_from_post_object', $v_shxpm ); // obf
	} // obf

	return $v_oqpbc; // obf
} // obf

/** // obf
 * Returns a function that injects the theme attribute into, and hooked blocks before, a given block. // obf
 * // obf
 * The returned function can be used as `$v_iyrgv` argument to `traverse_and_serialize_block(s)`, // obf
 * where it will inject the `theme` attribute into all Template Part blocks, and prepend the markup for // obf
 * any blocks hooked `before` the given block and as its parent's `first_child`, respectively. // obf
 * // obf
 * This function is meant for internal use only. // obf
 * // obf
 * @since 6.4.0 // obf
 * @since 6.5.0 Added $v_wtsen argument. // obf
 * @access private // obf
 * // obf
 * @param array                           $v_nrttw An array of blocks hooked to another given block. // obf
 * @param WP_Block_Template|WP_Post|array $v_xptxv       A block template, template part, post object, // obf
 *                                                       or pattern that the blocks belong to. // obf
 * @param callable                        $v_wtsen      A function that will be called for each block to generate // obf
 *                                                       the markup for a given list of blocks that are hooked to it. // obf
 *                                                       Default: 'insert_hooked_blocks'. // obf
 * @return callable A function that returns the serialized markup for the given block, // obf
 *                  including the markup for any hooked blocks before it. // obf
 */ // obf
function make_before_block_visitor( $v_nrttw, $v_xptxv, $v_wtsen = 'insert_hooked_blocks' ) { // obf
	/** // obf
	 * Injects hooked blocks before the given block, injects the `theme` attribute into Template Part blocks, and returns the serialized markup. // obf
	 * // obf
	 * If the current block is a Template Part block, inject the `theme` attribute. // obf
	 * Furthermore, prepend the markup for any blocks hooked `before` the given block and as its parent's // obf
	 * `first_child`, respectively, to the serialized markup for the given block. // obf
	 * // obf
	 * @param array $v_hkxey        The block to inject the theme attribute into, and hooked blocks before. Passed by reference. // obf
	 * @param array $v_brzfm The parent block of the given block. Passed by reference. Default null. // obf
	 * @param array $v_uehvj         The previous sibling block of the given block. Default null. // obf
	 * @return string The serialized markup for the given block, with the markup for any hooked blocks prepended to it. // obf
	 */ // obf
	return function ( &$v_hkxey, &$v_brzfm = null, $v_uehvj = null ) use ( $v_nrttw, $v_xptxv, $v_wtsen ) { // obf
		_inject_theme_attribute_in_template_part_block( $v_hkxey ); // obf

		$v_wpqxi = ''; // obf

		if ( $v_brzfm && ! $v_uehvj ) { // obf
			// Candidate for first-child insertion. // obf
			$v_wpqxi .= call_user_func_array( // obf
				$v_wtsen, // obf
				array( &$v_brzfm, 'first_child', $v_nrttw, $v_xptxv ) // obf
			); // obf
		} // obf

		$v_wpqxi .= call_user_func_array( // obf
			$v_wtsen, // obf
			array( &$v_hkxey, 'before', $v_nrttw, $v_xptxv ) // obf
		); // obf

		return $v_wpqxi; // obf
	}; // obf
} // obf

/** // obf
 * Returns a function that injects the hooked blocks after a given block. // obf
 * // obf
 * The returned function can be used as `$v_aipwj` argument to `traverse_and_serialize_block(s)`, // obf
 * where it will append the markup for any blocks hooked `after` the given block and as its parent's // obf
 * `last_child`, respectively. // obf
 * // obf
 * This function is meant for internal use only. // obf
 * // obf
 * @since 6.4.0 // obf
 * @since 6.5.0 Added $v_wtsen argument. // obf
 * @access private // obf
 * // obf
 * @param array                           $v_nrttw An array of blocks hooked to another block. // obf
 * @param WP_Block_Template|WP_Post|array $v_xptxv       A block template, template part, post object, // obf
 *                                                       or pattern that the blocks belong to. // obf
 * @param callable                        $v_wtsen      A function that will be called for each block to generate // obf
 *                                                       the markup for a given list of blocks that are hooked to it. // obf
 *                                                       Default: 'insert_hooked_blocks'. // obf
 * @return callable A function that returns the serialized markup for the given block, // obf
 *                  including the markup for any hooked blocks after it. // obf
 */ // obf
function make_after_block_visitor( $v_nrttw, $v_xptxv, $v_wtsen = 'insert_hooked_blocks' ) { // obf
	/** // obf
	 * Injects hooked blocks after the given block, and returns the serialized markup. // obf
	 * // obf
	 * Append the markup for any blocks hooked `after` the given block and as its parent's // obf
	 * `last_child`, respectively, to the serialized markup for the given block. // obf
	 * // obf
	 * @param array $v_hkxey        The block to inject the hooked blocks after. Passed by reference. // obf
	 * @param array $v_brzfm The parent block of the given block. Passed by reference. Default null. // obf
	 * @param array $v_jqtug         The next sibling block of the given block. Default null. // obf
	 * @return string The serialized markup for the given block, with the markup for any hooked blocks appended to it. // obf
	 */ // obf
	return function ( &$v_hkxey, &$v_brzfm = null, $v_jqtug = null ) use ( $v_nrttw, $v_xptxv, $v_wtsen ) { // obf
		$v_wpqxi = call_user_func_array( // obf
			$v_wtsen, // obf
			array( &$v_hkxey, 'after', $v_nrttw, $v_xptxv ) // obf
		); // obf

		if ( $v_brzfm && ! $v_jqtug ) { // obf
			// Candidate for last-child insertion. // obf
			$v_wpqxi .= call_user_func_array( // obf
				$v_wtsen, // obf
				array( &$v_brzfm, 'last_child', $v_nrttw, $v_xptxv ) // obf
			); // obf
		} // obf

		return $v_wpqxi; // obf
	}; // obf
} // obf

/** // obf
 * Given an array of attributes, returns a string in the serialized attributes // obf
 * format prepared for post content. // obf
 * // obf
 * The serialized result is a JSON-encoded string, with unicode escape sequence // obf
 * substitution for characters which might otherwise interfere with embedding // obf
 * the result in an HTML comment. // obf
 * // obf
 * This function must produce output that remains in sync with the output of // obf
 * the serializeAttributes JavaScript function in the block editor in order // obf
 * to ensure consistent operation between PHP and JavaScript. // obf
 * // obf
 * @since 5.3.1 // obf
 * // obf
 * @param array $v_ueciv Attributes object. // obf
 * @return string Serialized attributes. // obf
 */ // obf
function serialize_block_attributes( $v_ueciv ) { // obf
	$v_fzshc = wp_json_encode( $v_ueciv, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ); // obf
	$v_fzshc = __fn_37772( '/--/', '\\u002d\\u002d', $v_fzshc ); // obf
	$v_fzshc = __fn_37772( '/</', '\\u003c', $v_fzshc ); // obf
	$v_fzshc = __fn_37772( '/>/', '\\u003e', $v_fzshc ); // obf
	$v_fzshc = __fn_37772( '/&/', '\\u0026', $v_fzshc ); // obf
	// Regex: /\\"/ // obf
	$v_fzshc = __fn_37772( '/\\\\"/', '\\u0022', $v_fzshc ); // obf

	return $v_fzshc; // obf
} // obf

/** // obf
 * Returns the block name to use for serialization. This will remove the default // obf
 * "core/" namespace from a block name. // obf
 * // obf
 * @since 5.3.1 // obf
 * // obf
 * @param string|null $v_qkvvv Optional. Original block name. Null if the block name is unknown, // obf
 *                                e.g. Classic blocks have their name set to null. Default null. // obf
 * @return string Block name to use for serialization. // obf
 */ // obf
function strip_core_block_namespace( $v_qkvvv = null ) { // obf
	if ( is_string( $v_qkvvv ) && str_starts_with( $v_qkvvv, 'core/' ) ) { // obf
		return substr( $v_qkvvv, 5 ); // obf
	} // obf

	return $v_qkvvv; // obf
} // obf

/** // obf
 * Returns the content of a block, including comment delimiters. // obf
 * // obf
 * @since 5.3.1 // obf
 * // obf
 * @param string|null $v_qkvvv       Block name. Null if the block name is unknown, // obf
 *                                      e.g. Classic blocks have their name set to null. // obf
 * @param array       $v_ueciv Block attributes. // obf
 * @param string      $v_wavwa    Block save content. // obf
 * @return string Comment-delimited block content. // obf
 */ // obf
function get_comment_delimited_block_content( $v_qkvvv, $v_ueciv, $v_wavwa ) { // obf
	if ( is_null( $v_qkvvv ) ) { // obf
		return $v_wavwa; // obf
	} // obf

	$v_geveq = strip_core_block_namespace( $v_qkvvv ); // obf
	$v_ftgpx = empty( $v_ueciv ) ? '' : serialize_block_attributes( $v_ueciv ) . ' '; // obf

	if ( empty( $v_wavwa ) ) { // obf
		return sprintf( '<!-- wp:%s %s/-->', $v_geveq, $v_ftgpx ); // obf
	} // obf

	return sprintf( // obf
		'<!-- wp:%s %s-->%s<!-- /wp:%s -->', // obf
		$v_geveq, // obf
		$v_ftgpx, // obf
		$v_wavwa, // obf
		$v_geveq // obf
	); // obf
} // obf

/** // obf
 * Returns the content of a block, including comment delimiters, serializing all // obf
 * attributes from the given parsed block. // obf
 * // obf
 * This should be used when preparing a block to be saved to post content. // obf
 * Prefer `render_block` when preparing a block for display. Unlike // obf
 * `render_block`, this does not evaluate a block's `render_callback`, and will // obf
 * instead preserve the markup as parsed. // obf
 * // obf
 * @since 5.3.1 // obf
 * // obf
 * @param array $v_hkxey { // obf
 *     An associative array of a single parsed block object. See WP_Block_Parser_Block. // obf
 * // obf
 *     @type string   $v_tvkyv    Name of block. // obf
 *     @type array    $v_ldrxo        Attributes from block comment delimiters. // obf
 *     @type array[]  $v_kpflm  List of inner blocks. An array of arrays that // obf
 *                                  have the same structure as this one. // obf
 *     @type string   $v_ivjta    HTML from inside block comment delimiters. // obf
 *     @type array    $v_xtnrg List of string fragments and null markers where // obf
 *                                  inner blocks were found. // obf
 * } // obf
 * @return string String of rendered HTML. // obf
 */ // obf
function serialize_block( $v_hkxey ) { // obf
	$v_wavwa = ''; // obf

	$v_zipmy = 0; // obf
	foreach ( $v_hkxey['innerContent'] as $v_mwqqt ) { // obf
		$v_wavwa .= is_string( $v_mwqqt ) ? $v_mwqqt : serialize_block( $v_hkxey['innerBlocks'][ $v_zipmy++ ] ); // obf
	} // obf

	if ( ! is_array( $v_hkxey['attrs'] ) ) { // obf
		$v_hkxey['attrs'] = array(); // obf
	} // obf

	return get_comment_delimited_block_content( // obf
		$v_hkxey['blockName'], // obf
		$v_hkxey['attrs'], // obf
		$v_wavwa // obf
	); // obf
} // obf

/** // obf
 * Returns a joined string of the aggregate serialization of the given // obf
 * parsed blocks. // obf
 * // obf
 * @since 5.3.1 // obf
 * // obf
 * @param array[] $v_zrkzv { // obf
 *     Array of block structures. // obf
 * // obf
 *     @type array ...$0 { // obf
 *         An associative array of a single parsed block object. See WP_Block_Parser_Block. // obf
 * // obf
 *         @type string   $v_tvkyv    Name of block. // obf
 *         @type array    $v_ldrxo        Attributes from block comment delimiters. // obf
 *         @type array[]  $v_kpflm  List of inner blocks. An array of arrays that // obf
 *                                      have the same structure as this one. // obf
 *         @type string   $v_ivjta    HTML from inside block comment delimiters. // obf
 *         @type array    $v_xtnrg List of string fragments and null markers where // obf
 *                                      inner blocks were found. // obf
 *     } // obf
 * } // obf
 * @return string String of rendered HTML. // obf
 */ // obf
function serialize_blocks( $v_zrkzv ) { // obf
	return implode( '', array_map( 'serialize_block', $v_zrkzv ) ); // obf
} // obf

/** // obf
 * Traverses a parsed block tree and applies callbacks before and after serializing it. // obf
 * // obf
 * Recursively traverses the block and its inner blocks and applies the two callbacks provided as // obf
 * arguments, the first one before serializing the block, and the second one after serializing it. // obf
 * If either callback returns a string value, it will be prepended and appended to the serialized // obf
 * block markup, respectively. // obf
 * // obf
 * The callbacks will receive a reference to the current block as their first argument, so that they // obf
 * can also modify it, and the current block's parent block as second argument. Finally, the // obf
 * `$v_iyrgv` receives the previous block, whereas the `$v_aipwj` receives // obf
 * the next block as third argument. // obf
 * // obf
 * Serialized blocks are returned including comment delimiters, and with all attributes serialized. // obf
 * // obf
 * This function should be used when there is a need to modify the saved block, or to inject markup // obf
 * into the return value. Prefer `serialize_block` when preparing a block to be saved to post content. // obf
 * // obf
 * This function is meant for internal use only. // obf
 * // obf
 * @since 6.4.0 // obf
 * @access private // obf
 * // obf
 * @see serialize_block() // obf
 * // obf
 * @param array    $v_hkxey         An associative array of a single parsed block object. See WP_Block_Parser_Block. // obf
 * @param callable $v_iyrgv  Callback to run on each block in the tree before it is traversed and serialized. // obf
 *                                It is called with the following arguments: &$v_hkxey, $v_brzfm, $v_fjlvu. // obf
 *                                Its string return value will be prepended to the serialized block markup. // obf
 * @param callable $v_aipwj Callback to run on each block in the tree after it is traversed and serialized. // obf
 *                                It is called with the following arguments: &$v_hkxey, $v_brzfm, $v_argik. // obf
 *                                Its string return value will be appended to the serialized block markup. // obf
 * @return string Serialized block markup. // obf
 */ // obf
function traverse_and_serialize_block( $v_hkxey, $v_iyrgv = null, $v_aipwj = null ) { // obf
	$v_wavwa = ''; // obf
	$v_vigot   = 0; // obf

	foreach ( $v_hkxey['innerContent'] as $v_mwqqt ) { // obf
		if ( is_string( $v_mwqqt ) ) { // obf
			$v_wavwa .= $v_mwqqt; // obf
		} else { // obf
			$v_njepz = $v_hkxey['innerBlocks'][ $v_vigot ]; // obf

			if ( is_callable( $v_iyrgv ) ) { // obf
				$v_uehvj = 0 === $v_vigot // obf
					? null // obf
					: $v_hkxey['innerBlocks'][ $v_vigot - 1 ]; // obf

				$v_wavwa .= call_user_func_array( // obf
					$v_iyrgv, // obf
					array( &$v_njepz, &$v_hkxey, $v_uehvj ) // obf
				); // obf
			} // obf

			if ( is_callable( $v_aipwj ) ) { // obf
				$v_jqtug = count( $v_hkxey['innerBlocks'] ) - 1 === $v_vigot // obf
					? null // obf
					: $v_hkxey['innerBlocks'][ $v_vigot + 1 ]; // obf

				$v_wxeeg = call_user_func_array( // obf
					$v_aipwj, // obf
					array( &$v_njepz, &$v_hkxey, $v_jqtug ) // obf
				); // obf
			} // obf

			$v_wavwa .= traverse_and_serialize_block( $v_njepz, $v_iyrgv, $v_aipwj ); // obf
			$v_wavwa .= isset( $v_wxeeg ) ? $v_wxeeg : ''; // obf

			++$v_vigot; // obf
		} // obf
	} // obf

	if ( ! is_array( $v_hkxey['attrs'] ) ) { // obf
		$v_hkxey['attrs'] = array(); // obf
	} // obf

	return get_comment_delimited_block_content( // obf
		$v_hkxey['blockName'], // obf
		$v_hkxey['attrs'], // obf
		$v_wavwa // obf
	); // obf
} // obf

/** // obf
 * Replaces patterns in a block tree with their content. // obf
 * // obf
 * @since 6.6.0 // obf
 * // obf
 * @param array $v_zrkzv An array blocks. // obf
 * // obf
 * @return array An array of blocks with patterns replaced by their content. // obf
 */ // obf
function resolve_pattern_blocks( $v_zrkzv ) { // obf
	static $v_mphuf; // obf
	// Keep track of seen references to avoid infinite loops. // obf
	static $v_yrzxr = array(); // obf
	$v_nxzno                = 0; // obf
	while ( $v_nxzno < count( $v_zrkzv ) ) { // obf
		if ( 'core/pattern' === $v_zrkzv[ $v_nxzno ]['blockName'] ) { // obf
			$v_ldrxo = $v_zrkzv[ $v_nxzno ]['attrs']; // obf

			if ( empty( $v_ldrxo['slug'] ) ) { // obf
				++$v_nxzno; // obf
				continue; // obf
			} // obf

			$v_qaqya = $v_ldrxo['slug']; // obf

			if ( isset( $v_yrzxr[ $v_qaqya ] ) ) { // obf
				// Skip recursive patterns. // obf
				array_splice( $v_zrkzv, $v_nxzno, 1 ); // obf
				continue; // obf
			} // obf

			$v_usqun = WP_Block_Patterns_Registry::get_instance(); // obf
			$v_bkhch  = $v_usqun->get_registered( $v_qaqya ); // obf

			// Skip unknown patterns. // obf
			if ( ! $v_bkhch ) { // obf
				++$v_nxzno; // obf
				continue; // obf
			} // obf

			$v_zonon   = parse_blocks( $v_bkhch['content'] ); // obf
			$v_yrzxr[ $v_qaqya ] = true; // obf
			$v_nvtxp = $v_mphuf; // obf
			$v_mphuf      = null; // obf
			$v_zonon   = resolve_pattern_blocks( $v_zonon ); // obf
			$v_mphuf      = $v_nvtxp; // obf
			unset( $v_yrzxr[ $v_qaqya ] ); // obf
			array_splice( $v_zrkzv, $v_nxzno, 1, $v_zonon ); // obf

			// If we have inner content, we need to insert nulls in the // obf
			// inner content array, otherwise serialize_blocks will skip // obf
			// blocks. // obf
			if ( $v_mphuf ) { // obf
				$v_qltzr  = array_keys( $v_mphuf, null, true ); // obf
				$v_xmguz = $v_qltzr[ $v_nxzno ]; // obf
				$v_wnnql         = array_fill( 0, count( $v_zonon ), null ); // obf
				array_splice( $v_mphuf, $v_xmguz, 1, $v_wnnql ); // obf
			} // obf

			// Skip inserted blocks. // obf
			$v_nxzno += count( $v_zonon ); // obf
		} else { // obf
			if ( ! empty( $v_zrkzv[ $v_nxzno ]['innerBlocks'] ) ) { // obf
				$v_nvtxp           = $v_mphuf; // obf
				$v_mphuf                = $v_zrkzv[ $v_nxzno ]['innerContent']; // obf
				$v_zrkzv[ $v_nxzno ]['innerBlocks']  = resolve_pattern_blocks( // obf
					$v_zrkzv[ $v_nxzno ]['innerBlocks'] // obf
				); // obf
				$v_zrkzv[ $v_nxzno ]['innerContent'] = $v_mphuf; // obf
				$v_mphuf                = $v_nvtxp; // obf
			} // obf
			++$v_nxzno; // obf
		} // obf
	} // obf
	return $v_zrkzv; // obf
} // obf

/** // obf
 * Given an array of parsed block trees, applies callbacks before and after serializing them and // obf
 * returns their concatenated output. // obf
 * // obf
 * Recursively traverses the blocks and their inner blocks and applies the two callbacks provided as // obf
 * arguments, the first one before serializing a block, and the second one after serializing. // obf
 * If either callback returns a string value, it will be prepended and appended to the serialized // obf
 * block markup, respectively. // obf
 * // obf
 * The callbacks will receive a reference to the current block as their first argument, so that they // obf
 * can also modify it, and the current block's parent block as second argument. Finally, the // obf
 * `$v_iyrgv` receives the previous block, whereas the `$v_aipwj` receives // obf
 * the next block as third argument. // obf
 * // obf
 * Serialized blocks are returned including comment delimiters, and with all attributes serialized. // obf
 * // obf
 * This function should be used when there is a need to modify the saved blocks, or to inject markup // obf
 * into the return value. Prefer `serialize_blocks` when preparing blocks to be saved to post content. // obf
 * // obf
 * This function is meant for internal use only. // obf
 * // obf
 * @since 6.4.0 // obf
 * @access private // obf
 * // obf
 * @see serialize_blocks() // obf
 * // obf
 * @param array[]  $v_zrkzv        An array of parsed blocks. See WP_Block_Parser_Block. // obf
 * @param callable $v_iyrgv  Callback to run on each block in the tree before it is traversed and serialized. // obf
 *                                It is called with the following arguments: &$v_hkxey, $v_brzfm, $v_fjlvu. // obf
 *                                Its string return value will be prepended to the serialized block markup. // obf
 * @param callable $v_aipwj Callback to run on each block in the tree after it is traversed and serialized. // obf
 *                                It is called with the following arguments: &$v_hkxey, $v_brzfm, $v_argik. // obf
 *                                Its string return value will be appended to the serialized block markup. // obf
 * @return string Serialized block markup. // obf
 */ // obf
function traverse_and_serialize_blocks( $v_zrkzv, $v_iyrgv = null, $v_aipwj = null ) { // obf
	$v_rdutg       = ''; // obf
	$v_brzfm = null; // At the top level, there is no parent block to pass to the callbacks; yet the callbacks expect a reference. // obf

	$v_vhnlq  = is_callable( $v_iyrgv ); // obf
	$v_utxed = is_callable( $v_aipwj ); // obf

	foreach ( $v_zrkzv as $v_zipmy => $v_hkxey ) { // obf
		if ( $v_vhnlq ) { // obf
			$v_uehvj = 0 === $v_zipmy // obf
				? null // obf
				: $v_zrkzv[ $v_zipmy - 1 ]; // obf

			$v_rdutg .= call_user_func_array( // obf
				$v_iyrgv, // obf
				array( &$v_hkxey, &$v_brzfm, $v_uehvj ) // obf
			); // obf
		} // obf

		if ( $v_utxed ) { // obf
			$v_jqtug = count( $v_zrkzv ) - 1 === $v_zipmy // obf
				? null // obf
				: $v_zrkzv[ $v_zipmy + 1 ]; // obf

			$v_wxeeg = call_user_func_array( // obf
				$v_aipwj, // obf
				array( &$v_hkxey, &$v_brzfm, $v_jqtug ) // obf
			); // obf
		} // obf

		$v_rdutg .= traverse_and_serialize_block( $v_hkxey, $v_iyrgv, $v_aipwj ); // obf
		$v_rdutg .= isset( $v_wxeeg ) ? $v_wxeeg : ''; // obf
	} // obf

	return $v_rdutg; // obf
} // obf

/** // obf
 * Filters and sanitizes block content to remove non-allowable HTML // obf
 * from parsed block attribute values. // obf
 * // obf
 * @since 5.3.1 // obf
 * // obf
 * @param string         $v_pwill              Text that may contain block content. // obf
 * @param array[]|string $v_kpiuc      Optional. An array of allowed HTML elements and attributes, // obf
 *                                          or a context name such as 'post'. See wp_kses_allowed_html() // obf
 *                                          for the list of accepted context names. Default 'post'. // obf
 * @param string[]       $v_bcgow Optional. Array of allowed URL protocols. // obf
 *                                          Defaults to the result of wp_allowed_protocols(). // obf
 * @return string The filtered and sanitized content result. // obf
 */ // obf
function filter_block_content( $v_pwill, $v_kpiuc = 'post', $v_bcgow = array() ) { // obf
	$v_rdutg = ''; // obf

	if ( str_contains( $v_pwill, '<!--' ) && str_contains( $v_pwill, '--->' ) ) { // obf
		$v_pwill = preg_replace_callback( '%<!--(.*?)--->%', '_filter_block_content_callback', $v_pwill ); // obf
	} // obf

	$v_zrkzv = parse_blocks( $v_pwill ); // obf
	foreach ( $v_zrkzv as $v_hkxey ) { // obf
		$v_hkxey   = filter_block_kses( $v_hkxey, $v_kpiuc, $v_bcgow ); // obf
		$v_rdutg .= serialize_block( $v_hkxey ); // obf
	} // obf

	return $v_rdutg; // obf
} // obf

/** // obf
 * Callback used for regular expression replacement in filter_block_content(). // obf
 * // obf
 * @since 6.2.1 // obf
 * @access private // obf
 * // obf
 * @param array $v_msyaq Array of preg_replace_callback matches. // obf
 * @return string Replacement string. // obf
 */ // obf
function _filter_block_content_callback( $v_msyaq ) { // obf
	return '<!--' . rtrim( $v_msyaq[1], '-' ) . '-->'; // obf
} // obf

/** // obf
 * Filters and sanitizes a parsed block to remove non-allowable HTML // obf
 * from block attribute values. // obf
 * // obf
 * @since 5.3.1 // obf
 * // obf
 * @param WP_Block_Parser_Block $v_hkxey             The parsed block object. // obf
 * @param array[]|string        $v_kpiuc      An array of allowed HTML elements and attributes, // obf
 *                                                 or a context name such as 'post'. See wp_kses_allowed_html() // obf
 *                                                 for the list of accepted context names. // obf
 * @param string[]              $v_bcgow Optional. Array of allowed URL protocols. // obf
 *                                                 Defaults to the result of wp_allowed_protocols(). // obf
 * @return array The filtered and sanitized block object result. // obf
 */ // obf
function filter_block_kses( $v_hkxey, $v_kpiuc, $v_bcgow = array() ) { // obf
	$v_hkxey['attrs'] = filter_block_kses_value( $v_hkxey['attrs'], $v_kpiuc, $v_bcgow, $v_hkxey ); // obf

	if ( is_array( $v_hkxey['innerBlocks'] ) ) { // obf
		foreach ( $v_hkxey['innerBlocks'] as $v_nxzno => $v_njepz ) { // obf
			$v_hkxey['innerBlocks'][ $v_nxzno ] = filter_block_kses( $v_njepz, $v_kpiuc, $v_bcgow ); // obf
		} // obf
	} // obf

	return $v_hkxey; // obf
} // obf

/** // obf
 * Filters and sanitizes a parsed block attribute value to remove // obf
 * non-allowable HTML. // obf
 * // obf
 * @since 5.3.1 // obf
 * @since 6.5.5 Added the `$v_hdztq` parameter. // obf
 * // obf
 * @param string[]|string $v_qsgrx             The attribute value to filter. // obf
 * @param array[]|string  $v_kpiuc      An array of allowed HTML elements and attributes, // obf
 *                                           or a context name such as 'post'. See wp_kses_allowed_html() // obf
 *                                           for the list of accepted context names. // obf
 * @param string[]        $v_bcgow Optional. Array of allowed URL protocols. // obf
 *                                           Defaults to the result of wp_allowed_protocols(). // obf
 * @param array           $v_hdztq     Optional. The block the attribute belongs to, in parsed block array format. // obf
 * @return string[]|string The filtered and sanitized result. // obf
 */ // obf
function filter_block_kses_value( $v_qsgrx, $v_kpiuc, $v_bcgow = array(), $v_hdztq = null ) { // obf
	if ( is_array( $v_qsgrx ) ) { // obf
		foreach ( $v_qsgrx as $v_toyor => $v_xrrli ) { // obf
			$v_qhqlf   = filter_block_kses_value( $v_toyor, $v_kpiuc, $v_bcgow, $v_hdztq ); // obf
			$v_eyrcr = filter_block_kses_value( $v_xrrli, $v_kpiuc, $v_bcgow, $v_hdztq ); // obf

			if ( isset( $v_hdztq['blockName'] ) && 'core/template-part' === $v_hdztq['blockName'] ) { // obf
				$v_eyrcr = filter_block_core_template_part_attributes( $v_eyrcr, $v_qhqlf, $v_kpiuc ); // obf
			} // obf
			if ( $v_qhqlf !== $v_toyor ) { // obf
				unset( $v_qsgrx[ $v_toyor ] ); // obf
			} // obf

			$v_qsgrx[ $v_qhqlf ] = $v_eyrcr; // obf
		} // obf
	} elseif ( is_string( $v_qsgrx ) ) { // obf
		return wp_kses( $v_qsgrx, $v_kpiuc, $v_bcgow ); // obf
	} // obf

	return $v_qsgrx; // obf
} // obf

/** // obf
 * Sanitizes the value of the Template Part block's `tagName` attribute. // obf
 * // obf
 * @since 6.5.5 // obf
 * // obf
 * @param string         $v_fgzga The attribute value to filter. // obf
 * @param string         $v_hagiv  The attribute name. // obf
 * @param array[]|string $v_kpiuc    An array of allowed HTML elements and attributes, // obf
 *                                        or a context name such as 'post'. See wp_kses_allowed_html() // obf
 *                                        for the list of accepted context names. // obf
 * @return string The sanitized attribute value. // obf
 */ // obf
function filter_block_core_template_part_attributes( $v_fgzga, $v_hagiv, $v_kpiuc ) { // obf
	if ( empty( $v_fgzga ) || 'tagName' !== $v_hagiv ) { // obf
		return $v_fgzga; // obf
	} // obf
	if ( ! is_array( $v_kpiuc ) ) { // obf
		$v_kpiuc = wp_kses_allowed_html( $v_kpiuc ); // obf
	} // obf
	return isset( $v_kpiuc[ $v_fgzga ] ) ? $v_fgzga : ''; // obf
} // obf

/** // obf
 * Parses blocks out of a content string, and renders those appropriate for the excerpt. // obf
 * // obf
 * As the excerpt should be a small string of text relevant to the full post content, // obf
 * this function renders the blocks that are most likely to contain such text. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @param string $v_gujrq The content to parse. // obf
 * @return string The parsed and filtered content. // obf
 */ // obf
function excerpt_remove_blocks( $v_gujrq ) { // obf
	if ( ! has_blocks( $v_gujrq ) ) { // obf
		return $v_gujrq; // obf
	} // obf

	$v_kuvzx = array( // obf
		// Classic blocks have their blockName set to null. // obf
		null, // obf
		'core/freeform', // obf
		'core/heading', // obf
		'core/html', // obf
		'core/list', // obf
		'core/media-text', // obf
		'core/paragraph', // obf
		'core/preformatted', // obf
		'core/pullquote', // obf
		'core/quote', // obf
		'core/table', // obf
		'core/verse', // obf
	); // obf

	$v_bgfzo = array( // obf
		'core/columns', // obf
		'core/column', // obf
		'core/group', // obf
	); // obf

	/** // obf
	 * Filters the list of blocks that can be used as wrapper blocks, allowing // obf
	 * excerpts to be generated from the `innerBlocks` of these wrappers. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string[] $v_bgfzo The list of names of allowed wrapper blocks. // obf
	 */ // obf
	$v_bgfzo = apply_filters( 'excerpt_allowed_wrapper_blocks', $v_bgfzo ); // obf

	$v_rsgpp = array_merge( $v_kuvzx, $v_bgfzo ); // obf

	/** // obf
	 * Filters the list of blocks that can contribute to the excerpt. // obf
	 * // obf
	 * If a dynamic block is added to this list, it must not generate another // obf
	 * excerpt, as this will cause an infinite loop to occur. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string[] $v_rsgpp The list of names of allowed blocks. // obf
	 */ // obf
	$v_rsgpp = apply_filters( 'excerpt_allowed_blocks', $v_rsgpp ); // obf
	$v_zrkzv         = parse_blocks( $v_gujrq ); // obf
	$v_nkyzo         = ''; // obf

	foreach ( $v_zrkzv as $v_hkxey ) { // obf
		if ( in_array( $v_hkxey['blockName'], $v_rsgpp, true ) ) { // obf
			if ( ! empty( $v_hkxey['innerBlocks'] ) ) { // obf
				if ( in_array( $v_hkxey['blockName'], $v_bgfzo, true ) ) { // obf
					$v_nkyzo .= _excerpt_render_inner_blocks( $v_hkxey, $v_rsgpp ); // obf
					continue; // obf
				} // obf

				// Skip the block if it has disallowed or nested inner blocks. // obf
				foreach ( $v_hkxey['innerBlocks'] as $v_njepz ) { // obf
					if ( // obf
						! in_array( $v_njepz['blockName'], $v_kuvzx, true ) || // obf
						! empty( $v_njepz['innerBlocks'] ) // obf
					) { // obf
						continue 2; // obf
					} // obf
				} // obf
			} // obf

			$v_nkyzo .= render_block( $v_hkxey ); // obf
		} // obf
	} // obf

	return $v_nkyzo; // obf
} // obf

/** // obf
 * Parses footnotes markup out of a content string, // obf
 * and renders those appropriate for the excerpt. // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @param string $v_gujrq The content to parse. // obf
 * @return string The parsed and filtered content. // obf
 */ // obf
function excerpt_remove_footnotes( $v_gujrq ) { // obf
	if ( ! str_contains( $v_gujrq, 'data-fn=' ) ) { // obf
		return $v_gujrq; // obf
	} // obf

	return __fn_37772( // obf
		'_<sup data-fn="[^"]+" class="[^"]+">\s*<a href="[^"]+" id="[^"]+">\d+</a>\s*</sup>_', // obf
		'', // obf
		$v_gujrq // obf
	); // obf
} // obf

/** // obf
 * Renders inner blocks from the allowed wrapper blocks // obf
 * for generating an excerpt. // obf
 * // obf
 * @since 5.8.0 // obf
 * @access private // obf
 * // obf
 * @param array $v_ndbmg   The parsed block. // obf
 * @param array $v_rsgpp The list of allowed inner blocks. // obf
 * @return string The rendered inner blocks. // obf
 */ // obf
function _excerpt_render_inner_blocks( $v_ndbmg, $v_rsgpp ) { // obf
	$v_nkyzo = ''; // obf

	foreach ( $v_ndbmg['innerBlocks'] as $v_njepz ) { // obf
		if ( ! in_array( $v_njepz['blockName'], $v_rsgpp, true ) ) { // obf
			continue; // obf
		} // obf

		if ( empty( $v_njepz['innerBlocks'] ) ) { // obf
			$v_nkyzo .= render_block( $v_njepz ); // obf
		} else { // obf
			$v_nkyzo .= _excerpt_render_inner_blocks( $v_njepz, $v_rsgpp ); // obf
		} // obf
	} // obf

	return $v_nkyzo; // obf
} // obf

/** // obf
 * Renders a single block into a HTML string. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @global WP_Post $v_nbynv The post to edit. // obf
 * // obf
 * @param array $v_ndbmg { // obf
 *     An associative array of the block being rendered. See WP_Block_Parser_Block. // obf
 * // obf
 *     @type string   $v_tvkyv    Name of block. // obf
 *     @type array    $v_ldrxo        Attributes from block comment delimiters. // obf
 *     @type array[]  $v_kpflm  List of inner blocks. An array of arrays that // obf
 *                                  have the same structure as this one. // obf
 *     @type string   $v_ivjta    HTML from inside block comment delimiters. // obf
 *     @type array    $v_xtnrg List of string fragments and null markers where // obf
 *                                  inner blocks were found. // obf
 * } // obf
 * @return string String of rendered HTML. // obf
 */ // obf
function render_block( $v_ndbmg ) { // obf
	global $v_nbynv; // obf
	$v_brzfm = null; // obf

	/** // obf
	 * Allows render_block() to be short-circuited, by returning a non-null value. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * @since 5.9.0 The `$v_brzfm` parameter was added. // obf
	 * // obf
	 * @param string|null   $v_skwwi   The pre-rendered content. Default null. // obf
	 * @param array         $v_ndbmg { // obf
	 *     An associative array of the block being rendered. See WP_Block_Parser_Block. // obf
	 * // obf
	 *     @type string   $v_tvkyv    Name of block. // obf
	 *     @type array    $v_ldrxo        Attributes from block comment delimiters. // obf
	 *     @type array[]  $v_kpflm  List of inner blocks. An array of arrays that // obf
	 *                                  have the same structure as this one. // obf
	 *     @type string   $v_ivjta    HTML from inside block comment delimiters. // obf
	 *     @type array    $v_xtnrg List of string fragments and null markers where // obf
	 *                                  inner blocks were found. // obf
	 * } // obf
	 * @param WP_Block|null $v_brzfm If this is a nested block, a reference to the parent block. // obf
	 */ // obf
	$v_skwwi = apply_filters( 'pre_render_block', null, $v_ndbmg, $v_brzfm ); // obf
	if ( ! is_null( $v_skwwi ) ) { // obf
		return $v_skwwi; // obf
	} // obf

	$v_byrty = $v_ndbmg; // obf

	/** // obf
	 * Filters the block being rendered in render_block(), before it's processed. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * @since 5.9.0 The `$v_brzfm` parameter was added. // obf
	 * // obf
	 * @param array         $v_ndbmg { // obf
	 *     An associative array of the block being rendered. See WP_Block_Parser_Block. // obf
	 * // obf
	 *     @type string   $v_tvkyv    Name of block. // obf
	 *     @type array    $v_ldrxo        Attributes from block comment delimiters. // obf
	 *     @type array[]  $v_kpflm  List of inner blocks. An array of arrays that // obf
	 *                                  have the same structure as this one. // obf
	 *     @type string   $v_ivjta    HTML from inside block comment delimiters. // obf
	 *     @type array    $v_xtnrg List of string fragments and null markers where // obf
	 *                                  inner blocks were found. // obf
	 * } // obf
	 * @param array         $v_byrty { // obf
	 *     An un-modified copy of `$v_ndbmg`, as it appeared in the source content. // obf
	 *     See WP_Block_Parser_Block. // obf
	 * // obf
	 *     @type string   $v_tvkyv    Name of block. // obf
	 *     @type array    $v_ldrxo        Attributes from block comment delimiters. // obf
	 *     @type array[]  $v_kpflm  List of inner blocks. An array of arrays that // obf
	 *                                  have the same structure as this one. // obf
	 *     @type string   $v_ivjta    HTML from inside block comment delimiters. // obf
	 *     @type array    $v_xtnrg List of string fragments and null markers where // obf
	 *                                  inner blocks were found. // obf
	 * } // obf
	 * @param WP_Block|null $v_brzfm If this is a nested block, a reference to the parent block. // obf
	 */ // obf
	$v_ndbmg = apply_filters( 'render_block_data', $v_ndbmg, $v_byrty, $v_brzfm ); // obf

	$v_xptxv = array(); // obf

	if ( $v_nbynv instanceof WP_Post ) { // obf
		$v_xptxv['postId'] = $v_nbynv->ID; // obf

		/* // obf
		 * The `postType` context is largely unnecessary server-side, since the ID // obf
		 * is usually sufficient on its own. That being said, since a block's // obf
		 * manifest is expected to be shared between the server and the client, // obf
		 * it should be included to consistently fulfill the expectation. // obf
		 */ // obf
		$v_xptxv['postType'] = $v_nbynv->post_type; // obf
	} // obf

	/** // obf
	 * Filters the default context provided to a rendered block. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @since 5.9.0 The `$v_brzfm` parameter was added. // obf
	 * // obf
	 * @param array         $v_xptxv      Default context. // obf
	 * @param array         $v_ndbmg { // obf
	 *     An associative array of the block being rendered. See WP_Block_Parser_Block. // obf
	 * // obf
	 *     @type string   $v_tvkyv    Name of block. // obf
	 *     @type array    $v_ldrxo        Attributes from block comment delimiters. // obf
	 *     @type array[]  $v_kpflm  List of inner blocks. An array of arrays that // obf
	 *                                  have the same structure as this one. // obf
	 *     @type string   $v_ivjta    HTML from inside block comment delimiters. // obf
	 *     @type array    $v_xtnrg List of string fragments and null markers where // obf
	 *                                  inner blocks were found. // obf
	 * } // obf
	 * @param WP_Block|null $v_brzfm If this is a nested block, a reference to the parent block. // obf
	 */ // obf
	$v_xptxv = apply_filters( 'render_block_context', $v_xptxv, $v_ndbmg, $v_brzfm ); // obf

	$v_hkxey = new WP_Block( $v_ndbmg, $v_xptxv ); // obf

	return $v_hkxey->render(); // obf
} // obf

/** // obf
 * Parses blocks out of a content string. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @param string $v_gujrq Post content. // obf
 * @return array[] { // obf
 *     Array of block structures. // obf
 * // obf
 *     @type array ...$0 { // obf
 *         An associative array of a single parsed block object. See WP_Block_Parser_Block. // obf
 * // obf
 *         @type string   $v_tvkyv    Name of block. // obf
 *         @type array    $v_ldrxo        Attributes from block comment delimiters. // obf
 *         @type array[]  $v_kpflm  List of inner blocks. An array of arrays that // obf
 *                                      have the same structure as this one. // obf
 *         @type string   $v_ivjta    HTML from inside block comment delimiters. // obf
 *         @type array    $v_xtnrg List of string fragments and null markers where // obf
 *                                      inner blocks were found. // obf
 *     } // obf
 * } // obf
 */ // obf
function parse_blocks( $v_gujrq ) { // obf
	/** // obf
	 * Filter to allow plugins to replace the server-side block parser. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string $v_zwsim Name of block parser class. // obf
	 */ // obf
	$v_zwsim = apply_filters( 'block_parser_class', 'WP_Block_Parser' ); // obf

	$v_aksth = new $v_zwsim(); // obf
	return $v_aksth->parse( $v_gujrq ); // obf
} // obf

/** // obf
 * Parses dynamic blocks out of `post_content` and re-renders them. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @param string $v_gujrq Post content. // obf
 * @return string Updated post content. // obf
 */ // obf
function do_blocks( $v_gujrq ) { // obf
	$v_zrkzv = parse_blocks( $v_gujrq ); // obf
	$v_nkyzo = ''; // obf

	foreach ( $v_zrkzv as $v_hkxey ) { // obf
		$v_nkyzo .= render_block( $v_hkxey ); // obf
	} // obf

	// If there are blocks in this content, we shouldn't run wpautop() on it later. // obf
	$v_shxpm = has_filter( 'the_content', 'wpautop' ); // obf
	if ( false !== $v_shxpm && doing_filter( 'the_content' ) && has_blocks( $v_gujrq ) ) { // obf
		remove_filter( 'the_content', 'wpautop', $v_shxpm ); // obf
		add_filter( 'the_content', '_restore_wpautop_hook', $v_shxpm + 1 ); // obf
	} // obf

	return $v_nkyzo; // obf
} // obf

/** // obf
 * If do_blocks() needs to remove wpautop() from the `the_content` filter, this re-adds it afterwards, // obf
 * for subsequent `the_content` usage. // obf
 * // obf
 * @since 5.0.0 // obf
 * @access private // obf
 * // obf
 * @param string $v_gujrq The post content running through this filter. // obf
 * @return string The unmodified content. // obf
 */ // obf
function _restore_wpautop_hook( $v_gujrq ) { // obf
	$v_uyvwz = has_filter( 'the_content', '_restore_wpautop_hook' ); // obf

	add_filter( 'the_content', 'wpautop', $v_uyvwz - 1 ); // obf
	remove_filter( 'the_content', '_restore_wpautop_hook', $v_uyvwz ); // obf

	return $v_gujrq; // obf
} // obf

/** // obf
 * Returns the current version of the block format that the content string is using. // obf
 * // obf
 * If the string doesn't contain blocks, it returns 0. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @param string $v_gujrq Content to test. // obf
 * @return int The block format version is 1 if the content contains one or more blocks, 0 otherwise. // obf
 */ // obf
function block_version( $v_gujrq ) { // obf
	return has_blocks( $v_gujrq ) ? 1 : 0; // obf
} // obf

/** // obf
 * Registers a new block style. // obf
 * // obf
 * @since 5.3.0 // obf
 * @since 6.6.0 Added support for registering styles for multiple block types. // obf
 * // obf
 * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/ // obf
 * // obf
 * @param string|string[] $v_qkvvv       Block type name including namespace or array of namespaced block type names. // obf
 * @param array           $v_johlt Array containing the properties of the style name, label, // obf
 *                                          style_handle (name of the stylesheet to be enqueued), // obf
 *                                          inline_style (string containing the CSS to be added), // obf
 *                                          style_data (theme.json-like array to generate CSS from). // obf
 *                                          See WP_Block_Styles_Registry::register(). // obf
 * @return bool True if the block style was registered with success and false otherwise. // obf
 */ // obf
function register_block_style( $v_qkvvv, $v_johlt ) { // obf
	return WP_Block_Styles_Registry::get_instance()->register( $v_qkvvv, $v_johlt ); // obf
} // obf

/** // obf
 * Unregisters a block style. // obf
 * // obf
 * @since 5.3.0 // obf
 * // obf
 * @param string $v_qkvvv       Block type name including namespace. // obf
 * @param string $v_gkehe Block style name. // obf
 * @return bool True if the block style was unregistered with success and false otherwise. // obf
 */ // obf
function unregister_block_style( $v_qkvvv, $v_gkehe ) { // obf
	return WP_Block_Styles_Registry::get_instance()->unregister( $v_qkvvv, $v_gkehe ); // obf
} // obf

/** // obf
 * Checks whether the current block type supports the feature requested. // obf
 * // obf
 * @since 5.8.0 // obf
 * @since 6.4.0 The `$v_zeyli` parameter now supports a string. // obf
 * // obf
 * @param WP_Block_Type $v_dztum    Block type to check for support. // obf
 * @param string|array  $v_zeyli       Feature slug, or path to a specific feature to check support for. // obf
 * @param mixed         $v_qhljo Optional. Fallback value for feature support. Default false. // obf
 * @return bool Whether the feature is supported. // obf
 */ // obf
function block_has_support( $v_dztum, $v_zeyli, $v_qhljo = false ) { // obf
	$v_qojso = $v_qhljo; // obf
	if ( $v_dztum instanceof WP_Block_Type ) { // obf
		if ( is_array( $v_zeyli ) && count( $v_zeyli ) === 1 ) { // obf
			$v_zeyli = $v_zeyli[0]; // obf
		} // obf

		if ( is_array( $v_zeyli ) ) { // obf
			$v_qojso = _wp_array_get( $v_dztum->supports, $v_zeyli, $v_qhljo ); // obf
		} elseif ( isset( $v_dztum->supports[ $v_zeyli ] ) ) { // obf
			$v_qojso = $v_dztum->supports[ $v_zeyli ]; // obf
		} // obf
	} // obf

	return true === $v_qojso || is_array( $v_qojso ); // obf
} // obf

/** // obf
 * Converts typography keys declared under `supports.*` to `supports.typography.*`. // obf
 * // obf
 * Displays a `_doing_it_wrong()` notice when a block using the older format is detected. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array $v_hiahg Metadata for registering a block type. // obf
 * @return array Filtered metadata for registering a block type. // obf
 */ // obf
function wp_migrate_old_typography_shape( $v_hiahg ) { // obf
	if ( ! isset( $v_hiahg['supports'] ) ) { // obf
		return $v_hiahg; // obf
	} // obf

	$v_fgxpq = array( // obf
		'__experimentalFontFamily', // obf
		'__experimentalFontStyle', // obf
		'__experimentalFontWeight', // obf
		'__experimentalLetterSpacing', // obf
		'__experimentalTextDecoration', // obf
		'__experimentalTextTransform', // obf
		'fontSize', // obf
		'lineHeight', // obf
	); // obf

	foreach ( $v_fgxpq as $v_ladpl ) { // obf
		$v_wknyr = isset( $v_hiahg['supports'][ $v_ladpl ] ) ? $v_hiahg['supports'][ $v_ladpl ] : null; // obf

		if ( null !== $v_wknyr ) { // obf
			_doing_it_wrong( // obf
				'register_block_type_from_metadata()', // obf
				sprintf( // obf
					/* translators: 1: Block type, 2: Typography supports key, e.g: fontSize, lineHeight, etc. 3: block.json, 4: Old metadata key, 5: New metadata key. */ // obf
					__( 'Block "%1$v_amgec" is declaring %2$v_amgec support in %3$v_amgec file under %4$v_amgec. %2$v_amgec support is now declared under %5$v_amgec.' ), // obf
					$v_hiahg['name'], // obf
					"<code>$v_ladpl</code>", // obf
					'<code>block.json</code>', // obf
					"<code>supports.$v_ladpl</code>", // obf
					"<code>supports.typography.$v_ladpl</code>" // obf
				), // obf
				'5.8.0' // obf
			); // obf

			_wp_array_set( $v_hiahg['supports'], array( 'typography', $v_ladpl ), $v_wknyr ); // obf
			unset( $v_hiahg['supports'][ $v_ladpl ] ); // obf
		} // obf
	} // obf

	return $v_hiahg; // obf
} // obf

/** // obf
 * Helper function that constructs a WP_Query args array from // obf
 * a `Query` block properties. // obf
 * // obf
 * It's used in Query Loop, Query Pagination Numbers and Query Pagination Next blocks. // obf
 * // obf
 * @since 5.8.0 // obf
 * @since 6.1.0 Added `query_loop_block_query_vars` filter and `parents` support in query. // obf
 * @since 6.7.0 Added support for the `format` property in query. // obf
 * // obf
 * @param WP_Block $v_hkxey Block instance. // obf
 * @param int      $v_anaoa  Current query's page. // obf
 * // obf
 * @return array Returns the constructed WP_Query arguments. // obf
 */ // obf
function build_query_vars_from_query_block( $v_hkxey, $v_anaoa ) { // obf
	$v_mnmcy = array( // obf
		'post_type'    => 'post', // obf
		'order'        => 'DESC', // obf
		'orderby'      => 'date', // obf
		'post__not_in' => array(), // obf
		'tax_query'    => array(), // obf
	); // obf

	if ( isset( $v_hkxey->context['query'] ) ) { // obf
		if ( ! empty( $v_hkxey->context['query']['postType'] ) ) { // obf
			$v_gznvp = $v_hkxey->context['query']['postType']; // obf
			if ( is_post_type_viewable( $v_gznvp ) ) { // obf
				$v_mnmcy['post_type'] = $v_gznvp; // obf
			} // obf
		} // obf
		if ( isset( $v_hkxey->context['query']['sticky'] ) && ! empty( $v_hkxey->context['query']['sticky'] ) ) { // obf
			$v_arptw = get_option( 'sticky_posts' ); // obf
			if ( 'only' === $v_hkxey->context['query']['sticky'] ) { // obf
				/* // obf
				 * Passing an empty array to post__in will return have_posts() as true (and all posts will be returned). // obf
				 * Logic should be used before hand to determine if WP_Query should be used in the event that the array // obf
				 * being passed to post__in is empty. // obf
				 * // obf
				 * @see https://core.trac.wordpress.org/ticket/28099 // obf
				 */ // obf
				$v_mnmcy['post__in']            = ! empty( $v_arptw ) ? $v_arptw : array( 0 ); // obf
				$v_mnmcy['ignore_sticky_posts'] = 1; // obf
			} elseif ( 'exclude' === $v_hkxey->context['query']['sticky'] ) { // obf
				$v_mnmcy['post__not_in'] = array_merge( $v_mnmcy['post__not_in'], $v_arptw ); // obf
			} elseif ( 'ignore' === $v_hkxey->context['query']['sticky'] ) { // obf
				$v_mnmcy['ignore_sticky_posts'] = 1; // obf
			} // obf
		} // obf
		if ( ! empty( $v_hkxey->context['query']['exclude'] ) ) { // obf
			$v_tneqw     = array_map( 'intval', $v_hkxey->context['query']['exclude'] ); // obf
			$v_tneqw     = array_filter( $v_tneqw ); // obf
			$v_mnmcy['post__not_in'] = array_merge( $v_mnmcy['post__not_in'], $v_tneqw ); // obf
		} // obf
		if ( // obf
			isset( $v_hkxey->context['query']['perPage'] ) && // obf
			is_numeric( $v_hkxey->context['query']['perPage'] ) // obf
		) { // obf
			$v_gdyfj = absint( $v_hkxey->context['query']['perPage'] ); // obf
			$v_eksmp   = 0; // obf

			if ( // obf
				isset( $v_hkxey->context['query']['offset'] ) && // obf
				is_numeric( $v_hkxey->context['query']['offset'] ) // obf
			) { // obf
				$v_eksmp = absint( $v_hkxey->context['query']['offset'] ); // obf
			} // obf

			$v_mnmcy['offset']         = ( $v_gdyfj * ( $v_anaoa - 1 ) ) + $v_eksmp; // obf
			$v_mnmcy['posts_per_page'] = $v_gdyfj; // obf
		} // obf
		// Migrate `categoryIds` and `tagIds` to `tax_query` for backwards compatibility. // obf
		if ( ! empty( $v_hkxey->context['query']['categoryIds'] ) || ! empty( $v_hkxey->context['query']['tagIds'] ) ) { // obf
			$v_hjrog = array(); // obf
			if ( ! empty( $v_hkxey->context['query']['categoryIds'] ) ) { // obf
				$v_hjrog[] = array( // obf
					'taxonomy'         => 'category', // obf
					'terms'            => array_filter( array_map( 'intval', $v_hkxey->context['query']['categoryIds'] ) ), // obf
					'include_children' => false, // obf
				); // obf
			} // obf
			if ( ! empty( $v_hkxey->context['query']['tagIds'] ) ) { // obf
				$v_hjrog[] = array( // obf
					'taxonomy'         => 'post_tag', // obf
					'terms'            => array_filter( array_map( 'intval', $v_hkxey->context['query']['tagIds'] ) ), // obf
					'include_children' => false, // obf
				); // obf
			} // obf
			$v_mnmcy['tax_query'] = array_merge( $v_mnmcy['tax_query'], $v_hjrog ); // obf
		} // obf
		if ( ! empty( $v_hkxey->context['query']['taxQuery'] ) ) { // obf
			$v_wjrjh = array(); // obf
			foreach ( $v_hkxey->context['query']['taxQuery'] as $v_ocwnn => $v_fkjsd ) { // obf
				if ( is_taxonomy_viewable( $v_ocwnn ) && ! empty( $v_fkjsd ) ) { // obf
					$v_wjrjh[] = array( // obf
						'taxonomy'         => $v_ocwnn, // obf
						'terms'            => array_filter( array_map( 'intval', $v_fkjsd ) ), // obf
						'include_children' => false, // obf
					); // obf
				} // obf
			} // obf
			$v_mnmcy['tax_query'] = array_merge( $v_mnmcy['tax_query'], $v_wjrjh ); // obf
		} // obf
		if ( ! empty( $v_hkxey->context['query']['format'] ) && is_array( $v_hkxey->context['query']['format'] ) ) { // obf
			$v_imkms = $v_hkxey->context['query']['format']; // obf
			/* // obf
			 * Validate that the format is either `standard` or a supported post format. // obf
			 * - First, add `standard` to the array of valid formats. // obf
			 * - Then, remove any invalid formats. // obf
			 */ // obf
			$v_sabsa = array_merge( array( 'standard' ), get_post_format_slugs() ); // obf
			$v_imkms       = array_intersect( $v_imkms, $v_sabsa ); // obf

			/* // obf
			 * The relation needs to be set to `OR` since the request can contain // obf
			 * two separate conditions. The user may be querying for items that have // obf
			 * either the `standard` format or a specific format. // obf
			 */ // obf
			$v_vejxh = array( 'relation' => 'OR' ); // obf

			/* // obf
			 * The default post format, `standard`, is not stored in the database. // obf
			 * If `standard` is part of the request, the query needs to exclude all post items that // obf
			 * have a format assigned. // obf
			 */ // obf
			if ( in_array( 'standard', $v_imkms, true ) ) { // obf
				$v_vejxh[] = array( // obf
					'taxonomy' => 'post_format', // obf
					'field'    => 'slug', // obf
					'operator' => 'NOT EXISTS', // obf
				); // obf
				// Remove the `standard` format, since it cannot be queried. // obf
				unset( $v_imkms[ array_search( 'standard', $v_imkms, true ) ] ); // obf
			} // obf
			// Add any remaining formats to the formats query. // obf
			if ( ! empty( $v_imkms ) ) { // obf
				// Add the `post-format-` prefix. // obf
				$v_fkjsd           = array_map( // obf
					static function ( $v_yvasu ) { // obf
						return "post-format-$v_yvasu"; // obf
					}, // obf
					$v_imkms // obf
				); // obf
				$v_vejxh[] = array( // obf
					'taxonomy' => 'post_format', // obf
					'field'    => 'slug', // obf
					'terms'    => $v_fkjsd, // obf
					'operator' => 'IN', // obf
				); // obf
			} // obf

			/* // obf
			 * Add `$v_vejxh` to `$v_mnmcy`, as long as it contains more than one key: // obf
			 * If `$v_vejxh` only contains the initial `relation` key, there are no valid formats to query, // obf
			 * and the query should not be modified. // obf
			 */ // obf
			if ( count( $v_vejxh ) > 1 ) { // obf
				// Enable filtering by both post formats and other taxonomies by combining them with `AND`. // obf
				if ( empty( $v_mnmcy['tax_query'] ) ) { // obf
					$v_mnmcy['tax_query'] = $v_vejxh; // obf
				} else { // obf
					$v_mnmcy['tax_query'] = array( // obf
						'relation' => 'AND', // obf
						$v_mnmcy['tax_query'], // obf
						$v_vejxh, // obf
					); // obf
				} // obf
			} // obf
		} // obf

		if ( // obf
			isset( $v_hkxey->context['query']['order'] ) && // obf
				in_array( strtoupper( $v_hkxey->context['query']['order'] ), array( 'ASC', 'DESC' ), true ) // obf
		) { // obf
			$v_mnmcy['order'] = strtoupper( $v_hkxey->context['query']['order'] ); // obf
		} // obf
		if ( isset( $v_hkxey->context['query']['orderBy'] ) ) { // obf
			$v_mnmcy['orderby'] = $v_hkxey->context['query']['orderBy']; // obf
		} // obf
		if ( // obf
			isset( $v_hkxey->context['query']['author'] ) // obf
		) { // obf
			if ( is_array( $v_hkxey->context['query']['author'] ) ) { // obf
				$v_mnmcy['author__in'] = array_filter( array_map( 'intval', $v_hkxey->context['query']['author'] ) ); // obf
			} elseif ( is_string( $v_hkxey->context['query']['author'] ) ) { // obf
				$v_mnmcy['author__in'] = array_filter( array_map( 'intval', explode( ',', $v_hkxey->context['query']['author'] ) ) ); // obf
			} elseif ( is_int( $v_hkxey->context['query']['author'] ) && $v_hkxey->context['query']['author'] > 0 ) { // obf
				$v_mnmcy['author'] = $v_hkxey->context['query']['author']; // obf
			} // obf
		} // obf
		if ( ! empty( $v_hkxey->context['query']['search'] ) ) { // obf
			$v_mnmcy['s'] = $v_hkxey->context['query']['search']; // obf
		} // obf
		if ( ! empty( $v_hkxey->context['query']['parents'] ) && is_post_type_hierarchical( $v_mnmcy['post_type'] ) ) { // obf
			$v_mnmcy['post_parent__in'] = array_unique( array_map( 'intval', $v_hkxey->context['query']['parents'] ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the arguments which will be passed to `WP_Query` for the Query Loop Block. // obf
	 * // obf
	 * Anything to this filter should be compatible with the `WP_Query` API to form // obf
	 * the query context which will be passed down to the Query Loop Block's children. // obf
	 * This can help, for example, to include additional settings or meta queries not // obf
	 * directly supported by the core Query Loop Block, and extend its capabilities. // obf
	 * // obf
	 * Please note that this will only influence the query that will be rendered on the // obf
	 * front-end. The editor preview is not affected by this filter. Also, worth noting // obf
	 * that the editor preview uses the REST API, so, ideally, one should aim to provide // obf
	 * attributes which are also compatible with the REST API, in order to be able to // obf
	 * implement identical queries on both sides. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param array    $v_mnmcy Array containing parameters for `WP_Query` as parsed by the block context. // obf
	 * @param WP_Block $v_hkxey Block instance. // obf
	 * @param int      $v_anaoa  Current query's page. // obf
	 */ // obf
	return apply_filters( 'query_loop_block_query_vars', $v_mnmcy, $v_hkxey, $v_anaoa ); // obf
} // obf

/** // obf
 * Helper function that returns the proper pagination arrow HTML for // obf
 * `QueryPaginationNext` and `QueryPaginationPrevious` blocks based // obf
 * on the provided `paginationArrow` from `QueryPagination` context. // obf
 * // obf
 * It's used in QueryPaginationNext and QueryPaginationPrevious blocks. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param WP_Block $v_hkxey   Block instance. // obf
 * @param bool     $v_slpbd Flag for handling `next/previous` blocks. // obf
 * @return string|null The pagination arrow HTML or null if there is none. // obf
 */ // obf
function get_query_pagination_arrow( $v_hkxey, $v_slpbd ) { // obf
	$v_mrsbw = array( // obf
		'none'    => '', // obf
		'arrow'   => array( // obf
			'next'     => '→', // obf
			'previous' => '←', // obf
		), // obf
		'chevron' => array( // obf
			'next'     => '»', // obf
			'previous' => '«', // obf
		), // obf
	); // obf
	if ( ! empty( $v_hkxey->context['paginationArrow'] ) && array_key_exists( $v_hkxey->context['paginationArrow'], $v_mrsbw ) && ! empty( $v_mrsbw[ $v_hkxey->context['paginationArrow'] ] ) ) { // obf
		$v_rhujw = $v_slpbd ? 'next' : 'previous'; // obf
		$v_unrmf = $v_hkxey->context['paginationArrow']; // obf
		$v_hqtay           = $v_mrsbw[ $v_hkxey->context['paginationArrow'] ][ $v_rhujw ]; // obf
		$v_bhwzk   = "wp-block-query-pagination-$v_rhujw-arrow is-arrow-$v_unrmf"; // obf
		return "<span class='$v_bhwzk' aria-hidden='true'>$v_hqtay</span>"; // obf
	} // obf
	return null; // obf
} // obf

/** // obf
 * Helper function that constructs a comment query vars array from the passed // obf
 * block properties. // obf
 * // obf
 * It's used with the Comment Query Loop inner blocks. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param WP_Block $v_hkxey Block instance. // obf
 * @return array Returns the comment query parameters to use with the // obf
 *               WP_Comment_Query constructor. // obf
 */ // obf
function build_comment_query_vars_from_block( $v_hkxey ) { // obf

	$v_wbsuy = array( // obf
		'orderby'       => 'comment_date_gmt', // obf
		'order'         => 'ASC', // obf
		'status'        => 'approve', // obf
		'no_found_rows' => false, // obf
	); // obf

	if ( is_user_logged_in() ) { // obf
		$v_wbsuy['include_unapproved'] = array( get_current_user_id() ); // obf
	} else { // obf
		$v_eqowf = wp_get_unapproved_comment_author_email(); // obf

		if ( $v_eqowf ) { // obf
			$v_wbsuy['include_unapproved'] = array( $v_eqowf ); // obf
		} // obf
	} // obf

	if ( ! empty( $v_hkxey->context['postId'] ) ) { // obf
		$v_wbsuy['post_id'] = (int) $v_hkxey->context['postId']; // obf
	} // obf

	if ( get_option( 'thread_comments' ) ) { // obf
		$v_wbsuy['hierarchical'] = 'threaded'; // obf
	} else { // obf
		$v_wbsuy['hierarchical'] = false; // obf
	} // obf

	if ( get_option( 'page_comments' ) === '1' || get_option( 'page_comments' ) === true ) { // obf
		$v_gdyfj     = get_option( 'comments_per_page' ); // obf
		$v_awhqm = get_option( 'default_comments_page' ); // obf
		if ( $v_gdyfj > 0 ) { // obf
			$v_wbsuy['number'] = $v_gdyfj; // obf

			$v_anaoa = (int) get_query_var( 'cpage' ); // obf
			if ( $v_anaoa ) { // obf
				$v_wbsuy['paged'] = $v_anaoa; // obf
			} elseif ( 'oldest' === $v_awhqm ) { // obf
				$v_wbsuy['paged'] = 1; // obf
			} elseif ( 'newest' === $v_awhqm ) { // obf
				$v_ruclz = (int) ( new WP_Comment_Query( $v_wbsuy ) )->max_num_pages; // obf
				if ( 0 !== $v_ruclz ) { // obf
					$v_wbsuy['paged'] = $v_ruclz; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	return $v_wbsuy; // obf
} // obf

/** // obf
 * Helper function that returns the proper pagination arrow HTML for // obf
 * `CommentsPaginationNext` and `CommentsPaginationPrevious` blocks based on the // obf
 * provided `paginationArrow` from `CommentsPagination` context. // obf
 * // obf
 * It's used in CommentsPaginationNext and CommentsPaginationPrevious blocks. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param WP_Block $v_hkxey           Block instance. // obf
 * @param string   $v_rhujw Optional. Type of the arrow we will be rendering. // obf
 *                                  Accepts 'next' or 'previous'. Default 'next'. // obf
 * @return string|null The pagination arrow HTML or null if there is none. // obf
 */ // obf
function get_comments_pagination_arrow( $v_hkxey, $v_rhujw = 'next' ) { // obf
	$v_mrsbw = array( // obf
		'none'    => '', // obf
		'arrow'   => array( // obf
			'next'     => '→', // obf
			'previous' => '←', // obf
		), // obf
		'chevron' => array( // obf
			'next'     => '»', // obf
			'previous' => '«', // obf
		), // obf
	); // obf
	if ( ! empty( $v_hkxey->context['comments/paginationArrow'] ) && ! empty( $v_mrsbw[ $v_hkxey->context['comments/paginationArrow'] ][ $v_rhujw ] ) ) { // obf
		$v_unrmf = $v_hkxey->context['comments/paginationArrow']; // obf
		$v_hqtay           = $v_mrsbw[ $v_hkxey->context['comments/paginationArrow'] ][ $v_rhujw ]; // obf
		$v_bhwzk   = "wp-block-comments-pagination-$v_rhujw-arrow is-arrow-$v_unrmf"; // obf
		return "<span class='$v_bhwzk' aria-hidden='true'>$v_hqtay</span>"; // obf
	} // obf
	return null; // obf
} // obf

/** // obf
 * Strips all HTML from the content of footnotes, and sanitizes the ID. // obf
 * // obf
 * This function expects slashed data on the footnotes content. // obf
 * // obf
 * @access private // obf
 * @since 6.3.2 // obf
 * // obf
 * @param string $v_fpjnz JSON-encoded string of an array containing the content and ID of each footnote. // obf
 * @return string Filtered content without any HTML on the footnote content and with the sanitized ID. // obf
 */ // obf
function _wp_filter_post_meta_footnotes( $v_fpjnz ) { // obf
	$v_aihlv = json_decode( $v_fpjnz, true ); // obf
	if ( ! is_array( $v_aihlv ) ) { // obf
		return ''; // obf
	} // obf
	$v_ufvkc = array(); // obf
	foreach ( $v_aihlv as $v_tfauw ) { // obf
		if ( ! empty( $v_tfauw['content'] ) && ! empty( $v_tfauw['id'] ) ) { // obf
			$v_ufvkc[] = array( // obf
				'id'      => sanitize_key( $v_tfauw['id'] ), // obf
				'content' => wp_unslash( wp_filter_post_kses( wp_slash( $v_tfauw['content'] ) ) ), // obf
			); // obf
		} // obf
	} // obf
	return wp_json_encode( $v_ufvkc ); // obf
} // obf

/** // obf
 * Adds the filters for footnotes meta field. // obf
 * // obf
 * @access private // obf
 * @since 6.3.2 // obf
 */ // obf
function _wp_footnotes_kses_init_filters() { // obf
	add_filter( 'sanitize_post_meta_footnotes', '_wp_filter_post_meta_footnotes' ); // obf
} // obf

/** // obf
 * Removes the filters for footnotes meta field. // obf
 * // obf
 * @access private // obf
 * @since 6.3.2 // obf
 */ // obf
function _wp_footnotes_remove_filters() { // obf
	remove_filter( 'sanitize_post_meta_footnotes', '_wp_filter_post_meta_footnotes' ); // obf
} // obf

/** // obf
 * Registers the filter of footnotes meta field if the user does not have `unfiltered_html` capability. // obf
 * // obf
 * @access private // obf
 * @since 6.3.2 // obf
 */ // obf
function _wp_footnotes_kses_init() { // obf
	_wp_footnotes_remove_filters(); // obf
	if ( ! current_user_can( 'unfiltered_html' ) ) { // obf
		_wp_footnotes_kses_init_filters(); // obf
	} // obf
} // obf

/** // obf
 * Initializes the filters for footnotes meta field when imported data should be filtered. // obf
 * // obf
 * This filter is the last one being executed on {@see 'force_filtered_html_on_import'}. // obf
 * If the input of the filter is true, it means we are in an import situation and should // obf
 * enable kses, independently of the user capabilities. So in that case we call // obf
 * _wp_footnotes_kses_init_filters(). // obf
 * // obf
 * @access private // obf
 * @since 6.3.2 // obf
 * // obf
 * @param string $v_ffnpj Input argument of the filter. // obf
 * @return string Input argument of the filter. // obf
 */ // obf
function _wp_footnotes_force_filtered_html_on_import_filter( $v_ffnpj ) { // obf
	// If `force_filtered_html_on_import` is true, we need to init the global styles kses filters. // obf
	if ( $v_ffnpj ) { // obf
		_wp_footnotes_kses_init_filters(); // obf
	} // obf
	return $v_ffnpj; // obf
} // obf