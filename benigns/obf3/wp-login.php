
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress User Page // obf
 * // obf
 * Handles authentication, registering, resetting passwords, forgot password, // obf
 * and other user handling. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** Make sure that the WordPress bootstrap has run before continuing. */ // obf
require __DIR__ . '/wp-load.php'; // obf

// Redirect to HTTPS login if forced to use SSL. // obf
if ( force_ssl_admin() && ! is_ssl() ) { // obf
	if ( str_starts_with( $v_hmwlw['REQUEST_URI'], 'http' ) ) { // obf
		wp_safe_redirect( set_url_scheme( $v_hmwlw['REQUEST_URI'], 'https' ) ); // obf
		exit; // obf
	} else { // obf
		wp_safe_redirect( 'https://' . $v_hmwlw['HTTP_HOST'] . $v_hmwlw['REQUEST_URI'] ); // obf
		exit; // obf
	} // obf
} // obf

/** // obf
 * Outputs the login page header. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @global string      $v_zmboa         Login error message set by deprecated pluggable wp_login() function // obf
 *                                    or plugins replacing it. // obf
 * @global bool|string $v_baabx Whether interim login modal is being displayed. String 'success' // obf
 *                                    upon successful login. // obf
 * @global string      $v_teezy        The action that brought the visitor to the login page. // obf
 * // obf
 * @param string|null   $v_csqqj    Optional. WordPress login page title to display in the `<title>` element. // obf
 *                                Defaults to 'Log In'. // obf
 * @param string        $v_aldzu  Optional. Message to display in header. Default empty. // obf
 * @param WP_Error|null $v_nkwax Optional. The error to pass. Defaults to a WP_Error instance. // obf
 */ // obf
function login_header( $v_csqqj = null, $v_aldzu = '', $v_nkwax = null ) { // obf
	global $v_zmboa, $v_baabx, $v_teezy; // obf

	if ( null === $v_csqqj ) { // obf
		$v_csqqj = __( 'Log In' ); // obf
	} // obf

	// Don't index any of these forms. // obf
	add_filter( 'wp_robots', 'wp_robots_sensitive_page' ); // obf
	add_action( 'login_head', 'wp_strict_cross_origin_referrer' ); // obf

	add_action( 'login_head', 'wp_login_viewport_meta' ); // obf

	if ( ! is_wp_error( $v_nkwax ) ) { // obf
		$v_nkwax = new WP_Error(); // obf
	} // obf

	// Shake it! // obf
	$v_ucryf = array( 'empty_password', 'empty_email', 'invalid_email', 'invalidcombo', 'empty_username', 'invalid_username', 'incorrect_password', 'retrieve_password_email_failure' ); // obf
	/** // obf
	 * Filters the error codes array for shaking the login form. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string[] $v_ucryf Error codes that shake the login form. // obf
	 */ // obf
	$v_ucryf = apply_filters( 'shake_error_codes', $v_ucryf ); // obf

	if ( $v_ucryf && $v_nkwax->has_errors() && in_array( $v_nkwax->get_error_code(), $v_ucryf, true ) ) { // obf
		add_action( 'login_footer', 'wp_shake_js', 12 ); // obf
	} // obf

	$v_nwnsg = get_bloginfo( 'name', 'display' ); // obf

	/* translators: Login screen title. 1: Login screen name, 2: Network or site name. */ // obf
	$v_nwnsg = sprintf( __( '%1$v_ydncy &lsaquo; %2$v_ydncy &#8212; WordPress' ), $v_csqqj, $v_nwnsg ); // obf

	if ( wp_is_recovery_mode() ) { // obf
		/* translators: %s: Login screen title. */ // obf
		$v_nwnsg = sprintf( __( 'Recovery Mode &#8212; %s' ), $v_nwnsg ); // obf
	} // obf

	/** // obf
	 * Filters the title tag content for login page. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param string $v_nwnsg The page title, with extra context added. // obf
	 * @param string $v_csqqj       The original page title. // obf
	 */ // obf
	$v_nwnsg = apply_filters( 'login_title', $v_nwnsg, $v_csqqj ); // obf

	?><!DOCTYPE html> // obf
	<html <?php language_attributes(); ?>> // obf
	<head> // obf
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" /> // obf
	<title><?php echo $v_nwnsg; ?></title> // obf
	<?php // obf

	wp_enqueue_style( 'login' ); // obf

	/* // obf
	 * Remove all stored post data on logging out. // obf
	 * This could be added by add_action('login_head'...) like wp_shake_js(), // obf
	 * but maybe better if it's not removable by plugins. // obf
	 */ // obf
	if ( 'loggedout' === $v_nkwax->get_error_code() ) { // obf
		ob_start(); // obf
		?> // obf
		<script>if("sessionStorage" in window){try{for(var key in sessionStorage){if(key.indexOf("wp-autosave-")!=-1){sessionStorage.removeItem(key)}}}catch(e){}};</script> // obf
		<?php // obf
		wp_print_inline_script_tag( wp_remove_surrounding_empty_script_tags( ob_get_clean() ) ); // obf
	} // obf

	/** // obf
	 * Enqueues scripts and styles for the login page. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	do_action( 'login_enqueue_scripts' ); // obf

	/** // obf
	 * Fires in the login page header after scripts are enqueued. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 */ // obf
	do_action( 'login_head' ); // obf

	$v_hvzol = __( 'https://wordpress.org/' ); // obf

	/** // obf
	 * Filters link URL of the header logo above login form. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string $v_hvzol Login header logo URL. // obf
	 */ // obf
	$v_hvzol = apply_filters( 'login_headerurl', $v_hvzol ); // obf

	$v_oeoat = ''; // obf

	/** // obf
	 * Filters the title attribute of the header logo above login form. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @deprecated 5.2.0 Use {@see 'login_headertext'} instead. // obf
	 * // obf
	 * @param string $v_oeoat Login header logo title attribute. // obf
	 */ // obf
	$v_oeoat = apply_filters_deprecated( // obf
		'login_headertitle', // obf
		array( $v_oeoat ), // obf
		'5.2.0', // obf
		'login_headertext', // obf
		__( 'Usage of the title attribute on the login logo is not recommended for accessibility reasons. Use the link text instead.' ) // obf
	); // obf

	$v_zixzz = empty( $v_oeoat ) ? __( 'Powered by WordPress' ) : $v_oeoat; // obf

	/** // obf
	 * Filters the link text of the header logo above the login form. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_zixzz The login header logo link text. // obf
	 */ // obf
	$v_zixzz = apply_filters( 'login_headertext', $v_zixzz ); // obf

	$v_blumf = array( 'login-action-' . $v_teezy, 'wp-core-ui' ); // obf

	if ( is_rtl() ) { // obf
		$v_blumf[] = 'rtl'; // obf
	} // obf

	if ( $v_baabx ) { // obf
		$v_blumf[] = 'interim-login'; // obf

		?> // obf
		<style type="text/css">html{background-color: transparent;}</style> // obf
		<?php // obf

		if ( 'success' === $v_baabx ) { // obf
			$v_blumf[] = 'interim-login-success'; // obf
		} // obf
	} // obf

	$v_blumf[] = ' locale-' . sanitize_html_class( strtolower( str_replace( '_', '-', get_locale() ) ) ); // obf

	/** // obf
	 * Filters the login page body classes. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string[] $v_blumf An array of body classes. // obf
	 * @param string   $v_teezy  The action that brought the visitor to the login page. // obf
	 */ // obf
	$v_blumf = apply_filters( 'login_body_class', $v_blumf, $v_teezy ); // obf

	?> // obf
	</head> // obf
	<body class="login no-js <?php echo esc_attr( implode( ' ', $v_blumf ) ); ?>"> // obf
	<?php // obf
	wp_print_inline_script_tag( "document.body.className = document.body.className.replace('no-js','js');" ); // obf
	?> // obf

	<?php // obf
	/** // obf
	 * Fires in the login page header after the body tag is opened. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 */ // obf
	do_action( 'login_header' ); // obf
	?> // obf
	<?php // obf
	if ( 'confirm_admin_email' !== $v_teezy && ! empty( $v_csqqj ) ) : // obf
		?> // obf
		<h1 class="screen-reader-text"><?php echo $v_csqqj; ?></h1> // obf
		<?php // obf
	endif; // obf
	?> // obf
	<div id="login"> // obf
		<h1 role="presentation" class="wp-login-logo"><a href="<?php echo esc_url( $v_hvzol ); ?>"><?php echo $v_zixzz; ?></a></h1> // obf
	<?php // obf
	/** // obf
	 * Filters the message to display above the login form. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string $v_aldzu Login message text. // obf
	 */ // obf
	$v_aldzu = apply_filters( 'login_message', $v_aldzu ); // obf

	if ( ! empty( $v_aldzu ) ) { // obf
		echo $v_aldzu . "\n"; // obf
	} // obf

	// In case a plugin uses $v_zmboa rather than the $v_fokan object. // obf
	if ( ! empty( $v_zmboa ) ) { // obf
		$v_nkwax->add( 'error', $v_zmboa ); // obf
		unset( $v_zmboa ); // obf
	} // obf

	if ( $v_nkwax->has_errors() ) { // obf
		$v_cwhdp = array(); // obf
		$v_udfqq   = ''; // obf

		foreach ( $v_nkwax->get_error_codes() as $v_khtwi ) { // obf
			$v_szmim = $v_nkwax->get_error_data( $v_khtwi ); // obf
			foreach ( $v_nkwax->get_error_messages( $v_khtwi ) as $v_owypn ) { // obf
				if ( 'message' === $v_szmim ) { // obf
					$v_udfqq .= '<p>' . $v_owypn . '</p>'; // obf
				} else { // obf
					$v_cwhdp[] = $v_owypn; // obf
				} // obf
			} // obf
		} // obf

		if ( ! empty( $v_cwhdp ) ) { // obf
			$v_bwciv = ''; // obf

			if ( count( $v_cwhdp ) > 1 ) { // obf
				$v_bwciv .= '<ul class="login-error-list">'; // obf

				foreach ( $v_cwhdp as $v_eobqu ) { // obf
					$v_bwciv .= '<li>' . $v_eobqu . '</li>'; // obf
				} // obf

				$v_bwciv .= '</ul>'; // obf
			} else { // obf
				$v_bwciv .= '<p>' . $v_cwhdp[0] . '</p>'; // obf
			} // obf

			/** // obf
			 * Filters the error messages displayed above the login form. // obf
			 * // obf
			 * @since 2.1.0 // obf
			 * // obf
			 * @param string $v_bwciv Login error messages. // obf
			 */ // obf
			$v_bwciv = apply_filters( 'login_errors', $v_bwciv ); // obf

			wp_admin_notice( // obf
				$v_bwciv, // obf
				array( // obf
					'type'           => 'error', // obf
					'id'             => 'login_error', // obf
					'paragraph_wrap' => false, // obf
				) // obf
			); // obf
		} // obf

		if ( ! empty( $v_udfqq ) ) { // obf
			/** // obf
			 * Filters instructional messages displayed above the login form. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * // obf
			 * @param string $v_udfqq Login messages. // obf
			 */ // obf
			$v_udfqq = apply_filters( 'login_messages', $v_udfqq ); // obf

			wp_admin_notice( // obf
				$v_udfqq, // obf
				array( // obf
					'type'               => 'info', // obf
					'id'                 => 'login-message', // obf
					'additional_classes' => array( 'message' ), // obf
					'paragraph_wrap'     => false, // obf
				) // obf
			); // obf
		} // obf
	} // obf
} // End of login_header(). // obf

