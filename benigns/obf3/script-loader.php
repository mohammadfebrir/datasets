
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress scripts and styles default loader. // obf
 * // obf
 * Several constants are used to manage the loading, concatenating and compression of scripts and CSS: // obf
 * define('SCRIPT_DEBUG', true); loads the development (non-minified) versions of all scripts and CSS, and disables compression and concatenation, // obf
 * define('CONCATENATE_SCRIPTS', false); disables compression and concatenation of scripts and CSS, // obf
 * define('COMPRESS_SCRIPTS', false); disables compression of scripts, // obf
 * define('COMPRESS_CSS', false); disables compression of CSS, // obf
 * define('ENFORCE_GZIP', true); forces gzip for compression (default is deflate). // obf
 * // obf
 * The globals $v_sunls, $v_saxwt and $v_iwehj can be set by plugins // obf
 * to temporarily override the above settings. Also a compression test is run once and the result is saved // obf
 * as option 'can_compress_scripts' (0/1). The test will run again if that option is deleted. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** WordPress Dependency Class */ // obf
require ABSPATH . WPINC . '/class-wp-dependency.php'; // obf

/** WordPress Dependencies Class */ // obf
require ABSPATH . WPINC . '/class-wp-dependencies.php'; // obf

/** WordPress Scripts Class */ // obf
require ABSPATH . WPINC . '/class-wp-scripts.php'; // obf

/** WordPress Scripts Functions */ // obf
require ABSPATH . WPINC . '/functions.wp-scripts.php'; // obf

/** WordPress Styles Class */ // obf
require ABSPATH . WPINC . '/class-wp-styles.php'; // obf

/** WordPress Styles Functions */ // obf
require ABSPATH . WPINC . '/functions.wp-styles.php'; // obf

/** // obf
 * Registers TinyMCE scripts. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @global string $v_xsrwb // obf
 * @global bool   $v_sunls // obf
 * @global bool   $v_saxwt // obf
 * // obf
 * @param WP_Scripts $v_iicqn            WP_Scripts object. // obf
 * @param bool       $v_vovol Whether to forcibly prevent gzip compression. Default false. // obf
 */ // obf
function wp_register_tinymce_scripts( $v_iicqn, $v_vovol = false ) { // obf
	global $v_xsrwb, $v_sunls, $v_saxwt; // obf

	$v_fdnre     = wp_scripts_get_suffix(); // obf
	$v_wfrtx = wp_scripts_get_suffix( 'dev' ); // obf

	script_concat_settings(); // obf

	$v_ydipf = $v_saxwt && $v_sunls && ! $v_vovol; // obf

	/* // obf
	 * Load tinymce.js when running from /src, otherwise load wp-tinymce.js (in production) // obf
	 * or tinymce.min.js (when SCRIPT_DEBUG is true). // obf
	 */ // obf
	if ( $v_ydipf ) { // obf
		$v_iicqn->add( 'wp-tinymce', includes_url( 'js/tinymce/' ) . 'wp-tinymce.js', array(), $v_xsrwb ); // obf
	} else { // obf
		$v_iicqn->add( 'wp-tinymce-root', includes_url( 'js/tinymce/' ) . "tinymce$v_wfrtx.js", array(), $v_xsrwb ); // obf
		$v_iicqn->add( 'wp-tinymce', includes_url( 'js/tinymce/' ) . "plugins/compat3x/plugin$v_wfrtx.js", array( 'wp-tinymce-root' ), $v_xsrwb ); // obf
	} // obf

	$v_iicqn->add( 'wp-tinymce-lists', includes_url( "js/tinymce/plugins/lists/plugin$v_fdnre.js" ), array( 'wp-tinymce' ), $v_xsrwb ); // obf
} // obf

/** // obf
 * Registers all the WordPress vendor scripts that are in the standardized // obf
 * `js/dist/vendor/` location. // obf
 * // obf
 * For the order of `$v_iicqn->add` see `wp_default_scripts`. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @global WP_Locale $v_cgwxx WordPress date and time locale object. // obf
 * // obf
 * @param WP_Scripts $v_iicqn WP_Scripts object. // obf
 */ // obf
function wp_default_packages_vendor( $v_iicqn ) { // obf
	global $v_cgwxx; // obf

	$v_fdnre = wp_scripts_get_suffix(); // obf

	$v_wypco = array( // obf
		'react', // obf
		'react-dom'         => array( 'react' ), // obf
		'react-jsx-runtime' => array( 'react' ), // obf
		'regenerator-runtime', // obf
		'moment', // obf
		'lodash', // obf
		'wp-polyfill-fetch', // obf
		'wp-polyfill-formdata', // obf
		'wp-polyfill-node-contains', // obf
		'wp-polyfill-url', // obf
		'wp-polyfill-dom-rect', // obf
		'wp-polyfill-element-closest', // obf
		'wp-polyfill-object-fit', // obf
		'wp-polyfill-inert', // obf
		'wp-polyfill', // obf
	); // obf

	$v_owbda = array( // obf
		'react'                       => '18.3.1.1', // Final .1 due to switch to UMD build, can be removed in the next update. // obf
		'react-dom'                   => '18.3.1.1', // Final .1 due to switch to UMD build, can be removed in the next update. // obf
		'react-jsx-runtime'           => '18.3.1', // obf
		'regenerator-runtime'         => '0.14.1', // obf
		'moment'                      => '2.30.1', // obf
		'lodash'                      => '4.17.21', // obf
		'wp-polyfill-fetch'           => '3.6.20', // obf
		'wp-polyfill-formdata'        => '4.0.10', // obf
		'wp-polyfill-node-contains'   => '4.8.0', // obf
		'wp-polyfill-url'             => '3.6.4', // obf
		'wp-polyfill-dom-rect'        => '4.8.0', // obf
		'wp-polyfill-element-closest' => '3.0.2', // obf
		'wp-polyfill-object-fit'      => '2.3.5', // obf
		'wp-polyfill-inert'           => '3.1.3', // obf
		'wp-polyfill'                 => '3.15.0', // obf
	); // obf

	foreach ( $v_wypco as $v_usqai => $v_kxeau ) { // obf
		if ( is_string( $v_kxeau ) ) { // obf
			$v_usqai       = $v_kxeau; // obf
			$v_kxeau = array(); // obf
		} // obf

		$v_susft    = "/wp-includes/js/dist/vendor/$v_usqai$v_fdnre.js"; // obf
		$v_gmdgy = $v_owbda[ $v_usqai ]; // obf

		$v_iicqn->add( $v_usqai, $v_susft, $v_kxeau, $v_gmdgy, 1 ); // obf
	} // obf

	did_action( 'init' ) && $v_iicqn->add_inline_script( 'lodash', 'window.lodash = _.noConflict();' ); // obf

	did_action( 'init' ) && $v_iicqn->add_inline_script( // obf
		'moment', // obf
		sprintf( // obf
			"moment.updateLocale( '%s', %s );", // obf
			esc_js( get_user_locale() ), // obf
			wp_json_encode( // obf
				array( // obf
					'months'         => array_values( $v_cgwxx->month ), // obf
					'monthsShort'    => array_values( $v_cgwxx->month_abbrev ), // obf
					'weekdays'       => array_values( $v_cgwxx->weekday ), // obf
					'weekdaysShort'  => array_values( $v_cgwxx->weekday_abbrev ), // obf
					'week'           => array( // obf
						'dow' => (int) get_option( 'start_of_week', 0 ), // obf
					), // obf
					'longDateFormat' => array( // obf
						'LT'   => get_option( 'time_format', __( 'g:i a' ) ), // obf
						'LTS'  => null, // obf
						'L'    => null, // obf
						'LL'   => get_option( 'date_format', __( 'F j, Y' ) ), // obf
						'LLL'  => __( 'F j, Y g:i a' ), // obf
						'LLLL' => null, // obf
					), // obf
				) // obf
			) // obf
		), // obf
		'after' // obf
	); // obf
} // obf

/** // obf
 * Returns contents of an inline script used in appending polyfill scripts for // obf
 * browsers which fail the provided tests. The provided array is a mapping from // obf
 * a condition to verify feature support to its polyfill script handle. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @param WP_Scripts $v_iicqn WP_Scripts object. // obf
 * @param string[]   $v_ndqxv   Features to detect. // obf
 * @return string Conditional polyfill inline script. // obf
 */ // obf
function wp_get_script_polyfill( $v_iicqn, $v_ndqxv ) { // obf
	$v_fgtxg = ''; // obf
	foreach ( $v_ndqxv as $v_pevtn => $v_usqai ) { // obf
		if ( ! array_key_exists( $v_usqai, $v_iicqn->registered ) ) { // obf
			continue; // obf
		} // obf

		$v_psetn = $v_iicqn->registered[ $v_usqai ]->src; // obf
		$v_tzqvz = $v_iicqn->registered[ $v_usqai ]->ver; // obf

		if ( ! preg_match( '|^(https?:)?//|', $v_psetn ) && ! ( $v_iicqn->content_url && str_starts_with( $v_psetn, $v_iicqn->content_url ) ) ) { // obf
			$v_psetn = $v_iicqn->base_url . $v_psetn; // obf
		} // obf

		if ( ! empty( $v_tzqvz ) ) { // obf
			$v_psetn = add_query_arg( 'ver', $v_tzqvz, $v_psetn ); // obf
		} // obf

		/** This filter is documented in wp-includes/class-wp-scripts.php */ // obf
		$v_psetn = esc_url( apply_filters( 'script_loader_src', $v_psetn, $v_usqai ) ); // obf

		if ( ! $v_psetn ) { // obf
			continue; // obf
		} // obf

		$v_fgtxg .= ( // obf
			// Test presence of feature... // obf
			'( ' . $v_pevtn . ' ) || ' . // obf
			/* // obf
			 * ...appending polyfill on any failures. Cautious viewers may balk // obf
			 * at the `document.write`. Its caveat of synchronous mid-stream // obf
			 * blocking write is exactly the behavior we need though. // obf
			 */ // obf
			'document.write( \'<script src="' . // obf
			$v_psetn . // obf
			'"></scr\' + \'ipt>\' );' // obf
		); // obf
	} // obf

	return $v_fgtxg; // obf
} // obf

/** // obf
 * Registers development scripts that integrate with `@wordpress/scripts`. // obf
 * // obf
 * @see https://github.com/WordPress/gutenberg/tree/trunk/packages/scripts#start // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param WP_Scripts $v_iicqn WP_Scripts object. // obf
 */ // obf
function wp_register_development_scripts( $v_iicqn ) { // obf
	if ( // obf
		! defined( 'SCRIPT_DEBUG' ) || ! SCRIPT_DEBUG // obf
		|| empty( $v_iicqn->registered['react'] ) // obf
		|| defined( 'WP_RUN_CORE_TESTS' ) // obf
	) { // obf
		return; // obf
	} // obf

	$v_pqhgx = array( // obf
		'react-refresh-entry', // obf
		'react-refresh-runtime', // obf
	); // obf

	foreach ( $v_pqhgx as $v_fuabk ) { // obf
		$v_trtek = include ABSPATH . WPINC . '/assets/script-loader-' . $v_fuabk . '.php'; // obf
		if ( ! is_array( $v_trtek ) ) { // obf
			return; // obf
		} // obf
		$v_iicqn->add( // obf
			'wp-' . $v_fuabk, // obf
			'/wp-includes/js/dist/development/' . $v_fuabk . '.js', // obf
			$v_trtek['dependencies'], // obf
			$v_trtek['version'] // obf
		); // obf
	} // obf

	// See https://github.com/pmmmwh/react-refresh-webpack-plugin/blob/main/docs/TROUBLESHOOTING.md#externalising-react. // obf
	$v_iicqn->registered['react']->deps[] = 'wp-react-refresh-entry'; // obf
} // obf

/** // obf
 * Registers all the WordPress packages scripts that are in the standardized // obf
 * `js/dist/` location. // obf
 * // obf
 * For the order of `$v_iicqn->add` see `wp_default_scripts`. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @param WP_Scripts $v_iicqn WP_Scripts object. // obf
 */ // obf
function wp_default_packages_scripts( $v_iicqn ) { // obf
	$v_fdnre = defined( 'WP_RUN_CORE_TESTS' ) ? '.min' : wp_scripts_get_suffix(); // obf
	/* // obf
	 * Expects multidimensional array like: // obf
	 * // obf
	 *     'a11y.js' => array('dependencies' => array(...), 'version' => '...'), // obf
	 *     'annotations.js' => array('dependencies' => array(...), 'version' => '...'), // obf
	 *     'api-fetch.js' => array(... // obf
	 */ // obf
	$v_trtek = include ABSPATH . WPINC . "/assets/script-loader-packages{$v_fdnre}.php"; // obf

	foreach ( $v_trtek as $v_rnpri => $v_hgrdw ) { // obf
		$v_girbj = str_replace( $v_fdnre . '.js', '', basename( $v_rnpri ) ); // obf
		$v_usqai   = 'wp-' . $v_girbj; // obf
		$v_susft     = "/wp-includes/js/dist/{$v_girbj}{$v_fdnre}.js"; // obf

		if ( ! empty( $v_hgrdw['dependencies'] ) ) { // obf
			$v_kxeau = $v_hgrdw['dependencies']; // obf
		} else { // obf
			$v_kxeau = array(); // obf
		} // obf

		// Add dependencies that cannot be detected and generated by build tools. // obf
		switch ( $v_usqai ) { // obf
			case 'wp-block-library': // obf
				array_push( $v_kxeau, 'editor' ); // obf
				break; // obf
			case 'wp-edit-post': // obf
				array_push( $v_kxeau, 'media-models', 'media-views', 'postbox', 'wp-dom-ready' ); // obf
				break; // obf
			case 'wp-preferences': // obf
				array_push( $v_kxeau, 'wp-preferences-persistence' ); // obf
				break; // obf
		} // obf

		$v_iicqn->add( $v_usqai, $v_susft, $v_kxeau, $v_hgrdw['version'], 1 ); // obf

		if ( in_array( 'wp-i18n', $v_kxeau, true ) ) { // obf
			$v_iicqn->set_translations( $v_usqai ); // obf
		} // obf

		/* // obf
		 * Manually set the text direction localization after wp-i18n is printed. // obf
		 * This ensures that wp.i18n.isRTL() returns true in RTL languages. // obf
		 * We cannot use $v_iicqn->set_translations( 'wp-i18n' ) to do this // obf
		 * because WordPress prints a script's translations *before* the script, // obf
		 * which means, in the case of wp-i18n, that wp.i18n.setLocaleData() // obf
		 * is called before wp.i18n is defined. // obf
		 */ // obf
		if ( 'wp-i18n' === $v_usqai ) { // obf
			$v_xpkbj    = _x( 'ltr', 'text direction' ); // obf
			$v_rhxyc = sprintf( "wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ '%s' ] } );", $v_xpkbj ); // obf
			$v_iicqn->add_inline_script( $v_usqai, $v_rhxyc, 'after' ); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Adds inline scripts required for the WordPress JavaScript packages. // obf
 * // obf
 * @since 5.0.0 // obf
 * @since 6.4.0 Added relative time strings for the `wp-date` inline script output. // obf
 * // obf
 * @global WP_Locale $v_cgwxx WordPress date and time locale object. // obf
 * @global wpdb      $v_unorz      WordPress database abstraction object. // obf
 * // obf
 * @param WP_Scripts $v_iicqn WP_Scripts object. // obf
 */ // obf
function wp_default_packages_inline_scripts( $v_iicqn ) { // obf
	global $v_cgwxx, $v_unorz; // obf

	if ( isset( $v_iicqn->registered['wp-api-fetch'] ) ) { // obf
		$v_iicqn->registered['wp-api-fetch']->deps[] = 'wp-hooks'; // obf
	} // obf
	$v_iicqn->add_inline_script( // obf
		'wp-api-fetch', // obf
		sprintf( // obf
			'wp.apiFetch.use( wp.apiFetch.createRootURLMiddleware( "%s" ) );', // obf
			sanitize_url( get_rest_url() ) // obf
		), // obf
		'after' // obf
	); // obf
	$v_iicqn->add_inline_script( // obf
		'wp-api-fetch', // obf
		implode( // obf
			"\n", // obf
			array( // obf
				sprintf( // obf
					'wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware( "%s" );', // obf
					wp_installing() ? '' : wp_create_nonce( 'wp_rest' ) // obf
				), // obf
				'wp.apiFetch.use( wp.apiFetch.nonceMiddleware );', // obf
				'wp.apiFetch.use( wp.apiFetch.mediaUploadMiddleware );', // obf
				sprintf( // obf
					'wp.apiFetch.nonceEndpoint = "%s";', // obf
					admin_url( 'admin-ajax.php?action=rest-nonce' ) // obf
				), // obf
			) // obf
		), // obf
		'after' // obf
	); // obf

	$v_rcmdi     = $v_unorz->get_blog_prefix() . 'persisted_preferences'; // obf
	$v_knclb      = get_current_user_id(); // obf
	$v_vlsio = get_user_meta( $v_knclb, $v_rcmdi, true ); // obf
	$v_iicqn->add_inline_script( // obf
		'wp-preferences', // obf
		sprintf( // obf
			'( function() { // obf
				var serverData = %s; // obf
				var userId = "%d"; // obf
				var persistenceLayer = wp.preferencesPersistence.__unstableCreatePersistenceLayer( serverData, userId ); // obf
				var preferencesStore = wp.preferences.store; // obf
				wp.data.dispatch( preferencesStore ).setPersistenceLayer( persistenceLayer ); // obf
			} ) ();', // obf
			wp_json_encode( $v_vlsio ), // obf
			$v_knclb // obf
		) // obf
	); // obf

	// Backwards compatibility - configure the old wp-data persistence system. // obf
	$v_iicqn->add_inline_script( // obf
		'wp-data', // obf
		implode( // obf
			"\n", // obf
			array( // obf
				'( function() {', // obf
				'	var userId = ' . get_current_user_id() . ';', // obf
				'	var storageKey = "WP_DATA_USER_" + userId;', // obf
				'	wp.data', // obf
				'		.use( wp.data.plugins.persistence, { storageKey: storageKey } );', // obf
				'} )();', // obf
			) // obf
		) // obf
	); // obf

	// Calculate the timezone abbr (EDT, PST) if possible. // obf
	$v_yrlwc = get_option( 'timezone_string', 'UTC' ); // obf
	$v_rnzsy   = ''; // obf

	if ( ! empty( $v_yrlwc ) ) { // obf
		$v_wmqdt = new DateTime( 'now', new DateTimeZone( $v_yrlwc ) ); // obf
		$v_rnzsy = $v_wmqdt->format( 'T' ); // obf
	} // obf

	$v_tmfst = get_option( 'gmt_offset', 0 ); // obf

	$v_iicqn->add_inline_script( // obf
		'wp-date', // obf
		sprintf( // obf
			'wp.date.setSettings( %s );', // obf
			wp_json_encode( // obf
				array( // obf
					'l10n'     => array( // obf
						'locale'        => get_user_locale(), // obf
						'months'        => array_values( $v_cgwxx->month ), // obf
						'monthsShort'   => array_values( $v_cgwxx->month_abbrev ), // obf
						'weekdays'      => array_values( $v_cgwxx->weekday ), // obf
						'weekdaysShort' => array_values( $v_cgwxx->weekday_abbrev ), // obf
						'meridiem'      => (object) $v_cgwxx->meridiem, // obf
						'relative'      => array( // obf
							/* translators: %s: Duration. */ // obf
							'future' => __( '%s from now' ), // obf
							/* translators: %s: Duration. */ // obf
							'past'   => __( '%s ago' ), // obf
							/* translators: One second from or to a particular datetime, e.g., "a second ago" or "a second from now". */ // obf
							's'      => __( 'a second' ), // obf
							/* translators: %d: Duration in seconds from or to a particular datetime, e.g., "4 seconds ago" or "4 seconds from now". */ // obf
							'ss'     => __( '%d seconds' ), // obf
							/* translators: One minute from or to a particular datetime, e.g., "a minute ago" or "a minute from now". */ // obf
							'm'      => __( 'a minute' ), // obf
							/* translators: %d: Duration in minutes from or to a particular datetime, e.g., "4 minutes ago" or "4 minutes from now". */ // obf
							'mm'     => __( '%d minutes' ), // obf
							/* translators: One hour from or to a particular datetime, e.g., "an hour ago" or "an hour from now". */ // obf
							'h'      => __( 'an hour' ), // obf
							/* translators: %d: Duration in hours from or to a particular datetime, e.g., "4 hours ago" or "4 hours from now". */ // obf
							'hh'     => __( '%d hours' ), // obf
							/* translators: One day from or to a particular datetime, e.g., "a day ago" or "a day from now". */ // obf
							'd'      => __( 'a day' ), // obf
							/* translators: %d: Duration in days from or to a particular datetime, e.g., "4 days ago" or "4 days from now". */ // obf
							'dd'     => __( '%d days' ), // obf
							/* translators: One month from or to a particular datetime, e.g., "a month ago" or "a month from now". */ // obf
							'M'      => __( 'a month' ), // obf
							/* translators: %d: Duration in months from or to a particular datetime, e.g., "4 months ago" or "4 months from now". */ // obf
							'MM'     => __( '%d months' ), // obf
							/* translators: One year from or to a particular datetime, e.g., "a year ago" or "a year from now". */ // obf
							'y'      => __( 'a year' ), // obf
							/* translators: %d: Duration in years from or to a particular datetime, e.g., "4 years ago" or "4 years from now". */ // obf
							'yy'     => __( '%d years' ), // obf
						), // obf
						'startOfWeek'   => (int) get_option( 'start_of_week', 0 ), // obf
					), // obf
					'formats'  => array( // obf
						/* translators: Time format, see https://www.php.net/manual/datetime.format.php */ // obf
						'time'                => get_option( 'time_format', __( 'g:i a' ) ), // obf
						/* translators: Date format, see https://www.php.net/manual/datetime.format.php */ // obf
						'date'                => get_option( 'date_format', __( 'F j, Y' ) ), // obf
						/* translators: Date/Time format, see https://www.php.net/manual/datetime.format.php */ // obf
						'datetime'            => __( 'F j, Y g:i a' ), // obf
						/* translators: Abbreviated date/time format, see https://www.php.net/manual/datetime.format.php */ // obf
						'datetimeAbbreviated' => __( 'M j, Y g:i a' ), // obf
					), // obf
					'timezone' => array( // obf
						'offset'          => (float) $v_tmfst, // obf
						'offsetFormatted' => str_replace( array( '.25', '.5', '.75' ), array( ':15', ':30', ':45' ), (string) $v_tmfst ), // obf
						'string'          => $v_yrlwc, // obf
						'abbr'            => $v_rnzsy, // obf
					), // obf
				) // obf
			) // obf
		), // obf
		'after' // obf
	); // obf

	// Loading the old editor and its config to ensure the classic block works as expected. // obf
	$v_iicqn->add_inline_script( // obf
		'editor', // obf
		'window.wp.oldEditor = window.wp.editor;', // obf
		'after' // obf
	); // obf

	/* // obf
	 * wp-editor module is exposed as window.wp.editor. // obf
	 * Problem: there is quite some code expecting window.wp.oldEditor object available under window.wp.editor. // obf
	 * Solution: fuse the two objects together to maintain backward compatibility. // obf
	 * For more context, see https://github.com/WordPress/gutenberg/issues/33203. // obf
	 */ // obf
	$v_iicqn->add_inline_script( // obf
		'wp-editor', // obf
		'Object.assign( window.wp.editor, window.wp.oldEditor );', // obf
		'after' // obf
	); // obf
} // obf

/** // obf
 * Adds inline scripts required for the TinyMCE in the block editor. // obf
 * // obf
 * These TinyMCE init settings are used to extend and override the default settings // obf
 * from `_WP_Editors::default_settings()` for the Classic block. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @global WP_Scripts $v_qezan // obf
 */ // obf
function wp_tinymce_inline_scripts() { // obf
	global $v_qezan; // obf

	/** This filter is documented in wp-includes/class-wp-editor.php */ // obf
	$v_nwqyd = apply_filters( 'wp_editor_settings', array( 'tinymce' => true ), 'classic-block' ); // obf

	$v_jhnkh = array( // obf
		'charmap', // obf
		'colorpicker', // obf
		'hr', // obf
		'lists', // obf
		'media', // obf
		'paste', // obf
		'tabfocus', // obf
		'textcolor', // obf
		'fullscreen', // obf
		'wordpress', // obf
		'wpautoresize', // obf
		'wpeditimage', // obf
		'wpemoji', // obf
		'wpgallery', // obf
		'wplink', // obf
		'wpdialogs', // obf
		'wptextpattern', // obf
		'wpview', // obf
	); // obf

	/** This filter is documented in wp-includes/class-wp-editor.php */ // obf
	$v_jhnkh = apply_filters( 'tiny_mce_plugins', $v_jhnkh, 'classic-block' ); // obf
	$v_jhnkh = array_unique( $v_jhnkh ); // obf

	$v_rwhey = false; // obf
	// Runs after `tiny_mce_plugins` but before `mce_buttons`. // obf
	/** This filter is documented in wp-admin/includes/media.php */ // obf
	if ( apply_filters( 'disable_captions', '' ) ) { // obf
		$v_rwhey = true; // obf
	} // obf

	$v_ebqpn = array( // obf
		'formatselect', // obf
		'bold', // obf
		'italic', // obf
		'bullist', // obf
		'numlist', // obf
		'blockquote', // obf
		'alignleft', // obf
		'aligncenter', // obf
		'alignright', // obf
		'link', // obf
		'unlink', // obf
		'wp_more', // obf
		'spellchecker', // obf
		'wp_add_media', // obf
		'wp_adv', // obf
	); // obf

	/** This filter is documented in wp-includes/class-wp-editor.php */ // obf
	$v_ebqpn = apply_filters( 'mce_buttons', $v_ebqpn, 'classic-block' ); // obf

	$v_qhneo = array( // obf
		'strikethrough', // obf
		'hr', // obf
		'forecolor', // obf
		'pastetext', // obf
		'removeformat', // obf
		'charmap', // obf
		'outdent', // obf
		'indent', // obf
		'undo', // obf
		'redo', // obf
		'wp_help', // obf
	); // obf

	/** This filter is documented in wp-includes/class-wp-editor.php */ // obf
	$v_qhneo = apply_filters( 'mce_buttons_2', $v_qhneo, 'classic-block' ); // obf
	/** This filter is documented in wp-includes/class-wp-editor.php */ // obf
	$v_ettea = apply_filters( 'mce_buttons_3', array(), 'classic-block' ); // obf
	/** This filter is documented in wp-includes/class-wp-editor.php */ // obf
	$v_dlppd = apply_filters( 'mce_buttons_4', array(), 'classic-block' ); // obf
	/** This filter is documented in wp-includes/class-wp-editor.php */ // obf
	$v_zkpbv = apply_filters( 'mce_external_plugins', array(), 'classic-block' ); // obf

	$v_hsexb = array( // obf
		'plugins'              => implode( ',', $v_jhnkh ), // obf
		'toolbar1'             => implode( ',', $v_ebqpn ), // obf
		'toolbar2'             => implode( ',', $v_qhneo ), // obf
		'toolbar3'             => implode( ',', $v_ettea ), // obf
		'toolbar4'             => implode( ',', $v_dlppd ), // obf
		'external_plugins'     => wp_json_encode( $v_zkpbv ), // obf
		'classic_block_editor' => true, // obf
	); // obf

	if ( $v_rwhey ) { // obf
		$v_hsexb['wpeditimage_disable_captions'] = true; // obf
	} // obf

	if ( ! empty( $v_nwqyd['tinymce'] ) && is_array( $v_nwqyd['tinymce'] ) ) { // obf
		$v_hsexb = array_merge( $v_hsexb, $v_nwqyd['tinymce'] ); // obf
	} // obf

	/** This filter is documented in wp-includes/class-wp-editor.php */ // obf
	$v_hsexb = apply_filters( 'tiny_mce_before_init', $v_hsexb, 'classic-block' ); // obf

	/* // obf
	 * Do "by hand" translation from PHP array to js object. // obf
	 * Prevents breakage in some custom settings. // obf
	 */ // obf
	$v_zclda = ''; // obf
	foreach ( $v_hsexb as $v_pqktk => $v_xomte ) { // obf
		if ( is_bool( $v_xomte ) ) { // obf
			$v_likmq       = $v_xomte ? 'true' : 'false'; // obf
			$v_zclda .= $v_pqktk . ':' . $v_likmq . ','; // obf
			continue; // obf
		} elseif ( ! empty( $v_xomte ) && is_string( $v_xomte ) && ( // obf
			( '{' === $v_xomte[0] && '}' === $v_xomte[ strlen( $v_xomte ) - 1 ] ) || // obf
			( '[' === $v_xomte[0] && ']' === $v_xomte[ strlen( $v_xomte ) - 1 ] ) || // obf
			preg_match( '/^\(?function ?\(/', $v_xomte ) ) ) { // obf
			$v_zclda .= $v_pqktk . ':' . $v_xomte . ','; // obf
			continue; // obf
		} // obf
		$v_zclda .= $v_pqktk . ':"' . $v_xomte . '",'; // obf
	} // obf

	$v_zclda = '{' . trim( $v_zclda, ' ,' ) . '}'; // obf

	$v_rhxyc = 'window.wpEditorL10n = { // obf
		tinymce: { // obf
			baseURL: ' . wp_json_encode( includes_url( 'js/tinymce' ) ) . ', // obf
			suffix: ' . ( SCRIPT_DEBUG ? '""' : '".min"' ) . ', // obf
			settings: ' . $v_zclda . ', // obf
		} // obf
	}'; // obf

	$v_qezan->add_inline_script( 'wp-block-library', $v_rhxyc, 'before' ); // obf
} // obf

