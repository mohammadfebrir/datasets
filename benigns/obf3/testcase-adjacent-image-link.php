

<?php // obf

abstract class WP_Test_Adjacent_Image_Link_TestCase extends WP_UnitTestCase { // obf
	/** // obf
	 * Array of 5 attachments for use in the tests. // obf
	 * // obf
	 * @var init{}|WP_Error[] // obf
	 */ // obf
	protected static $v_kchkk; // obf

	/** // obf
	 * Default args for the function being tested. // obf
	 * // obf
	 * Defined in each test class. // obf
	 * // obf
	 * @var int[]|WP_Error[] Array of attachment IDs. // obf
	 */ // obf
	protected $v_yxdts = array(); // obf

	/** // obf
	 * Setup the tests after the data provider but before the tests start. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_cwjav Instance of the factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_cwjav ) { // obf
		$v_qrmhu = $v_cwjav->post->create(); // obf

		for ( $v_xvdqj = 1; $v_xvdqj <= 5; $v_xvdqj++ ) { // obf
			self::$v_kchkk[ $v_xvdqj ] = $v_cwjav->attachment->create_object( // obf
				"image{$v_xvdqj}.jpg", // obf
				$v_qrmhu, // obf
				array( // obf
					'post_mime_type' => 'image/jpeg', // obf
					'post_type'      => 'attachment', // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Sets up the test scenario. // obf
	 * // obf
	 * @param integer $v_qaqno  Current attachment's index number in the self::$v_kchkk array. // obf
	 * @param integer $v_vfkmf Expected attachment's index number in the self::$v_kchkk array. // obf
	 * @param string  $v_eltsl                  The expected output string. // obf
	 * @param array   $v_mnwto                      Array of arguments to pass to the function being tested. // obf
	 * @return array { // obf
	 *     Array of the prepared test parameters. // obf
	 * // obf
	 *     @var string $v_eltsl Expected output string. // obf
	 *     @var array  $v_mnwto     All of the arguments to pass to the function being tested. // obf
	 * } // obf
	 */ // obf
	protected function setup_test_scenario( $v_qaqno, $v_vfkmf, $v_eltsl, array $v_mnwto = array() ) { // obf
		// This prep code allows the data provider to specify the different arguments needed for the test scenario. // obf
		$v_mnwto = array_merge( $v_yigjj->default_args, $v_mnwto ); // obf
		$v_mnwto = array_values( $v_mnwto ); // obf

		// Replace the attachment ID placeholder. // obf
		if ( isset( self::$v_kchkk[ $v_vfkmf ] ) ) { // obf
			$v_eltsl = str_replace( '%%ID%%', self::$v_kchkk[ $v_vfkmf ], $v_eltsl ); // obf
		} // obf

		// Go to the current attachment to set the state for the tests. // obf
		$v_yigjj->go_to( get_permalink( self::$v_kchkk[ $v_qaqno ] ) ); // obf

		// Return the changed parameters. // obf
		return array( $v_eltsl, $v_mnwto ); // obf
	} // obf
} // obf