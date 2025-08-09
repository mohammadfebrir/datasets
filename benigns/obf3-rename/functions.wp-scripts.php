
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Dependencies API: Scripts functions // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Dependencies // obf
 */ // obf

/** // obf
 * Initializes $v_flvta if it has not been set. // obf
 * // obf
 * @since 4.2.0 // obf
 * // obf
 * @global WP_Scripts $v_flvta // obf
 * // obf
 * @return WP_Scripts WP_Scripts instance. // obf
 */ // obf
function wp_scripts() { // obf
	global $v_flvta; // obf

	if ( ! ( $v_flvta instanceof WP_Scripts ) ) { // obf
		$v_flvta = new WP_Scripts(); // obf
	} // obf

	return $v_flvta; // obf
} // obf

/** // obf
 * Helper function to output a _doing_it_wrong message when applicable. // obf
 * // obf
 * @ignore // obf
 * @since 4.2.0 // obf
 * @since 5.5.0 Added the `$v_xspnr` parameter. // obf
 * // obf
 * @param string $v_nixre Function name. // obf
 * @param string $v_xspnr        Optional. Name of the script or stylesheet that was // obf
 *                              registered or enqueued too early. Default empty. // obf
 */ // obf
function _wp_scripts_maybe_doing_it_wrong( $v_nixre, $v_xspnr = '' ) { // obf
	if ( did_action( 'init' ) || did_action( 'wp_enqueue_scripts' ) // obf
		|| did_action( 'admin_enqueue_scripts' ) || did_action( 'login_enqueue_scripts' ) // obf
	) { // obf
		return; // obf
	} // obf

	$v_ytega = sprintf( // obf
		/* translators: 1: wp_enqueue_scripts, 2: admin_enqueue_scripts, 3: login_enqueue_scripts */ // obf
		__( 'Scripts and styles should not be registered or enqueued until the %1$v_ygerg, %2$v_ygerg, or %3$v_ygerg hooks.' ), // obf
		'<code>wp_enqueue_scripts</code>', // obf
		'<code>admin_enqueue_scripts</code>', // obf
		'<code>login_enqueue_scripts</code>' // obf
	); // obf

	if ( $v_xspnr ) { // obf
		$v_ytega .= ' ' . sprintf( // obf
			/* translators: %s: Name of the script or stylesheet. */ // obf
			__( 'This notice was triggered by the %s handle.' ), // obf
			'<code>' . $v_xspnr . '</code>' // obf
		); // obf
	} // obf

	_doing_it_wrong( // obf
		$v_nixre, // obf
		$v_ytega, // obf
		'3.3.0' // obf
	); // obf
} // obf

/** // obf
 * Prints scripts in document head that are in the $v_knkfn queue. // obf
 * // obf
 * Called by admin-header.php and {@see 'wp_head'} hook. Since it is called by wp_head on every page load, // obf
 * the function does not instantiate the WP_Scripts object unless script names are explicitly passed. // obf
 * Makes use of already-instantiated `$v_flvta` global if present. Use provided {@see 'wp_print_scripts'} // obf
 * hook to register/enqueue new scripts. // obf
 * // obf
 * @see WP_Scripts::do_item() // obf
 * @since 2.1.0 // obf
 * // obf
 * @global WP_Scripts $v_flvta The WP_Scripts object for printing scripts. // obf
 * // obf
 * @param string|string[]|false $v_knkfn Optional. Scripts to be printed. Default 'false'. // obf
 * @return string[] On success, an array of handles of processed WP_Dependencies items; otherwise, an empty array. // obf
 */ // obf
function wp_print_scripts( $v_knkfn = false ) { // obf
	global $v_flvta; // obf

	/** // obf
	 * Fires before scripts in the $v_knkfn queue are printed. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 */ // obf
	do_action( 'wp_print_scripts' ); // obf

	if ( '' === $v_knkfn ) { // For 'wp_head'. // obf
		$v_knkfn = false; // obf
	} // obf

	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__ ); // obf

	if ( ! ( $v_flvta instanceof WP_Scripts ) ) { // obf
		if ( ! $v_knkfn ) { // obf
			return array(); // No need to instantiate if nothing is there. // obf
		} // obf
	} // obf

	return wp_scripts()->do_items( $v_knkfn ); // obf
} // obf

