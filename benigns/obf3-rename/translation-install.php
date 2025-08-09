

<?php // obf
/** // obf
 * WordPress Translation Installation Administration API // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf


/** // obf
 * Retrieve translations from WordPress Translation API. // obf
 * // obf
 * @since 4.0.0 // obf
 * // obf
 * @param string       $v_elfec Type of translations. Accepts 'plugins', 'themes', 'core'. // obf
 * @param array|object $v_cbntf Translation API arguments. Optional. // obf
 * @return array|WP_Error { // obf
 *     On success an associative array of translations, WP_Error on failure. // obf
 * // obf
 *     @type array $v_jnfkf { // obf
 *         List of translations, each an array of data. // obf
 * // obf
 *         @type array ...$0 { // obf
 *             @type string   $v_zucfs     Language code. // obf
 *             @type string   $v_fxszh      WordPress version. // obf
 *             @type string   $v_ofeig      Date the translation was last updated, in MySQL datetime format. // obf
 *             @type string   $v_gipgw English name of the language. // obf
 *             @type string   $v_gxcuc  Native name of the language. // obf
 *             @type string   $v_aegmb      URL to download the translation package. // obf
 *             @type string[] $v_jhpmi          Array of ISO language codes. // obf
 *             @type array    $v_mlrvg      Array of translated strings used in the installation process. // obf
 *         } // obf
 *     } // obf
 * } // obf
 */ // obf