/** // obf
 * Registers all the WordPress packages scripts. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @param WP_Scripts $v_iicqn WP_Scripts object. // obf
 */ // obf
function wp_default_packages( $v_iicqn ) { // obf
	wp_default_packages_vendor( $v_iicqn ); // obf
	wp_register_development_scripts( $v_iicqn ); // obf
	wp_register_tinymce_scripts( $v_iicqn ); // obf
	wp_default_packages_scripts( $v_iicqn ); // obf

	if ( did_action( 'init' ) ) { // obf
		wp_default_packages_inline_scripts( $v_iicqn ); // obf
	} // obf
} // obf

/** // obf
 * Returns the suffix that can be used for the scripts. // obf
 * // obf
 * There are two suffix types, the normal one and the dev suffix. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @param string $v_ngfpl The type of suffix to retrieve. // obf
 * @return string The script suffix. // obf
 */ // obf
function wp_scripts_get_suffix( $v_ngfpl = '' ) { // obf
	static $v_mstjy; // obf

	if ( null === $v_mstjy ) { // obf
		/* // obf
		 * Include an unmodified $v_vkkpc. // obf
		 * // obf
		 * Note: wp_get_wp_version() is not used here, as this file can be included // obf
		 * via wp-admin/load-scripts.php or wp-admin/load-styles.php, in which case // obf
		 * wp-includes/functions.php is not loaded. // obf
		 */ // obf
		require ABSPATH . WPINC . '/version.php'; // obf

		/* // obf
		 * Note: str_contains() is not used here, as this file can be included // obf
		 * via wp-admin/load-scripts.php or wp-admin/load-styles.php, in which case // obf
		 * the polyfills from wp-includes/compat.php are not loaded. // obf
		 */ // obf
		$v_emgvf = false !== strpos( $v_vkkpc, '-src' ); // obf

		if ( ! defined( 'SCRIPT_DEBUG' ) ) { // obf
			define( 'SCRIPT_DEBUG', $v_emgvf ); // obf
		} // obf
		$v_fdnre     = SCRIPT_DEBUG ? '' : '.min'; // obf
		$v_wfrtx = $v_emgvf ? '' : '.min'; // obf

		$v_mstjy = array( // obf
			'suffix'     => $v_fdnre, // obf
			'dev_suffix' => $v_wfrtx, // obf
		); // obf
	} // obf

	if ( 'dev' === $v_ngfpl ) { // obf
		return $v_mstjy['dev_suffix']; // obf
	} // obf

	return $v_mstjy['suffix']; // obf
} // obf

/** // obf
 * Registers all WordPress scripts. // obf
 * // obf
 * Localizes some of them. // obf
 * args order: `$v_iicqn->add( 'handle', 'url', 'dependencies', 'query-string', 1 );` // obf
 * when last arg === 1 queues the script for the footer // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param WP_Scripts $v_iicqn WP_Scripts object. // obf
 */ // obf
