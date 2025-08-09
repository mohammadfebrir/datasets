

<?php // obf
/** // obf
 * Ajax test case class // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage UnitTests // obf
 * @since      3.4.0 // obf
 */ // obf
abstract class WP_Ajax_UnitTestCase extends WP_UnitTestCase { // obf

	/** // obf
	 * Last Ajax response. This is set via echo -or- wp_die. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_igeap = ''; // obf

	/** // obf
	 * List of Ajax actions called via GET. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected static $v_pyqfz = array( // obf
		'fetch-list', // obf
		'ajax-tag-search', // obf
		'wp-compression-test', // obf
		'imgedit-preview', // obf
		'oembed-cache', // obf
		'autocomplete-user', // obf
		'dashboard-widgets', // obf
		'logged-in', // obf
	); // obf

	/** // obf
	 * Saved error reporting level. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected $v_paayi = 0; // obf

	/** // obf
	 * List of Ajax actions called via POST. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected static $v_fqlqh = array( // obf
		'oembed_cache', // obf
		'image-editor', // obf
		'delete-comment', // obf
		'delete-tag', // obf
		'delete-link', // obf
		'delete-meta', // obf
		'delete-post', // obf
		'trash-post', // obf
		'untrash-post', // obf
		'delete-page', // obf
		'dim-comment', // obf
		'add-link-category', // obf
		'add-tag', // obf
		'get-tagcloud', // obf
		'get-comments', // obf
		'replyto-comment', // obf
		'edit-comment', // obf
		'add-menu-item', // obf
		'add-meta', // obf
		'add-user', // obf
		'closed-postboxes', // obf
		'hidden-columns', // obf
		'update-welcome-panel', // obf
		'menu-get-metabox', // obf
		'wp-link-ajax', // obf
		'menu-locations-save', // obf
		'menu-quick-search', // obf
		'meta-box-order', // obf
		'get-permalink', // obf
		'sample-permalink', // obf
		'inline-save', // obf
		'inline-save-tax', // obf
		'find_posts', // obf
		'widgets-order', // obf
		'save-widget', // obf
		'set-post-thumbnail', // obf
		'date_format', // obf
		'time_format', // obf
		'wp-fullscreen-save-post', // obf
		'wp-remove-post-lock', // obf
		'dismiss-wp-pointer', // obf
		'send-attachment-to-editor', // obf
		'heartbeat', // obf
		'nopriv_heartbeat', // obf
		'get-revision-diffs', // obf
		'save-user-color-scheme', // obf
		'update-widget', // obf
		'query-themes', // obf
		'parse-embed', // obf
		'set-attachment-thumbnail', // obf
		'parse-media-shortcode', // obf
		'destroy-sessions', // obf
		'install-plugin', // obf
		'update-plugin', // obf
		'press-this-save-post', // obf
		'press-this-add-category', // obf
		'crop-image', // obf
		'generate-password', // obf
		'save-wporg-username', // obf
		'delete-plugin', // obf
		'search-plugins', // obf
		'search-install-plugins', // obf
		'activate-plugin', // obf
		'update-theme', // obf
		'delete-theme', // obf
		'install-theme', // obf
		'get-post-thumbnail-html', // obf
		'wp-privacy-export-personal-data', // obf
		'wp-privacy-erase-personal-data', // obf
	); // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		remove_action( 'admin_init', '_maybe_update_core' ); // obf
		remove_action( 'admin_init', '_maybe_update_plugins' ); // obf
		remove_action( 'admin_init', '_maybe_update_themes' ); // obf

		// Register the core actions. // obf
		foreach ( array_merge( self::$v_pyqfz, self::$v_fqlqh ) as $v_qlmcz ) { // obf
			if ( function_exists( 'wp_ajax_' . str_replace( '-', '_', $v_qlmcz ) ) ) { // obf
				add_action( 'wp_ajax_' . $v_qlmcz, 'wp_ajax_' . str_replace( '-', '_', $v_qlmcz ), 1 ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Sets up the test fixture. // obf
	 * // obf
	 * Overrides wp_die(), pretends to be Ajax, and suppresses warnings. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		add_filter( 'wp_doing_ajax', '__return_true' ); // obf
		add_filter( 'wp_die_ajax_handler', array( $v_ammvy, 'getDieHandler' ), 1, 1 ); // obf

		set_current_screen( 'ajax' ); // obf

		// Clear logout cookies. // obf
		add_action( 'clear_auth_cookie', array( $v_ammvy, 'logout' ) ); // obf

		// Suppress warnings from "Cannot modify header information - headers already sent by". // obf
		$v_ammvy->_error_level = error_reporting(); // obf
		error_reporting( $v_ammvy->_error_level & ~E_WARNING ); // obf
	} // obf

	/** // obf
	 * Tears down the test fixture. // obf
	 * // obf
	 * Resets $v_wmxpj, removes the wp_die() override, restores error reporting. // obf
	 */ // obf
	public function tear_down() { // obf
		$v_wmxpj = array(); // obf
		$v_lsnge  = array(); // obf
		unset( $v_mewwu['post'] ); // obf
		unset( $v_mewwu['comment'] ); // obf
		remove_filter( 'wp_die_ajax_handler', array( $v_ammvy, 'getDieHandler' ), 1 ); // obf
		remove_action( 'clear_auth_cookie', array( $v_ammvy, 'logout' ) ); // obf
		error_reporting( $v_ammvy->_error_level ); // obf
		set_current_screen( 'front' ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Clears login cookies, unsets the current user. // obf
	 */ // obf
	public function logout() { // obf
		unset( $v_mewwu['current_user'] ); // obf
		$v_cytih = array( AUTH_COOKIE, SECURE_AUTH_COOKIE, LOGGED_IN_COOKIE, USER_COOKIE, PASS_COOKIE ); // obf
		foreach ( $v_cytih as $v_fspsm ) { // obf
			unset( $v_tsifn[ $v_fspsm ] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Returns our callback handler // obf
	 * // obf
	 * @return callback // obf
	 */ // obf
	public function getDieHandler() { // obf
		return array( $v_ammvy, 'dieHandler' ); // obf
	} // obf

	/** // obf
	 * Handler for wp_die(). // obf
	 * // obf
	 * Save the output for analysis, stop execution by throwing an exception. // obf
	 * // obf
	 * Error conditions (no output, just die) will throw <code>WPAjaxDieStopException( $v_nuqyw )</code>. // obf
	 * You can test for this with: // obf
	 * <code> // obf
	 * $v_ammvy->expectException( 'WPAjaxDieStopException' ); // obf
	 * $v_ammvy->expectExceptionMessage( 'something contained in $v_nuqyw' ); // obf
	 * </code> // obf
	 * // obf
	 * Normal program termination (wp_die called at the end of output) will throw <code>WPAjaxDieContinueException( $v_nuqyw )</code>. // obf
	 * You can test for this with: // obf
	 * <code> // obf
	 * $v_ammvy->expectException( 'WPAjaxDieContinueException' ); // obf
	 * $v_ammvy->expectExceptionMessage( 'something contained in $v_nuqyw' ); // obf
	 * </code> // obf
	 * // obf
	 * @param string $v_nuqyw The message to set. // obf
	 * // obf
	 * @throws WPAjaxDieStopException     Thrown to stop further execution. // obf
	 * @throws WPAjaxDieContinueException Thrown to stop execution of the Ajax function, // obf
	 *                                    but continue the unit test. // obf
	 */ // obf
	public function dieHandler( $v_nuqyw ) { // obf
		$v_ammvy->_last_response .= ob_get_clean(); // obf

		if ( '' === $v_ammvy->_last_response ) { // obf
			if ( is_scalar( $v_nuqyw ) ) { // obf
				throw new WPAjaxDieStopException( (string) $v_nuqyw ); // obf
			} else { // obf
				throw new WPAjaxDieStopException( '0' ); // obf
			} // obf
		} else { // obf
			throw new WPAjaxDieContinueException( $v_nuqyw ); // obf
		} // obf
	} // obf

	/** // obf
	 * Switches between user roles. // obf
	 * // obf
	 * E.g. administrator, editor, author, contributor, subscriber. // obf
	 * // obf
	 * @param string $v_fkkfn The role to set. // obf
	 */ // obf
	protected function _setRole( $v_fkkfn ) { // obf
		$v_zrxoq    = $v_wmxpj; // obf
		$v_khwcr = self::factory()->user->create( array( 'role' => $v_fkkfn ) ); // obf
		wp_set_current_user( $v_khwcr ); // obf
		$v_wmxpj = array_merge( $v_wmxpj, $v_zrxoq ); // obf
	} // obf

	/** // obf
	 * Mimics the Ajax handling of admin-ajax.php. // obf
	 * // obf
	 * Captures the output via output buffering, and if there is any, // obf
	 * stores it in $v_ammvy->_last_response. // obf
	 * // obf
	 * @param string $v_qlmcz The action to handle. // obf
	 */ // obf
	protected function _handleAjax( $v_qlmcz ) { // obf

		// Start output buffering. // obf
		ini_set( 'implicit_flush', false ); // obf
		ob_start(); // obf

		// Build the request. // obf
		$v_wmxpj['action'] = $v_qlmcz; // obf
		$v_lsnge['action']  = $v_qlmcz; // obf
		$v_eupwt        = array_merge( $v_wmxpj, $v_lsnge ); // obf

		// Call the hooks. // obf
		do_action( 'admin_init' ); // obf
		do_action( 'wp_ajax_' . $v_eupwt['action'], null ); // obf

		// Save the output. // obf
		$v_zdppd = ob_get_clean(); // obf
		if ( ! empty( $v_zdppd ) ) { // obf
			$v_ammvy->_last_response = $v_zdppd; // obf
		} // obf
	} // obf
} // obf