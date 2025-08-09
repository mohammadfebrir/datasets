

<?php // obf
/** // obf
 * General template tags that can go anywhere in a template. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Template // obf
 */ // obf

/** // obf
 * Loads header template. // obf
 * // obf
 * Includes the header template for a theme or if a name is specified then a // obf
 * specialized header will be included. // obf
 * // obf
 * For the parameter, if the file is called "header-special.php" then specify // obf
 * "special". // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 5.5.0 A return value was added. // obf
 * @since 5.5.0 The `$v_kysor` parameter was added. // obf
 * // obf
 * @param string|null $v_vdrmx The name of the specialized header. Default null. // obf
 * @param array       $v_kysor Optional. Additional arguments passed to the header template. // obf
 *                          Default empty array. // obf
 * @return void|false Void on success, false if the template does not exist. // obf
 */ // obf
function get_header( $v_vdrmx = null, $v_kysor = array() ) { // obf
	/** // obf
	 * Fires before the header template file is loaded. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 2.8.0 The `$v_vdrmx` parameter was added. // obf
	 * @since 5.5.0 The `$v_kysor` parameter was added. // obf
	 * // obf
	 * @param string|null $v_vdrmx Name of the specific header file to use. Null for the default header. // obf
	 * @param array       $v_kysor Additional arguments passed to the header template. // obf
	 */ // obf
	do_action( 'get_header', $v_vdrmx, $v_kysor ); // obf

	$v_vtwei = array(); // obf
	$v_vdrmx      = (string) $v_vdrmx; // obf
	if ( '' !== $v_vdrmx ) { // obf
		$v_vtwei[] = "header-{$v_vdrmx}.php"; // obf
	} // obf

	$v_vtwei[] = 'header.php'; // obf

	if ( ! locate_template( $v_vtwei, true, true, $v_kysor ) ) { // obf
		return false; // obf
	} // obf
} // obf

/** // obf
 * Loads footer template. // obf
 * // obf
 * Includes the footer template for a theme or if a name is specified then a // obf
 * specialized footer will be included. // obf
 * // obf
 * For the parameter, if the file is called "footer-special.php" then specify // obf
 * "special". // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 5.5.0 A return value was added. // obf
 * @since 5.5.0 The `$v_kysor` parameter was added. // obf
 * // obf
 * @param string|null $v_vdrmx The name of the specialized footer. Default null. // obf
 * @param array       $v_kysor Optional. Additional arguments passed to the footer template. // obf
 *                          Default empty array. // obf
 * @return void|false Void on success, false if the template does not exist. // obf
 */ // obf
function get_footer( $v_vdrmx = null, $v_kysor = array() ) { // obf
	/** // obf
	 * Fires before the footer template file is loaded. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 2.8.0 The `$v_vdrmx` parameter was added. // obf
	 * @since 5.5.0 The `$v_kysor` parameter was added. // obf
	 * // obf
	 * @param string|null $v_vdrmx Name of the specific footer file to use. Null for the default footer. // obf
	 * @param array       $v_kysor Additional arguments passed to the footer template. // obf
	 */ // obf
	do_action( 'get_footer', $v_vdrmx, $v_kysor ); // obf

	$v_vtwei = array(); // obf
	$v_vdrmx      = (string) $v_vdrmx; // obf
	if ( '' !== $v_vdrmx ) { // obf
		$v_vtwei[] = "footer-{$v_vdrmx}.php"; // obf
	} // obf

	$v_vtwei[] = 'footer.php'; // obf

	if ( ! locate_template( $v_vtwei, true, true, $v_kysor ) ) { // obf
		return false; // obf
	} // obf
} // obf

/** // obf
 * Loads sidebar template. // obf
 * // obf
 * Includes the sidebar template for a theme or if a name is specified then a // obf
 * specialized sidebar will be included. // obf
 * // obf
 * For the parameter, if the file is called "sidebar-special.php" then specify // obf
 * "special". // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 5.5.0 A return value was added. // obf
 * @since 5.5.0 The `$v_kysor` parameter was added. // obf
 * // obf
 * @param string|null $v_vdrmx The name of the specialized sidebar. Default null. // obf
 * @param array       $v_kysor Optional. Additional arguments passed to the sidebar template. // obf
 *                          Default empty array. // obf
 * @return void|false Void on success, false if the template does not exist. // obf
 */ // obf
function get_sidebar( $v_vdrmx = null, $v_kysor = array() ) { // obf
	/** // obf
	 * Fires before the sidebar template file is loaded. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * @since 2.8.0 The `$v_vdrmx` parameter was added. // obf
	 * @since 5.5.0 The `$v_kysor` parameter was added. // obf
	 * // obf
	 * @param string|null $v_vdrmx Name of the specific sidebar file to use. Null for the default sidebar. // obf
	 * @param array       $v_kysor Additional arguments passed to the sidebar template. // obf
	 */ // obf
	do_action( 'get_sidebar', $v_vdrmx, $v_kysor ); // obf

	$v_vtwei = array(); // obf
	$v_vdrmx      = (string) $v_vdrmx; // obf
	if ( '' !== $v_vdrmx ) { // obf
		$v_vtwei[] = "sidebar-{$v_vdrmx}.php"; // obf
	} // obf

	$v_vtwei[] = 'sidebar.php'; // obf

	if ( ! locate_template( $v_vtwei, true, true, $v_kysor ) ) { // obf
		return false; // obf
	} // obf
} // obf

/** // obf
 * Loads a template part into a template. // obf
 * // obf
 * Provides a simple mechanism for child themes to overload reusable sections of code // obf
 * in the theme. // obf
 * // obf
 * Includes the named template part for a theme or if a name is specified then a // obf
 * specialized part will be included. If the theme contains no {slug}.php file // obf
 * then no template will be included. // obf
 * // obf
 * The template is included using require, not require_once, so you may include the // obf
 * same template part multiple times. // obf
 * // obf
 * For the $v_vdrmx parameter, if the file is called "{slug}-special.php" then specify // obf
 * "special". // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 5.5.0 A return value was added. // obf
 * @since 5.5.0 The `$v_kysor` parameter was added. // obf
 * // obf
 * @param string      $v_eikki The slug name for the generic template. // obf
 * @param string|null $v_vdrmx Optional. The name of the specialized template. Default null. // obf
 * @param array       $v_kysor Optional. Additional arguments passed to the template. // obf
 *                          Default empty array. // obf
 * @return void|false Void on success, false if the template does not exist. // obf
 */ // obf
function get_template_part( $v_eikki, $v_vdrmx = null, $v_kysor = array() ) { // obf
	/** // obf
	 * Fires before the specified template part file is loaded. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_eikki`, refers to the slug name // obf
	 * for the generic template part. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @since 5.5.0 The `$v_kysor` parameter was added. // obf
	 * // obf
	 * @param string      $v_eikki The slug name for the generic template. // obf
	 * @param string|null $v_vdrmx The name of the specialized template // obf
	 *                          or null if there is none. // obf
	 * @param array       $v_kysor Additional arguments passed to the template. // obf
	 */ // obf
	do_action( "get_template_part_{$v_eikki}", $v_eikki, $v_vdrmx, $v_kysor ); // obf

	$v_vtwei = array(); // obf
	$v_vdrmx      = (string) $v_vdrmx; // obf
	if ( '' !== $v_vdrmx ) { // obf
		$v_vtwei[] = "{$v_eikki}-{$v_vdrmx}.php"; // obf
	} // obf

	$v_vtwei[] = "{$v_eikki}.php"; // obf

	/** // obf
	 * Fires before an attempt is made to locate and load a template part. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @since 5.5.0 The `$v_kysor` parameter was added. // obf
	 * // obf
	 * @param string   $v_eikki      The slug name for the generic template. // obf
	 * @param string   $v_vdrmx      The name of the specialized template // obf
	 *                            or an empty string if there is none. // obf
	 * @param string[] $v_vtwei Array of template files to search for, in order. // obf
	 * @param array    $v_kysor      Additional arguments passed to the template. // obf
	 */ // obf
	do_action( 'get_template_part', $v_eikki, $v_vdrmx, $v_vtwei, $v_kysor ); // obf

	if ( ! locate_template( $v_vtwei, true, false, $v_kysor ) ) { // obf
		return false; // obf
	} // obf
} // obf

/** // obf
 * Displays search form. // obf
 * // obf
 * Will first attempt to locate the searchform.php file in either the child or // obf
 * the parent, then load it. If it doesn't exist, then the default search form // obf
 * will be displayed. The default search form is HTML, which will be displayed. // obf
 * There is a filter applied to the search form HTML in order to edit or replace // obf
 * it. The filter is {@see 'get_search_form'}. // obf
 * // obf
 * This function is primarily used by themes which want to hardcode the search // obf
 * form into the sidebar and also by the search widget in WordPress. // obf
 * // obf
 * There is also an action that is called whenever the function is run called, // obf
 * {@see 'pre_get_search_form'}. This can be useful for outputting JavaScript that the // obf
 * search relies on or various formatting that applies to the beginning of the // obf
 * search. To give a few examples of what it can be used for. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 5.2.0 The `$v_kysor` array parameter was added in place of an `$v_wpyhh` boolean flag. // obf
 * // obf
 * @param array $v_kysor { // obf
 *     Optional. Array of display arguments. // obf
 * // obf
 *     @type bool   $v_wpyhh       Whether to echo or return the form. Default true. // obf
 *     @type string $v_vmiwg ARIA label for the search form. Useful to distinguish // obf
 *                              multiple search forms on the same page and improve // obf
 *                              accessibility. Default empty. // obf
 * } // obf
 * @return void|string Void if 'echo' argument is true, search form HTML if 'echo' is false. // obf
 */ // obf