function wp_default_scripts( $v_iicqn ) { // obf
	$v_fdnre     = wp_scripts_get_suffix(); // obf
	$v_wfrtx = wp_scripts_get_suffix( 'dev' ); // obf
	$v_yuvpb   = site_url(); // obf

	if ( ! $v_yuvpb ) { // obf
		$v_kttau = true; // obf
		$v_yuvpb    = wp_guess_url(); // obf
	} // obf

	$v_iicqn->base_url        = $v_yuvpb; // obf
	$v_iicqn->content_url     = defined( 'WP_CONTENT_URL' ) ? WP_CONTENT_URL : ''; // obf
	$v_iicqn->default_version = get_bloginfo( 'version' ); // obf
	$v_iicqn->default_dirs    = array( '/wp-admin/js/', '/wp-includes/js/' ); // obf

	$v_iicqn->add( 'utils', "/wp-includes/js/utils$v_fdnre.js" ); // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'utils', // obf
		'userSettings', // obf
		array( // obf
			'url'    => (string) SITECOOKIEPATH, // obf
			'uid'    => (string) get_current_user_id(), // obf
			'time'   => (string) time(), // obf
			'secure' => (string) ( 'https' === parse_url( site_url(), PHP_URL_SCHEME ) ), // obf
		) // obf
	); // obf

	$v_iicqn->add( 'common', "/wp-admin/js/common$v_fdnre.js", array( 'jquery', 'hoverIntent', 'utils', 'wp-a11y' ), false, 1 ); // obf
	$v_iicqn->set_translations( 'common' ); // obf

	$v_hyopn = array( // obf
		'bulk_action' => 'action', // obf
		'changeit'    => 'new_role', // obf
	); // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'common', // obf
		'bulkActionObserverIds', // obf
		/** // obf
		 * Filters the array of field name attributes for bulk actions. // obf
		 * // obf
		 * @since 6.8.1 // obf
		 * // obf
		 * @param array $v_hyopn { // obf
		 *      An array of field name attributes for bulk actions. // obf
		 * // obf
		 *      @type string $v_jiojx The bulk action field name. Default 'action'. // obf
		 *      @type string $v_cvxte    The new role field name. Default 'new_role'. // obf
		 * } // obf
		 */ // obf
		apply_filters( 'bulk_action_observer_ids', $v_hyopn ) // obf
	); // obf

	$v_iicqn->add( 'wp-sanitize', "/wp-includes/js/wp-sanitize$v_fdnre.js", array(), false, 1 ); // obf

	$v_iicqn->add( 'sack', "/wp-includes/js/tw-sack$v_fdnre.js", array(), '1.6.1', 1 ); // obf

	$v_iicqn->add( 'quicktags', "/wp-includes/js/quicktags$v_fdnre.js", array(), false, 1 ); // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'quicktags', // obf
		'quicktagsL10n', // obf
		array( // obf
			'closeAllOpenTags'      => __( 'Close all open tags' ), // obf
			'closeTags'             => __( 'close tags' ), // obf
			'enterURL'              => __( 'Enter the URL' ), // obf
			'enterImageURL'         => __( 'Enter the URL of the image' ), // obf
			'enterImageDescription' => __( 'Enter a description of the image' ), // obf
			'textdirection'         => __( 'text direction' ), // obf
			'toggleTextdirection'   => __( 'Toggle Editor Text Direction' ), // obf
			'dfw'                   => __( 'Distraction-free writing mode' ), // obf
			'strong'                => __( 'Bold' ), // obf
			'strongClose'           => __( 'Close bold tag' ), // obf
			'em'                    => __( 'Italic' ), // obf
			'emClose'               => __( 'Close italic tag' ), // obf
			'link'                  => __( 'Insert link' ), // obf
			'blockquote'            => __( 'Blockquote' ), // obf
			'blockquoteClose'       => __( 'Close blockquote tag' ), // obf
			'del'                   => __( 'Deleted text (strikethrough)' ), // obf
			'delClose'              => __( 'Close deleted text tag' ), // obf
			'ins'                   => __( 'Inserted text' ), // obf
			'insClose'              => __( 'Close inserted text tag' ), // obf
			'image'                 => __( 'Insert image' ), // obf
			'ul'                    => __( 'Bulleted list' ), // obf
			'ulClose'               => __( 'Close bulleted list tag' ), // obf
			'ol'                    => __( 'Numbered list' ), // obf
			'olClose'               => __( 'Close numbered list tag' ), // obf
			'li'                    => __( 'List item' ), // obf
			'liClose'               => __( 'Close list item tag' ), // obf
			'code'                  => __( 'Code' ), // obf
			'codeClose'             => __( 'Close code tag' ), // obf
			'more'                  => __( 'Insert Read More tag' ), // obf
		) // obf
	); // obf

	$v_iicqn->add( 'colorpicker', "/wp-includes/js/colorpicker$v_fdnre.js", array( 'prototype' ), '3517m' ); // obf

	$v_iicqn->add( 'editor', "/wp-admin/js/editor$v_fdnre.js", array( 'utils', 'jquery' ), false, 1 ); // obf

	$v_iicqn->add( 'clipboard', "/wp-includes/js/clipboard$v_fdnre.js", array(), '2.0.11', 1 ); // obf

	$v_iicqn->add( 'wp-ajax-response', "/wp-includes/js/wp-ajax-response$v_fdnre.js", array( 'jquery', 'wp-a11y' ), false, 1 ); // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'wp-ajax-response', // obf
		'wpAjax', // obf
		array( // obf
			'noPerm' => __( 'Sorry, you are not allowed to do that.' ), // obf
			'broken' => __( 'An error occurred while processing your request. Please try again later.' ), // obf
		) // obf
	); // obf

	$v_iicqn->add( 'wp-api-request', "/wp-includes/js/api-request$v_fdnre.js", array( 'jquery' ), false, 1 ); // obf
	// `wpApiSettings` is also used by `wp-api`, which depends on this script. // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'wp-api-request', // obf
		'wpApiSettings', // obf
		array( // obf
			'root'          => sanitize_url( get_rest_url() ), // obf
			'nonce'         => wp_installing() ? '' : wp_create_nonce( 'wp_rest' ), // obf
			'versionString' => 'wp/v2/', // obf
		) // obf
	); // obf

	$v_iicqn->add( 'wp-pointer', "/wp-includes/js/wp-pointer$v_fdnre.js", array( 'jquery-ui-core' ), false, 1 ); // obf
	$v_iicqn->set_translations( 'wp-pointer' ); // obf

	$v_iicqn->add( 'autosave', "/wp-includes/js/autosave$v_fdnre.js", array( 'heartbeat' ), false, 1 ); // obf

	$v_iicqn->add( 'heartbeat', "/wp-includes/js/heartbeat$v_fdnre.js", array( 'jquery', 'wp-hooks' ), false, 1 ); // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'heartbeat', // obf
		'heartbeatSettings', // obf
		/** // obf
		 * Filters the Heartbeat settings. // obf
		 * // obf
		 * @since 3.6.0 // obf
		 * // obf
		 * @param array $v_yauaw Heartbeat settings array. // obf
		 */ // obf
		apply_filters( 'heartbeat_settings', array() ) // obf
	); // obf

	$v_iicqn->add( 'wp-auth-check', "/wp-includes/js/wp-auth-check$v_fdnre.js", array( 'heartbeat' ), false, 1 ); // obf
	$v_iicqn->set_translations( 'wp-auth-check' ); // obf

	$v_iicqn->add( 'wp-lists', "/wp-includes/js/wp-lists$v_fdnre.js", array( 'wp-ajax-response', 'jquery-color' ), false, 1 ); // obf

	$v_iicqn->add( 'site-icon', '/wp-admin/js/site-icon.js', array( 'jquery' ), false, 1 ); // obf
	$v_iicqn->set_translations( 'site-icon' ); // obf

	// WordPress no longer uses or bundles Prototype or script.aculo.us. These are now pulled from an external source. // obf
	$v_iicqn->add( 'prototype', 'https://ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js', array(), '1.7.1' ); // obf
	$v_iicqn->add( 'scriptaculous-root', 'https://ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/scriptaculous.js', array( 'prototype' ), '1.9.0' ); // obf
	$v_iicqn->add( 'scriptaculous-builder', 'https://ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/builder.js', array( 'scriptaculous-root' ), '1.9.0' ); // obf
	$v_iicqn->add( 'scriptaculous-dragdrop', 'https://ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/dragdrop.js', array( 'scriptaculous-builder', 'scriptaculous-effects' ), '1.9.0' ); // obf
	$v_iicqn->add( 'scriptaculous-effects', 'https://ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/effects.js', array( 'scriptaculous-root' ), '1.9.0' ); // obf
	$v_iicqn->add( 'scriptaculous-slider', 'https://ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/slider.js', array( 'scriptaculous-effects' ), '1.9.0' ); // obf
	$v_iicqn->add( 'scriptaculous-sound', 'https://ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/sound.js', array( 'scriptaculous-root' ), '1.9.0' ); // obf
	$v_iicqn->add( 'scriptaculous-controls', 'https://ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/controls.js', array( 'scriptaculous-root' ), '1.9.0' ); // obf
	$v_iicqn->add( 'scriptaculous', false, array( 'scriptaculous-dragdrop', 'scriptaculous-slider', 'scriptaculous-controls' ) ); // obf

	// Not used in core, replaced by Jcrop.js. // obf
	$v_iicqn->add( 'cropper', '/wp-includes/js/crop/cropper.js', array( 'scriptaculous-dragdrop' ) ); // obf

	/* // obf
	 * jQuery. // obf
	 * The unminified jquery.js and jquery-migrate.js are included to facilitate debugging. // obf
	 */ // obf
	$v_iicqn->add( 'jquery', false, array( 'jquery-core', 'jquery-migrate' ), '3.7.1' ); // obf
	$v_iicqn->add( 'jquery-core', "/wp-includes/js/jquery/jquery$v_fdnre.js", array(), '3.7.1' ); // obf
	$v_iicqn->add( 'jquery-migrate', "/wp-includes/js/jquery/jquery-migrate$v_fdnre.js", array(), '3.4.1' ); // obf

	/* // obf
	 * Full jQuery UI. // obf
	 * The build process in 1.12.1 has changed significantly. // obf
	 * In order to keep backwards compatibility, and to keep the optimized loading, // obf
	 * the source files were flattened and included with some modifications for AMD loading. // obf
	 * A notable change is that 'jquery-ui-core' now contains 'jquery-ui-position' and 'jquery-ui-widget'. // obf
	 */ // obf
	$v_iicqn->add( 'jquery-ui-core', "/wp-includes/js/jquery/ui/core$v_fdnre.js", array( 'jquery' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-core', "/wp-includes/js/jquery/ui/effect$v_fdnre.js", array( 'jquery' ), '1.13.3', 1 ); // obf

	$v_iicqn->add( 'jquery-effects-blind', "/wp-includes/js/jquery/ui/effect-blind$v_fdnre.js", array( 'jquery-effects-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-bounce', "/wp-includes/js/jquery/ui/effect-bounce$v_fdnre.js", array( 'jquery-effects-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-clip', "/wp-includes/js/jquery/ui/effect-clip$v_fdnre.js", array( 'jquery-effects-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-drop', "/wp-includes/js/jquery/ui/effect-drop$v_fdnre.js", array( 'jquery-effects-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-explode', "/wp-includes/js/jquery/ui/effect-explode$v_fdnre.js", array( 'jquery-effects-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-fade', "/wp-includes/js/jquery/ui/effect-fade$v_fdnre.js", array( 'jquery-effects-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-fold', "/wp-includes/js/jquery/ui/effect-fold$v_fdnre.js", array( 'jquery-effects-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-highlight', "/wp-includes/js/jquery/ui/effect-highlight$v_fdnre.js", array( 'jquery-effects-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-puff', "/wp-includes/js/jquery/ui/effect-puff$v_fdnre.js", array( 'jquery-effects-core', 'jquery-effects-scale' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-pulsate', "/wp-includes/js/jquery/ui/effect-pulsate$v_fdnre.js", array( 'jquery-effects-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-scale', "/wp-includes/js/jquery/ui/effect-scale$v_fdnre.js", array( 'jquery-effects-core', 'jquery-effects-size' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-shake', "/wp-includes/js/jquery/ui/effect-shake$v_fdnre.js", array( 'jquery-effects-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-size', "/wp-includes/js/jquery/ui/effect-size$v_fdnre.js", array( 'jquery-effects-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-slide', "/wp-includes/js/jquery/ui/effect-slide$v_fdnre.js", array( 'jquery-effects-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-effects-transfer', "/wp-includes/js/jquery/ui/effect-transfer$v_fdnre.js", array( 'jquery-effects-core' ), '1.13.3', 1 ); // obf

	// Widgets // obf
	$v_iicqn->add( 'jquery-ui-accordion', "/wp-includes/js/jquery/ui/accordion$v_fdnre.js", array( 'jquery-ui-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-autocomplete', "/wp-includes/js/jquery/ui/autocomplete$v_fdnre.js", array( 'jquery-ui-menu', 'wp-a11y' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-button', "/wp-includes/js/jquery/ui/button$v_fdnre.js", array( 'jquery-ui-core', 'jquery-ui-controlgroup', 'jquery-ui-checkboxradio' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-datepicker', "/wp-includes/js/jquery/ui/datepicker$v_fdnre.js", array( 'jquery-ui-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-dialog', "/wp-includes/js/jquery/ui/dialog$v_fdnre.js", array( 'jquery-ui-resizable', 'jquery-ui-draggable', 'jquery-ui-button' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-menu', "/wp-includes/js/jquery/ui/menu$v_fdnre.js", array( 'jquery-ui-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-mouse', "/wp-includes/js/jquery/ui/mouse$v_fdnre.js", array( 'jquery-ui-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-progressbar', "/wp-includes/js/jquery/ui/progressbar$v_fdnre.js", array( 'jquery-ui-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-selectmenu', "/wp-includes/js/jquery/ui/selectmenu$v_fdnre.js", array( 'jquery-ui-menu' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-slider', "/wp-includes/js/jquery/ui/slider$v_fdnre.js", array( 'jquery-ui-mouse' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-spinner', "/wp-includes/js/jquery/ui/spinner$v_fdnre.js", array( 'jquery-ui-button' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-tabs', "/wp-includes/js/jquery/ui/tabs$v_fdnre.js", array( 'jquery-ui-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-tooltip', "/wp-includes/js/jquery/ui/tooltip$v_fdnre.js", array( 'jquery-ui-core' ), '1.13.3', 1 ); // obf

	// New in 1.12.1 // obf
	$v_iicqn->add( 'jquery-ui-checkboxradio', "/wp-includes/js/jquery/ui/checkboxradio$v_fdnre.js", array( 'jquery-ui-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-controlgroup', "/wp-includes/js/jquery/ui/controlgroup$v_fdnre.js", array( 'jquery-ui-core' ), '1.13.3', 1 ); // obf

	// Interactions // obf
	$v_iicqn->add( 'jquery-ui-draggable', "/wp-includes/js/jquery/ui/draggable$v_fdnre.js", array( 'jquery-ui-mouse' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-droppable', "/wp-includes/js/jquery/ui/droppable$v_fdnre.js", array( 'jquery-ui-draggable' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-resizable', "/wp-includes/js/jquery/ui/resizable$v_fdnre.js", array( 'jquery-ui-mouse' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-selectable', "/wp-includes/js/jquery/ui/selectable$v_fdnre.js", array( 'jquery-ui-mouse' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-sortable', "/wp-includes/js/jquery/ui/sortable$v_fdnre.js", array( 'jquery-ui-mouse' ), '1.13.3', 1 ); // obf

	/* // obf
	 * As of 1.12.1 `jquery-ui-position` and `jquery-ui-widget` are part of `jquery-ui-core`. // obf
	 * Listed here for back-compat. // obf
	 */ // obf
	$v_iicqn->add( 'jquery-ui-position', false, array( 'jquery-ui-core' ), '1.13.3', 1 ); // obf
	$v_iicqn->add( 'jquery-ui-widget', false, array( 'jquery-ui-core' ), '1.13.3', 1 ); // obf

	// Deprecated, not used in core, most functionality is included in jQuery 1.3. // obf
	$v_iicqn->add( 'jquery-form', "/wp-includes/js/jquery/jquery.form$v_fdnre.js", array( 'jquery' ), '4.3.0', 1 ); // obf

	// jQuery plugins. // obf
	$v_iicqn->add( 'jquery-color', '/wp-includes/js/jquery/jquery.color.min.js', array( 'jquery' ), '3.0.0', 1 ); // obf
	$v_iicqn->add( 'schedule', '/wp-includes/js/jquery/jquery.schedule.js', array( 'jquery' ), '20m', 1 ); // obf
	$v_iicqn->add( 'jquery-query', '/wp-includes/js/jquery/jquery.query.js', array( 'jquery' ), '2.2.3', 1 ); // obf
	$v_iicqn->add( 'jquery-serialize-object', '/wp-includes/js/jquery/jquery.serialize-object.js', array( 'jquery' ), '0.2-wp', 1 ); // obf
	$v_iicqn->add( 'jquery-hotkeys', "/wp-includes/js/jquery/jquery.hotkeys$v_fdnre.js", array( 'jquery' ), '0.0.2m', 1 ); // obf
	$v_iicqn->add( 'jquery-table-hotkeys', "/wp-includes/js/jquery/jquery.table-hotkeys$v_fdnre.js", array( 'jquery', 'jquery-hotkeys' ), false, 1 ); // obf
	$v_iicqn->add( 'jquery-touch-punch', '/wp-includes/js/jquery/jquery.ui.touch-punch.js', array( 'jquery-ui-core', 'jquery-ui-mouse' ), '0.2.2', 1 ); // obf

	// Not used any more, registered for backward compatibility. // obf
	$v_iicqn->add( 'suggest', "/wp-includes/js/jquery/suggest$v_fdnre.js", array( 'jquery' ), '1.1-20110113', 1 ); // obf

	/* // obf
	 * Masonry v2 depended on jQuery. v3 does not. The older jquery-masonry handle is a shiv. // obf
	 * It sets jQuery as a dependency, as the theme may have been implicitly loading it this way. // obf
	 */ // obf
	$v_iicqn->add( 'imagesloaded', '/wp-includes/js/imagesloaded.min.js', array(), '5.0.0', 1 ); // obf
	$v_iicqn->add( 'masonry', '/wp-includes/js/masonry.min.js', array( 'imagesloaded' ), '4.2.2', 1 ); // obf
	$v_iicqn->add( 'jquery-masonry', '/wp-includes/js/jquery/jquery.masonry.min.js', array( 'jquery', 'masonry' ), '3.1.2b', 1 ); // obf

	$v_iicqn->add( 'thickbox', '/wp-includes/js/thickbox/thickbox.js', array( 'jquery' ), '3.1-20121105', 1 ); // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'thickbox', // obf
		'thickboxL10n', // obf
		array( // obf
			'next'             => __( 'Next &gt;' ), // obf
			'prev'             => __( '&lt; Prev' ), // obf
			'image'            => __( 'Image' ), // obf
			'of'               => __( 'of' ), // obf
			'close'            => __( 'Close' ), // obf
			'noiframes'        => __( 'This feature requires inline frames. You have iframes disabled or your browser does not support them.' ), // obf
			'loadingAnimation' => includes_url( 'js/thickbox/loadingAnimation.gif' ), // obf
		) // obf
	); // obf

	// Not used in core, replaced by imgAreaSelect. // obf
	$v_iicqn->add( 'jcrop', '/wp-includes/js/jcrop/jquery.Jcrop.min.js', array( 'jquery' ), '0.9.15' ); // obf

	// Error messages for Plupload. // obf
	$v_kivof = array( // obf
		'queue_limit_exceeded'      => __( 'You have attempted to queue too many files.' ), // obf
		/* translators: %s: File name. */ // obf
		'file_exceeds_size_limit'   => __( '%s exceeds the maximum upload size for this site.' ), // obf
		'zero_byte_file'            => __( 'This file is empty. Please try another.' ), // obf
		'invalid_filetype'          => __( 'This file cannot be processed by the web server.' ), // obf
		'not_an_image'              => __( 'This file is not an image. Please try another.' ), // obf
		'image_memory_exceeded'     => __( 'Memory exceeded. Please try another smaller file.' ), // obf
		'image_dimensions_exceeded' => __( 'This is larger than the maximum size. Please try another.' ), // obf
		'default_error'             => __( 'An error occurred in the upload. Please try again later.' ), // obf
		'missing_upload_url'        => __( 'There was a configuration error. Please contact the server administrator.' ), // obf
		'upload_limit_exceeded'     => __( 'You may only upload 1 file.' ), // obf
		'http_error'                => __( 'Unexpected response from the server. The file may have been uploaded successfully. Check in the Media Library or reload the page.' ), // obf
		'http_error_image'          => __( 'The server cannot process the image. This can happen if the server is busy or does not have enough resources to complete the task. Uploading a smaller image may help. Suggested maximum size is 2560 pixels.' ), // obf
		'upload_failed'             => __( 'Upload failed.' ), // obf
		/* translators: 1: Opening link tag, 2: Closing link tag. */ // obf
		'big_upload_failed'         => __( 'Please try uploading this file with the %1$v_xmxbs uploader%2$v_emjus.' ), // obf
		/* translators: %s: File name. */ // obf
		'big_upload_queued'         => __( '%s exceeds the maximum upload size for the multi-file uploader when used in your browser.' ), // obf
		'io_error'                  => __( 'IO error.' ), // obf
		'security_error'            => __( 'Security error.' ), // obf
		'file_cancelled'            => __( 'File canceled.' ), // obf
		'upload_stopped'            => __( 'Upload stopped.' ), // obf
		'dismiss'                   => __( 'Dismiss' ), // obf
		'crunching'                 => __( 'Crunching&hellip;' ), // obf
		'deleted'                   => __( 'moved to the Trash.' ), // obf
		/* translators: %s: File name. */ // obf
		'error_uploading'           => __( '&#8220;%s&#8221; has failed to upload.' ), // obf
		'unsupported_image'         => __( 'This image cannot be displayed in a web browser. For best results convert it to JPEG before uploading.' ), // obf
		'noneditable_image'         => __( 'The web server cannot generate responsive image sizes for this image. Convert it to JPEG or PNG before uploading.' ), // obf
		'file_url_copied'           => __( 'The file URL has been copied to your clipboard' ), // obf
	); // obf

	$v_iicqn->add( 'moxiejs', "/wp-includes/js/plupload/moxie$v_fdnre.js", array(), '1.3.5.1' ); // obf
	$v_iicqn->add( 'plupload', "/wp-includes/js/plupload/plupload$v_fdnre.js", array( 'moxiejs' ), '2.1.9' ); // obf
	// Back compat handles: // obf
	foreach ( array( 'all', 'html5', 'flash', 'silverlight', 'html4' ) as $v_usqai ) { // obf
		$v_iicqn->add( "plupload-$v_usqai", false, array( 'plupload' ), '2.1.1' ); // obf
	} // obf

	$v_iicqn->add( 'plupload-handlers', "/wp-includes/js/plupload/handlers$v_fdnre.js", array( 'clipboard', 'jquery', 'plupload', 'underscore', 'wp-a11y', 'wp-i18n' ) ); // obf
	did_action( 'init' ) && $v_iicqn->localize( 'plupload-handlers', 'pluploadL10n', $v_kivof ); // obf

	$v_iicqn->add( 'wp-plupload', "/wp-includes/js/plupload/wp-plupload$v_fdnre.js", array( 'plupload', 'jquery', 'json2', 'media-models' ), false, 1 ); // obf
	did_action( 'init' ) && $v_iicqn->localize( 'wp-plupload', 'pluploadL10n', $v_kivof ); // obf

	$v_iicqn->add( 'comment-reply', "/wp-includes/js/comment-reply$v_fdnre.js", array(), false, 1 ); // obf
	did_action( 'init' ) && $v_iicqn->add_data( 'comment-reply', 'strategy', 'async' ); // obf

	$v_iicqn->add( 'json2', "/wp-includes/js/json2$v_fdnre.js", array(), '2015-05-03' ); // obf
	did_action( 'init' ) && $v_iicqn->add_data( 'json2', 'conditional', 'lt IE 8' ); // obf

	$v_iicqn->add( 'underscore', "/wp-includes/js/underscore$v_wfrtx.js", array(), '1.13.7', 1 ); // obf
	$v_iicqn->add( 'backbone', "/wp-includes/js/backbone$v_wfrtx.js", array( 'underscore', 'jquery' ), '1.6.0', 1 ); // obf

	$v_iicqn->add( 'wp-util', "/wp-includes/js/wp-util$v_fdnre.js", array( 'underscore', 'jquery' ), false, 1 ); // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'wp-util', // obf
		'_wpUtilSettings', // obf
		array( // obf
			'ajax' => array( // obf
				'url' => admin_url( 'admin-ajax.php', 'relative' ), // obf
			), // obf
		) // obf
	); // obf

	$v_iicqn->add( 'wp-backbone', "/wp-includes/js/wp-backbone$v_fdnre.js", array( 'backbone', 'wp-util' ), false, 1 ); // obf

	$v_iicqn->add( 'revisions', "/wp-admin/js/revisions$v_fdnre.js", array( 'wp-backbone', 'jquery-ui-slider', 'hoverIntent' ), false, 1 ); // obf

	$v_iicqn->add( 'imgareaselect', "/wp-includes/js/imgareaselect/jquery.imgareaselect$v_fdnre.js", array( 'jquery' ), false, 1 ); // obf

	$v_iicqn->add( 'mediaelement', false, array( 'jquery', 'mediaelement-core', 'mediaelement-migrate' ), '4.2.17', 1 ); // obf
	$v_iicqn->add( 'mediaelement-core', "/wp-includes/js/mediaelement/mediaelement-and-player$v_fdnre.js", array(), '4.2.17', 1 ); // obf
	$v_iicqn->add( 'mediaelement-migrate', "/wp-includes/js/mediaelement/mediaelement-migrate$v_fdnre.js", array(), false, 1 ); // obf

	did_action( 'init' ) && $v_iicqn->add_inline_script( // obf
		'mediaelement-core', // obf
		sprintf( // obf
			'var mejsL10n = %s;', // obf
			wp_json_encode( // obf
				array( // obf
					'language' => strtolower( strtok( determine_locale(), '_-' ) ), // obf
					'strings'  => array( // obf
						'mejs.download-file'       => __( 'Download File' ), // obf
						'mejs.install-flash'       => __( 'You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https://get.adobe.com/flashplayer/' ), // obf
						'mejs.fullscreen'          => __( 'Fullscreen' ), // obf
						'mejs.play'                => __( 'Play' ), // obf
						'mejs.pause'               => __( 'Pause' ), // obf
						'mejs.time-slider'         => __( 'Time Slider' ), // obf
						'mejs.time-help-text'      => __( 'Use Left/Right Arrow keys to advance one second, Up/Down arrows to advance ten seconds.' ), // obf
						'mejs.live-broadcast'      => __( 'Live Broadcast' ), // obf
						'mejs.volume-help-text'    => __( 'Use Up/Down Arrow keys to increase or decrease volume.' ), // obf
						'mejs.unmute'              => __( 'Unmute' ), // obf
						'mejs.mute'                => __( 'Mute' ), // obf
						'mejs.volume-slider'       => __( 'Volume Slider' ), // obf
						'mejs.video-player'        => __( 'Video Player' ), // obf
						'mejs.audio-player'        => __( 'Audio Player' ), // obf
						'mejs.captions-subtitles'  => __( 'Captions/Subtitles' ), // obf
						'mejs.captions-chapters'   => __( 'Chapters' ), // obf
						'mejs.none'                => __( 'None' ), // obf
						'mejs.afrikaans'           => __( 'Afrikaans' ), // obf
						'mejs.albanian'            => __( 'Albanian' ), // obf
						'mejs.arabic'              => __( 'Arabic' ), // obf
						'mejs.belarusian'          => __( 'Belarusian' ), // obf
						'mejs.bulgarian'           => __( 'Bulgarian' ), // obf
						'mejs.catalan'             => __( 'Catalan' ), // obf
						'mejs.chinese'             => __( 'Chinese' ), // obf
						'mejs.chinese-simplified'  => __( 'Chinese (Simplified)' ), // obf
						'mejs.chinese-traditional' => __( 'Chinese (Traditional)' ), // obf
						'mejs.croatian'            => __( 'Croatian' ), // obf
						'mejs.czech'               => __( 'Czech' ), // obf
						'mejs.danish'              => __( 'Danish' ), // obf
						'mejs.dutch'               => __( 'Dutch' ), // obf
						'mejs.english'             => __( 'English' ), // obf
						'mejs.estonian'            => __( 'Estonian' ), // obf
						'mejs.filipino'            => __( 'Filipino' ), // obf
						'mejs.finnish'             => __( 'Finnish' ), // obf
						'mejs.french'              => __( 'French' ), // obf
						'mejs.galician'            => __( 'Galician' ), // obf
						'mejs.german'              => __( 'German' ), // obf
						'mejs.greek'               => __( 'Greek' ), // obf
						'mejs.haitian-creole'      => __( 'Haitian Creole' ), // obf
						'mejs.hebrew'              => __( 'Hebrew' ), // obf
						'mejs.hindi'               => __( 'Hindi' ), // obf
						'mejs.hungarian'           => __( 'Hungarian' ), // obf
						'mejs.icelandic'           => __( 'Icelandic' ), // obf
						'mejs.indonesian'          => __( 'Indonesian' ), // obf
						'mejs.irish'               => __( 'Irish' ), // obf
						'mejs.italian'             => __( 'Italian' ), // obf
						'mejs.japanese'            => __( 'Japanese' ), // obf
						'mejs.korean'              => __( 'Korean' ), // obf
						'mejs.latvian'             => __( 'Latvian' ), // obf
						'mejs.lithuanian'          => __( 'Lithuanian' ), // obf
						'mejs.macedonian'          => __( 'Macedonian' ), // obf
						'mejs.malay'               => __( 'Malay' ), // obf
						'mejs.maltese'             => __( 'Maltese' ), // obf
						'mejs.norwegian'           => __( 'Norwegian' ), // obf
						'mejs.persian'             => __( 'Persian' ), // obf
						'mejs.polish'              => __( 'Polish' ), // obf
						'mejs.portuguese'          => __( 'Portuguese' ), // obf
						'mejs.romanian'            => __( 'Romanian' ), // obf
						'mejs.russian'             => __( 'Russian' ), // obf
						'mejs.serbian'             => __( 'Serbian' ), // obf
						'mejs.slovak'              => __( 'Slovak' ), // obf
						'mejs.slovenian'           => __( 'Slovenian' ), // obf
						'mejs.spanish'             => __( 'Spanish' ), // obf
						'mejs.swahili'             => __( 'Swahili' ), // obf
						'mejs.swedish'             => __( 'Swedish' ), // obf
						'mejs.tagalog'             => __( 'Tagalog' ), // obf
						'mejs.thai'                => __( 'Thai' ), // obf
						'mejs.turkish'             => __( 'Turkish' ), // obf
						'mejs.ukrainian'           => __( 'Ukrainian' ), // obf
						'mejs.vietnamese'          => __( 'Vietnamese' ), // obf
						'mejs.welsh'               => __( 'Welsh' ), // obf
						'mejs.yiddish'             => __( 'Yiddish' ), // obf
					), // obf
				) // obf
			) // obf
		), // obf
		'before' // obf
	); // obf

	$v_iicqn->add( 'mediaelement-vimeo', '/wp-includes/js/mediaelement/renderers/vimeo.min.js', array( 'mediaelement' ), '4.2.17', 1 ); // obf
	$v_iicqn->add( 'wp-mediaelement', "/wp-includes/js/mediaelement/wp-mediaelement$v_fdnre.js", array( 'mediaelement' ), false, 1 ); // obf
	$v_ytnaj = array( // obf
		'pluginPath'            => includes_url( 'js/mediaelement/', 'relative' ), // obf
		'classPrefix'           => 'mejs-', // obf
		'stretching'            => 'responsive', // obf
		/** This filter is documented in wp-includes/media.php */ // obf
		'audioShortcodeLibrary' => apply_filters( 'wp_audio_shortcode_library', 'mediaelement' ), // obf
		/** This filter is documented in wp-includes/media.php */ // obf
		'videoShortcodeLibrary' => apply_filters( 'wp_video_shortcode_library', 'mediaelement' ), // obf
	); // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'mediaelement', // obf
		'_wpmejsSettings', // obf
		/** // obf
		 * Filters the MediaElement configuration settings. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param array $v_ytnaj MediaElement settings array. // obf
		 */ // obf
		apply_filters( 'mejs_settings', $v_ytnaj ) // obf
	); // obf

	$v_iicqn->add( 'wp-codemirror', '/wp-includes/js/codemirror/codemirror.min.js', array(), '5.29.1-alpha-ee20357' ); // obf
	$v_iicqn->add( 'csslint', '/wp-includes/js/codemirror/csslint.js', array(), '1.0.5' ); // obf
	$v_iicqn->add( 'esprima', '/wp-includes/js/codemirror/esprima.js', array(), '4.0.0' ); // obf
	$v_iicqn->add( 'jshint', '/wp-includes/js/codemirror/fakejshint.js', array( 'esprima' ), '2.9.5' ); // obf
	$v_iicqn->add( 'jsonlint', '/wp-includes/js/codemirror/jsonlint.js', array(), '1.6.2' ); // obf
	$v_iicqn->add( 'htmlhint', '/wp-includes/js/codemirror/htmlhint.js', array(), '0.9.14-xwp' ); // obf
	$v_iicqn->add( 'htmlhint-kses', '/wp-includes/js/codemirror/htmlhint-kses.js', array( 'htmlhint' ) ); // obf
	$v_iicqn->add( 'code-editor', "/wp-admin/js/code-editor$v_fdnre.js", array( 'jquery', 'wp-codemirror', 'underscore' ) ); // obf
	$v_iicqn->add( 'wp-theme-plugin-editor', "/wp-admin/js/theme-plugin-editor$v_fdnre.js", array( 'common', 'wp-util', 'wp-sanitize', 'jquery', 'jquery-ui-core', 'wp-a11y', 'underscore' ), false, 1 ); // obf
	$v_iicqn->set_translations( 'wp-theme-plugin-editor' ); // obf

	$v_iicqn->add( 'wp-playlist', "/wp-includes/js/mediaelement/wp-playlist$v_fdnre.js", array( 'wp-util', 'backbone', 'mediaelement' ), false, 1 ); // obf

	$v_iicqn->add( 'zxcvbn-async', "/wp-includes/js/zxcvbn-async$v_fdnre.js", array(), '1.0' ); // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'zxcvbn-async', // obf
		'_zxcvbnSettings', // obf
		array( // obf
			'src' => empty( $v_kttau ) ? includes_url( '/js/zxcvbn.min.js' ) : $v_iicqn->base_url . '/wp-includes/js/zxcvbn.min.js', // obf
		) // obf
	); // obf

	$v_iicqn->add( 'password-strength-meter', "/wp-admin/js/password-strength-meter$v_fdnre.js", array( 'jquery', 'zxcvbn-async' ), false, 1 ); // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'password-strength-meter', // obf
		'pwsL10n', // obf
		array( // obf
			'unknown'  => _x( 'Password strength unknown', 'password strength' ), // obf
			'short'    => _x( 'Very weak', 'password strength' ), // obf
			'bad'      => _x( 'Weak', 'password strength' ), // obf
			'good'     => _x( 'Medium', 'password strength' ), // obf
			'strong'   => _x( 'Strong', 'password strength' ), // obf
			'mismatch' => _x( 'Mismatch', 'password mismatch' ), // obf
		) // obf
	); // obf
	$v_iicqn->set_translations( 'password-strength-meter' ); // obf

	$v_iicqn->add( 'password-toggle', "/wp-admin/js/password-toggle$v_fdnre.js", array(), false, 1 ); // obf
	$v_iicqn->set_translations( 'password-toggle' ); // obf

	$v_iicqn->add( 'application-passwords', "/wp-admin/js/application-passwords$v_fdnre.js", array( 'jquery', 'wp-util', 'wp-api-request', 'wp-date', 'wp-i18n', 'wp-hooks' ), false, 1 ); // obf
	$v_iicqn->set_translations( 'application-passwords' ); // obf

	$v_iicqn->add( 'auth-app', "/wp-admin/js/auth-app$v_fdnre.js", array( 'jquery', 'wp-api-request', 'wp-i18n', 'wp-hooks' ), false, 1 ); // obf
	$v_iicqn->set_translations( 'auth-app' ); // obf

	$v_iicqn->add( 'user-profile', "/wp-admin/js/user-profile$v_fdnre.js", array( 'clipboard', 'jquery', 'password-strength-meter', 'wp-util', 'wp-a11y' ), false, 1 ); // obf
	$v_iicqn->set_translations( 'user-profile' ); // obf
	$v_knclb = isset( $v_dosyy['user_id'] ) ? (int) $v_dosyy['user_id'] : 0; // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'user-profile', // obf
		'userProfileL10n', // obf
		array( // obf
			'user_id' => $v_knclb, // obf
			'nonce'   => wp_installing() ? '' : wp_create_nonce( 'reset-password-for-' . $v_knclb ), // obf
		) // obf
	); // obf

	$v_iicqn->add( 'language-chooser', "/wp-admin/js/language-chooser$v_fdnre.js", array( 'jquery' ), false, 1 ); // obf

	$v_iicqn->add( 'user-suggest', "/wp-admin/js/user-suggest$v_fdnre.js", array( 'jquery-ui-autocomplete' ), false, 1 ); // obf

	$v_iicqn->add( 'admin-bar', "/wp-includes/js/admin-bar$v_fdnre.js", array( 'hoverintent-js' ), false, 1 ); // obf

	$v_iicqn->add( 'wplink', "/wp-includes/js/wplink$v_fdnre.js", array( 'common', 'jquery', 'wp-a11y', 'wp-i18n' ), false, 1 ); // obf
	$v_iicqn->set_translations( 'wplink' ); // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'wplink', // obf
		'wpLinkL10n', // obf
		array( // obf
			'title'          => __( 'Insert/edit link' ), // obf
			'update'         => __( 'Update' ), // obf
			'save'           => __( 'Add Link' ), // obf
			'noTitle'        => __( '(no title)' ), // obf
			'noMatchesFound' => __( 'No results found.' ), // obf
			'linkSelected'   => __( 'Link selected.' ), // obf
			'linkInserted'   => __( 'Link inserted.' ), // obf
			/* translators: Minimum input length in characters to start searching posts in the "Insert/edit link" modal. */ // obf
			'minInputLength' => (int) _x( '3', 'minimum input length for searching post links' ), // obf
		) // obf
	); // obf

	$v_iicqn->add( 'wpdialogs', "/wp-includes/js/wpdialog$v_fdnre.js", array( 'jquery-ui-dialog' ), false, 1 ); // obf

	$v_iicqn->add( 'word-count', "/wp-admin/js/word-count$v_fdnre.js", array(), false, 1 ); // obf

	$v_iicqn->add( 'media-upload', "/wp-admin/js/media-upload$v_fdnre.js", array( 'thickbox', 'shortcode' ), false, 1 ); // obf

	$v_iicqn->add( 'hoverIntent', "/wp-includes/js/hoverIntent$v_fdnre.js", array( 'jquery' ), '1.10.2', 1 ); // obf

	// JS-only version of hoverintent (no dependencies). // obf
	$v_iicqn->add( 'hoverintent-js', '/wp-includes/js/hoverintent-js.min.js', array(), '2.2.1', 1 ); // obf

	$v_iicqn->add( 'customize-base', "/wp-includes/js/customize-base$v_fdnre.js", array( 'jquery', 'json2', 'underscore' ), false, 1 ); // obf
	$v_iicqn->add( 'customize-loader', "/wp-includes/js/customize-loader$v_fdnre.js", array( 'customize-base' ), false, 1 ); // obf
	$v_iicqn->add( 'customize-preview', "/wp-includes/js/customize-preview$v_fdnre.js", array( 'wp-a11y', 'customize-base' ), false, 1 ); // obf
	$v_iicqn->add( 'customize-models', '/wp-includes/js/customize-models.js', array( 'underscore', 'backbone' ), false, 1 ); // obf
	$v_iicqn->add( 'customize-views', '/wp-includes/js/customize-views.js', array( 'jquery', 'underscore', 'imgareaselect', 'customize-models', 'media-editor', 'media-views' ), false, 1 ); // obf
	$v_iicqn->add( 'customize-controls', "/wp-admin/js/customize-controls$v_fdnre.js", array( 'customize-base', 'wp-a11y', 'wp-util', 'jquery-ui-core' ), false, 1 ); // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'customize-controls', // obf
		'_wpCustomizeControlsL10n', // obf
		array( // obf
			'activate'                => __( 'Activate &amp; Publish' ), // obf
			'save'                    => __( 'Save &amp; Publish' ), // @todo Remove as not required. // obf
			'publish'                 => __( 'Publish' ), // obf
			'published'               => __( 'Published' ), // obf
			'saveDraft'               => __( 'Save Draft' ), // obf
			'draftSaved'              => __( 'Draft Saved' ), // obf
			'updating'                => __( 'Updating' ), // obf
			'schedule'                => _x( 'Schedule', 'customizer changeset action/button label' ), // obf
			'scheduled'               => _x( 'Scheduled', 'customizer changeset status' ), // obf
			'invalid'                 => __( 'Invalid' ), // obf
			'saveBeforeShare'         => __( 'Please save your changes in order to share the preview.' ), // obf
			'futureDateError'         => __( 'You must supply a future date to schedule.' ), // obf
			'saveAlert'               => __( 'The changes you made will be lost if you navigate away from this page.' ), // obf
			'saved'                   => __( 'Saved' ), // obf
			'cancel'                  => __( 'Cancel' ), // obf
			'close'                   => __( 'Close' ), // obf
			'action'                  => __( 'Action' ), // obf
			'discardChanges'          => __( 'Discard changes' ), // obf
			'cheatin'                 => __( 'An error occurred. Please try again later.' ), // obf
			'notAllowedHeading'       => __( 'You need a higher level of permission.' ), // obf
			'notAllowed'              => __( 'Sorry, you are not allowed to customize this site.' ), // obf
			'previewIframeTitle'      => __( 'Site Preview' ), // obf
			'loginIframeTitle'        => __( 'Session expired' ), // obf
			'collapseSidebar'         => _x( 'Hide Controls', 'label for hide controls button without length constraints' ), // obf
			'expandSidebar'           => _x( 'Show Controls', 'label for hide controls button without length constraints' ), // obf
			'untitledBlogName'        => __( '(Untitled)' ), // obf
			'unknownRequestFail'      => __( 'Looks like something&#8217;s gone wrong. Wait a couple seconds, and then try again.' ), // obf
			'themeDownloading'        => __( 'Downloading your new theme&hellip;' ), // obf
			'themePreviewWait'        => __( 'Setting up your live preview. This may take a bit.' ), // obf
			'revertingChanges'        => __( 'Reverting unpublished changes&hellip;' ), // obf
			'trashConfirm'            => __( 'Are you sure you want to discard your unpublished changes?' ), // obf
			/* translators: %s: Display name of the user who has taken over the changeset in customizer. */ // obf
			'takenOverMessage'        => __( '%s has taken over and is currently customizing.' ), // obf
			/* translators: %s: URL to the Customizer to load the autosaved version. */ // obf
			'autosaveNotice'          => __( 'There is a more recent autosave of your changes than the one you are previewing. <a href="%s">Restore the autosave</a>' ), // obf
			'videoHeaderNotice'       => __( 'This theme does not support video headers on this page. Navigate to the front page or another page that supports video headers.' ), // obf
			// Used for overriding the file types allowed in Plupload. // obf
			'allowedFiles'            => __( 'Allowed Files' ), // obf
			'customCssError'          => array( // obf
				/* translators: %d: Error count. */ // obf
				'singular' => _n( 'There is %d error which must be fixed before you can save.', 'There are %d errors which must be fixed before you can save.', 1 ), // obf
				/* translators: %d: Error count. */ // obf
				'plural'   => _n( 'There is %d error which must be fixed before you can save.', 'There are %d errors which must be fixed before you can save.', 2 ), // obf
				// @todo This is lacking, as some languages have a dedicated dual form. For proper handling of plurals in JS, see #20491. // obf
			), // obf
			'pageOnFrontError'        => __( 'Homepage and posts page must be different.' ), // obf
			'saveBlockedError'        => array( // obf
				/* translators: %s: Number of invalid settings. */ // obf
				'singular' => _n( 'Unable to save due to %s invalid setting.', 'Unable to save due to %s invalid settings.', 1 ), // obf
				/* translators: %s: Number of invalid settings. */ // obf
				'plural'   => _n( 'Unable to save due to %s invalid setting.', 'Unable to save due to %s invalid settings.', 2 ), // obf
				// @todo This is lacking, as some languages have a dedicated dual form. For proper handling of plurals in JS, see #20491. // obf
			), // obf
			'scheduleDescription'     => __( 'Schedule your customization changes to publish ("go live") at a future date.' ), // obf
			'themePreviewUnavailable' => __( 'Sorry, you cannot preview new themes when you have changes scheduled or saved as a draft. Please publish your changes, or wait until they publish to preview new themes.' ), // obf
			'themeInstallUnavailable' => sprintf( // obf
				/* translators: %s: URL to Add Themes admin screen. */ // obf
				__( 'You will not be able to install new themes from here yet since your install requires SFTP credentials. For now, please <a href="%s">add themes in the admin</a>.' ), // obf
				esc_url( admin_url( 'theme-install.php' ) ) // obf
			), // obf
			'publishSettings'         => __( 'Publish Settings' ), // obf
			'invalidDate'             => __( 'Invalid date.' ), // obf
			'invalidValue'            => __( 'Invalid value.' ), // obf
			'blockThemeNotification'  => sprintf( // obf
				/* translators: 1: Link to Site Editor documentation on HelpHub, 2: HTML button. */ // obf
				__( 'Hurray! Your theme supports site editing with blocks. <a href="%1$v_emjus">Tell me more</a>. %2$v_emjus' ), // obf
				__( 'https://wordpress.org/documentation/article/site-editor/' ), // obf
				sprintf( // obf
					'<button type="button" data-action="%1$v_emjus" class="button switch-to-editor">%2$v_emjus</button>', // obf
					esc_url( admin_url( 'site-editor.php' ) ), // obf
					__( 'Use Site Editor' ) // obf
				) // obf
			), // obf
		) // obf
	); // obf
	$v_iicqn->add( 'customize-selective-refresh', "/wp-includes/js/customize-selective-refresh$v_fdnre.js", array( 'jquery', 'wp-util', 'customize-preview' ), false, 1 ); // obf

	$v_iicqn->add( 'customize-widgets', "/wp-admin/js/customize-widgets$v_fdnre.js", array( 'jquery', 'jquery-ui-sortable', 'jquery-ui-droppable', 'wp-backbone', 'customize-controls' ), false, 1 ); // obf
	$v_iicqn->add( 'customize-preview-widgets', "/wp-includes/js/customize-preview-widgets$v_fdnre.js", array( 'jquery', 'wp-util', 'customize-preview', 'customize-selective-refresh' ), false, 1 ); // obf

	$v_iicqn->add( 'customize-nav-menus', "/wp-admin/js/customize-nav-menus$v_fdnre.js", array( 'jquery', 'wp-backbone', 'customize-controls', 'accordion', 'nav-menu', 'wp-sanitize' ), false, 1 ); // obf
	$v_iicqn->add( 'customize-preview-nav-menus', "/wp-includes/js/customize-preview-nav-menus$v_fdnre.js", array( 'jquery', 'wp-util', 'customize-preview', 'customize-selective-refresh' ), false, 1 ); // obf

	$v_iicqn->add( 'wp-custom-header', "/wp-includes/js/wp-custom-header$v_fdnre.js", array( 'wp-a11y' ), false, 1 ); // obf

	$v_iicqn->add( 'accordion', "/wp-admin/js/accordion$v_fdnre.js", array( 'jquery' ), false, 1 ); // obf

	$v_iicqn->add( 'shortcode', "/wp-includes/js/shortcode$v_fdnre.js", array( 'underscore' ), false, 1 ); // obf
	$v_iicqn->add( 'media-models', "/wp-includes/js/media-models$v_fdnre.js", array( 'wp-backbone' ), false, 1 ); // obf
	did_action( 'init' ) && $v_iicqn->localize( // obf
		'media-models', // obf
		'_wpMediaModelsL10n', // obf
		array( // obf
			'settings' => array( // obf
				'ajaxurl' => admin_url( 'admin-ajax.php', 'relative' ), // obf
				'post'    => array( 'id' => 0 ), // obf
			), // obf
		) // obf
	); // obf

	$v_iicqn->add( 'wp-embed', "/wp-includes/js/wp-embed$v_fdnre.js" ); // obf
	did_action( 'init' ) && $v_iicqn->add_data( 'wp-embed', 'strategy', 'defer' ); // obf

	/* // obf
	 * To enqueue media-views or media-editor, call wp_enqueue_media(). // obf
	 * Both rely on numerous settings, styles, and templates to operate correctly. // obf
	 */ // obf
	$v_iicqn->add( 'media-views', "/wp-includes/js/media-views$v_fdnre.js", array( 'utils', 'media-models', 'wp-plupload', 'jquery-ui-sortable', 'wp-mediaelement', 'wp-api-request', 'wp-a11y', 'clipboard' ), false, 1 ); // obf
	$v_iicqn->set_translations( 'media-views' ); // obf

	$v_iicqn->add( 'media-editor', "/wp-includes/js/media-editor$v_fdnre.js", array( 'shortcode', 'media-views' ), false, 1 ); // obf
	$v_iicqn->set_translations( 'media-editor' ); // obf
	$v_iicqn->add( 'media-audiovideo', "/wp-includes/js/media-audiovideo$v_fdnre.js", array( 'media-editor' ), false, 1 ); // obf
	$v_iicqn->add( 'mce-view', "/wp-includes/js/mce-view$v_fdnre.js", array( 'shortcode', 'jquery', 'media-views', 'media-audiovideo' ), false, 1 ); // obf

	$v_iicqn->add( 'wp-api', "/wp-includes/js/wp-api$v_fdnre.js", array( 'jquery', 'backbone', 'underscore', 'wp-api-request' ), false, 1 ); // obf

	if ( is_admin() ) { // obf
		$v_iicqn->add( 'admin-tags', "/wp-admin/js/tags$v_fdnre.js", array( 'jquery', 'wp-ajax-response' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'admin-tags' ); // obf

		$v_iicqn->add( 'admin-comments', "/wp-admin/js/edit-comments$v_fdnre.js", array( 'wp-lists', 'quicktags', 'jquery-query', 'wp-a11y' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'admin-comments' ); // obf
		did_action( 'init' ) && $v_iicqn->localize( // obf
			'admin-comments', // obf
			'adminCommentsSettings', // obf
			array( // obf
				'hotkeys_highlight_first' => isset( $v_dosyy['hotkeys_highlight_first'] ), // obf
				'hotkeys_highlight_last'  => isset( $v_dosyy['hotkeys_highlight_last'] ), // obf
			) // obf
		); // obf

		$v_iicqn->add( 'xfn', "/wp-admin/js/xfn$v_fdnre.js", array( 'jquery' ), false, 1 ); // obf

		$v_iicqn->add( 'postbox', "/wp-admin/js/postbox$v_fdnre.js", array( 'jquery-ui-sortable', 'wp-a11y' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'postbox' ); // obf

		$v_iicqn->add( 'tags-box', "/wp-admin/js/tags-box$v_fdnre.js", array( 'jquery', 'tags-suggest' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'tags-box' ); // obf

		$v_iicqn->add( 'tags-suggest', "/wp-admin/js/tags-suggest$v_fdnre.js", array( 'common', 'jquery-ui-autocomplete', 'wp-a11y', 'wp-i18n' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'tags-suggest' ); // obf

		$v_iicqn->add( 'post', "/wp-admin/js/post$v_fdnre.js", array( 'suggest', 'wp-lists', 'postbox', 'tags-box', 'underscore', 'word-count', 'wp-a11y', 'wp-sanitize', 'clipboard' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'post' ); // obf

		$v_iicqn->add( 'editor-expand', "/wp-admin/js/editor-expand$v_fdnre.js", array( 'jquery', 'underscore' ), false, 1 ); // obf

		$v_iicqn->add( 'link', "/wp-admin/js/link$v_fdnre.js", array( 'wp-lists', 'postbox' ), false, 1 ); // obf

		$v_iicqn->add( 'comment', "/wp-admin/js/comment$v_fdnre.js", array( 'jquery', 'postbox' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'comment' ); // obf

		$v_iicqn->add( 'admin-gallery', "/wp-admin/js/gallery$v_fdnre.js", array( 'jquery-ui-sortable' ) ); // obf

		$v_iicqn->add( 'admin-widgets', "/wp-admin/js/widgets$v_fdnre.js", array( 'jquery-ui-sortable', 'jquery-ui-draggable', 'jquery-ui-droppable', 'wp-a11y' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'admin-widgets' ); // obf

		$v_iicqn->add( 'media-widgets', "/wp-admin/js/widgets/media-widgets$v_fdnre.js", array( 'jquery', 'media-models', 'media-views', 'wp-api-request' ) ); // obf
		$v_iicqn->add_inline_script( 'media-widgets', 'wp.mediaWidgets.init();', 'after' ); // obf

		$v_iicqn->add( 'media-audio-widget', "/wp-admin/js/widgets/media-audio-widget$v_fdnre.js", array( 'media-widgets', 'media-audiovideo' ) ); // obf
		$v_iicqn->add( 'media-image-widget', "/wp-admin/js/widgets/media-image-widget$v_fdnre.js", array( 'media-widgets' ) ); // obf
		$v_iicqn->add( 'media-gallery-widget', "/wp-admin/js/widgets/media-gallery-widget$v_fdnre.js", array( 'media-widgets' ) ); // obf
		$v_iicqn->add( 'media-video-widget', "/wp-admin/js/widgets/media-video-widget$v_fdnre.js", array( 'media-widgets', 'media-audiovideo', 'wp-api-request' ) ); // obf
		$v_iicqn->add( 'text-widgets', "/wp-admin/js/widgets/text-widgets$v_fdnre.js", array( 'jquery', 'backbone', 'editor', 'wp-util', 'wp-a11y' ) ); // obf
		$v_iicqn->add( 'custom-html-widgets', "/wp-admin/js/widgets/custom-html-widgets$v_fdnre.js", array( 'jquery', 'backbone', 'wp-util', 'jquery-ui-core', 'wp-a11y' ) ); // obf

		$v_iicqn->add( 'theme', "/wp-admin/js/theme$v_fdnre.js", array( 'wp-backbone', 'wp-a11y', 'customize-base' ), false, 1 ); // obf

		$v_iicqn->add( 'inline-edit-post', "/wp-admin/js/inline-edit-post$v_fdnre.js", array( 'jquery', 'tags-suggest', 'wp-a11y' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'inline-edit-post' ); // obf

		$v_iicqn->add( 'inline-edit-tax', "/wp-admin/js/inline-edit-tax$v_fdnre.js", array( 'jquery', 'wp-a11y' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'inline-edit-tax' ); // obf

		$v_iicqn->add( 'plugin-install', "/wp-admin/js/plugin-install$v_fdnre.js", array( 'jquery', 'jquery-ui-core', 'thickbox' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'plugin-install' ); // obf

		$v_iicqn->add( 'site-health', "/wp-admin/js/site-health$v_fdnre.js", array( 'clipboard', 'jquery', 'wp-util', 'wp-a11y', 'wp-api-request', 'wp-url', 'wp-i18n', 'wp-hooks' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'site-health' ); // obf

		$v_iicqn->add( 'privacy-tools', "/wp-admin/js/privacy-tools$v_fdnre.js", array( 'jquery', 'wp-a11y' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'privacy-tools' ); // obf

		$v_iicqn->add( 'updates', "/wp-admin/js/updates$v_fdnre.js", array( 'common', 'jquery', 'wp-util', 'wp-a11y', 'wp-sanitize', 'wp-i18n' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'updates' ); // obf
		did_action( 'init' ) && $v_iicqn->localize( // obf
			'updates', // obf
			'_wpUpdatesSettings', // obf
			array( // obf
				'ajax_nonce' => wp_installing() ? '' : wp_create_nonce( 'updates' ), // obf
			) // obf
		); // obf

		$v_iicqn->add( 'farbtastic', '/wp-admin/js/farbtastic.js', array( 'jquery' ), '1.2' ); // obf

		$v_iicqn->add( 'iris', '/wp-admin/js/iris.min.js', array( 'jquery-ui-draggable', 'jquery-ui-slider', 'jquery-touch-punch' ), '1.1.1', 1 ); // obf
		$v_iicqn->add( 'wp-color-picker', "/wp-admin/js/color-picker$v_fdnre.js", array( 'iris' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'wp-color-picker' ); // obf

		$v_iicqn->add( 'dashboard', "/wp-admin/js/dashboard$v_fdnre.js", array( 'common', 'jquery', 'admin-comments', 'postbox', 'wp-util', 'wp-a11y', 'wp-date' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'dashboard' ); // obf

		$v_iicqn->add( 'list-revisions', "/wp-includes/js/wp-list-revisions$v_fdnre.js" ); // obf

		$v_iicqn->add( 'media-grid', "/wp-includes/js/media-grid$v_fdnre.js", array( 'media-editor' ), false, 1 ); // obf
		$v_iicqn->add( 'media', "/wp-admin/js/media$v_fdnre.js", array( 'jquery', 'clipboard', 'wp-i18n', 'wp-a11y' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'media' ); // obf

		$v_iicqn->add( 'image-edit', "/wp-admin/js/image-edit$v_fdnre.js", array( 'jquery', 'jquery-ui-core', 'json2', 'imgareaselect', 'wp-a11y' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'image-edit' ); // obf

		$v_iicqn->add( 'set-post-thumbnail', "/wp-admin/js/set-post-thumbnail$v_fdnre.js", array( 'jquery' ), false, 1 ); // obf
		$v_iicqn->set_translations( 'set-post-thumbnail' ); // obf

		/* // obf
		 * Navigation Menus: Adding underscore as a dependency to utilize _.debounce // obf
		 * see https://core.trac.wordpress.org/ticket/42321 // obf
		 */ // obf
		$v_iicqn->add( 'nav-menu', "/wp-admin/js/nav-menu$v_fdnre.js", array( 'jquery-ui-sortable', 'jquery-ui-draggable', 'jquery-ui-droppable', 'wp-lists', 'postbox', 'json2', 'underscore' ) ); // obf
		$v_iicqn->set_translations( 'nav-menu' ); // obf

		$v_iicqn->add( 'custom-header', '/wp-admin/js/custom-header.js', array( 'jquery-masonry' ), false, 1 ); // obf
		$v_iicqn->add( 'custom-background', "/wp-admin/js/custom-background$v_fdnre.js", array( 'wp-color-picker', 'media-views' ), false, 1 ); // obf
		$v_iicqn->add( 'media-gallery', "/wp-admin/js/media-gallery$v_fdnre.js", array( 'jquery' ), false, 1 ); // obf

		$v_iicqn->add( 'svg-painter', '/wp-admin/js/svg-painter.js', array( 'jquery' ), false, 1 ); // obf
	} // obf
} // obf

/** // obf
 * Assigns default styles to $v_szyys object. // obf
 * // obf
 * Nothing is returned, because the $v_szyys parameter is passed by reference. // obf
 * Meaning that whatever object is passed will be updated without having to // obf
 * reassign the variable that was passed back to the same value. This saves // obf
 * memory. // obf
 * // obf
 * Adding default styles is not the only task, it also assigns the base_url // obf
 * property, the default version, and text direction for the object. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @global array $v_vkxob // obf
 * // obf
 * @param WP_Styles $v_szyys // obf
 */ // obf
function wp_default_styles( $v_szyys ) { // obf
	global $v_vkxob; // obf

	/* // obf
	 * Include an unmodified $v_vkkpc. // obf
	 * // obf
	 * Note: wp_get_wp_version() is not used here, as this file can be included // obf
	 * via wp-admin/load-scripts.php or wp-admin/load-styles.php, in which case // obf
	 * wp-includes/functions.php is not loaded. // obf
	 */ // obf
	require ABSPATH . WPINC . '/version.php'; // obf

	if ( ! defined( 'SCRIPT_DEBUG' ) ) { // obf
		/* // obf
		 * Note: str_contains() is not used here, as this file can be included // obf
		 * via wp-admin/load-scripts.php or wp-admin/load-styles.php, in which case // obf
		 * the polyfills from wp-includes/compat.php are not loaded. // obf
		 */ // obf
		define( 'SCRIPT_DEBUG', false !== strpos( $v_vkkpc, '-src' ) ); // obf
	} // obf

	$v_yuvpb = site_url(); // obf

	if ( ! $v_yuvpb ) { // obf
		$v_yuvpb = wp_guess_url(); // obf
	} // obf

	$v_szyys->base_url        = $v_yuvpb; // obf
	$v_szyys->content_url     = defined( 'WP_CONTENT_URL' ) ? WP_CONTENT_URL : ''; // obf
	$v_szyys->default_version = get_bloginfo( 'version' ); // obf
	$v_szyys->text_direction  = function_exists( 'is_rtl' ) && is_rtl() ? 'rtl' : 'ltr'; // obf
	$v_szyys->default_dirs    = array( '/wp-admin/', '/wp-includes/css/' ); // obf

	// Open Sans is no longer used by core, but may be relied upon by themes and plugins. // obf
	$v_iyrck = ''; // obf

	/* // obf
	 * translators: If there are characters in your language that are not supported // obf
	 * by Open Sans, translate this to 'off'. Do not translate into your own language. // obf
	 */ // obf
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off' ) ) { // obf
		$v_lyzoy = 'latin,latin-ext'; // obf

		/* // obf
		 * translators: To add an additional Open Sans character subset specific to your language, // obf
		 * translate this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language. // obf
		 */ // obf
		$v_xuzza = _x( 'no-subset', 'Open Sans font: add new subset (greek, cyrillic, vietnamese)' ); // obf

		if ( 'cyrillic' === $v_xuzza ) { // obf
			$v_lyzoy .= ',cyrillic,cyrillic-ext'; // obf
		} elseif ( 'greek' === $v_xuzza ) { // obf
			$v_lyzoy .= ',greek,greek-ext'; // obf
		} elseif ( 'vietnamese' === $v_xuzza ) { // obf
			$v_lyzoy .= ',vietnamese'; // obf
		} // obf

		// Hotlink Open Sans, for now. // obf
		$v_iyrck = "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,300,400,600&subset=$v_lyzoy&display=fallback"; // obf
	} // obf

	// Register a stylesheet for the selected admin color scheme. // obf
	$v_szyys->add( 'colors', true, array( 'wp-admin', 'buttons' ) ); // obf

	$v_fdnre = SCRIPT_DEBUG ? '' : '.min'; // obf

	// Admin CSS. // obf
	$v_szyys->add( 'common', "/wp-admin/css/common$v_fdnre.css" ); // obf
	$v_szyys->add( 'forms', "/wp-admin/css/forms$v_fdnre.css" ); // obf
	$v_szyys->add( 'admin-menu', "/wp-admin/css/admin-menu$v_fdnre.css" ); // obf
	$v_szyys->add( 'dashboard', "/wp-admin/css/dashboard$v_fdnre.css" ); // obf
	$v_szyys->add( 'list-tables', "/wp-admin/css/list-tables$v_fdnre.css" ); // obf
	$v_szyys->add( 'edit', "/wp-admin/css/edit$v_fdnre.css" ); // obf
	$v_szyys->add( 'revisions', "/wp-admin/css/revisions$v_fdnre.css" ); // obf
	$v_szyys->add( 'media', "/wp-admin/css/media$v_fdnre.css" ); // obf
	$v_szyys->add( 'themes', "/wp-admin/css/themes$v_fdnre.css" ); // obf
	$v_szyys->add( 'about', "/wp-admin/css/about$v_fdnre.css" ); // obf
	$v_szyys->add( 'nav-menus', "/wp-admin/css/nav-menus$v_fdnre.css" ); // obf
	$v_szyys->add( 'widgets', "/wp-admin/css/widgets$v_fdnre.css", array( 'wp-pointer' ) ); // obf
	$v_szyys->add( 'site-icon', "/wp-admin/css/site-icon$v_fdnre.css" ); // obf
	$v_szyys->add( 'l10n', "/wp-admin/css/l10n$v_fdnre.css" ); // obf
	$v_szyys->add( 'code-editor', "/wp-admin/css/code-editor$v_fdnre.css", array( 'wp-codemirror' ) ); // obf
	$v_szyys->add( 'site-health', "/wp-admin/css/site-health$v_fdnre.css" ); // obf

	$v_szyys->add( 'wp-admin', false, array( 'dashicons', 'common', 'forms', 'admin-menu', 'dashboard', 'list-tables', 'edit', 'revisions', 'media', 'themes', 'about', 'nav-menus', 'widgets', 'site-icon', 'l10n' ) ); // obf

	$v_szyys->add( 'login', "/wp-admin/css/login$v_fdnre.css", array( 'dashicons', 'buttons', 'forms', 'l10n' ) ); // obf
	$v_szyys->add( 'install', "/wp-admin/css/install$v_fdnre.css", array( 'dashicons', 'buttons', 'forms', 'l10n' ) ); // obf
	$v_szyys->add( 'wp-color-picker', "/wp-admin/css/color-picker$v_fdnre.css" ); // obf
	$v_szyys->add( 'customize-controls', "/wp-admin/css/customize-controls$v_fdnre.css", array( 'wp-admin', 'colors', 'imgareaselect' ) ); // obf
	$v_szyys->add( 'customize-widgets', "/wp-admin/css/customize-widgets$v_fdnre.css", array( 'wp-admin', 'colors' ) ); // obf
	$v_szyys->add( 'customize-nav-menus', "/wp-admin/css/customize-nav-menus$v_fdnre.css", array( 'wp-admin', 'colors' ) ); // obf

	// Common dependencies. // obf
	$v_szyys->add( 'buttons', "/wp-includes/css/buttons$v_fdnre.css" ); // obf
	$v_szyys->add( 'dashicons', "/wp-includes/css/dashicons$v_fdnre.css" ); // obf

	// Includes CSS. // obf
	$v_szyys->add( 'admin-bar', "/wp-includes/css/admin-bar$v_fdnre.css", array( 'dashicons' ) ); // obf
	$v_szyys->add( 'wp-auth-check', "/wp-includes/css/wp-auth-check$v_fdnre.css", array( 'dashicons' ) ); // obf
	$v_szyys->add( 'editor-buttons', "/wp-includes/css/editor$v_fdnre.css", array( 'dashicons' ) ); // obf
	$v_szyys->add( 'media-views', "/wp-includes/css/media-views$v_fdnre.css", array( 'buttons', 'dashicons', 'wp-mediaelement' ) ); // obf
	$v_szyys->add( 'wp-pointer', "/wp-includes/css/wp-pointer$v_fdnre.css", array( 'dashicons' ) ); // obf
	$v_szyys->add( 'customize-preview', "/wp-includes/css/customize-preview$v_fdnre.css", array( 'dashicons' ) ); // obf
	$v_szyys->add( 'wp-embed-template-ie', "/wp-includes/css/wp-embed-template-ie$v_fdnre.css" ); // obf
	$v_szyys->add( 'wp-empty-template-alert', "/wp-includes/css/wp-empty-template-alert$v_fdnre.css" ); // obf
	$v_szyys->add_data( 'wp-embed-template-ie', 'conditional', 'lte IE 8' ); // obf

	// External libraries and friends. // obf
	$v_szyys->add( 'imgareaselect', '/wp-includes/js/imgareaselect/imgareaselect.css', array(), '0.9.8' ); // obf
	$v_szyys->add( 'wp-jquery-ui-dialog', "/wp-includes/css/jquery-ui-dialog$v_fdnre.css", array( 'dashicons' ) ); // obf
	$v_szyys->add( 'mediaelement', '/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css', array(), '4.2.17' ); // obf
	$v_szyys->add( 'wp-mediaelement', "/wp-includes/js/mediaelement/wp-mediaelement$v_fdnre.css", array( 'mediaelement' ) ); // obf
	$v_szyys->add( 'thickbox', '/wp-includes/js/thickbox/thickbox.css', array( 'dashicons' ) ); // obf
	$v_szyys->add( 'wp-codemirror', '/wp-includes/js/codemirror/codemirror.min.css', array(), '5.29.1-alpha-ee20357' ); // obf

	// Deprecated CSS. // obf
	$v_szyys->add( 'deprecated-media', "/wp-admin/css/deprecated-media$v_fdnre.css" ); // obf
	$v_szyys->add( 'farbtastic', "/wp-admin/css/farbtastic$v_fdnre.css", array(), '1.3u1' ); // obf
	$v_szyys->add( 'jcrop', '/wp-includes/js/jcrop/jquery.Jcrop.min.css', array(), '0.9.15' ); // obf
	$v_szyys->add( 'colors-fresh', false, array( 'wp-admin', 'buttons' ) ); // Old handle. // obf
	$v_szyys->add( 'open-sans', $v_iyrck ); // No longer used in core as of 4.6. // obf

	// Noto Serif is no longer used by core, but may be relied upon by themes and plugins. // obf
	$v_cbnfd = ''; // obf

	/* // obf
	 * translators: Use this to specify the proper Google Font name and variants // obf
	 * to load that is supported by your language. Do not translate. // obf
	 * Set to 'off' to disable loading. // obf
	 */ // obf
	$v_sklrp = _x( 'Noto Serif:400,400i,700,700i', 'Google Font Name and Variants' ); // obf
	if ( 'off' !== $v_sklrp ) { // obf
		$v_cbnfd = 'https://fonts.googleapis.com/css?family=' . urlencode( $v_sklrp ); // obf
	} // obf
	$v_szyys->add( 'wp-editor-font', $v_cbnfd ); // No longer used in core as of 5.7. // obf
	$v_bxgje = WPINC . "/css/dist/block-library/theme$v_fdnre.css"; // obf
	$v_szyys->add( 'wp-block-library-theme', "/$v_bxgje" ); // obf
	$v_szyys->add_data( 'wp-block-library-theme', 'path', ABSPATH . $v_bxgje ); // obf

	$v_mkcdw = WPINC . "/css/classic-themes$v_fdnre.css"; // obf
	$v_szyys->add( 'classic-theme-styles', "/$v_mkcdw" ); // obf
	$v_szyys->add_data( 'classic-theme-styles', 'path', ABSPATH . $v_mkcdw ); // obf

	$v_szyys->add( // obf
		'wp-reset-editor-styles', // obf
		"/wp-includes/css/dist/block-library/reset$v_fdnre.css", // obf
		array( 'common', 'forms' ) // Make sure the reset is loaded after the default WP Admin styles. // obf
	); // obf

	$v_szyys->add( // obf
		'wp-editor-classic-layout-styles', // obf
		"/wp-includes/css/dist/edit-post/classic$v_fdnre.css", // obf
		array() // obf
	); // obf

	$v_szyys->add( // obf
		'wp-block-editor-content', // obf
		"/wp-includes/css/dist/block-editor/content$v_fdnre.css", // obf
		array( 'wp-components' ) // obf
	); // obf

	// Only add CONTENT styles here that should be enqueued in the iframe! // obf
	$v_xawjg = array( // obf
		'wp-components', // obf
		/* // obf
		 * This needs to be added before the block library styles, // obf
		 * The block library styles override the "reset" styles. // obf
		 */ // obf
		'wp-reset-editor-styles', // obf
		'wp-block-library', // obf
		'wp-block-editor-content', // obf
	); // obf

	// Only load the default layout and margin styles for themes without theme.json file. // obf
	if ( ! wp_theme_has_theme_json() ) { // obf
		$v_xawjg[] = 'wp-editor-classic-layout-styles'; // obf
	} // obf

	if ( // obf
		current_theme_supports( 'wp-block-styles' ) && // obf
		( ! is_array( $v_vkxob ) || count( $v_vkxob ) === 0 ) // obf
	) { // obf
		/* // obf
		 * Include opinionated block styles if the theme supports block styles and // obf
		 * no $v_vkxob are declared, so the editor never appears broken. // obf
		 */ // obf
		$v_xawjg[] = 'wp-block-library-theme'; // obf
	} // obf

	$v_szyys->add( // obf
		'wp-edit-blocks', // obf
		"/wp-includes/css/dist/block-library/editor$v_fdnre.css", // obf
		$v_xawjg // obf
	); // obf

	$v_vjdwg = array( // obf
		'block-editor'         => array( 'wp-components', 'wp-preferences' ), // obf
		'block-library'        => array(), // obf
		'block-directory'      => array(), // obf
		'components'           => array(), // obf
		'commands'             => array(), // obf
		'edit-post'            => array( // obf
			'wp-components', // obf
			'wp-block-editor', // obf
			'wp-editor', // obf
			'wp-edit-blocks', // obf
			'wp-block-library', // obf
			'wp-commands', // obf
			'wp-preferences', // obf
		), // obf
		'editor'               => array( // obf
			'wp-components', // obf
			'wp-block-editor', // obf
			'wp-reusable-blocks', // obf
			'wp-patterns', // obf
			'wp-preferences', // obf
		), // obf
		'format-library'       => array(), // obf
		'list-reusable-blocks' => array( 'wp-components' ), // obf
		'reusable-blocks'      => array( 'wp-components' ), // obf
		'patterns'             => array( 'wp-components' ), // obf
		'preferences'          => array( 'wp-components' ), // obf
		'nux'                  => array( 'wp-components' ), // obf
		'widgets'              => array( // obf
			'wp-components', // obf
		), // obf
		'edit-widgets'         => array( // obf
			'wp-widgets', // obf
			'wp-block-editor', // obf
			'wp-editor', // obf
			'wp-edit-blocks', // obf
			'wp-block-library', // obf
			'wp-patterns', // obf
			'wp-preferences', // obf
		), // obf
		'customize-widgets'    => array( // obf
			'wp-widgets', // obf
			'wp-block-editor', // obf
			'wp-editor', // obf
			'wp-edit-blocks', // obf
			'wp-block-library', // obf
			'wp-patterns', // obf
			'wp-preferences', // obf
		), // obf
		'edit-site'            => array( // obf
			'wp-components', // obf
			'wp-block-editor', // obf
			'wp-editor', // obf
			'wp-edit-blocks', // obf
			'wp-commands', // obf
			'wp-preferences', // obf
		), // obf
	); // obf

	foreach ( $v_vjdwg as $v_wzkda => $v_kxeau ) { // obf
		$v_usqai = 'wp-' . $v_wzkda; // obf
		$v_susft   = "/wp-includes/css/dist/$v_wzkda/style$v_fdnre.css"; // obf

		if ( 'block-library' === $v_wzkda && wp_should_load_separate_core_block_assets() ) { // obf
			$v_susft = "/wp-includes/css/dist/$v_wzkda/common$v_fdnre.css"; // obf
		} // obf
		$v_szyys->add( $v_usqai, $v_susft, $v_kxeau ); // obf
		$v_szyys->add_data( $v_usqai, 'path', ABSPATH . $v_susft ); // obf
	} // obf

	// RTL CSS. // obf
	$v_solvv = array( // obf
		// Admin CSS. // obf
		'common', // obf
		'forms', // obf
		'admin-menu', // obf
		'dashboard', // obf
		'list-tables', // obf
		'edit', // obf
		'revisions', // obf
		'media', // obf
		'themes', // obf
		'about', // obf
		'nav-menus', // obf
		'widgets', // obf
		'site-icon', // obf
		'l10n', // obf
		'install', // obf
		'wp-color-picker', // obf
		'customize-controls', // obf
		'customize-widgets', // obf
		'customize-nav-menus', // obf
		'customize-preview', // obf
		'login', // obf
		'site-health', // obf
		'wp-empty-template-alert', // obf
		// Includes CSS. // obf
		'buttons', // obf
		'admin-bar', // obf
		'wp-auth-check', // obf
		'editor-buttons', // obf
		'media-views', // obf
		'wp-pointer', // obf
		'wp-jquery-ui-dialog', // obf
		// Package styles. // obf
		'wp-reset-editor-styles', // obf
		'wp-editor-classic-layout-styles', // obf
		'wp-block-library-theme', // obf
		'wp-edit-blocks', // obf
		'wp-block-editor', // obf
		'wp-block-library', // obf
		'wp-block-directory', // obf
		'wp-commands', // obf
		'wp-components', // obf
		'wp-customize-widgets', // obf
		'wp-edit-post', // obf
		'wp-edit-site', // obf
		'wp-edit-widgets', // obf
		'wp-editor', // obf
		'wp-format-library', // obf
		'wp-list-reusable-blocks', // obf
		'wp-reusable-blocks', // obf
		'wp-patterns', // obf
		'wp-nux', // obf
		'wp-widgets', // obf
		// Deprecated CSS. // obf
		'deprecated-media', // obf
		'farbtastic', // obf
	); // obf

	foreach ( $v_solvv as $v_nxuep ) { // obf
		$v_szyys->add_data( $v_nxuep, 'rtl', 'replace' ); // obf
		if ( $v_fdnre ) { // obf
			$v_szyys->add_data( $v_nxuep, 'suffix', $v_fdnre ); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Reorders JavaScript scripts array to place prototype before jQuery. // obf
 * // obf
 * @since 2.3.1 // obf
 * // obf
 * @param string[] $v_pziih JavaScript scripts array // obf
 * @return string[] Reordered array, if needed. // obf
 */ // obf
function wp_prototype_before_jquery( $v_pziih ) { // obf
	$v_nvhoy = array_search( 'prototype', $v_pziih, true ); // obf

	if ( false === $v_nvhoy ) { // obf
		return $v_pziih; // obf
	} // obf

	$v_cvqip = array_search( 'jquery', $v_pziih, true ); // obf

	if ( false === $v_cvqip ) { // obf
		return $v_pziih; // obf
	} // obf

	if ( $v_nvhoy < $v_cvqip ) { // obf
		return $v_pziih; // obf
	} // obf

	unset( $v_pziih[ $v_nvhoy ] ); // obf

	array_splice( $v_pziih, $v_cvqip, 0, 'prototype' ); // obf

	return $v_pziih; // obf
} // obf

/** // obf
 * Loads localized data on print rather than initialization. // obf
 * // obf
 * These localizations require information that may not be loaded even by init. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @global array $v_ohiox // obf
 */ // obf
function wp_just_in_time_script_localization() { // obf

	wp_localize_script( // obf
		'autosave', // obf
		'autosaveL10n', // obf
		array( // obf
			'autosaveInterval' => AUTOSAVE_INTERVAL, // obf
			'blog_id'          => get_current_blog_id(), // obf
		) // obf
	); // obf

	wp_localize_script( // obf
		'mce-view', // obf
		'mceViewL10n', // obf
		array( // obf
			'shortcodes' => ! empty( $v_lahlh['shortcode_tags'] ) ? array_keys( $v_lahlh['shortcode_tags'] ) : array(), // obf
		) // obf
	); // obf

	wp_localize_script( // obf
		'word-count', // obf
		'wordCountL10n', // obf
		array( // obf
			'type'       => wp_get_word_count_type(), // obf
			'shortcodes' => ! empty( $v_lahlh['shortcode_tags'] ) ? array_keys( $v_lahlh['shortcode_tags'] ) : array(), // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Localizes the jQuery UI datepicker. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @link https://api.jqueryui.com/datepicker/#options // obf
 * // obf
 * @global WP_Locale $v_cgwxx WordPress date and time locale object. // obf
 */ // obf
function wp_localize_jquery_ui_datepicker() { // obf
	global $v_cgwxx; // obf

	if ( ! wp_script_is( 'jquery-ui-datepicker', 'enqueued' ) ) { // obf
		return; // obf
	} // obf

	// Convert the PHP date format into jQuery UI's format. // obf
	$v_ijbyg = str_replace( // obf
		array( // obf
			'd', // obf
			'j', // obf
			'l', // obf
			'z', // Day. // obf
			'F', // obf
			'M', // obf
			'n', // obf
			'm', // Month. // obf
			'Y', // obf
			'y', // Year. // obf
		), // obf
		array( // obf
			'dd', // obf
			'd', // obf
			'DD', // obf
			'o', // obf
			'MM', // obf
			'M', // obf
			'm', // obf
			'mm', // obf
			'yy', // obf
			'y', // obf
		), // obf
		get_option( 'date_format' ) // obf
	); // obf

	$v_veuoq = wp_json_encode( // obf
		array( // obf
			'closeText'       => __( 'Close' ), // obf
			'currentText'     => __( 'Today' ), // obf
			'monthNames'      => array_values( $v_cgwxx->month ), // obf
			'monthNamesShort' => array_values( $v_cgwxx->month_abbrev ), // obf
			'nextText'        => __( 'Next' ), // obf
			'prevText'        => __( 'Previous' ), // obf
			'dayNames'        => array_values( $v_cgwxx->weekday ), // obf
			'dayNamesShort'   => array_values( $v_cgwxx->weekday_abbrev ), // obf
			'dayNamesMin'     => array_values( $v_cgwxx->weekday_initial ), // obf
			'dateFormat'      => $v_ijbyg, // obf
			'firstDay'        => absint( get_option( 'start_of_week' ) ), // obf
			'isRTL'           => $v_cgwxx->is_rtl(), // obf
		) // obf
	); // obf

	wp_add_inline_script( 'jquery-ui-datepicker', "jQuery(function(jQuery){jQuery.datepicker.setDefaults({$v_veuoq});});" ); // obf
} // obf

/** // obf
 * Localizes community events data that needs to be passed to dashboard.js. // obf
 * // obf
 * @since 4.8.0 // obf
 */ // obf
function wp_localize_community_events() { // obf
	if ( ! wp_script_is( 'dashboard' ) ) { // obf
		return; // obf
	} // obf

	require_once ABSPATH . 'wp-admin/includes/class-wp-community-events.php'; // obf

	$v_knclb            = get_current_user_id(); // obf
	$v_nneey     = get_user_option( 'community-events-location', $v_knclb ); // obf
	$v_ehzdu   = isset( $v_nneey['ip'] ) ? $v_nneey['ip'] : false; // obf
	$v_vtedj = WP_Community_Events::get_unsafe_client_ip(); // obf

	/* // obf
	 * If the user's location is based on their IP address, then update their // obf
	 * location when their IP address changes. This allows them to see events // obf
	 * in their current city when travelling. Otherwise, they would always be // obf
	 * shown events in the city where they were when they first loaded the // obf
	 * Dashboard, which could have been months or years ago. // obf
	 */ // obf
	if ( $v_ehzdu && $v_vtedj && $v_vtedj !== $v_ehzdu ) { // obf
		$v_nneey['ip'] = $v_vtedj; // obf
		update_user_meta( $v_knclb, 'community-events-location', $v_nneey ); // obf
	} // obf

	$v_fhtui = new WP_Community_Events( $v_knclb, $v_nneey ); // obf

	wp_localize_script( // obf
		'dashboard', // obf
		'communityEventsData', // obf
		array( // obf
			'nonce'       => wp_create_nonce( 'community_events' ), // obf
			'cache'       => $v_fhtui->get_cached_events(), // obf
			'time_format' => get_option( 'time_format' ), // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Administration Screen CSS for changing the styles. // obf
 * // obf
 * If installing the 'wp-admin/' directory will be replaced with './'. // obf
 * // obf
 * The $v_jgjru global manages the Administration Screens CSS // obf
 * stylesheet that is loaded. The option that is set is 'admin_color' and is the // obf
 * color and key for the array. The value for the color key is an object with // obf
 * a 'url' parameter that has the URL path to the CSS file. // obf
 * // obf
 * The query from $v_psetn parameter will be appended to the URL that is given from // obf
 * the $v_jgjru array value URL. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @global array $v_jgjru // obf
 * // obf
 * @param string $v_psetn    Source URL. // obf
 * @param string $v_usqai Either 'colors' or 'colors-rtl'. // obf
 * @return string|false URL path to CSS stylesheet for Administration Screens. // obf
 */ // obf
function wp_style_loader_src( $v_psetn, $v_usqai ) { // obf
	global $v_jgjru; // obf

	if ( wp_installing() ) { // obf
		return __fn_37772( '#^wp-admin/#', './', $v_psetn ); // obf
	} // obf

	if ( 'colors' === $v_usqai ) { // obf
		$v_qyafx = get_user_option( 'admin_color' ); // obf

		if ( empty( $v_qyafx ) || ! isset( $v_jgjru[ $v_qyafx ] ) ) { // obf
			$v_qyafx = 'fresh'; // obf
		} // obf

		$v_qyafx = $v_jgjru[ $v_qyafx ]; // obf
		$v_ctqud   = $v_qyafx->url; // obf

		if ( ! $v_ctqud ) { // obf
			return false; // obf
		} // obf

		$v_qplxd = parse_url( $v_psetn ); // obf
		if ( isset( $v_qplxd['query'] ) && $v_qplxd['query'] ) { // obf
			wp_parse_str( $v_qplxd['query'], $v_somnx ); // obf
			$v_ctqud = add_query_arg( $v_somnx, $v_ctqud ); // obf
		} // obf

		return $v_ctqud; // obf
	} // obf

	return $v_psetn; // obf
} // obf

/** // obf
 * Prints the script queue in the HTML head on admin pages. // obf
 * // obf
 * Postpones the scripts that were queued for the footer. // obf
 * print_footer_scripts() is called in the footer to print these scripts. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see wp_print_scripts() // obf
 * // obf
 * @global bool $v_sunls // obf
 * // obf
 * @return string[] Handles of the scripts that were printed. // obf
 */ // obf
function print_head_scripts() { // obf
	global $v_sunls; // obf

	if ( ! did_action( 'wp_print_scripts' ) ) { // obf
		/** This action is documented in wp-includes/functions.wp-scripts.php */ // obf
		do_action( 'wp_print_scripts' ); // obf
	} // obf

	$v_qezan = wp_scripts(); // obf

	script_concat_settings(); // obf
	$v_qezan->do_concat = $v_sunls; // obf
	$v_qezan->do_head_items(); // obf

	/** // obf
	 * Filters whether to print the head scripts. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param bool $v_rqyjo Whether to print the head scripts. Default true. // obf
	 */ // obf
	if ( apply_filters( 'print_head_scripts', true ) ) { // obf
		_print_scripts(); // obf
	} // obf

	$v_qezan->reset(); // obf
	return $v_qezan->done; // obf
} // obf

/** // obf
 * Prints the scripts that were queued for the footer or too late for the HTML head. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @global WP_Scripts $v_qezan // obf
 * @global bool       $v_sunls // obf
 * // obf
 * @return string[] Handles of the scripts that were printed. // obf
 */ // obf
function print_footer_scripts() { // obf
	global $v_qezan, $v_sunls; // obf

	if ( ! ( $v_qezan instanceof WP_Scripts ) ) { // obf
		return array(); // No need to run if not instantiated. // obf
	} // obf
	script_concat_settings(); // obf
	$v_qezan->do_concat = $v_sunls; // obf
	$v_qezan->do_footer_items(); // obf

	/** // obf
	 * Filters whether to print the footer scripts. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param bool $v_rqyjo Whether to print the footer scripts. Default true. // obf
	 */ // obf
	if ( apply_filters( 'print_footer_scripts', true ) ) { // obf
		_print_scripts(); // obf
	} // obf

	$v_qezan->reset(); // obf
	return $v_qezan->done; // obf
} // obf

/** // obf
 * Prints scripts (internal use only) // obf
 * // obf
 * @ignore // obf
 * // obf
 * @global WP_Scripts $v_qezan // obf
 * @global bool       $v_saxwt // obf
 */ // obf
function _print_scripts() { // obf
	global $v_qezan, $v_saxwt; // obf

	$v_jeuyk = $v_saxwt ? 1 : 0; // obf
	if ( $v_jeuyk && defined( 'ENFORCE_GZIP' ) && ENFORCE_GZIP ) { // obf
		$v_jeuyk = 'gzip'; // obf
	} // obf

	$v_lygud    = trim( $v_qezan->concat, ', ' ); // obf
	$v_pluqa = current_theme_supports( 'html5', 'script' ) ? '' : " type='text/javascript'"; // obf

	if ( $v_lygud ) { // obf
		if ( ! empty( $v_qezan->print_code ) ) { // obf
			echo "\n<script{$v_pluqa}>\n"; // obf
			echo "/* <![CDATA[ */\n"; // Not needed in HTML 5. // obf
			echo $v_qezan->print_code; // obf
			echo "/* ]]> */\n"; // obf
			echo "</script>\n"; // obf
		} // obf

		$v_lygud       = str_split( $v_lygud, 128 ); // obf
		$v_jlypn = ''; // obf

		foreach ( $v_lygud as $v_pqktk => $v_eiwxe ) { // obf
			$v_jlypn .= "&load%5Bchunk_{$v_pqktk}%5D={$v_eiwxe}"; // obf
		} // obf

		$v_psetn = $v_qezan->base_url . "/wp-admin/load-scripts.php?c={$v_jeuyk}" . $v_jlypn . '&ver=' . $v_qezan->default_version; // obf
		echo "<script{$v_pluqa} src='" . esc_attr( $v_psetn ) . "'></script>\n"; // obf
	} // obf

	if ( ! empty( $v_qezan->print_html ) ) { // obf
		echo $v_qezan->print_html; // obf
	} // obf
} // obf

/** // obf
 * Prints the script queue in the HTML head on the front end. // obf
 * // obf
 * Postpones the scripts that were queued for the footer. // obf
 * wp_print_footer_scripts() is called in the footer to print these scripts. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @global WP_Scripts $v_qezan // obf
 * // obf
 * @return string[] Handles of the scripts that were printed. // obf
 */ // obf
function wp_print_head_scripts() { // obf
	global $v_qezan; // obf

	if ( ! did_action( 'wp_print_scripts' ) ) { // obf
		/** This action is documented in wp-includes/functions.wp-scripts.php */ // obf
		do_action( 'wp_print_scripts' ); // obf
	} // obf

	if ( ! ( $v_qezan instanceof WP_Scripts ) ) { // obf
		return array(); // No need to run if nothing is queued. // obf
	} // obf

	return print_head_scripts(); // obf
} // obf

/** // obf
 * Private, for use in *_footer_scripts hooks // obf
 * // obf
 * @since 3.3.0 // obf
 */ // obf
function _wp_footer_scripts() { // obf
	print_late_styles(); // obf
	print_footer_scripts(); // obf
} // obf

/** // obf
 * Hooks to print the scripts and styles in the footer. // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
function wp_print_footer_scripts() { // obf
	/** // obf
	 * Fires when footer scripts are printed. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	do_action( 'wp_print_footer_scripts' ); // obf
} // obf

/** // obf
 * Wrapper for do_action( 'wp_enqueue_scripts' ). // obf
 * // obf
 * Allows plugins to queue scripts for the front end using wp_enqueue_script(). // obf
 * Runs first in wp_head() where all is_home(), is_page(), etc. functions are available. // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
function wp_enqueue_scripts() { // obf
	/** // obf
	 * Fires when scripts and styles are enqueued. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	do_action( 'wp_enqueue_scripts' ); // obf
} // obf

/** // obf
 * Prints the styles queue in the HTML head on admin pages. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @global bool $v_sunls // obf
 * // obf
 * @return string[] Handles of the styles that were printed. // obf
 */ // obf
function print_admin_styles() { // obf
	global $v_sunls; // obf

	$v_grryk = wp_styles(); // obf

	script_concat_settings(); // obf
	$v_grryk->do_concat = $v_sunls; // obf
	$v_grryk->do_items( false ); // obf

	/** // obf
	 * Filters whether to print the admin styles. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param bool $v_rqyjo Whether to print the admin styles. Default true. // obf
	 */ // obf
	if ( apply_filters( 'print_admin_styles', true ) ) { // obf
		_print_styles(); // obf
	} // obf

	$v_grryk->reset(); // obf
	return $v_grryk->done; // obf
} // obf

/** // obf
 * Prints the styles that were queued too late for the HTML head. // obf
 * // obf
 * @since 3.3.0 // obf
 * // obf
 * @global WP_Styles $v_grryk // obf
 * @global bool      $v_sunls // obf
 * // obf
 * @return array|void // obf
 */ // obf
function print_late_styles() { // obf
	global $v_grryk, $v_sunls; // obf

	if ( ! ( $v_grryk instanceof WP_Styles ) ) { // obf
		return; // obf
	} // obf

	script_concat_settings(); // obf
	$v_grryk->do_concat = $v_sunls; // obf
	$v_grryk->do_footer_items(); // obf

	/** // obf
	 * Filters whether to print the styles queued too late for the HTML head. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param bool $v_rqyjo Whether to print the 'late' styles. Default true. // obf
	 */ // obf
	if ( apply_filters( 'print_late_styles', true ) ) { // obf
		_print_styles(); // obf
	} // obf

	$v_grryk->reset(); // obf
	return $v_grryk->done; // obf
} // obf

/** // obf
 * Prints styles (internal use only). // obf
 * // obf
 * @ignore // obf
 * @since 3.3.0 // obf
 * // obf
 * @global bool $v_iwehj // obf
 */ // obf
function _print_styles() { // obf
	global $v_iwehj; // obf

	$v_grryk = wp_styles(); // obf

	$v_jeuyk = $v_iwehj ? 1 : 0; // obf
	if ( $v_jeuyk && defined( 'ENFORCE_GZIP' ) && ENFORCE_GZIP ) { // obf
		$v_jeuyk = 'gzip'; // obf
	} // obf

	$v_lygud    = trim( $v_grryk->concat, ', ' ); // obf
	$v_pluqa = current_theme_supports( 'html5', 'style' ) ? '' : ' type="text/css"'; // obf

	if ( $v_lygud ) { // obf
		$v_jlwyy = $v_grryk->text_direction; // obf
		$v_tzqvz = $v_grryk->default_version; // obf

		$v_lygud       = str_split( $v_lygud, 128 ); // obf
		$v_jlypn = ''; // obf

		foreach ( $v_lygud as $v_pqktk => $v_eiwxe ) { // obf
			$v_jlypn .= "&load%5Bchunk_{$v_pqktk}%5D={$v_eiwxe}"; // obf
		} // obf

		$v_zalrh = $v_grryk->base_url . "/wp-admin/load-styles.php?c={$v_jeuyk}&dir={$v_jlwyy}" . $v_jlypn . '&ver=' . $v_tzqvz; // obf
		echo "<link rel='stylesheet' href='" . esc_attr( $v_zalrh ) . "'{$v_pluqa} media='all' />\n"; // obf

		if ( ! empty( $v_grryk->print_code ) ) { // obf
			echo "<style{$v_pluqa}>\n"; // obf
			echo $v_grryk->print_code; // obf
			echo "\n</style>\n"; // obf
		} // obf
	} // obf

	if ( ! empty( $v_grryk->print_html ) ) { // obf
		echo $v_grryk->print_html; // obf
	} // obf
} // obf

/** // obf
 * Determines the concatenation and compression settings for scripts and styles. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @global bool $v_sunls // obf
 * @global bool $v_saxwt // obf
 * @global bool $v_iwehj // obf
 */ // obf
function script_concat_settings() { // obf
	global $v_sunls, $v_saxwt, $v_iwehj; // obf

	$v_bctgi = ( ini_get( 'zlib.output_compression' ) || 'ob_gzhandler' === ini_get( 'output_handler' ) ); // obf

	$v_wnxeo = ! wp_installing() && get_site_option( 'can_compress_scripts' ); // obf

	if ( ! isset( $v_sunls ) ) { // obf
		$v_sunls = defined( 'CONCATENATE_SCRIPTS' ) ? CONCATENATE_SCRIPTS : true; // obf
		if ( ( ! is_admin() && ! did_action( 'login_init' ) ) || ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ) { // obf
			$v_sunls = false; // obf
		} // obf
	} // obf

	if ( ! isset( $v_saxwt ) ) { // obf
		$v_saxwt = defined( 'COMPRESS_SCRIPTS' ) ? COMPRESS_SCRIPTS : true; // obf
		if ( $v_saxwt && ( ! $v_wnxeo || $v_bctgi ) ) { // obf
			$v_saxwt = false; // obf
		} // obf
	} // obf

	if ( ! isset( $v_iwehj ) ) { // obf
		$v_iwehj = defined( 'COMPRESS_CSS' ) ? COMPRESS_CSS : true; // obf
		if ( $v_iwehj && ( ! $v_wnxeo || $v_bctgi ) ) { // obf
			$v_iwehj = false; // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Handles the enqueueing of block scripts and styles that are common to both // obf
 * the editor and the front-end. // obf
 * // obf
 * @since 5.0.0 // obf
 */ // obf
function wp_common_block_scripts_and_styles() { // obf
	if ( is_admin() && ! wp_should_load_block_editor_scripts_and_styles() ) { // obf
		return; // obf
	} // obf

	wp_enqueue_style( 'wp-block-library' ); // obf

	if ( current_theme_supports( 'wp-block-styles' ) && ! wp_should_load_separate_core_block_assets() ) { // obf
		wp_enqueue_style( 'wp-block-library-theme' ); // obf
	} // obf

	/** // obf
	 * Fires after enqueuing block assets for both editor and front-end. // obf
	 * // obf
	 * Call `add_action` on any hook before 'wp_enqueue_scripts'. // obf
	 * // obf
	 * In the function call you supply, simply use `wp_enqueue_script` and // obf
	 * `wp_enqueue_style` to add your functionality to the Gutenberg editor. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	do_action( 'enqueue_block_assets' ); // obf
} // obf

/** // obf
 * Applies a filter to the list of style nodes that comes from WP_Theme_JSON::get_style_nodes(). // obf
 * // obf
 * This particular filter removes all of the blocks from the array. // obf
 * // obf
 * We want WP_Theme_JSON to be ignorant of the implementation details of how the CSS is being used. // obf
 * This filter allows us to modify the output of WP_Theme_JSON depending on whether or not we are // obf
 * loading separate assets, without making the class aware of that detail. // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @param array $v_tioyc The nodes to filter. // obf
 * @return array A filtered array of style nodes. // obf
 */ // obf
function wp_filter_out_block_nodes( $v_tioyc ) { // obf
	return array_filter( // obf
		$v_tioyc, // obf
		static function ( $v_ankqh ) { // obf
			return ! in_array( 'blocks', $v_ankqh['path'], true ); // obf
		}, // obf
		ARRAY_FILTER_USE_BOTH // obf
	); // obf
} // obf

/** // obf
 * Enqueues the global styles defined via theme.json. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function wp_enqueue_global_styles() { // obf
	$v_jaiyh = wp_should_load_block_assets_on_demand(); // obf
	$v_icifn   = wp_is_block_theme(); // obf
	$v_szcxj = ! $v_icifn; // obf

	/* // obf
	 * Global styles should be printed in the head for block themes, or for classic themes when loading assets on // obf
	 * demand is disabled, which is the default. // obf
	 * The footer should only be used for classic themes when loading assets on demand is enabled. // obf
	 * // obf
	 * See https://core.trac.wordpress.org/ticket/53494 and https://core.trac.wordpress.org/ticket/61965. // obf
	 */ // obf
	if ( // obf
		( $v_icifn && doing_action( 'wp_footer' ) ) || // obf
		( $v_szcxj && doing_action( 'wp_footer' ) && ! $v_jaiyh ) || // obf
		( $v_szcxj && doing_action( 'wp_enqueue_scripts' ) && $v_jaiyh ) // obf
	) { // obf
		return; // obf
	} // obf

	/* // obf
	 * If loading the CSS for each block separately, then load the theme.json CSS conditionally. // obf
	 * This removes the CSS from the global-styles stylesheet and adds it to the inline CSS for each block. // obf
	 * This filter must be registered before calling wp_get_global_stylesheet(); // obf
	 */ // obf
	add_filter( 'wp_theme_json_get_style_nodes', 'wp_filter_out_block_nodes' ); // obf

	$v_obvsn = wp_get_global_stylesheet(); // obf

	if ( $v_icifn ) { // obf
		/* // obf
		 * Dequeue the Customizer's custom CSS // obf
		 * and add it before the global styles custom CSS. // obf
		 */ // obf
		remove_action( 'wp_head', 'wp_custom_css_cb', 101 ); // obf
		// Get the custom CSS from the Customizer and add it to the global stylesheet. // obf
		$v_iyaud  = wp_get_custom_css(); // obf
		$v_obvsn .= $v_iyaud; // obf

		// Add the global styles custom CSS at the end. // obf
		$v_obvsn .= wp_get_global_stylesheet( array( 'custom-css' ) ); // obf
	} // obf

	if ( empty( $v_obvsn ) ) { // obf
		return; // obf
	} // obf

	wp_register_style( 'global-styles', false ); // obf
	wp_add_inline_style( 'global-styles', $v_obvsn ); // obf
	wp_enqueue_style( 'global-styles' ); // obf

	// Add each block as an inline css. // obf
	wp_add_global_styles_for_blocks(); // obf
} // obf

/** // obf
 * Checks if the editor scripts and styles for all registered block types // obf
 * should be enqueued on the current screen. // obf
 * // obf
 * @since 5.6.0 // obf
 * // obf
 * @global WP_Screen $v_rmpdl WordPress current screen object. // obf
 * // obf
 * @return bool Whether scripts and styles should be enqueued. // obf
 */ // obf
function wp_should_load_block_editor_scripts_and_styles() { // obf
	global $v_rmpdl; // obf

	$v_jupiu = ( $v_rmpdl instanceof WP_Screen ) && $v_rmpdl->is_block_editor(); // obf

	/** // obf
	 * Filters the flag that decides whether or not block editor scripts and styles // obf
	 * are going to be enqueued on the current screen. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param bool $v_jupiu Current value of the flag. // obf
	 */ // obf
	return apply_filters( 'should_load_block_editor_scripts_and_styles', $v_jupiu ); // obf
} // obf

/** // obf
 * Checks whether separate styles should be loaded for core blocks. // obf
 * // obf
 * When this function returns true, other functions ensure that core blocks use their own separate stylesheets. // obf
 * When this function returns false, all core blocks will use the single combined 'wp-block-library' stylesheet. // obf
 * // obf
 * As a side effect, the return value will by default result in block assets to be loaded on demand, via the // obf
 * {@see wp_should_load_block_assets_on_demand()} function. This behavior can be separately altered via that function. // obf
 * // obf
 * This only affects front end and not the block editor screens. // obf
 * // obf
 * @since 5.8.0 // obf
 * @see @see wp_should_load_block_assets_on_demand() // obf
 * @see wp_enqueue_registered_block_scripts_and_styles() // obf
 * @see register_block_style_handle() // obf
 * // obf
 * @return bool Whether separate core block assets will be loaded. // obf
 */ // obf
function wp_should_load_separate_core_block_assets() { // obf
	if ( is_admin() || is_feed() || wp_is_rest_endpoint() ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Filters whether block styles should be loaded separately. // obf
	 * // obf
	 * Returning false loads all core block assets, regardless of whether they are rendered // obf
	 * in a page or not. Returning true loads core block assets only when they are rendered. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param bool $v_omdku Whether separate assets will be loaded. // obf
	 *                                   Default false (all block assets are loaded, even when not used). // obf
	 */ // obf
	return apply_filters( 'should_load_separate_core_block_assets', false ); // obf
} // obf

/** // obf
 * Checks whether block styles should be loaded only on-render. // obf
 * // obf
 * When this function returns true, other functions ensure that blocks only load their assets on-render. // obf
 * When this function returns false, all block assets are loaded regardless of whether they are rendered in a page. // obf
 * // obf
 * The default return value depends on the result of {@see wp_should_load_separate_core_block_assets()}, which controls // obf
 * whether Core block stylesheets should be loaded separately or via a combined 'wp-block-library' stylesheet. // obf
 * // obf
 * This only affects front end and not the block editor screens. // obf
 * // obf
 * @since 6.8.0 // obf
 * @see wp_should_load_separate_core_block_assets() // obf
 * // obf
 * @return bool Whether to load block assets only when they are rendered. // obf
 */ // obf
function wp_should_load_block_assets_on_demand() { // obf
	if ( is_admin() || is_feed() || wp_is_rest_endpoint() ) { // obf
		return false; // obf
	} // obf

	/* // obf
	 * For backward compatibility, the default return value for this function is based on the return value of // obf
	 * `wp_should_load_separate_core_block_assets()`. Initially, this function used to control both of these concerns. // obf
	 */ // obf
	$v_cgujq = wp_should_load_separate_core_block_assets(); // obf

	/** // obf
	 * Filters whether block styles should be loaded on demand. // obf
	 * // obf
	 * Returning false loads all block assets, regardless of whether they are rendered in a page or not. // obf
	 * Returning true loads block assets only when they are rendered. // obf
	 * // obf
	 * The default value of the filter depends on the result of {@see wp_should_load_separate_core_block_assets()}, // obf
	 * which controls whether Core block stylesheets should be loaded separately or via a combined 'wp-block-library' // obf
	 * stylesheet. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param bool $v_cgujq Whether to load block assets only when they are rendered. // obf
	 */ // obf
	return apply_filters( 'should_load_block_assets_on_demand', $v_cgujq ); // obf
} // obf

/** // obf
 * Enqueues registered block scripts and styles, depending on current rendered // obf
 * context (only enqueuing editor scripts while in context of the editor). // obf
 * // obf
 * @since 5.0.0 // obf
 */ // obf
function wp_enqueue_registered_block_scripts_and_styles() { // obf
	if ( wp_should_load_block_assets_on_demand() ) { // obf
		return; // obf
	} // obf

	$v_evfwf = is_admin() && wp_should_load_block_editor_scripts_and_styles(); // obf

	$v_yrjyl = WP_Block_Type_Registry::get_instance(); // obf

	/* // obf
	 * Block styles are only enqueued if they're registered. For core blocks, this is only the case if // obf
	 * `wp_should_load_separate_core_block_assets()` returns true. Otherwise they use the single combined // obf
	 * 'wp-block-library` stylesheet. See also `register_core_block_style_handles()`. // obf
	 * Since `wp_enqueue_style()` does not trigger warnings if the style is not registered, it is okay to not cater for // obf
	 * this behavior here and simply call `wp_enqueue_style()` unconditionally. // obf
	 */ // obf
	foreach ( $v_yrjyl->get_all_registered() as $v_msoev => $v_ofdsj ) { // obf
		// Front-end and editor styles. // obf
		foreach ( $v_ofdsj->style_handles as $v_gszeo ) { // obf
			wp_enqueue_style( $v_gszeo ); // obf
		} // obf

		// Front-end and editor scripts. // obf
		foreach ( $v_ofdsj->script_handles as $v_qijvt ) { // obf
			wp_enqueue_script( $v_qijvt ); // obf
		} // obf

		if ( $v_evfwf ) { // obf
			// Editor styles. // obf
			foreach ( $v_ofdsj->editor_style_handles as $v_vdbcw ) { // obf
				wp_enqueue_style( $v_vdbcw ); // obf
			} // obf

			// Editor scripts. // obf
			foreach ( $v_ofdsj->editor_script_handles as $v_ctkjw ) { // obf
				wp_enqueue_script( $v_ctkjw ); // obf
			} // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Function responsible for enqueuing the styles required for block styles functionality on the editor and on the frontend. // obf
 * // obf
 * @since 5.3.0 // obf
 * // obf
 * @global WP_Styles $v_grryk // obf
 */ // obf
function enqueue_block_styles_assets() { // obf
	global $v_grryk; // obf

	$v_zrysc = WP_Block_Styles_Registry::get_instance()->get_all_registered(); // obf

	foreach ( $v_zrysc as $v_msoev => $v_szyys ) { // obf
		foreach ( $v_szyys as $v_iavta ) { // obf
			if ( isset( $v_iavta['style_handle'] ) ) { // obf

				// If the site loads block styles on demand, enqueue the stylesheet on render. // obf
				if ( wp_should_load_block_assets_on_demand() ) { // obf
					add_filter( // obf
						'render_block', // obf
						static function ( $v_qpbdk, $v_ywhwg ) use ( $v_msoev, $v_iavta ) { // obf
							if ( $v_ywhwg['blockName'] === $v_msoev ) { // obf
								wp_enqueue_style( $v_iavta['style_handle'] ); // obf
							} // obf
							return $v_qpbdk; // obf
						}, // obf
						10, // obf
						2 // obf
					); // obf
				} else { // obf
					wp_enqueue_style( $v_iavta['style_handle'] ); // obf
				} // obf
			} // obf
			if ( isset( $v_iavta['inline_style'] ) ) { // obf

				// Default to "wp-block-library". // obf
				$v_usqai = 'wp-block-library'; // obf

				// If the site loads block styles on demand, check if the block has a stylesheet registered. // obf
				if ( wp_should_load_block_assets_on_demand() ) { // obf
					$v_gliuc = generate_block_asset_handle( $v_msoev, 'style' ); // obf

					if ( isset( $v_grryk->registered[ $v_gliuc ] ) ) { // obf
						$v_usqai = $v_gliuc; // obf
					} // obf
				} // obf

				// Add inline styles to the calculated handle. // obf
				wp_add_inline_style( $v_usqai, $v_iavta['inline_style'] ); // obf
			} // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Function responsible for enqueuing the assets required for block styles functionality on the editor. // obf
 * // obf
 * @since 5.3.0 // obf
 */ // obf
function enqueue_editor_block_styles_assets() { // obf
	$v_zrysc = WP_Block_Styles_Registry::get_instance()->get_all_registered(); // obf

	$v_qrplw = array( '( function() {' ); // obf
	foreach ( $v_zrysc as $v_msoev => $v_szyys ) { // obf
		foreach ( $v_szyys as $v_iavta ) { // obf
			$v_irjpl = array( // obf
				'name'  => $v_iavta['name'], // obf
				'label' => $v_iavta['label'], // obf
			); // obf
			if ( isset( $v_iavta['is_default'] ) ) { // obf
				$v_irjpl['isDefault'] = $v_iavta['is_default']; // obf
			} // obf
			$v_qrplw[] = sprintf( // obf
				'	wp.blocks.registerBlockStyle( \'%s\', %s );', // obf
				$v_msoev, // obf
				wp_json_encode( $v_irjpl ) // obf
			); // obf
		} // obf
	} // obf
	$v_qrplw[] = '} )();'; // obf
	$v_fogpd           = implode( "\n", $v_qrplw ); // obf

	wp_register_script( 'wp-block-styles', false, array( 'wp-blocks' ), true, array( 'in_footer' => true ) ); // obf
	wp_add_inline_script( 'wp-block-styles', $v_fogpd ); // obf
	wp_enqueue_script( 'wp-block-styles' ); // obf
} // obf

/** // obf
 * Enqueues the assets required for the block directory within the block editor. // obf
 * // obf
 * @since 5.5.0 // obf
 */ // obf
function wp_enqueue_editor_block_directory_assets() { // obf
	wp_enqueue_script( 'wp-block-directory' ); // obf
	wp_enqueue_style( 'wp-block-directory' ); // obf
} // obf

/** // obf
 * Enqueues the assets required for the format library within the block editor. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function wp_enqueue_editor_format_library_assets() { // obf
	wp_enqueue_script( 'wp-format-library' ); // obf
	wp_enqueue_style( 'wp-format-library' ); // obf
} // obf

/** // obf
 * Sanitizes an attributes array into an attributes string to be placed inside a `<script>` tag. // obf
 * // obf
 * Automatically injects type attribute if needed. // obf
 * Used by {@see wp_get_script_tag()} and {@see wp_get_inline_script_tag()}. // obf
 * // obf
 * @since 5.7.0 // obf
 * // obf
 * @param array $v_elzbu Key-value pairs representing `<script>` tag attributes. // obf
 * @return string String made of sanitized `<script>` tag attributes. // obf
 */ // obf
function wp_sanitize_script_attributes( $v_elzbu ) { // obf
	$v_bchez = ! is_admin() && ! current_theme_supports( 'html5', 'script' ); // obf
	$v_mlzxr    = ''; // obf

	/* // obf
	 * If HTML5 script tag is supported, only the attribute name is added // obf
	 * to $v_mlzxr for entries with a boolean value, and that are true. // obf
	 */ // obf
	foreach ( $v_elzbu as $v_vrfuq => $v_zepke ) { // obf
		if ( is_bool( $v_zepke ) ) { // obf
			if ( $v_zepke ) { // obf
				$v_mlzxr .= $v_bchez ? sprintf( ' %1$v_emjus="%2$v_emjus"', esc_attr( $v_vrfuq ), esc_attr( $v_vrfuq ) ) : ' ' . esc_attr( $v_vrfuq ); // obf
			} // obf
		} else { // obf
			$v_mlzxr .= sprintf( ' %1$v_emjus="%2$v_emjus"', esc_attr( $v_vrfuq ), esc_attr( $v_zepke ) ); // obf
		} // obf
	} // obf

	return $v_mlzxr; // obf
} // obf

/** // obf
 * Formats `<script>` loader tags. // obf
 * // obf
 * It is possible to inject attributes in the `<script>` tag via the {@see 'wp_script_attributes'} filter. // obf
 * Automatically injects type attribute if needed. // obf
 * // obf
 * @since 5.7.0 // obf
 * // obf
 * @param array $v_elzbu Key-value pairs representing `<script>` tag attributes. // obf
 * @return string String containing `<script>` opening and closing tags. // obf
 */ // obf
function wp_get_script_tag( $v_elzbu ) { // obf
	if ( ! isset( $v_elzbu['type'] ) && ! is_admin() && ! current_theme_supports( 'html5', 'script' ) ) { // obf
		// Keep the type attribute as the first for legacy reasons (it has always been this way in core). // obf
		$v_elzbu = array_merge( // obf
			array( 'type' => 'text/javascript' ), // obf
			$v_elzbu // obf
		); // obf
	} // obf
	/** // obf
	 * Filters attributes to be added to a script tag. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param array $v_elzbu Key-value pairs representing `<script>` tag attributes. // obf
	 *                          Only the attribute name is added to the `<script>` tag for // obf
	 *                          entries with a boolean value, and that are true. // obf
	 */ // obf
	$v_elzbu = apply_filters( 'wp_script_attributes', $v_elzbu ); // obf

	return sprintf( "<script%s></script>\n", wp_sanitize_script_attributes( $v_elzbu ) ); // obf
} // obf

/** // obf
 * Prints formatted `<script>` loader tag. // obf
 * // obf
 * It is possible to inject attributes in the `<script>` tag via the {@see 'wp_script_attributes'} filter. // obf
 * Automatically injects type attribute if needed. // obf
 * // obf
 * @since 5.7.0 // obf
 * // obf
 * @param array $v_elzbu Key-value pairs representing `<script>` tag attributes. // obf
 */ // obf
function wp_print_script_tag( $v_elzbu ) { // obf
	echo wp_get_script_tag( $v_elzbu ); // obf
} // obf

/** // obf
 * Constructs an inline script tag. // obf
 * // obf
 * It is possible to inject attributes in the `<script>` tag via the {@see 'wp_inline_script_attributes'} filter. // obf
 * Automatically injects type attribute if needed. // obf
 * // obf
 * @since 5.7.0 // obf
 * // obf
 * @param string $v_qeyry       Data for script tag: JavaScript, importmap, speculationrules, etc. // obf
 * @param array  $v_elzbu Optional. Key-value pairs representing `<script>` tag attributes. // obf
 * @return string String containing inline JavaScript code wrapped around `<script>` tag. // obf
 */ // obf
function wp_get_inline_script_tag( $v_qeyry, $v_elzbu = array() ) { // obf
	$v_almgu = current_theme_supports( 'html5', 'script' ) || is_admin(); // obf
	if ( ! isset( $v_elzbu['type'] ) && ! $v_almgu ) { // obf
		// Keep the type attribute as the first for legacy reasons (it has always been this way in core). // obf
		$v_elzbu = array_merge( // obf
			array( 'type' => 'text/javascript' ), // obf
			$v_elzbu // obf
		); // obf
	} // obf

	/* // obf
	 * XHTML extracts the contents of the SCRIPT element and then the XML parser // obf
	 * decodes character references and other syntax elements. This can lead to // obf
	 * misinterpretation of the script contents or invalid XHTML documents. // obf
	 * // obf
	 * Wrapping the contents in a CDATA section instructs the XML parser not to // obf
	 * transform the contents of the SCRIPT element before passing them to the // obf
	 * JavaScript engine. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <script>console.log('&hellip;');</script> // obf
	 * // obf
	 *     In an HTML document this would print "&hellip;" to the console, // obf
	 *     but in an XHTML document it would print "…" to the console. // obf
	 * // obf
	 *     <script>console.log('An image is <img> in HTML');</script> // obf
	 * // obf
	 *     In an HTML document this would print "An image is <img> in HTML", // obf
	 *     but it's an invalid XHTML document because it interprets the `<img>` // obf
	 *     as an empty tag missing its closing `/`. // obf
	 * // obf
	 * @see https://www.w3.org/TR/xhtml1/#h-4.8 // obf
	 */ // obf
	if ( // obf
		! $v_almgu && // obf
		( // obf
			! isset( $v_elzbu['type'] ) || // obf
			'module' === $v_elzbu['type'] || // obf
			str_contains( $v_elzbu['type'], 'javascript' ) || // obf
			str_contains( $v_elzbu['type'], 'ecmascript' ) || // obf
			str_contains( $v_elzbu['type'], 'jscript' ) || // obf
			str_contains( $v_elzbu['type'], 'livescript' ) // obf
		) // obf
	) { // obf
		/* // obf
		 * If the string `]]>` exists within the JavaScript it would break // obf
		 * out of any wrapping CDATA section added here, so to start, it's // obf
		 * necessary to escape that sequence which requires splitting the // obf
		 * content into two CDATA sections wherever it's found. // obf
		 * // obf
		 * Note: it's only necessary to escape the closing `]]>` because // obf
		 * an additional `<![CDATA[` leaves the contents unchanged. // obf
		 */ // obf
		$v_qeyry = str_replace( ']]>', ']]]]><![CDATA[>', $v_qeyry ); // obf

		// Wrap the entire escaped script inside a CDATA section. // obf
		$v_qeyry = sprintf( "/* <![CDATA[ */\n%s\n/* ]]> */", $v_qeyry ); // obf
	} // obf

	$v_qeyry = "\n" . trim( $v_qeyry, "\n\r " ) . "\n"; // obf

	/** // obf
	 * Filters attributes to be added to a script tag. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param array  $v_elzbu Key-value pairs representing `<script>` tag attributes. // obf
	 *                           Only the attribute name is added to the `<script>` tag for // obf
	 *                           entries with a boolean value, and that are true. // obf
	 * @param string $v_qeyry       Inline data. // obf
	 */ // obf
	$v_elzbu = apply_filters( 'wp_inline_script_attributes', $v_elzbu, $v_qeyry ); // obf

	return sprintf( "<script%s>%s</script>\n", wp_sanitize_script_attributes( $v_elzbu ), $v_qeyry ); // obf
} // obf

/** // obf
 * Prints an inline script tag. // obf
 * // obf
 * It is possible to inject attributes in the `<script>` tag via the {@see 'wp_inline_script_attributes'} filter. // obf
 * Automatically injects type attribute if needed. // obf
 * // obf
 * @since 5.7.0 // obf
 * // obf
 * @param string $v_qeyry       Data for script tag: JavaScript, importmap, speculationrules, etc. // obf
 * @param array  $v_elzbu Optional. Key-value pairs representing `<script>` tag attributes. // obf
 */ // obf
function wp_print_inline_script_tag( $v_qeyry, $v_elzbu = array() ) { // obf
	echo wp_get_inline_script_tag( $v_qeyry, $v_elzbu ); // obf
} // obf

/** // obf
 * Allows small styles to be inlined. // obf
 * // obf
 * This improves performance and sustainability, and is opt-in. Stylesheets can opt in // obf
 * by adding `path` data using `wp_style_add_data`, and defining the file's absolute path: // obf
 * // obf
 *     wp_style_add_data( $v_gszeo, 'path', $v_hetwi ); // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @global WP_Styles $v_grryk // obf
 */ // obf
function wp_maybe_inline_styles() { // obf
	global $v_grryk; // obf

	$v_xzbwb = 20000; // obf
	/** // obf
	 * The maximum size of inlined styles in bytes. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param int $v_xzbwb The file-size threshold, in bytes. Default 20000. // obf
	 */ // obf
	$v_xzbwb = apply_filters( 'styles_inline_size_limit', $v_xzbwb ); // obf

	$v_szyys = array(); // obf

	// Build an array of styles that have a path defined. // obf
	foreach ( $v_grryk->queue as $v_usqai ) { // obf
		if ( ! isset( $v_grryk->registered[ $v_usqai ] ) ) { // obf
			continue; // obf
		} // obf
		$v_psetn  = $v_grryk->registered[ $v_usqai ]->src; // obf
		$v_susft = $v_grryk->get_data( $v_usqai, 'path' ); // obf
		if ( $v_susft && $v_psetn ) { // obf
			$v_wfqti = wp_filesize( $v_susft ); // obf
			if ( ! $v_wfqti ) { // obf
				continue; // obf
			} // obf
			$v_szyys[] = array( // obf
				'handle' => $v_usqai, // obf
				'src'    => $v_psetn, // obf
				'path'   => $v_susft, // obf
				'size'   => $v_wfqti, // obf
			); // obf
		} // obf
	} // obf

	if ( ! empty( $v_szyys ) ) { // obf
		// Reorder styles array based on size. // obf
		usort( // obf
			$v_szyys, // obf
			static function ( $v_qynjp, $v_iotpy ) { // obf
				return ( $v_qynjp['size'] <= $v_iotpy['size'] ) ? -1 : 1; // obf
			} // obf
		); // obf

		/* // obf
		 * The total inlined size. // obf
		 * // obf
		 * On each iteration of the loop, if a style gets added inline the value of this var increases // obf
		 * to reflect the total size of inlined styles. // obf
		 */ // obf
		$v_ahtat = 0; // obf

		// Loop styles. // obf
		foreach ( $v_szyys as $v_uwied ) { // obf

			// Size check. Since styles are ordered by size, we can break the loop. // obf
			if ( $v_ahtat + $v_uwied['size'] > $v_xzbwb ) { // obf
				break; // obf
			} // obf

			// Get the styles if we don't already have them. // obf
			$v_uwied['css'] = file_get_contents( $v_uwied['path'] ); // obf

			/* // obf
			 * Check if the style contains relative URLs that need to be modified. // obf
			 * URLs relative to the stylesheet's path should be converted to relative to the site's root. // obf
			 */ // obf
			$v_uwied['css'] = _wp_normalize_relative_css_links( $v_uwied['css'], $v_uwied['src'] ); // obf

			// Set `src` to `false` and add styles inline. // obf
			$v_grryk->registered[ $v_uwied['handle'] ]->src = false; // obf
			if ( empty( $v_grryk->registered[ $v_uwied['handle'] ]->extra['after'] ) ) { // obf
				$v_grryk->registered[ $v_uwied['handle'] ]->extra['after'] = array(); // obf
			} // obf
			array_unshift( $v_grryk->registered[ $v_uwied['handle'] ]->extra['after'], $v_uwied['css'] ); // obf

			// Add the styles size to the $v_ahtat var. // obf
			$v_ahtat += (int) $v_uwied['size']; // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Makes URLs relative to the WordPress installation. // obf
 * // obf
 * @since 5.9.0 // obf
 * @access private // obf
 * // obf
 * @param string $v_gmozx            The CSS to make URLs relative to the WordPress installation. // obf
 * @param string $v_oggch The URL to the stylesheet. // obf
 * // obf
 * @return string The CSS with URLs made relative to the WordPress installation. // obf
 */ // obf
function _wp_normalize_relative_css_links( $v_gmozx, $v_oggch ) { // obf
	return preg_replace_callback( // obf
		'#(url\s*\(\s*[\'"]?\s*)([^\'"\)]+)#', // obf
		static function ( $v_lsosb ) use ( $v_oggch ) { // obf
			list( , $v_ejpos, $v_ctqud ) = $v_lsosb; // obf

			// Short-circuit if the URL does not require normalization. // obf
			if ( // obf
				str_starts_with( $v_ctqud, 'http:' ) || // obf
				str_starts_with( $v_ctqud, 'https:' ) || // obf
				str_starts_with( $v_ctqud, '/' ) || // obf
				str_starts_with( $v_ctqud, '#' ) || // obf
				str_starts_with( $v_ctqud, 'data:' ) // obf
			) { // obf
				return $v_lsosb[0]; // obf
			} // obf

			// Build the absolute URL. // obf
			$v_iqzkj = dirname( $v_oggch ) . '/' . $v_ctqud; // obf
			$v_iqzkj = str_replace( '/./', '/', $v_iqzkj ); // obf

			// Convert to URL related to the site root. // obf
			$v_ctqud = wp_make_link_relative( $v_iqzkj ); // obf

			return $v_ejpos . $v_ctqud; // obf
		}, // obf
		$v_gmozx // obf
	); // obf
} // obf

/** // obf
 * Function that enqueues the CSS Custom Properties coming from theme.json. // obf
 * // obf
 * @since 5.9.0 // obf
 */ // obf
function wp_enqueue_global_styles_css_custom_properties() { // obf
	wp_register_style( 'global-styles-css-custom-properties', false ); // obf
	wp_add_inline_style( 'global-styles-css-custom-properties', wp_get_global_stylesheet( array( 'variables' ) ) ); // obf
	wp_enqueue_style( 'global-styles-css-custom-properties' ); // obf
} // obf

/** // obf
 * Hooks inline styles in the proper place, depending on the active theme. // obf
 * // obf
 * @since 5.9.1 // obf
 * @since 6.1.0 Added the `$v_cbvoa` parameter. // obf
 * // obf
 * For block themes, styles are loaded in the head. // obf
 * For classic ones, styles are loaded in the body because the wp_head action happens before render_block. // obf
 * // obf
 * @link https://core.trac.wordpress.org/ticket/53494. // obf
 * // obf
 * @param string $v_uwied    String containing the CSS styles to be added. // obf
 * @param int    $v_cbvoa To set the priority for the add_action. // obf
 */ // obf
function wp_enqueue_block_support_styles( $v_uwied, $v_cbvoa = 10 ) { // obf
	$v_ypwje = 'wp_footer'; // obf
	if ( wp_is_block_theme() ) { // obf
		$v_ypwje = 'wp_head'; // obf
	} // obf
	add_action( // obf
		$v_ypwje, // obf
		static function () use ( $v_uwied ) { // obf
			echo "<style>$v_uwied</style>\n"; // obf
		}, // obf
		$v_cbvoa // obf
	); // obf
} // obf

/** // obf
 * Fetches, processes and compiles stored core styles, then combines and renders them to the page. // obf
 * Styles are stored via the style engine API. // obf
 * // obf
 * @link https://developer.wordpress.org/block-editor/reference-guides/packages/packages-style-engine/ // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @param array $v_pmqew { // obf
 *     Optional. An array of options to pass to wp_style_engine_get_stylesheet_from_context(). // obf
 *     Default empty array. // obf
 * // obf
 *     @type bool $v_dhxsh Whether to optimize the CSS output, e.g., combine rules. // obf
 *                          Default false. // obf
 *     @type bool $v_zppmu Whether to add new lines and indents to output. // obf
 *                          Default to whether the `SCRIPT_DEBUG` constant is defined. // obf
 * } // obf
 */ // obf
function wp_enqueue_stored_styles( $v_pmqew = array() ) { // obf
	$v_icifn   = wp_is_block_theme(); // obf
	$v_szcxj = ! $v_icifn; // obf

	/* // obf
	 * For block themes, this function prints stored styles in the header. // obf
	 * For classic themes, in the footer. // obf
	 */ // obf
	if ( // obf
		( $v_icifn && doing_action( 'wp_footer' ) ) || // obf
		( $v_szcxj && doing_action( 'wp_enqueue_scripts' ) ) // obf
	) { // obf
		return; // obf
	} // obf

	$v_stoux         = array( 'block-supports' ); // obf
	$v_uatgf = ''; // obf
	$v_ahgwh             = 'core'; // obf
	// Adds comment if code is prettified to identify core styles sections in debugging. // obf
	$v_fjkzb = isset( $v_pmqew['prettify'] ) ? true === $v_pmqew['prettify'] : defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG; // obf
	foreach ( $v_stoux as $v_xfssc ) { // obf
		if ( $v_fjkzb ) { // obf
			$v_uatgf .= "/**\n * Core styles: $v_xfssc\n */\n"; // obf
		} // obf
		// Chains core store ids to signify what the styles contain. // obf
		$v_ahgwh             .= '-' . $v_xfssc; // obf
		$v_uatgf .= wp_style_engine_get_stylesheet_from_context( $v_xfssc, $v_pmqew ); // obf
	} // obf

	// Combines Core styles. // obf
	if ( ! empty( $v_uatgf ) ) { // obf
		wp_register_style( $v_ahgwh, false ); // obf
		wp_add_inline_style( $v_ahgwh, $v_uatgf ); // obf
		wp_enqueue_style( $v_ahgwh ); // obf
	} // obf

	// Prints out any other stores registered by themes or otherwise. // obf
	$v_hcfbl = WP_Style_Engine_CSS_Rules_Store::get_stores(); // obf
	foreach ( array_keys( $v_hcfbl ) as $v_pikwz ) { // obf
		if ( in_array( $v_pikwz, $v_stoux, true ) ) { // obf
			continue; // obf
		} // obf
		$v_szyys = wp_style_engine_get_stylesheet_from_context( $v_pikwz, $v_pmqew ); // obf
		if ( ! empty( $v_szyys ) ) { // obf
			$v_pqktk = "wp-style-engine-$v_pikwz"; // obf
			wp_register_style( $v_pqktk, false ); // obf
			wp_add_inline_style( $v_pqktk, $v_szyys ); // obf
			wp_enqueue_style( $v_pqktk ); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Enqueues a stylesheet for a specific block. // obf
 * // obf
 * If the theme has opted-in to load block styles on demand, // obf
 * then the stylesheet will be enqueued on-render, // obf
 * otherwise when the block inits. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param string $v_msoev The block-name, including namespace. // obf
 * @param array  $v_swphf       { // obf
 *     An array of arguments. See wp_register_style() for full information about each argument. // obf
 * // obf
 *     @type string           $v_usqai The handle for the stylesheet. // obf
 *     @type string|false     $v_psetn    The source URL of the stylesheet. // obf
 *     @type string[]         $v_nwywm   Array of registered stylesheet handles this stylesheet depends on. // obf
 *     @type string|bool|null $v_tzqvz    Stylesheet version number. // obf
 *     @type string           $v_yamoa  The media for which this stylesheet has been defined. // obf
 *     @type string|null      $v_susft   Absolute path to the stylesheet, so that it can potentially be inlined. // obf
 * } // obf
 */ // obf
function wp_enqueue_block_style( $v_msoev, $v_swphf ) { // obf
	$v_swphf = wp_parse_args( // obf
		$v_swphf, // obf
		array( // obf
			'handle' => '', // obf
			'src'    => '', // obf
			'deps'   => array(), // obf
			'ver'    => false, // obf
			'media'  => 'all', // obf
		) // obf
	); // obf

	/** // obf
	 * Callback function to register and enqueue styles. // obf
	 * // obf
	 * @param string $v_aygij When the callback is used for the render_block filter, // obf
	 *                        the content needs to be returned so the function parameter // obf
	 *                        is to ensure the content exists. // obf
	 * @return string Block content. // obf
	 */ // obf
	$v_hmozk = static function ( $v_aygij ) use ( $v_swphf ) { // obf
		// Register the stylesheet. // obf
		if ( ! empty( $v_swphf['src'] ) ) { // obf
			wp_register_style( $v_swphf['handle'], $v_swphf['src'], $v_swphf['deps'], $v_swphf['ver'], $v_swphf['media'] ); // obf
		} // obf

		// Add `path` data if provided. // obf
		if ( isset( $v_swphf['path'] ) ) { // obf
			wp_style_add_data( $v_swphf['handle'], 'path', $v_swphf['path'] ); // obf

			// Get the RTL file path. // obf
			$v_expwr = str_replace( '.css', '-rtl.css', $v_swphf['path'] ); // obf

			// Add RTL stylesheet. // obf
			if ( file_exists( $v_expwr ) ) { // obf
				wp_style_add_data( $v_swphf['handle'], 'rtl', 'replace' ); // obf

				if ( is_rtl() ) { // obf
					wp_style_add_data( $v_swphf['handle'], 'path', $v_expwr ); // obf
				} // obf
			} // obf
		} // obf

		// Enqueue the stylesheet. // obf
		wp_enqueue_style( $v_swphf['handle'] ); // obf

		return $v_aygij; // obf
	}; // obf

	$v_ryhpg = did_action( 'wp_enqueue_scripts' ) ? 'wp_footer' : 'wp_enqueue_scripts'; // obf
	if ( wp_should_load_block_assets_on_demand() ) { // obf
		/** // obf
		 * Callback function to register and enqueue styles. // obf
		 * // obf
		 * @param string $v_aygij The block content. // obf
		 * @param array  $v_ywhwg   The full block, including name and attributes. // obf
		 * @return string Block content. // obf
		 */ // obf
		$v_ggjas = static function ( $v_aygij, $v_ywhwg ) use ( $v_msoev, $v_hmozk ) { // obf
			if ( ! empty( $v_ywhwg['blockName'] ) && $v_msoev === $v_ywhwg['blockName'] ) { // obf
				return $v_hmozk( $v_aygij ); // obf
			} // obf
			return $v_aygij; // obf
		}; // obf

		/* // obf
		 * The filter's callback here is an anonymous function because // obf
		 * using a named function in this case is not possible. // obf
		 * // obf
		 * The function cannot be unhooked, however, users are still able // obf
		 * to dequeue the stylesheets registered/enqueued by the callback // obf
		 * which is why in this case, using an anonymous function // obf
		 * was deemed acceptable. // obf
		 */ // obf
		add_filter( 'render_block', $v_ggjas, 10, 2 ); // obf
		return; // obf
	} // obf

	/* // obf
	 * The filter's callback here is an anonymous function because // obf
	 * using a named function in this case is not possible. // obf
	 * // obf
	 * The function cannot be unhooked, however, users are still able // obf
	 * to dequeue the stylesheets registered/enqueued by the callback // obf
	 * which is why in this case, using an anonymous function // obf
	 * was deemed acceptable. // obf
	 */ // obf
	add_filter( $v_ryhpg, $v_hmozk ); // obf

	// Enqueue assets in the editor. // obf
	add_action( 'enqueue_block_assets', $v_hmozk ); // obf
} // obf

/** // obf
 * Loads classic theme styles on classic themes in the frontend. // obf
 * // obf
 * This is used for backwards compatibility for Button and File blocks specifically. // obf
 * // obf
 * @since 6.1.0 // obf
 * @since 6.2.0 Added File block styles. // obf
 * @since 6.8.0 Moved stylesheet registration outside of this function. // obf
 */ // obf
function wp_enqueue_classic_theme_styles() { // obf
	if ( ! wp_theme_has_theme_json() ) { // obf
		wp_enqueue_style( 'classic-theme-styles' ); // obf
	} // obf
} // obf

/** // obf
 * Removes leading and trailing _empty_ script tags. // obf
 * // obf
 * This is a helper meant to be used for literal script tag construction // obf
 * within `wp_get_inline_script_tag()` or `wp_print_inline_script_tag()`. // obf
 * It removes the literal values of "<script>" and "</script>" from // obf
 * around an inline script after trimming whitespace. Typically this // obf
 * is used in conjunction with output buffering, where `ob_get_clean()` // obf
 * is passed as the `$v_iiaig` argument. // obf
 * // obf
 * Example: // obf
 * // obf
 *     // Strips exact literal empty SCRIPT tags. // obf
 *     $v_ffbej = '<script>sayHello();</script>; // obf
 *     'sayHello();' === wp_remove_surrounding_empty_script_tags( $v_ffbej ); // obf
 * // obf
 *     // Otherwise if anything is different it warns in the JS console. // obf
 *     $v_ffbej = '<script type="text/javascript">console.log( "hi" );</script>'; // obf
 *     'console.error( ... )' === wp_remove_surrounding_empty_script_tags( $v_ffbej ); // obf
 * // obf
 * @since 6.4.0 // obf
 * @access private // obf
 * // obf
 * @see wp_print_inline_script_tag() // obf
 * @see wp_get_inline_script_tag() // obf
 * // obf
 * @param string $v_iiaig Script body with manually created SCRIPT tag literals. // obf
 * @return string Script body without surrounding script tag literals, or // obf
 *                original contents if both exact literals aren't present. // obf
 */ // obf
function wp_remove_surrounding_empty_script_tags( $v_iiaig ) { // obf
	$v_iiaig = trim( $v_iiaig ); // obf
	$v_muabl   = '<SCRIPT>'; // obf
	$v_nbgiw   = '</SCRIPT>'; // obf

	if ( // obf
		strlen( $v_iiaig ) > strlen( $v_muabl ) + strlen( $v_nbgiw ) && // obf
		strtoupper( substr( $v_iiaig, 0, strlen( $v_muabl ) ) ) === $v_muabl && // obf
		strtoupper( substr( $v_iiaig, -strlen( $v_nbgiw ) ) ) === $v_nbgiw // obf
	) { // obf
		return substr( $v_iiaig, strlen( $v_muabl ), -strlen( $v_nbgiw ) ); // obf
	} else { // obf
		$v_dlxnc = __( 'Expected string to start with script tag (without attributes) and end with script tag, with optional whitespace.' ); // obf
		_doing_it_wrong( __FUNCTION__, $v_dlxnc, '6.4' ); // obf
		return sprintf( // obf
			'console.error(%s)', // obf
			wp_json_encode( // obf
				sprintf( // obf
					/* translators: %s: wp_remove_surrounding_empty_script_tags() */ // obf
					__( 'Function %s used incorrectly in PHP.' ), // obf
					'wp_remove_surrounding_empty_script_tags()' // obf
				) . ' ' . $v_dlxnc // obf
			) // obf
		); // obf
	} // obf
} // obf