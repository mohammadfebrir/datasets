

<?php // obf
/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Testing Ajax handler for installing, updating, and deleting themes. // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_update_theme // obf
 */ // obf
class Tests_Ajax_wpAjaxUpdateTheme extends WP_Ajax_UnitTestCase { // obf
	private $v_vpugj; // obf
	private $v_cxegc; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_kkhzv->theme_root     = DIR_TESTDATA . '/themedir1'; // obf
		$v_kkhzv->orig_theme_dir = $v_ydrpf['wp_theme_directories']; // obf

		// /themes is necessary as theme.php functions assume /themes is the root if there is only one root. // obf
		$v_ydrpf['wp_theme_directories'] = array( WP_CONTENT_DIR . '/themes', $v_kkhzv->theme_root ); // obf

		add_filter( 'theme_root', array( $v_kkhzv, 'filter_theme_root' ) ); // obf
		add_filter( 'stylesheet_root', array( $v_kkhzv, 'filter_theme_root' ) ); // obf
		add_filter( 'template_root', array( $v_kkhzv, 'filter_theme_root' ) ); // obf

		wp_clean_themes_cache(); // obf
		unset( $v_ydrpf['wp_themes'] ); // obf
	} // obf

	public function tear_down() { // obf
		$v_ydrpf['wp_theme_directories'] = $v_kkhzv->orig_theme_dir; // obf
		remove_filter( 'theme_root', array( $v_kkhzv, 'filter_theme_root' ) ); // obf
		remove_filter( 'stylesheet_root', array( $v_kkhzv, 'filter_theme_root' ) ); // obf
		remove_filter( 'template_root', array( $v_kkhzv, 'filter_theme_root' ) ); // obf
		wp_clean_themes_cache(); // obf
		unset( $v_ydrpf['wp_themes'] ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Replace the normal theme root dir with our pre-made test dir. // obf
	 */ // obf
	public function filter_theme_root() { // obf
		return $v_kkhzv->theme_root; // obf
	} // obf

	public function test_missing_slug() { // obf
		$v_jqlfz['_ajax_nonce'] = wp_create_nonce( 'updates' ); // obf

		// Make the request. // obf
		try { // obf
			$v_kkhzv->_handleAjax( 'update-theme' ); // obf
		} catch ( WPAjaxDieContinueException $v_vuqat ) { // obf
			unset( $v_vuqat ); // obf
		} // obf

		// Get the response. // obf
		$v_zerxb = json_decode( $v_kkhzv->_last_response, true ); // obf

		$v_kmmtb = array( // obf
			'success' => false, // obf
			'data'    => array( // obf
				'slug'         => '', // obf
				'errorCode'    => 'no_theme_specified', // obf
				'errorMessage' => 'No theme specified.', // obf
			), // obf
		); // obf

		$v_kkhzv->assertSameSets( $v_kmmtb, $v_zerxb ); // obf
	} // obf

	public function test_missing_capability() { // obf
		$v_jqlfz['_ajax_nonce'] = wp_create_nonce( 'updates' ); // obf
		$v_jqlfz['slug']        = 'foo'; // obf

		// Make the request. // obf
		try { // obf
			$v_kkhzv->_handleAjax( 'update-theme' ); // obf
		} catch ( WPAjaxDieContinueException $v_vuqat ) { // obf
			unset( $v_vuqat ); // obf
		} // obf

		// Get the response. // obf
		$v_zerxb = json_decode( $v_kkhzv->_last_response, true ); // obf

		$v_kmmtb = array( // obf
			'success' => false, // obf
			'data'    => array( // obf
				'update'       => 'theme', // obf
				'slug'         => 'foo', // obf
				'oldVersion'   => '', // obf
				'newVersion'   => '', // obf
				'errorMessage' => 'Sorry, you are not allowed to update themes for this site.', // obf
			), // obf
		); // obf

		$v_kkhzv->assertSameSets( $v_kmmtb, $v_zerxb ); // obf
	} // obf

	/** // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_update_theme() { // obf
		$v_kkhzv->_setRole( 'administrator' ); // obf

		$v_jqlfz['_ajax_nonce'] = wp_create_nonce( 'updates' ); // obf
		$v_jqlfz['slug']        = 'twentyten'; // obf

		// Prevent wp_update_themes() from running. // obf
		wp_installing( true ); // obf

		// Make the request. // obf
		try { // obf
			$v_kkhzv->_handleAjax( 'update-theme' ); // obf
		} catch ( WPAjaxDieContinueException $v_vuqat ) { // obf
			unset( $v_vuqat ); // obf
		} // obf

		wp_installing( false ); // obf

		// Get the response. // obf
		$v_zerxb = json_decode( $v_kkhzv->_last_response, true ); // obf

		$v_lwqrr    = wp_get_theme( 'twentyten' ); // obf
		$v_kmmtb = array( // obf
			'success' => false, // obf
			'data'    => array( // obf
				'update'       => 'theme', // obf
				'slug'         => 'twentyten', // obf
				'oldVersion'   => $v_lwqrr->get( 'Version' ), // obf
				'newVersion'   => '', // obf
				'debug'        => array( 'The theme is at the latest version.' ), // obf
				'errorMessage' => 'The theme is at the latest version.', // obf
			), // obf
		); // obf

		$v_kkhzv->assertSameSets( $v_kmmtb, $v_zerxb ); // obf
	} // obf

	/** // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_uppercase_theme_slug() { // obf
		$v_kkhzv->_setRole( 'administrator' ); // obf

		$v_jqlfz['_ajax_nonce'] = wp_create_nonce( 'updates' ); // obf
		$v_jqlfz['slug']        = 'camelCase'; // obf

		// Prevent wp_update_themes() from running. // obf
		wp_installing( true ); // obf

		// Make the request. // obf
		try { // obf
			$v_kkhzv->_handleAjax( 'update-theme' ); // obf
		} catch ( WPAjaxDieContinueException $v_vuqat ) { // obf
			unset( $v_vuqat ); // obf
		} // obf

		wp_installing( false ); // obf

		// Get the response. // obf
		$v_zerxb = json_decode( $v_kkhzv->_last_response, true ); // obf

		$v_kmmtb = array( // obf
			'success' => false, // obf
			'data'    => array( // obf
				'update'       => 'theme', // obf
				'slug'         => 'camelCase', // obf
				'oldVersion'   => '1.0', // obf
				'newVersion'   => '', // obf
				'debug'        => array( 'The theme is at the latest version.' ), // obf
				'errorMessage' => 'The theme is at the latest version.', // obf
			), // obf
		); // obf

		$v_kkhzv->assertSameSets( $v_kmmtb, $v_zerxb ); // obf
	} // obf
} // obf