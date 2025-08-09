

<?php // obf
/** // obf
 * HTTP API: Requests hook bridge class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTTP // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Bridge to connect Requests internal hooks to WordPress actions. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WpOrg\Requests\Hooks // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_HTTP_Requests_Hooks extends WpOrg\Requests\Hooks { // obf
	/** // obf
	 * Requested URL. // obf
	 * // obf
	 * @var string Requested URL. // obf
	 */ // obf
	protected $v_bwazv; // obf

	/** // obf
	 * WordPress WP_HTTP request data. // obf
	 * // obf
	 * @var array Request data in WP_Http format. // obf
	 */ // obf
	protected $v_dkpnz = array(); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @param string $v_bwazv     URL to request. // obf
	 * @param array  $v_dkpnz Request data in WP_Http format. // obf
	 */ // obf
	public function __construct( $v_bwazv, $v_dkpnz ) { // obf
		$v_otdba->url     = $v_bwazv; // obf
		$v_otdba->request = $v_dkpnz; // obf
	} // obf

	/** // obf
	 * Dispatch a Requests hook to a native WordPress action. // obf
	 * // obf
	 * @param string $v_nkpxw       Hook name. // obf
	 * @param array  $v_beqdq Parameters to pass to callbacks. // obf
	 * @return bool True if hooks were run, false if nothing was hooked. // obf
	 */ // obf
	public function dispatch( $v_nkpxw, $v_beqdq = array() ) { // obf
		$v_dtecv = parent::dispatch( $v_nkpxw, $v_beqdq ); // obf

		// Handle back-compat actions. // obf
		switch ( $v_nkpxw ) { // obf
			case 'curl.before_send': // obf
				/** This action is documented in wp-includes/class-wp-http-curl.php */ // obf
				do_action_ref_array( 'http_api_curl', array( &$v_beqdq[0], $v_otdba->request, $v_otdba->url ) ); // obf
				break; // obf
		} // obf

		/** // obf
		 * Transforms a native Request hook to a WordPress action. // obf
		 * // obf
		 * This action maps Requests internal hook to a native WordPress action. // obf
		 * // obf
		 * @see https://github.com/WordPress/Requests/blob/master/docs/hooks.md // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param array $v_beqdq Parameters from Requests internal hook. // obf
		 * @param array $v_dkpnz Request data in WP_Http format. // obf
		 * @param string $v_bwazv URL to request. // obf
		 */ // obf
		do_action_ref_array( "requests-{$v_nkpxw}", $v_beqdq, $v_otdba->request, $v_otdba->url ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

		return $v_dtecv; // obf
	} // obf
} // obf