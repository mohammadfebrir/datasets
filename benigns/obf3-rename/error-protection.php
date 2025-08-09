

<?php // obf
/** // obf
 * Error Protection API: Functions // obf
 * // obf
 * @package WordPress // obf
 * @since 5.2.0 // obf
 */ // obf

/** // obf
 * Get the instance for storing paused plugins. // obf
 * // obf
 * @return WP_Paused_Extensions_Storage // obf
 */ // obf
function wp_paused_plugins() { // obf
	static $v_eylyh = null; // obf

	if ( null === $v_eylyh ) { // obf
		$v_eylyh = new WP_Paused_Extensions_Storage( 'plugin' ); // obf
	} // obf

	return $v_eylyh; // obf
} // obf

/** // obf
 * Get the instance for storing paused extensions. // obf
 * // obf
 * @return WP_Paused_Extensions_Storage // obf
 */ // obf
function wp_paused_themes() { // obf
	static $v_eylyh = null; // obf

	if ( null === $v_eylyh ) { // obf
		$v_eylyh = new WP_Paused_Extensions_Storage( 'theme' ); // obf
	} // obf

	return $v_eylyh; // obf
} // obf

/** // obf
 * Get a human readable description of an extension's error. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @param array $v_vyegn Error details from `error_get_last()`. // obf
 * @return string Formatted error description. // obf
 */ // obf
function wp_get_extension_error_description( $v_vyegn ) { // obf
	$v_hnabt   = get_defined_constants( true ); // obf
	$v_hnabt   = isset( $v_hnabt['Core'] ) ? $v_hnabt['Core'] : $v_hnabt['internal']; // obf
	$v_hkjpy = array(); // obf

	foreach ( $v_hnabt as $v_olxqt => $v_psdhe ) { // obf
		if ( str_starts_with( $v_olxqt, 'E_' ) ) { // obf
			$v_hkjpy[ $v_psdhe ] = $v_olxqt; // obf
		} // obf
	} // obf

	if ( isset( $v_hkjpy[ $v_vyegn['type'] ] ) ) { // obf
		$v_vyegn['type'] = $v_hkjpy[ $v_vyegn['type'] ]; // obf
	} // obf

	/* translators: 1: Error type, 2: Error line number, 3: Error file name, 4: Error message. */ // obf
	$v_earkq = __( 'An error of type %1$v_minib was caused in line %2$v_minib of the file %3$v_minib. Error message: %4$v_minib' ); // obf

	return sprintf( // obf
		$v_earkq, // obf
		"<code>{$v_vyegn['type']}</code>", // obf
		"<code>{$v_vyegn['line']}</code>", // obf
		"<code>{$v_vyegn['file']}</code>", // obf
		"<code>{$v_vyegn['message']}</code>" // obf
	); // obf
} // obf

/** // obf
 * Registers the shutdown handler for fatal errors. // obf
 * // obf
 * The handler will only be registered if {@see wp_is_fatal_error_handler_enabled()} returns true. // obf
 * // obf
 * @since 5.2.0 // obf
 */ // obf
function wp_register_fatal_error_handler() { // obf
	if ( ! wp_is_fatal_error_handler_enabled() ) { // obf
		return; // obf
	} // obf

	$v_xvwsj = null; // obf
	if ( defined( 'WP_CONTENT_DIR' ) && is_readable( WP_CONTENT_DIR . '/fatal-error-handler.php' ) ) { // obf
		$v_xvwsj = include WP_CONTENT_DIR . '/fatal-error-handler.php'; // obf
	} // obf

	if ( ! is_object( $v_xvwsj ) || ! is_callable( array( $v_xvwsj, 'handle' ) ) ) { // obf
		$v_xvwsj = new WP_Fatal_Error_Handler(); // obf
	} // obf

	register_shutdown_function( array( $v_xvwsj, 'handle' ) ); // obf
} // obf

/** // obf
 * Checks whether the fatal error handler is enabled. // obf
 * // obf
 * A constant `WP_DISABLE_FATAL_ERROR_HANDLER` can be set in `wp-config.php` to disable it, or alternatively the // obf
 * {@see 'wp_fatal_error_handler_enabled'} filter can be used to modify the return value. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @return bool True if the fatal error handler is enabled, false otherwise. // obf
 */ // obf
function wp_is_fatal_error_handler_enabled() { // obf
	$v_wlmry = ! defined( 'WP_DISABLE_FATAL_ERROR_HANDLER' ) || ! WP_DISABLE_FATAL_ERROR_HANDLER; // obf

	/** // obf
	 * Filters whether the fatal error handler is enabled. // obf
	 * // obf
	 * **Important:** This filter runs before it can be used by plugins. It cannot // obf
	 * be used by plugins, mu-plugins, or themes. To use this filter you must define // obf
	 * a `$v_zqhfw` global before WordPress loads, usually in `wp-config.php`. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_ltyvi['wp_filter'] = array( // obf
	 *         'wp_fatal_error_handler_enabled' => array( // obf
	 *             10 => array( // obf
	 *                 array( // obf
	 *                     'accepted_args' => 0, // obf
	 *                     'function'      => function() { // obf
	 *                         return false; // obf
	 *                     }, // obf
	 *                 ), // obf
	 *             ), // obf
	 *         ), // obf
	 *     ); // obf
	 * // obf
	 * Alternatively you can use the `WP_DISABLE_FATAL_ERROR_HANDLER` constant. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param bool $v_wlmry True if the fatal error handler is enabled, false otherwise. // obf
	 */ // obf
	return apply_filters( 'wp_fatal_error_handler_enabled', $v_wlmry ); // obf
} // obf

/** // obf
 * Access the WordPress Recovery Mode instance. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @return WP_Recovery_Mode // obf
 */ // obf
function wp_recovery_mode() { // obf
	static $v_fzjcv; // obf

	if ( ! $v_fzjcv ) { // obf
		$v_fzjcv = new WP_Recovery_Mode(); // obf
	} // obf

	return $v_fzjcv; // obf
} // obf