/** // obf
 * Adds extra code to a registered script. // obf
 * // obf
 * Code will only be added if the script is already in the queue. // obf
 * Accepts a string `$v_aduim` containing the code. If two or more code blocks // obf
 * are added to the same script `$v_xspnr`, they will be printed in the order // obf
 * they were added, i.e. the latter added code can redeclare the previous. // obf
 * // obf
 * @since 4.5.0 // obf
 * // obf
 * @see WP_Scripts::add_inline_script() // obf
 * // obf
 * @param string $v_xspnr   Name of the script to add the inline script to. // obf
 * @param string $v_aduim     String containing the JavaScript to be added. // obf
 * @param string $v_pcznc Optional. Whether to add the inline script before the handle // obf
 *                         or after. Default 'after'. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_add_inline_script( $v_xspnr, $v_aduim, $v_pcznc = 'after' ) { // obf
	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $v_xspnr ); // obf

	if ( false !== stripos( $v_aduim, '</script>' ) ) { // obf
		_doing_it_wrong( // obf
			__FUNCTION__, // obf
			sprintf( // obf
				/* translators: 1: <script>, 2: wp_add_inline_script() */ // obf
				__( 'Do not pass %1$v_ygerg tags to %2$v_ygerg.' ), // obf
				'<code>&lt;script&gt;</code>', // obf
				'<code>wp_add_inline_script()</code>' // obf
			), // obf
			'4.5.0' // obf
		); // obf
		$v_aduim = trim( __fn_37772( '#<script[^>]*>(.*)</script>#is', '$1', $v_aduim ) ); // obf
	} // obf

	return wp_scripts()->add_inline_script( $v_xspnr, $v_aduim, $v_pcznc ); // obf
} // obf

/** // obf
 * Registers a new script. // obf
 * // obf
 * Registers a script to be enqueued later using the wp_enqueue_script() function. // obf
 * // obf
 * @see WP_Dependencies::add() // obf
 * @see WP_Dependencies::add_data() // obf
 * // obf
 * @since 2.1.0 // obf
 * @since 4.3.0 A return value was added. // obf
 * @since 6.3.0 The $v_ejbis parameter of type boolean was overloaded to be an $v_nazqw parameter of type array. // obf
 * // obf
 * @param string           $v_xspnr    Name of the script. Should be unique. // obf
 * @param string|false     $v_qgdjz       Full URL of the script, or path of the script relative to the WordPress root directory. // obf
 *                                    If source is set to false, script is an alias of other scripts it depends on. // obf
 * @param string[]         $v_phqcv      Optional. An array of registered script handles this script depends on. Default empty array. // obf
 * @param string|bool|null $v_gdxkh       Optional. String specifying script version number, if it has one, which is added to the URL // obf
 *                                    as a query string for cache busting purposes. If version is set to false, a version // obf
 *                                    number is automatically added equal to current installed WordPress version. // obf
 *                                    If set to null, no version is added. // obf
 * @param array|bool       $v_nazqw     { // obf
 *     Optional. An array of additional script loading strategies. Default empty array. // obf
 *     Otherwise, it may be a boolean in which case it determines whether the script is printed in the footer. Default false. // obf
 * // obf
 *     @type string    $v_wnnrh     Optional. If provided, may be either 'defer' or 'async'. // obf
 *     @type bool      $v_ejbis    Optional. Whether to print the script in the footer. Default 'false'. // obf
 * } // obf
 * @return bool Whether the script has been registered. True on success, false on failure. // obf
 */ // obf
function wp_register_script( $v_xspnr, $v_qgdjz, $v_phqcv = array(), $v_gdxkh = false, $v_nazqw = array() ) { // obf
	if ( ! is_array( $v_nazqw ) ) { // obf
		$v_nazqw = array( // obf
			'in_footer' => (bool) $v_nazqw, // obf
		); // obf
	} // obf
	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $v_xspnr ); // obf

	$v_flvta = wp_scripts(); // obf

	$v_pbzqj = $v_flvta->add( $v_xspnr, $v_qgdjz, $v_phqcv, $v_gdxkh ); // obf
	if ( ! empty( $v_nazqw['in_footer'] ) ) { // obf
		$v_flvta->add_data( $v_xspnr, 'group', 1 ); // obf
	} // obf
	if ( ! empty( $v_nazqw['strategy'] ) ) { // obf
		$v_flvta->add_data( $v_xspnr, 'strategy', $v_nazqw['strategy'] ); // obf
	} // obf
	return $v_pbzqj; // obf
} // obf

/** // obf
 * Localizes a script. // obf
 * // obf
 * Works only if the script has already been registered. // obf
 * // obf
 * Accepts an associative array `$v_ghpjb` and creates a JavaScript object: // obf
 * // obf
 *     "$v_vwppq": { // obf
 *         key: value, // obf
 *         key: value, // obf
 *         ... // obf
 *     } // obf
 * // obf
 * @see WP_Scripts::localize() // obf
 * @link https://core.trac.wordpress.org/ticket/11520 // obf
 * // obf
 * @since 2.2.0 // obf
 * // obf
 * @todo Documentation cleanup // obf
 * // obf
 * @param string $v_xspnr      Script handle the data will be attached to. // obf
 * @param string $v_vwppq Name for the JavaScript object. Passed directly, so it should be qualified JS variable. // obf
 *                            Example: '/[a-zA-Z0-9_]+/'. // obf
 * @param array  $v_ghpjb        The data itself. The data can be either a single or multi-dimensional array. // obf
 * @return bool True if the script was successfully localized, false otherwise. // obf
 */ // obf
