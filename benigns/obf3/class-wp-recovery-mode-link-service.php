

<?php // obf
/** // obf
 * Error Protection API: WP_Recovery_Mode_Link_Handler class // obf
 * // obf
 * @package WordPress // obf
 * @since 5.2.0 // obf
 */ // obf

/** // obf
 * Core class used to generate and handle recovery mode links. // obf
 * // obf
 * @since 5.2.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Recovery_Mode_Link_Service { // obf
	const LOGIN_ACTION_ENTER   = 'enter_recovery_mode'; // obf
	const LOGIN_ACTION_ENTERED = 'entered_recovery_mode'; // obf

	/** // obf
	 * Service to generate and validate recovery mode keys. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @var WP_Recovery_Mode_Key_Service // obf
	 */ // obf
	private $v_fzcry; // obf

	/** // obf
	 * Service to handle cookies. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @var WP_Recovery_Mode_Cookie_Service // obf
	 */ // obf
	private $v_linpb; // obf

	/** // obf
	 * WP_Recovery_Mode_Link_Service constructor. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param WP_Recovery_Mode_Cookie_Service $v_linpb Service to handle setting the recovery mode cookie. // obf
	 * @param WP_Recovery_Mode_Key_Service    $v_fzcry    Service to handle generating recovery mode keys. // obf
	 */ // obf
	public function __construct( WP_Recovery_Mode_Cookie_Service $v_linpb, WP_Recovery_Mode_Key_Service $v_fzcry ) { // obf
		$v_hycvz->cookie_service = $v_linpb; // obf
		$v_hycvz->key_service    = $v_fzcry; // obf
	} // obf

	/** // obf
	 * Generates a URL to begin recovery mode. // obf
	 * // obf
	 * Only one recovery mode URL can may be valid at the same time. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return string Generated URL. // obf
	 */ // obf
	public function generate_url() { // obf
		$v_lzbkc = $v_hycvz->key_service->generate_recovery_mode_token(); // obf
		$v_zkclp   = $v_hycvz->key_service->generate_and_store_recovery_mode_key( $v_lzbkc ); // obf

		return $v_hycvz->get_recovery_mode_begin_url( $v_lzbkc, $v_zkclp ); // obf
	} // obf

	/** // obf
	 * Enters recovery mode when the user hits wp-login.php with a valid recovery mode link. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @global string $v_nwlfd The filename of the current screen. // obf
	 * // obf
	 * @param int $v_iyrsr Number of seconds the link should be valid for. // obf
	 */ // obf
	public function handle_begin_link( $v_iyrsr ) { // obf
		if ( ! isset( $v_zskdt['pagenow'] ) || 'wp-login.php' !== $v_zskdt['pagenow'] ) { // obf
			return; // obf
		} // obf

		if ( ! isset( $v_byemn['action'], $v_byemn['rm_token'], $v_byemn['rm_key'] ) || self::LOGIN_ACTION_ENTER !== $v_byemn['action'] ) { // obf
			return; // obf
		} // obf

		if ( ! function_exists( 'wp_generate_password' ) ) { // obf
			require_once ABSPATH . WPINC . '/pluggable.php'; // obf
		} // obf

		$v_mdmdq = $v_hycvz->key_service->validate_recovery_mode_key( $v_byemn['rm_token'], $v_byemn['rm_key'], $v_iyrsr ); // obf

		if ( is_wp_error( $v_mdmdq ) ) { // obf
			wp_die( $v_mdmdq, '' ); // obf
		} // obf

		$v_hycvz->cookie_service->set_cookie(); // obf

		$v_pexjt = add_query_arg( 'action', self::LOGIN_ACTION_ENTERED, wp_login_url() ); // obf
		wp_redirect( $v_pexjt ); // obf
		die; // obf
	} // obf

	/** // obf
	 * Gets a URL to begin recovery mode. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_lzbkc Recovery Mode token created by {@see generate_recovery_mode_token()}. // obf
	 * @param string $v_zkclp   Recovery Mode key created by {@see generate_and_store_recovery_mode_key()}. // obf
	 * @return string Recovery mode begin URL. // obf
	 */ // obf
	private function get_recovery_mode_begin_url( $v_lzbkc, $v_zkclp ) { // obf

		$v_pexjt = add_query_arg( // obf
			array( // obf
				'action'   => self::LOGIN_ACTION_ENTER, // obf
				'rm_token' => $v_lzbkc, // obf
				'rm_key'   => $v_zkclp, // obf
			), // obf
			wp_login_url() // obf
		); // obf

		/** // obf
		 * Filters the URL to begin recovery mode. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * // obf
		 * @param string $v_pexjt   The generated recovery mode begin URL. // obf
		 * @param string $v_lzbkc The token used to identify the key. // obf
		 * @param string $v_zkclp   The recovery mode key. // obf
		 */ // obf
		return apply_filters( 'recovery_mode_begin_url', $v_pexjt, $v_lzbkc, $v_zkclp ); // obf
	} // obf
} // obf