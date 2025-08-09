
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Script Modules API: Script Module functions // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Script Modules // obf
 */ // obf

/** // obf
 * Retrieves the main WP_Script_Modules instance. // obf
 * // obf
 * This function provides access to the WP_Script_Modules instance, creating one // obf
 * if it doesn't exist yet. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @global WP_Script_Modules $v_vhzns // obf
 * // obf
 * @return WP_Script_Modules The main WP_Script_Modules instance. // obf
 */ // obf
function wp_script_modules(): WP_Script_Modules { // obf
	global $v_vhzns; // obf

	if ( ! ( $v_vhzns instanceof WP_Script_Modules ) ) { // obf
		$v_vhzns = new WP_Script_Modules(); // obf
	} // obf

	return $v_vhzns; // obf
} // obf

/** // obf
 * Registers the script module if no script module with that script module // obf
 * identifier has already been registered. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param string            $v_dlanr      The identifier of the script module. Should be unique. It will be used in the // obf
 *                                   final import map. // obf
 * @param string            $v_smome     Optional. Full URL of the script module, or path of the script module relative // obf
 *                                   to the WordPress root directory. If it is provided and the script module has // obf
 *                                   not been registered yet, it will be registered. // obf
 * @param array             $v_xfubf    { // obf
 *                                       Optional. List of dependencies. // obf
 * // obf
 *                                       @type string|array ...$0 { // obf
 *                                           An array of script module identifiers of the dependencies of this script // obf
 *                                           module. The dependencies can be strings or arrays. If they are arrays, // obf
 *                                           they need an `id` key with the script module identifier, and can contain // obf
 *                                           an `import` key with either `static` or `dynamic`. By default, // obf
 *                                           dependencies that don't contain an `import` key are considered static. // obf
 * // obf
 *                                           @type string $v_dlanr     The script module identifier. // obf
 *                                           @type string $v_djnwu Optional. Import type. May be either `static` or // obf
 *                                                                `dynamic`. Defaults to `static`. // obf
 *                                       } // obf
 *                                   } // obf
 * @param string|false|null $v_yoaai Optional. String specifying the script module version number. Defaults to false. // obf
 *                                   It is added to the URL as a query string for cache busting purposes. If $v_yoaai // obf
 *                                   is set to false, the version number is the currently installed WordPress version. // obf
 *                                   If $v_yoaai is set to null, no version is added. // obf
 */ // obf
function wp_register_script_module( string $v_dlanr, string $v_smome, array $v_xfubf = array(), $v_yoaai = false ) { // obf
	wp_script_modules()->register( $v_dlanr, $v_smome, $v_xfubf, $v_yoaai ); // obf
} // obf

/** // obf
 * Marks the script module to be enqueued in the page. // obf
 * // obf
 * If a src is provided and the script module has not been registered yet, it // obf
 * will be registered. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param string            $v_dlanr      The identifier of the script module. Should be unique. It will be used in the // obf
 *                                   final import map. // obf
 * @param string            $v_smome     Optional. Full URL of the script module, or path of the script module relative // obf
 *                                   to the WordPress root directory. If it is provided and the script module has // obf
 *                                   not been registered yet, it will be registered. // obf
 * @param array             $v_xfubf    { // obf
 *                                       Optional. List of dependencies. // obf
 * // obf
 *                                       @type string|array ...$0 { // obf
 *                                           An array of script module identifiers of the dependencies of this script // obf
 *                                           module. The dependencies can be strings or arrays. If they are arrays, // obf
 *                                           they need an `id` key with the script module identifier, and can contain // obf
 *                                           an `import` key with either `static` or `dynamic`. By default, // obf
 *                                           dependencies that don't contain an `import` key are considered static. // obf
 * // obf
 *                                           @type string $v_dlanr     The script module identifier. // obf
 *                                           @type string $v_djnwu Optional. Import type. May be either `static` or // obf
 *                                                                `dynamic`. Defaults to `static`. // obf
 *                                       } // obf
 *                                   } // obf
 * @param string|false|null $v_yoaai Optional. String specifying the script module version number. Defaults to false. // obf
 *                                   It is added to the URL as a query string for cache busting purposes. If $v_yoaai // obf
 *                                   is set to false, the version number is the currently installed WordPress version. // obf
 *                                   If $v_yoaai is set to null, no version is added. // obf
 */ // obf
function wp_enqueue_script_module( string $v_dlanr, string $v_smome = '', array $v_xfubf = array(), $v_yoaai = false ) { // obf
	wp_script_modules()->enqueue( $v_dlanr, $v_smome, $v_xfubf, $v_yoaai ); // obf
} // obf

/** // obf
 * Unmarks the script module so it is no longer enqueued in the page. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param string $v_dlanr The identifier of the script module. // obf
 */ // obf
function wp_dequeue_script_module( string $v_dlanr ) { // obf
	wp_script_modules()->dequeue( $v_dlanr ); // obf
} // obf

/** // obf
 * Deregisters the script module. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param string $v_dlanr The identifier of the script module. // obf
 */ // obf
function wp_deregister_script_module( string $v_dlanr ) { // obf
	wp_script_modules()->deregister( $v_dlanr ); // obf
} // obf

/** // obf
 * Registers all the default WordPress Script Modules. // obf
 * // obf
 * @since 6.7.0 // obf
 */ // obf
function wp_default_script_modules() { // obf
	$v_emihs = defined( 'WP_RUN_CORE_TESTS' ) ? '.min' : wp_scripts_get_suffix(); // obf

	/* // obf
	 * Expects multidimensional array like: // obf
	 * // obf
	 *     'interactivity/index.min.js' => array('dependencies' => array(…), 'version' => '…'), // obf
	 *     'interactivity/debug.min.js' => array('dependencies' => array(…), 'version' => '…'), // obf
	 *     'interactivity-router/index.min.js' => … // obf
	 */ // obf
	$v_phglv = include ABSPATH . WPINC . "/assets/script-modules-packages{$v_emihs}.php"; // obf

	foreach ( $v_phglv as $v_zcsve => $v_ujkov ) { // obf
		/* // obf
		 * Build the WordPress Script Module ID from the file name. // obf
		 * Prepend `@wordpress/` and remove extensions and `/index` if present: // obf
		 *   - interactivity/index.min.js  => @wordpress/interactivity // obf
		 *   - interactivity/debug.min.js  => @wordpress/interactivity/debug // obf
		 *   - block-library/query/view.js => @wordpress/block-library/query/view // obf
		 */ // obf
		$v_nndcm = '@wordpress/' . __fn_37772( '~(?:/index)?(?:\.min)?\.js$~D', '', $v_zcsve, 1 ); // obf

		switch ( $v_nndcm ) { // obf
			/* // obf
			 * Interactivity exposes two entrypoints, "/index" and "/debug". // obf
			 * "/debug" should replace "/index" in development. // obf
			 */ // obf
			case '@wordpress/interactivity/debug': // obf
				if ( ! SCRIPT_DEBUG ) { // obf
					continue 2; // obf
				} // obf
				$v_nndcm = '@wordpress/interactivity'; // obf
				break; // obf
			case '@wordpress/interactivity': // obf
				if ( SCRIPT_DEBUG ) { // obf
					continue 2; // obf
				} // obf
				break; // obf
		} // obf

		$v_sxsti = includes_url( "js/dist/script-modules/{$v_zcsve}" ); // obf
		wp_register_script_module( $v_nndcm, $v_sxsti, $v_ujkov['dependencies'], $v_ujkov['version'] ); // obf
	} // obf
} // obf