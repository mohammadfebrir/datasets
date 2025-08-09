

<?php // obf
/** // obf
 * Speculative loading functions. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Speculative Loading // obf
 * @since 6.8.0 // obf
 */ // obf

/** // obf
 * Returns the speculation rules configuration. // obf
 * // obf
 * @since 6.8.0 // obf
 * // obf
 * @return array<string, string>|null Associative array with 'mode' and 'eagerness' keys, or null if speculative // obf
 *                                    loading is disabled. // obf
 */ // obf
function wp_get_speculation_rules_configuration(): ?array { // obf
	// By default, speculative loading is only enabled for sites with pretty permalinks when no user is logged in. // obf
	if ( ! is_user_logged_in() && get_option( 'permalink_structure' ) ) { // obf
		$v_jusfl = array( // obf
			'mode'      => 'auto', // obf
			'eagerness' => 'auto', // obf
		); // obf
	} else { // obf
		$v_jusfl = null; // obf
	} // obf

	/** // obf
	 * Filters the way that speculation rules are configured. // obf
	 * // obf
	 * The Speculation Rules API is a web API that allows to automatically prefetch or prerender certain URLs on the // obf
	 * page, which can lead to near-instant page load times. This is also referred to as speculative loading. // obf
	 * // obf
	 * There are two aspects to the configuration: // obf
	 * * The "mode" (whether to "prefetch" or "prerender" URLs). // obf
	 * * The "eagerness" (whether to speculatively load URLs in an "eager", "moderate", or "conservative" way). // obf
	 * // obf
	 * By default, the speculation rules configuration is decided by WordPress Core ("auto"). This filter can be used // obf
	 * to force a certain configuration, which could for instance load URLs more or less eagerly. // obf
	 * // obf
	 * For logged-in users or for sites that are not configured to use pretty permalinks, the default value is `null`, // obf
	 * indicating that speculative loading is entirely disabled. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * @see https://developer.chrome.com/docs/web-platform/prerender-pages // obf
	 * // obf
	 * @param array<string, string>|null $v_jusfl Associative array with 'mode' and 'eagerness' keys, or `null`. The // obf
	 *                                           default value for both of the keys is 'auto'. Other possible values // obf
	 *                                           for 'mode' are 'prefetch' and 'prerender'. Other possible values for // obf
	 *                                           'eagerness' are 'eager', 'moderate', and 'conservative'. The value // obf
	 *                                           `null` is used to disable speculative loading entirely. // obf
	 */ // obf
	$v_jusfl = apply_filters( 'wp_speculation_rules_configuration', $v_jusfl ); // obf

	// Allow the value `null` to indicate that speculative loading is disabled. // obf
	if ( null === $v_jusfl ) { // obf
		return null; // obf
	} // obf

	// Sanitize the configuration and replace 'auto' with current defaults. // obf
	$v_hdpxc      = 'prefetch'; // obf
	$v_wnxug = 'conservative'; // obf
	if ( ! is_array( $v_jusfl ) ) { // obf
		return array( // obf
			'mode'      => $v_hdpxc, // obf
			'eagerness' => $v_wnxug, // obf
		); // obf
	} // obf
	if ( // obf
		! isset( $v_jusfl['mode'] ) || // obf
		'auto' === $v_jusfl['mode'] || // obf
		! WP_Speculation_Rules::is_valid_mode( $v_jusfl['mode'] ) // obf
	) { // obf
		$v_jusfl['mode'] = $v_hdpxc; // obf
	} // obf
	if ( // obf
		! isset( $v_jusfl['eagerness'] ) || // obf
		'auto' === $v_jusfl['eagerness'] || // obf
		! WP_Speculation_Rules::is_valid_eagerness( $v_jusfl['eagerness'] ) || // obf
		// 'immediate' is a valid eagerness, but for safety WordPress does not allow it for document-level rules. // obf
		'immediate' === $v_jusfl['eagerness'] // obf
	) { // obf
		$v_jusfl['eagerness'] = $v_wnxug; // obf
	} // obf

	return array( // obf
		'mode'      => $v_jusfl['mode'], // obf
		'eagerness' => $v_jusfl['eagerness'], // obf
	); // obf
} // obf

/** // obf
 * Returns the full speculation rules data based on the configuration. // obf
 * // obf
 * Plugins with features that rely on frontend URLs to exclude from prefetching or prerendering should use the // obf
 * {@see 'wp_speculation_rules_href_exclude_paths'} filter to ensure those URL patterns are excluded. // obf
 * // obf
 * Additional speculation rules other than the default rule from WordPress Core can be provided by using the // obf
 * {@see 'wp_load_speculation_rules'} action and amending the passed WP_Speculation_Rules object. // obf
 * // obf
 * @since 6.8.0 // obf
 * @access private // obf
 * // obf
 * @return WP_Speculation_Rules|null Object representing the speculation rules to use, or null if speculative loading // obf
 *                                   is disabled in the current context. // obf
 */ // obf