function get_search_form( $v_kysor = array() ) { // obf
	/** // obf
	 * Fires before the search form is retrieved, at the start of get_search_form(). // obf
	 * // obf
	 * @since 2.7.0 as 'get_search_form' action. // obf
	 * @since 3.6.0 // obf
	 * @since 5.5.0 The `$v_kysor` parameter was added. // obf
	 * // obf
	 * @link https://core.trac.wordpress.org/ticket/19321 // obf
	 * // obf
	 * @param array $v_kysor The array of arguments for building the search form. // obf
	 *                    See get_search_form() for information on accepted arguments. // obf
	 */ // obf
	do_action( 'pre_get_search_form', $v_kysor ); // obf

	$v_wpyhh = true; // obf

	if ( ! is_array( $v_kysor ) ) { // obf
		/* // obf
		 * Back compat: to ensure previous uses of get_search_form() continue to // obf
		 * function as expected, we handle a value for the boolean $v_wpyhh param removed // obf
		 * in 5.2.0. Then we deal with the $v_kysor array and cast its defaults. // obf
		 */ // obf
		$v_wpyhh = (bool) $v_kysor; // obf

		// Set an empty array and allow default arguments to take over. // obf
		$v_kysor = array(); // obf
	} // obf

	// Defaults are to echo and to output no custom label on the form. // obf
	$v_mhkxo = array( // obf
		'echo'       => $v_wpyhh, // obf
		'aria_label' => '', // obf
	); // obf

	$v_kysor = wp_parse_args( $v_kysor, $v_mhkxo ); // obf

	/** // obf
	 * Filters the array of arguments used when generating the search form. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_kysor The array of arguments for building the search form. // obf
	 *                    See get_search_form() for information on accepted arguments. // obf
	 */ // obf
	$v_kysor = apply_filters( 'search_form_args', $v_kysor ); // obf

	// Ensure that the filtered arguments contain all required default values. // obf
	$v_kysor = array_merge( $v_mhkxo, $v_kysor ); // obf

	$v_khteh = current_theme_supports( 'html5', 'search-form' ) ? 'html5' : 'xhtml'; // obf

	/** // obf
	 * Filters the HTML format of the search form. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * @since 5.5.0 The `$v_kysor` parameter was added. // obf
	 * // obf
	 * @param string $v_khteh The type of markup to use in the search form. // obf
	 *                       Accepts 'html5', 'xhtml'. // obf
	 * @param array  $v_kysor   The array of arguments for building the search form. // obf
	 *                       See get_search_form() for information on accepted arguments. // obf
	 */ // obf
	$v_khteh = apply_filters( 'search_form_format', $v_khteh, $v_kysor ); // obf

	$v_yglwj = locate_template( 'searchform.php' ); // obf

	if ( '' !== $v_yglwj ) { // obf
		ob_start(); // obf
		require $v_yglwj; // obf
		$v_bsxhx = ob_get_clean(); // obf
	} else { // obf
		// Build a string containing an aria-label to use for the search form. // obf
		if ( $v_kysor['aria_label'] ) { // obf
			$v_vmiwg = 'aria-label="' . esc_attr( $v_kysor['aria_label'] ) . '" '; // obf
		} else { // obf
			/* // obf
			 * If there's no custom aria-label, we can set a default here. At the // obf
			 * moment it's empty as there's uncertainty about what the default should be. // obf
			 */ // obf
			$v_vmiwg = ''; // obf
		} // obf

		if ( 'html5' === $v_khteh ) { // obf
			$v_bsxhx = '<form role="search" ' . $v_vmiwg . 'method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '"> // obf
				<label> // obf
					<span class="screen-reader-text">' . // obf
					/* translators: Hidden accessibility text. */ // obf
					_x( 'Search for:', 'label' ) . // obf
					'</span> // obf
					<input type="search" class="search-field" placeholder="' . esc_attr_x( 'Search &hellip;', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" /> // obf
				</label> // obf
				<input type="submit" class="search-submit" value="' . esc_attr_x( 'Search', 'submit button' ) . '" /> // obf
			</form>'; // obf
		} else { // obf
			$v_bsxhx = '<form role="search" ' . $v_vmiwg . 'method="get" id="searchform" class="searchform" action="' . esc_url( home_url( '/' ) ) . '"> // obf
				<div> // obf
					<label class="screen-reader-text" for="s">' . // obf
					/* translators: Hidden accessibility text. */ // obf
					_x( 'Search for:', 'label' ) . // obf
					'</label> // obf
					<input type="text" value="' . get_search_query() . '" name="s" id="s" /> // obf
					<input type="submit" id="searchsubmit" value="' . esc_attr_x( 'Search', 'submit button' ) . '" /> // obf
				</div> // obf
			</form>'; // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the HTML output of the search form. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @since 5.5.0 The `$v_kysor` parameter was added. // obf
	 * // obf
	 * @param string $v_bsxhx The search form HTML output. // obf
	 * @param array  $v_kysor The array of arguments for building the search form. // obf
	 *                     See get_search_form() for information on accepted arguments. // obf
	 */ // obf
	$v_hgvaa = apply_filters( 'get_search_form', $v_bsxhx, $v_kysor ); // obf

	if ( null === $v_hgvaa ) { // obf
		$v_hgvaa = $v_bsxhx; // obf
	} // obf

	if ( $v_kysor['echo'] ) { // obf
		echo $v_hgvaa; // obf
	} else { // obf
		return $v_hgvaa; // obf
	} // obf
} // obf

/** // obf
 * Displays the Log In/Out link. // obf
 * // obf
 * Displays a link, which allows users to navigate to the Log In page to log in // obf
 * or log out depending on whether they are currently logged in. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param string $v_xjchi Optional path to redirect to on login/logout. // obf
 * @param bool   $v_mbqxi  Default to echo and not return the link. // obf
 * @return void|string Void if `$v_mbqxi` argument is true, log in/out link if `$v_mbqxi` is false. // obf
 */ // obf
function wp_loginout( $v_xjchi = '', $v_mbqxi = true ) { // obf
	if ( ! is_user_logged_in() ) { // obf
		$v_kojtd = '<a href="' . esc_url( wp_login_url( $v_xjchi ) ) . '">' . __( 'Log in' ) . '</a>'; // obf
	} else { // obf
		$v_kojtd = '<a href="' . esc_url( wp_logout_url( $v_xjchi ) ) . '">' . __( 'Log out' ) . '</a>'; // obf
	} // obf

	if ( $v_mbqxi ) { // obf
		/** // obf
		 * Filters the HTML output for the Log In/Log Out link. // obf
		 * // obf
		 * @since 1.5.0 // obf
		 * // obf
		 * @param string $v_kojtd The HTML link content. // obf
		 */ // obf
		echo apply_filters( 'loginout', $v_kojtd ); // obf
	} else { // obf
		/** This filter is documented in wp-includes/general-template.php */ // obf
		return apply_filters( 'loginout', $v_kojtd ); // obf
	} // obf
} // obf

/** // obf
 * Retrieves the logout URL. // obf
 * // obf
 * Returns the URL that allows the user to log out of the site. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string $v_xjchi Path to redirect to on logout. // obf
 * @return string The logout URL. Note: HTML-encoded via esc_html() in wp_nonce_url(). // obf
 */ // obf
function wp_logout_url( $v_xjchi = '' ) { // obf
	$v_kysor = array(); // obf
	if ( ! empty( $v_xjchi ) ) { // obf
		$v_kysor['redirect_to'] = urlencode( $v_xjchi ); // obf
	} // obf

	$v_hbdag = add_query_arg( $v_kysor, site_url( 'wp-login.php?action=logout', 'login' ) ); // obf
	$v_hbdag = wp_nonce_url( $v_hbdag, 'log-out' ); // obf

	/** // obf
	 * Filters the logout URL. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_hbdag The HTML-encoded logout URL. // obf
	 * @param string $v_xjchi   Path to redirect to on logout. // obf
	 */ // obf
	return apply_filters( 'logout_url', $v_hbdag, $v_xjchi ); // obf
} // obf

/** // obf
 * Retrieves the login URL. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string $v_xjchi     Path to redirect to on log in. // obf
 * @param bool   $v_xelhr Whether to force reauthorization, even if a cookie is present. // obf
 *                             Default false. // obf
 * @return string The login URL. Not HTML-encoded. // obf
 */ // obf
function wp_login_url( $v_xjchi = '', $v_xelhr = false ) { // obf
	$v_wogko = site_url( 'wp-login.php', 'login' ); // obf

	if ( ! empty( $v_xjchi ) ) { // obf
		$v_wogko = add_query_arg( 'redirect_to', urlencode( $v_xjchi ), $v_wogko ); // obf
	} // obf

	if ( $v_xelhr ) { // obf
		$v_wogko = add_query_arg( 'reauth', '1', $v_wogko ); // obf
	} // obf

	/** // obf
	 * Filters the login URL. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 4.2.0 The `$v_xelhr` parameter was added. // obf
	 * // obf
	 * @param string $v_wogko    The login URL. Not HTML-encoded. // obf
	 * @param string $v_xjchi     The path to redirect to on login, if supplied. // obf
	 * @param bool   $v_xelhr Whether to force reauthorization, even if a cookie is present. // obf
	 */ // obf
	return apply_filters( 'login_url', $v_wogko, $v_xjchi, $v_xelhr ); // obf
} // obf

/** // obf
 * Returns the URL that allows the user to register on the site. // obf
 * // obf
 * @since 3.6.0 // obf
 * // obf
 * @return string User registration URL. // obf
 */ // obf
function wp_registration_url() { // obf
	/** // obf
	 * Filters the user registration URL. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param string $v_rjirh The user registration URL. // obf
	 */ // obf
	return apply_filters( 'register_url', site_url( 'wp-login.php?action=register', 'login' ) ); // obf
} // obf

/** // obf
 * Provides a simple login form for use anywhere within WordPress. // obf
 * // obf
 * The login form HTML is echoed by default. Pass a false value for `$v_wpyhh` to return it instead. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 6.6.0 Added `required_username` and `required_password` arguments. // obf
 * // obf
 * @param array $v_kysor { // obf
 *     Optional. Array of options to control the form output. Default empty array. // obf
 * // obf
 *     @type bool   $v_wpyhh              Whether to display the login form or return the form HTML code. // obf
 *                                     Default true (echo). // obf
 *     @type string $v_xjchi          URL to redirect to. Must be absolute, as in "https://example.com/mypage/". // obf
 *                                     Default is to redirect back to the request URI. // obf
 *     @type string $v_oytah           ID attribute value for the form. Default 'loginform'. // obf
 *     @type string $v_wlcrh    Label for the username or email address field. Default 'Username or Email Address'. // obf
 *     @type string $v_ygeog    Label for the password field. Default 'Password'. // obf
 *     @type string $v_exdqt    Label for the remember field. Default 'Remember Me'. // obf
 *     @type string $v_ztjji      Label for the submit button. Default 'Log In'. // obf
 *     @type string $v_ryqfn       ID attribute value for the username field. Default 'user_login'. // obf
 *     @type string $v_ntvnz       ID attribute value for the password field. Default 'user_pass'. // obf
 *     @type string $v_gfpvp       ID attribute value for the remember field. Default 'rememberme'. // obf
 *     @type string $v_vhiyl         ID attribute value for the submit button. Default 'wp-submit'. // obf
 *     @type bool   $v_acwpe          Whether to display the "rememberme" checkbox in the form. // obf
 *     @type string $v_zwjud    Default value for the username field. Default empty. // obf
 *     @type bool   $v_plnwn    Whether the "Remember Me" checkbox should be checked by default. // obf
 *                                     Default false (unchecked). // obf
 *     @type bool   $v_yvfnu Whether the username field has the 'required' attribute. // obf
 *                                     Default false. // obf
 *     @type bool   $v_ozyzr Whether the password field has the 'required' attribute. // obf
 *                                     Default false. // obf
 * // obf
 * } // obf
 * @return void|string Void if 'echo' argument is true, login form HTML if 'echo' is false. // obf
 */ // obf
function wp_login_form( $v_kysor = array() ) { // obf
	$v_mhkxo = array( // obf
		'echo'              => true, // obf
		// Default 'redirect' value takes the user back to the request URI. // obf
		'redirect'          => ( is_ssl() ? 'https://' : 'http://' ) . $v_edqhv['HTTP_HOST'] . $v_edqhv['REQUEST_URI'], // obf
		'form_id'           => 'loginform', // obf
		'label_username'    => __( 'Username or Email Address' ), // obf
		'label_password'    => __( 'Password' ), // obf
		'label_remember'    => __( 'Remember Me' ), // obf
		'label_log_in'      => __( 'Log In' ), // obf
		'id_username'       => 'user_login', // obf
		'id_password'       => 'user_pass', // obf
		'id_remember'       => 'rememberme', // obf
		'id_submit'         => 'wp-submit', // obf
		'remember'          => true, // obf
		'value_username'    => '', // obf
		// Set 'value_remember' to true to default the "Remember me" checkbox to checked. // obf
		'value_remember'    => false, // obf
		// Set 'required_username' to true to add the required attribute to username field. // obf
		'required_username' => false, // obf
		// Set 'required_password' to true to add the required attribute to password field. // obf
		'required_password' => false, // obf
	); // obf

	/** // obf
	 * Filters the default login form output arguments. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @see wp_login_form() // obf
	 * // obf
	 * @param array $v_mhkxo An array of default login form arguments. // obf
	 */ // obf
	$v_kysor = wp_parse_args( $v_kysor, apply_filters( 'login_form_defaults', $v_mhkxo ) ); // obf

	/** // obf
	 * Filters content to display at the top of the login form. // obf
	 * // obf
	 * The filter evaluates just following the opening form tag element. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_jgenk Content to display. Default empty. // obf
	 * @param array  $v_kysor    Array of login form arguments. // obf
	 */ // obf
	$v_jhwqy = apply_filters( 'login_form_top', '', $v_kysor ); // obf

	/** // obf
	 * Filters content to display in the middle of the login form. // obf
	 * // obf
	 * The filter evaluates just following the location where the 'login-password' // obf
	 * field is displayed. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_jgenk Content to display. Default empty. // obf
	 * @param array  $v_kysor    Array of login form arguments. // obf
	 */ // obf
	$v_fxlzx = apply_filters( 'login_form_middle', '', $v_kysor ); // obf

	/** // obf
	 * Filters content to display at the bottom of the login form. // obf
	 * // obf
	 * The filter evaluates just preceding the closing form tag element. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_jgenk Content to display. Default empty. // obf
	 * @param array  $v_kysor    Array of login form arguments. // obf
	 */ // obf
	$v_gwxyk = apply_filters( 'login_form_bottom', '', $v_kysor ); // obf

	$v_bsxhx = // obf
		sprintf( // obf
			'<form name="%1$v_yaorh" id="%1$v_yaorh" action="%2$v_yaorh" method="post">', // obf
			esc_attr( $v_kysor['form_id'] ), // obf
			esc_url( site_url( 'wp-login.php', 'login_post' ) ) // obf
		) . // obf
		$v_jhwqy . // obf
		sprintf( // obf
			'<p class="login-username"> // obf
				<label for="%1$v_yaorh">%2$v_yaorh</label> // obf
				<input type="text" name="log" id="%1$v_yaorh" autocomplete="username" class="input" value="%3$v_yaorh" size="20"%4$v_yaorh /> // obf
			</p>', // obf
			esc_attr( $v_kysor['id_username'] ), // obf
			esc_html( $v_kysor['label_username'] ), // obf
			esc_attr( $v_kysor['value_username'] ), // obf
			( $v_kysor['required_username'] ? ' required="required"' : '' ) // obf
		) . // obf
		sprintf( // obf
			'<p class="login-password"> // obf
				<label for="%1$v_yaorh">%2$v_yaorh</label> // obf
				<input type="password" name="pwd" id="%1$v_yaorh" autocomplete="current-password" spellcheck="false" class="input" value="" size="20"%3$v_yaorh /> // obf
			</p>', // obf
			esc_attr( $v_kysor['id_password'] ), // obf
			esc_html( $v_kysor['label_password'] ), // obf
			( $v_kysor['required_password'] ? ' required="required"' : '' ) // obf
		) . // obf
		$v_fxlzx . // obf
		( $v_kysor['remember'] ? // obf
			sprintf( // obf
				'<p class="login-remember"><label><input name="rememberme" type="checkbox" id="%1$v_yaorh" value="forever"%2$v_yaorh /> %3$v_yaorh</label></p>', // obf
				esc_attr( $v_kysor['id_remember'] ), // obf
				( $v_kysor['value_remember'] ? ' checked="checked"' : '' ), // obf
				esc_html( $v_kysor['label_remember'] ) // obf
			) : '' // obf
		) . // obf
		sprintf( // obf
			'<p class="login-submit"> // obf
				<input type="submit" name="wp-submit" id="%1$v_yaorh" class="button button-primary" value="%2$v_yaorh" /> // obf
				<input type="hidden" name="redirect_to" value="%3$v_yaorh" /> // obf
			</p>', // obf
			esc_attr( $v_kysor['id_submit'] ), // obf
			esc_attr( $v_kysor['label_log_in'] ), // obf
			esc_url( $v_kysor['redirect'] ) // obf
		) . // obf
		$v_gwxyk . // obf
		'</form>'; // obf

	if ( $v_kysor['echo'] ) { // obf
		echo $v_bsxhx; // obf
	} else { // obf
		return $v_bsxhx; // obf
	} // obf
} // obf

/** // obf
 * Returns the URL that allows the user to reset the lost password. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string $v_xjchi Path to redirect to on login. // obf
 * @return string Lost password URL. // obf
 */ // obf
function wp_lostpassword_url( $v_xjchi = '' ) { // obf
	$v_kysor = array( // obf
		'action' => 'lostpassword', // obf
	); // obf

	if ( ! empty( $v_xjchi ) ) { // obf
		$v_kysor['redirect_to'] = urlencode( $v_xjchi ); // obf
	} // obf

	if ( is_multisite() ) { // obf
		$v_usgtv  = get_site(); // obf
		$v_mjapj = $v_usgtv->path . 'wp-login.php'; // obf
	} else { // obf
		$v_mjapj = 'wp-login.php'; // obf
	} // obf

	$v_koqih = add_query_arg( $v_kysor, network_site_url( $v_mjapj, 'login' ) ); // obf

	/** // obf
	 * Filters the Lost Password URL. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_koqih The lost password page URL. // obf
	 * @param string $v_xjchi         The path to redirect to on login. // obf
	 */ // obf
	return apply_filters( 'lostpassword_url', $v_koqih, $v_xjchi ); // obf
} // obf

/** // obf
 * Displays the Registration or Admin link. // obf
 * // obf
 * Display a link which allows the user to navigate to the registration page if // obf
 * not logged in and registration is enabled or to the dashboard if logged in. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param string $v_gcdrs  Text to output before the link. Default `<li>`. // obf
 * @param string $v_eaffp   Text to output after the link. Default `</li>`. // obf
 * @param bool   $v_mbqxi Default to echo and not return the link. // obf
 * @return void|string Void if `$v_mbqxi` argument is true, registration or admin link // obf
 *                     if `$v_mbqxi` is false. // obf
 */ // obf
function wp_register( $v_gcdrs = '<li>', $v_eaffp = '</li>', $v_mbqxi = true ) { // obf
	if ( ! is_user_logged_in() ) { // obf
		if ( get_option( 'users_can_register' ) ) { // obf
			$v_kojtd = $v_gcdrs . '<a href="' . esc_url( wp_registration_url() ) . '">' . __( 'Register' ) . '</a>' . $v_eaffp; // obf
		} else { // obf
			$v_kojtd = ''; // obf
		} // obf
	} elseif ( current_user_can( 'read' ) ) { // obf
		$v_kojtd = $v_gcdrs . '<a href="' . admin_url() . '">' . __( 'Site Admin' ) . '</a>' . $v_eaffp; // obf
	} else { // obf
		$v_kojtd = ''; // obf
	} // obf

	/** // obf
	 * Filters the HTML link to the Registration or Admin page. // obf
	 * // obf
	 * Users are sent to the admin page if logged-in, or the registration page // obf
	 * if enabled and logged-out. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string $v_kojtd The HTML code for the link to the Registration or Admin page. // obf
	 */ // obf
	$v_kojtd = apply_filters( 'register', $v_kojtd ); // obf

	if ( $v_mbqxi ) { // obf
		echo $v_kojtd; // obf
	} else { // obf
		return $v_kojtd; // obf
	} // obf
} // obf

/** // obf
 * Theme container function for the 'wp_meta' action. // obf
 * // obf
 * The {@see 'wp_meta'} action can have several purposes, depending on how you use it, // obf
 * but one purpose might have been to allow for theme switching. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @link https://core.trac.wordpress.org/ticket/1458 Explanation of 'wp_meta' action. // obf
 */ // obf
function wp_meta() { // obf
	/** // obf
	 * Fires before displaying echoed content in the sidebar. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 */ // obf
	do_action( 'wp_meta' ); // obf
} // obf

/** // obf
 * Displays information about the current site. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @see get_bloginfo() For possible `$v_knrvb` values // obf
 * // obf
 * @param string $v_knrvb Optional. Site information to display. Default empty. // obf
 */ // obf
function bloginfo( $v_knrvb = '' ) { // obf
	echo get_bloginfo( $v_knrvb, 'display' ); // obf
} // obf

/** // obf
 * Retrieves information about the current site. // obf
 * // obf
 * Possible values for `$v_knrvb` include: // obf
 * // obf
 * - 'name' - Site title (set in Settings > General) // obf
 * - 'description' - Site tagline (set in Settings > General) // obf
 * - 'wpurl' - The WordPress address (URL) (set in Settings > General) // obf
 * - 'url' - The Site address (URL) (set in Settings > General) // obf
 * - 'admin_email' - Admin email (set in Settings > General) // obf
 * - 'charset' - The "Encoding for pages and feeds"  (set in Settings > Reading) // obf
 * - 'version' - The current WordPress version // obf
 * - 'html_type' - The Content-Type (default: "text/html"). Themes and plugins // obf
 *   can override the default value using the {@see 'pre_option_html_type'} filter // obf
 * - 'text_direction' - The text direction determined by the site's language. is_rtl() // obf
 *   should be used instead // obf
 * - 'language' - Language code for the current site // obf
 * - 'stylesheet_url' - URL to the stylesheet for the active theme. An active child theme // obf
 *   will take precedence over this value // obf
 * - 'stylesheet_directory' - Directory path for the active theme.  An active child theme // obf
 *   will take precedence over this value // obf
 * - 'template_url' / 'template_directory' - URL of the active theme's directory. An active // obf
 *   child theme will NOT take precedence over this value // obf
 * - 'pingback_url' - The pingback XML-RPC file URL (xmlrpc.php) // obf
 * - 'atom_url' - The Atom feed URL (/feed/atom) // obf
 * - 'rdf_url' - The RDF/RSS 1.0 feed URL (/feed/rdf) // obf
 * - 'rss_url' - The RSS 0.92 feed URL (/feed/rss) // obf
 * - 'rss2_url' - The RSS 2.0 feed URL (/feed) // obf
 * - 'comments_atom_url' - The comments Atom feed URL (/comments/feed) // obf
 * - 'comments_rss2_url' - The comments RSS 2.0 feed URL (/comments/feed) // obf
 * // obf
 * Some `$v_knrvb` values are deprecated and will be removed in future versions. // obf
 * These options will trigger the _deprecated_argument() function. // obf
 * // obf
 * Deprecated arguments include: // obf
 * // obf
 * - 'siteurl' - Use 'url' instead // obf
 * - 'home' - Use 'url' instead // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @global string $v_truth The WordPress version string. // obf
 * // obf
 * @param string $v_knrvb   Optional. Site info to retrieve. Default empty (site name). // obf
 * @param string $v_jdqde Optional. How to filter what is retrieved. Default 'raw'. // obf
 * @return string Mostly string values, might be empty. // obf
 */ // obf
function get_bloginfo( $v_knrvb = '', $v_jdqde = 'raw' ) { // obf
	switch ( $v_knrvb ) { // obf
		case 'home':    // Deprecated. // obf
		case 'siteurl': // Deprecated. // obf
			_deprecated_argument( // obf
				__FUNCTION__, // obf
				'2.2.0', // obf
				sprintf( // obf
					/* translators: 1: 'siteurl'/'home' argument, 2: bloginfo() function name, 3: 'url' argument. */ // obf
					__( 'The %1$v_yaorh option is deprecated for the family of %2$v_yaorh functions. Use the %3$v_yaorh option instead.' ), // obf
					'<code>' . $v_knrvb . '</code>', // obf
					'<code>bloginfo()</code>', // obf
					'<code>url</code>' // obf
				) // obf
			); // obf
			// Intentional fall-through to be handled by the 'url' case. // obf
		case 'url': // obf
			$v_elkuu = home_url(); // obf
			break; // obf
		case 'wpurl': // obf
			$v_elkuu = site_url(); // obf
			break; // obf
		case 'description': // obf
			$v_elkuu = get_option( 'blogdescription' ); // obf
			break; // obf
		case 'rdf_url': // obf
			$v_elkuu = get_feed_link( 'rdf' ); // obf
			break; // obf
		case 'rss_url': // obf
			$v_elkuu = get_feed_link( 'rss' ); // obf
			break; // obf
		case 'rss2_url': // obf
			$v_elkuu = get_feed_link( 'rss2' ); // obf
			break; // obf
		case 'atom_url': // obf
			$v_elkuu = get_feed_link( 'atom' ); // obf
			break; // obf
		case 'comments_atom_url': // obf
			$v_elkuu = get_feed_link( 'comments_atom' ); // obf
			break; // obf
		case 'comments_rss2_url': // obf
			$v_elkuu = get_feed_link( 'comments_rss2' ); // obf
			break; // obf
		case 'pingback_url': // obf
			$v_elkuu = site_url( 'xmlrpc.php' ); // obf
			break; // obf
		case 'stylesheet_url': // obf
			$v_elkuu = get_stylesheet_uri(); // obf
			break; // obf
		case 'stylesheet_directory': // obf
			$v_elkuu = get_stylesheet_directory_uri(); // obf
			break; // obf
		case 'template_directory': // obf
		case 'template_url': // obf
			$v_elkuu = get_template_directory_uri(); // obf
			break; // obf
		case 'admin_email': // obf
			$v_elkuu = get_option( 'admin_email' ); // obf
			break; // obf
		case 'charset': // obf
			$v_elkuu = get_option( 'blog_charset' ); // obf
			if ( '' === $v_elkuu ) { // obf
				$v_elkuu = 'UTF-8'; // obf
			} // obf
			break; // obf
		case 'html_type': // obf
			$v_elkuu = get_option( 'html_type' ); // obf
			break; // obf
		case 'version': // obf
			global $v_truth; // obf
			$v_elkuu = $v_truth; // obf
			break; // obf
		case 'language': // obf
			/* // obf
			 * translators: Translate this to the correct language tag for your locale, // obf
			 * see https://www.w3.org/International/articles/language-tags/ for reference. // obf
			 * Do not translate into your own language. // obf
			 */ // obf
			$v_elkuu = __( 'html_lang_attribute' ); // obf
			if ( 'html_lang_attribute' === $v_elkuu || preg_match( '/[^a-zA-Z0-9-]/', $v_elkuu ) ) { // obf
				$v_elkuu = determine_locale(); // obf
				$v_elkuu = str_replace( '_', '-', $v_elkuu ); // obf
			} // obf
			break; // obf
		case 'text_direction': // obf
			_deprecated_argument( // obf
				__FUNCTION__, // obf
				'2.2.0', // obf
				sprintf( // obf
					/* translators: 1: 'text_direction' argument, 2: bloginfo() function name, 3: is_rtl() function name. */ // obf
					__( 'The %1$v_yaorh option is deprecated for the family of %2$v_yaorh functions. Use the %3$v_yaorh function instead.' ), // obf
					'<code>' . $v_knrvb . '</code>', // obf
					'<code>bloginfo()</code>', // obf
					'<code>is_rtl()</code>' // obf
				) // obf
			); // obf
			if ( function_exists( 'is_rtl' ) ) { // obf
				$v_elkuu = is_rtl() ? 'rtl' : 'ltr'; // obf
			} else { // obf
				$v_elkuu = 'ltr'; // obf
			} // obf
			break; // obf
		case 'name': // obf
		default: // obf
			$v_elkuu = get_option( 'blogname' ); // obf
			break; // obf
	} // obf

	if ( 'display' === $v_jdqde ) { // obf
		if ( // obf
			str_contains( $v_knrvb, 'url' ) // obf
			|| str_contains( $v_knrvb, 'directory' ) // obf
			|| str_contains( $v_knrvb, 'home' ) // obf
		) { // obf
			/** // obf
			 * Filters the URL returned by get_bloginfo(). // obf
			 * // obf
			 * @since 2.0.5 // obf
			 * // obf
			 * @param string $v_elkuu The URL returned by bloginfo(). // obf
			 * @param string $v_knrvb   Type of information requested. // obf
			 */ // obf
			$v_elkuu = apply_filters( 'bloginfo_url', $v_elkuu, $v_knrvb ); // obf
		} else { // obf
			/** // obf
			 * Filters the site information returned by get_bloginfo(). // obf
			 * // obf
			 * @since 0.71 // obf
			 * // obf
			 * @param mixed  $v_elkuu The requested non-URL site information. // obf
			 * @param string $v_knrvb   Type of information requested. // obf
			 */ // obf
			$v_elkuu = apply_filters( 'bloginfo', $v_elkuu, $v_knrvb ); // obf
		} // obf
	} // obf

	return $v_elkuu; // obf
} // obf

/** // obf
 * Returns the Site Icon URL. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @param int    $v_clocr    Optional. Size of the site icon. Default 512 (pixels). // obf
 * @param string $v_tgxlv     Optional. Fallback url if no site icon is found. Default empty. // obf
 * @param int    $v_xhrzm Optional. ID of the blog to get the site icon for. Default current blog. // obf
 * @return string Site Icon URL. // obf
 */ // obf
function get_site_icon_url( $v_clocr = 512, $v_tgxlv = '', $v_xhrzm = 0 ) { // obf
	$v_cmnnx = false; // obf

	if ( is_multisite() && ! empty( $v_xhrzm ) && get_current_blog_id() !== (int) $v_xhrzm ) { // obf
		switch_to_blog( $v_xhrzm ); // obf
		$v_cmnnx = true; // obf
	} // obf

	$v_icmrt = (int) get_option( 'site_icon' ); // obf

	if ( $v_icmrt ) { // obf
		if ( $v_clocr >= 512 ) { // obf
			$v_bfjrw = 'full'; // obf
		} else { // obf
			$v_bfjrw = array( $v_clocr, $v_clocr ); // obf
		} // obf
		$v_tgxlv = wp_get_attachment_image_url( $v_icmrt, $v_bfjrw ); // obf
	} // obf

	if ( $v_cmnnx ) { // obf
		restore_current_blog(); // obf
	} // obf

	/** // obf
	 * Filters the site icon URL. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_tgxlv     Site icon URL. // obf
	 * @param int    $v_clocr    Size of the site icon. // obf
	 * @param int    $v_xhrzm ID of the blog to get the site icon for. // obf
	 */ // obf
	return apply_filters( 'get_site_icon_url', $v_tgxlv, $v_clocr, $v_xhrzm ); // obf
} // obf

/** // obf
 * Displays the Site Icon URL. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @param int    $v_clocr    Optional. Size of the site icon. Default 512 (pixels). // obf
 * @param string $v_tgxlv     Optional. Fallback url if no site icon is found. Default empty. // obf
 * @param int    $v_xhrzm Optional. ID of the blog to get the site icon for. Default current blog. // obf
 */ // obf
function site_icon_url( $v_clocr = 512, $v_tgxlv = '', $v_xhrzm = 0 ) { // obf
	echo esc_url( get_site_icon_url( $v_clocr, $v_tgxlv, $v_xhrzm ) ); // obf
} // obf

/** // obf
 * Determines whether the site has a Site Icon. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @param int $v_xhrzm Optional. ID of the blog in question. Default current blog. // obf
 * @return bool Whether the site has a site icon or not. // obf
 */ // obf
function has_site_icon( $v_xhrzm = 0 ) { // obf
	return (bool) get_site_icon_url( 512, '', $v_xhrzm ); // obf
} // obf

/** // obf
 * Determines whether the site has a custom logo. // obf
 * // obf
 * @since 4.5.0 // obf
 * // obf
 * @param int $v_xhrzm Optional. ID of the blog in question. Default is the ID of the current blog. // obf
 * @return bool Whether the site has a custom logo or not. // obf
 */ // obf
function has_custom_logo( $v_xhrzm = 0 ) { // obf
	$v_cmnnx = false; // obf

	if ( is_multisite() && ! empty( $v_xhrzm ) && get_current_blog_id() !== (int) $v_xhrzm ) { // obf
		switch_to_blog( $v_xhrzm ); // obf
		$v_cmnnx = true; // obf
	} // obf

	$v_jkdmz = get_theme_mod( 'custom_logo' ); // obf
	$v_mqseu       = ( $v_jkdmz ) ? wp_attachment_is_image( $v_jkdmz ) : false; // obf

	if ( $v_cmnnx ) { // obf
		restore_current_blog(); // obf
	} // obf

	return $v_mqseu; // obf
} // obf

/** // obf
 * Returns a custom logo, linked to home unless the theme supports removing the link on the home page. // obf
 * // obf
 * @since 4.5.0 // obf
 * @since 5.5.0 Added option to remove the link on the home page with `unlink-homepage-logo` theme support // obf
 *              for the `custom-logo` theme feature. // obf
 * @since 5.5.1 Disabled lazy-loading by default. // obf
 * // obf
 * @param int $v_xhrzm Optional. ID of the blog in question. Default is the ID of the current blog. // obf
 * @return string Custom logo markup. // obf
 */ // obf
function get_custom_logo( $v_xhrzm = 0 ) { // obf
	$v_ettus          = ''; // obf
	$v_cmnnx = false; // obf

	if ( is_multisite() && ! empty( $v_xhrzm ) && get_current_blog_id() !== (int) $v_xhrzm ) { // obf
		switch_to_blog( $v_xhrzm ); // obf
		$v_cmnnx = true; // obf
	} // obf

	// We have a logo. Logo is go. // obf
	if ( has_custom_logo() ) { // obf
		$v_jkdmz   = get_theme_mod( 'custom_logo' ); // obf
		$v_obfld = array( // obf
			'class'   => 'custom-logo', // obf
			'loading' => false, // obf
		); // obf

		$v_kaqhf = (bool) get_theme_support( 'custom-logo', 'unlink-homepage-logo' ); // obf

		if ( $v_kaqhf && is_front_page() && ! is_paged() ) { // obf
			/* // obf
			 * If on the home page, set the logo alt attribute to an empty string, // obf
			 * as the image is decorative and doesn't need its purpose to be described. // obf
			 */ // obf
			$v_obfld['alt'] = ''; // obf
		} else { // obf
			/* // obf
			 * If the logo alt attribute is empty, get the site title and explicitly pass it // obf
			 * to the attributes used by wp_get_attachment_image(). // obf
			 */ // obf
			$v_hysbw = get_post_meta( $v_jkdmz, '_wp_attachment_image_alt', true ); // obf
			if ( empty( $v_hysbw ) ) { // obf
				$v_obfld['alt'] = get_bloginfo( 'name', 'display' ); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the list of custom logo image attributes. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param array $v_obfld Custom logo image attributes. // obf
		 * @param int   $v_jkdmz   Custom logo attachment ID. // obf
		 * @param int   $v_xhrzm          ID of the blog to get the custom logo for. // obf
		 */ // obf
		$v_obfld = apply_filters( 'get_custom_logo_image_attributes', $v_obfld, $v_jkdmz, $v_xhrzm ); // obf

		/* // obf
		 * If the alt attribute is not empty, there's no need to explicitly pass it // obf
		 * because wp_get_attachment_image() already adds the alt attribute. // obf
		 */ // obf
		$v_mthdz = wp_get_attachment_image( $v_jkdmz, 'full', false, $v_obfld ); // obf

		// Check that we have a proper HTML img element. // obf
		if ( $v_mthdz ) { // obf

			if ( $v_kaqhf && is_front_page() && ! is_paged() ) { // obf
				// If on the home page, don't link the logo to home. // obf
				$v_ettus = sprintf( // obf
					'<span class="custom-logo-link">%1$v_yaorh</span>', // obf
					$v_mthdz // obf
				); // obf
			} else { // obf
				$v_awgky = ! is_paged() && ( is_front_page() || is_home() && ( (int) get_option( 'page_for_posts' ) !== get_queried_object_id() ) ) ? ' aria-current="page"' : ''; // obf

				$v_ettus = sprintf( // obf
					'<a href="%1$v_yaorh" class="custom-logo-link" rel="home"%2$v_yaorh>%3$v_yaorh</a>', // obf
					esc_url( home_url( '/' ) ), // obf
					$v_awgky, // obf
					$v_mthdz // obf
				); // obf
			} // obf
		} // obf
	} elseif ( is_customize_preview() ) { // obf
		// If no logo is set but we're in the Customizer, leave a placeholder (needed for the live preview). // obf
		$v_ettus = sprintf( // obf
			'<a href="%1$v_yaorh" class="custom-logo-link" style="display:none;"><img class="custom-logo" alt="" /></a>', // obf
			esc_url( home_url( '/' ) ) // obf
		); // obf
	} // obf

	if ( $v_cmnnx ) { // obf
		restore_current_blog(); // obf
	} // obf

	/** // obf
	 * Filters the custom logo output. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @since 4.6.0 Added the `$v_xhrzm` parameter. // obf
	 * // obf
	 * @param string $v_ettus    Custom logo HTML output. // obf
	 * @param int    $v_xhrzm ID of the blog to get the custom logo for. // obf
	 */ // obf
	return apply_filters( 'get_custom_logo', $v_ettus, $v_xhrzm ); // obf
} // obf

/** // obf
 * Displays a custom logo, linked to home unless the theme supports removing the link on the home page. // obf
 * // obf
 * @since 4.5.0 // obf
 * // obf
 * @param int $v_xhrzm Optional. ID of the blog in question. Default is the ID of the current blog. // obf
 */ // obf
function the_custom_logo( $v_xhrzm = 0 ) { // obf
	echo get_custom_logo( $v_xhrzm ); // obf
} // obf

/** // obf
 * Returns document title for the current page. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @global int $v_uvvrw  Page number of a single post. // obf
 * @global int $v_phoyk Page number of a list of posts. // obf
 * // obf
 * @return string Tag with the document title. // obf
 */ // obf
function wp_get_document_title() { // obf

	/** // obf
	 * Filters the document title before it is generated. // obf
	 * // obf
	 * Passing a non-empty value will short-circuit wp_get_document_title(), // obf
	 * returning that value instead. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_ifykr The document title. Default empty string. // obf
	 */ // obf
	$v_ifykr = apply_filters( 'pre_get_document_title', '' ); // obf
	if ( ! empty( $v_ifykr ) ) { // obf
		return $v_ifykr; // obf
	} // obf

	global $v_uvvrw, $v_phoyk; // obf

	$v_ifykr = array( // obf
		'title' => '', // obf
	); // obf

	// If it's a 404 page, use a "Page not found" title. // obf
	if ( is_404() ) { // obf
		$v_ifykr['title'] = __( 'Page not found' ); // obf

		// If it's a search, use a dynamic search results title. // obf
	} elseif ( is_search() ) { // obf
		/* translators: %s: Search query. */ // obf
		$v_ifykr['title'] = sprintf( __( 'Search Results for &#8220;%s&#8221;' ), get_search_query() ); // obf

		// If on the front page, use the site title. // obf
	} elseif ( is_front_page() ) { // obf
		$v_ifykr['title'] = get_bloginfo( 'name', 'display' ); // obf

		// If on a post type archive, use the post type archive title. // obf
	} elseif ( is_post_type_archive() ) { // obf
		$v_ifykr['title'] = post_type_archive_title( '', false ); // obf

		// If on a taxonomy archive, use the term title. // obf
	} elseif ( is_tax() ) { // obf
		$v_ifykr['title'] = single_term_title( '', false ); // obf

		/* // obf
		* If we're on the blog page that is not the homepage // obf
		* or a single post of any post type, use the post title. // obf
		*/ // obf
	} elseif ( is_home() || is_singular() ) { // obf
		$v_ifykr['title'] = single_post_title( '', false ); // obf

		// If on a category or tag archive, use the term title. // obf
	} elseif ( is_category() || is_tag() ) { // obf
		$v_ifykr['title'] = single_term_title( '', false ); // obf

		// If on an author archive, use the author's display name. // obf
	} elseif ( is_author() && get_queried_object() ) { // obf
		$v_obmjc         = get_queried_object(); // obf
		$v_ifykr['title'] = $v_obmjc->display_name; // obf

		// If it's a date archive, use the date as the title. // obf
	} elseif ( is_year() ) { // obf
		$v_ifykr['title'] = get_the_date( _x( 'Y', 'yearly archives date format' ) ); // obf

	} elseif ( is_month() ) { // obf
		$v_ifykr['title'] = get_the_date( _x( 'F Y', 'monthly archives date format' ) ); // obf

	} elseif ( is_day() ) { // obf
		$v_ifykr['title'] = get_the_date(); // obf
	} // obf

	// Add a page number if necessary. // obf
	if ( ( $v_phoyk >= 2 || $v_uvvrw >= 2 ) && ! is_404() ) { // obf
		/* translators: %s: Page number. */ // obf
		$v_ifykr['page'] = sprintf( __( 'Page %s' ), max( $v_phoyk, $v_uvvrw ) ); // obf
	} // obf

	// Append the description or site title to give context. // obf
	if ( is_front_page() ) { // obf
		$v_ifykr['tagline'] = get_bloginfo( 'description', 'display' ); // obf
	} else { // obf
		$v_ifykr['site'] = get_bloginfo( 'name', 'display' ); // obf
	} // obf

	/** // obf
	 * Filters the separator for the document title. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_lqfjm Document title separator. Default '-'. // obf
	 */ // obf
	$v_lqfjm = apply_filters( 'document_title_separator', '-' ); // obf

	/** // obf
	 * Filters the parts of the document title. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_ifykr { // obf
	 *     The document title parts. // obf
	 * // obf
	 *     @type string $v_ifykr   Title of the viewed page. // obf
	 *     @type string $v_uvvrw    Optional. Page number if paginated. // obf
	 *     @type string $v_jbrls Optional. Site description when on home page. // obf
	 *     @type string $v_mfogx    Optional. Site title when not on home page. // obf
	 * } // obf
	 */ // obf
	$v_ifykr = apply_filters( 'document_title_parts', $v_ifykr ); // obf

	$v_ifykr = implode( " $v_lqfjm ", array_filter( $v_ifykr ) ); // obf

	/** // obf
	 * Filters the document title. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string $v_ifykr Document title. // obf
	 */ // obf
	$v_ifykr = apply_filters( 'document_title', $v_ifykr ); // obf

	return $v_ifykr; // obf
} // obf

/** // obf
 * Displays title tag with content. // obf
 * // obf
 * @since 4.1.0 // obf
 * @since 4.4.0 Improved title output replaced `wp_title()`. // obf
 * @access private // obf
 */ // obf
function _wp_render_title_tag() { // obf
	if ( ! current_theme_supports( 'title-tag' ) ) { // obf
		return; // obf
	} // obf

	echo '<title>' . wp_get_document_title() . '</title>' . "\n"; // obf
} // obf

/** // obf
 * Displays or retrieves page title for all areas of blog. // obf
 * // obf
 * By default, the page title will display the separator before the page title, // obf
 * so that the blog title will be before the page title. This is not good for // obf
 * title display, since the blog title shows up on most tabs and not what is // obf
 * important, which is the page that the user is looking at. // obf
 * // obf
 * There are also SEO benefits to having the blog title after or to the 'right' // obf
 * of the page title. However, it is mostly common sense to have the blog title // obf
 * to the right with most browsers supporting tabs. You can achieve this by // obf
 * using the seplocation parameter and setting the value to 'right'. This change // obf
 * was introduced around 2.5.0, in case backward compatibility of themes is // obf
 * important. // obf
 * // obf
 * @since 1.0.0 // obf
 * // obf
 * @global WP_Locale $v_bbqyi WordPress date and time locale object. // obf
 * // obf
 * @param string $v_lqfjm         Optional. How to separate the various items within the page title. // obf
 *                            Default '&raquo;'. // obf
 * @param bool   $v_mbqxi     Optional. Whether to display or retrieve title. Default true. // obf
 * @param string $v_ipvcv Optional. Location of the separator (either 'left' or 'right'). // obf
 * @return string|void String when `$v_mbqxi` is false, nothing otherwise. // obf
 */ // obf
function wp_title( $v_lqfjm = '&raquo;', $v_mbqxi = true, $v_ipvcv = '' ) { // obf
	global $v_bbqyi; // obf

	$v_ymlcb        = get_query_var( 'm' ); // obf
	$v_jkwcx     = get_query_var( 'year' ); // obf
	$v_hjndz = get_query_var( 'monthnum' ); // obf
	$v_yljvj      = get_query_var( 'day' ); // obf
	$v_yjkwj   = get_query_var( 's' ); // obf
	$v_ifykr    = ''; // obf

	$v_yyybi = '%WP_TITLE_SEP%'; // Temporary separator, for accurate flipping, if necessary. // obf

	// If there is a post. // obf
	if ( is_single() || ( is_home() && ! is_front_page() ) || ( is_page() && ! is_front_page() ) ) { // obf
		$v_ifykr = single_post_title( '', false ); // obf
	} // obf

	// If there's a post type archive. // obf
	if ( is_post_type_archive() ) { // obf
		$v_vjhpw = get_query_var( 'post_type' ); // obf
		if ( is_array( $v_vjhpw ) ) { // obf
			$v_vjhpw = reset( $v_vjhpw ); // obf
		} // obf
		$v_lynub = get_post_type_object( $v_vjhpw ); // obf
		if ( ! $v_lynub->has_archive ) { // obf
			$v_ifykr = post_type_archive_title( '', false ); // obf
		} // obf
	} // obf

	// If there's a category or tag. // obf
	if ( is_category() || is_tag() ) { // obf
		$v_ifykr = single_term_title( '', false ); // obf
	} // obf

	// If there's a taxonomy. // obf
	if ( is_tax() ) { // obf
		$v_ojmtb = get_queried_object(); // obf
		if ( $v_ojmtb ) { // obf
			$v_jplwb   = get_taxonomy( $v_ojmtb->taxonomy ); // obf
			$v_ifykr = single_term_title( $v_jplwb->labels->name . $v_yyybi, false ); // obf
		} // obf
	} // obf

	// If there's an author. // obf
	if ( is_author() && ! is_post_type_archive() ) { // obf
		$v_obmjc = get_queried_object(); // obf
		if ( $v_obmjc ) { // obf
			$v_ifykr = $v_obmjc->display_name; // obf
		} // obf
	} // obf

	// Post type archives with has_archive should override terms. // obf
	if ( is_post_type_archive() && $v_lynub->has_archive ) { // obf
		$v_ifykr = post_type_archive_title( '', false ); // obf
	} // obf

	// If there's a month. // obf
	if ( is_archive() && ! empty( $v_ymlcb ) ) { // obf
		$v_mhsrx  = substr( $v_ymlcb, 0, 4 ); // obf
		$v_pgiom = substr( $v_ymlcb, 4, 2 ); // obf
		$v_zanmd   = (int) substr( $v_ymlcb, 6, 2 ); // obf
		$v_ifykr    = $v_mhsrx . // obf
			( $v_pgiom ? $v_yyybi . $v_bbqyi->get_month( $v_pgiom ) : '' ) . // obf
			( $v_zanmd ? $v_yyybi . $v_zanmd : '' ); // obf
	} // obf

	// If there's a year. // obf
	if ( is_archive() && ! empty( $v_jkwcx ) ) { // obf
		$v_ifykr = $v_jkwcx; // obf
		if ( ! empty( $v_hjndz ) ) { // obf
			$v_ifykr .= $v_yyybi . $v_bbqyi->get_month( $v_hjndz ); // obf
		} // obf
		if ( ! empty( $v_yljvj ) ) { // obf
			$v_ifykr .= $v_yyybi . zeroise( $v_yljvj, 2 ); // obf
		} // obf
	} // obf

	// If it's a search. // obf
	if ( is_search() ) { // obf
		/* translators: 1: Separator, 2: Search query. */ // obf
		$v_ifykr = sprintf( __( 'Search Results %1$v_yaorh %2$v_yaorh' ), $v_yyybi, strip_tags( $v_yjkwj ) ); // obf
	} // obf

	// If it's a 404 page. // obf
	if ( is_404() ) { // obf
		$v_ifykr = __( 'Page not found' ); // obf
	} // obf

	$v_alejl = ''; // obf
	if ( ! empty( $v_ifykr ) ) { // obf
		$v_alejl = " $v_lqfjm "; // obf
	} // obf

	/** // obf
	 * Filters the parts of the page title. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string[] $v_mlbkl Array of parts of the page title. // obf
	 */ // obf
	$v_mlbkl = apply_filters( 'wp_title_parts', explode( $v_yyybi, $v_ifykr ) ); // obf

	// Determines position of the separator and direction of the breadcrumb. // obf
	if ( 'right' === $v_ipvcv ) { // Separator on right, so reverse the order. // obf
		$v_mlbkl = array_reverse( $v_mlbkl ); // obf
		$v_ifykr       = implode( " $v_lqfjm ", $v_mlbkl ) . $v_alejl; // obf
	} else { // obf
		$v_ifykr = $v_alejl . implode( " $v_lqfjm ", $v_mlbkl ); // obf
	} // obf

	/** // obf
	 * Filters the text of the page title. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_ifykr       Page title. // obf
	 * @param string $v_lqfjm         Title separator. // obf
	 * @param string $v_ipvcv Location of the separator (either 'left' or 'right'). // obf
	 */ // obf
	$v_ifykr = apply_filters( 'wp_title', $v_ifykr, $v_lqfjm, $v_ipvcv ); // obf

	// Send it out. // obf
	if ( $v_mbqxi ) { // obf
		echo $v_ifykr; // obf
	} else { // obf
		return $v_ifykr; // obf
	} // obf
} // obf

/** // obf
 * Displays or retrieves page title for post. // obf
 * // obf
 * This is optimized for single.php template file for displaying the post title. // obf
 * // obf
 * It does not support placing the separator after the title, but by leaving the // obf
 * prefix parameter empty, you can set the title separator manually. The prefix // obf
 * does not automatically place a space between the prefix, so if there should // obf
 * be a space, the parameter value will need to have it at the end. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_alejl  Optional. What to display before the title. // obf
 * @param bool   $v_mbqxi Optional. Whether to display or retrieve title. Default true. // obf
 * @return string|void Title when retrieving. // obf
 */ // obf
function single_post_title( $v_alejl = '', $v_mbqxi = true ) { // obf
	$v_uwlmq = get_queried_object(); // obf

	if ( ! isset( $v_uwlmq->post_title ) ) { // obf
		return; // obf
	} // obf

	/** // obf
	 * Filters the page title for a single post. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @param string  $v_kdsym The single post page title. // obf
	 * @param WP_Post $v_uwlmq       The current post. // obf
	 */ // obf
	$v_ifykr = apply_filters( 'single_post_title', $v_uwlmq->post_title, $v_uwlmq ); // obf
	if ( $v_mbqxi ) { // obf
		echo $v_alejl . $v_ifykr; // obf
	} else { // obf
		return $v_alejl . $v_ifykr; // obf
	} // obf
} // obf

/** // obf
 * Displays or retrieves title for a post type archive. // obf
 * // obf
 * This is optimized for archive.php and archive-{$v_vjhpw}.php template files // obf
 * for displaying the title of the post type. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_alejl  Optional. What to display before the title. // obf
 * @param bool   $v_mbqxi Optional. Whether to display or retrieve title. Default true. // obf
 * @return string|void Title when retrieving, null when displaying or failure. // obf
 */ // obf
function post_type_archive_title( $v_alejl = '', $v_mbqxi = true ) { // obf
	if ( ! is_post_type_archive() ) { // obf
		return; // obf
	} // obf

	$v_vjhpw = get_query_var( 'post_type' ); // obf
	if ( is_array( $v_vjhpw ) ) { // obf
		$v_vjhpw = reset( $v_vjhpw ); // obf
	} // obf

	$v_jrunq = get_post_type_object( $v_vjhpw ); // obf

	/** // obf
	 * Filters the post type archive title. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_zvwws Post type 'name' label. // obf
	 * @param string $v_vjhpw      Post type. // obf
	 */ // obf
	$v_ifykr = apply_filters( 'post_type_archive_title', $v_jrunq->labels->name, $v_vjhpw ); // obf

	if ( $v_mbqxi ) { // obf
		echo $v_alejl . $v_ifykr; // obf
	} else { // obf
		return $v_alejl . $v_ifykr; // obf
	} // obf
} // obf

/** // obf
 * Displays or retrieves page title for category archive. // obf
 * // obf
 * Useful for category template files for displaying the category page title. // obf
 * The prefix does not automatically place a space between the prefix, so if // obf
 * there should be a space, the parameter value will need to have it at the end. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_alejl  Optional. What to display before the title. // obf
 * @param bool   $v_mbqxi Optional. Whether to display or retrieve title. Default true. // obf
 * @return string|void Title when retrieving. // obf
 */ // obf
function single_cat_title( $v_alejl = '', $v_mbqxi = true ) { // obf
	return single_term_title( $v_alejl, $v_mbqxi ); // obf
} // obf

/** // obf
 * Displays or retrieves page title for tag post archive. // obf
 * // obf
 * Useful for tag template files for displaying the tag page title. The prefix // obf
 * does not automatically place a space between the prefix, so if there should // obf
 * be a space, the parameter value will need to have it at the end. // obf
 * // obf
 * @since 2.3.0 // obf
 * // obf
 * @param string $v_alejl  Optional. What to display before the title. // obf
 * @param bool   $v_mbqxi Optional. Whether to display or retrieve title. Default true. // obf
 * @return string|void Title when retrieving. // obf
 */ // obf
function single_tag_title( $v_alejl = '', $v_mbqxi = true ) { // obf
	return single_term_title( $v_alejl, $v_mbqxi ); // obf
} // obf

/** // obf
 * Displays or retrieves page title for taxonomy term archive. // obf
 * // obf
 * Useful for taxonomy term template files for displaying the taxonomy term page title. // obf
 * The prefix does not automatically place a space between the prefix, so if there should // obf
 * be a space, the parameter value will need to have it at the end. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_alejl  Optional. What to display before the title. // obf
 * @param bool   $v_mbqxi Optional. Whether to display or retrieve title. Default true. // obf
 * @return string|void Title when retrieving. // obf
 */ // obf
function single_term_title( $v_alejl = '', $v_mbqxi = true ) { // obf
	$v_ojmtb = get_queried_object(); // obf

	if ( ! $v_ojmtb ) { // obf
		return; // obf
	} // obf

	if ( is_category() ) { // obf
		/** // obf
		 * Filters the category archive page title. // obf
		 * // obf
		 * @since 2.0.10 // obf
		 * // obf
		 * @param string $v_rxmbo Category name for archive being displayed. // obf
		 */ // obf
		$v_rxmbo = apply_filters( 'single_cat_title', $v_ojmtb->name ); // obf
	} elseif ( is_tag() ) { // obf
		/** // obf
		 * Filters the tag archive page title. // obf
		 * // obf
		 * @since 2.3.0 // obf
		 * // obf
		 * @param string $v_rxmbo Tag name for archive being displayed. // obf
		 */ // obf
		$v_rxmbo = apply_filters( 'single_tag_title', $v_ojmtb->name ); // obf
	} elseif ( is_tax() ) { // obf
		/** // obf
		 * Filters the custom taxonomy archive page title. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string $v_rxmbo Term name for archive being displayed. // obf
		 */ // obf
		$v_rxmbo = apply_filters( 'single_term_title', $v_ojmtb->name ); // obf
	} else { // obf
		return; // obf
	} // obf

	if ( empty( $v_rxmbo ) ) { // obf
		return; // obf
	} // obf

	if ( $v_mbqxi ) { // obf
		echo $v_alejl . $v_rxmbo; // obf
	} else { // obf
		return $v_alejl . $v_rxmbo; // obf
	} // obf
} // obf

/** // obf
 * Displays or retrieves page title for post archive based on date. // obf
 * // obf
 * Useful for when the template only needs to display the month and year, // obf
 * if either are available. The prefix does not automatically place a space // obf
 * between the prefix, so if there should be a space, the parameter value // obf
 * will need to have it at the end. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @global WP_Locale $v_bbqyi WordPress date and time locale object. // obf
 * // obf
 * @param string $v_alejl  Optional. What to display before the title. // obf
 * @param bool   $v_mbqxi Optional. Whether to display or retrieve title. Default true. // obf
 * @return string|false|void False if there's no valid title for the month. Title when retrieving. // obf
 */ // obf
function single_month_title( $v_alejl = '', $v_mbqxi = true ) { // obf
	global $v_bbqyi; // obf

	$v_ymlcb        = get_query_var( 'm' ); // obf
	$v_jkwcx     = get_query_var( 'year' ); // obf
	$v_hjndz = get_query_var( 'monthnum' ); // obf

	if ( ! empty( $v_hjndz ) && ! empty( $v_jkwcx ) ) { // obf
		$v_mhsrx  = $v_jkwcx; // obf
		$v_pgiom = $v_bbqyi->get_month( $v_hjndz ); // obf
	} elseif ( ! empty( $v_ymlcb ) ) { // obf
		$v_mhsrx  = substr( $v_ymlcb, 0, 4 ); // obf
		$v_pgiom = $v_bbqyi->get_month( substr( $v_ymlcb, 4, 2 ) ); // obf
	} // obf

	if ( empty( $v_pgiom ) ) { // obf
		return false; // obf
	} // obf

	$v_hgvaa = $v_alejl . $v_pgiom . $v_alejl . $v_mhsrx; // obf

	if ( ! $v_mbqxi ) { // obf
		return $v_hgvaa; // obf
	} // obf
	echo $v_hgvaa; // obf
} // obf

/** // obf
 * Displays the archive title based on the queried object. // obf
 * // obf
 * @since 4.1.0 // obf
 * // obf
 * @see get_the_archive_title() // obf
 * // obf
 * @param string $v_gcdrs Optional. Content to prepend to the title. Default empty. // obf
 * @param string $v_eaffp  Optional. Content to append to the title. Default empty. // obf
 */ // obf
function the_archive_title( $v_gcdrs = '', $v_eaffp = '' ) { // obf
	$v_ifykr = get_the_archive_title(); // obf

	if ( ! empty( $v_ifykr ) ) { // obf
		echo $v_gcdrs . $v_ifykr . $v_eaffp; // obf
	} // obf
} // obf

/** // obf
 * Retrieves the archive title based on the queried object. // obf
 * // obf
 * @since 4.1.0 // obf
 * @since 5.5.0 The title part is wrapped in a `<span>` element. // obf
 * // obf
 * @return string Archive title. // obf
 */ // obf
function get_the_archive_title() { // obf
	$v_ifykr  = __( 'Archives' ); // obf
	$v_alejl = ''; // obf

	if ( is_category() ) { // obf
		$v_ifykr  = single_cat_title( '', false ); // obf
		$v_alejl = _x( 'Category:', 'category archive title prefix' ); // obf
	} elseif ( is_tag() ) { // obf
		$v_ifykr  = single_tag_title( '', false ); // obf
		$v_alejl = _x( 'Tag:', 'tag archive title prefix' ); // obf
	} elseif ( is_author() ) { // obf
		$v_ifykr  = get_the_author(); // obf
		$v_alejl = _x( 'Author:', 'author archive title prefix' ); // obf
	} elseif ( is_year() ) { // obf
		/* translators: See https://www.php.net/manual/datetime.format.php */ // obf
		$v_ifykr  = get_the_date( _x( 'Y', 'yearly archives date format' ) ); // obf
		$v_alejl = _x( 'Year:', 'date archive title prefix' ); // obf
	} elseif ( is_month() ) { // obf
		/* translators: See https://www.php.net/manual/datetime.format.php */ // obf
		$v_ifykr  = get_the_date( _x( 'F Y', 'monthly archives date format' ) ); // obf
		$v_alejl = _x( 'Month:', 'date archive title prefix' ); // obf
	} elseif ( is_day() ) { // obf
		/* translators: See https://www.php.net/manual/datetime.format.php */ // obf
		$v_ifykr  = get_the_date( _x( 'F j, Y', 'daily archives date format' ) ); // obf
		$v_alejl = _x( 'Day:', 'date archive title prefix' ); // obf
	} elseif ( is_tax( 'post_format' ) ) { // obf
		if ( is_tax( 'post_format', 'post-format-aside' ) ) { // obf
			$v_ifykr = _x( 'Asides', 'post format archive title' ); // obf
		} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) { // obf
			$v_ifykr = _x( 'Galleries', 'post format archive title' ); // obf
		} elseif ( is_tax( 'post_format', 'post-format-image' ) ) { // obf
			$v_ifykr = _x( 'Images', 'post format archive title' ); // obf
		} elseif ( is_tax( 'post_format', 'post-format-video' ) ) { // obf
			$v_ifykr = _x( 'Videos', 'post format archive title' ); // obf
		} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) { // obf
			$v_ifykr = _x( 'Quotes', 'post format archive title' ); // obf
		} elseif ( is_tax( 'post_format', 'post-format-link' ) ) { // obf
			$v_ifykr = _x( 'Links', 'post format archive title' ); // obf
		} elseif ( is_tax( 'post_format', 'post-format-status' ) ) { // obf
			$v_ifykr = _x( 'Statuses', 'post format archive title' ); // obf
		} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) { // obf
			$v_ifykr = _x( 'Audio', 'post format archive title' ); // obf
		} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) { // obf
			$v_ifykr = _x( 'Chats', 'post format archive title' ); // obf
		} // obf
	} elseif ( is_post_type_archive() ) { // obf
		$v_ifykr  = post_type_archive_title( '', false ); // obf
		$v_alejl = _x( 'Archives:', 'post type archive title prefix' ); // obf
	} elseif ( is_tax() ) { // obf
		$v_znzbe = get_queried_object(); // obf
		if ( $v_znzbe ) { // obf
			$v_jplwb    = get_taxonomy( $v_znzbe->taxonomy ); // obf
			$v_ifykr  = single_term_title( '', false ); // obf
			$v_alejl = sprintf( // obf
				/* translators: %s: Taxonomy singular name. */ // obf
				_x( '%s:', 'taxonomy term archive title prefix' ), // obf
				$v_jplwb->labels->singular_name // obf
			); // obf
		} // obf
	} // obf

	$v_cxihq = $v_ifykr; // obf

	/** // obf
	 * Filters the archive title prefix. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_alejl Archive title prefix. // obf
	 */ // obf
	$v_alejl = apply_filters( 'get_the_archive_title_prefix', $v_alejl ); // obf
	if ( $v_alejl ) { // obf
		$v_ifykr = sprintf( // obf
			/* translators: 1: Title prefix. 2: Title. */ // obf
			_x( '%1$v_yaorh %2$v_yaorh', 'archive title' ), // obf
			$v_alejl, // obf
			'<span>' . $v_ifykr . '</span>' // obf
		); // obf
	} // obf

	/** // obf
	 * Filters the archive title. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @since 5.5.0 Added the `$v_alejl` and `$v_cxihq` parameters. // obf
	 * // obf
	 * @param string $v_ifykr          Archive title to be displayed. // obf
	 * @param string $v_cxihq Archive title without prefix. // obf
	 * @param string $v_alejl         Archive title prefix. // obf
	 */ // obf
	return apply_filters( 'get_the_archive_title', $v_ifykr, $v_cxihq, $v_alejl ); // obf
} // obf