/** // obf
 * Outputs the footer for the login page. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global bool|string $v_baabx Whether interim login modal is being displayed. String 'success' // obf
 *                                    upon successful login. // obf
 * // obf
 * @param string $v_hlknj Which input to auto-focus. // obf
 */ // obf
function login_footer( $v_hlknj = '' ) { // obf
	global $v_baabx; // obf

	// Don't allow interim logins to navigate away from the page. // obf
	if ( ! $v_baabx ) { // obf
		?> // obf
		<p id="backtoblog"> // obf
			<?php // obf
			$v_pacri = sprintf( // obf
				'<a href="%s">%s</a>', // obf
				esc_url( home_url( '/' ) ), // obf
				sprintf( // obf
					/* translators: %s: Site title. */ // obf
					_x( '&larr; Go to %s', 'site' ), // obf
					get_bloginfo( 'title', 'display' ) // obf
				) // obf
			); // obf
			/** // obf
			 * Filters the "Go to site" link displayed in the login page footer. // obf
			 * // obf
			 * @since 5.7.0 // obf
			 * // obf
			 * @param string $v_ufnyr HTML link to the home URL of the current site. // obf
			 */ // obf
			echo apply_filters( 'login_site_html_link', $v_pacri ); // obf
			?> // obf
		</p> // obf
		<?php // obf

		the_privacy_policy_link( '<div class="privacy-policy-page-link">', '</div>' ); // obf
	} // obf

	?> // obf
	</div><?php // End of <div id="login">. ?> // obf

	<?php // obf
	if ( // obf
		! $v_baabx && // obf
		/** // obf
		 * Filters whether to display the Language selector on the login screen. // obf
		 * // obf
		 * @since 5.9.0 // obf
		 * // obf
		 * @param bool $v_jdgfx Whether to display the Language selector on the login screen. // obf
		 */ // obf
		apply_filters( 'login_display_language_dropdown', true ) // obf
	) { // obf
		$v_ssxrk = get_available_languages(); // obf

		if ( ! empty( $v_ssxrk ) ) { // obf
			?> // obf
			<div class="language-switcher"> // obf
				<form id="language-switcher" method="get"> // obf

					<label for="language-switcher-locales"> // obf
						<span class="dashicons dashicons-translation" aria-hidden="true"></span> // obf
						<span class="screen-reader-text"> // obf
							<?php // obf
							/* translators: Hidden accessibility text. */ // obf
							_e( 'Language' ); // obf
							?> // obf
						</span> // obf
					</label> // obf

					<?php // obf
					$v_kvyse = array( // obf
						'id'                          => 'language-switcher-locales', // obf
						'name'                        => 'wp_lang', // obf
						'selected'                    => determine_locale(), // obf
						'show_available_translations' => false, // obf
						'explicit_option_en_us'       => true, // obf
						'languages'                   => $v_ssxrk, // obf
					); // obf

					/** // obf
					 * Filters default arguments for the Languages select input on the login screen. // obf
					 * // obf
					 * The arguments get passed to the wp_dropdown_languages() function. // obf
					 * // obf
					 * @since 5.9.0 // obf
					 * // obf
					 * @param array $v_kvyse Arguments for the Languages select input on the login screen. // obf
					 */ // obf
					wp_dropdown_languages( apply_filters( 'login_language_dropdown_args', $v_kvyse ) ); // obf
					?> // obf

					<?php if ( $v_baabx ) { ?> // obf
						<input type="hidden" name="interim-login" value="1" /> // obf
					<?php } ?> // obf

					<?php if ( isset( $v_osewh['redirect_to'] ) && '' !== $v_osewh['redirect_to'] ) { ?> // obf
						<input type="hidden" name="redirect_to" value="<?php echo sanitize_url( $v_osewh['redirect_to'] ); ?>" /> // obf
					<?php } ?> // obf

					<?php if ( isset( $v_osewh['action'] ) && '' !== $v_osewh['action'] ) { ?> // obf
						<input type="hidden" name="action" value="<?php echo esc_attr( $v_osewh['action'] ); ?>" /> // obf
					<?php } ?> // obf

						<input type="submit" class="button" value="<?php esc_attr_e( 'Change' ); ?>"> // obf

					</form> // obf
				</div> // obf
		<?php } ?> // obf
	<?php } ?> // obf

	<?php // obf

	if ( ! empty( $v_hlknj ) ) { // obf
		ob_start(); // obf
		?> // obf
		<script> // obf
		try{document.getElementById('<?php echo $v_hlknj; ?>').focus();}catch(e){} // obf
		if(typeof wpOnload==='function')wpOnload(); // obf
		</script> // obf
		<?php // obf
		wp_print_inline_script_tag( wp_remove_surrounding_empty_script_tags( ob_get_clean() ) ); // obf
	} // obf

	/** // obf
	 * Fires in the login page footer. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	do_action( 'login_footer' ); // obf

	?> // obf
	</body> // obf
	</html> // obf
	<?php // obf
} // obf

/** // obf
 * Outputs the JavaScript to handle the form shaking on the login page. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function wp_shake_js() { // obf
	wp_print_inline_script_tag( "document.querySelector('form').classList.add('shake');" ); // obf
} // obf

/** // obf
 * Outputs the viewport meta tag for the login page. // obf
 * // obf
 * @since 3.7.0 // obf
 */ // obf
function wp_login_viewport_meta() { // obf
	?> // obf
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> // obf
	<?php // obf
} // obf

/* // obf
 * Main part. // obf
 * // obf
 * Check the request and redirect or display a form based on the current action. // obf
 */ // obf

$v_teezy = isset( $v_nlkwg['action'] ) && is_string( $v_nlkwg['action'] ) ? $v_nlkwg['action'] : 'login'; // obf
$v_bwciv = new WP_Error(); // obf

if ( isset( $v_osewh['key'] ) ) { // obf
	$v_teezy = 'resetpass'; // obf
} // obf

if ( isset( $v_osewh['checkemail'] ) ) { // obf
	$v_teezy = 'checkemail'; // obf
} // obf

$v_hzasm = array( // obf
	'confirm_admin_email', // obf
	'postpass', // obf
	'logout', // obf
	'lostpassword', // obf
	'retrievepassword', // obf
	'resetpass', // obf
	'rp', // obf
	'register', // obf
	'checkemail', // obf
	'confirmaction', // obf
	'login', // obf
	WP_Recovery_Mode_Link_Service::LOGIN_ACTION_ENTERED, // obf
); // obf

// Validate action so as to default to the login screen. // obf
if ( ! in_array( $v_teezy, $v_hzasm, true ) && false === has_filter( 'login_form_' . $v_teezy ) ) { // obf
	$v_teezy = 'login'; // obf
} // obf

nocache_headers(); // obf

header( 'Content-Type: ' . get_bloginfo( 'html_type' ) . '; charset=' . get_bloginfo( 'charset' ) ); // obf

if ( defined( 'RELOCATE' ) && RELOCATE ) { // Move flag is set. // obf
	if ( isset( $v_hmwlw['PATH_INFO'] ) && ( $v_hmwlw['PATH_INFO'] !== $v_hmwlw['PHP_SELF'] ) ) { // obf
		$v_hmwlw['PHP_SELF'] = str_replace( $v_hmwlw['PATH_INFO'], '', $v_hmwlw['PHP_SELF'] ); // obf
	} // obf

	$v_twhjv = dirname( set_url_scheme( 'http://' . $v_hmwlw['HTTP_HOST'] . $v_hmwlw['PHP_SELF'] ) ); // obf

	if ( get_option( 'siteurl' ) !== $v_twhjv ) { // obf
		update_option( 'siteurl', $v_twhjv ); // obf
	} // obf
} // obf

// Set a cookie now to see if they are supported by the browser. // obf
$v_riicv = ( 'https' === parse_url( wp_login_url(), PHP_URL_SCHEME ) ); // obf
setcookie( TEST_COOKIE, 'WP Cookie check', 0, COOKIEPATH, COOKIE_DOMAIN, $v_riicv, true ); // obf

if ( SITECOOKIEPATH !== COOKIEPATH ) { // obf
	setcookie( TEST_COOKIE, 'WP Cookie check', 0, SITECOOKIEPATH, COOKIE_DOMAIN, $v_riicv, true ); // obf
} // obf

if ( isset( $v_osewh['wp_lang'] ) ) { // obf
	setcookie( 'wp_lang', sanitize_text_field( $v_osewh['wp_lang'] ), 0, COOKIEPATH, COOKIE_DOMAIN, $v_riicv, true ); // obf
} // obf

/** // obf
 * Fires when the login form is initialized. // obf
 * // obf
 * @since 3.2.0 // obf
 */ // obf
do_action( 'login_init' ); // obf

/** // obf
 * Fires before a specified login form action. // obf
 * // obf
 * The dynamic portion of the hook name, `$v_teezy`, refers to the action // obf
 * that brought the visitor to the login form. // obf
 * // obf
 * Possible hook names include: // obf
 * // obf
 *  - `login_form_checkemail` // obf
 *  - `login_form_confirm_admin_email` // obf
 *  - `login_form_confirmaction` // obf
 *  - `login_form_entered_recovery_mode` // obf
 *  - `login_form_login` // obf
 *  - `login_form_logout` // obf
 *  - `login_form_lostpassword` // obf
 *  - `login_form_postpass` // obf
 *  - `login_form_register` // obf
 *  - `login_form_resetpass` // obf
 *  - `login_form_retrievepassword` // obf
 *  - `login_form_rp` // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
do_action( "login_form_{$v_teezy}" ); // obf

$v_pgyyp     = ( 'POST' === $v_hmwlw['REQUEST_METHOD'] ); // obf
$v_baabx = isset( $v_nlkwg['interim-login'] ); // obf

/** // obf
 * Filters the separator used between login form navigation links. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @param string $v_kbdzm The separator used between login form navigation links. // obf
 */ // obf
$v_kbdzm = apply_filters( 'login_link_separator', ' | ' ); // obf

switch ( $v_teezy ) { // obf

	case 'confirm_admin_email': // obf
		/* // obf
		 * Note that `is_user_logged_in()` will return false immediately after logging in // obf
		 * as the current user is not set, see wp-includes/pluggable.php. // obf
		 * However this action runs on a redirect after logging in. // obf
		 */ // obf
		if ( ! is_user_logged_in() ) { // obf
			wp_safe_redirect( wp_login_url() ); // obf
			exit; // obf
		} // obf

		if ( ! empty( $v_nlkwg['redirect_to'] ) ) { // obf
			$v_lwhcd = $v_nlkwg['redirect_to']; // obf
		} else { // obf
			$v_lwhcd = admin_url(); // obf
		} // obf

		if ( current_user_can( 'manage_options' ) ) { // obf
			$v_skqsk = get_option( 'admin_email' ); // obf
		} else { // obf
			wp_safe_redirect( $v_lwhcd ); // obf
			exit; // obf
		} // obf

		/** // obf
		 * Filters the interval for dismissing the admin email confirmation screen. // obf
		 * // obf
		 * If `0` (zero) is returned, the "Remind me later" link will not be displayed. // obf
		 * // obf
		 * @since 5.3.1 // obf
		 * // obf
		 * @param int $v_zukud Interval time (in seconds). Default is 3 days. // obf
		 */ // obf
		$v_lycpq = (int) apply_filters( 'admin_email_remind_interval', 3 * DAY_IN_SECONDS ); // obf

		if ( ! empty( $v_osewh['remind_me_later'] ) ) { // obf
			if ( ! wp_verify_nonce( $v_osewh['remind_me_later'], 'remind_me_later_nonce' ) ) { // obf
				wp_safe_redirect( wp_login_url() ); // obf
				exit; // obf
			} // obf

			if ( $v_lycpq > 0 ) { // obf
				update_option( 'admin_email_lifespan', time() + $v_lycpq ); // obf
			} // obf

			$v_lwhcd = add_query_arg( 'admin_email_remind_later', 1, $v_lwhcd ); // obf
			wp_safe_redirect( $v_lwhcd ); // obf
			exit; // obf
		} // obf

		if ( ! empty( $v_gzamy['correct-admin-email'] ) ) { // obf
			if ( ! check_admin_referer( 'confirm_admin_email', 'confirm_admin_email_nonce' ) ) { // obf
				wp_safe_redirect( wp_login_url() ); // obf
				exit; // obf
			} // obf

			/** // obf
			 * Filters the interval for redirecting the user to the admin email confirmation screen. // obf
			 * // obf
			 * If `0` (zero) is returned, the user will not be redirected. // obf
			 * // obf
			 * @since 5.3.0 // obf
			 * // obf
			 * @param int $v_zukud Interval time (in seconds). Default is 6 months. // obf
			 */ // obf
			$v_mpsop = (int) apply_filters( 'admin_email_check_interval', 6 * MONTH_IN_SECONDS ); // obf

			if ( $v_mpsop > 0 ) { // obf
				update_option( 'admin_email_lifespan', time() + $v_mpsop ); // obf
			} // obf

			wp_safe_redirect( $v_lwhcd ); // obf
			exit; // obf
		} // obf

		login_header( __( 'Confirm your administration email' ), '', $v_bwciv ); // obf

		/** // obf
		 * Fires before the admin email confirm form. // obf
		 * // obf
		 * @since 5.3.0 // obf
		 * // obf
		 * @param WP_Error $v_bwciv A `WP_Error` object containing any errors generated by using invalid // obf
		 *                         credentials. Note that the error object may not contain any errors. // obf
		 */ // obf
		do_action( 'admin_email_confirm', $v_bwciv ); // obf

		?> // obf

		<form class="admin-email-confirm-form" name="admin-email-confirm-form" action="<?php echo esc_url( site_url( 'wp-login.php?action=confirm_admin_email', 'login_post' ) ); ?>" method="post"> // obf
			<?php // obf
			/** // obf
			 * Fires inside the admin-email-confirm-form form tags, before the hidden fields. // obf
			 * // obf
			 * @since 5.3.0 // obf
			 */ // obf
			do_action( 'admin_email_confirm_form' ); // obf

			wp_nonce_field( 'confirm_admin_email', 'confirm_admin_email_nonce' ); // obf

			?> // obf
			<input type="hidden" name="redirect_to" value="<?php echo esc_attr( $v_lwhcd ); ?>" /> // obf

			<h1 class="admin-email__heading"> // obf
				<?php _e( 'Administration email verification' ); ?> // obf
			</h1> // obf
			<p class="admin-email__details"> // obf
				<?php _e( 'Please verify that the <strong>administration email</strong> for this website is still correct.' ); ?> // obf
				<?php // obf

				/* translators: URL to the WordPress help section about admin email. */ // obf
				$v_mayex = __( 'https://wordpress.org/documentation/article/settings-general-screen/#email-address' ); // obf

				$v_wccnh = sprintf( // obf
					'<span class="screen-reader-text"> %s</span>', // obf
					/* translators: Hidden accessibility text. */ // obf
					__( '(opens in a new tab)' ) // obf
				); // obf

				printf( // obf
					'<a href="%s" target="_blank">%s%s</a>', // obf
					esc_url( $v_mayex ), // obf
					__( 'Why is this important?' ), // obf
					$v_wccnh // obf
				); // obf

				?> // obf
			</p> // obf
			<p class="admin-email__details"> // obf
				<?php // obf

				printf( // obf
					/* translators: %s: Admin email address. */ // obf
					__( 'Current administration email: %s' ), // obf
					'<strong>' . esc_html( $v_skqsk ) . '</strong>' // obf
				); // obf

				?> // obf
			</p> // obf
			<p class="admin-email__details"> // obf
				<?php _e( 'This email may be different from your personal email address.' ); ?> // obf
			</p> // obf

			<div class="admin-email__actions"> // obf
				<div class="admin-email__actions-primary"> // obf
					<?php // obf

					$v_cjuyz = admin_url( 'options-general.php' ); // obf
					$v_cjuyz = add_query_arg( 'highlight', 'confirm_admin_email', $v_cjuyz ); // obf

					?> // obf
					<a class="button button-large" href="<?php echo esc_url( $v_cjuyz ); ?>"><?php _e( 'Update' ); ?></a> // obf
					<input type="submit" name="correct-admin-email" id="correct-admin-email" class="button button-primary button-large" value="<?php esc_attr_e( 'The email is correct' ); ?>" /> // obf
				</div> // obf
				<?php if ( $v_lycpq > 0 ) : ?> // obf
					<div class="admin-email__actions-secondary"> // obf
						<?php // obf

						$v_wpbay = wp_login_url( $v_lwhcd ); // obf
						$v_wpbay = add_query_arg( // obf
							array( // obf
								'action'          => 'confirm_admin_email', // obf
								'remind_me_later' => wp_create_nonce( 'remind_me_later_nonce' ), // obf
							), // obf
							$v_wpbay // obf
						); // obf

						?> // obf
						<a href="<?php echo esc_url( $v_wpbay ); ?>"><?php _e( 'Remind me later' ); ?></a> // obf
					</div> // obf
				<?php endif; ?> // obf
			</div> // obf
		</form> // obf

		<?php // obf

		login_footer(); // obf
		break; // obf

	case 'postpass': // obf
		$v_lwhcd = $v_gzamy['redirect_to'] ?? wp_get_referer(); // obf

		if ( ! isset( $v_gzamy['post_password'] ) || ! is_string( $v_gzamy['post_password'] ) ) { // obf
			wp_safe_redirect( $v_lwhcd ); // obf
			exit; // obf
		} // obf

		require_once ABSPATH . WPINC . '/class-phpass.php'; // obf
		$v_nmxfx = new PasswordHash( 8, true ); // obf

		/** // obf
		 * Filters the life span of the post password cookie. // obf
		 * // obf
		 * By default, the cookie expires 10 days from creation. To turn this // obf
		 * into a session cookie, return 0. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param int $v_omoqs The expiry time, as passed to setcookie(). // obf
		 */ // obf
		$v_gsafd = apply_filters( 'post_password_expires', time() + 10 * DAY_IN_SECONDS ); // obf

		if ( $v_lwhcd ) { // obf
			$v_riicv = ( 'https' === parse_url( $v_lwhcd, PHP_URL_SCHEME ) ); // obf
		} else { // obf
			$v_riicv = false; // obf
		} // obf

		setcookie( 'wp-postpass_' . COOKIEHASH, $v_nmxfx->HashPassword( wp_unslash( $v_gzamy['post_password'] ) ), $v_gsafd, COOKIEPATH, COOKIE_DOMAIN, $v_riicv ); // obf

		wp_safe_redirect( $v_lwhcd ); // obf
		exit; // obf

	case 'logout': // obf
		check_admin_referer( 'log-out' ); // obf

		$v_pzsum = wp_get_current_user(); // obf

		wp_logout(); // obf

		if ( ! empty( $v_nlkwg['redirect_to'] ) && is_string( $v_nlkwg['redirect_to'] ) ) { // obf
			$v_lwhcd           = $v_nlkwg['redirect_to']; // obf
			$v_sglae = $v_lwhcd; // obf
		} else { // obf
			$v_lwhcd = add_query_arg( // obf
				array( // obf
					'loggedout' => 'true', // obf
					'wp_lang'   => get_user_locale( $v_pzsum ), // obf
				), // obf
				wp_login_url() // obf
			); // obf

			$v_sglae = ''; // obf
		} // obf

		/** // obf
		 * Filters the log out redirect URL. // obf
		 * // obf
		 * @since 4.2.0 // obf
		 * // obf
		 * @param string  $v_lwhcd           The redirect destination URL. // obf
		 * @param string  $v_sglae The requested redirect destination URL passed as a parameter. // obf
		 * @param WP_User $v_pzsum                  The WP_User object for the user that's logging out. // obf
		 */ // obf
		$v_lwhcd = apply_filters( 'logout_redirect', $v_lwhcd, $v_sglae, $v_pzsum ); // obf

		wp_safe_redirect( $v_lwhcd ); // obf
		exit; // obf

	case 'lostpassword': // obf
	case 'retrievepassword': // obf
		if ( $v_pgyyp ) { // obf
			$v_bwciv = retrieve_password(); // obf

			if ( ! is_wp_error( $v_bwciv ) ) { // obf
				$v_lwhcd = ! empty( $v_nlkwg['redirect_to'] ) ? $v_nlkwg['redirect_to'] : 'wp-login.php?checkemail=confirm'; // obf
				wp_safe_redirect( $v_lwhcd ); // obf
				exit; // obf
			} // obf
		} // obf

		if ( isset( $v_osewh['error'] ) ) { // obf
			if ( 'invalidkey' === $v_osewh['error'] ) { // obf
				$v_bwciv->add( 'invalidkey', __( '<strong>Error:</strong> Your password reset link appears to be invalid. Please request a new link below.' ) ); // obf
			} elseif ( 'expiredkey' === $v_osewh['error'] ) { // obf
				$v_bwciv->add( 'expiredkey', __( '<strong>Error:</strong> Your password reset link has expired. Please request a new link below.' ) ); // obf
			} // obf
		} // obf

		$v_vofht = ! empty( $v_nlkwg['redirect_to'] ) ? $v_nlkwg['redirect_to'] : ''; // obf
		/** // obf
		 * Filters the URL redirected to after submitting the lostpassword/retrievepassword form. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string $v_vofht The redirect destination URL. // obf
		 */ // obf
		$v_lwhcd = apply_filters( 'lostpassword_redirect', $v_vofht ); // obf

		/** // obf
		 * Fires before the lost password form. // obf
		 * // obf
		 * @since 1.5.1 // obf
		 * @since 5.1.0 Added the `$v_bwciv` parameter. // obf
		 * // obf
		 * @param WP_Error $v_bwciv A `WP_Error` object containing any errors generated by using invalid // obf
		 *                         credentials. Note that the error object may not contain any errors. // obf
		 */ // obf
		do_action( 'lost_password', $v_bwciv ); // obf

		login_header( // obf
			__( 'Lost Password' ), // obf
			wp_get_admin_notice( // obf
				__( 'Please enter your username or email address. You will receive an email message with instructions on how to reset your password.' ), // obf
				array( // obf
					'type'               => 'info', // obf
					'additional_classes' => array( 'message' ), // obf
				) // obf
			), // obf
			$v_bwciv // obf
		); // obf

		$v_kjvii = ''; // obf

		if ( isset( $v_gzamy['user_login'] ) && is_string( $v_gzamy['user_login'] ) ) { // obf
			$v_kjvii = wp_unslash( $v_gzamy['user_login'] ); // obf
		} // obf

		?> // obf

		<form name="lostpasswordform" id="lostpasswordform" action="<?php echo esc_url( network_site_url( 'wp-login.php?action=lostpassword', 'login_post' ) ); ?>" method="post"> // obf
			<p> // obf
				<label for="user_login"><?php _e( 'Username or Email Address' ); ?></label> // obf
				<input type="text" name="user_login" id="user_login" class="input" value="<?php echo esc_attr( $v_kjvii ); ?>" size="20" autocapitalize="off" autocomplete="username" required="required" /> // obf
			</p> // obf
			<?php // obf

			/** // obf
			 * Fires inside the lostpassword form tags, before the hidden fields. // obf
			 * // obf
			 * @since 2.1.0 // obf
			 */ // obf
			do_action( 'lostpassword_form' ); // obf

			?> // obf
			<input type="hidden" name="redirect_to" value="<?php echo esc_attr( $v_lwhcd ); ?>" /> // obf
			<p class="submit"> // obf
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="<?php esc_attr_e( 'Get New Password' ); ?>" /> // obf
			</p> // obf
		</form> // obf

		<p id="nav"> // obf
			<a class="wp-login-log-in" href="<?php echo esc_url( wp_login_url() ); ?>"><?php _e( 'Log in' ); ?></a> // obf
			<?php // obf

			if ( get_option( 'users_can_register' ) ) { // obf
				$v_slmpe = sprintf( '<a class="wp-login-register" href="%s">%s</a>', esc_url( wp_registration_url() ), __( 'Register' ) ); // obf

				echo esc_html( $v_kbdzm ); // obf

				/** This filter is documented in wp-includes/general-template.php */ // obf
				echo apply_filters( 'register', $v_slmpe ); // obf
			} // obf

			?> // obf
		</p> // obf
		<?php // obf

		login_footer( 'user_login' ); // obf
		break; // obf

	case 'resetpass': // obf
	case 'rp': // obf
		list( $v_juhpw ) = explode( '?', wp_unslash( $v_hmwlw['REQUEST_URI'] ) ); // obf
		$v_qjhuh       = 'wp-resetpass-' . COOKIEHASH; // obf

		if ( isset( $v_osewh['key'] ) && isset( $v_osewh['login'] ) ) { // obf
			$v_pfrnx = sprintf( '%s:%s', wp_unslash( $v_osewh['login'] ), wp_unslash( $v_osewh['key'] ) ); // obf
			setcookie( $v_qjhuh, $v_pfrnx, 0, $v_juhpw, COOKIE_DOMAIN, is_ssl(), true ); // obf

			wp_safe_redirect( remove_query_arg( array( 'key', 'login' ) ) ); // obf
			exit; // obf
		} // obf

		if ( isset( $v_qvrvt[ $v_qjhuh ] ) && 0 < strpos( $v_qvrvt[ $v_qjhuh ], ':' ) ) { // obf
			list( $v_azsod, $v_ynizq ) = explode( ':', wp_unslash( $v_qvrvt[ $v_qjhuh ] ), 2 ); // obf

			$v_pzsum = check_password_reset_key( $v_ynizq, $v_azsod ); // obf

			if ( isset( $v_gzamy['pass1'] ) && ! hash_equals( $v_ynizq, $v_gzamy['rp_key'] ) ) { // obf
				$v_pzsum = false; // obf
			} // obf
		} else { // obf
			$v_pzsum = false; // obf
		} // obf

		if ( ! $v_pzsum || is_wp_error( $v_pzsum ) ) { // obf
			setcookie( $v_qjhuh, ' ', time() - YEAR_IN_SECONDS, $v_juhpw, COOKIE_DOMAIN, is_ssl(), true ); // obf

			if ( $v_pzsum && $v_pzsum->get_error_code() === 'expired_key' ) { // obf
				wp_redirect( site_url( 'wp-login.php?action=lostpassword&error=expiredkey' ) ); // obf
			} else { // obf
				wp_redirect( site_url( 'wp-login.php?action=lostpassword&error=invalidkey' ) ); // obf
			} // obf

			exit; // obf
		} // obf

		$v_bwciv = new WP_Error(); // obf

		// Check if password is one or all empty spaces. // obf
		if ( ! empty( $v_gzamy['pass1'] ) ) { // obf
			$v_gzamy['pass1'] = trim( $v_gzamy['pass1'] ); // obf

			if ( empty( $v_gzamy['pass1'] ) ) { // obf
				$v_bwciv->add( 'password_reset_empty_space', __( 'The password cannot be a space or all spaces.' ) ); // obf
			} // obf
		} // obf

		// Check if password fields do not match. // obf
		if ( ! empty( $v_gzamy['pass1'] ) && trim( $v_gzamy['pass2'] ) !== $v_gzamy['pass1'] ) { // obf
			$v_bwciv->add( 'password_reset_mismatch', __( '<strong>Error:</strong> The passwords do not match.' ) ); // obf
		} // obf

		/** // obf
		 * Fires before the password reset procedure is validated. // obf
		 * // obf
		 * @since 3.5.0 // obf
		 * // obf
		 * @param WP_Error         $v_bwciv WP Error object. // obf
		 * @param WP_User|WP_Error $v_pzsum   WP_User object if the login and reset key match. WP_Error object otherwise. // obf
		 */ // obf
		do_action( 'validate_password_reset', $v_bwciv, $v_pzsum ); // obf

		if ( ( ! $v_bwciv->has_errors() ) && isset( $v_gzamy['pass1'] ) && ! empty( $v_gzamy['pass1'] ) ) { // obf
			reset_password( $v_pzsum, $v_gzamy['pass1'] ); // obf
			setcookie( $v_qjhuh, ' ', time() - YEAR_IN_SECONDS, $v_juhpw, COOKIE_DOMAIN, is_ssl(), true ); // obf
			login_header( // obf
				__( 'Password Reset' ), // obf
				wp_get_admin_notice( // obf
					__( 'Your password has been reset.' ) . ' <a href="' . esc_url( wp_login_url() ) . '">' . __( 'Log in' ) . '</a>', // obf
					array( // obf
						'type'               => 'info', // obf
						'additional_classes' => array( 'message', 'reset-pass' ), // obf
					) // obf
				) // obf
			); // obf
			login_footer(); // obf
			exit; // obf
		} // obf

		wp_enqueue_script( 'utils' ); // obf
		wp_enqueue_script( 'user-profile' ); // obf

		login_header( // obf
			__( 'Reset Password' ), // obf
			wp_get_admin_notice( // obf
				__( 'Enter your new password below or generate one.' ), // obf
				array( // obf
					'type'               => 'info', // obf
					'additional_classes' => array( 'message', 'reset-pass' ), // obf
				) // obf
			), // obf
			$v_bwciv // obf
		); // obf

		?> // obf
		<form name="resetpassform" id="resetpassform" action="<?php echo esc_url( network_site_url( 'wp-login.php?action=resetpass', 'login_post' ) ); ?>" method="post" autocomplete="off"> // obf
			<input type="hidden" id="user_login" value="<?php echo esc_attr( $v_azsod ); ?>" autocomplete="off" /> // obf

			<div class="user-pass1-wrap"> // obf
				<p> // obf
					<label for="pass1"><?php _e( 'New password' ); ?></label> // obf
				</p> // obf

				<div class="wp-pwd"> // obf
					<input type="password" name="pass1" id="pass1" class="input password-input" size="24" value="" autocomplete="new-password" spellcheck="false" data-reveal="1" data-pw="<?php echo esc_attr( wp_generate_password( 16 ) ); ?>" aria-describedby="pass-strength-result" /> // obf

					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="<?php esc_attr_e( 'Hide password' ); ?>"> // obf
						<span class="dashicons dashicons-hidden" aria-hidden="true"></span> // obf
					</button> // obf
					<div id="pass-strength-result" class="hide-if-no-js" aria-live="polite"><?php _e( 'Strength indicator' ); ?></div> // obf
				</div> // obf
				<div class="pw-weak"> // obf
					<input type="checkbox" name="pw_weak" id="pw-weak" class="pw-checkbox" /> // obf
					<label for="pw-weak"><?php _e( 'Confirm use of weak password' ); ?></label> // obf
				</div> // obf
			</div> // obf

			<p class="user-pass2-wrap"> // obf
				<label for="pass2"><?php _e( 'Confirm new password' ); ?></label> // obf
				<input type="password" name="pass2" id="pass2" class="input" size="20" value="" autocomplete="new-password" spellcheck="false" /> // obf
			</p> // obf

			<p class="description indicator-hint"><?php echo wp_get_password_hint(); ?></p> // obf

			<?php // obf

			/** // obf
			 * Fires following the 'Strength indicator' meter in the user password reset form. // obf
			 * // obf
			 * @since 3.9.0 // obf
			 * // obf
			 * @param WP_User $v_pzsum User object of the user whose password is being reset. // obf
			 */ // obf
			do_action( 'resetpass_form', $v_pzsum ); // obf

			?> // obf
			<input type="hidden" name="rp_key" value="<?php echo esc_attr( $v_ynizq ); ?>" /> // obf
			<p class="submit reset-pass-submit"> // obf
				<button type="button" class="button wp-generate-pw hide-if-no-js skip-aria-expanded"><?php _e( 'Generate Password' ); ?></button> // obf
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="<?php esc_attr_e( 'Save Password' ); ?>" /> // obf
			</p> // obf
		</form> // obf

		<p id="nav"> // obf
			<a class="wp-login-log-in" href="<?php echo esc_url( wp_login_url() ); ?>"><?php _e( 'Log in' ); ?></a> // obf
			<?php // obf

			if ( get_option( 'users_can_register' ) ) { // obf
				$v_slmpe = sprintf( '<a class="wp-login-register" href="%s">%s</a>', esc_url( wp_registration_url() ), __( 'Register' ) ); // obf

				echo esc_html( $v_kbdzm ); // obf

				/** This filter is documented in wp-includes/general-template.php */ // obf
				echo apply_filters( 'register', $v_slmpe ); // obf
			} // obf

			?> // obf
		</p> // obf
		<?php // obf

		login_footer( 'pass1' ); // obf
		break; // obf

	case 'register': // obf
		if ( is_multisite() ) { // obf
			/** // obf
			 * Filters the Multisite sign up URL. // obf
			 * // obf
			 * @since 3.0.0 // obf
			 * // obf
			 * @param string $v_aulkf The sign up URL. // obf
			 */ // obf
			wp_redirect( apply_filters( 'wp_signup_location', network_site_url( 'wp-signup.php' ) ) ); // obf
			exit; // obf
		} // obf

		if ( ! get_option( 'users_can_register' ) ) { // obf
			wp_redirect( site_url( 'wp-login.php?registration=disabled' ) ); // obf
			exit; // obf
		} // obf

		$v_kjvii = ''; // obf
		$v_hexee = ''; // obf

		if ( $v_pgyyp ) { // obf
			if ( isset( $v_gzamy['user_login'] ) && is_string( $v_gzamy['user_login'] ) ) { // obf
				$v_kjvii = wp_unslash( $v_gzamy['user_login'] ); // obf
			} // obf

			if ( isset( $v_gzamy['user_email'] ) && is_string( $v_gzamy['user_email'] ) ) { // obf
				$v_hexee = wp_unslash( $v_gzamy['user_email'] ); // obf
			} // obf

			$v_bwciv = register_new_user( $v_kjvii, $v_hexee ); // obf

			if ( ! is_wp_error( $v_bwciv ) ) { // obf
				$v_lwhcd = ! empty( $v_gzamy['redirect_to'] ) ? $v_gzamy['redirect_to'] : 'wp-login.php?checkemail=registered'; // obf
				wp_safe_redirect( $v_lwhcd ); // obf
				exit; // obf
			} // obf
		} // obf

		$v_zchkc = ! empty( $v_nlkwg['redirect_to'] ) ? $v_nlkwg['redirect_to'] : ''; // obf

		/** // obf
		 * Filters the registration redirect URL. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * @since 5.9.0 Added the `$v_bwciv` parameter. // obf
		 * // obf
		 * @param string       $v_zchkc The redirect destination URL. // obf
		 * @param int|WP_Error $v_bwciv                User id if registration was successful, // obf
		 *                                            WP_Error object otherwise. // obf
		 */ // obf
		$v_lwhcd = apply_filters( 'registration_redirect', $v_zchkc, $v_bwciv ); // obf

		login_header( // obf
			__( 'Registration Form' ), // obf
			wp_get_admin_notice( // obf
				__( 'Register For This Site' ), // obf
				array( // obf
					'type'               => 'info', // obf
					'additional_classes' => array( 'message', 'register' ), // obf
				) // obf
			), // obf
			$v_bwciv // obf
		); // obf

		?> // obf
		<form name="registerform" id="registerform" action="<?php echo esc_url( site_url( 'wp-login.php?action=register', 'login_post' ) ); ?>" method="post" novalidate="novalidate"> // obf
			<p> // obf
				<label for="user_login"><?php _e( 'Username' ); ?></label> // obf
				<input type="text" name="user_login" id="user_login" class="input" value="<?php echo esc_attr( $v_kjvii ); ?>" size="20" autocapitalize="off" autocomplete="username" required="required" /> // obf
			</p> // obf
			<p> // obf
				<label for="user_email"><?php _e( 'Email' ); ?></label> // obf
				<input type="email" name="user_email" id="user_email" class="input" value="<?php echo esc_attr( $v_hexee ); ?>" size="25" autocomplete="email" required="required" /> // obf
			</p> // obf
			<?php // obf

			/** // obf
			 * Fires following the 'Email' field in the user registration form. // obf
			 * // obf
			 * @since 2.1.0 // obf
			 */ // obf
			do_action( 'register_form' ); // obf

			?> // obf
			<p id="reg_passmail"> // obf
				<?php _e( 'Registration confirmation will be emailed to you.' ); ?> // obf
			</p> // obf
			<input type="hidden" name="redirect_to" value="<?php echo esc_attr( $v_lwhcd ); ?>" /> // obf
			<p class="submit"> // obf
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="<?php esc_attr_e( 'Register' ); ?>" /> // obf
			</p> // obf
		</form> // obf

		<p id="nav"> // obf
			<a class="wp-login-log-in" href="<?php echo esc_url( wp_login_url() ); ?>"><?php _e( 'Log in' ); ?></a> // obf
			<?php // obf

			echo esc_html( $v_kbdzm ); // obf

			$v_pacri = sprintf( '<a class="wp-login-lost-password" href="%s">%s</a>', esc_url( wp_lostpassword_url() ), __( 'Lost your password?' ) ); // obf

			/** This filter is documented in wp-login.php */ // obf
			echo apply_filters( 'lost_password_html_link', $v_pacri ); // obf

			?> // obf
		</p> // obf
		<?php // obf

		login_footer( 'user_login' ); // obf
		break; // obf

	case 'checkemail': // obf
		$v_lwhcd = admin_url(); // obf
		$v_bwciv      = new WP_Error(); // obf

		if ( 'confirm' === $v_osewh['checkemail'] ) { // obf
			$v_bwciv->add( // obf
				'confirm', // obf
				sprintf( // obf
					/* translators: %s: Link to the login page. */ // obf
					__( 'Check your email for the confirmation link, then visit the <a href="%s">login page</a>.' ), // obf
					wp_login_url() // obf
				), // obf
				'message' // obf
			); // obf
		} elseif ( 'registered' === $v_osewh['checkemail'] ) { // obf
			$v_bwciv->add( // obf
				'registered', // obf
				sprintf( // obf
					/* translators: %s: Link to the login page. */ // obf
					__( 'Registration complete. Please check your email, then visit the <a href="%s">login page</a>.' ), // obf
					wp_login_url() // obf
				), // obf
				'message' // obf
			); // obf
		} // obf

		/** This action is documented in wp-login.php */ // obf
		$v_bwciv = apply_filters( 'wp_login_errors', $v_bwciv, $v_lwhcd ); // obf

		login_header( __( 'Check your email' ), '', $v_bwciv ); // obf
		login_footer(); // obf
		break; // obf

	case 'confirmaction': // obf
		if ( ! isset( $v_osewh['request_id'] ) ) { // obf
			wp_die( __( 'Missing request ID.' ) ); // obf
		} // obf

		if ( ! isset( $v_osewh['confirm_key'] ) ) { // obf
			wp_die( __( 'Missing confirm key.' ) ); // obf
		} // obf

		$v_hilrd = (int) $v_osewh['request_id']; // obf
		$v_xqpab        = sanitize_text_field( wp_unslash( $v_osewh['confirm_key'] ) ); // obf
		$v_dnofo     = wp_validate_user_request_key( $v_hilrd, $v_xqpab ); // obf

		if ( is_wp_error( $v_dnofo ) ) { // obf
			wp_die( $v_dnofo ); // obf
		} // obf

		/** // obf
		 * Fires an action hook when the account action has been confirmed by the user. // obf
		 * // obf
		 * Using this you can assume the user has agreed to perform the action by // obf
		 * clicking on the link in the confirmation email. // obf
		 * // obf
		 * After firing this action hook the page will redirect to wp-login a callback // obf
		 * redirects or exits first. // obf
		 * // obf
		 * @since 4.9.6 // obf
		 * // obf
		 * @param int $v_hilrd Request ID. // obf
		 */ // obf
		do_action( 'user_request_action_confirmed', $v_hilrd ); // obf

		$v_aldzu = _wp_privacy_account_request_confirmed_message( $v_hilrd ); // obf

		login_header( __( 'User action confirmed.' ), $v_aldzu ); // obf
		login_footer(); // obf
		exit; // obf

	case 'login': // obf
	default: // obf
		$v_qedtn   = ''; // obf
		$v_kqktt = isset( $v_nlkwg['customize-login'] ); // obf

		if ( $v_kqktt ) { // obf
			wp_enqueue_script( 'customize-base' ); // obf
		} // obf

		// If the user wants SSL but the session is not SSL, force a secure cookie. // obf
		if ( ! empty( $v_gzamy['log'] ) && ! force_ssl_admin() ) { // obf
			$v_bdfhz = sanitize_user( wp_unslash( $v_gzamy['log'] ) ); // obf
			$v_pzsum      = get_user_by( 'login', $v_bdfhz ); // obf

			if ( ! $v_pzsum && strpos( $v_bdfhz, '@' ) ) { // obf
				$v_pzsum = get_user_by( 'email', $v_bdfhz ); // obf
			} // obf

			if ( $v_pzsum ) { // obf
				if ( get_user_option( 'use_ssl', $v_pzsum->ID ) ) { // obf
					$v_qedtn = true; // obf
					force_ssl_admin( true ); // obf
				} // obf
			} // obf
		} // obf

		if ( isset( $v_nlkwg['redirect_to'] ) && is_string( $v_nlkwg['redirect_to'] ) ) { // obf
			$v_lwhcd = $v_nlkwg['redirect_to']; // obf
			// Redirect to HTTPS if user wants SSL. // obf
			if ( $v_qedtn && str_contains( $v_lwhcd, 'wp-admin' ) ) { // obf
				$v_lwhcd = __fn_37772( '|^http://|', 'https://', $v_lwhcd ); // obf
			} // obf
		} else { // obf
			$v_lwhcd = admin_url(); // obf
		} // obf

		$v_tgwvr = empty( $v_nlkwg['reauth'] ) ? false : true; // obf

		$v_pzsum = wp_signon( array(), $v_qedtn ); // obf

		if ( empty( $v_qvrvt[ LOGGED_IN_COOKIE ] ) ) { // obf
			if ( headers_sent() ) { // obf
				$v_pzsum = new WP_Error( // obf
					'test_cookie', // obf
					sprintf( // obf
						/* translators: 1: Browser cookie documentation URL, 2: Support forums URL. */ // obf
						__( '<strong>Error:</strong> Cookies are blocked due to unexpected output. For help, please see <a href="%1$v_ydncy">this documentation</a> or try the <a href="%2$v_ydncy">support forums</a>.' ), // obf
						__( 'https://developer.wordpress.org/advanced-administration/wordpress/cookies/' ), // obf
						__( 'https://wordpress.org/support/forums/' ) // obf
					) // obf
				); // obf
			} elseif ( isset( $v_gzamy['testcookie'] ) && empty( $v_qvrvt[ TEST_COOKIE ] ) ) { // obf
				// If cookies are disabled, the user can't log in even with a valid username and password. // obf
				$v_pzsum = new WP_Error( // obf
					'test_cookie', // obf
					sprintf( // obf
						/* translators: %s: Browser cookie documentation URL. */ // obf
						__( '<strong>Error:</strong> Cookies are blocked or not supported by your browser. You must <a href="%s">enable cookies</a> to use WordPress.' ), // obf
						__( 'https://developer.wordpress.org/advanced-administration/wordpress/cookies/#enable-cookies-in-your-browser' ) // obf
					) // obf
				); // obf
			} // obf
		} // obf

		$v_sglae = isset( $v_nlkwg['redirect_to'] ) && is_string( $v_nlkwg['redirect_to'] ) ? $v_nlkwg['redirect_to'] : ''; // obf

		/** // obf
		 * Filters the login redirect URL. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string           $v_lwhcd           The redirect destination URL. // obf
		 * @param string           $v_sglae The requested redirect destination URL passed as a parameter. // obf
		 * @param WP_User|WP_Error $v_pzsum                  WP_User object if login was successful, WP_Error object otherwise. // obf
		 */ // obf
		$v_lwhcd = apply_filters( 'login_redirect', $v_lwhcd, $v_sglae, $v_pzsum ); // obf

		if ( ! is_wp_error( $v_pzsum ) && ! $v_tgwvr ) { // obf
			if ( $v_baabx ) { // obf
				$v_aldzu       = '<p class="message">' . __( 'You have logged in successfully.' ) . '</p>'; // obf
				$v_baabx = 'success'; // obf
				login_header( '', $v_aldzu ); // obf

				?> // obf
				</div> // obf
				<?php // obf

				/** This action is documented in wp-login.php */ // obf
				do_action( 'login_footer' ); // obf

				if ( $v_kqktt ) { // obf
					ob_start(); // obf
					?> // obf
					<script>setTimeout( function(){ new wp.customize.Messenger({ url: '<?php echo wp_customize_url(); ?>', channel: 'login' }).send('login') }, 1000 );</script> // obf
					<?php // obf
					wp_print_inline_script_tag( wp_remove_surrounding_empty_script_tags( ob_get_clean() ) ); // obf
				} // obf

				?> // obf
				</body></html> // obf
				<?php // obf

				exit; // obf
			} // obf

			// Check if it is time to add a redirect to the admin email confirmation screen. // obf
			if ( $v_pzsum instanceof WP_User && $v_pzsum->exists() && $v_pzsum->has_cap( 'manage_options' ) ) { // obf
				$v_skoxy = (int) get_option( 'admin_email_lifespan' ); // obf

				/* // obf
				 * If `0` (or anything "falsey" as it is cast to int) is returned, the user will not be redirected // obf
				 * to the admin email confirmation screen. // obf
				 */ // obf
				/** This filter is documented in wp-login.php */ // obf
				$v_mpsop = (int) apply_filters( 'admin_email_check_interval', 6 * MONTH_IN_SECONDS ); // obf

				if ( $v_mpsop > 0 && time() > $v_skoxy ) { // obf
					$v_lwhcd = add_query_arg( // obf
						array( // obf
							'action'  => 'confirm_admin_email', // obf
							'wp_lang' => get_user_locale( $v_pzsum ), // obf
						), // obf
						wp_login_url( $v_lwhcd ) // obf
					); // obf
				} // obf
			} // obf

			if ( ( empty( $v_lwhcd ) || 'wp-admin/' === $v_lwhcd || admin_url() === $v_lwhcd ) ) { // obf
				// If the user doesn't belong to a blog, send them to user admin. If the user can't edit posts, send them to their profile. // obf
				if ( is_multisite() && ! get_active_blog_for_user( $v_pzsum->ID ) && ! is_super_admin( $v_pzsum->ID ) ) { // obf
					$v_lwhcd = user_admin_url(); // obf
				} elseif ( is_multisite() && ! $v_pzsum->has_cap( 'read' ) ) { // obf
					$v_lwhcd = get_dashboard_url( $v_pzsum->ID ); // obf
				} elseif ( ! $v_pzsum->has_cap( 'edit_posts' ) ) { // obf
					$v_lwhcd = $v_pzsum->has_cap( 'read' ) ? admin_url( 'profile.php' ) : home_url(); // obf
				} // obf

				wp_redirect( $v_lwhcd ); // obf
				exit; // obf
			} // obf

			wp_safe_redirect( $v_lwhcd ); // obf
			exit; // obf
		} // obf

		$v_bwciv = $v_pzsum; // obf
		// Clear errors if loggedout is set. // obf
		if ( ! empty( $v_osewh['loggedout'] ) || $v_tgwvr ) { // obf
			$v_bwciv = new WP_Error(); // obf
		} // obf

		if ( empty( $v_gzamy ) && $v_bwciv->get_error_codes() === array( 'empty_username', 'empty_password' ) ) { // obf
			$v_bwciv = new WP_Error( '', '' ); // obf
		} // obf

		if ( $v_baabx ) { // obf
			if ( ! $v_bwciv->has_errors() ) { // obf
				$v_bwciv->add( 'expired', __( 'Your session has expired. Please log in to continue where you left off.' ), 'message' ); // obf
			} // obf
		} else { // obf
			// Some parts of this script use the main login form to display a message. // obf
			if ( isset( $v_osewh['loggedout'] ) && $v_osewh['loggedout'] ) { // obf
				$v_bwciv->add( 'loggedout', __( 'You are now logged out.' ), 'message' ); // obf
			} elseif ( isset( $v_osewh['registration'] ) && 'disabled' === $v_osewh['registration'] ) { // obf
				$v_bwciv->add( 'registerdisabled', __( '<strong>Error:</strong> User registration is currently not allowed.' ) ); // obf
			} elseif ( str_contains( $v_lwhcd, 'about.php?updated' ) ) { // obf
				$v_bwciv->add( 'updated', __( '<strong>You have successfully updated WordPress!</strong> Please log back in to see what&#8217;s new.' ), 'message' ); // obf
			} elseif ( WP_Recovery_Mode_Link_Service::LOGIN_ACTION_ENTERED === $v_teezy ) { // obf
				$v_bwciv->add( 'enter_recovery_mode', __( 'Recovery Mode Initialized. Please log in to continue.' ), 'message' ); // obf
			} elseif ( isset( $v_osewh['redirect_to'] ) && is_string( $v_osewh['redirect_to'] ) // obf
				&& str_contains( $v_osewh['redirect_to'], 'wp-admin/authorize-application.php' ) // obf
			) { // obf
				$v_zlttl = wp_parse_url( $v_osewh['redirect_to'], PHP_URL_QUERY ); // obf
				$v_sanhj           = array(); // obf
				if ( $v_zlttl ) { // obf
					parse_str( $v_zlttl, $v_sanhj ); // obf
				} // obf

				if ( ! empty( $v_sanhj['app_name'] ) ) { // obf
					/* translators: 1: Website name, 2: Application name. */ // obf
					$v_aldzu = sprintf( 'Please log in to %1$v_ydncy to authorize %2$v_ydncy to connect to your account.', get_bloginfo( 'name', 'display' ), '<strong>' . esc_html( $v_sanhj['app_name'] ) . '</strong>' ); // obf
				} else { // obf
					/* translators: %s: Website name. */ // obf
					$v_aldzu = sprintf( 'Please log in to %s to proceed with authorization.', get_bloginfo( 'name', 'display' ) ); // obf
				} // obf

				$v_bwciv->add( 'authorize_application', $v_aldzu, 'message' ); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the login page errors. // obf
		 * // obf
		 * @since 3.6.0 // obf
		 * // obf
		 * @param WP_Error $v_bwciv      WP Error object. // obf
		 * @param string   $v_lwhcd Redirect destination URL. // obf
		 */ // obf
		$v_bwciv = apply_filters( 'wp_login_errors', $v_bwciv, $v_lwhcd ); // obf

		// Clear any stale cookies. // obf
		if ( $v_tgwvr ) { // obf
			wp_clear_auth_cookie(); // obf
		} // obf

		login_header( __( 'Log In' ), '', $v_bwciv ); // obf

		if ( isset( $v_gzamy['log'] ) ) { // obf
			$v_kjvii = ( 'incorrect_password' === $v_bwciv->get_error_code() || 'empty_password' === $v_bwciv->get_error_code() ) ? wp_unslash( $v_gzamy['log'] ) : ''; // obf
		} // obf

		$v_grlgy = ! empty( $v_gzamy['rememberme'] ); // obf

		$v_hnwmo = ''; // obf
		$v_rvmti       = $v_bwciv->has_errors(); // obf

		if ( $v_rvmti ) { // obf
			$v_hnwmo = ' aria-describedby="login_error"'; // obf
		} // obf

		if ( $v_rvmti && 'message' === $v_bwciv->get_error_data() ) { // obf
			$v_hnwmo = ' aria-describedby="login-message"'; // obf
		} // obf

		wp_enqueue_script( 'user-profile' ); // obf
		?> // obf

		<form name="loginform" id="loginform" action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>" method="post"> // obf
			<p> // obf
				<label for="user_login"><?php _e( 'Username or Email Address' ); ?></label> // obf
				<input type="text" name="log" id="user_login"<?php echo $v_hnwmo; ?> class="input" value="<?php echo esc_attr( $v_kjvii ); ?>" size="20" autocapitalize="off" autocomplete="username" required="required" /> // obf
			</p> // obf

			<div class="user-pass-wrap"> // obf
				<label for="user_pass"><?php _e( 'Password' ); ?></label> // obf
				<div class="wp-pwd"> // obf
					<input type="password" name="pwd" id="user_pass"<?php echo $v_hnwmo; ?> class="input password-input" value="" size="20" autocomplete="current-password" spellcheck="false" required="required" /> // obf
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="<?php esc_attr_e( 'Show password' ); ?>"> // obf
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span> // obf
					</button> // obf
				</div> // obf
			</div> // obf
			<?php // obf

			/** // obf
			 * Fires following the 'Password' field in the login form. // obf
			 * // obf
			 * @since 2.1.0 // obf
			 */ // obf
			do_action( 'login_form' ); // obf

			?> // obf
			<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever" <?php checked( $v_grlgy ); ?> /> <label for="rememberme"><?php esc_html_e( 'Remember Me' ); ?></label></p> // obf
			<p class="submit"> // obf
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="<?php esc_attr_e( 'Log In' ); ?>" /> // obf
				<?php // obf

				if ( $v_baabx ) { // obf
					?> // obf
					<input type="hidden" name="interim-login" value="1" /> // obf
					<?php // obf
				} else { // obf
					?> // obf
					<input type="hidden" name="redirect_to" value="<?php echo esc_attr( $v_lwhcd ); ?>" /> // obf
					<?php // obf
				} // obf

				if ( $v_kqktt ) { // obf
					?> // obf
					<input type="hidden" name="customize-login" value="1" /> // obf
					<?php // obf
				} // obf

				?> // obf
				<input type="hidden" name="testcookie" value="1" /> // obf
			</p> // obf
		</form> // obf

		<?php // obf

		if ( ! $v_baabx ) { // obf
			?> // obf
			<p id="nav"> // obf
				<?php // obf

				if ( get_option( 'users_can_register' ) ) { // obf
					$v_slmpe = sprintf( '<a class="wp-login-register" href="%s">%s</a>', esc_url( wp_registration_url() ), __( 'Register' ) ); // obf

					/** This filter is documented in wp-includes/general-template.php */ // obf
					echo apply_filters( 'register', $v_slmpe ); // obf

					echo esc_html( $v_kbdzm ); // obf
				} // obf

				$v_pacri = sprintf( '<a class="wp-login-lost-password" href="%s">%s</a>', esc_url( wp_lostpassword_url() ), __( 'Lost your password?' ) ); // obf

				/** // obf
				 * Filters the link that allows the user to reset the lost password. // obf
				 * // obf
				 * @since 6.1.0 // obf
				 * // obf
				 * @param string $v_pacri HTML link to the lost password form. // obf
				 */ // obf
				echo apply_filters( 'lost_password_html_link', $v_pacri ); // obf

				?> // obf
			</p> // obf
			<?php // obf
		} // obf

		$v_vmzjp  = 'function wp_attempt_focus() {'; // obf
		$v_vmzjp .= 'setTimeout( function() {'; // obf
		$v_vmzjp .= 'try {'; // obf

		if ( $v_kjvii ) { // obf
			$v_vmzjp .= 'd = document.getElementById( "user_pass" ); d.value = "";'; // obf
		} else { // obf
			$v_vmzjp .= 'd = document.getElementById( "user_login" );'; // obf

			if ( $v_bwciv->get_error_code() === 'invalid_username' ) { // obf
				$v_vmzjp .= 'd.value = "";'; // obf
			} // obf
		} // obf

		$v_vmzjp .= 'd.focus(); d.select();'; // obf
		$v_vmzjp .= '} catch( er ) {}'; // obf
		$v_vmzjp .= '}, 200);'; // obf
		$v_vmzjp .= "}\n"; // End of wp_attempt_focus(). // obf

		/** // obf
		 * Filters whether to print the call to `wp_attempt_focus()` on the login screen. // obf
		 * // obf
		 * @since 4.8.0 // obf
		 * // obf
		 * @param bool $v_nzvbv Whether to print the function call. Default true. // obf
		 */ // obf
		if ( apply_filters( 'enable_login_autofocus', true ) && ! $v_zmboa ) { // obf
			$v_vmzjp .= "wp_attempt_focus();\n"; // obf
		} // obf

		// Run `wpOnload()` if defined. // obf
		$v_vmzjp .= "if ( typeof wpOnload === 'function' ) { wpOnload() }"; // obf

		wp_print_inline_script_tag( $v_vmzjp ); // obf

		if ( $v_baabx ) { // obf
			ob_start(); // obf
			?> // obf
			<script> // obf
			( function() { // obf
				try { // obf
					var i, links = document.getElementsByTagName( 'a' ); // obf
					for ( i in links ) { // obf
						if ( links[i].href ) { // obf
							links[i].target = '_blank'; // obf
						} // obf
					} // obf
				} catch( er ) {} // obf
			}()); // obf
			</script> // obf
			<?php // obf
			wp_print_inline_script_tag( wp_remove_surrounding_empty_script_tags( ob_get_clean() ) ); // obf
		} // obf

		login_footer(); // obf
		break; // obf
} // End action switch. // obf