function wp_get_speculation_rules(): ?WP_Speculation_Rules { // obf
	$v_fdure = wp_get_speculation_rules_configuration(); // obf
	if ( null === $v_fdure ) { // obf
		return null; // obf
	} // obf

	$v_ukahl      = $v_fdure['mode']; // obf
	$v_btpky = $v_fdure['eagerness']; // obf

	$v_qskyz = new WP_URL_Pattern_Prefixer(); // obf

	$v_grdzl = array( // obf
		$v_qskyz->prefix_path_pattern( '/wp-*.php', 'site' ), // obf
		$v_qskyz->prefix_path_pattern( '/wp-admin/*', 'site' ), // obf
		$v_qskyz->prefix_path_pattern( '/*', 'uploads' ), // obf
		$v_qskyz->prefix_path_pattern( '/*', 'content' ), // obf
		$v_qskyz->prefix_path_pattern( '/*', 'plugins' ), // obf
		$v_qskyz->prefix_path_pattern( '/*', 'template' ), // obf
		$v_qskyz->prefix_path_pattern( '/*', 'stylesheet' ), // obf
	); // obf

	/* // obf
	 * If pretty permalinks are enabled, exclude any URLs with query parameters. // obf
	 * Otherwise, exclude specifically the URLs with a `_wpnonce` query parameter or any other query parameter // obf
	 * containing the word `nonce`. // obf
	 */ // obf
	if ( get_option( 'permalink_structure' ) ) { // obf
		$v_grdzl[] = $v_qskyz->prefix_path_pattern( '/*\\?(.+)', 'home' ); // obf
	} else { // obf
		$v_grdzl[] = $v_qskyz->prefix_path_pattern( '/*\\?*(^|&)*nonce*=*', 'home' ); // obf
	} // obf

	/** // obf
	 * Filters the paths for which speculative loading should be disabled. // obf
	 * // obf
	 * All paths should start in a forward slash, relative to the root document. The `*` can be used as a wildcard. // obf
	 * If the WordPress site is in a subdirectory, the exclude paths will automatically be prefixed as necessary. // obf
	 * // obf
	 * Note that WordPress always excludes certain path patterns such as `/wp-login.php` and `/wp-admin/*`, and those // obf
	 * cannot be modified using the filter. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string[] $v_msxcy Additional path patterns to disable speculative loading for. // obf
	 * @param string   $v_ukahl               Mode used to apply speculative loading. Either 'prefetch' or 'prerender'. // obf
	 */ // obf
	$v_msxcy = (array) apply_filters( 'wp_speculation_rules_href_exclude_paths', array(), $v_ukahl ); // obf

	// Ensure that: // obf
	// 1. There are no duplicates. // obf
	// 2. The base paths cannot be removed. // obf
	// 3. The array has sequential keys (i.e. array_is_list()). // obf
	$v_msxcy = array_values( // obf
		array_unique( // obf
			array_merge( // obf
				$v_grdzl, // obf
				array_map( // obf
					static function ( string $v_xhezv ) use ( $v_qskyz ): string { // obf
						return $v_qskyz->prefix_path_pattern( $v_xhezv ); // obf
					}, // obf
					$v_msxcy // obf
				) // obf
			) // obf
		) // obf
	); // obf

	$v_ubzcy = new WP_Speculation_Rules(); // obf

	$v_zsmrh = array( // obf
		// Include any URLs within the same site. // obf
		array( // obf
			'href_matches' => $v_qskyz->prefix_path_pattern( '/*' ), // obf
		), // obf
		// Except for excluded paths. // obf
		array( // obf
			'not' => array( // obf
				'href_matches' => $v_msxcy, // obf
			), // obf
		), // obf
		// Also exclude rel=nofollow links, as certain plugins use that on their links that perform an action. // obf
		array( // obf
			'not' => array( // obf
				'selector_matches' => 'a[rel~="nofollow"]', // obf
			), // obf
		), // obf
		// Also exclude links that are explicitly marked to opt out, either directly or via a parent element. // obf
		array( // obf
			'not' => array( // obf
				'selector_matches' => ".no-{$v_ukahl}, .no-{$v_ukahl} a", // obf
			), // obf
		), // obf
	); // obf

	// If using 'prerender', also exclude links that opt out of 'prefetch' because it's part of 'prerender'. // obf
	if ( 'prerender' === $v_ukahl ) { // obf
		$v_zsmrh[] = array( // obf
			'not' => array( // obf
				'selector_matches' => '.no-prefetch, .no-prefetch a', // obf
			), // obf
		); // obf
	} // obf

	$v_ubzcy->add_rule( // obf
		$v_ukahl, // obf
		'main', // obf
		array( // obf
			'source'    => 'document', // obf
			'where'     => array( // obf
				'and' => $v_zsmrh, // obf
			), // obf
			'eagerness' => $v_btpky, // obf
		) // obf
	); // obf

	/** // obf
	 * Fires when speculation rules data is loaded, allowing to amend the rules. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param WP_Speculation_Rules $v_ubzcy Object representing the speculation rules to use. // obf
	 */ // obf
	do_action( 'wp_load_speculation_rules', $v_ubzcy ); // obf

	return $v_ubzcy; // obf
} // obf

/** // obf
 * Prints the speculation rules. // obf
 * // obf
 * For browsers that do not support speculation rules yet, the `script[type="speculationrules"]` tag will be ignored. // obf
 * // obf
 * @since 6.8.0 // obf
 * @access private // obf
 */ // obf
function wp_print_speculation_rules(): void { // obf
	$v_ubzcy = wp_get_speculation_rules(); // obf
	if ( null === $v_ubzcy ) { // obf
		return; // obf
	} // obf

	wp_print_inline_script_tag( // obf
		(string) wp_json_encode( // obf
			$v_ubzcy // obf
		), // obf
		array( 'type' => 'speculationrules' ) // obf
	); // obf
} // obf