/** // obf
 * Displays category, tag, term, or author description. // obf
 * // obf
 * @since 4.1.0 // obf
 * // obf
 * @see get_the_archive_description() // obf
 * // obf
 * @param string $v_gcdrs Optional. Content to prepend to the description. Default empty. // obf
 * @param string $v_eaffp  Optional. Content to append to the description. Default empty. // obf
 */ // obf
function the_archive_description( $v_gcdrs = '', $v_eaffp = '' ) { // obf
	$v_dvvqo = get_the_archive_description(); // obf
	if ( $v_dvvqo ) { // obf
		echo $v_gcdrs . $v_dvvqo . $v_eaffp; // obf
	} // obf
} // obf

/** // obf
 * Retrieves the description for an author, post type, or term archive. // obf
 * // obf
 * @since 4.1.0 // obf
 * @since 4.7.0 Added support for author archives. // obf
 * @since 4.9.0 Added support for post type archives. // obf
 * // obf
 * @see term_description() // obf
 * // obf
 * @return string Archive description. // obf
 */ // obf
function get_the_archive_description() { // obf
	if ( is_author() ) { // obf
		$v_dvvqo = get_the_author_meta( 'description' ); // obf
	} elseif ( is_post_type_archive() ) { // obf
		$v_dvvqo = get_the_post_type_description(); // obf
	} else { // obf
		$v_dvvqo = term_description(); // obf
	} // obf

	/** // obf
	 * Filters the archive description. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param string $v_dvvqo Archive description to be displayed. // obf
	 */ // obf
	return apply_filters( 'get_the_archive_description', $v_dvvqo ); // obf
} // obf

/** // obf
 * Retrieves the description for a post type archive. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @return string The post type description. // obf
 */ // obf
function get_the_post_type_description() { // obf
	$v_vjhpw = get_query_var( 'post_type' ); // obf

	if ( is_array( $v_vjhpw ) ) { // obf
		$v_vjhpw = reset( $v_vjhpw ); // obf
	} // obf

	$v_jrunq = get_post_type_object( $v_vjhpw ); // obf

	// Check if a description is set. // obf
	if ( isset( $v_jrunq->description ) ) { // obf
		$v_dvvqo = $v_jrunq->description; // obf
	} else { // obf
		$v_dvvqo = ''; // obf
	} // obf

	/** // obf
	 * Filters the description for a post type archive. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param string       $v_dvvqo   The post type description. // obf
	 * @param WP_Post_Type $v_jrunq The post type object. // obf
	 */ // obf
	return apply_filters( 'get_the_post_type_description', $v_dvvqo, $v_jrunq ); // obf
} // obf

/** // obf
 * Retrieves archive link content based on predefined or custom code. // obf
 * // obf
 * The format can be one of four styles. The 'link' for head element, 'option' // obf
 * for use in the select element, 'html' for use in list (either ol or ul HTML // obf
 * elements). Custom content is also supported using the before and after // obf
 * parameters. // obf
 * // obf
 * The 'link' format uses the `<link>` HTML element with the **archives** // obf
 * relationship. The before and after parameters are not used. The text // obf
 * parameter is used to describe the link. // obf
 * // obf
 * The 'option' format uses the option HTML element for use in select element. // obf
 * The value is the url parameter and the before and after parameters are used // obf
 * between the text description. // obf
 * // obf
 * The 'html' format, which is the default, uses the li HTML element for use in // obf
 * the list HTML elements. The before parameter is before the link and the after // obf
 * parameter is after the closing link. // obf
 * // obf
 * The custom format uses the before parameter before the link ('a' HTML // obf
 * element) and the after parameter after the closing link tag. If the above // obf
 * three values for the format are not used, then custom format is assumed. // obf
 * // obf
 * @since 1.0.0 // obf
 * @since 5.2.0 Added the `$v_jxxtg` parameter. // obf
 * // obf
 * @param string $v_tgxlv      URL to archive. // obf
 * @param string $v_jnqxz     Archive text description. // obf
 * @param string $v_khteh   Optional. Can be 'link', 'option', 'html', or custom. Default 'html'. // obf
 * @param string $v_gcdrs   Optional. Content to prepend to the description. Default empty. // obf
 * @param string $v_eaffp    Optional. Content to append to the description. Default empty. // obf
 * @param bool   $v_jxxtg Optional. Set to true if the current page is the selected archive page. Default false. // obf
 * @return string HTML link content for archive. // obf
 */ // obf
function get_archives_link( $v_tgxlv, $v_jnqxz, $v_khteh = 'html', $v_gcdrs = '', $v_eaffp = '', $v_jxxtg = false ) { // obf
	$v_jnqxz         = wptexturize( $v_jnqxz ); // obf
	$v_tgxlv          = esc_url( $v_tgxlv ); // obf
	$v_awgky = $v_jxxtg ? ' aria-current="page"' : ''; // obf

	if ( 'link' === $v_khteh ) { // obf
		$v_nuryn = "\t<link rel='archives' title='" . esc_attr( $v_jnqxz ) . "' href='$v_tgxlv' />\n"; // obf
	} elseif ( 'option' === $v_khteh ) { // obf
		$v_rlqfa = $v_jxxtg ? " selected='selected'" : ''; // obf
		$v_nuryn     = "\t<option value='$v_tgxlv'$v_rlqfa>$v_gcdrs $v_jnqxz $v_eaffp</option>\n"; // obf
	} elseif ( 'html' === $v_khteh ) { // obf
		$v_nuryn = "\t<li>$v_gcdrs<a href='$v_tgxlv'$v_awgky>$v_jnqxz</a>$v_eaffp</li>\n"; // obf
	} else { // Custom. // obf
		$v_nuryn = "\t$v_gcdrs<a href='$v_tgxlv'$v_awgky>$v_jnqxz</a>$v_eaffp\n"; // obf
	} // obf

	/** // obf
	 * Filters the archive link content. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @since 4.5.0 Added the `$v_tgxlv`, `$v_jnqxz`, `$v_khteh`, `$v_gcdrs`, and `$v_eaffp` parameters. // obf
	 * @since 5.2.0 Added the `$v_jxxtg` parameter. // obf
	 * // obf
	 * @param string $v_nuryn The archive HTML link content. // obf
	 * @param string $v_tgxlv       URL to archive. // obf
	 * @param string $v_jnqxz      Archive text description. // obf
	 * @param string $v_khteh    Link format. Can be 'link', 'option', 'html', or custom. // obf
	 * @param string $v_gcdrs    Content to prepend to the description. // obf
	 * @param string $v_eaffp     Content to append to the description. // obf
	 * @param bool   $v_jxxtg  True if the current page is the selected archive. // obf
	 */ // obf
	return apply_filters( 'get_archives_link', $v_nuryn, $v_tgxlv, $v_jnqxz, $v_khteh, $v_gcdrs, $v_eaffp, $v_jxxtg ); // obf
} // obf

/** // obf
 * Displays archive links based on type and format. // obf
 * // obf
 * @since 1.2.0 // obf
 * @since 4.4.0 The `$v_vjhpw` argument was added. // obf
 * @since 5.2.0 The `$v_jkwcx`, `$v_hjndz`, `$v_yljvj`, and `$v_uqzne` arguments were added. // obf
 * // obf
 * @see get_archives_link() // obf
 * // obf
 * @global wpdb      $v_tufly      WordPress database abstraction object. // obf
 * @global WP_Locale $v_bbqyi WordPress date and time locale object. // obf
 * // obf
 * @param string|array $v_kysor { // obf
 *     Default archive links arguments. Optional. // obf
 * // obf
 *     @type string     $v_mnugp            Type of archive to retrieve. Accepts 'daily', 'weekly', 'monthly', // obf
 *                                       'yearly', 'postbypost', or 'alpha'. Both 'postbypost' and 'alpha' // obf
 *                                       display the same archive link list as well as post titles instead // obf
 *                                       of displaying dates. The difference between the two is that 'alpha' // obf
 *                                       will order by post title and 'postbypost' will order by post date. // obf
 *                                       Default 'monthly'. // obf
 *     @type string|int $v_fnvmi           Number of links to limit the query to. Default empty (no limit). // obf
 *     @type string     $v_khteh          Format each link should take using the $v_gcdrs and $v_eaffp args. // obf
 *                                       Accepts 'link' (`<link>` tag), 'option' (`<option>` tag), 'html' // obf
 *                                       (`<li>` tag), or a custom format, which generates a link anchor // obf
 *                                       with $v_gcdrs preceding and $v_eaffp succeeding. Default 'html'. // obf
 *     @type string     $v_gcdrs          Markup to prepend to the beginning of each link. Default empty. // obf
 *     @type string     $v_eaffp           Markup to append to the end of each link. Default empty. // obf
 *     @type bool       $v_rvjbi Whether to display the post count alongside the link. Default false. // obf
 *     @type bool|int   $v_wpyhh            Whether to echo or return the links list. Default 1|true to echo. // obf
 *     @type string     $v_pgxyz           Whether to use ascending or descending order. Accepts 'ASC', or 'DESC'. // obf
 *                                       Default 'DESC'. // obf
 *     @type string     $v_vjhpw       Post type. Default 'post'. // obf
 *     @type string     $v_jkwcx            Year. Default current year. // obf
 *     @type string     $v_hjndz        Month number. Default current month number. // obf
 *     @type string     $v_yljvj             Day. Default current day. // obf
 *     @type string     $v_uqzne               Week. Default current week. // obf
 * } // obf
 * @return void|string Void if 'echo' argument is true, archive links if 'echo' is false. // obf
 */ // obf
