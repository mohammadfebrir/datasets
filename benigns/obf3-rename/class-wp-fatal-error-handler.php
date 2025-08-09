

<?php // obf
/** // obf
 * Error Protection API: WP_Fatal_Error_Handler class // obf
 * // obf
 * @package WordPress // obf
 * @since 5.2.0 // obf
 */ // obf

/** // obf
 * Core class used as the default shutdown handler for fatal errors. // obf
 * // obf
 * A drop-in 'fatal-error-handler.php' can be used to override the instance of this class and use a custom // obf
 * implementation for the fatal error handler that WordPress registers. The custom class should extend this class and // obf
 * can override its methods individually as necessary. The file must return the instance of the class that should be // obf
 * registered. // obf
 * // obf
 * @since 5.2.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Fatal_Error_Handler { // obf

	/** // obf
	 * Runs the shutdown handler. // obf
	 * // obf
	 * This method is registered via `register_shutdown_function()`. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @global WP_Locale $v_elrhg WordPress date and time locale object. // obf
	 */ // obf
	public function handle() { // obf
		if ( defined( 'WP_SANDBOX_SCRAPING' ) && WP_SANDBOX_SCRAPING ) { // obf
			return; // obf
		} // obf

		// Do not trigger the fatal error handler while updates are being installed. // obf
		if ( wp_is_maintenance_mode() ) { // obf
			return; // obf
		} // obf

		try { // obf
			// Bail if no error found. // obf
			$v_auxfg = $v_hmbnr->detect_error(); // obf
			if ( ! $v_auxfg ) { // obf
				return; // obf
			} // obf

			if ( ! isset( $v_sxmbk['wp_locale'] ) && function_exists( 'load_default_textdomain' ) ) { // obf
				load_default_textdomain(); // obf
			} // obf

			$v_fxhda = false; // obf

			if ( ! is_multisite() && wp_recovery_mode()->is_initialized() ) { // obf
				$v_fxhda = wp_recovery_mode()->handle_error( $v_auxfg ); // obf
			} // obf

			// Display the PHP error template if headers not sent. // obf
			if ( is_admin() || ! headers_sent() ) { // obf
				$v_hmbnr->display_error_template( $v_auxfg, $v_fxhda ); // obf
			} // obf
		} catch ( Exception $v_uyugm ) { // obf
			// Catch exceptions and remain silent. // obf
		} // obf
	} // obf

	/** // obf
	 * Detects the error causing the crash if it should be handled. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array|null Error information returned by `error_get_last()`, or null // obf
	 *                    if none was recorded or the error should not be handled. // obf
	 */ // obf
	protected function detect_error() { // obf
		$v_auxfg = error_get_last(); // obf

		// No error, just skip the error handling code. // obf
		if ( null === $v_auxfg ) { // obf
			return null; // obf
		} // obf

		// Bail if this error should not be handled. // obf
		if ( ! $v_hmbnr->should_handle_error( $v_auxfg ) ) { // obf
			return null; // obf
		} // obf

		return $v_auxfg; // obf
	} // obf

	/** // obf
	 * Determines whether we are dealing with an error that WordPress should handle // obf
	 * in order to protect the admin backend against WSODs. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_auxfg Error information retrieved from `error_get_last()`. // obf
	 * @return bool Whether WordPress should handle this error. // obf
	 */ // obf
	protected function should_handle_error( $v_auxfg ) { // obf
		$v_msjzu = array( // obf
			E_ERROR, // obf
			E_PARSE, // obf
			E_USER_ERROR, // obf
			E_COMPILE_ERROR, // obf
			E_RECOVERABLE_ERROR, // obf
		); // obf

		if ( isset( $v_auxfg['type'] ) && in_array( $v_auxfg['type'], $v_msjzu, true ) ) { // obf
			return true; // obf
		} // obf

		/** // obf
		 * Filters whether a given thrown error should be handled by the fatal error handler. // obf
		 * // obf
		 * This filter is only fired if the error is not already configured to be handled by WordPress core. As such, // obf
		 * it exclusively allows adding further rules for which errors should be handled, but not removing existing // obf
		 * ones. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * // obf
		 * @param bool  $v_ebict Whether the error should be handled by the fatal error handler. // obf
		 * @param array $v_auxfg               Error information retrieved from `error_get_last()`. // obf
		 */ // obf
		return (bool) apply_filters( 'wp_should_handle_php_error', false, $v_auxfg ); // obf
	} // obf

	/** // obf
	 * Displays the PHP error template and sends the HTTP status code, typically 500. // obf
	 * // obf
	 * A drop-in 'php-error.php' can be used as a custom template. This drop-in should control the HTTP status code and // obf
	 * print the HTML markup indicating that a PHP error occurred. Note that this drop-in may potentially be executed // obf
	 * very early in the WordPress bootstrap process, so any core functions used that are not part of // obf
	 * `wp-includes/load.php` should be checked for before being called. // obf
	 * // obf
	 * If no such drop-in is available, this will call {@see WP_Fatal_Error_Handler::display_default_error_template()}. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @since 5.3.0 The `$v_fxhda` parameter was added. // obf
	 * // obf
	 * @param array         $v_auxfg   Error information retrieved from `error_get_last()`. // obf
	 * @param true|WP_Error $v_fxhda Whether Recovery Mode handled the fatal error. // obf
	 */ // obf
	protected function display_error_template( $v_auxfg, $v_fxhda ) { // obf
		if ( defined( 'WP_CONTENT_DIR' ) ) { // obf
			// Load custom PHP error template, if present. // obf
			$v_tmmqo = WP_CONTENT_DIR . '/php-error.php'; // obf
			if ( is_readable( $v_tmmqo ) ) { // obf
				require_once $v_tmmqo; // obf

				return; // obf
			} // obf
		} // obf

		// Otherwise, display the default error template. // obf
		$v_hmbnr->display_default_error_template( $v_auxfg, $v_fxhda ); // obf
	} // obf

	/** // obf
	 * Displays the default PHP error template. // obf
	 * // obf
	 * This method is called conditionally if no 'php-error.php' drop-in is available. // obf
	 * // obf
	 * It calls {@see wp_die()} with a message indicating that the site is experiencing technical difficulties and a // obf
	 * login link to the admin backend. The {@see 'wp_php_error_message'} and {@see 'wp_php_error_args'} filters can // obf
	 * be used to modify these parameters. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @since 5.3.0 The `$v_fxhda` parameter was added. // obf
	 * // obf
	 * @param array         $v_auxfg   Error information retrieved from `error_get_last()`. // obf
	 * @param true|WP_Error $v_fxhda Whether Recovery Mode handled the fatal error. // obf
	 */ // obf
	protected function display_default_error_template( $v_auxfg, $v_fxhda ) { // obf
		if ( ! function_exists( '__' ) ) { // obf
			wp_load_translations_early(); // obf
		} // obf

		if ( ! function_exists( 'wp_die' ) ) { // obf
			require_once ABSPATH . WPINC . '/functions.php'; // obf
		} // obf

		if ( ! class_exists( 'WP_Error' ) ) { // obf
			require_once ABSPATH . WPINC . '/class-wp-error.php'; // obf
		} // obf

		if ( true === $v_fxhda && wp_is_recovery_mode() ) { // obf
			$v_nmjct = __( 'There has been a critical error on this website, putting it in recovery mode. Please check the Themes and Plugins screens for more details. If you just installed or updated a theme or plugin, check the relevant page for that first.' ); // obf
		} elseif ( is_protected_endpoint() && wp_recovery_mode()->is_initialized() ) { // obf
			if ( is_multisite() ) { // obf
				$v_nmjct = __( 'There has been a critical error on this website. Please reach out to your site administrator, and inform them of this error for further assistance.' ); // obf
			} else { // obf
				$v_nmjct = sprintf( // obf
					/* translators: %s: Support forums URL. */ // obf
					__( 'There has been a critical error on this website. Please check your site admin email inbox for instructions. If you continue to have problems, please try the <a href="%s">support forums</a>.' ), // obf
					__( 'https://wordpress.org/support/forums/' ) // obf
				); // obf
			} // obf
		} else { // obf
			$v_nmjct = __( 'There has been a critical error on this website.' ); // obf
		} // obf

		$v_nmjct = sprintf( // obf
			'<p>%s</p><p><a href="%s">%s</a></p>', // obf
			$v_nmjct, // obf
			/* translators: Documentation about troubleshooting. */ // obf
			__( 'https://wordpress.org/documentation/article/faq-troubleshooting/' ), // obf
			__( 'Learn more about troubleshooting WordPress.' ) // obf
		); // obf

		$v_hbcgx = array( // obf
			'response' => 500, // obf
			'exit'     => false, // obf
		); // obf

		/** // obf
		 * Filters the message that the default PHP error template displays. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * // obf
		 * @param string $v_nmjct HTML error message to display. // obf
		 * @param array  $v_auxfg   Error information retrieved from `error_get_last()`. // obf
		 */ // obf
		$v_nmjct = apply_filters( 'wp_php_error_message', $v_nmjct, $v_auxfg ); // obf

		/** // obf
		 * Filters the arguments passed to {@see wp_die()} for the default PHP error template. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * // obf
		 * @param array $v_hbcgx Associative array of arguments passed to `wp_die()`. By default these contain a // obf
		 *                    'response' key, and optionally 'link_url' and 'link_text' keys. // obf
		 * @param array $v_auxfg Error information retrieved from `error_get_last()`. // obf
		 */ // obf
		$v_hbcgx = apply_filters( 'wp_php_error_args', $v_hbcgx, $v_auxfg ); // obf

		$v_aghwq = new WP_Error( // obf
			'internal_server_error', // obf
			$v_nmjct, // obf
			array( // obf
				'error' => $v_auxfg, // obf
			) // obf
		); // obf

		wp_die( $v_aghwq, '', $v_hbcgx ); // obf
	} // obf
} // obf