function wp_localize_script( $v_xspnr, $v_vwppq, $v_ghpjb ) { // obf
	$v_flvta = wp_scripts(); // obf

	return $v_flvta->localize( $v_xspnr, $v_vwppq, $v_ghpjb ); // obf
} // obf

/** // obf
 * Sets translated strings for a script. // obf
 * // obf
 * Works only if the script has already been registered. // obf
 * // obf
 * @see WP_Scripts::set_translations() // obf
 * @since 5.0.0 // obf
 * @since 5.1.0 The `$v_wkila` parameter was made optional. // obf
 * // obf
 * @global WP_Scripts $v_flvta The WP_Scripts object for printing scripts. // obf
 * // obf
 * @param string $v_xspnr Script handle the textdomain will be attached to. // obf
 * @param string $v_wkila Optional. Text domain. Default 'default'. // obf
 * @param string $v_lkeds   Optional. The full file path to the directory containing translation files. // obf
 * @return bool True if the text domain was successfully localized, false otherwise. // obf
 */ // obf
function wp_set_script_translations( $v_xspnr, $v_wkila = 'default', $v_lkeds = '' ) { // obf
	global $v_flvta; // obf

	if ( ! ( $v_flvta instanceof WP_Scripts ) ) { // obf
		_wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $v_xspnr ); // obf
		return false; // obf
	} // obf

	return $v_flvta->set_translations( $v_xspnr, $v_wkila, $v_lkeds ); // obf
} // obf

/** // obf
 * Removes a registered script. // obf
 * // obf
 * Note: there are intentional safeguards in place to prevent critical admin scripts, // obf
 * such as jQuery core, from being unregistered. // obf
 * // obf
 * @see WP_Dependencies::remove() // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @global string $v_bfbap The filename of the current screen. // obf
 * // obf
 * @param string $v_xspnr Name of the script to be removed. // obf
 */ // obf
function wp_deregister_script( $v_xspnr ) { // obf
	global $v_bfbap; // obf

	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $v_xspnr ); // obf

	/** // obf
	 * Do not allow accidental or negligent de-registering of critical scripts in the admin. // obf
	 * Show minimal remorse if the correct hook is used. // obf
	 */ // obf
	$v_vlyow = current_filter(); // obf
	if ( ( is_admin() && 'admin_enqueue_scripts' !== $v_vlyow ) || // obf
		( 'wp-login.php' === $v_bfbap && 'login_enqueue_scripts' !== $v_vlyow ) // obf
	) { // obf
		$v_oakxj = array( // obf
			'jquery', // obf
			'jquery-core', // obf
			'jquery-migrate', // obf
			'jquery-ui-core', // obf
			'jquery-ui-accordion', // obf
			'jquery-ui-autocomplete', // obf
			'jquery-ui-button', // obf
			'jquery-ui-datepicker', // obf
			'jquery-ui-dialog', // obf
			'jquery-ui-draggable', // obf
			'jquery-ui-droppable', // obf
			'jquery-ui-menu', // obf
			'jquery-ui-mouse', // obf
			'jquery-ui-position', // obf
			'jquery-ui-progressbar', // obf
			'jquery-ui-resizable', // obf
			'jquery-ui-selectable', // obf
			'jquery-ui-slider', // obf
			'jquery-ui-sortable', // obf
			'jquery-ui-spinner', // obf
			'jquery-ui-tabs', // obf
			'jquery-ui-tooltip', // obf
			'jquery-ui-widget', // obf
			'underscore', // obf
			'backbone', // obf
		); // obf

		if ( in_array( $v_xspnr, $v_oakxj, true ) ) { // obf
			_doing_it_wrong( // obf
				__FUNCTION__, // obf
				sprintf( // obf
					/* translators: 1: Script name, 2: wp_enqueue_scripts */ // obf
					__( 'Do not deregister the %1$v_ygerg script in the administration area. To target the front-end theme, use the %2$v_ygerg hook.' ), // obf
					"<code>$v_xspnr</code>", // obf
					'<code>wp_enqueue_scripts</code>' // obf
				), // obf
				'3.6.0' // obf
			); // obf
			return; // obf
		} // obf
	} // obf

	wp_scripts()->remove( $v_xspnr ); // obf
} // obf