function wp_get_archives( $v_kysor = '' ) { // obf
	global $v_tufly, $v_bbqyi; // obf

	$v_mhkxo = array( // obf
		'type'            => 'monthly', // obf
		'limit'           => '', // obf
		'format'          => 'html', // obf
		'before'          => '', // obf
		'after'           => '', // obf
		'show_post_count' => false, // obf
		'echo'            => 1, // obf
		'order'           => 'DESC', // obf
		'post_type'       => 'post', // obf
		'year'            => get_query_var( 'year' ), // obf
		'monthnum'        => get_query_var( 'monthnum' ), // obf
		'day'             => get_query_var( 'day' ), // obf
		'w'               => get_query_var( 'w' ), // obf
	); // obf

	$v_boweh = wp_parse_args( $v_kysor, $v_mhkxo ); // obf

	$v_lynub = get_post_type_object( $v_boweh['post_type'] ); // obf
	if ( ! is_post_type_viewable( $v_lynub ) ) { // obf
		return; // obf
	} // obf

	$v_boweh['post_type'] = $v_lynub->name; // obf

	if ( '' === $v_boweh['type'] ) { // obf
		$v_boweh['type'] = 'monthly'; // obf
	} // obf

	if ( ! empty( $v_boweh['limit'] ) ) { // obf
		$v_boweh['limit'] = absint( $v_boweh['limit'] ); // obf
		$v_boweh['limit'] = ' LIMIT ' . $v_boweh['limit']; // obf
	} // obf

	$v_pgxyz = strtoupper( $v_boweh['order'] ); // obf
	if ( 'ASC' !== $v_pgxyz ) { // obf
		$v_pgxyz = 'DESC'; // obf
	} // obf

	// This is what will separate dates on weekly archive links. // obf
	$v_qoqen = '&#8211;'; // obf

	$v_xuumi = $v_tufly->prepare( "WHERE post_type = %s AND post_status = 'publish'", $v_boweh['post_type'] ); // obf

	/** // obf
	 * Filters the SQL WHERE clause for retrieving archives. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @param string $v_xuumi   Portion of SQL query containing the WHERE clause. // obf
	 * @param array  $v_boweh An array of default arguments. // obf
	 */ // obf
	$v_femxr = apply_filters( 'getarchives_where', $v_xuumi, $v_boweh ); // obf

	/** // obf
	 * Filters the SQL JOIN clause for retrieving archives. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @param string $v_kygfh    Portion of SQL query containing JOIN clause. // obf
	 * @param array  $v_boweh An array of default arguments. // obf
	 */ // obf
	$v_mkjpf = apply_filters( 'getarchives_join', '', $v_boweh ); // obf

	$v_elkuu = ''; // obf

	$v_hquso = wp_cache_get_last_changed( 'posts' ); // obf

	$v_fnvmi = $v_boweh['limit']; // obf

	if ( 'monthly' === $v_boweh['type'] ) { // obf
		$v_tfpmt   = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts FROM $v_tufly->posts $v_mkjpf $v_femxr GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date $v_pgxyz $v_fnvmi"; // obf
		$v_wbntt     = md5( $v_tfpmt ); // obf
		$v_wbntt     = "wp_get_archives:$v_wbntt:$v_hquso"; // obf
		$v_tlqet = wp_cache_get( $v_wbntt, 'post-queries' ); // obf
		if ( ! $v_tlqet ) { // obf
			$v_tlqet = $v_tufly->get_results( $v_tfpmt ); // obf
			wp_cache_set( $v_wbntt, $v_tlqet, 'post-queries' ); // obf
		} // obf
		if ( $v_tlqet ) { // obf
			$v_eaffp = $v_boweh['after']; // obf
			foreach ( (array) $v_tlqet as $v_hgvaa ) { // obf
				$v_tgxlv = get_month_link( $v_hgvaa->year, $v_hgvaa->month ); // obf
				if ( 'post' !== $v_boweh['post_type'] ) { // obf
					$v_tgxlv = add_query_arg( 'post_type', $v_boweh['post_type'], $v_tgxlv ); // obf
				} // obf
				/* translators: 1: Month name, 2: 4-digit year. */ // obf
				$v_jnqxz = sprintf( __( '%1$v_yaorh %2$v_kullf' ), $v_bbqyi->get_month( $v_hgvaa->month ), $v_hgvaa->year ); // obf
				if ( $v_boweh['show_post_count'] ) { // obf
					$v_boweh['after'] = '&nbsp;(' . $v_hgvaa->posts . ')' . $v_eaffp; // obf
				} // obf
				$v_jxxtg = is_archive() && (string) $v_boweh['year'] === $v_hgvaa->year && (string) $v_boweh['monthnum'] === $v_hgvaa->month; // obf
				$v_elkuu  .= get_archives_link( $v_tgxlv, $v_jnqxz, $v_boweh['format'], $v_boweh['before'], $v_boweh['after'], $v_jxxtg ); // obf
			} // obf
		} // obf
	} elseif ( 'yearly' === $v_boweh['type'] ) { // obf
		$v_tfpmt   = "SELECT YEAR(post_date) AS `year`, count(ID) as posts FROM $v_tufly->posts $v_mkjpf $v_femxr GROUP BY YEAR(post_date) ORDER BY post_date $v_pgxyz $v_fnvmi"; // obf
		$v_wbntt     = md5( $v_tfpmt ); // obf
		$v_wbntt     = "wp_get_archives:$v_wbntt:$v_hquso"; // obf
		$v_tlqet = wp_cache_get( $v_wbntt, 'post-queries' ); // obf
		if ( ! $v_tlqet ) { // obf
			$v_tlqet = $v_tufly->get_results( $v_tfpmt ); // obf
			wp_cache_set( $v_wbntt, $v_tlqet, 'post-queries' ); // obf
		} // obf
		if ( $v_tlqet ) { // obf
			$v_eaffp = $v_boweh['after']; // obf
			foreach ( (array) $v_tlqet as $v_hgvaa ) { // obf
				$v_tgxlv = get_year_link( $v_hgvaa->year ); // obf
				if ( 'post' !== $v_boweh['post_type'] ) { // obf
					$v_tgxlv = add_query_arg( 'post_type', $v_boweh['post_type'], $v_tgxlv ); // obf
				} // obf
				$v_jnqxz = sprintf( '%d', $v_hgvaa->year ); // obf
				if ( $v_boweh['show_post_count'] ) { // obf
					$v_boweh['after'] = '&nbsp;(' . $v_hgvaa->posts . ')' . $v_eaffp; // obf
				} // obf
				$v_jxxtg = is_archive() && (string) $v_boweh['year'] === $v_hgvaa->year; // obf
				$v_elkuu  .= get_archives_link( $v_tgxlv, $v_jnqxz, $v_boweh['format'], $v_boweh['before'], $v_boweh['after'], $v_jxxtg ); // obf
			} // obf
		} // obf
	} elseif ( 'daily' === $v_boweh['type'] ) { // obf
		$v_tfpmt   = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, DAYOFMONTH(post_date) AS `dayofmonth`, count(ID) as posts FROM $v_tufly->posts $v_mkjpf $v_femxr GROUP BY YEAR(post_date), MONTH(post_date), DAYOFMONTH(post_date) ORDER BY post_date $v_pgxyz $v_fnvmi"; // obf
		$v_wbntt     = md5( $v_tfpmt ); // obf
		$v_wbntt     = "wp_get_archives:$v_wbntt:$v_hquso"; // obf
		$v_tlqet = wp_cache_get( $v_wbntt, 'post-queries' ); // obf
		if ( ! $v_tlqet ) { // obf
			$v_tlqet = $v_tufly->get_results( $v_tfpmt ); // obf
			wp_cache_set( $v_wbntt, $v_tlqet, 'post-queries' ); // obf
		} // obf
		if ( $v_tlqet ) { // obf
			$v_eaffp = $v_boweh['after']; // obf
			foreach ( (array) $v_tlqet as $v_hgvaa ) { // obf
				$v_tgxlv = get_day_link( $v_hgvaa->year, $v_hgvaa->month, $v_hgvaa->dayofmonth ); // obf
				if ( 'post' !== $v_boweh['post_type'] ) { // obf
					$v_tgxlv = add_query_arg( 'post_type', $v_boweh['post_type'], $v_tgxlv ); // obf
				} // obf
				$v_vtgcq = sprintf( '%1$v_kullf-%2$02d-%3$02d 00:00:00', $v_hgvaa->year, $v_hgvaa->month, $v_hgvaa->dayofmonth ); // obf
				$v_jnqxz = mysql2date( get_option( 'date_format' ), $v_vtgcq ); // obf
				if ( $v_boweh['show_post_count'] ) { // obf
					$v_boweh['after'] = '&nbsp;(' . $v_hgvaa->posts . ')' . $v_eaffp; // obf
				} // obf
				$v_jxxtg = is_archive() && (string) $v_boweh['year'] === $v_hgvaa->year && (string) $v_boweh['monthnum'] === $v_hgvaa->month && (string) $v_boweh['day'] === $v_hgvaa->dayofmonth; // obf
				$v_elkuu  .= get_archives_link( $v_tgxlv, $v_jnqxz, $v_boweh['format'], $v_boweh['before'], $v_boweh['after'], $v_jxxtg ); // obf
			} // obf
		} // obf
	} elseif ( 'weekly' === $v_boweh['type'] ) { // obf
		$v_caidj    = _wp_mysql_week( '`post_date`' ); // obf
		$v_tfpmt   = "SELECT DISTINCT $v_caidj AS `week`, YEAR( `post_date` ) AS `yr`, DATE_FORMAT( `post_date`, '%Y-%m-%d' ) AS `yyyymmdd`, count( `ID` ) AS `posts` FROM `$v_tufly->posts` $v_mkjpf $v_femxr GROUP BY $v_caidj, YEAR( `post_date` ) ORDER BY `post_date` $v_pgxyz $v_fnvmi"; // obf
		$v_wbntt     = md5( $v_tfpmt ); // obf
		$v_wbntt     = "wp_get_archives:$v_wbntt:$v_hquso"; // obf
		$v_tlqet = wp_cache_get( $v_wbntt, 'post-queries' ); // obf
		if ( ! $v_tlqet ) { // obf
			$v_tlqet = $v_tufly->get_results( $v_tfpmt ); // obf
			wp_cache_set( $v_wbntt, $v_tlqet, 'post-queries' ); // obf
		} // obf
		$v_twtbq = ''; // obf
		if ( $v_tlqet ) { // obf
			$v_eaffp = $v_boweh['after']; // obf
			foreach ( (array) $v_tlqet as $v_hgvaa ) { // obf
				if ( $v_hgvaa->week !== $v_twtbq ) { // obf
					$v_csogz       = $v_hgvaa->yr; // obf
					$v_twtbq     = $v_hgvaa->week; // obf
					$v_bezyw       = get_weekstartend( $v_hgvaa->yyyymmdd, get_option( 'start_of_week' ) ); // obf
					$v_shtwx = date_i18n( get_option( 'date_format' ), $v_bezyw['start'] ); // obf
					$v_bgxya   = date_i18n( get_option( 'date_format' ), $v_bezyw['end'] ); // obf
					$v_tgxlv            = add_query_arg( // obf
						array( // obf
							'm' => $v_csogz, // obf
							'w' => $v_hgvaa->week, // obf
						), // obf
						home_url( '/' ) // obf
					); // obf
					if ( 'post' !== $v_boweh['post_type'] ) { // obf
						$v_tgxlv = add_query_arg( 'post_type', $v_boweh['post_type'], $v_tgxlv ); // obf
					} // obf
					$v_jnqxz = $v_shtwx . $v_qoqen . $v_bgxya; // obf
					if ( $v_boweh['show_post_count'] ) { // obf
						$v_boweh['after'] = '&nbsp;(' . $v_hgvaa->posts . ')' . $v_eaffp; // obf
					} // obf
					$v_jxxtg = is_archive() && (string) $v_boweh['year'] === $v_hgvaa->yr && (string) $v_boweh['w'] === $v_hgvaa->week; // obf
					$v_elkuu  .= get_archives_link( $v_tgxlv, $v_jnqxz, $v_boweh['format'], $v_boweh['before'], $v_boweh['after'], $v_jxxtg ); // obf
				} // obf
			} // obf
		} // obf
	} elseif ( ( 'postbypost' === $v_boweh['type'] ) || ( 'alpha' === $v_boweh['type'] ) ) { // obf
		$v_czqwi = ( 'alpha' === $v_boweh['type'] ) ? 'post_title ASC ' : 'post_date DESC, ID DESC '; // obf
		$v_tfpmt   = "SELECT * FROM $v_tufly->posts $v_mkjpf $v_femxr ORDER BY $v_czqwi $v_fnvmi"; // obf
		$v_wbntt     = md5( $v_tfpmt ); // obf
		$v_wbntt     = "wp_get_archives:$v_wbntt:$v_hquso"; // obf
		$v_tlqet = wp_cache_get( $v_wbntt, 'post-queries' ); // obf
		if ( ! $v_tlqet ) { // obf
			$v_tlqet = $v_tufly->get_results( $v_tfpmt ); // obf
			wp_cache_set( $v_wbntt, $v_tlqet, 'post-queries' ); // obf
		} // obf
		if ( $v_tlqet ) { // obf
			foreach ( (array) $v_tlqet as $v_hgvaa ) { // obf
				if ( '0000-00-00 00:00:00' !== $v_hgvaa->post_date ) { // obf
					$v_tgxlv = get_permalink( $v_hgvaa ); // obf
					if ( $v_hgvaa->post_title ) { // obf
						/** This filter is documented in wp-includes/post-template.php */ // obf
						$v_jnqxz = strip_tags( apply_filters( 'the_title', $v_hgvaa->post_title, $v_hgvaa->ID ) ); // obf
					} else { // obf
						$v_jnqxz = $v_hgvaa->ID; // obf
					} // obf
					$v_jxxtg = get_the_ID() === $v_hgvaa->ID; // obf
					$v_elkuu  .= get_archives_link( $v_tgxlv, $v_jnqxz, $v_boweh['format'], $v_boweh['before'], $v_boweh['after'], $v_jxxtg ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	if ( $v_boweh['echo'] ) { // obf
		echo $v_elkuu; // obf
	} else { // obf
		return $v_elkuu; // obf
	} // obf
} // obf

/** // obf
 * Gets number of days since the start of the week. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param int $v_vzquh Number of day. // obf
 * @return float Days since the start of the week. // obf
 */ // obf
function calendar_week_mod( $v_vzquh ) { // obf
	$v_asyai = 7; // obf
	return ( $v_vzquh - $v_asyai * floor( $v_vzquh / $v_asyai ) ); // obf
} // obf

/** // obf
 * Displays calendar with days that have posts as links. // obf
 * // obf
 * The calendar is cached, which will be retrieved, if it exists. If there are // obf
 * no posts for the month, then it will not be displayed. // obf
 * // obf
 * @since 1.0.0 // obf
 * @since 6.8.0 Added the `$v_kysor` parameter, with backward compatibility // obf
 *              for the replaced `$v_qfswy` and `$v_mbqxi` parameters. // obf
 * // obf
 * @global wpdb      $v_tufly      WordPress database abstraction object. // obf
 * @global int       $v_ymlcb // obf
 * @global int       $v_hjndz // obf
 * @global int       $v_jkwcx // obf
 * @global WP_Locale $v_bbqyi WordPress date and time locale object. // obf
 * @global array     $v_xlakx // obf
 * // obf
 * @param array $v_kysor { // obf
 *     Optional. Arguments for the `get_calendar` function. // obf
 * // obf
 *     @type bool   $v_qfswy   Whether to use initial calendar names. Default true. // obf
 *     @type bool   $v_mbqxi   Whether to display the calendar output. Default true. // obf
 *     @type string $v_vjhpw Optional. Post type. Default 'post'. // obf
 * } // obf
 * @return void|string Void if `$v_mbqxi` argument is true, calendar HTML if `$v_mbqxi` is false. // obf
 */ // obf
function get_calendar( $v_kysor = array() ) { // obf
	global $v_tufly, $v_ymlcb, $v_hjndz, $v_jkwcx, $v_bbqyi, $v_xlakx; // obf

	$v_mhkxo = array( // obf
		'initial'   => true, // obf
		'display'   => true, // obf
		'post_type' => 'post', // obf
	); // obf

	$v_lpioh = func_get_args(); // obf
	$v_kysor          = array(); // obf

	if ( ! empty( $v_lpioh ) ) { // obf
		if ( ! is_array( $v_lpioh[0] ) ) { // obf
			if ( isset( $v_lpioh[0] ) && is_bool( $v_lpioh[0] ) ) { // obf
				$v_mhkxo['initial'] = $v_lpioh[0]; // obf
			} // obf
			if ( isset( $v_lpioh[1] ) && is_bool( $v_lpioh[1] ) ) { // obf
				$v_mhkxo['display'] = $v_lpioh[1]; // obf
			} // obf
		} else { // obf
			$v_kysor = $v_lpioh[0]; // obf
		} // obf
	} // obf

	/** // obf
	 * Filter the `get_calendar` function arguments before they are used. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param array $v_kysor { // obf
	 *     Optional. Arguments for the `get_calendar` function. // obf
	 * // obf
	 *     @type bool   $v_qfswy   Whether to use initial calendar names. Default true. // obf
	 *     @type bool   $v_mbqxi   Whether to display the calendar output. Default true. // obf
	 *     @type string $v_vjhpw Optional. Post type. Default 'post'. // obf
	 * } // obf
	 */ // obf
	$v_kysor = apply_filters( 'get_calendar_args', wp_parse_args( $v_kysor, $v_mhkxo ) ); // obf

	if ( ! post_type_exists( $v_kysor['post_type'] ) ) { // obf
		$v_kysor['post_type'] = 'post'; // obf
	} // obf

	$v_uqzne = 0; // obf
	if ( isset( $v_bnbbw['w'] ) ) { // obf
		$v_uqzne = (int) $v_bnbbw['w']; // obf
	} // obf

	/* // obf
	 * Normalize the cache key. // obf
	 * // obf
	 * The following ensures the same cache key is used for the same parameter // obf
	 * and parameter equivalents. This prevents `post_type > post, initial > true` // obf
	 * from generating a different key from the same values in the reverse order. // obf
	 * // obf
	 * `display` is excluded from the cache key as the cache contains the same // obf
	 * HTML regardless of this function's need to echo or return the output. // obf
	 * // obf
	 * The global values contain data generated by the URL query string variables. // obf
	 */ // obf
	$v_ynjoo = $v_kysor; // obf
	unset( $v_ynjoo['display'] ); // obf

	$v_ynjoo['globals'] = array( // obf
		'm'        => $v_ymlcb, // obf
		'monthnum' => $v_hjndz, // obf
		'year'     => $v_jkwcx, // obf
		'week'     => $v_uqzne, // obf
	); // obf

	wp_recursive_ksort( $v_ynjoo ); // obf
	$v_wbntt   = md5( serialize( $v_ynjoo ) ); // obf
	$v_gdyoj = wp_cache_get( 'get_calendar', 'calendar' ); // obf

	if ( $v_gdyoj && is_array( $v_gdyoj ) && isset( $v_gdyoj[ $v_wbntt ] ) ) { // obf
		/** This filter is documented in wp-includes/general-template.php */ // obf
		$v_elkuu = apply_filters( 'get_calendar', $v_gdyoj[ $v_wbntt ], $v_kysor ); // obf

		if ( $v_kysor['display'] ) { // obf
			echo $v_elkuu; // obf
			return; // obf
		} // obf

		return $v_elkuu; // obf
	} // obf

	if ( ! is_array( $v_gdyoj ) ) { // obf
		$v_gdyoj = array(); // obf
	} // obf

	$v_vjhpw = $v_kysor['post_type']; // obf

	// Quick check. If we have no posts at all, abort! // obf
	if ( ! $v_xlakx ) { // obf
		$v_mxfbr = $v_tufly->get_var( // obf
			$v_tufly->prepare( // obf
				"SELECT 1 as test // obf
				FROM $v_tufly->posts // obf
				WHERE post_type = %s // obf
				AND post_status = 'publish' // obf
				LIMIT 1", // obf
				$v_vjhpw // obf
			) // obf
		); // obf

		if ( ! $v_mxfbr ) { // obf
			$v_gdyoj[ $v_wbntt ] = ''; // obf
			wp_cache_set( 'get_calendar', $v_gdyoj, 'calendar' ); // obf
			return; // obf
		} // obf
	} // obf

	// week_begins = 0 stands for Sunday. // obf
	$v_ymwoj = (int) get_option( 'start_of_week' ); // obf

	// Let's figure out when we are. // obf
	if ( ! empty( $v_hjndz ) && ! empty( $v_jkwcx ) ) { // obf
		$v_ahtzp = (int) $v_hjndz; // obf
		$v_ngiql  = (int) $v_jkwcx; // obf
	} elseif ( ! empty( $v_uqzne ) ) { // obf
		// We need to get the month from MySQL. // obf
		$v_ngiql = (int) substr( $v_ymlcb, 0, 4 ); // obf
		// It seems MySQL's weeks disagree with PHP's. // obf
		$v_kullf         = ( ( $v_uqzne - 1 ) * 7 ) + 6; // obf
		$v_ahtzp = (int) $v_tufly->get_var( // obf
			$v_tufly->prepare( // obf
				"SELECT DATE_FORMAT((DATE_ADD('%d0101', INTERVAL %d DAY) ), '%%m')", // obf
				$v_ngiql, // obf
				$v_kullf // obf
			) // obf
		); // obf
	} elseif ( ! empty( $v_ymlcb ) ) { // obf
		$v_ngiql = (int) substr( $v_ymlcb, 0, 4 ); // obf
		if ( strlen( $v_ymlcb ) < 6 ) { // obf
			$v_ahtzp = 1; // obf
		} else { // obf
			$v_ahtzp = (int) substr( $v_ymlcb, 4, 2 ); // obf
		} // obf
	} else { // obf
		$v_ngiql  = (int) current_time( 'Y' ); // obf
		$v_ahtzp = (int) current_time( 'm' ); // obf
	} // obf

	$v_ogegd = mktime( 0, 0, 0, $v_ahtzp, 1, $v_ngiql ); // obf
	$v_rfycd  = gmdate( 't', $v_ogegd ); // obf

	// Get the next and previous month and year with at least one post. // obf
	$v_fkrux = $v_tufly->get_row( // obf
		$v_tufly->prepare( // obf
			"SELECT MONTH(post_date) AS month, YEAR(post_date) AS year // obf
			FROM $v_tufly->posts // obf
			WHERE post_date < '%d-%d-01' // obf
			AND post_type = %s AND post_status = 'publish' // obf
			ORDER BY post_date DESC // obf
			LIMIT 1", // obf
			$v_ngiql, // obf
			zeroise( $v_ahtzp, 2 ), // obf
			$v_vjhpw // obf
		) // obf
	); // obf

	$v_ancme = $v_tufly->get_row( // obf
		$v_tufly->prepare( // obf
			"SELECT MONTH(post_date) AS month, YEAR(post_date) AS year // obf
			FROM $v_tufly->posts // obf
			WHERE post_date > '%d-%d-%d 23:59:59' // obf
			AND post_type = %s AND post_status = 'publish' // obf
			ORDER BY post_date ASC // obf
			LIMIT 1", // obf
			$v_ngiql, // obf
			zeroise( $v_ahtzp, 2 ), // obf
			$v_rfycd, // obf
			$v_vjhpw // obf
		) // obf
	); // obf

	/* translators: Calendar caption: 1: Month name, 2: 4-digit year. */ // obf
	$v_ovout = _x( '%1$v_yaorh %2$v_yaorh', 'calendar caption' ); // obf
	$v_savxm  = '<table id="wp-calendar" class="wp-calendar-table"> // obf
	<caption>' . sprintf( // obf
		$v_ovout, // obf
		$v_bbqyi->get_month( $v_ahtzp ), // obf
		gmdate( 'Y', $v_ogegd ) // obf
	) . '</caption> // obf
	<thead> // obf
	<tr>'; // obf

	$v_qcygb = array(); // obf

	for ( $v_urjki = 0; $v_urjki <= 6; $v_urjki++ ) { // obf
		$v_qcygb[] = $v_bbqyi->get_weekday( ( $v_urjki + $v_ymwoj ) % 7 ); // obf
	} // obf

	foreach ( $v_qcygb as $v_zjzjn ) { // obf
		$v_kmnun         = $v_kysor['initial'] ? $v_bbqyi->get_weekday_initial( $v_zjzjn ) : $v_bbqyi->get_weekday_abbrev( $v_zjzjn ); // obf
		$v_zjzjn               = esc_attr( $v_zjzjn ); // obf
		$v_savxm .= "\n\t\t<th scope=\"col\" aria-label=\"$v_zjzjn\">$v_kmnun</th>"; // obf
	} // obf

	$v_savxm .= ' // obf
	</tr> // obf
	</thead> // obf
	<tbody> // obf
	<tr>'; // obf

	$v_rtesa = array(); // obf

	// Get days with posts. // obf
	$v_fucwm = $v_tufly->get_results( // obf
		$v_tufly->prepare( // obf
			"SELECT DISTINCT DAYOFMONTH(post_date) // obf
			FROM $v_tufly->posts WHERE post_date >= '%d-%d-01 00:00:00' // obf
			AND post_type = %s AND post_status = 'publish' // obf
			AND post_date <= '%d-%d-%d 23:59:59'", // obf
			$v_ngiql, // obf
			zeroise( $v_ahtzp, 2 ), // obf
			$v_vjhpw, // obf
			$v_ngiql, // obf
			zeroise( $v_ahtzp, 2 ), // obf
			$v_rfycd // obf
		), // obf
		ARRAY_N // obf
	); // obf

	if ( $v_fucwm ) { // obf
		foreach ( (array) $v_fucwm as $v_qiyoc ) { // obf
			$v_rtesa[] = (int) $v_qiyoc[0]; // obf
		} // obf
	} // obf

	// See how much we should pad in the beginning. // obf
	$v_nhqwz = calendar_week_mod( (int) gmdate( 'w', $v_ogegd ) - $v_ymwoj ); // obf
	if ( $v_nhqwz > 0 ) { // obf
		$v_savxm .= "\n\t\t" . '<td colspan="' . esc_attr( $v_nhqwz ) . '" class="pad">&nbsp;</td>'; // obf
	} // obf

	$v_cplic      = false; // obf
	$v_howpy = (int) gmdate( 't', $v_ogegd ); // obf

	for ( $v_yljvj = 1; $v_yljvj <= $v_howpy; ++$v_yljvj ) { // obf
		if ( isset( $v_cplic ) && $v_cplic ) { // obf
			$v_savxm .= "\n\t</tr>\n\t<tr>\n\t\t"; // obf
		} // obf

		$v_cplic = false; // obf

		if ( (int) current_time( 'j' ) === $v_yljvj // obf
			&& (int) current_time( 'm' ) === $v_ahtzp // obf
			&& (int) current_time( 'Y' ) === $v_ngiql // obf
		) { // obf
			$v_savxm .= '<td id="today">'; // obf
		} else { // obf
			$v_savxm .= '<td>'; // obf
		} // obf

		if ( in_array( $v_yljvj, $v_rtesa, true ) ) { // obf
			// Any posts today? // obf
			$v_lsrog = gmdate( _x( 'F j, Y', 'daily archives date format' ), strtotime( "{$v_ngiql}-{$v_ahtzp}-{$v_yljvj}" ) ); // obf
			/* translators: Post calendar label. %s: Date. */ // obf
			$v_pyekb            = sprintf( __( 'Posts published on %s' ), $v_lsrog ); // obf
			$v_savxm .= sprintf( // obf
				'<a href="%s" aria-label="%s">%s</a>', // obf
				get_day_link( $v_ngiql, $v_ahtzp, $v_yljvj ), // obf
				esc_attr( $v_pyekb ), // obf
				$v_yljvj // obf
			); // obf
		} else { // obf
			$v_savxm .= $v_yljvj; // obf
		} // obf

		$v_savxm .= '</td>'; // obf

		if ( 6 === (int) calendar_week_mod( (int) gmdate( 'w', mktime( 0, 0, 0, $v_ahtzp, $v_yljvj, $v_ngiql ) ) - $v_ymwoj ) ) { // obf
			$v_cplic = true; // obf
		} // obf
	} // obf

	$v_nhqwz = 7 - calendar_week_mod( (int) gmdate( 'w', mktime( 0, 0, 0, $v_ahtzp, $v_yljvj, $v_ngiql ) ) - $v_ymwoj ); // obf
	if ( 0 < $v_nhqwz && $v_nhqwz < 7 ) { // obf
		$v_savxm .= "\n\t\t" . '<td class="pad" colspan="' . esc_attr( $v_nhqwz ) . '">&nbsp;</td>'; // obf
	} // obf

	$v_savxm .= "\n\t</tr>\n\t</tbody>"; // obf

	$v_savxm .= "\n\t</table>"; // obf

	$v_savxm .= '<nav aria-label="' . __( 'Previous and next months' ) . '" class="wp-calendar-nav">'; // obf

	if ( $v_fkrux ) { // obf
		$v_savxm .= "\n\t\t" . sprintf( // obf
			'<span class="wp-calendar-nav-prev"><a href="%1$v_yaorh">&laquo; %2$v_yaorh</a></span>', // obf
			get_month_link( $v_fkrux->year, $v_fkrux->month ), // obf
			$v_bbqyi->get_month_abbrev( $v_bbqyi->get_month( $v_fkrux->month ) ) // obf
		); // obf
	} else { // obf
		$v_savxm .= "\n\t\t" . '<span class="wp-calendar-nav-prev">&nbsp;</span>'; // obf
	} // obf

	$v_savxm .= "\n\t\t" . '<span class="pad">&nbsp;</span>'; // obf

	if ( $v_ancme ) { // obf
		$v_savxm .= "\n\t\t" . sprintf( // obf
			'<span class="wp-calendar-nav-next"><a href="%1$v_yaorh">%2$v_yaorh &raquo;</a></span>', // obf
			get_month_link( $v_ancme->year, $v_ancme->month ), // obf
			$v_bbqyi->get_month_abbrev( $v_bbqyi->get_month( $v_ancme->month ) ) // obf
		); // obf
	} else { // obf
		$v_savxm .= "\n\t\t" . '<span class="wp-calendar-nav-next">&nbsp;</span>'; // obf
	} // obf

	$v_savxm .= ' // obf
	</nav>'; // obf

	$v_gdyoj[ $v_wbntt ] = $v_savxm; // obf
	wp_cache_set( 'get_calendar', $v_gdyoj, 'calendar' ); // obf

	/** // obf
	 * Filters the HTML calendar output. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @since 6.8.0 Added the `$v_kysor` parameter. // obf
	 * // obf
	 * @param string $v_savxm HTML output of the calendar. // obf
	 * @param array  $v_kysor { // obf
	 *     Optional. Array of display arguments. // obf
	 * // obf
	 *     @type bool   $v_qfswy   Whether to use initial calendar names. Default true. // obf
	 *     @type bool   $v_mbqxi   Whether to display the calendar output. Default true. // obf
	 *     @type string $v_vjhpw Optional. Post type. Default 'post'. // obf
	 * } // obf
	 */ // obf
	$v_savxm = apply_filters( 'get_calendar', $v_savxm, $v_kysor ); // obf

	if ( $v_kysor['display'] ) { // obf
		echo $v_savxm; // obf
		return; // obf
	} // obf

	return $v_savxm; // obf
} // obf

/** // obf
 * Purges the cached results of get_calendar. // obf
 * // obf
 * @see get_calendar() // obf
 * @since 2.1.0 // obf
 */ // obf
function delete_get_calendar_cache() { // obf
	wp_cache_delete( 'get_calendar', 'calendar' ); // obf
} // obf

/** // obf
 * Displays all of the allowed tags in HTML format with attributes. // obf
 * // obf
 * This is useful for displaying in the comment area, which elements and // obf
 * attributes are supported. As well as any plugins which want to display it. // obf
 * // obf
 * @since 1.0.1 // obf
 * @since 4.4.0 No longer used in core. // obf
 * // obf
 * @global array $v_rdshz // obf
 * // obf
 * @return string HTML allowed tags entity encoded. // obf
 */ // obf
function allowed_tags() { // obf
	global $v_rdshz; // obf
	$v_pkwnh = ''; // obf
	foreach ( (array) $v_rdshz as $v_nnlvh => $v_jijcn ) { // obf
		$v_pkwnh .= '<' . $v_nnlvh; // obf
		if ( 0 < count( $v_jijcn ) ) { // obf
			foreach ( $v_jijcn as $v_uusao => $v_fzltd ) { // obf
				$v_pkwnh .= ' ' . $v_uusao . '=""'; // obf
			} // obf
		} // obf
		$v_pkwnh .= '> '; // obf
	} // obf
	return htmlentities( $v_pkwnh ); // obf
} // obf

/***** Date/Time tags */ // obf

/** // obf
 * Outputs the date in iso8601 format for xml files. // obf
 * // obf
 * @since 1.0.0 // obf
 */ // obf
function the_date_xml() { // obf
	echo mysql2date( 'Y-m-d', get_post()->post_date, false ); // obf
} // obf

/** // obf
 * Displays or retrieves the date of the post (once per date). // obf
 * // obf
 * Will only output the date if the current post's date is different from the // obf
 * previous one output. // obf
 * // obf
 * i.e. Only one date listing will show per day worth of posts shown in the loop, even if the // obf
 * function is called several times for each post. // obf
 * // obf
 * HTML output can be filtered with {@see 'the_date'}. // obf
 * Date string output can be filtered with {@see 'get_the_date'}. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @global string $v_bfthl  The day of the current post in the loop. // obf
 * @global string $v_tamdd The day of the previous post in the loop. // obf
 * // obf
 * @param string $v_khteh  Optional. PHP date format. Defaults to the 'date_format' option. // obf
 * @param string $v_gcdrs  Optional. Output before the date. Default empty. // obf
 * @param string $v_eaffp   Optional. Output after the date. Default empty. // obf
 * @param bool   $v_mbqxi Optional. Whether to echo the date or return it. Default true. // obf
 * @return string|void String if retrieving. // obf
 */ // obf
function the_date( $v_khteh = '', $v_gcdrs = '', $v_eaffp = '', $v_mbqxi = true ) { // obf
	global $v_bfthl, $v_tamdd; // obf

	$v_fivuc = ''; // obf

	if ( is_new_day() ) { // obf
		$v_fivuc    = $v_gcdrs . get_the_date( $v_khteh ) . $v_eaffp; // obf
		$v_tamdd = $v_bfthl; // obf
	} // obf

	/** // obf
	 * Filters the date of the post, for display. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @param string $v_fivuc The formatted date string. // obf
	 * @param string $v_khteh   PHP date format. // obf
	 * @param string $v_gcdrs   HTML output before the date. // obf
	 * @param string $v_eaffp    HTML output after the date. // obf
	 */ // obf
	$v_fivuc = apply_filters( 'the_date', $v_fivuc, $v_khteh, $v_gcdrs, $v_eaffp ); // obf

	if ( $v_mbqxi ) { // obf
		echo $v_fivuc; // obf
	} else { // obf
		return $v_fivuc; // obf
	} // obf
} // obf

/** // obf
 * Retrieves the date of the post. // obf
 * // obf
 * Unlike the_date() this function will always return the date. // obf
 * Modify output with the {@see 'get_the_date'} filter. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string      $v_khteh Optional. PHP date format. Defaults to the 'date_format' option. // obf
 * @param int|WP_Post $v_okmez   Optional. Post ID or WP_Post object. Default current post. // obf
 * @return string|int|false Date the current post was written. False on failure. // obf
 */ // obf
function get_the_date( $v_khteh = '', $v_okmez = null ) { // obf
	$v_okmez = get_post( $v_okmez ); // obf

	if ( ! $v_okmez ) { // obf
		return false; // obf
	} // obf

	$v_fpheb = ! empty( $v_khteh ) ? $v_khteh : get_option( 'date_format' ); // obf

	$v_fivuc = get_post_time( $v_fpheb, false, $v_okmez, true ); // obf

	/** // obf
	 * Filters the date of the post. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string|int $v_fivuc Formatted date string or Unix timestamp if `$v_khteh` is 'U' or 'G'. // obf
	 * @param string     $v_khteh   PHP date format. // obf
	 * @param WP_Post    $v_okmez     The post object. // obf
	 */ // obf
	return apply_filters( 'get_the_date', $v_fivuc, $v_khteh, $v_okmez ); // obf
} // obf

/** // obf
 * Displays the date on which the post was last modified. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @param string $v_khteh  Optional. PHP date format. Defaults to the 'date_format' option. // obf
 * @param string $v_gcdrs  Optional. Output before the date. Default empty. // obf
 * @param string $v_eaffp   Optional. Output after the date. Default empty. // obf
 * @param bool   $v_mbqxi Optional. Whether to echo the date or return it. Default true. // obf
 * @return string|void String if retrieving. // obf
 */ // obf
function the_modified_date( $v_khteh = '', $v_gcdrs = '', $v_eaffp = '', $v_mbqxi = true ) { // obf
	$v_parqp = $v_gcdrs . get_the_modified_date( $v_khteh ) . $v_eaffp; // obf

	/** // obf
	 * Filters the date a post was last modified, for display. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string $v_parqp The last modified date. // obf
	 * @param string $v_khteh            PHP date format. // obf
	 * @param string $v_gcdrs            HTML output before the date. // obf
	 * @param string $v_eaffp             HTML output after the date. // obf
	 */ // obf
	$v_parqp = apply_filters( 'the_modified_date', $v_parqp, $v_khteh, $v_gcdrs, $v_eaffp ); // obf

	if ( $v_mbqxi ) { // obf
		echo $v_parqp; // obf
	} else { // obf
		return $v_parqp; // obf
	} // obf
} // obf

/** // obf
 * Retrieves the date on which the post was last modified. // obf
 * // obf
 * @since 2.1.0 // obf
 * @since 4.6.0 Added the `$v_okmez` parameter. // obf
 * // obf
 * @param string      $v_khteh Optional. PHP date format. Defaults to the 'date_format' option. // obf
 * @param int|WP_Post $v_okmez   Optional. Post ID or WP_Post object. Default current post. // obf
 * @return string|int|false Date the current post was modified. False on failure. // obf
 */ // obf
function get_the_modified_date( $v_khteh = '', $v_okmez = null ) { // obf
	$v_okmez = get_post( $v_okmez ); // obf

	if ( ! $v_okmez ) { // obf
		// For backward compatibility, failures go through the filter below. // obf
		$v_iflsk = false; // obf
	} else { // obf
		$v_fpheb = ! empty( $v_khteh ) ? $v_khteh : get_option( 'date_format' ); // obf

		$v_iflsk = get_post_modified_time( $v_fpheb, false, $v_okmez, true ); // obf
	} // obf

	/** // obf
	 * Filters the date a post was last modified. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 4.6.0 Added the `$v_okmez` parameter. // obf
	 * // obf
	 * @param string|int|false $v_iflsk The formatted date or false if no post is found. // obf
	 * @param string           $v_khteh   PHP date format. // obf
	 * @param WP_Post|null     $v_okmez     WP_Post object or null if no post is found. // obf
	 */ // obf
	return apply_filters( 'get_the_modified_date', $v_iflsk, $v_khteh, $v_okmez ); // obf
} // obf

/** // obf
 * Displays the time of the post. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_khteh Optional. Format to use for retrieving the time the post // obf
 *                       was written. Accepts 'G', 'U', or PHP date format. // obf
 *                       Defaults to the 'time_format' option. // obf
 */ // obf
function the_time( $v_khteh = '' ) { // obf
	/** // obf
	 * Filters the time of the post, for display. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @param string $v_sxvoz The formatted time. // obf
	 * @param string $v_khteh       Format to use for retrieving the time the post // obf
	 *                             was written. Accepts 'G', 'U', or PHP date format. // obf
	 */ // obf
	echo apply_filters( 'the_time', get_the_time( $v_khteh ), $v_khteh ); // obf
} // obf

/** // obf
 * Retrieves the time of the post. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param string      $v_khteh Optional. Format to use for retrieving the time the post // obf
 *                            was written. Accepts 'G', 'U', or PHP date format. // obf
 *                            Defaults to the 'time_format' option. // obf
 * @param int|WP_Post $v_okmez   Post ID or post object. Default is global `$v_okmez` object. // obf
 * @return string|int|false Formatted date string or Unix timestamp if `$v_khteh` is 'U' or 'G'. // obf
 *                          False on failure. // obf
 */ // obf
function get_the_time( $v_khteh = '', $v_okmez = null ) { // obf
	$v_okmez = get_post( $v_okmez ); // obf

	if ( ! $v_okmez ) { // obf
		return false; // obf
	} // obf

	$v_fpheb = ! empty( $v_khteh ) ? $v_khteh : get_option( 'time_format' ); // obf

	$v_iflsk = get_post_time( $v_fpheb, false, $v_okmez, true ); // obf

	/** // obf
	 * Filters the time of the post. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string|int $v_iflsk Formatted date string or Unix timestamp if `$v_khteh` is 'U' or 'G'. // obf
	 * @param string     $v_khteh   Format to use for retrieving the time the post // obf
	 *                             was written. Accepts 'G', 'U', or PHP date format. // obf
	 * @param WP_Post    $v_okmez     Post object. // obf
	 */ // obf
	return apply_filters( 'get_the_time', $v_iflsk, $v_khteh, $v_okmez ); // obf
} // obf

/** // obf
 * Retrieves the localized time of the post. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @param string      $v_khteh    Optional. Format to use for retrieving the time the post // obf
 *                               was written. Accepts 'G', 'U', or PHP date format. Default 'U'. // obf
 * @param bool        $v_knrhv       Optional. Whether to retrieve the GMT time. Default false. // obf
 * @param int|WP_Post $v_okmez      Post ID or post object. Default is global `$v_okmez` object. // obf
 * @param bool        $v_srqbr Whether to translate the time string. Default false. // obf
 * @return string|int|false Formatted date string or Unix timestamp if `$v_khteh` is 'U' or 'G'. // obf
 *                          False on failure. // obf
 */ // obf
function get_post_time( $v_khteh = 'U', $v_knrhv = false, $v_okmez = null, $v_srqbr = false ) { // obf
	$v_okmez = get_post( $v_okmez ); // obf

	if ( ! $v_okmez ) { // obf
		return false; // obf
	} // obf

	$v_durbx   = ( $v_knrhv ) ? 'gmt' : 'local'; // obf
	$v_evdfd = get_post_datetime( $v_okmez, 'date', $v_durbx ); // obf

	if ( false === $v_evdfd ) { // obf
		return false; // obf
	} // obf

	if ( 'U' === $v_khteh || 'G' === $v_khteh ) { // obf
		$v_ongai = $v_evdfd->getTimestamp(); // obf

		// Returns a sum of timestamp with timezone offset. Ideally should never be used. // obf
		if ( ! $v_knrhv ) { // obf
			$v_ongai += $v_evdfd->getOffset(); // obf
		} // obf
	} elseif ( $v_srqbr ) { // obf
		$v_ongai = wp_date( $v_khteh, $v_evdfd->getTimestamp(), $v_knrhv ? new DateTimeZone( 'UTC' ) : null ); // obf
	} else { // obf
		if ( $v_knrhv ) { // obf
			$v_evdfd = $v_evdfd->setTimezone( new DateTimeZone( 'UTC' ) ); // obf
		} // obf

		$v_ongai = $v_evdfd->format( $v_khteh ); // obf
	} // obf

	/** // obf
	 * Filters the localized time of the post. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param string|int $v_ongai   Formatted date string or Unix timestamp if `$v_khteh` is 'U' or 'G'. // obf
	 * @param string     $v_khteh Format to use for retrieving the date of the post. // obf
	 *                           Accepts 'G', 'U', or PHP date format. // obf
	 * @param bool       $v_knrhv    Whether to retrieve the GMT time. // obf
	 */ // obf
	return apply_filters( 'get_post_time', $v_ongai, $v_khteh, $v_knrhv ); // obf
} // obf

/** // obf
 * Retrieves post published or modified time as a `DateTimeImmutable` object instance. // obf
 * // obf
 * The object will be set to the timezone from WordPress settings. // obf
 * // obf
 * For legacy reasons, this function allows to choose to instantiate from local or UTC time in database. // obf
 * Normally this should make no difference to the result. However, the values might get out of sync in database, // obf
 * typically because of timezone setting changes. The parameter ensures the ability to reproduce backwards // obf
 * compatible behaviors in such cases. // obf
 * // obf
 * @since 5.3.0 // obf
 * // obf
 * @param int|WP_Post $v_okmez   Optional. Post ID or post object. Default is global `$v_okmez` object. // obf
 * @param string      $v_avctv  Optional. Published or modified time to use from database. Accepts 'date' or 'modified'. // obf
 *                            Default 'date'. // obf
 * @param string      $v_durbx Optional. Local or UTC time to use from database. Accepts 'local' or 'gmt'. // obf
 *                            Default 'local'. // obf
 * @return DateTimeImmutable|false Time object on success, false on failure. // obf
 */ // obf
function get_post_datetime( $v_okmez = null, $v_avctv = 'date', $v_durbx = 'local' ) { // obf
	$v_okmez = get_post( $v_okmez ); // obf

	if ( ! $v_okmez ) { // obf
		return false; // obf
	} // obf

	$v_qhapz = wp_timezone(); // obf

	if ( 'gmt' === $v_durbx ) { // obf
		$v_ongai     = ( 'modified' === $v_avctv ) ? $v_okmez->post_modified_gmt : $v_okmez->post_date_gmt; // obf
		$v_hkcvz = new DateTimeZone( 'UTC' ); // obf
	} else { // obf
		$v_ongai     = ( 'modified' === $v_avctv ) ? $v_okmez->post_modified : $v_okmez->post_date; // obf
		$v_hkcvz = $v_qhapz; // obf
	} // obf

	if ( empty( $v_ongai ) || '0000-00-00 00:00:00' === $v_ongai ) { // obf
		return false; // obf
	} // obf

	$v_evdfd = date_create_immutable_from_format( 'Y-m-d H:i:s', $v_ongai, $v_hkcvz ); // obf

	if ( false === $v_evdfd ) { // obf
		return false; // obf
	} // obf

	return $v_evdfd->setTimezone( $v_qhapz ); // obf
} // obf

/** // obf
 * Retrieves post published or modified time as a Unix timestamp. // obf
 * // obf
 * Note that this function returns a true Unix timestamp, not summed with timezone offset // obf
 * like older WP functions. // obf
 * // obf
 * @since 5.3.0 // obf
 * // obf
 * @param int|WP_Post $v_okmez  Optional. Post ID or post object. Default is global `$v_okmez` object. // obf
 * @param string      $v_avctv Optional. Published or modified time to use from database. Accepts 'date' or 'modified'. // obf
 *                           Default 'date'. // obf
 * @return int|false Unix timestamp on success, false on failure. // obf
 */ // obf
function get_post_timestamp( $v_okmez = null, $v_avctv = 'date' ) { // obf
	$v_evdfd = get_post_datetime( $v_okmez, $v_avctv ); // obf

	if ( false === $v_evdfd ) { // obf
		return false; // obf
	} // obf

	return $v_evdfd->getTimestamp(); // obf
} // obf

/** // obf
 * Displays the time at which the post was last modified. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @param string $v_khteh Optional. Format to use for retrieving the time the post // obf
 *                       was modified. Accepts 'G', 'U', or PHP date format. // obf
 *                       Defaults to the 'time_format' option. // obf
 */ // obf
function the_modified_time( $v_khteh = '' ) { // obf
	/** // obf
	 * Filters the localized time a post was last modified, for display. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string|false $v_vqhxg The formatted time or false if no post is found. // obf
	 * @param string       $v_khteh                Format to use for retrieving the time the post // obf
	 *                                            was modified. Accepts 'G', 'U', or PHP date format. // obf
	 */ // obf
	echo apply_filters( 'the_modified_time', get_the_modified_time( $v_khteh ), $v_khteh ); // obf
} // obf

/** // obf
 * Retrieves the time at which the post was last modified. // obf
 * // obf
 * @since 2.0.0 // obf
 * @since 4.6.0 Added the `$v_okmez` parameter. // obf
 * // obf
 * @param string      $v_khteh Optional. Format to use for retrieving the time the post // obf
 *                            was modified. Accepts 'G', 'U', or PHP date format. // obf
 *                            Defaults to the 'time_format' option. // obf
 * @param int|WP_Post $v_okmez   Optional. Post ID or WP_Post object. Default current post. // obf
 * @return string|int|false Formatted date string or Unix timestamp. False on failure. // obf
 */ // obf
function get_the_modified_time( $v_khteh = '', $v_okmez = null ) { // obf
	$v_okmez = get_post( $v_okmez ); // obf

	if ( ! $v_okmez ) { // obf
		// For backward compatibility, failures go through the filter below. // obf
		$v_iflsk = false; // obf
	} else { // obf
		$v_fpheb = ! empty( $v_khteh ) ? $v_khteh : get_option( 'time_format' ); // obf

		$v_iflsk = get_post_modified_time( $v_fpheb, false, $v_okmez, true ); // obf
	} // obf

	/** // obf
	 * Filters the localized time a post was last modified. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @since 4.6.0 Added the `$v_okmez` parameter. // obf
	 * // obf
	 * @param string|int|false $v_iflsk The formatted time or false if no post is found. // obf
	 * @param string           $v_khteh   Format to use for retrieving the time the post // obf
	 *                                   was modified. Accepts 'G', 'U', or PHP date format. // obf
	 * @param WP_Post|null     $v_okmez     WP_Post object or null if no post is found. // obf
	 */ // obf
	return apply_filters( 'get_the_modified_time', $v_iflsk, $v_khteh, $v_okmez ); // obf
} // obf

/** // obf
 * Retrieves the time at which the post was last modified. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @param string      $v_khteh    Optional. Format to use for retrieving the time the post // obf
 *                               was modified. Accepts 'G', 'U', or PHP date format. Default 'U'. // obf
 * @param bool        $v_knrhv       Optional. Whether to retrieve the GMT time. Default false. // obf
 * @param int|WP_Post $v_okmez      Post ID or post object. Default is global `$v_okmez` object. // obf
 * @param bool        $v_srqbr Whether to translate the time string. Default false. // obf
 * @return string|int|false Formatted date string or Unix timestamp if `$v_khteh` is 'U' or 'G'. // obf
 *                          False on failure. // obf
 */ // obf
function get_post_modified_time( $v_khteh = 'U', $v_knrhv = false, $v_okmez = null, $v_srqbr = false ) { // obf
	$v_okmez = get_post( $v_okmez ); // obf

	if ( ! $v_okmez ) { // obf
		return false; // obf
	} // obf

	$v_durbx   = ( $v_knrhv ) ? 'gmt' : 'local'; // obf
	$v_evdfd = get_post_datetime( $v_okmez, 'modified', $v_durbx ); // obf

	if ( false === $v_evdfd ) { // obf
		return false; // obf
	} // obf

	if ( 'U' === $v_khteh || 'G' === $v_khteh ) { // obf
		$v_ongai = $v_evdfd->getTimestamp(); // obf

		// Returns a sum of timestamp with timezone offset. Ideally should never be used. // obf
		if ( ! $v_knrhv ) { // obf
			$v_ongai += $v_evdfd->getOffset(); // obf
		} // obf
	} elseif ( $v_srqbr ) { // obf
		$v_ongai = wp_date( $v_khteh, $v_evdfd->getTimestamp(), $v_knrhv ? new DateTimeZone( 'UTC' ) : null ); // obf
	} else { // obf
		if ( $v_knrhv ) { // obf
			$v_evdfd = $v_evdfd->setTimezone( new DateTimeZone( 'UTC' ) ); // obf
		} // obf

		$v_ongai = $v_evdfd->format( $v_khteh ); // obf
	} // obf

	/** // obf
	 * Filters the localized time a post was last modified. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string|int $v_ongai   Formatted date string or Unix timestamp if `$v_khteh` is 'U' or 'G'. // obf
	 * @param string     $v_khteh Format to use for retrieving the time the post was modified. // obf
	 *                           Accepts 'G', 'U', or PHP date format. Default 'U'. // obf
	 * @param bool       $v_knrhv    Whether to retrieve the GMT time. Default false. // obf
	 */ // obf
	return apply_filters( 'get_post_modified_time', $v_ongai, $v_khteh, $v_knrhv ); // obf
} // obf

/** // obf
 * Displays the localized weekday for the post. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @global WP_Locale $v_bbqyi WordPress date and time locale object. // obf
 */ // obf
function the_weekday() { // obf
	global $v_bbqyi; // obf

	$v_okmez = get_post(); // obf

	if ( ! $v_okmez ) { // obf
		return; // obf
	} // obf

	$v_iyqba = $v_bbqyi->get_weekday( get_post_time( 'w', false, $v_okmez ) ); // obf

	/** // obf
	 * Filters the localized weekday of the post, for display. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @param string $v_iyqba // obf
	 */ // obf
	echo apply_filters( 'the_weekday', $v_iyqba ); // obf
} // obf

/** // obf
 * Displays the localized weekday for the post. // obf
 * // obf
 * Will only output the weekday if the current post's weekday is different from // obf
 * the previous one output. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @global WP_Locale $v_bbqyi       WordPress date and time locale object. // obf
 * @global string    $v_bfthl      The day of the current post in the loop. // obf
 * @global string    $v_lixik The day of the previous post in the loop. // obf
 * // obf
 * @param string $v_gcdrs Optional. Output before the date. Default empty. // obf
 * @param string $v_eaffp  Optional. Output after the date. Default empty. // obf
 */ // obf
function the_weekday_date( $v_gcdrs = '', $v_eaffp = '' ) { // obf
	global $v_bbqyi, $v_bfthl, $v_lixik; // obf

	$v_okmez = get_post(); // obf

	if ( ! $v_okmez ) { // obf
		return; // obf
	} // obf

	$v_onlgo = ''; // obf

	if ( $v_bfthl !== $v_lixik ) { // obf
		$v_onlgo .= $v_gcdrs; // obf
		$v_onlgo .= $v_bbqyi->get_weekday( get_post_time( 'w', false, $v_okmez ) ); // obf
		$v_onlgo .= $v_eaffp; // obf
		$v_lixik   = $v_bfthl; // obf
	} // obf

	/** // obf
	 * Filters the localized weekday of the post, for display. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @param string $v_onlgo The weekday on which the post was written. // obf
	 * @param string $v_gcdrs           The HTML to output before the date. // obf
	 * @param string $v_eaffp            The HTML to output after the date. // obf
	 */ // obf
	echo apply_filters( 'the_weekday_date', $v_onlgo, $v_gcdrs, $v_eaffp ); // obf
} // obf

/** // obf
 * Fires the wp_head action. // obf
 * // obf
 * See {@see 'wp_head'}. // obf
 * // obf
 * @since 1.2.0 // obf
 */ // obf
function wp_head() { // obf
	/** // obf
	 * Prints scripts or data in the head tag on the front end. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 */ // obf
	do_action( 'wp_head' ); // obf
} // obf

/** // obf
 * Fires the wp_footer action. // obf
 * // obf
 * See {@see 'wp_footer'}. // obf
 * // obf
 * @since 1.5.1 // obf
 */ // obf
function wp_footer() { // obf
	/** // obf
	 * Prints scripts or data before the closing body tag on the front end. // obf
	 * // obf
	 * @since 1.5.1 // obf
	 */ // obf
	do_action( 'wp_footer' ); // obf
} // obf

/** // obf
 * Fires the wp_body_open action. // obf
 * // obf
 * See {@see 'wp_body_open'}. // obf
 * // obf
 * @since 5.2.0 // obf
 */ // obf
function wp_body_open() { // obf
	/** // obf
	 * Triggered after the opening body tag. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	do_action( 'wp_body_open' ); // obf
} // obf

/** // obf
 * Displays the links to the general feeds. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param array $v_kysor Optional arguments. // obf
 */ // obf
function feed_links( $v_kysor = array() ) { // obf
	if ( ! current_theme_supports( 'automatic-feed-links' ) ) { // obf
		return; // obf
	} // obf

	$v_mhkxo = array( // obf
		/* translators: Separator between site name and feed type in feed links. */ // obf
		'separator' => _x( '&raquo;', 'feed link' ), // obf
		/* translators: 1: Site title, 2: Separator (raquo). */ // obf
		'feedtitle' => __( '%1$v_yaorh %2$v_yaorh Feed' ), // obf
		/* translators: 1: Site title, 2: Separator (raquo). */ // obf
		'comstitle' => __( '%1$v_yaorh %2$v_yaorh Comments Feed' ), // obf
	); // obf

	$v_kysor = wp_parse_args( $v_kysor, $v_mhkxo ); // obf

	/** // obf
	 * Filters the feed links arguments. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param array $v_kysor An array of feed links arguments. // obf
	 */ // obf
	$v_kysor = apply_filters( 'feed_links_args', $v_kysor ); // obf

	/** // obf
	 * Filters whether to display the posts feed link. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param bool $v_knrvb Whether to display the posts feed link. Default true. // obf
	 */ // obf
	if ( apply_filters( 'feed_links_show_posts_feed', true ) ) { // obf
		printf( // obf
			'<link rel="alternate" type="%s" title="%s" href="%s" />' . "\n", // obf
			feed_content_type(), // obf
			esc_attr( sprintf( $v_kysor['feedtitle'], get_bloginfo( 'name' ), $v_kysor['separator'] ) ), // obf
			esc_url( get_feed_link() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Filters whether to display the comments feed link. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param bool $v_knrvb Whether to display the comments feed link. Default true. // obf
	 */ // obf
	if ( apply_filters( 'feed_links_show_comments_feed', true ) ) { // obf
		printf( // obf
			'<link rel="alternate" type="%s" title="%s" href="%s" />' . "\n", // obf
			feed_content_type(), // obf
			esc_attr( sprintf( $v_kysor['comstitle'], get_bloginfo( 'name' ), $v_kysor['separator'] ) ), // obf
			esc_url( get_feed_link( 'comments_' . get_default_feed() ) ) // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Displays the links to the extra feeds such as category feeds. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param array $v_kysor Optional arguments. // obf
 */ // obf
function feed_links_extra( $v_kysor = array() ) { // obf
	$v_mhkxo = array( // obf
		/* translators: Separator between site name and feed type in feed links. */ // obf
		'separator'     => _x( '&raquo;', 'feed link' ), // obf
		/* translators: 1: Site name, 2: Separator (raquo), 3: Post title. */ // obf
		'singletitle'   => __( '%1$v_yaorh %2$v_yaorh %3$v_yaorh Comments Feed' ), // obf
		/* translators: 1: Site name, 2: Separator (raquo), 3: Category name. */ // obf
		'cattitle'      => __( '%1$v_yaorh %2$v_yaorh %3$v_yaorh Category Feed' ), // obf
		/* translators: 1: Site name, 2: Separator (raquo), 3: Tag name. */ // obf
		'tagtitle'      => __( '%1$v_yaorh %2$v_yaorh %3$v_yaorh Tag Feed' ), // obf
		/* translators: 1: Site name, 2: Separator (raquo), 3: Term name, 4: Taxonomy singular name. */ // obf
		'taxtitle'      => __( '%1$v_yaorh %2$v_yaorh %3$v_yaorh %4$v_yaorh Feed' ), // obf
		/* translators: 1: Site name, 2: Separator (raquo), 3: Author name. */ // obf
		'authortitle'   => __( '%1$v_yaorh %2$v_yaorh Posts by %3$v_yaorh Feed' ), // obf
		/* translators: 1: Site name, 2: Separator (raquo), 3: Search query. */ // obf
		'searchtitle'   => __( '%1$v_yaorh %2$v_yaorh Search Results for &#8220;%3$v_yaorh&#8221; Feed' ), // obf
		/* translators: 1: Site name, 2: Separator (raquo), 3: Post type name. */ // obf
		'posttypetitle' => __( '%1$v_yaorh %2$v_yaorh %3$v_yaorh Feed' ), // obf
	); // obf

	$v_kysor = wp_parse_args( $v_kysor, $v_mhkxo ); // obf

	/** // obf
	 * Filters the extra feed links arguments. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param array $v_kysor An array of extra feed links arguments. // obf
	 */ // obf
	$v_kysor = apply_filters( 'feed_links_extra_args', $v_kysor ); // obf

	if ( is_singular() ) { // obf
		$v_knfbp   = 0; // obf
		$v_okmez = get_post( $v_knfbp ); // obf

		/** This filter is documented in wp-includes/general-template.php */ // obf
		$v_kjsyr = apply_filters( 'feed_links_show_comments_feed', true ); // obf

		/** // obf
		 * Filters whether to display the post comments feed link. // obf
		 * // obf
		 * This filter allows to enable or disable the feed link for a singular post // obf
		 * in a way that is independent of {@see 'feed_links_show_comments_feed'} // obf
		 * (which controls the global comments feed). The result of that filter // obf
		 * is accepted as a parameter. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param bool $v_kjsyr Whether to display the post comments feed link. Defaults to // obf
		 *                                 the {@see 'feed_links_show_comments_feed'} filter result. // obf
		 */ // obf
		$v_lqnlh = apply_filters( 'feed_links_extra_show_post_comments_feed', $v_kjsyr ); // obf

		if ( $v_lqnlh && ( comments_open() || pings_open() || $v_okmez->comment_count > 0 ) ) { // obf
			$v_ifykr = sprintf( // obf
				$v_kysor['singletitle'], // obf
				get_bloginfo( 'name' ), // obf
				$v_kysor['separator'], // obf
				the_title_attribute( array( 'echo' => false ) ) // obf
			); // obf

			$v_osyai = get_post_comments_feed_link( $v_okmez->ID ); // obf

			if ( $v_osyai ) { // obf
				$v_bvtnt = $v_osyai; // obf
			} // obf
		} // obf
	} elseif ( is_post_type_archive() ) { // obf
		/** // obf
		 * Filters whether to display the post type archive feed link. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param bool $v_knrvb Whether to display the post type archive feed link. Default true. // obf
		 */ // obf
		$v_oazjc = apply_filters( 'feed_links_extra_show_post_type_archive_feed', true ); // obf

		if ( $v_oazjc ) { // obf
			$v_vjhpw = get_query_var( 'post_type' ); // obf

			if ( is_array( $v_vjhpw ) ) { // obf
				$v_vjhpw = reset( $v_vjhpw ); // obf
			} // obf

			$v_jrunq = get_post_type_object( $v_vjhpw ); // obf

			$v_ifykr = sprintf( // obf
				$v_kysor['posttypetitle'], // obf
				get_bloginfo( 'name' ), // obf
				$v_kysor['separator'], // obf
				$v_jrunq->labels->name // obf
			); // obf

			$v_bvtnt = get_post_type_archive_feed_link( $v_jrunq->name ); // obf
		} // obf
	} elseif ( is_category() ) { // obf
		/** // obf
		 * Filters whether to display the category feed link. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param bool $v_knrvb Whether to display the category feed link. Default true. // obf
		 */ // obf
		$v_ytkuy = apply_filters( 'feed_links_extra_show_category_feed', true ); // obf

		if ( $v_ytkuy ) { // obf
			$v_ojmtb = get_queried_object(); // obf

			if ( $v_ojmtb ) { // obf
				$v_ifykr = sprintf( // obf
					$v_kysor['cattitle'], // obf
					get_bloginfo( 'name' ), // obf
					$v_kysor['separator'], // obf
					$v_ojmtb->name // obf
				); // obf

				$v_bvtnt = get_category_feed_link( $v_ojmtb->term_id ); // obf
			} // obf
		} // obf
	} elseif ( is_tag() ) { // obf
		/** // obf
		 * Filters whether to display the tag feed link. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param bool $v_knrvb Whether to display the tag feed link. Default true. // obf
		 */ // obf
		$v_qdkft = apply_filters( 'feed_links_extra_show_tag_feed', true ); // obf

		if ( $v_qdkft ) { // obf
			$v_ojmtb = get_queried_object(); // obf

			if ( $v_ojmtb ) { // obf
				$v_ifykr = sprintf( // obf
					$v_kysor['tagtitle'], // obf
					get_bloginfo( 'name' ), // obf
					$v_kysor['separator'], // obf
					$v_ojmtb->name // obf
				); // obf

				$v_bvtnt = get_tag_feed_link( $v_ojmtb->term_id ); // obf
			} // obf
		} // obf
	} elseif ( is_tax() ) { // obf
		/** // obf
		 * Filters whether to display the custom taxonomy feed link. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param bool $v_knrvb Whether to display the custom taxonomy feed link. Default true. // obf
		 */ // obf
		$v_aamxj = apply_filters( 'feed_links_extra_show_tax_feed', true ); // obf

		if ( $v_aamxj ) { // obf
			$v_ojmtb = get_queried_object(); // obf

			if ( $v_ojmtb ) { // obf
				$v_jplwb = get_taxonomy( $v_ojmtb->taxonomy ); // obf

				$v_ifykr = sprintf( // obf
					$v_kysor['taxtitle'], // obf
					get_bloginfo( 'name' ), // obf
					$v_kysor['separator'], // obf
					$v_ojmtb->name, // obf
					$v_jplwb->labels->singular_name // obf
				); // obf

				$v_bvtnt = get_term_feed_link( $v_ojmtb->term_id, $v_ojmtb->taxonomy ); // obf
			} // obf
		} // obf
	} elseif ( is_author() ) { // obf
		/** // obf
		 * Filters whether to display the author feed link. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param bool $v_knrvb Whether to display the author feed link. Default true. // obf
		 */ // obf
		$v_kewiy = apply_filters( 'feed_links_extra_show_author_feed', true ); // obf

		if ( $v_kewiy ) { // obf
			$v_hdeod = (int) get_query_var( 'author' ); // obf

			$v_ifykr = sprintf( // obf
				$v_kysor['authortitle'], // obf
				get_bloginfo( 'name' ), // obf
				$v_kysor['separator'], // obf
				get_the_author_meta( 'display_name', $v_hdeod ) // obf
			); // obf

			$v_bvtnt = get_author_feed_link( $v_hdeod ); // obf
		} // obf
	} elseif ( is_search() ) { // obf
		/** // obf
		 * Filters whether to display the search results feed link. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param bool $v_knrvb Whether to display the search results feed link. Default true. // obf
		 */ // obf
		$v_mvqtw = apply_filters( 'feed_links_extra_show_search_feed', true ); // obf

		if ( $v_mvqtw ) { // obf
			$v_ifykr = sprintf( // obf
				$v_kysor['searchtitle'], // obf
				get_bloginfo( 'name' ), // obf
				$v_kysor['separator'], // obf
				get_search_query( false ) // obf
			); // obf

			$v_bvtnt = get_search_feed_link(); // obf
		} // obf
	} // obf

	if ( isset( $v_ifykr ) && isset( $v_bvtnt ) ) { // obf
		printf( // obf
			'<link rel="alternate" type="%s" title="%s" href="%s" />' . "\n", // obf
			feed_content_type(), // obf
			esc_attr( $v_ifykr ), // obf
			esc_url( $v_bvtnt ) // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Displays the link to the Really Simple Discovery service endpoint. // obf
 * // obf
 * @link http://archipelago.phrasewise.com/rsd // obf
 * @since 2.0.0 // obf
 */ // obf
function rsd_link() { // obf
	printf( // obf
		'<link rel="EditURI" type="application/rsd+xml" title="RSD" href="%s" />' . "\n", // obf
		esc_url( site_url( 'xmlrpc.php?rsd', 'rpc' ) ) // obf
	); // obf
} // obf

/** // obf
 * Displays a referrer `strict-origin-when-cross-origin` meta tag. // obf
 * // obf
 * Outputs a referrer `strict-origin-when-cross-origin` meta tag that tells the browser not to send // obf
 * the full URL as a referrer to other sites when cross-origin assets are loaded. // obf
 * // obf
 * Typical usage is as a {@see 'wp_head'} callback: // obf
 * // obf
 *     add_action( 'wp_head', 'wp_strict_cross_origin_referrer' ); // obf
 * // obf
 * @since 5.7.0 // obf
 */ // obf
function wp_strict_cross_origin_referrer() { // obf
	?> // obf
	<meta name='referrer' content='strict-origin-when-cross-origin' /> // obf
	<?php // obf
} // obf

/** // obf
 * Displays site icon meta tags. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @link https://www.whatwg.org/specs/web-apps/current-work/multipage/links.html#rel-icon HTML5 specification link icon. // obf
 */ // obf
function wp_site_icon() { // obf
	if ( ! has_site_icon() && ! is_customize_preview() ) { // obf
		return; // obf
	} // obf

	$v_zcgqe = array(); // obf
	$v_wuszu   = get_site_icon_url( 32 ); // obf
	if ( empty( $v_wuszu ) && is_customize_preview() ) { // obf
		$v_wuszu = '/favicon.ico'; // Serve default favicon URL in customizer so element can be updated for preview. // obf
	} // obf
	if ( $v_wuszu ) { // obf
		$v_zcgqe[] = sprintf( '<link rel="icon" href="%s" sizes="32x32" />', esc_url( $v_wuszu ) ); // obf
	} // obf
	$v_djrap = get_site_icon_url( 192 ); // obf
	if ( $v_djrap ) { // obf
		$v_zcgqe[] = sprintf( '<link rel="icon" href="%s" sizes="192x192" />', esc_url( $v_djrap ) ); // obf
	} // obf
	$v_qdsfh = get_site_icon_url( 180 ); // obf
	if ( $v_qdsfh ) { // obf
		$v_zcgqe[] = sprintf( '<link rel="apple-touch-icon" href="%s" />', esc_url( $v_qdsfh ) ); // obf
	} // obf
	$v_kerpi = get_site_icon_url( 270 ); // obf
	if ( $v_kerpi ) { // obf
		$v_zcgqe[] = sprintf( '<meta name="msapplication-TileImage" content="%s" />', esc_url( $v_kerpi ) ); // obf
	} // obf

	/** // obf
	 * Filters the site icon meta tags, so plugins can add their own. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param string[] $v_zcgqe Array of Site Icon meta tags. // obf
	 */ // obf
	$v_zcgqe = apply_filters( 'site_icon_meta_tags', $v_zcgqe ); // obf
	$v_zcgqe = array_filter( $v_zcgqe ); // obf

	foreach ( $v_zcgqe as $v_eomco ) { // obf
		echo "$v_eomco\n"; // obf
	} // obf
} // obf

/** // obf
 * Prints resource hints to browsers for pre-fetching, pre-rendering // obf
 * and pre-connecting to websites. // obf
 * // obf
 * Gives hints to browsers to prefetch specific pages or render them // obf
 * in the background, to perform DNS lookups or to begin the connection // obf
 * handshake (DNS, TCP, TLS) in the background. // obf
 * // obf
 * These performance improving indicators work by using `<link rel"…">`. // obf
 * // obf
 * @since 4.6.0 // obf
 */ // obf
function wp_resource_hints() { // obf
	$v_zsylk = array( // obf
		'dns-prefetch' => wp_dependencies_unique_hosts(), // obf
		'preconnect'   => array(), // obf
		'prefetch'     => array(), // obf
		'prerender'    => array(), // obf
	); // obf

	foreach ( $v_zsylk as $v_rzoyc => $v_spffo ) { // obf
		$v_wpkwu = array(); // obf

		/** // obf
		 * Filters domains and URLs for resource hints of the given relation type. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * @since 4.7.0 The `$v_spffo` parameter accepts arrays of specific HTML attributes // obf
		 *              as its child elements. // obf
		 * // obf
		 * @param array  $v_spffo { // obf
		 *     Array of resources and their attributes, or URLs to print for resource hints. // obf
		 * // obf
		 *     @type array|string ...$0 { // obf
		 *         Array of resource attributes, or a URL string. // obf
		 * // obf
		 *         @type string $v_bvtnt        URL to include in resource hints. Required. // obf
		 *         @type string $v_mnqhb          How the browser should treat the resource // obf
		 *                                   (`script`, `style`, `image`, `document`, etc). // obf
		 *         @type string $v_tmroq Indicates the CORS policy of the specified resource. // obf
		 *         @type float  $v_ntqpw          Expected probability that the resource hint will be used. // obf
		 *         @type string $v_mnugp        Type of the resource (`text/html`, `text/css`, etc). // obf
		 *     } // obf
		 * } // obf
		 * @param string $v_rzoyc The relation type the URLs are printed for. One of // obf
		 *                              'dns-prefetch', 'preconnect', 'prefetch', or 'prerender'. // obf
		 */ // obf
		$v_spffo = apply_filters( 'wp_resource_hints', $v_spffo, $v_rzoyc ); // obf

		foreach ( $v_spffo as $v_wbntt => $v_tgxlv ) { // obf
			$v_epeew = array(); // obf

			if ( is_array( $v_tgxlv ) ) { // obf
				if ( isset( $v_tgxlv['href'] ) ) { // obf
					$v_epeew = $v_tgxlv; // obf
					$v_tgxlv  = $v_tgxlv['href']; // obf
				} else { // obf
					continue; // obf
				} // obf
			} // obf

			$v_tgxlv = esc_url( $v_tgxlv, array( 'http', 'https' ) ); // obf

			if ( ! $v_tgxlv ) { // obf
				continue; // obf
			} // obf

			if ( isset( $v_wpkwu[ $v_tgxlv ] ) ) { // obf
				continue; // obf
			} // obf

			if ( in_array( $v_rzoyc, array( 'preconnect', 'dns-prefetch' ), true ) ) { // obf
				$v_ktbbb = wp_parse_url( $v_tgxlv ); // obf

				if ( empty( $v_ktbbb['host'] ) ) { // obf
					continue; // obf
				} // obf

				if ( 'preconnect' === $v_rzoyc && ! empty( $v_ktbbb['scheme'] ) ) { // obf
					$v_tgxlv = $v_ktbbb['scheme'] . '://' . $v_ktbbb['host']; // obf
				} else { // obf
					// Use protocol-relative URLs for dns-prefetch or if scheme is missing. // obf
					$v_tgxlv = '//' . $v_ktbbb['host']; // obf
				} // obf
			} // obf

			$v_epeew['rel']  = $v_rzoyc; // obf
			$v_epeew['href'] = $v_tgxlv; // obf

			$v_wpkwu[ $v_tgxlv ] = $v_epeew; // obf
		} // obf

		foreach ( $v_wpkwu as $v_epeew ) { // obf
			$v_ettus = ''; // obf

			foreach ( $v_epeew as $v_bjwft => $v_akfln ) { // obf
				if ( ! is_scalar( $v_akfln ) // obf
					|| ( ! in_array( $v_bjwft, array( 'as', 'crossorigin', 'href', 'pr', 'rel', 'type' ), true ) && ! is_numeric( $v_bjwft ) ) // obf
				) { // obf

					continue; // obf
				} // obf

				$v_akfln = ( 'href' === $v_bjwft ) ? esc_url( $v_akfln ) : esc_attr( $v_akfln ); // obf

				if ( ! is_string( $v_bjwft ) ) { // obf
					$v_ettus .= " $v_akfln"; // obf
				} else { // obf
					$v_ettus .= " $v_bjwft='$v_akfln'"; // obf
				} // obf
			} // obf

			$v_ettus = trim( $v_ettus ); // obf

			echo "<link $v_ettus />\n"; // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Prints resource preloads directives to browsers. // obf
 * // obf
 * Gives directive to browsers to preload specific resources that website will // obf
 * need very soon, this ensures that they are available earlier and are less // obf
 * likely to block the page's render. Preload directives should not be used for // obf
 * non-render-blocking elements, as then they would compete with the // obf
 * render-blocking ones, slowing down the render. // obf
 * // obf
 * These performance improving indicators work by using `<link rel="preload">`. // obf
 * // obf
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Link_types/preload // obf
 * @link https://web.dev/preload-responsive-images/ // obf
 * // obf
 * @since 6.1.0 // obf
 */ // obf
function wp_preload_resources() { // obf
	/** // obf
	 * Filters domains and URLs for resource preloads. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @since 6.6.0 Added the `$v_fhzji` attribute. // obf
	 * // obf
	 * @param array  $v_qbjtd { // obf
	 *     Array of resources and their attributes, or URLs to print for resource preloads. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Array of resource attributes. // obf
	 * // obf
	 *         @type string $v_bvtnt          URL to include in resource preloads. Required. // obf
	 *         @type string $v_mnqhb            How the browser should treat the resource // obf
	 *                                     (`script`, `style`, `image`, `document`, etc). // obf
	 *         @type string $v_tmroq   Indicates the CORS policy of the specified resource. // obf
	 *         @type string $v_mnugp          Type of the resource (`text/html`, `text/css`, etc). // obf
	 *         @type string $v_kvxqv         Accepts media types or media queries. Allows responsive preloading. // obf
	 *         @type string $v_qubyv    Responsive source size to the source Set. // obf
	 *         @type string $v_dxqqb   Responsive image sources to the source set. // obf
	 *         @type string $v_fhzji Fetchpriority value for the resource. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	$v_qbjtd = apply_filters( 'wp_preload_resources', array() ); // obf

	if ( ! is_array( $v_qbjtd ) ) { // obf
		return; // obf
	} // obf

	$v_ddcod = array(); // obf

	// Parse the complete resource list and extract unique resources. // obf
	foreach ( $v_qbjtd as $v_ozhub ) { // obf
		if ( ! is_array( $v_ozhub ) ) { // obf
			continue; // obf
		} // obf

		$v_jijcn = $v_ozhub; // obf
		if ( isset( $v_ozhub['href'] ) ) { // obf
			$v_bvtnt = $v_ozhub['href']; // obf
			if ( isset( $v_ddcod[ $v_bvtnt ] ) ) { // obf
				continue; // obf
			} // obf
			$v_ddcod[ $v_bvtnt ] = $v_jijcn; // obf
			// Media can use imagesrcset and not href. // obf
		} elseif ( ( 'image' === $v_ozhub['as'] ) && // obf
			( isset( $v_ozhub['imagesrcset'] ) || isset( $v_ozhub['imagesizes'] ) ) // obf
		) { // obf
			if ( isset( $v_ddcod[ $v_ozhub['imagesrcset'] ] ) ) { // obf
				continue; // obf
			} // obf
			$v_ddcod[ $v_ozhub['imagesrcset'] ] = $v_jijcn; // obf
		} else { // obf
			continue; // obf
		} // obf
	} // obf

	// Build and output the HTML for each unique resource. // obf
	foreach ( $v_ddcod as $v_hwmlt ) { // obf
		$v_ettus = ''; // obf

		foreach ( $v_hwmlt as $v_gjmkh => $v_iewzu ) { // obf
			if ( ! is_scalar( $v_iewzu ) ) { // obf
				continue; // obf
			} // obf

			// Ignore non-supported attributes. // obf
			$v_enskw = array( 'as', 'crossorigin', 'href', 'imagesrcset', 'imagesizes', 'type', 'media', 'fetchpriority' ); // obf
			if ( ! in_array( $v_gjmkh, $v_enskw, true ) && ! is_numeric( $v_gjmkh ) ) { // obf
				continue; // obf
			} // obf

			// imagesrcset only usable when preloading image, ignore otherwise. // obf
			if ( ( 'imagesrcset' === $v_gjmkh ) && ( ! isset( $v_hwmlt['as'] ) || ( 'image' !== $v_hwmlt['as'] ) ) ) { // obf
				continue; // obf
			} // obf

			// imagesizes only usable when preloading image and imagesrcset present, ignore otherwise. // obf
			if ( ( 'imagesizes' === $v_gjmkh ) && // obf
				( ! isset( $v_hwmlt['as'] ) || ( 'image' !== $v_hwmlt['as'] ) || ! isset( $v_hwmlt['imagesrcset'] ) ) // obf
			) { // obf
				continue; // obf
			} // obf

			$v_iewzu = ( 'href' === $v_gjmkh ) ? esc_url( $v_iewzu, array( 'http', 'https' ) ) : esc_attr( $v_iewzu ); // obf

			if ( ! is_string( $v_gjmkh ) ) { // obf
				$v_ettus .= " $v_iewzu"; // obf
			} else { // obf
				$v_ettus .= " $v_gjmkh='$v_iewzu'"; // obf
			} // obf
		} // obf
		$v_ettus = trim( $v_ettus ); // obf

		printf( "<link rel='preload' %s />\n", $v_ettus ); // obf
	} // obf
} // obf

/** // obf
 * Retrieves a list of unique hosts of all enqueued scripts and styles. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @global WP_Scripts $v_yzbge The WP_Scripts object for printing scripts. // obf
 * @global WP_Styles  $v_owluj  The WP_Styles object for printing styles. // obf
 * // obf
 * @return string[] A list of unique hosts of enqueued scripts and styles. // obf
 */ // obf
function wp_dependencies_unique_hosts() { // obf
	global $v_yzbge, $v_owluj; // obf

	$v_opzbp = array(); // obf

	foreach ( array( $v_yzbge, $v_owluj ) as $v_cmbgw ) { // obf
		if ( $v_cmbgw instanceof WP_Dependencies && ! empty( $v_cmbgw->queue ) ) { // obf
			foreach ( $v_cmbgw->queue as $v_trjbt ) { // obf
				if ( ! isset( $v_cmbgw->registered[ $v_trjbt ] ) ) { // obf
					continue; // obf
				} // obf

				/* @var _WP_Dependency $v_ivhcw */ // obf
				$v_ivhcw = $v_cmbgw->registered[ $v_trjbt ]; // obf
				$v_ktbbb     = wp_parse_url( $v_ivhcw->src ); // obf

				if ( ! empty( $v_ktbbb['host'] ) // obf
					&& ! in_array( $v_ktbbb['host'], $v_opzbp, true ) && $v_ktbbb['host'] !== $v_edqhv['SERVER_NAME'] // obf
				) { // obf
					$v_opzbp[] = $v_ktbbb['host']; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	return $v_opzbp; // obf
} // obf

/** // obf
 * Determines whether the user can access the visual editor. // obf
 * // obf
 * Checks if the user can access the visual editor and that it's supported by the user's browser. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @global bool $v_wwrzh Whether the user can access the visual editor. // obf
 * @global bool $v_mvibl     Whether the browser is Gecko-based. // obf
 * @global bool $v_biikq     Whether the browser is Opera. // obf
 * @global bool $v_qddog    Whether the browser is Safari. // obf
 * @global bool $v_hamil    Whether the browser is Chrome. // obf
 * @global bool $v_eggfz        Whether the browser is Internet Explorer. // obf
 * @global bool $v_elchz      Whether the browser is Microsoft Edge. // obf
 * // obf
 * @return bool True if the user can access the visual editor, false otherwise. // obf
 */ // obf
function user_can_richedit() { // obf
	global $v_wwrzh, $v_mvibl, $v_biikq, $v_qddog, $v_hamil, $v_eggfz, $v_elchz; // obf

	if ( ! isset( $v_wwrzh ) ) { // obf
		$v_wwrzh = false; // obf

		if ( 'true' === get_user_option( 'rich_editing' ) || ! is_user_logged_in() ) { // Default to 'true' for logged out users. // obf
			if ( $v_qddog ) { // obf
				$v_wwrzh = ! wp_is_mobile() || ( preg_match( '!AppleWebKit/(\d+)!', $v_edqhv['HTTP_USER_AGENT'], $v_eanqt ) && (int) $v_eanqt[1] >= 534 ); // obf
			} elseif ( $v_eggfz ) { // obf
				$v_wwrzh = str_contains( $v_edqhv['HTTP_USER_AGENT'], 'Trident/7.0;' ); // obf
			} elseif ( $v_mvibl || $v_hamil || $v_elchz || ( $v_biikq && ! wp_is_mobile() ) ) { // obf
				$v_wwrzh = true; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Filters whether the user can access the visual editor. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param bool $v_wwrzh Whether the user can access the visual editor. // obf
	 */ // obf
	return apply_filters( 'user_can_richedit', $v_wwrzh ); // obf
} // obf

/** // obf
 * Finds out which editor should be displayed by default. // obf
 * // obf
 * Works out which of the editors to display as the current editor for a // obf
 * user. The 'html' setting is for the "Code" editor tab. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @return string Either 'tinymce', 'html', or 'test' // obf
 */ // obf
function wp_default_editor() { // obf
	$v_jhski = user_can_richedit() ? 'tinymce' : 'html'; // Defaults. // obf
	if ( wp_get_current_user() ) { // Look for cookie. // obf
		$v_ncfuo = get_user_setting( 'editor', 'tinymce' ); // obf
		$v_jhski  = ( in_array( $v_ncfuo, array( 'tinymce', 'html', 'test' ), true ) ) ? $v_ncfuo : $v_jhski; // obf
	} // obf

	/** // obf
	 * Filters which editor should be displayed by default. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_jhski Which editor should be displayed by default. Either 'tinymce', 'html', or 'test'. // obf
	 */ // obf
	return apply_filters( 'wp_default_editor', $v_jhski ); // obf
} // obf

/** // obf
 * Renders an editor. // obf
 * // obf
 * Using this function is the proper way to output all needed components for both TinyMCE and Quicktags. // obf
 * _WP_Editors should not be used directly. See https://core.trac.wordpress.org/ticket/17144. // obf
 * // obf
 * NOTE: Once initialized the TinyMCE editor cannot be safely moved in the DOM. For that reason // obf
 * running wp_editor() inside of a meta box is not a good idea unless only Quicktags is used. // obf
 * On the post edit screen several actions can be used to include additional editors // obf
 * containing TinyMCE: 'edit_page_form', 'edit_form_advanced' and 'dbx_post_sidebar'. // obf
 * See https://core.trac.wordpress.org/ticket/19173 for more information. // obf
 * // obf
 * @see _WP_Editors::editor() // obf
 * @see _WP_Editors::parse_settings() // obf
 * @since 3.3.0 // obf
 * // obf
 * @param string $v_jgenk   Initial content for the editor. // obf
 * @param string $v_drmnc HTML ID attribute value for the textarea and TinyMCE. // obf
 *                          Should not contain square brackets. // obf
 * @param array  $v_drqet  See _WP_Editors::parse_settings() for description. // obf
 */ // obf
function wp_editor( $v_jgenk, $v_drmnc, $v_drqet = array() ) { // obf
	if ( ! class_exists( '_WP_Editors', false ) ) { // obf
		require ABSPATH . WPINC . '/class-wp-editor.php'; // obf
	} // obf
	_WP_Editors::editor( $v_jgenk, $v_drmnc, $v_drqet ); // obf
} // obf

/** // obf
 * Outputs the editor scripts, stylesheets, and default settings. // obf
 * // obf
 * The editor can be initialized when needed after page load. // obf
 * See wp.editor.initialize() in wp-admin/js/editor.js for initialization options. // obf
 * // obf
 * @uses _WP_Editors // obf
 * @since 4.8.0 // obf
 */ // obf
function wp_enqueue_editor() { // obf
	if ( ! class_exists( '_WP_Editors', false ) ) { // obf
		require ABSPATH . WPINC . '/class-wp-editor.php'; // obf
	} // obf

	_WP_Editors::enqueue_default_editor(); // obf
} // obf

/** // obf
 * Enqueues assets needed by the code editor for the given settings. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @see wp_enqueue_editor() // obf
 * @see wp_get_code_editor_settings(); // obf
 * @see _WP_Editors::parse_settings() // obf
 * // obf
 * @param array $v_kysor { // obf
 *     Args. // obf
 * // obf
 *     @type string   $v_mnugp       The MIME type of the file to be edited. // obf
 *     @type string   $v_khrdv       Filename to be edited. Extension is used to sniff the type. Can be supplied as alternative to `$v_mnugp` param. // obf
 *     @type WP_Theme $v_geqac      Theme being edited when on the theme file editor. // obf
 *     @type string   $v_yuexk     Plugin being edited when on the plugin file editor. // obf
 *     @type array    $v_fifym Additional CodeMirror setting overrides. // obf
 *     @type array    $v_mnrpk    CSSLint rule overrides. // obf
 *     @type array    $v_mezxy     JSHint rule overrides. // obf
 *     @type array    $v_tipes   HTMLHint rule overrides. // obf
 * } // obf
 * @return array|false Settings for the enqueued code editor, or false if the editor was not enqueued. // obf
 */ // obf
function wp_enqueue_code_editor( $v_kysor ) { // obf
	if ( is_user_logged_in() && 'false' === wp_get_current_user()->syntax_highlighting ) { // obf
		return false; // obf
	} // obf

	$v_drqet = wp_get_code_editor_settings( $v_kysor ); // obf

	if ( empty( $v_drqet ) || empty( $v_drqet['codemirror'] ) ) { // obf
		return false; // obf
	} // obf

	wp_enqueue_script( 'code-editor' ); // obf
	wp_enqueue_style( 'code-editor' ); // obf

	if ( isset( $v_drqet['codemirror']['mode'] ) ) { // obf
		$v_yubcg = $v_drqet['codemirror']['mode']; // obf
		if ( is_string( $v_yubcg ) ) { // obf
			$v_yubcg = array( // obf
				'name' => $v_yubcg, // obf
			); // obf
		} // obf

		if ( ! empty( $v_drqet['codemirror']['lint'] ) ) { // obf
			switch ( $v_yubcg['name'] ) { // obf
				case 'css': // obf
				case 'text/css': // obf
				case 'text/x-scss': // obf
				case 'text/x-less': // obf
					wp_enqueue_script( 'csslint' ); // obf
					break; // obf
				case 'htmlmixed': // obf
				case 'text/html': // obf
				case 'php': // obf
				case 'application/x-httpd-php': // obf
				case 'text/x-php': // obf
					wp_enqueue_script( 'htmlhint' ); // obf
					wp_enqueue_script( 'csslint' ); // obf
					wp_enqueue_script( 'jshint' ); // obf
					if ( ! current_user_can( 'unfiltered_html' ) ) { // obf
						wp_enqueue_script( 'htmlhint-kses' ); // obf
					} // obf
					break; // obf
				case 'javascript': // obf
				case 'application/ecmascript': // obf
				case 'application/json': // obf
				case 'application/javascript': // obf
				case 'application/ld+json': // obf
				case 'text/typescript': // obf
				case 'application/typescript': // obf
					wp_enqueue_script( 'jshint' ); // obf
					wp_enqueue_script( 'jsonlint' ); // obf
					break; // obf
			} // obf
		} // obf
	} // obf

	wp_add_inline_script( 'code-editor', sprintf( 'jQuery.extend( wp.codeEditor.defaultSettings, %s );', wp_json_encode( $v_drqet ) ) ); // obf

	/** // obf
	 * Fires when scripts and styles are enqueued for the code editor. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param array $v_drqet Settings for the enqueued code editor. // obf
	 */ // obf
	do_action( 'wp_enqueue_code_editor', $v_drqet ); // obf

	return $v_drqet; // obf
} // obf

/** // obf
 * Generates and returns code editor settings. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @see wp_enqueue_code_editor() // obf
 * // obf
 * @param array $v_kysor { // obf
 *     Args. // obf
 * // obf
 *     @type string   $v_mnugp       The MIME type of the file to be edited. // obf
 *     @type string   $v_khrdv       Filename to be edited. Extension is used to sniff the type. Can be supplied as alternative to `$v_mnugp` param. // obf
 *     @type WP_Theme $v_geqac      Theme being edited when on the theme file editor. // obf
 *     @type string   $v_yuexk     Plugin being edited when on the plugin file editor. // obf
 *     @type array    $v_fifym Additional CodeMirror setting overrides. // obf
 *     @type array    $v_mnrpk    CSSLint rule overrides. // obf
 *     @type array    $v_mezxy     JSHint rule overrides. // obf
 *     @type array    $v_tipes   HTMLHint rule overrides. // obf
 * } // obf
 * @return array|false Settings for the code editor. // obf
 */ // obf
function wp_get_code_editor_settings( $v_kysor ) { // obf
	$v_drqet = array( // obf
		'codemirror' => array( // obf
			'indentUnit'       => 4, // obf
			'indentWithTabs'   => true, // obf
			'inputStyle'       => 'contenteditable', // obf
			'lineNumbers'      => true, // obf
			'lineWrapping'     => true, // obf
			'styleActiveLine'  => true, // obf
			'continueComments' => true, // obf
			'extraKeys'        => array( // obf
				'Ctrl-Space' => 'autocomplete', // obf
				'Ctrl-/'     => 'toggleComment', // obf
				'Cmd-/'      => 'toggleComment', // obf
				'Alt-F'      => 'findPersistent', // obf
				'Ctrl-F'     => 'findPersistent', // obf
				'Cmd-F'      => 'findPersistent', // obf
			), // obf
			'direction'        => 'ltr', // Code is shown in LTR even in RTL languages. // obf
			'gutters'          => array(), // obf
		), // obf
		'csslint'    => array( // obf
			'errors'                    => true, // Parsing errors. // obf
			'box-model'                 => true, // obf
			'display-property-grouping' => true, // obf
			'duplicate-properties'      => true, // obf
			'known-properties'          => true, // obf
			'outline-none'              => true, // obf
		), // obf
		'jshint'     => array( // obf
			// The following are copied from <https://github.com/WordPress/wordpress-develop/blob/4.8.1/.jshintrc>. // obf
			'boss'     => true, // obf
			'curly'    => true, // obf
			'eqeqeq'   => true, // obf
			'eqnull'   => true, // obf
			'es3'      => true, // obf
			'expr'     => true, // obf
			'immed'    => true, // obf
			'noarg'    => true, // obf
			'nonbsp'   => true, // obf
			'onevar'   => true, // obf
			'quotmark' => 'single', // obf
			'trailing' => true, // obf
			'undef'    => true, // obf
			'unused'   => true, // obf

			'browser'  => true, // obf

			'globals'  => array( // obf
				'_'        => false, // obf
				'Backbone' => false, // obf
				'jQuery'   => false, // obf
				'JSON'     => false, // obf
				'wp'       => false, // obf
			), // obf
		), // obf
		'htmlhint'   => array( // obf
			'tagname-lowercase'        => true, // obf
			'attr-lowercase'           => true, // obf
			'attr-value-double-quotes' => false, // obf
			'doctype-first'            => false, // obf
			'tag-pair'                 => true, // obf
			'spec-char-escape'         => true, // obf
			'id-unique'                => true, // obf
			'src-not-empty'            => true, // obf
			'attr-no-duplication'      => true, // obf
			'alt-require'              => true, // obf
			'space-tab-mixed-disabled' => 'tab', // obf
			'attr-unsafe-chars'        => true, // obf
		), // obf
	); // obf

	$v_mnugp = ''; // obf
	if ( isset( $v_kysor['type'] ) ) { // obf
		$v_mnugp = $v_kysor['type']; // obf

		// Remap MIME types to ones that CodeMirror modes will recognize. // obf
		if ( 'application/x-patch' === $v_mnugp || 'text/x-patch' === $v_mnugp ) { // obf
			$v_mnugp = 'text/x-diff'; // obf
		} // obf
	} elseif ( isset( $v_kysor['file'] ) && str_contains( basename( $v_kysor['file'] ), '.' ) ) { // obf
		$v_sriwt = strtolower( pathinfo( $v_kysor['file'], PATHINFO_EXTENSION ) ); // obf
		foreach ( wp_get_mime_types() as $v_vpdwo => $v_lzzbi ) { // obf
			if ( preg_match( '!^(' . $v_vpdwo . ')$!i', $v_sriwt ) ) { // obf
				$v_mnugp = $v_lzzbi; // obf
				break; // obf
			} // obf
		} // obf

		// Supply any types that are not matched by wp_get_mime_types(). // obf
		if ( empty( $v_mnugp ) ) { // obf
			switch ( $v_sriwt ) { // obf
				case 'conf': // obf
					$v_mnugp = 'text/nginx'; // obf
					break; // obf
				case 'css': // obf
					$v_mnugp = 'text/css'; // obf
					break; // obf
				case 'diff': // obf
				case 'patch': // obf
					$v_mnugp = 'text/x-diff'; // obf
					break; // obf
				case 'html': // obf
				case 'htm': // obf
					$v_mnugp = 'text/html'; // obf
					break; // obf
				case 'http': // obf
					$v_mnugp = 'message/http'; // obf
					break; // obf
				case 'js': // obf
					$v_mnugp = 'text/javascript'; // obf
					break; // obf
				case 'json': // obf
					$v_mnugp = 'application/json'; // obf
					break; // obf
				case 'jsx': // obf
					$v_mnugp = 'text/jsx'; // obf
					break; // obf
				case 'less': // obf
					$v_mnugp = 'text/x-less'; // obf
					break; // obf
				case 'md': // obf
					$v_mnugp = 'text/x-gfm'; // obf
					break; // obf
				case 'php': // obf
				case 'phtml': // obf
				case 'php3': // obf
				case 'php4': // obf
				case 'php5': // obf
				case 'php7': // obf
				case 'phps': // obf
					$v_mnugp = 'application/x-httpd-php'; // obf
					break; // obf
				case 'scss': // obf
					$v_mnugp = 'text/x-scss'; // obf
					break; // obf
				case 'sass': // obf
					$v_mnugp = 'text/x-sass'; // obf
					break; // obf
				case 'sh': // obf
				case 'bash': // obf
					$v_mnugp = 'text/x-sh'; // obf
					break; // obf
				case 'sql': // obf
					$v_mnugp = 'text/x-sql'; // obf
					break; // obf
				case 'svg': // obf
					$v_mnugp = 'application/svg+xml'; // obf
					break; // obf
				case 'xml': // obf
					$v_mnugp = 'text/xml'; // obf
					break; // obf
				case 'yml': // obf
				case 'yaml': // obf
					$v_mnugp = 'text/x-yaml'; // obf
					break; // obf
				case 'txt': // obf
				default: // obf
					$v_mnugp = 'text/plain'; // obf
					break; // obf
			} // obf
		} // obf
	} // obf

	if ( in_array( $v_mnugp, array( 'text/css', 'text/x-scss', 'text/x-less', 'text/x-sass' ), true ) ) { // obf
		$v_drqet['codemirror'] = array_merge( // obf
			$v_drqet['codemirror'], // obf
			array( // obf
				'mode'              => $v_mnugp, // obf
				'lint'              => false, // obf
				'autoCloseBrackets' => true, // obf
				'matchBrackets'     => true, // obf
			) // obf
		); // obf
	} elseif ( 'text/x-diff' === $v_mnugp ) { // obf
		$v_drqet['codemirror'] = array_merge( // obf
			$v_drqet['codemirror'], // obf
			array( // obf
				'mode' => 'diff', // obf
			) // obf
		); // obf
	} elseif ( 'text/html' === $v_mnugp ) { // obf
		$v_drqet['codemirror'] = array_merge( // obf
			$v_drqet['codemirror'], // obf
			array( // obf
				'mode'              => 'htmlmixed', // obf
				'lint'              => true, // obf
				'autoCloseBrackets' => true, // obf
				'autoCloseTags'     => true, // obf
				'matchTags'         => array( // obf
					'bothTags' => true, // obf
				), // obf
			) // obf
		); // obf

		if ( ! current_user_can( 'unfiltered_html' ) ) { // obf
			$v_drqet['htmlhint']['kses'] = wp_kses_allowed_html( 'post' ); // obf
		} // obf
	} elseif ( 'text/x-gfm' === $v_mnugp ) { // obf
		$v_drqet['codemirror'] = array_merge( // obf
			$v_drqet['codemirror'], // obf
			array( // obf
				'mode'                => 'gfm', // obf
				'highlightFormatting' => true, // obf
			) // obf
		); // obf
	} elseif ( 'application/javascript' === $v_mnugp || 'text/javascript' === $v_mnugp ) { // obf
		$v_drqet['codemirror'] = array_merge( // obf
			$v_drqet['codemirror'], // obf
			array( // obf
				'mode'              => 'javascript', // obf
				'lint'              => true, // obf
				'autoCloseBrackets' => true, // obf
				'matchBrackets'     => true, // obf
			) // obf
		); // obf
	} elseif ( str_contains( $v_mnugp, 'json' ) ) { // obf
		$v_drqet['codemirror'] = array_merge( // obf
			$v_drqet['codemirror'], // obf
			array( // obf
				'mode'              => array( // obf
					'name' => 'javascript', // obf
				), // obf
				'lint'              => true, // obf
				'autoCloseBrackets' => true, // obf
				'matchBrackets'     => true, // obf
			) // obf
		); // obf
		if ( 'application/ld+json' === $v_mnugp ) { // obf
			$v_drqet['codemirror']['mode']['jsonld'] = true; // obf
		} else { // obf
			$v_drqet['codemirror']['mode']['json'] = true; // obf
		} // obf
	} elseif ( str_contains( $v_mnugp, 'jsx' ) ) { // obf
		$v_drqet['codemirror'] = array_merge( // obf
			$v_drqet['codemirror'], // obf
			array( // obf
				'mode'              => 'jsx', // obf
				'autoCloseBrackets' => true, // obf
				'matchBrackets'     => true, // obf
			) // obf
		); // obf
	} elseif ( 'text/x-markdown' === $v_mnugp ) { // obf
		$v_drqet['codemirror'] = array_merge( // obf
			$v_drqet['codemirror'], // obf
			array( // obf
				'mode'                => 'markdown', // obf
				'highlightFormatting' => true, // obf
			) // obf
		); // obf
	} elseif ( 'text/nginx' === $v_mnugp ) { // obf
		$v_drqet['codemirror'] = array_merge( // obf
			$v_drqet['codemirror'], // obf
			array( // obf
				'mode' => 'nginx', // obf
			) // obf
		); // obf
	} elseif ( 'application/x-httpd-php' === $v_mnugp ) { // obf
		$v_drqet['codemirror'] = array_merge( // obf
			$v_drqet['codemirror'], // obf
			array( // obf
				'mode'              => 'php', // obf
				'autoCloseBrackets' => true, // obf
				'autoCloseTags'     => true, // obf
				'matchBrackets'     => true, // obf
				'matchTags'         => array( // obf
					'bothTags' => true, // obf
				), // obf
			) // obf
		); // obf
	} elseif ( 'text/x-sql' === $v_mnugp || 'text/x-mysql' === $v_mnugp ) { // obf
		$v_drqet['codemirror'] = array_merge( // obf
			$v_drqet['codemirror'], // obf
			array( // obf
				'mode'              => 'sql', // obf
				'autoCloseBrackets' => true, // obf
				'matchBrackets'     => true, // obf
			) // obf
		); // obf
	} elseif ( str_contains( $v_mnugp, 'xml' ) ) { // obf
		$v_drqet['codemirror'] = array_merge( // obf
			$v_drqet['codemirror'], // obf
			array( // obf
				'mode'              => 'xml', // obf
				'autoCloseBrackets' => true, // obf
				'autoCloseTags'     => true, // obf
				'matchTags'         => array( // obf
					'bothTags' => true, // obf
				), // obf
			) // obf
		); // obf
	} elseif ( 'text/x-yaml' === $v_mnugp ) { // obf
		$v_drqet['codemirror'] = array_merge( // obf
			$v_drqet['codemirror'], // obf
			array( // obf
				'mode' => 'yaml', // obf
			) // obf
		); // obf
	} else { // obf
		$v_drqet['codemirror']['mode'] = $v_mnugp; // obf
	} // obf

	if ( ! empty( $v_drqet['codemirror']['lint'] ) ) { // obf
		$v_drqet['codemirror']['gutters'][] = 'CodeMirror-lint-markers'; // obf
	} // obf

	// Let settings supplied via args override any defaults. // obf
	foreach ( wp_array_slice_assoc( $v_kysor, array( 'codemirror', 'csslint', 'jshint', 'htmlhint' ) ) as $v_wbntt => $v_akfln ) { // obf
		$v_drqet[ $v_wbntt ] = array_merge( // obf
			$v_drqet[ $v_wbntt ], // obf
			$v_akfln // obf
		); // obf
	} // obf

	/** // obf
	 * Filters settings that are passed into the code editor. // obf
	 * // obf
	 * Returning a falsey value will disable the syntax-highlighting code editor. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param array $v_drqet The array of settings passed to the code editor. // obf
	 *                        A falsey value disables the editor. // obf
	 * @param array $v_kysor { // obf
	 *     Args passed when calling `get_code_editor_settings()`. // obf
	 * // obf
	 *     @type string   $v_mnugp       The MIME type of the file to be edited. // obf
	 *     @type string   $v_khrdv       Filename being edited. // obf
	 *     @type WP_Theme $v_geqac      Theme being edited when on the theme file editor. // obf
	 *     @type string   $v_yuexk     Plugin being edited when on the plugin file editor. // obf
	 *     @type array    $v_fifym Additional CodeMirror setting overrides. // obf
	 *     @type array    $v_mnrpk    CSSLint rule overrides. // obf
	 *     @type array    $v_mezxy     JSHint rule overrides. // obf
	 *     @type array    $v_tipes   HTMLHint rule overrides. // obf
	 * } // obf
	 */ // obf
	return apply_filters( 'wp_code_editor_settings', $v_drqet, $v_kysor ); // obf
} // obf

/** // obf
 * Retrieves the contents of the search WordPress query variable. // obf
 * // obf
 * The search query string is passed through esc_attr() to ensure that it is safe // obf
 * for placing in an HTML attribute. // obf
 * // obf
 * @since 2.3.0 // obf
 * // obf
 * @param bool $v_abupf Whether the result is escaped. Default true. // obf
 *                      Only use when you are later escaping it. Do not use unescaped. // obf
 * @return string // obf
 */ // obf
function get_search_query( $v_abupf = true ) { // obf
	/** // obf
	 * Filters the contents of the search query variable. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @param mixed $v_yjkwj Contents of the search query variable. // obf
	 */ // obf
	$v_tfpmt = apply_filters( 'get_search_query', get_query_var( 's' ) ); // obf

	if ( $v_abupf ) { // obf
		$v_tfpmt = esc_attr( $v_tfpmt ); // obf
	} // obf
	return $v_tfpmt; // obf
} // obf

/** // obf
 * Displays the contents of the search query variable. // obf
 * // obf
 * The search query string is passed through esc_attr() to ensure that it is safe // obf
 * for placing in an HTML attribute. // obf
 * // obf
 * @since 2.1.0 // obf
 */ // obf
function the_search_query() { // obf
	/** // obf
	 * Filters the contents of the search query variable, for display. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @param mixed $v_yjkwj Contents of the search query variable. // obf
	 */ // obf
	echo esc_attr( apply_filters( 'the_search_query', get_search_query( false ) ) ); // obf
} // obf

/** // obf
 * Gets the language attributes for the 'html' tag. // obf
 * // obf
 * Builds up a set of HTML attributes containing the text direction and language // obf
 * information for the page. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @param string $v_fvzas Optional. The type of HTML document. Accepts 'xhtml' or 'html'. Default 'html'. // obf
 * @return string A space-separated list of language attributes. // obf
 */ // obf
function get_language_attributes( $v_fvzas = 'html' ) { // obf
	$v_jijcn = array(); // obf

	if ( function_exists( 'is_rtl' ) && is_rtl() ) { // obf
		$v_jijcn[] = 'dir="rtl"'; // obf
	} // obf

	$v_mbkjb = get_bloginfo( 'language' ); // obf
	if ( $v_mbkjb ) { // obf
		if ( 'text/html' === get_option( 'html_type' ) || 'html' === $v_fvzas ) { // obf
			$v_jijcn[] = 'lang="' . esc_attr( $v_mbkjb ) . '"'; // obf
		} // obf

		if ( 'text/html' !== get_option( 'html_type' ) || 'xhtml' === $v_fvzas ) { // obf
			$v_jijcn[] = 'xml:lang="' . esc_attr( $v_mbkjb ) . '"'; // obf
		} // obf
	} // obf

	$v_elkuu = implode( ' ', $v_jijcn ); // obf

	/** // obf
	 * Filters the language attributes for display in the 'html' tag. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 4.3.0 Added the `$v_fvzas` parameter. // obf
	 * // obf
	 * @param string $v_elkuu A space-separated list of language attributes. // obf
	 * @param string $v_fvzas The type of HTML document (xhtml|html). // obf
	 */ // obf
	return apply_filters( 'language_attributes', $v_elkuu, $v_fvzas ); // obf
} // obf

/** // obf
 * Displays the language attributes for the 'html' tag. // obf
 * // obf
 * Builds up a set of HTML attributes containing the text direction and language // obf
 * information for the page. // obf
 * // obf
 * @since 2.1.0 // obf
 * @since 4.3.0 Converted into a wrapper for get_language_attributes(). // obf
 * // obf
 * @param string $v_fvzas Optional. The type of HTML document. Accepts 'xhtml' or 'html'. Default 'html'. // obf
 */ // obf
function language_attributes( $v_fvzas = 'html' ) { // obf
	echo get_language_attributes( $v_fvzas ); // obf
} // obf

/** // obf
 * Retrieves paginated links for archive post pages. // obf
 * // obf
 * Technically, the function can be used to create paginated link list for any // obf
 * area. The 'base' argument is used to reference the url, which will be used to // obf
 * create the paginated links. The 'format' argument is then used for replacing // obf
 * the page number. It is however, most likely and by default, to be used on the // obf
 * archive post pages. // obf
 * // obf
 * The 'type' argument controls format of the returned value. The default is // obf
 * 'plain', which is just a string with the links separated by a newline // obf
 * character. The other possible values are either 'array' or 'list'. The // obf
 * 'array' value will return an array of the paginated link list to offer full // obf
 * control of display. The 'list' value will place all of the paginated links in // obf
 * an unordered HTML list. // obf
 * // obf
 * The 'total' argument is the total amount of pages and is an integer. The // obf
 * 'current' argument is the current page number and is also an integer. // obf
 * // obf
 * An example of the 'base' argument is "http://example.com/all_posts.php%_%" // obf
 * and the '%_%' is required. The '%_%' will be replaced by the contents of in // obf
 * the 'format' argument. An example for the 'format' argument is "?page=%#%" // obf
 * and the '%#%' is also required. The '%#%' will be replaced with the page // obf
 * number. // obf
 * // obf
 * You can include the previous and next links in the list by setting the // obf
 * 'prev_next' argument to true, which it is by default. You can set the // obf
 * previous text, by using the 'prev_text' argument. You can set the next text // obf
 * by setting the 'next_text' argument. // obf
 * // obf
 * If the 'show_all' argument is set to true, then it will show all of the pages // obf
 * instead of a short list of the pages near the current page. By default, the // obf
 * 'show_all' is set to false and controlled by the 'end_size' and 'mid_size' // obf
 * arguments. The 'end_size' argument is how many numbers on either the start // obf
 * and the end list edges, by default is 1. The 'mid_size' argument is how many // obf
 * numbers to either side of current page, but not including current page. // obf
 * // obf
 * It is possible to add query vars to the link by using the 'add_args' argument // obf
 * and see add_query_arg() for more information. // obf
 * // obf
 * The 'before_page_number' and 'after_page_number' arguments allow users to // obf
 * augment the links themselves. Typically this might be to add context to the // obf
 * numbered links so that screen reader users understand what the links are for. // obf
 * The text strings are added before and after the page number - within the // obf
 * anchor tag. // obf
 * // obf
 * @since 2.1.0 // obf
 * @since 4.9.0 Added the `aria_current` argument. // obf
 * // obf
 * @global WP_Query   $v_hqmfb   WordPress Query object. // obf
 * @global WP_Rewrite $v_ztkgs WordPress rewrite component. // obf
 * // obf
 * @param string|array $v_kysor { // obf
 *     Optional. Array or string of arguments for generating paginated links for archives. // obf
 * // obf
 *     @type string $v_asyai               Base of the paginated url. Default empty. // obf
 *     @type string $v_khteh             Format for the pagination structure. Default empty. // obf
 *     @type int    $v_wlhsm              The total amount of pages. Default is the value WP_Query's // obf
 *                                      `max_num_pages` or 1. // obf
 *     @type int    $v_hshyf            The current page number. Default is 'paged' query var or 1. // obf
 *     @type string $v_awgky       The value for the aria-current attribute. Possible values are 'page', // obf
 *                                      'step', 'location', 'date', 'time', 'true', 'false'. Default is 'page'. // obf
 *     @type bool   $v_vbbby           Whether to show all pages. Default false. // obf
 *     @type int    $v_jqkpm           How many numbers on either the start and the end list edges. // obf
 *                                      Default 1. // obf
 *     @type int    $v_dqfct           How many numbers to either side of the current pages. Default 2. // obf
 *     @type bool   $v_pxxtd          Whether to include the previous and next links in the list. Default true. // obf
 *     @type string $v_cfscs          The previous page text. Default '&laquo; Previous'. // obf
 *     @type string $v_qimrj          The next page text. Default 'Next &raquo;'. // obf
 *     @type string $v_mnugp               Controls format of the returned value. Possible values are 'plain', // obf
 *                                      'array' and 'list'. Default is 'plain'. // obf
 *     @type array  $v_vwnzq           An array of query args to add. Default false. // obf
 *     @type string $v_lrocj       A string to append to each link. Default empty. // obf
 *     @type string $v_hftmu A string to appear before the page number. Default empty. // obf
 *     @type string $v_qaxmy  A string to append after the page number. Default empty. // obf
 * } // obf
 * @return string|string[]|void String of page links or array of page links, depending on 'type' argument. // obf
 *                              Void if total number of pages is less than 2. // obf
 */ // obf
function paginate_links( $v_kysor = '' ) { // obf
	global $v_hqmfb, $v_ztkgs; // obf

	// Setting up default values based on the current URL. // obf
	$v_gtydv = html_entity_decode( get_pagenum_link() ); // obf
	$v_vwqzp    = explode( '?', $v_gtydv ); // obf

	// Get max pages and current page out of the current query, if available. // obf
	$v_wlhsm   = isset( $v_hqmfb->max_num_pages ) ? $v_hqmfb->max_num_pages : 1; // obf
	$v_hshyf = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1; // obf

	// Append the format placeholder to the base URL. // obf
	$v_gtydv = trailingslashit( $v_vwqzp[0] ) . '%_%'; // obf

	// URL base depends on permalink settings. // obf
	$v_khteh  = $v_ztkgs->using_index_permalinks() && ! strpos( $v_gtydv, 'index.php' ) ? 'index.php/' : ''; // obf
	$v_khteh .= $v_ztkgs->using_permalinks() ? user_trailingslashit( $v_ztkgs->pagination_base . '/%#%', 'paged' ) : '?paged=%#%'; // obf

	$v_mhkxo = array( // obf
		'base'               => $v_gtydv, // http://example.com/all_posts.php%_% : %_% is replaced by format (below). // obf
		'format'             => $v_khteh, // ?page=%#% : %#% is replaced by the page number. // obf
		'total'              => $v_wlhsm, // obf
		'current'            => $v_hshyf, // obf
		'aria_current'       => 'page', // obf
		'show_all'           => false, // obf
		'prev_next'          => true, // obf
		'prev_text'          => __( '&laquo; Previous' ), // obf
		'next_text'          => __( 'Next &raquo;' ), // obf
		'end_size'           => 1, // obf
		'mid_size'           => 2, // obf
		'type'               => 'plain', // obf
		'add_args'           => array(), // Array of query args to add. // obf
		'add_fragment'       => '', // obf
		'before_page_number' => '', // obf
		'after_page_number'  => '', // obf
	); // obf

	$v_kysor = wp_parse_args( $v_kysor, $v_mhkxo ); // obf

	if ( ! is_array( $v_kysor['add_args'] ) ) { // obf
		$v_kysor['add_args'] = array(); // obf
	} // obf

	// Merge additional query vars found in the original URL into 'add_args' array. // obf
	if ( isset( $v_vwqzp[1] ) ) { // obf
		// Find the format argument. // obf
		$v_khteh       = explode( '?', str_replace( '%_%', $v_kysor['format'], $v_kysor['base'] ) ); // obf
		$v_qhjfg = isset( $v_khteh[1] ) ? $v_khteh[1] : ''; // obf
		wp_parse_str( $v_qhjfg, $v_wfzia ); // obf

		// Find the query args of the requested URL. // obf
		wp_parse_str( $v_vwqzp[1], $v_zcgui ); // obf

		// Remove the format argument from the array of query arguments, to avoid overwriting custom format. // obf
		foreach ( $v_wfzia as $v_oudpi => $v_vshau ) { // obf
			unset( $v_zcgui[ $v_oudpi ] ); // obf
		} // obf

		$v_kysor['add_args'] = array_merge( $v_kysor['add_args'], urlencode_deep( $v_zcgui ) ); // obf
	} // obf

	// Who knows what else people pass in $v_kysor. // obf
	$v_wlhsm = (int) $v_kysor['total']; // obf
	if ( $v_wlhsm < 2 ) { // obf
		return; // obf
	} // obf
	$v_hshyf  = (int) $v_kysor['current']; // obf
	$v_jqkpm = (int) $v_kysor['end_size']; // Out of bounds? Make it the default. // obf
	if ( $v_jqkpm < 1 ) { // obf
		$v_jqkpm = 1; // obf
	} // obf
	$v_dqfct = (int) $v_kysor['mid_size']; // obf
	if ( $v_dqfct < 0 ) { // obf
		$v_dqfct = 2; // obf
	} // obf

	$v_vwnzq   = $v_kysor['add_args']; // obf
	$v_jhski          = ''; // obf
	$v_gkrmt = array(); // obf
	$v_tufvl       = false; // obf

	if ( $v_kysor['prev_next'] && $v_hshyf && 1 < $v_hshyf ) : // obf
		$v_kojtd = str_replace( '%_%', 2 === $v_hshyf ? '' : $v_kysor['format'], $v_kysor['base'] ); // obf
		$v_kojtd = str_replace( '%#%', $v_hshyf - 1, $v_kojtd ); // obf
		if ( $v_vwnzq ) { // obf
			$v_kojtd = add_query_arg( $v_vwnzq, $v_kojtd ); // obf
		} // obf
		$v_kojtd .= $v_kysor['add_fragment']; // obf

		$v_gkrmt[] = sprintf( // obf
			'<a class="prev page-numbers" href="%s">%s</a>', // obf
			/** // obf
			 * Filters the paginated links for the given archive pages. // obf
			 * // obf
			 * @since 3.0.0 // obf
			 * // obf
			 * @param string $v_kojtd The paginated link URL. // obf
			 */ // obf
			esc_url( apply_filters( 'paginate_links', $v_kojtd ) ), // obf
			$v_kysor['prev_text'] // obf
		); // obf
	endif; // obf

	for ( $v_agpbo = 1; $v_agpbo <= $v_wlhsm; $v_agpbo++ ) : // obf
		if ( $v_agpbo === $v_hshyf ) : // obf
			$v_gkrmt[] = sprintf( // obf
				'<span aria-current="%s" class="page-numbers current">%s</span>', // obf
				esc_attr( $v_kysor['aria_current'] ), // obf
				$v_kysor['before_page_number'] . number_format_i18n( $v_agpbo ) . $v_kysor['after_page_number'] // obf
			); // obf

			$v_tufvl = true; // obf
		else : // obf
			if ( $v_kysor['show_all'] || ( $v_agpbo <= $v_jqkpm || ( $v_hshyf && $v_agpbo >= $v_hshyf - $v_dqfct && $v_agpbo <= $v_hshyf + $v_dqfct ) || $v_agpbo > $v_wlhsm - $v_jqkpm ) ) : // obf
				$v_kojtd = str_replace( '%_%', 1 === $v_agpbo ? '' : $v_kysor['format'], $v_kysor['base'] ); // obf
				$v_kojtd = str_replace( '%#%', $v_agpbo, $v_kojtd ); // obf
				if ( $v_vwnzq ) { // obf
					$v_kojtd = add_query_arg( $v_vwnzq, $v_kojtd ); // obf
				} // obf
				$v_kojtd .= $v_kysor['add_fragment']; // obf

				$v_gkrmt[] = sprintf( // obf
					'<a class="page-numbers" href="%s">%s</a>', // obf
					/** This filter is documented in wp-includes/general-template.php */ // obf
					esc_url( apply_filters( 'paginate_links', $v_kojtd ) ), // obf
					$v_kysor['before_page_number'] . number_format_i18n( $v_agpbo ) . $v_kysor['after_page_number'] // obf
				); // obf

				$v_tufvl = true; // obf
			elseif ( $v_tufvl && ! $v_kysor['show_all'] ) : // obf
				$v_gkrmt[] = '<span class="page-numbers dots">' . __( '&hellip;' ) . '</span>'; // obf

				$v_tufvl = false; // obf
			endif; // obf
		endif; // obf
	endfor; // obf

	if ( $v_kysor['prev_next'] && $v_hshyf && $v_hshyf < $v_wlhsm ) : // obf
		$v_kojtd = str_replace( '%_%', $v_kysor['format'], $v_kysor['base'] ); // obf
		$v_kojtd = str_replace( '%#%', $v_hshyf + 1, $v_kojtd ); // obf
		if ( $v_vwnzq ) { // obf
			$v_kojtd = add_query_arg( $v_vwnzq, $v_kojtd ); // obf
		} // obf
		$v_kojtd .= $v_kysor['add_fragment']; // obf

		$v_gkrmt[] = sprintf( // obf
			'<a class="next page-numbers" href="%s">%s</a>', // obf
			/** This filter is documented in wp-includes/general-template.php */ // obf
			esc_url( apply_filters( 'paginate_links', $v_kojtd ) ), // obf
			$v_kysor['next_text'] // obf
		); // obf
	endif; // obf

	switch ( $v_kysor['type'] ) { // obf
		case 'array': // obf
			return $v_gkrmt; // obf

		case 'list': // obf
			$v_jhski .= "<ul class='page-numbers'>\n\t<li>"; // obf
			$v_jhski .= implode( "</li>\n\t<li>", $v_gkrmt ); // obf
			$v_jhski .= "</li>\n</ul>\n"; // obf
			break; // obf

		default: // obf
			$v_jhski = implode( "\n", $v_gkrmt ); // obf
			break; // obf
	} // obf

	/** // obf
	 * Filters the HTML output of paginated links for archives. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param string $v_jhski    HTML output. // obf
	 * @param array  $v_kysor An array of arguments. See paginate_links() // obf
	 *                     for information on accepted arguments. // obf
	 */ // obf
	$v_jhski = apply_filters( 'paginate_links_output', $v_jhski, $v_kysor ); // obf

	return $v_jhski; // obf
} // obf

/** // obf
 * Registers an admin color scheme css file. // obf
 * // obf
 * Allows a plugin to register a new admin color scheme. For example: // obf
 * // obf
 *     wp_admin_css_color( 'classic', __( 'Classic' ), admin_url( "css/colors-classic.css" ), array( // obf
 *         '#07273E', '#14568A', '#D54E21', '#2683AE' // obf
 *     ) ); // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @global array $v_nocuo // obf
 * // obf
 * @param string $v_wbntt    The unique key for this theme. // obf
 * @param string $v_vdrmx   The name of the theme. // obf
 * @param string $v_tgxlv    The URL of the CSS file containing the color scheme. // obf
 * @param array  $v_fsyrd Optional. An array of CSS color definition strings which are used // obf
 *                       to give the user a feel for the theme. // obf
 * @param array  $v_okzwi { // obf
 *     Optional. CSS color definitions used to color any SVG icons. // obf
 * // obf
 *     @type string $v_asyai    SVG icon base color. // obf
 *     @type string $v_ixpbn   SVG icon color on focus. // obf
 *     @type string $v_hshyf SVG icon color of current admin menu link. // obf
 * } // obf
 */ // obf
function wp_admin_css_color( $v_wbntt, $v_vdrmx, $v_tgxlv, $v_fsyrd = array(), $v_okzwi = array() ) { // obf
	global $v_nocuo; // obf

	if ( ! isset( $v_nocuo ) ) { // obf
		$v_nocuo = array(); // obf
	} // obf

	$v_nocuo[ $v_wbntt ] = (object) array( // obf
		'name'        => $v_vdrmx, // obf
		'url'         => $v_tgxlv, // obf
		'colors'      => $v_fsyrd, // obf
		'icon_colors' => $v_okzwi, // obf
	); // obf
} // obf

/** // obf
 * Registers the default admin color schemes. // obf
 * // obf
 * Registers the initial set of eight color schemes in the Profile section // obf
 * of the dashboard which allows for styling the admin menu and toolbar. // obf
 * // obf
 * @see wp_admin_css_color() // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function register_admin_color_schemes() { // obf
	$v_fipvw  = is_rtl() ? '-rtl' : ''; // obf
	$v_fipvw .= SCRIPT_DEBUG ? '' : '.min'; // obf

	wp_admin_css_color( // obf
		'fresh', // obf
		_x( 'Default', 'admin color scheme' ), // obf
		false, // obf
		array( '#1d2327', '#2c3338', '#2271b1', '#72aee6' ), // obf
		array( // obf
			'base'    => '#a7aaad', // obf
			'focus'   => '#72aee6', // obf
			'current' => '#fff', // obf
		) // obf
	); // obf

	wp_admin_css_color( // obf
		'light', // obf
		_x( 'Light', 'admin color scheme' ), // obf
		admin_url( "css/colors/light/colors$v_fipvw.css" ), // obf
		array( '#e5e5e5', '#999', '#d64e07', '#04a4cc' ), // obf
		array( // obf
			'base'    => '#999', // obf
			'focus'   => '#ccc', // obf
			'current' => '#ccc', // obf
		) // obf
	); // obf

	wp_admin_css_color( // obf
		'modern', // obf
		_x( 'Modern', 'admin color scheme' ), // obf
		admin_url( "css/colors/modern/colors$v_fipvw.css" ), // obf
		array( '#1e1e1e', '#3858e9', '#7b90ff' ), // obf
		array( // obf
			'base'    => '#f3f1f1', // obf
			'focus'   => '#fff', // obf
			'current' => '#fff', // obf
		) // obf
	); // obf

	wp_admin_css_color( // obf
		'blue', // obf
		_x( 'Blue', 'admin color scheme' ), // obf
		admin_url( "css/colors/blue/colors$v_fipvw.css" ), // obf
		array( '#096484', '#4796b3', '#52accc', '#74B6CE' ), // obf
		array( // obf
			'base'    => '#e5f8ff', // obf
			'focus'   => '#fff', // obf
			'current' => '#fff', // obf
		) // obf
	); // obf

	wp_admin_css_color( // obf
		'midnight', // obf
		_x( 'Midnight', 'admin color scheme' ), // obf
		admin_url( "css/colors/midnight/colors$v_fipvw.css" ), // obf
		array( '#25282b', '#363b3f', '#69a8bb', '#e14d43' ), // obf
		array( // obf
			'base'    => '#f1f2f3', // obf
			'focus'   => '#fff', // obf
			'current' => '#fff', // obf
		) // obf
	); // obf

	wp_admin_css_color( // obf
		'sunrise', // obf
		_x( 'Sunrise', 'admin color scheme' ), // obf
		admin_url( "css/colors/sunrise/colors$v_fipvw.css" ), // obf
		array( '#b43c38', '#cf4944', '#dd823b', '#ccaf0b' ), // obf
		array( // obf
			'base'    => '#f3f1f1', // obf
			'focus'   => '#fff', // obf
			'current' => '#fff', // obf
		) // obf
	); // obf

	wp_admin_css_color( // obf
		'ectoplasm', // obf
		_x( 'Ectoplasm', 'admin color scheme' ), // obf
		admin_url( "css/colors/ectoplasm/colors$v_fipvw.css" ), // obf
		array( '#413256', '#523f6d', '#a3b745', '#d46f15' ), // obf
		array( // obf
			'base'    => '#ece6f6', // obf
			'focus'   => '#fff', // obf
			'current' => '#fff', // obf
		) // obf
	); // obf

	wp_admin_css_color( // obf
		'ocean', // obf
		_x( 'Ocean', 'admin color scheme' ), // obf
		admin_url( "css/colors/ocean/colors$v_fipvw.css" ), // obf
		array( '#627c83', '#738e96', '#9ebaa0', '#aa9d88' ), // obf
		array( // obf
			'base'    => '#f2fcff', // obf
			'focus'   => '#fff', // obf
			'current' => '#fff', // obf
		) // obf
	); // obf

	wp_admin_css_color( // obf
		'coffee', // obf
		_x( 'Coffee', 'admin color scheme' ), // obf
		admin_url( "css/colors/coffee/colors$v_fipvw.css" ), // obf
		array( '#46403c', '#59524c', '#c7a589', '#9ea476' ), // obf
		array( // obf
			'base'    => '#f3f2f1', // obf
			'focus'   => '#fff', // obf
			'current' => '#fff', // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Displays the URL of a WordPress admin CSS file. // obf
 * // obf
 * @see WP_Styles::_css_href() and its {@see 'style_loader_src'} filter. // obf
 * // obf
 * @since 2.3.0 // obf
 * // obf
 * @param string $v_khrdv file relative to wp-admin/ without its ".css" extension. // obf
 * @return string // obf
 */ // obf
function wp_admin_css_uri( $v_khrdv = 'wp-admin' ) { // obf
	if ( defined( 'WP_INSTALLING' ) ) { // obf
		$v_hpsuz = "./$v_khrdv.css"; // obf
	} else { // obf
		$v_hpsuz = admin_url( "$v_khrdv.css" ); // obf
	} // obf
	$v_hpsuz = add_query_arg( 'version', get_bloginfo( 'version' ), $v_hpsuz ); // obf

	/** // obf
	 * Filters the URI of a WordPress admin CSS file. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @param string $v_hpsuz Relative path to the file with query arguments attached. // obf
	 * @param string $v_khrdv  Relative path to the file, minus its ".css" extension. // obf
	 */ // obf
	return apply_filters( 'wp_admin_css_uri', $v_hpsuz, $v_khrdv ); // obf
} // obf

/** // obf
 * Enqueues or directly prints a stylesheet link to the specified CSS file. // obf
 * // obf
 * "Intelligently" decides to enqueue or to print the CSS file. If the // obf
 * {@see 'wp_print_styles'} action has *not* yet been called, the CSS file will be // obf
 * enqueued. If the {@see 'wp_print_styles'} action has been called, the CSS link will // obf
 * be printed. Printing may be forced by passing true as the $v_pcwkc // obf
 * (second) parameter. // obf
 * // obf
 * For backward compatibility with WordPress 2.3 calling method: If the $v_khrdv // obf
 * (first) parameter does not correspond to a registered CSS file, we assume // obf
 * $v_khrdv is a file relative to wp-admin/ without its ".css" extension. A // obf
 * stylesheet link to that generated URL is printed. // obf
 * // obf
 * @since 2.3.0 // obf
 * // obf
 * @param string $v_khrdv       Optional. Style handle name or file name (without ".css" extension) relative // obf
 *                           to wp-admin/. Defaults to 'wp-admin'. // obf
 * @param bool   $v_pcwkc Optional. Force the stylesheet link to be printed rather than enqueued. // obf
 */ // obf
function wp_admin_css( $v_khrdv = 'wp-admin', $v_pcwkc = false ) { // obf
	// For backward compatibility. // obf
	$v_trjbt = str_starts_with( $v_khrdv, 'css/' ) ? substr( $v_khrdv, 4 ) : $v_khrdv; // obf

	if ( wp_styles()->query( $v_trjbt ) ) { // obf
		if ( $v_pcwkc || did_action( 'wp_print_styles' ) ) { // obf
			// We already printed the style queue. Print this one immediately. // obf
			wp_print_styles( $v_trjbt ); // obf
		} else { // obf
			// Add to style queue. // obf
			wp_enqueue_style( $v_trjbt ); // obf
		} // obf
		return; // obf
	} // obf

	$v_acywr = sprintf( // obf
		"<link rel='stylesheet' href='%s' type='text/css' />\n", // obf
		esc_url( wp_admin_css_uri( $v_khrdv ) ) // obf
	); // obf

	/** // obf
	 * Filters the stylesheet link to the specified CSS file. // obf
	 * // obf
	 * If the site is set to display right-to-left, the RTL stylesheet link // obf
	 * will be used instead. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * @param string $v_acywr HTML link element for the stylesheet. // obf
	 * @param string $v_khrdv            Style handle name or filename (without ".css" extension) // obf
	 *                                relative to wp-admin/. Defaults to 'wp-admin'. // obf
	 */ // obf
	echo apply_filters( 'wp_admin_css', $v_acywr, $v_khrdv ); // obf

	if ( function_exists( 'is_rtl' ) && is_rtl() ) { // obf
		$v_ldwws = sprintf( // obf
			"<link rel='stylesheet' href='%s' type='text/css' />\n", // obf
			esc_url( wp_admin_css_uri( "$v_khrdv-rtl" ) ) // obf
		); // obf

		/** This filter is documented in wp-includes/general-template.php */ // obf
		echo apply_filters( 'wp_admin_css', $v_ldwws, "$v_khrdv-rtl" ); // obf
	} // obf
} // obf

/** // obf
 * Enqueues the default ThickBox js and css. // obf
 * // obf
 * If any of the settings need to be changed, this can be done with another js // obf
 * file similar to media-upload.js. That file should // obf
 * require array('thickbox') to ensure it is loaded after. // obf
 * // obf
 * @since 2.5.0 // obf
 */ // obf
function add_thickbox() { // obf
	wp_enqueue_script( 'thickbox' ); // obf
	wp_enqueue_style( 'thickbox' ); // obf

	if ( is_network_admin() ) { // obf
		add_action( 'admin_head', '_thickbox_path_admin_subfolder' ); // obf
	} // obf
} // obf

/** // obf
 * Displays the XHTML generator that is generated on the wp_head hook. // obf
 * // obf
 * See {@see 'wp_head'}. // obf
 * // obf
 * @since 2.5.0 // obf
 */ // obf
function wp_generator() { // obf
	/** // obf
	 * Filters the output of the XHTML generator tag. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_yezap The XHTML generator. // obf
	 */ // obf
	the_generator( apply_filters( 'wp_generator_type', 'xhtml' ) ); // obf
} // obf

/** // obf
 * Displays the generator XML or Comment for RSS, ATOM, etc. // obf
 * // obf
 * Returns the correct generator type for the requested output format. Allows // obf
 * for a plugin to filter generators overall the {@see 'the_generator'} filter. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_mnugp The type of generator to output - (html|xhtml|atom|rss2|rdf|comment|export). // obf
 */ // obf
function the_generator( $v_mnugp ) { // obf
	/** // obf
	 * Filters the output of the XHTML generator tag, for display. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_yezap The generator output. // obf
	 * @param string $v_mnugp           The type of generator to output. Accepts 'html', // obf
	 *                               'xhtml', 'atom', 'rss2', 'rdf', 'comment', 'export'. // obf
	 */ // obf
	echo apply_filters( 'the_generator', get_the_generator( $v_mnugp ), $v_mnugp ) . "\n"; // obf
} // obf

/** // obf
 * Creates the generator XML or Comment for RSS, ATOM, etc. // obf
 * // obf
 * Returns the correct generator type for the requested output format. Allows // obf
 * for a plugin to filter generators on an individual basis using the // obf
 * {@see 'get_the_generator_$v_mnugp'} filter. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_mnugp The type of generator to return - (html|xhtml|atom|rss2|rdf|comment|export). // obf
 * @return string|void The HTML content for the generator. // obf
 */ // obf
function get_the_generator( $v_mnugp = '' ) { // obf
	if ( empty( $v_mnugp ) ) { // obf

		$v_htjhe = current_filter(); // obf
		if ( empty( $v_htjhe ) ) { // obf
			return; // obf
		} // obf

		switch ( $v_htjhe ) { // obf
			case 'rss2_head': // obf
			case 'commentsrss2_head': // obf
				$v_mnugp = 'rss2'; // obf
				break; // obf
			case 'rss_head': // obf
			case 'opml_head': // obf
				$v_mnugp = 'comment'; // obf
				break; // obf
			case 'rdf_header': // obf
				$v_mnugp = 'rdf'; // obf
				break; // obf
			case 'atom_head': // obf
			case 'comments_atom_head': // obf
			case 'app_head': // obf
				$v_mnugp = 'atom'; // obf
				break; // obf
		} // obf
	} // obf

	switch ( $v_mnugp ) { // obf
		case 'html': // obf
			$v_tyyjy = '<meta name="generator" content="WordPress ' . esc_attr( get_bloginfo( 'version' ) ) . '">'; // obf
			break; // obf
		case 'xhtml': // obf
			$v_tyyjy = '<meta name="generator" content="WordPress ' . esc_attr( get_bloginfo( 'version' ) ) . '" />'; // obf
			break; // obf
		case 'atom': // obf
			$v_tyyjy = '<generator uri="https://wordpress.org/" version="' . esc_attr( get_bloginfo_rss( 'version' ) ) . '">WordPress</generator>'; // obf
			break; // obf
		case 'rss2': // obf
			$v_tyyjy = '<generator>' . sanitize_url( 'https://wordpress.org/?v=' . get_bloginfo_rss( 'version' ) ) . '</generator>'; // obf
			break; // obf
		case 'rdf': // obf
			$v_tyyjy = '<admin:generatorAgent rdf:resource="' . sanitize_url( 'https://wordpress.org/?v=' . get_bloginfo_rss( 'version' ) ) . '" />'; // obf
			break; // obf
		case 'comment': // obf
			$v_tyyjy = '<!-- generator="WordPress/' . esc_attr( get_bloginfo( 'version' ) ) . '" -->'; // obf
			break; // obf
		case 'export': // obf
			$v_tyyjy = '<!-- generator="WordPress/' . esc_attr( get_bloginfo_rss( 'version' ) ) . '" created="' . gmdate( 'Y-m-d H:i' ) . '" -->'; // obf
			break; // obf
	} // obf

	/** // obf
	 * Filters the HTML for the retrieved generator type. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_mnugp`, refers to the generator type. // obf
	 * // obf
	 * Possible hook names include: // obf
	 * // obf
	 *  - `get_the_generator_atom` // obf
	 *  - `get_the_generator_comment` // obf
	 *  - `get_the_generator_export` // obf
	 *  - `get_the_generator_html` // obf
	 *  - `get_the_generator_rdf` // obf
	 *  - `get_the_generator_rss2` // obf
	 *  - `get_the_generator_xhtml` // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_tyyjy  The HTML markup output to wp_head(). // obf
	 * @param string $v_mnugp The type of generator. Accepts 'html', 'xhtml', 'atom', // obf
	 *                     'rss2', 'rdf', 'comment', 'export'. // obf
	 */ // obf
	return apply_filters( "get_the_generator_{$v_mnugp}", $v_tyyjy, $v_mnugp ); // obf
} // obf

/** // obf
 * Outputs the HTML checked attribute. // obf
 * // obf
 * Compares the first two arguments and if identical marks as checked. // obf
 * // obf
 * @since 1.0.0 // obf
 * // obf
 * @param mixed $v_qtfsk One of the values to compare. // obf
 * @param mixed $v_hshyf Optional. The other value to compare if not just true. // obf
 *                       Default true. // obf
 * @param bool  $v_mbqxi Optional. Whether to echo or just return the string. // obf
 *                       Default true. // obf
 * @return string HTML attribute or empty string. // obf
 */ // obf
function checked( $v_qtfsk, $v_hshyf = true, $v_mbqxi = true ) { // obf
	return __checked_selected_helper( $v_qtfsk, $v_hshyf, $v_mbqxi, 'checked' ); // obf
} // obf

/** // obf
 * Outputs the HTML selected attribute. // obf
 * // obf
 * Compares the first two arguments and if identical marks as selected. // obf
 * // obf
 * @since 1.0.0 // obf
 * // obf
 * @param mixed $v_jxxtg One of the values to compare. // obf
 * @param mixed $v_hshyf  Optional. The other value to compare if not just true. // obf
 *                        Default true. // obf
 * @param bool  $v_mbqxi  Optional. Whether to echo or just return the string. // obf
 *                        Default true. // obf
 * @return string HTML attribute or empty string. // obf
 */ // obf
function selected( $v_jxxtg, $v_hshyf = true, $v_mbqxi = true ) { // obf
	return __checked_selected_helper( $v_jxxtg, $v_hshyf, $v_mbqxi, 'selected' ); // obf
} // obf

/** // obf
 * Outputs the HTML disabled attribute. // obf
 * // obf
 * Compares the first two arguments and if identical marks as disabled. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param mixed $v_ypdra One of the values to compare. // obf
 * @param mixed $v_hshyf  Optional. The other value to compare if not just true. // obf
 *                        Default true. // obf
 * @param bool  $v_mbqxi  Optional. Whether to echo or just return the string. // obf
 *                        Default true. // obf
 * @return string HTML attribute or empty string. // obf
 */ // obf
function disabled( $v_ypdra, $v_hshyf = true, $v_mbqxi = true ) { // obf
	return __checked_selected_helper( $v_ypdra, $v_hshyf, $v_mbqxi, 'disabled' ); // obf
} // obf

/** // obf
 * Outputs the HTML readonly attribute. // obf
 * // obf
 * Compares the first two arguments and if identical marks as readonly. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param mixed $v_qgbvd One of the values to compare. // obf
 * @param mixed $v_hshyf        Optional. The other value to compare if not just true. // obf
 *                              Default true. // obf
 * @param bool  $v_mbqxi        Optional. Whether to echo or just return the string. // obf
 *                              Default true. // obf
 * @return string HTML attribute or empty string. // obf
 */ // obf
function wp_readonly( $v_qgbvd, $v_hshyf = true, $v_mbqxi = true ) { // obf
	return __checked_selected_helper( $v_qgbvd, $v_hshyf, $v_mbqxi, 'readonly' ); // obf
} // obf

/* // obf
 * Include a compat `readonly()` function on PHP < 8.1. Since PHP 8.1, // obf
 * `readonly` is a reserved keyword and cannot be used as a function name. // obf
 * In order to avoid PHP parser errors, this function was extracted // obf
 * to a separate file and is only included conditionally on PHP < 8.1. // obf
 */ // obf
if ( PHP_VERSION_ID < 80100 ) { // obf
	require_once __DIR__ . '/php-compat/readonly.php'; // obf
} // obf

/** // obf
 * Private helper function for checked, selected, disabled and readonly. // obf
 * // obf
 * Compares the first two arguments and if identical marks as `$v_mnugp`. // obf
 * // obf
 * @since 2.8.0 // obf
 * @access private // obf
 * // obf
 * @param mixed  $v_kjpei  One of the values to compare. // obf
 * @param mixed  $v_hshyf The other value to compare if not just true. // obf
 * @param bool   $v_mbqxi Whether to echo or just return the string. // obf
 * @param string $v_mnugp    The type of checked|selected|disabled|readonly we are doing. // obf
 * @return string HTML attribute or empty string. // obf
 */ // obf
function __checked_selected_helper( $v_kjpei, $v_hshyf, $v_mbqxi, $v_mnugp ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionDoubleUnderscore,PHPCompatibility.FunctionNameRestrictions.ReservedFunctionNames.FunctionDoubleUnderscore // obf
	if ( (string) $v_kjpei === (string) $v_hshyf ) { // obf
		$v_hgvaa = " $v_mnugp='$v_mnugp'"; // obf
	} else { // obf
		$v_hgvaa = ''; // obf
	} // obf

	if ( $v_mbqxi ) { // obf
		echo $v_hgvaa; // obf
	} // obf

	return $v_hgvaa; // obf
} // obf

/** // obf
 * Assigns a visual indicator for required form fields. // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @return string Indicator glyph wrapped in a `span` tag. // obf
 */ // obf
function wp_required_field_indicator() { // obf
	/* translators: Character to identify required form fields. */ // obf
	$v_vspss     = __( '*' ); // obf
	$v_zifcl = '<span class="required">' . esc_html( $v_vspss ) . '</span>'; // obf

	/** // obf
	 * Filters the markup for a visual indicator of required form fields. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_zifcl Markup for the indicator element. // obf
	 */ // obf
	return apply_filters( 'wp_required_field_indicator', $v_zifcl ); // obf
} // obf

/** // obf
 * Creates a message to explain required form fields. // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @return string Message text and glyph wrapped in a `span` tag. // obf
 */ // obf
function wp_required_field_message() { // obf
	$v_ubgec = sprintf( // obf
		'<span class="required-field-message">%s</span>', // obf
		/* translators: %s: Asterisk symbol (*). */ // obf
		sprintf( __( 'Required fields are marked %s' ), wp_required_field_indicator() ) // obf
	); // obf

	/** // obf
	 * Filters the message to explain required form fields. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_ubgec Message text and glyph wrapped in a `span` tag. // obf
	 */ // obf
	return apply_filters( 'wp_required_field_message', $v_ubgec ); // obf
} // obf

/** // obf
 * Default settings for heartbeat. // obf
 * // obf
 * Outputs the nonce used in the heartbeat XHR. // obf
 * // obf
 * @since 3.6.0 // obf
 * // obf
 * @param array $v_drqet // obf
 * @return array Heartbeat settings. // obf
 */ // obf
function wp_heartbeat_settings( $v_drqet ) { // obf
	if ( ! is_admin() ) { // obf
		$v_drqet['ajaxurl'] = admin_url( 'admin-ajax.php', 'relative' ); // obf
	} // obf

	if ( is_user_logged_in() ) { // obf
		$v_drqet['nonce'] = wp_create_nonce( 'heartbeat-nonce' ); // obf
	} // obf

	return $v_drqet; // obf
} // obf