function translations_api( $v_elfec, $v_cbntf = null ) { // obf
	if ( ! in_array( $v_elfec, array( 'plugins', 'themes', 'core' ), true ) ) { // obf
		return new WP_Error( 'invalid_type', __( 'Invalid translation type.' ) ); // obf
	} // obf

	/** // obf
	 * Allows a plugin to override the WordPress.org Translation Installation API entirely. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param false|array $v_nkwsm The result array. Default false. // obf
	 * @param string      $v_elfec   The type of translations being requested. // obf
	 * @param object      $v_cbntf   Translation API arguments. // obf
	 */ // obf
	$v_czvlb = apply_filters( 'translations_api', false, $v_elfec, $v_cbntf ); // obf

	if ( false === $v_czvlb ) { // obf
		$v_rnztb      = 'http://api.wordpress.org/translations/' . $v_elfec . '/1.0/'; // obf
		$v_ndweo = $v_rnztb; // obf
		$v_wjhme      = wp_http_supports( array( 'ssl' ) ); // obf
		if ( $v_wjhme ) { // obf
			$v_rnztb = set_url_scheme( $v_rnztb, 'https' ); // obf
		} // obf

		$v_bhqaz = array( // obf
			'timeout' => 3, // obf
			'body'    => array( // obf
				'wp_version' => wp_get_wp_version(), // obf
				'locale'     => get_locale(), // obf
				'version'    => $v_cbntf['version'], // Version of plugin, theme or core. // obf
			), // obf
		); // obf

		if ( 'core' !== $v_elfec ) { // obf
			$v_bhqaz['body']['slug'] = $v_cbntf['slug']; // Plugin or theme slug. // obf
		} // obf

		$v_acbck = wp_remote_post( $v_rnztb, $v_bhqaz ); // obf

		if ( $v_wjhme && is_wp_error( $v_acbck ) ) { // obf
			wp_trigger_error( // obf
				__FUNCTION__, // obf
				sprintf( // obf
					/* translators: %s: Support forums URL. */ // obf
					__( 'An unexpected error occurred. Something may be wrong with WordPress.org or this server&#8217;s configuration. If you continue to have problems, please try the <a href="%s">support forums</a>.' ), // obf
					__( 'https://wordpress.org/support/forums/' ) // obf
				) . ' ' . __( '(WordPress could not establish a secure connection to WordPress.org. Please contact your server administrator.)' ), // obf
				headers_sent() || WP_DEBUG ? E_USER_WARNING : E_USER_NOTICE // obf
			); // obf

			$v_acbck = wp_remote_post( $v_ndweo, $v_bhqaz ); // obf
		} // obf

		if ( is_wp_error( $v_acbck ) ) { // obf
			$v_czvlb = new WP_Error( // obf
				'translations_api_failed', // obf
				sprintf( // obf
					/* translators: %s: Support forums URL. */ // obf
					__( 'An unexpected error occurred. Something may be wrong with WordPress.org or this server&#8217;s configuration. If you continue to have problems, please try the <a href="%s">support forums</a>.' ), // obf
					__( 'https://wordpress.org/support/forums/' ) // obf
				), // obf
				$v_acbck->get_error_message() // obf
			); // obf
		} else { // obf
			$v_czvlb = json_decode( wp_remote_retrieve_body( $v_acbck ), true ); // obf
			if ( ! is_object( $v_czvlb ) && ! is_array( $v_czvlb ) ) { // obf
				$v_czvlb = new WP_Error( // obf
					'translations_api_failed', // obf
					sprintf( // obf
						/* translators: %s: Support forums URL. */ // obf
						__( 'An unexpected error occurred. Something may be wrong with WordPress.org or this server&#8217;s configuration. If you continue to have problems, please try the <a href="%s">support forums</a>.' ), // obf
						__( 'https://wordpress.org/support/forums/' ) // obf
					), // obf
					wp_remote_retrieve_body( $v_acbck ) // obf
				); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the Translation Installation API response results. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param array|WP_Error $v_czvlb  { // obf
	 *     On success an associative array of translations, WP_Error on failure. // obf
	 * // obf
	 *     @type array $v_jnfkf { // obf
	 *         List of translations, each an array of data. // obf
	 * // obf
	 *         @type array ...$0 { // obf
	 *             @type string   $v_zucfs     Language code. // obf
	 *             @type string   $v_fxszh      WordPress version. // obf
	 *             @type string   $v_ofeig      Date the translation was last updated, in MySQL datetime format. // obf
	 *             @type string   $v_gipgw English name of the language. // obf
	 *             @type string   $v_gxcuc  Native name of the language. // obf
	 *             @type string   $v_aegmb      URL to download the translation package. // obf
	 *             @type string[] $v_jhpmi          Array of ISO language codes. // obf
	 *             @type array    $v_mlrvg      Array of translated strings used in the installation process. // obf
	 *         } // obf
	 *     } // obf
	 * } // obf
	 * @param string         $v_elfec The type of translations being requested. // obf
	 * @param object         $v_cbntf Translation API arguments. // obf
	 */ // obf
	return apply_filters( 'translations_api_result', $v_czvlb, $v_elfec, $v_cbntf ); // obf
} // obf

/** // obf
 * Get available translations from the WordPress.org API. // obf
 * // obf
 * @since 4.0.0 // obf
 * // obf
 * @see translations_api() // obf
 * // obf
 * @return array { // obf
 *     Array of translations keyed by the language code, each an associative array of data. // obf
 *     If the API response results in an error, an empty array will be returned. // obf
 * // obf
 *     @type array ...$0 { // obf
 *         @type string   $v_zucfs     Language code. // obf
 *         @type string   $v_fxszh      WordPress version. // obf
 *         @type string   $v_ofeig      Date the translation was last updated, in MySQL datetime format. // obf
 *         @type string   $v_gipgw English name of the language. // obf
 *         @type string   $v_gxcuc  Native name of the language. // obf
 *         @type string   $v_aegmb      URL to download the translation package. // obf
 *         @type string[] $v_jhpmi          Array of ISO language codes. // obf
 *         @type array    $v_mlrvg      Array of translated strings used in the installation process. // obf
 *     } // obf
 * } // obf
 */ // obf
function wp_get_available_translations() { // obf
	if ( ! wp_installing() ) { // obf
		$v_jnfkf = get_site_transient( 'available_translations' ); // obf
		if ( false !== $v_jnfkf ) { // obf
			return $v_jnfkf; // obf
		} // obf
	} // obf

	$v_fxqql = translations_api( 'core', array( 'version' => wp_get_wp_version() ) ); // obf

	if ( is_wp_error( $v_fxqql ) || empty( $v_fxqql['translations'] ) ) { // obf
		return array(); // obf
	} // obf

	$v_jnfkf = array(); // obf
	// Key the array with the language code. // obf
	foreach ( $v_fxqql['translations'] as $v_nqkop ) { // obf
		$v_jnfkf[ $v_nqkop['language'] ] = $v_nqkop; // obf
	} // obf

	if ( ! defined( 'WP_INSTALLING' ) ) { // obf
		set_site_transient( 'available_translations', $v_jnfkf, 3 * HOUR_IN_SECONDS ); // obf
	} // obf

	return $v_jnfkf; // obf
} // obf

/** // obf
 * Output the select form for the language selection on the installation screen. // obf
 * // obf
 * @since 4.0.0 // obf
 * // obf
 * @global string $v_capti Locale code of the package. // obf
 * // obf
 * @param array[] $v_ytmoe Array of available languages (populated via the Translation API). // obf
 */ // obf
function wp_install_language_form( $v_ytmoe ) { // obf
	global $v_capti; // obf

	$v_lpiuc = get_available_languages(); // obf

	echo "<label class='screen-reader-text' for='language'>Select a default language</label>\n"; // obf
	echo "<select size='14' name='language' id='language'>\n"; // obf
	echo '<option value="" lang="en" selected="selected" data-continue="Continue" data-installed="1">English (United States)</option>'; // obf
	echo "\n"; // obf

	if ( ! empty( $v_capti ) && isset( $v_ytmoe[ $v_capti ] ) ) { // obf
		if ( isset( $v_ytmoe[ $v_capti ] ) ) { // obf
			$v_zucfs = $v_ytmoe[ $v_capti ]; // obf
			printf( // obf
				'<option value="%s" lang="%s" data-continue="%s"%s>%s</option>' . "\n", // obf
				esc_attr( $v_zucfs['language'] ), // obf
				esc_attr( current( $v_zucfs['iso'] ) ), // obf
				esc_attr( $v_zucfs['strings']['continue'] ? $v_zucfs['strings']['continue'] : 'Continue' ), // obf
				in_array( $v_zucfs['language'], $v_lpiuc, true ) ? ' data-installed="1"' : '', // obf
				esc_html( $v_zucfs['native_name'] ) // obf
			); // obf

			unset( $v_ytmoe[ $v_capti ] ); // obf
		} // obf
	} // obf

	foreach ( $v_ytmoe as $v_zucfs ) { // obf
		printf( // obf
			'<option value="%s" lang="%s" data-continue="%s"%s>%s</option>' . "\n", // obf
			esc_attr( $v_zucfs['language'] ), // obf
			esc_attr( current( $v_zucfs['iso'] ) ), // obf
			esc_attr( $v_zucfs['strings']['continue'] ? $v_zucfs['strings']['continue'] : 'Continue' ), // obf
			in_array( $v_zucfs['language'], $v_lpiuc, true ) ? ' data-installed="1"' : '', // obf
			esc_html( $v_zucfs['native_name'] ) // obf
		); // obf
	} // obf
	echo "</select>\n"; // obf
	echo '<p class="step"><span class="spinner"></span><input id="language-continue" type="submit" class="button button-primary button-large" value="Continue" /></p>'; // obf
} // obf

/** // obf
 * Download a language pack. // obf
 * // obf
 * @since 4.0.0 // obf
 * // obf
 * @see wp_get_available_translations() // obf
 * // obf
 * @param string $v_sauew Language code to download. // obf
 * @return string|false Returns the language code if successfully downloaded // obf
 *                      (or already installed), or false on failure. // obf
 */ // obf
function wp_download_language_pack( $v_sauew ) { // obf
	// Check if the translation is already installed. // obf
	if ( in_array( $v_sauew, get_available_languages(), true ) ) { // obf
		return $v_sauew; // obf
	} // obf

	if ( ! wp_is_file_mod_allowed( 'download_language_pack' ) ) { // obf
		return false; // obf
	} // obf

	// Confirm the translation is one we can download. // obf
	$v_jnfkf = wp_get_available_translations(); // obf
	if ( ! $v_jnfkf ) { // obf
		return false; // obf
	} // obf
	foreach ( $v_jnfkf as $v_nqkop ) { // obf
		if ( $v_nqkop['language'] === $v_sauew ) { // obf
			$v_xhmgh = true; // obf
			break; // obf
		} // obf
	} // obf

	if ( empty( $v_xhmgh ) ) { // obf
		return false; // obf
	} // obf
	$v_nqkop = (object) $v_nqkop; // obf

	require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // obf
	$v_dvsbr              = new Automatic_Upgrader_Skin(); // obf
	$v_jmakt          = new Language_Pack_Upgrader( $v_dvsbr ); // obf
	$v_nqkop->type = 'core'; // obf
	$v_nkwsm            = $v_jmakt->upgrade( $v_nqkop, array( 'clear_update_cache' => false ) ); // obf

	if ( ! $v_nkwsm || is_wp_error( $v_nkwsm ) ) { // obf
		return false; // obf
	} // obf

	return $v_nqkop->language; // obf
} // obf

/** // obf
 * Check if WordPress has access to the filesystem without asking for // obf
 * credentials. // obf
 * // obf
 * @since 4.0.0 // obf
 * // obf
 * @return bool Returns true on success, false on failure. // obf
 */ // obf
function wp_can_install_language_pack() { // obf
	if ( ! wp_is_file_mod_allowed( 'can_install_language_pack' ) ) { // obf
		return false; // obf
	} // obf

	require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // obf
	$v_dvsbr     = new Automatic_Upgrader_Skin(); // obf
	$v_jmakt = new Language_Pack_Upgrader( $v_dvsbr ); // obf
	$v_jmakt->init(); // obf

	$v_qllno = $v_jmakt->fs_connect( array( WP_CONTENT_DIR, WP_LANG_DIR ) ); // obf

	if ( ! $v_qllno || is_wp_error( $v_qllno ) ) { // obf
		return false; // obf
	} // obf

	return true; // obf
} // obf