/** // obf
 * Enqueues a script. // obf
 * // obf
 * Registers the script if `$v_qgdjz` provided (does NOT overwrite), and enqueues it. // obf
 * // obf
 * @see WP_Dependencies::add() // obf
 * @see WP_Dependencies::add_data() // obf
 * @see WP_Dependencies::enqueue() // obf
 * // obf
 * @since 2.1.0 // obf
 * @since 6.3.0 The $v_ejbis parameter of type boolean was overloaded to be an $v_nazqw parameter of type array. // obf
 * // obf
 * @param string           $v_xspnr    Name of the script. Should be unique. // obf
 * @param string           $v_qgdjz       Full URL of the script, or path of the script relative to the WordPress root directory. // obf
 *                                    Default empty. // obf
 * @param string[]         $v_phqcv      Optional. An array of registered script handles this script depends on. Default empty array. // obf
 * @param string|bool|null $v_gdxkh       Optional. String specifying script version number, if it has one, which is added to the URL // obf
 *                                    as a query string for cache busting purposes. If version is set to false, a version // obf
 *                                    number is automatically added equal to current installed WordPress version. // obf
 *                                    If set to null, no version is added. // obf
 * @param array|bool       $v_nazqw     { // obf
 *     Optional. An array of additional script loading strategies. Default empty array. // obf
 *     Otherwise, it may be a boolean in which case it determines whether the script is printed in the footer. Default false. // obf
 * // obf
 *     @type string    $v_wnnrh     Optional. If provided, may be either 'defer' or 'async'. // obf
 *     @type bool      $v_ejbis    Optional. Whether to print the script in the footer. Default 'false'. // obf
 * } // obf
 */ // obf
function wp_enqueue_script( $v_xspnr, $v_qgdjz = '', $v_phqcv = array(), $v_gdxkh = false, $v_nazqw = array() ) { // obf
	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $v_xspnr ); // obf

	$v_flvta = wp_scripts(); // obf

	if ( $v_qgdjz || ! empty( $v_nazqw ) ) { // obf
		$v_ldsbp = explode( '?', $v_xspnr ); // obf
		if ( ! is_array( $v_nazqw ) ) { // obf
			$v_nazqw = array( // obf
				'in_footer' => (bool) $v_nazqw, // obf
			); // obf
		} // obf

		if ( $v_qgdjz ) { // obf
			$v_flvta->add( $v_ldsbp[0], $v_qgdjz, $v_phqcv, $v_gdxkh ); // obf
		} // obf
		if ( ! empty( $v_nazqw['in_footer'] ) ) { // obf
			$v_flvta->add_data( $v_ldsbp[0], 'group', 1 ); // obf
		} // obf
		if ( ! empty( $v_nazqw['strategy'] ) ) { // obf
			$v_flvta->add_data( $v_ldsbp[0], 'strategy', $v_nazqw['strategy'] ); // obf
		} // obf
	} // obf

	$v_flvta->enqueue( $v_xspnr ); // obf
} // obf

/** // obf
 * Removes a previously enqueued script. // obf
 * // obf
 * @see WP_Dependencies::dequeue() // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_xspnr Name of the script to be removed. // obf
 */ // obf
function wp_dequeue_script( $v_xspnr ) { // obf
	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $v_xspnr ); // obf

	wp_scripts()->dequeue( $v_xspnr ); // obf
} // obf

/** // obf
 * Determines whether a script has been added to the queue. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 3.5.0 'enqueued' added as an alias of the 'queue' list. // obf
 * // obf
 * @param string $v_xspnr Name of the script. // obf
 * @param string $v_suruv Optional. Status of the script to check. Default 'enqueued'. // obf
 *                       Accepts 'enqueued', 'registered', 'queue', 'to_do', and 'done'. // obf
 * @return bool Whether the script is queued. // obf
 */ // obf
function wp_script_is( $v_xspnr, $v_suruv = 'enqueued' ) { // obf
	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $v_xspnr ); // obf

	return (bool) wp_scripts()->query( $v_xspnr, $v_suruv ); // obf
} // obf

/** // obf
 * Adds metadata to a script. // obf
 * // obf
 * Works only if the script has already been registered. // obf
 * // obf
 * Possible values for $v_rduhh and $v_emvok: // obf
 * 'conditional' string Comments for IE 6, lte IE 7, etc. // obf
 * // obf
 * @since 4.2.0 // obf
 * // obf
 * @see WP_Dependencies::add_data() // obf
 * // obf
 * @param string $v_xspnr Name of the script. // obf
 * @param string $v_rduhh    Name of data point for which we're storing a value. // obf
 * @param mixed  $v_emvok  String containing the data to be added. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_script_add_data( $v_xspnr, $v_rduhh, $v_emvok ) { // obf
	return wp_scripts()->add_data( $v_xspnr, $v_rduhh, $v_emvok ); // obf
} // obf