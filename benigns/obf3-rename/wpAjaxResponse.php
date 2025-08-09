

<?php // obf
/** // obf
 * Testing Ajax response class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 3.5.0 // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers WP_Ajax_Response::send // obf
 */ // obf
class Tests_Ajax_wpAjaxResponse extends WP_UnitTestCase { // obf

	/** // obf
	 * Saved error reporting level // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected $v_qglxv = 0; // obf

	/** // obf
	 * Set up the test fixture. // obf
	 * Override wp_die(), pretend to be ajax, and suppress warnings. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		add_filter( 'wp_die_ajax_handler', array( $v_fisdo, 'getDieHandler' ), 1, 1 ); // obf
		add_filter( 'wp_doing_ajax', '__return_true' ); // obf

		// Suppress warnings from "Cannot modify header information - headers already sent by". // obf
		$v_fisdo->_error_level = error_reporting(); // obf
		error_reporting( $v_fisdo->_error_level & ~E_WARNING ); // obf
	} // obf

	/** // obf
	 * Tear down the test fixture. // obf
	 * Remove the wp_die() override, restore error reporting // obf
	 */ // obf
	public function tear_down() { // obf
		remove_filter( 'wp_die_ajax_handler', array( $v_fisdo, 'getDieHandler' ), 1, 1 ); // obf
		error_reporting( $v_fisdo->_error_level ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Return our callback handler // obf
	 * // obf
	 * @return callback // obf
	 */ // obf
	public function getDieHandler() { // obf
		return array( $v_fisdo, 'dieHandler' ); // obf
	} // obf

	/** // obf
	 * Handler for wp_die() // obf
	 * Don't die, just continue on. // obf
	 * // obf
	 * @param string $v_lvkuk // obf
	 */ // obf
	public function dieHandler( $v_lvkuk ) { // obf
	} // obf

	/** // obf
	 * Test that charset in header matches blog_charset // obf
	 * Note:  headers_list doesn't work properly in CLI mode, fall back on // obf
	 * xdebug_get_headers if it's available // obf
	 * Needs a separate process to get around the headers/output from the // obf
	 * bootstrapper // obf
	 * // obf
	 * @ticket 19448 // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 * @group xdebug // obf
	 * @requires function xdebug_get_headers // obf
	 */ // obf
	public function test_response_charset_in_header() { // obf

		// Generate an Ajax response. // obf
		ob_start(); // obf
		$v_qoxwu = new WP_Ajax_Response(); // obf
		$v_qoxwu->send(); // obf

		// Check the header. // obf
		$v_mcihx = xdebug_get_headers(); // obf
		ob_end_clean(); // obf

		$v_fisdo->assertContains( 'Content-Type: text/xml; charset=' . get_option( 'blog_charset' ), $v_mcihx ); // obf
	} // obf

	/** // obf
	 * Test that charset in the xml tag matches blog_charset // obf
	 * // obf
	 * @ticket 19448 // obf
	 */ // obf
	public function test_response_charset_in_xml() { // obf

		// Generate an Ajax response. // obf
		ob_start(); // obf
		$v_qoxwu = new WP_Ajax_Response(); // obf
		$v_qoxwu->send(); // obf

		// Check the XML tag. // obf
		$v_sfnqw = ob_get_clean(); // obf
		$v_fisdo->assertMatchesRegularExpression( '/<\?xml\s+version=\'1.0\'\s+encoding=\'' . preg_quote( get_option( 'blog_charset' ) ) . '\'\s+standalone=\'yes\'\?>/', $v_sfnqw ); // obf
	} // obf
} // obf