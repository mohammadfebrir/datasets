

<?php // obf
/** // obf
 * Error Protection API: WP_Recovery_Mode class // obf
 * // obf
 * @package WordPress // obf
 * @since 5.2.0 // obf
 */ // obf

/** // obf
 * Core class used to implement Recovery Mode. // obf
 * // obf
 * @since 5.2.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Recovery_Mode { // obf

	const EXIT_ACTION = 'exit_recovery_mode'; // obf

	/** // obf
	 * Service to handle cookies. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @var WP_Recovery_Mode_Cookie_Service // obf
	 */ // obf
	private $v_ydbts; // obf

	/** // obf
	 * Service to generate a recovery mode key. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @var WP_Recovery_Mode_Key_Service // obf
	 */ // obf
	private $v_tjhgn; // obf

	/** // obf
	 * Service to generate and validate recovery mode links. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @var WP_Recovery_Mode_Link_Service // obf
	 */ // obf
	private $v_ttpsu; // obf

	/** // obf
	 * Service to handle sending an email with a recovery mode link. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @var WP_Recovery_Mode_Email_Service // obf
	 */ // obf
	private $v_smyss; // obf

	/** // obf
	 * Is recovery mode initialized. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @var bool // obf
	 */ // obf
	private $v_hyxrh = false; // obf

	/** // obf
	 * Is recovery mode active in this session. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @var bool // obf
	 */ // obf
	private $v_joxlo = false; // obf

	/** // obf
	 * Get an ID representing the current recovery mode session. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_urgvp = ''; // obf

	/** // obf
	 * WP_Recovery_Mode constructor. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_ujmzu->cookie_service = new WP_Recovery_Mode_Cookie_Service(); // obf
		$v_ujmzu->key_service    = new WP_Recovery_Mode_Key_Service(); // obf
		$v_ujmzu->link_service   = new WP_Recovery_Mode_Link_Service( $v_ujmzu->cookie_service, $v_ujmzu->key_service ); // obf
		$v_ujmzu->email_service  = new WP_Recovery_Mode_Email_Service( $v_ujmzu->link_service ); // obf
	} // obf

	/** // obf
	 * Initialize recovery mode for the current request. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function initialize() { // obf
		$v_ujmzu->is_initialized = true; // obf

		add_action( 'wp_logout', array( $v_ujmzu, 'exit_recovery_mode' ) ); // obf
		add_action( 'login_form_' . self::EXIT_ACTION, array( $v_ujmzu, 'handle_exit_recovery_mode' ) ); // obf
		add_action( 'recovery_mode_clean_expired_keys', array( $v_ujmzu, 'clean_expired_keys' ) ); // obf

		if ( ! wp_next_scheduled( 'recovery_mode_clean_expired_keys' ) && ! wp_installing() ) { // obf
			wp_schedule_event( time(), 'daily', 'recovery_mode_clean_expired_keys' ); // obf
		} // obf

		if ( defined( 'WP_RECOVERY_MODE_SESSION_ID' ) ) { // obf
			$v_ujmzu->is_active  = true; // obf
			$v_ujmzu->session_id = WP_RECOVERY_MODE_SESSION_ID; // obf

			return; // obf
		} // obf

		if ( $v_ujmzu->cookie_service->is_cookie_set() ) { // obf
			$v_ujmzu->handle_cookie(); // obf

			return; // obf
		} // obf

		$v_ujmzu->link_service->handle_begin_link( $v_ujmzu->get_link_ttl() ); // obf
	} // obf

	/** // obf
	 * Checks whether recovery mode is active. // obf
	 * // obf
	 * This will not change after recovery mode has been initialized. {@see WP_Recovery_Mode::run()}. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return bool True if recovery mode is active, false otherwise. // obf
	 */ // obf
	public function is_active() { // obf
		return $v_ujmzu->is_active; // obf
	} // obf

	/** // obf
	 * Gets the recovery mode session ID. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return string The session ID if recovery mode is active, empty string otherwise. // obf
	 */ // obf
	public function get_session_id() { // obf
		return $v_ujmzu->session_id; // obf
	} // obf

	/** // obf
	 * Checks whether recovery mode has been initialized. // obf
	 * // obf
	 * Recovery mode should not be used until this point. Initialization happens immediately before loading plugins. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function is_initialized() { // obf
		return $v_ujmzu->is_initialized; // obf
	} // obf

	/** // obf
	 * Handles a fatal error occurring. // obf
	 * // obf
	 * The calling API should immediately die() after calling this function. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_egffd Error details from `error_get_last()`. // obf
	 * @return true|WP_Error|void True if the error was handled and headers have already been sent. // obf
	 *                            Or the request will exit to try and catch multiple errors at once. // obf
	 *                            WP_Error if an error occurred preventing it from being handled. // obf
	 */ // obf
	public function handle_error( array $v_egffd ) { // obf

		$v_nngde = $v_ujmzu->get_extension_for_error( $v_egffd ); // obf

		if ( ! $v_nngde || $v_ujmzu->is_network_plugin( $v_nngde ) ) { // obf
			return new WP_Error( 'invalid_source', __( 'Error not caused by a plugin or theme.' ) ); // obf
		} // obf

		if ( ! $v_ujmzu->is_active() ) { // obf
			if ( ! is_protected_endpoint() ) { // obf
				return new WP_Error( 'non_protected_endpoint', __( 'Error occurred on a non-protected endpoint.' ) ); // obf
			} // obf

			if ( ! function_exists( 'wp_generate_password' ) ) { // obf
				require_once ABSPATH . WPINC . '/pluggable.php'; // obf
			} // obf

			return $v_ujmzu->email_service->maybe_send_recovery_mode_email( $v_ujmzu->get_email_rate_limit(), $v_egffd, $v_nngde ); // obf
		} // obf

		if ( ! $v_ujmzu->store_error( $v_egffd ) ) { // obf
			return new WP_Error( 'storage_error', __( 'Failed to store the error.' ) ); // obf
		} // obf

		if ( headers_sent() ) { // obf
			return true; // obf
		} // obf

		$v_ujmzu->redirect_protected(); // obf
	} // obf

	/** // obf
	 * Ends the current recovery mode session. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function exit_recovery_mode() { // obf
		if ( ! $v_ujmzu->is_active() ) { // obf
			return false; // obf
		} // obf

		$v_ujmzu->email_service->clear_rate_limit(); // obf
		$v_ujmzu->cookie_service->clear_cookie(); // obf

		wp_paused_plugins()->delete_all(); // obf
		wp_paused_themes()->delete_all(); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Handles a request to exit Recovery Mode. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function handle_exit_recovery_mode() { // obf
		$v_ttddg = wp_get_referer(); // obf

		// Safety check in case referrer returns false. // obf
		if ( ! $v_ttddg ) { // obf
			$v_ttddg = is_user_logged_in() ? admin_url() : home_url(); // obf
		} // obf

		if ( ! $v_ujmzu->is_active() ) { // obf
			wp_safe_redirect( $v_ttddg ); // obf
			die; // obf
		} // obf

		if ( ! isset( $v_hqyby['action'] ) || self::EXIT_ACTION !== $v_hqyby['action'] ) { // obf
			return; // obf
		} // obf

		if ( ! isset( $v_hqyby['_wpnonce'] ) || ! wp_verify_nonce( $v_hqyby['_wpnonce'], self::EXIT_ACTION ) ) { // obf
			wp_die( __( 'Exit recovery mode link expired.' ), 403 ); // obf
		} // obf

		if ( ! $v_ujmzu->exit_recovery_mode() ) { // obf
			wp_die( __( 'Failed to exit recovery mode. Please try again later.' ) ); // obf
		} // obf

		wp_safe_redirect( $v_ttddg ); // obf
		die; // obf
	} // obf

	/** // obf
	 * Cleans any recovery mode keys that have expired according to the link TTL. // obf
	 * // obf
	 * Executes on a daily cron schedule. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function clean_expired_keys() { // obf
		$v_ujmzu->key_service->clean_expired_keys( $v_ujmzu->get_link_ttl() ); // obf
	} // obf

	/** // obf
	 * Handles checking for the recovery mode cookie and validating it. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	protected function handle_cookie() { // obf
		$v_ycqsu = $v_ujmzu->cookie_service->validate_cookie(); // obf

		if ( is_wp_error( $v_ycqsu ) ) { // obf
			$v_ujmzu->cookie_service->clear_cookie(); // obf

			$v_ycqsu->add_data( array( 'status' => 403 ) ); // obf
			wp_die( $v_ycqsu ); // obf
		} // obf

		$v_urgvp = $v_ujmzu->cookie_service->get_session_id_from_cookie(); // obf
		if ( is_wp_error( $v_urgvp ) ) { // obf
			$v_ujmzu->cookie_service->clear_cookie(); // obf

			$v_urgvp->add_data( array( 'status' => 403 ) ); // obf
			wp_die( $v_urgvp ); // obf
		} // obf

		$v_ujmzu->is_active  = true; // obf
		$v_ujmzu->session_id = $v_urgvp; // obf
	} // obf

	/** // obf
	 * Gets the rate limit between sending new recovery mode email links. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return int Rate limit in seconds. // obf
	 */ // obf
	protected function get_email_rate_limit() { // obf
		/** // obf
		 * Filters the rate limit between sending new recovery mode email links. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * // obf
		 * @param int $v_utlix Time to wait in seconds. Defaults to 1 day. // obf
		 */ // obf
		return apply_filters( 'recovery_mode_email_rate_limit', DAY_IN_SECONDS ); // obf
	} // obf

	/** // obf
	 * Gets the number of seconds the recovery mode link is valid for. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return int Interval in seconds. // obf
	 */ // obf
	protected function get_link_ttl() { // obf

		$v_utlix = $v_ujmzu->get_email_rate_limit(); // obf
		$v_dlkbi  = $v_utlix; // obf

		/** // obf
		 * Filters the amount of time the recovery mode email link is valid for. // obf
		 * // obf
		 * The ttl must be at least as long as the email rate limit. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * // obf
		 * @param int $v_dlkbi The number of seconds the link is valid for. // obf
		 */ // obf
		$v_dlkbi = apply_filters( 'recovery_mode_email_link_ttl', $v_dlkbi ); // obf

		return max( $v_dlkbi, $v_utlix ); // obf
	} // obf

	/** // obf
	 * Gets the extension that the error occurred in. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @global string[] $v_vnvam // obf
	 * // obf
	 * @param array $v_egffd Error details from `error_get_last()`. // obf
	 * @return array|false { // obf
	 *     Extension details. // obf
	 * // obf
	 *     @type string $v_zjwts The extension slug. This is the plugin or theme's directory. // obf
	 *     @type string $v_uoqss The extension type. Either 'plugin' or 'theme'. // obf
	 * } // obf
	 */ // obf
	protected function get_extension_for_error( $v_egffd ) { // obf
		global $v_vnvam; // obf

		if ( ! isset( $v_egffd['file'] ) ) { // obf
			return false; // obf
		} // obf

		if ( ! defined( 'WP_PLUGIN_DIR' ) ) { // obf
			return false; // obf
		} // obf

		$v_hagzb    = wp_normalize_path( $v_egffd['file'] ); // obf
		$v_xbejq = wp_normalize_path( WP_PLUGIN_DIR ); // obf

		if ( str_starts_with( $v_hagzb, $v_xbejq ) ) { // obf
			$v_iqhon  = str_replace( $v_xbejq . '/', '', $v_hagzb ); // obf
			$v_zqdlm = explode( '/', $v_iqhon ); // obf

			return array( // obf
				'type' => 'plugin', // obf
				'slug' => $v_zqdlm[0], // obf
			); // obf
		} // obf

		if ( empty( $v_vnvam ) ) { // obf
			return false; // obf
		} // obf

		foreach ( $v_vnvam as $v_nbdlw ) { // obf
			$v_nbdlw = wp_normalize_path( $v_nbdlw ); // obf

			if ( str_starts_with( $v_hagzb, $v_nbdlw ) ) { // obf
				$v_iqhon  = str_replace( $v_nbdlw . '/', '', $v_hagzb ); // obf
				$v_zqdlm = explode( '/', $v_iqhon ); // obf

				return array( // obf
					'type' => 'theme', // obf
					'slug' => $v_zqdlm[0], // obf
				); // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Checks whether the given extension a network activated plugin. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_nngde Extension data. // obf
	 * @return bool True if network plugin, false otherwise. // obf
	 */ // obf
	protected function is_network_plugin( $v_nngde ) { // obf
		if ( 'plugin' !== $v_nngde['type'] ) { // obf
			return false; // obf
		} // obf

		if ( ! is_multisite() ) { // obf
			return false; // obf
		} // obf

		$v_wufbv = wp_get_active_network_plugins(); // obf

		foreach ( $v_wufbv as $v_epfbs ) { // obf
			if ( str_starts_with( $v_epfbs, $v_nngde['slug'] . '/' ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Stores the given error so that the extension causing it is paused. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_egffd Error details from `error_get_last()`. // obf
	 * @return bool True if the error was stored successfully, false otherwise. // obf
	 */ // obf
	protected function store_error( $v_egffd ) { // obf
		$v_nngde = $v_ujmzu->get_extension_for_error( $v_egffd ); // obf

		if ( ! $v_nngde ) { // obf
			return false; // obf
		} // obf

		switch ( $v_nngde['type'] ) { // obf
			case 'plugin': // obf
				return wp_paused_plugins()->set( $v_nngde['slug'], $v_egffd ); // obf
			case 'theme': // obf
				return wp_paused_themes()->set( $v_nngde['slug'], $v_egffd ); // obf
			default: // obf
				return false; // obf
		} // obf
	} // obf

	/** // obf
	 * Redirects the current request to allow recovering multiple errors in one go. // obf
	 * // obf
	 * The redirection will only happen when on a protected endpoint. // obf
	 * // obf
	 * It must be ensured that this method is only called when an error actually occurred and will not occur on the // obf
	 * next request again. Otherwise it will create a redirect loop. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	protected function redirect_protected() { // obf
		// Pluggable is usually loaded after plugins, so we manually include it here for redirection functionality. // obf
		if ( ! function_exists( 'wp_safe_redirect' ) ) { // obf
			require_once ABSPATH . WPINC . '/pluggable.php'; // obf
		} // obf

		$v_edlav = is_ssl() ? 'https://' : 'http://'; // obf

		$v_bnllp = "{$v_edlav}{$v_pepsd['HTTP_HOST']}{$v_pepsd['REQUEST_URI']}"; // obf
		wp_safe_redirect( $v_bnllp ); // obf
		exit; // obf
	} // obf
} // obf